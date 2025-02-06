<?php
use App\Http\Controllers\Web\ComingSoonController;
use App\Http\Controllers\Web\CommonController;
use App\Http\Controllers\Web\PageController;
use Illuminate\Support\Facades\Route;

Route::controller(ComingSoonController::class)->name('web.')->group(function () {
    Route::get('coming-soon', 'comingSoon')->name('coming-soon');
    Route::post('coming-soon/password', 'comingSoonPassword')->name('coming-soon.password');
});


//Common
 Route::controller(CommonController::class)->name('web.common.')->prefix('common')->group(function(){
    Route::get('country/list', 'countryList')->name('country.list');
    Route::get('state/list/{country_id}', 'StateList')->name('state.list');
    Route::get('district/list/{state_id}', 'districtList')->name('district.list');
    Route::get('city/list/{district_id}', 'cityList')->name('city.list');
    Route::get('company/industries', 'industries')->name('company.industries');
});

Route::middleware(['web', 'coming_soon'])->controller(PageController::class)->name('web.')->group(function () {
    Route::get('/', 'home')->name('home');
    Route::get('sign-in', 'signin')->name('signin');
});
