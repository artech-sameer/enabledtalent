<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\AppSettingController;
use App\Http\Controllers\Admin\Auth\LoginController;
use App\Http\Controllers\Admin\BreadController;
use App\Http\Controllers\Admin\CityController;
use App\Http\Controllers\Admin\CommonController;
use App\Http\Controllers\Admin\CompanyController;
use App\Http\Controllers\Admin\CountryController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\DistrictController;
use App\Http\Controllers\Admin\IndustryController;
use App\Http\Controllers\Admin\JobCategoryController;
use App\Http\Controllers\Admin\MediaController;
use App\Http\Controllers\Admin\MenuController;
use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\SectionController;
use App\Http\Controllers\Admin\StateController;
use Illuminate\Support\Facades\Route;


Route::get('/', function() {
    //return "ok";
    return redirect()->route('admin.login.form');
    return view('admin.home');
});

Route::middleware('admin.guest')->group(function() {
    Route::get('login', [LoginController::class, 'showLoginForm'])->name('login.form');
    Route::post('login', [LoginController::class, 'login'])->name('login.post');
 

    Route::get('password/reset', [LoginController::class, 'showLinkRequestForm'])->name('password.request');
    Route::post('password/email', [LoginController::class, 'sendResetLinkEmail']);

    Route::get('password/reset/{token}', [LoginController::class, 'showResetForm'])->name('password.reset');
    Route::post('password/reset', [LoginController::class, 'reset'])->name('password.request.sore');

    Route::get('new-password/{id}', [LoginController::class, 'newPasswordForm'])->name('password.newPassword');
    Route::post('password/set-password/{id}', [LoginController::class, 'sepPassword'])->name('password.setPassword');

   
});


