<?php

use App\Http\Controllers\MahasiswaController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NilaiController;

// Route untuk mengambil data nilai
Route::get('/nilai', [NilaiController::class, 'getNilai']);

// Route untuk Menambah data mahasiswa
Route::post('/mahasiswa', [MahasiswaController::class, 'tambahdata']);










Route::get('/mahasiswa/nama/{nama}', [MahasiswaController::class, 'getByNama']);



// Route::get('/user', function (Request $request) {
//     return $request->user();
// })->middleware('auth:sanctum');
