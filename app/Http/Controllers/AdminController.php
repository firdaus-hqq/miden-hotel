<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function show_dashboard()
    {
        return view(
            'admin/dashboard',
            ["title" => "dashboard"]
        );
    }

    public function show_kamar_admin()
    {
        return view(
            'admin/kamar_admin',
            ["title" => "kamar_admin"]
        );
    }

    public function show_kelas_kamar()
    {
        return view(
            'admin/kelas_kamar',
            ["title" => "kelas_kamar"]
        );
    }

    public function show_fasilitas_kamar()
    {
        return view(
            'admin/fasilitas_kamar',
            ["title" => "fasilitas_kamar"]
        );
    }

    public function show_fasilitas_hotel()
    {
        return view(
            'admin/fasilitas_hotel',
            ["title" => "fasilitas_hotel"]
        );
    }
}
