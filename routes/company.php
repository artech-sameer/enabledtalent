<?php
use App\Http\Controllers\Company\Auth\CompanyLoginController;
use App\Http\Controllers\Company\Auth\CompanyRegisterController;
use App\Http\Controllers\Company\DashboardController;
use Illuminate\Support\Facades\Route;


Route::get('/', function() {
    return redirect()->route('company.login.form');
}); 

Route::middleware('company.guest')->group(function() {
    Route::controller(CompanyRegisterController::class)->group(function(){
        Route::get('registration', 'registrationForm')->name('registration.form');
        Route::post('registration', 'registration')->name('registration.post');

        Route::get('auth/google','redirectToGoogle')->name('auth.google');
        Route::get('auth/google/callback', 'handleGoogleCallback');
   });

    Route::controller(CompanyLoginController::class)->group(function(){

        Route::get('login', 'loginForm')->name('login.form');
        Route::post('login', 'login')->name('login.post');
     

        Route::get('password/reset', 'showLinkRequestForm')->name('password.request');
        Route::post('password/email', 'sendResetLinkEmail');

        Route::get('password/reset/{token}', 'showResetForm')->name('password.reset');
        Route::post('password/reset', 'reset')->name('password.request.sore');

        Route::get('new-password/{id}', 'newPasswordForm')->name('password.newPassword');
        Route::post('password/set-password/{id}', 'sepPassword')->name('password.setPassword');
   });
});


Route::middleware('company.auth')->group(function() {
    Route::controller(CompanyLoginController::class)->group(function(){
        Route::get('logout', 'logout')->name('logout');
    });

    Route::controller(DashboardController::class)->name('dashboard.')->group(function(){
        Route::get('dashboard', 'index')->name('index');
    });
});

Route::fallback(function () {
    return response()->view('admin.errors.404', [], 404);
});