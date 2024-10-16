<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\MmiDataController;
use App\Http\Controllers\Api\SensorDataController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

// Rute resource untuk MMI_Data dan Sensor Data
Route::resource('/mmi_data', MmiDataController::class);
Route::resource('/sensor_data', SensorDataController::class);
