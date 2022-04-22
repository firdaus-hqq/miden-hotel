<?php

namespace App\Http\Controllers;

use App\Models\FasilitasHotel;
use App\Models\FasilitasKamar;
use App\Models\Kamar;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class TamuController extends Controller
{
    public function show_beranda()
    {
        return view('beranda', [
            'kamar' => Kamar::all(),
            'fasilitas' => FasilitasHotel::all()
        ]);
    }

    public function show_form()
    {
        return view('formpemesanan');
    }

    public function show_kamar($id)
    {
        $kamar = Kamar::find($id);
        $fasilitas = FasilitasKamar::where('kamar_id', $id)->get();

        return view('kamar', [
            'kamar' => $kamar,
            'fasilitas' => $fasilitas
        ]);
    }

    public function show_resi()
    {
        return view('resi');
    }
}
