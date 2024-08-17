<?php

use App\Http\Controllers\Frontend\AppRateController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');
Route::get('/app-rate/rates', [AppRateController::class, 'index']);
Route::get('/app-rate/total-rating', [AppRateController::class, 'average']);
Route::post('/app-rate/create', [AppRateController::class, 'create']);
Route::get('/app-rate/rate/{id}', [AppRateController::class, 'show']);
Route::post('/app-rate/update/{id}', [AppRateController::class, 'update']);
Route::post('/app-rate/delete/{id}', [AppRateController::class, 'delete']);
