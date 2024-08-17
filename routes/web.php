<?php

use App\Http\Controllers\Backend\AppRateController;
use App\Http\Controllers\Backend\BusController;
use App\Http\Controllers\Backend\CardCustomerController;
use App\Http\Controllers\Backend\DelegatorController;
use App\Http\Controllers\Backend\DriverController;
use App\Http\Controllers\Backend\HomeController;
use App\Http\Controllers\Backend\LanguageController;
use App\Http\Controllers\Backend\MobileCustomerController;
use App\http\Middleware\Localization;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
/*------------------------------------------------------------------------------------------------------------------------------*/
Route::prefix('dashboard')->middleware(localization::class)->group(function () {
    // Route::get('login', 'Auth\LoginController@showLoginForm')->name('admin.login');
    // Route::post('login', 'Auth\LoginController@login');
    // Route::post('logout', 'Auth\LoginController@logout')->name('admin.logout');
    Route::get('/home', [HomeController::class, 'index'])->name('backend.index');
});
/*------------------------------------------------------------------------------------------------------------------------------*/
Route::prefix('dashboard')->group(function () {
    Route::resource('drivers', DriverController::class);
    Route::resource('buses', BusController::class);
    Route::resource("delegators", DelegatorController::class);
    Route::post('delegators/bulk-delete', [DelegatorController::class, 'bulkDelete'])
        ->name('delegators.bulkDelete');

    Route::resource('card_customers', CardCustomerController::class);
    Route::resource('mobile_customers', MobileCustomerController::class);
    Route::resource('app_rates', AppRateController::class);
    Route::get('app_rates/average', [AppRateController::class, 'average'])->name('app_rates.average');
    Route::post('app_rates/bulk_delete', [AppRateController::class, 'bulkDelete'])->name('app_rates.bulk_delete');

});
Route::get('/test/1', function () {
    return view('tests.test-1');
});
Route::get('/test/2', function () {
    return view('tests.test-2');
});

Route::get('language/{locale}', [LanguageController::class, 'switchLang'])->middleware(localization::class)->name('lang.switch');
