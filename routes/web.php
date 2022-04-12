<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormController;
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

Route::get('/form', [FormController::class, 'create']);

Route::get('/kamar', [TamuController::class, 'show_kamar']);

Route::get('/login', [LoginController::class, 'show_login'])->name('login')->middleware('guest');

Route::post('/login', [LoginController::class, 'authenticate']);

Route::post('/logout', [LoginController::class, 'logout']);

Route::post('/submit_form', [FormController::class, 'store']);

Route::get('/resi', [TamuController::class, 'show_resi']);

Route::group(['middleware' => ['auth']], function () {
    Route::get('/dashboard', [AdminController::class, 'show_dashboard']);

    Route::get('/kamar_admin', [AdminController::class, 'show_kamar_admin']);

    Route::get('/kelas_kamar', [AdminController::class, 'show_kelas_kamar']);

    Route::get('/fasilitas_kamar', [AdminController::class, 'show_fasilitas_kamar']);

    Route::get('/fasilitas_hotel', [AdminController::class, 'show_fasilitas_hotel']);

    //     Route::get('/dashboard_resepsionis', [ResepsionisController::class, 'show_dashboard_resepsionis']);

    Route::get('/ongoing', [FormController::class, 'ongoing']);

    Route::post('ongoing/update/{id}', [FormController::class, 'update_ongoing']);

    // Route::get('/pending', [ResepsionisController::class, 'show_pending']);

    Route::resource('/pending', FormController::class);

    Route::get('pending/delete/{id}', [FormController::class, 'hapus']);

    Route::post('pending/update/{id}', [FormController::class, 'update']);

    Route::get('/history', [FormController::class, 'history']);
});
