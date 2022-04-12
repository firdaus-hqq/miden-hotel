<?php

namespace App\Http\Controllers;

use App\Models\FasilitasHotel;
use App\Models\Form;
use Illuminate\Http\Request;
use App\Models\Kamar;

class AdminController extends Controller
{
    public function show_dashboard()
    {
        return view(
            'admin/dashboard',
            [
                "title" => "Dashboard",
                'kamar' => Kamar::all(),
                'fasilitas' => FasilitasHotel::all(),
                'ongoing' => Form::where('status', 'checkin')->get(),
                'history' => Form::where('status', 'checkout')->get(),
                'available' => count(Kamar::all()) - count(Form::where('status', 'checkin')->get())
            ]
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
