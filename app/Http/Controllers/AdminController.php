<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function show_dashboard()
    {
        return view(
            'admin/dashboard',
            ["title" => "Dashboard"]
        );
    }

    public function show_kamar_admin()
    {
        return view(
            'admin/kamar_admin',
            ["title" => "Kamar"]
        );
    }

    public function show_kelas_kamar()
    {
        return view(
            'admin/kelas_kamar',
            ["title" => "Kelas Kamar"]
        );
    }

    public function show_fasilitas_kamar()
    {
        return view(
            'admin/fasilitas_kamar',
            ["title" => "Fasilitas Kamar"]
        );
    }

    public function show_fasilitas_hotel()
    {
        return view(
            'admin/fasilitas_hotel',
            ["title" => "Fasilitas Hotel"]
        );
    }
}
