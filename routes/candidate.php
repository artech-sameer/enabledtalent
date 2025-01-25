<?php
use App\Http\Controllers\Candidate\Auth\CandidateLoginController;
use App\Http\Controllers\Candidate\Auth\CandidateRegisterController;
use App\Http\Controllers\Candidate\DashboardController;
use Illuminate\Support\Facades\Route;


Route::get('/', function() {
    return redirect()->route('candidate.login.form');
}); 

Route::middleware('candidate.guest')->group(function() {
    Route::controller(CandidateRegisterController::class)->group(function(){
        Route::get('registration', 'registrationForm')->name('registration.form');
        Route::post('registration', 'registration')->name('registration.post');

        Route::get('auth/google','redirectToGoogle')->name('auth.google');
        Route::get('auth/google/callback', 'handleGoogleCallback');
   });

    Route::controller(CandidateLoginController::class)->group(function(){

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


Route::middleware('candidate.auth')->group(function() {
    Route::controller(CandidateLoginController::class)->group(function(){
        Route::get('logout', 'logout')->name('logout');
    });

    Route::controller(DashboardController::class)->name('dashboard.')->group(function(){
        Route::get('dashboard', 'index')->name('index');
    });
});

Route::fallback(function () {
    return response()->view('admin.errors.404', [], 404);
});