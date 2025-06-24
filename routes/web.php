<?php

use App\Http\Controllers\BarcoController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::resource('barcos', BarcoController::class);
