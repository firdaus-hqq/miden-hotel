<?php

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

Route::get('/', function () {
    return view('beranda');
});

Route::get('/form', function () {
    return view('formpemesanan');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/kamar', function () {
    return view('kamar');
});

Route::get('/dashboard', function () {
    return view('admin/dashboard');
});

Route::get('/kamar_admin', function () {
    return view('admin/kamar_admin');
});

Route::get('/kelas_kamar', function () {
    return view('admin/kelas_kamar');
});

Route::get('/fasilitas_kamar', function () {
    return view('admin/fasilitas_kamar');
});

Route::get('/fasilitas_hotel', function () {
    return view('admin/fasilitas_hotel');
});
