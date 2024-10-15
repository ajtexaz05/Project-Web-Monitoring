<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\MmiController;
use App\Http\Controllers\Api\SensorDataController;

// Routing untuk MMI
Route::resource('mmi', MmiController::class);

// Routing untuk Sensor Data
Route::resource('sensor-data', SensorDataController::class);
