<?php

use App\Http\Controllers\DataController;

use Illuminate\Support\Facades\Route;

Route::get('/', [DataController::class, 'index']);

Route::get('/getData', [DataController::class, 'getData']);
