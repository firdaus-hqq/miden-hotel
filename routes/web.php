<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\TamuController;
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

Route::get('/', [TamuController::class, 'show_beranda']);

Route::get('/form', [TamuController::class, 'show_form']);

Route::get('/kamar', [TamuController::class, 'show_kamar']);

Route::get('/login', [LoginController::class, 'show_login']);

Route::get('/dashboard', [AdminController::class, 'show_dashboard']);

Route::get('/kamar_admin', [AdminController::class, 'show_kamar_admin']);

Route::get('/kelas_kamar', [AdminController::class, 'show_kelas_kamar']);

Route::get('/fasilitas_kamar', [AdminController::class, 'show_fasilitas_kamar']);

Route::get('/fasilitas_hotel', [AdminController::class, 'show_fasilitas_hotel']);