Route::middleware('admin.auth')->group(function() {


    Route::get('logout', [LoginController::class, 'logout'])->name('logout');
    Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard.index')->middleware('can:browse_dashboard');
    Route::post('dashboard', [DashboardController::class, 'filter'])->name('dashboard.filter')->middleware('can:browse_dashboard');



     //Common
     Route::controller(CommonController::class)->name('common.')->group(function(){
        Route::get('common/country/list', 'countryList')->name('country.list');
        Route::get('common/state/list/{country_id}', 'StateList')->name('state.list');
        Route::get('common/district/list/{state_id}', 'districtList')->name('district.list');
        Route::get('common/city/list/{district_id}', 'cityList')->name('city.list');
    });

     //Excell Download
     Route::controller(ExcelController::class)->prefix('download-excell')->name('excell-download.')->group(function(){
        Route::post('product-stock', 'productStock')->name('product-stock');
        Route::post('sale/export', 'saleExport')->name('sale');
        Route::post('product/ledger', 'productLedger')->name('product-ledger');
        Route::post('purchase-order/carton/position', 'cartonPosition')->name('carton-position');

        Route::get('purchase-order/sample/download', 'purchaseOrderSample')->name('purchase-order.sample');
    });

    //PDF Download
    Route::controller(PDFController::class)->prefix('download-pdf')->name('pdf.')->group(function(){
        Route::get('billing/{billings}', 'billing')->name('billing');
        Route::get('material-inward/{id}', 'materialInward')->name('material-inward');
        Route::get('material-order/{id}', 'materialOrder')->name('material-order');
        Route::get('issue/{id}', 'issue')->name('issue');
        Route::get('sale/{id}', 'sale')->name('sale');
    });

    


    Route::controller(BreadController::class)->group(function(){
        Route::get('bread', 'index')->name('bread.index')->middleware('can:browse_bread');
        Route::get('bread/create', 'create')->name('bread.create')->middleware('can:add_bread');
        Route::get('bread/{slug}/edit', 'edit')->name('bread.edit')->middleware('can:edit_bread');
        Route::put('bread/{bread}/update', 'update')->name('bread.update')->middleware('can:edit_bread');
        Route::delete('bread/{slug}/delete', 'destroy')->name('bread.destroy')->middleware('can:delete_bread');
        Route::post('bread', 'store')->name('bread.store')->middleware('can:add_bread');
    });


    Route::controller(RoleController::class)->group(function(){
        Route::get('role', 'index')->name('role.index')->middleware('can:browse_role');
        Route::get('role/create', 'create')->name('role.create')->middleware('can:add_role');
        Route::get('role/{role}/edit', 'edit')->name('role.edit')->middleware('can:edit_role');
        Route::post('role', 'store')->name('role.store')->middleware('can:add_role');
        Route::put('role/{role}', 'update')->name('role.update')->middleware('can:edit_role');
        Route::delete('role/{slug}/delete', 'destroy')->name('role.destroy')->middleware('can:delete_role');
    });


    Route::controller(MenuController::class)->group(function(){
        Route::get('menu', 'index')->name('menu.index')->middleware('can:browse_menu');
        Route::get('menu/create', 'create')->name('menu.create')->middleware('can:add_menu');
        Route::get('menu/{menu}/edit', 'edit')->name('menu.edit')->middleware('can:edit_menu');
        Route::post('menu', 'store')->name('menu.store')->middleware('can:add_menu');
        Route::put('menu/{menu}', 'update')->name('menu.update')->middleware('can:edit_menu');
        Route::delete('menu/{menu}', 'destroy')->name('menu.destroy')->middleware('can:delete_menu');
    });


     //Admin
    Route::controller(AdminController::class)->group(function(){
        Route::match(['get','patch'],'admin', 'index')->name('admin.index')->middleware('can:browse_admin');
        Route::get('admin/create', 'create')->name('admin.create')->middleware('can:add_admin');
        Route::get('admin/{admin}', 'show')->name('admin.show')->middleware('can:read_admin');
        Route::get('admin/{admin}/edit', 'edit')->name('admin.edit')->middleware('can:edit_admin');
        Route::post('admin', 'store')->name('admin.store')->middleware('can:add_admin');
        Route::put('admin/{admin}', 'update')->name('admin.update')->middleware('can:edit_admin');
        Route::delete('admin/{admin}/delete', 'destroy')->name('admin.destroy')->middleware('can:delete_admin');

        Route::get('profile', 'profile')->name('profile');
        Route::put('profile/update', 'profileUpdate')->name('profile.update');
        Route::put('profile/photo/update/{admin}', 'profilePhotoUpdate')->name('profile.photo.update');
        Route::put('profile/cover/photo/update/{admin}', 'profileCoverPhotoUpdate')->name('profile.cover.photo.update');

        Route::get('change-password/{admin}', 'changePassword')->name('change-password');
        Route::put('update-password/{admin}', 'updatePassword')->name('update-password');

        Route::post('admin/update/order', 'updateOrder')->name('admin.update.order')->middleware('can:add_admin');

    });

     //Site Setting
    Route::controller(AppSettingController::class)->group(function(){
        Route::get('get-all-country', 'getAllCountry')->name('app-setting.country')->middleware('can:browse_app_setting');
        Route::get('app-setting', 'index')->name('app-setting.index')->middleware('can:browse_app_setting');

        Route::post('app/basic-info', 'basicInfo')->name('app-setting.basic-info')->middleware('can:logo_app_setting');
        Route::post('app/contact-details', 'contactDetails')->name('app-setting.contact-details')->middleware('can:logo_app_setting');

        Route::post('app/logo', 'logo')->name('app-setting.logo')->middleware('can:logo_app_setting');
        Route::get('access-control', 'index')->name('access-control.index')->middleware('can:browse_access_control');
    });


    //media
    Route::controller(MediaController::class)->group(function(){
        Route::match(['get','patch'],'media', 'index')->name('media.index')->middleware('can:browse_media');
        Route::get('media/create', 'create')->name('media.create')->middleware('can:add_media');
        Route::get('media/{media}', 'show')->name('media.show')->middleware('can:read_media');
        Route::get('media/{media}/edit', 'edit')->name('media.edit')->middleware('can:edit_media');
        Route::post('media', 'store')->name('media.store')->middleware('can:add_media');
        Route::put('media/{media}', 'update')->name('media.update')->middleware('can:edit_media');
        Route::delete('media/{media}/delete', 'destroy')->name('media.destroy')->middleware('can:delete_media');
        Route::get('media/get/multiple', 'getAllMediaMultiple')->name('media.get.multiple');
        Route::get('media/get/single', 'getAllMediaSingle')->name('media.get.single');
    });


    //country
    Route::controller(CountryController::class)->group(function(){
        Route::match(['get','patch'],'country', 'index')->name('country.index')->middleware('can:browse_country');
        Route::get('country/create', 'create')->name('country.create')->middleware('can:add_country');
        Route::get('country/{id}', 'show')->name('country.show')->middleware('can:read_country');
        Route::get('country/{id}/edit', 'edit')->name('country.edit')->middleware('can:edit_country');
        Route::post('country', 'store')->name('country.store')->middleware('can:add_country');
        Route::put('country/{id}', 'update')->name('country.update')->middleware('can:edit_country');
        Route::delete('country/{id}/delete', 'destroy')->name('country.destroy')->middleware('can:delete_country');
    });

    //country
    Route::controller(CountryController::class)->group(function(){
        Route::match(['get','patch'],'country', 'index')->name('country.index')->middleware('can:browse_country');
        Route::get('country/create', 'create')->name('country.create')->middleware('can:add_country');
        Route::get('country/{id}', 'show')->name('country.show')->middleware('can:read_country');
        Route::get('country/{id}/edit', 'edit')->name('country.edit')->middleware('can:edit_country');
        Route::post('country', 'store')->name('country.store')->middleware('can:add_country');
        Route::put('country/{id}', 'update')->name('country.update')->middleware('can:edit_country');
        Route::delete('country/{id}/delete', 'destroy')->name('country.destroy')->middleware('can:delete_country');
    });

    //State
    Route::controller(StateController::class)->group(function(){
        Route::match(['get','patch'],'state', 'index')->name('state.index')->middleware('can:browse_state');
        Route::get('state/create', 'create')->name('state.create')->middleware('can:add_state');
        Route::get('state/{id}', 'show')->name('state.show')->middleware('can:read_state');
        Route::get('state/{id}/edit', 'edit')->name('state.edit')->middleware('can:edit_state');
        Route::post('state', 'store')->name('state.store')->middleware('can:add_state');
        Route::put('state/{id}', 'update')->name('state.update')->middleware('can:edit_state');
        Route::delete('state/{id}/delete', 'destroy')->name('state.destroy')->middleware('can:delete_state');
    });

    //District
    Route::controller(DistrictController::class)->group(function(){
        Route::match(['get','patch'],'district', 'index')->name('district.index')->middleware('can:browse_district');
        Route::get('district/create', 'create')->name('district.create')->middleware('can:add_district');
        Route::get('district/{id}', 'show')->name('district.show')->middleware('can:read_district');
        Route::get('district/{id}/edit', 'edit')->name('district.edit')->middleware('can:edit_district');
        Route::post('district', 'store')->name('district.store')->middleware('can:add_district');
        Route::put('district/{id}', 'update')->name('district.update')->middleware('can:edit_district');
        Route::delete('district/{id}/delete', 'destroy')->name('district.destroy')->middleware('can:delete_district');
    });


    //City
    Route::controller(CityController::class)->group(function(){
        Route::match(['get','patch'],'city', 'index')->name('city.index')->middleware('can:browse_city');
        Route::get('city/create', 'create')->name('city.create')->middleware('can:add_city');
        Route::get('city/{id}', 'show')->name('city.show')->middleware('can:read_city');
        Route::get('city/{id}/edit', 'edit')->name('city.edit')->middleware('can:edit_city');
        Route::post('city', 'store')->name('city.store')->middleware('can:add_city');
        Route::put('city/{id}', 'update')->name('city.update')->middleware('can:edit_city');
        Route::delete('city/{id}/delete', 'destroy')->name('city.destroy')->middleware('can:delete_city');
    });


    //Company
    Route::controller(CompanyController::class)->group(function(){
        Route::match(['get','patch'],'all-companies', 'index')->name('all-companies.index')->middleware('can:browse_all_companies');
        Route::get('all-companies/create', 'create')->name('all-companies.create')->middleware('can:add_all_companies');
        Route::get('all-companies/{id}', 'show')->name('all-companies.show')->middleware('can:read_all_companies');
        Route::get('all-companies/{id}/edit', 'edit')->name('all-companies.edit')->middleware('can:edit_all_companies');
        Route::post('all-companies', 'store')->name('all-companies.store')->middleware('can:add_all_companies');
        Route::put('all-companies/{id}', 'update')->name('all-companies.update')->middleware('can:edit_all_companies');
        Route::delete('all-companies/{id}/delete', 'destroy')->name('all-companies.destroy')->middleware('can:delete_all_companies');

        Route::put('all-companies/featured/update', 'featured')->name('all-companies.featured')->middleware('can:edit_all_companies');
    });

    //Industry
    Route::controller(IndustryController::class)->group(function(){
        Route::match(['get','patch'],'industries', 'index')->name('industries.index')->middleware('can:browse_industries');
        Route::get('industries/create', 'create')->name('industries.create')->middleware('can:add_industries');
        Route::get('industries/{id}', 'show')->name('industries.show')->middleware('can:read_industries');
        Route::get('industries/{id}/edit', 'edit')->name('industries.edit')->middleware('can:edit_industries');
        Route::post('industries', 'store')->name('industries.store')->middleware('can:add_industries');
        Route::put('industries/{id}', 'update')->name('industries.update')->middleware('can:edit_industries');
        Route::delete('industries/{id}/delete', 'destroy')->name('industries.destroy')->middleware('can:delete_industries');
    });


    //JobCategory
    Route::controller(JobCategoryController::class)->group(function(){
        Route::match(['get','patch'],'job-categories', 'index')->name('job-categories.index')->middleware('can:browse_job_categories');
        Route::get('job-categories/create', 'create')->name('job-categories.create')->middleware('can:add_job_categories');
        Route::get('job-categories/{id}', 'show')->name('job-categories.show')->middleware('can:read_job_categories');
        Route::get('job-categories/{id}/edit', 'edit')->name('job-categories.edit')->middleware('can:edit_job_categories');
        Route::post('job-categories', 'store')->name('job-categories.store')->middleware('can:add_job_categories');
        Route::put('job-categories/{id}', 'update')->name('job-categories.update')->middleware('can:edit_job_categories');
        Route::delete('job-categories/{id}/delete', 'destroy')->name('job-categories.destroy')->middleware('can:delete_job_categories');
    });


     //Section
    Route::controller(SectionController::class)->group(function(){
        Route::match(['get','patch'],'section', 'index')->name('section.index')->middleware('can:browse_section');
        Route::get('section/create', 'create')->name('section.create')->middleware('can:add_section');
        Route::get('section/{id}', 'show')->name('section.show')->middleware('can:read_section');
        Route::get('section/{id}/edit', 'edit')->name('section.edit')->middleware('can:edit_section');
        Route::post('section', 'store')->name('section.store')->middleware('can:add_section');
        Route::put('section/{id}', 'update')->name('section.update')->middleware('can:edit_section');
        Route::delete('section/{id}/delete', 'destroy')->name('section.destroy')->middleware('can:delete_section');
    });



    Route::fallback(function () {
        return response()->view('admin.errors.404', [], 404);
    });


});