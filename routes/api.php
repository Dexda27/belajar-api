<?php

use App\Http\Controllers\MahasiswaController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NilaiController;

// Route untuk mengambil data nilai
Route::get('/nilai', [NilaiController::class, 'getNilai']);
Route::get('/mahasiswa', [MahasiswaController::class, 'getMahasiswa']);
Route::get('/mahasiswa/{mahasiswa:nim}', [MahasiswaController::class, 'getbyNim']);

// Route untuk Menambah data mahasiswa
Route::post('/mahasiswa', [MahasiswaController::class, 'tambahdata']);

Route::put('/mahasiswa/{mahasiswa:nim}', [MahasiswaController::class, 'updateData']);

Route::patch('/mahasiswa/{mahasiswa:nim}', [MahasiswaController::class, 'updateData']);

Route::delete('/mahasiswa/{mahasiswa:nim}', [MahasiswaController::class, 'deleteData']);

Route::post('/nilai', [NilaiController::class, 'tambahdata']);
Route::patch('/nilai/nim/{nim}', [NilaiController::class, 'updateData']);
Route::delete('/nilai/nim/{nim}', [NilaiController::class, 'deleteData']);
Route::put('/nilai/nim/{nim}', [NilaiController::class, 'updateData']);














Route::get('/mahasiswa/nama/{nama}', [MahasiswaController::class, 'getByNama']);



// Route::get('/user', function (Request $request) {
//     return $request->user();
// })->middleware('auth:sanctum');
