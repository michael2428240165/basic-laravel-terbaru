<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FakultasController;
use App\Http\Controllers\ProdiController;

Route::get('/', function () {
    return view('auth.register');
});

Route::resource('fakultas', FakultasController::class);
Route::resource('prodi', ProdiController::class);