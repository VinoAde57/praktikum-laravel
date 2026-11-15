<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\KalkulatorController;
Route::get('/', function () {
    return view('welcome');
});

Route::get('/daftar/mahasiswa', [MahasiswaController::class, 'index']);
Route::get('/kalkulator/segitiga/{alas?}/{tinggi?}', [KalkulatorController::class, 'segitiga'])
    ->whereNumber(['alas', 'tinggi']);