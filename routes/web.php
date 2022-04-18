<?php

use App\Http\Controllers\Home;
use App\Http\Controllers\SoalController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [Home::class, 'index']);

Route::get('/biodata', [Home::class, 'biodata']);

Route::get('soal', [SoalController::class, 'index']);

Route::get('soal/tambah', [SoalController::class, 'tambah'])->name('soal.tambah');

Route::post('soal/simpan', [SoalController::class, 'simpan'])->name('soal.simpan');

Route::get('soal/ubah/{id}', [SoalController::class, 'ubah'])->name('soal.ubah');

Route::post('soal/perbaharui', [SoalController::class, 'perbaharui'])->name('soal.perbaharui');

Route::get('soal/hapus/{id}', [SoalController::class, 'hapus'])->name('soal.hapus');
