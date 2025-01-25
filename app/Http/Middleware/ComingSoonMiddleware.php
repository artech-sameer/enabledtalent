<?php
namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ComingSoonMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        $isComingSoonEnabled = env('COMING_SOON_ENABLED', false);

        if ($isComingSoonEnabled && !$request->is(['coming-soon', 'coming-soon/password', 'admin/*'])) {
            if (Auth::guard('admin')->check()) {
                return $next($request);
            }

            if ($request->session()->has('coming_soon_passed')) {
                return $next($request);
            }

            return redirect()->route('web.coming-soon');
        }

        return $next($request);
    }
}
