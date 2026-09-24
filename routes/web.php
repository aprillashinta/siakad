<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiswaController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard',
    [SiswaController::class,'index']);

Route::get('/siswa',
    [SiswaController::class,'tampil']);

Route::get('/tambah',
    [SiswaController::class,'tambah']);

Route::post('/simpan',
    [SiswaController::class,'simpan']);

Route::get('/siswa/ubah/{nisn}',
    [SiswaController::class,'ubah']);

Route::post('/ubah',
    [SiswaController::class,'edit']);

Route::get('/siswa/hapus/{nisn}',
    [SiswaController::class,'hapus']);

Route::get('/pdf',
    [SiswaController::class,'pdf']);

Route::get('/csv',
    [SiswaController::class,'exportCsv']);

Route::get('/excel',
    [SiswaController::class,'excel']);