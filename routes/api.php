<?php

use App\Http\Controllers\MahasiswaController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NilaiController;

// ROute Mahasiswa
Route::prefix('mahasiswa')->controller(MahasiswaController::class)->group(function () {
    Route::get('/', 'getMahasiswa');
    Route::get('/{mahasiswa:nim}', 'getbyNim');
    Route::get('/nama/{nama}', 'getByNama');
    Route::post('/', 'tambahdata');
    Route::put('/{mahasiswa:nim}', 'updateData');
    Route::patch('/{mahasiswa:nim}', 'updateData');
    Route::delete('/{mahasiswa:nim}', 'deleteData');
});

// ROute Nilai
Route::prefix('nilai')->controller(NilaiController::class)->group(function () {
    Route::get('/', 'getNilai');
    Route::post('/', 'tambahdata');
    Route::put('/nim/{nim}', 'updateData');
    Route::patch('/nim/{nim}', 'updateData');
    Route::delete('/nim/{nim}', 'deleteData');
});

















// Route::get('/user', function (Request $request) {
//     return $request->user();
// })->middleware('auth:sanctum');
