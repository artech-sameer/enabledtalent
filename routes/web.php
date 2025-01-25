<?php
use App\Http\Controllers\Web\ComingSoonController;
use App\Http\Controllers\Web\PageController;
use Illuminate\Support\Facades\Route;

Route::controller(ComingSoonController::class)->name('web.')->group(function () {
    Route::get('coming-soon', 'comingSoon')->name('coming-soon');
    Route::post('coming-soon/password', 'comingSoonPassword')->name('coming-soon.password');
});

Route::middleware(['web', 'coming_soon'])->controller(PageController::class)->name('web.')->group(function () {
    Route::get('/', 'home')->name('home');
});
