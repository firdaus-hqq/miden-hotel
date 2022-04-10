<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TamuController extends Controller
{
    public function show_beranda() {
        return view('beranda');
    }

    public function show_form() {
        return view('formpemesanan');
    }

    public function show_kamar() {
        return view('kamar');
    }

    public function show_resi() {
        return view('resi');
    }
}
