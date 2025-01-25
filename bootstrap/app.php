<?php
use App\Http\Middleware\Authorize;
use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;
use Illuminate\Support\Facades\Route;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        channels: __DIR__.'/../routes/channels.php',
        health: '/up',
        then: function () {
            Route::middleware('web')
                ->prefix('admin')
                ->name('admin.')
                ->group(base_path('routes/admin.php'));

            Route::middleware('web')
                ->prefix('company')
                ->name('company.')
                ->group(base_path('routes/company.php'));

            Route::middleware('web')
                ->prefix('candidate')
                ->name('candidate.')
                ->group(base_path('routes/candidate.php'));
        },
    )
    ->withMiddleware(function (Middleware $middleware) {
        $middleware->appendToGroup('admin', [
            \App\Http\Middleware\Admin\RedirectIfAuthenticated::class,
            \App\Http\Middleware\Admin\RedirectIfNotAuthenticated::class,
        ]);
        $middleware->appendToGroup('company', [
            \App\Http\Middleware\Company\RedirectIfAuthenticated::class,
            \App\Http\Middleware\Company\RedirectIfNotAuthenticated::class,
        ]);
        $middleware->appendToGroup('candidate', [
            \App\Http\Middleware\candidate\RedirectIfAuthenticated::class,
            \App\Http\Middleware\candidate\RedirectIfNotAuthenticated::class,
        ]);
        $middleware->appendToGroup('web', [
            \App\Http\Middleware\ComingSoonMiddleware::class,  // Add this line
        ]);

        $middleware->alias([
            'admin.guest' => \App\Http\Middleware\Admin\RedirectIfAuthenticated::class,
            'admin.auth' => \App\Http\Middleware\Admin\RedirectIfNotAuthenticated::class,
            'can' => Authorize::class,
            'company.guest' => \App\Http\Middleware\Company\RedirectIfAuthenticated::class,
            'company.auth' => \App\Http\Middleware\Company\RedirectIfNotAuthenticated::class,
            'candidate.guest' => \App\Http\Middleware\Candidate\RedirectIfAuthenticated::class,
            'candidate.auth' => \App\Http\Middleware\Candidate\RedirectIfNotAuthenticated::class,
            'coming_soon' => \App\Http\Middleware\ComingSoonMiddleware::class,
        ]);
    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();
