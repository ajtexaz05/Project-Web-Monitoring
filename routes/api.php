<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\MmiController;
use App\Http\Controllers\Api\MmiDataController;
use App\Http\Controllers\Api\SensorDataController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

// Rute resource untuk MMI dan Sensor Data
Route::resource('/mmi', MmiController::class);
Route::resource('/sensor-data', SensorDataController::class);
Route::resource('/mmi_data', MmiDataController::class);
