<?php

use App\Http\Controllers\DataController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeScreen;

Route::get('/', [DataController::class, 'index']);

Route::get('/getData', [DataController::class, 'getData']);
Route::get('data', function () {
    return view('table');
});

Route::get('/homeScreen', [HomeScreen::class, 'index']);
