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
