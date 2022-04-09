<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TamuController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ResepsionisController;

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

Route::get('/login', [LoginController::class, 'show_login'])->name('login')->middleware('guest');

Route::post('/login', [LoginController::class, 'authenticate']);

Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/dashboard', [AdminController::class, 'show_dashboard'])->middleware('auth');

Route::get('/kamar_admin', [AdminController::class, 'show_kamar_admin'])->middleware('auth');

Route::get('/kelas_kamar', [AdminController::class, 'show_kelas_kamar'])->middleware('auth');

Route::get('/fasilitas_kamar', [AdminController::class, 'show_fasilitas_kamar'])->middleware('auth');

Route::get('/fasilitas_hotel', [AdminController::class, 'show_fasilitas_hotel'])->middleware('auth');

Route::get('/dashboard_resepsionis', [ResepsionisController::class, 'show_dashboard_resepsionis'])->middleware('auth');

Route::get('/ongoing', [ResepsionisController::class, 'show_ongoing'])->middleware('auth');

Route::get('/pending', [ResepsionisController::class, 'show_pending'])->middleware('auth');

Route::get('/history', [ResepsionisController::class, 'show_history'])->middleware('auth');
