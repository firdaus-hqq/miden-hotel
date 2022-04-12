<?php

namespace App\Http\Controllers;

use App\Models\Form;
use App\Models\Kamar;
use GrahamCampbell\ResultType\Success;
use Illuminate\Http\Request;
use SebastianBergmann\Diff\Diff;
use DateTime;

class FormController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('resepsionis.pending', [
            'forms' => Form::where('status', 'menunggu')->get(),
            "title" => "Pending"
        ]);
    }

    public function ongoing()
    {
        return view('resepsionis.ongoing', [
            'guests' => Form::where('status', 'checkin')->get(),
            "title" => "On Going"
        ]);
    }

    public function history()
    {
        return view('resepsionis.history', [
            'histories' => Form::where('status', 'checkout')->get(),
            "title" => "History"
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('formpemesanan', [
            'kamar' => Kamar::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $tgl_checkin = $request->tgl_checkin;
        $tgl_checkout = $request->tgl_checkout;
        $datetime1 = new DateTime($tgl_checkin);
        $datetime2 = new DateTime($tgl_checkout);
        $jumlah_hari = $datetime1->diff($datetime2);
        $days = $jumlah_hari->format('%a');
        $harga = $days * $request->jumlah_kamar * 500000;

        $validatedData = $request->validate([
            'tgl_checkin' => 'required|date',
            'tgl_checkout' => 'required|date',
            'jumlah_kamar' => 'required|integer',
            'nama_tamu' => 'required',
            'email' => 'required',
            'no_telepon' => 'required|numeric',
            'kamar_id' => 'required'
        ]);

        $validatedData['harga'] = $harga;

        Form::create($validatedData);

        return redirect('/resi')->with('success', 'Pemesanan berhasil! Silakan cetak resi untuk diberikan kepada resepsionis saat check in.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Form  $form
     * @return \Illuminate\Http\Response
     */
    public function show(Form $form)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Form  $form
     * @return \Illuminate\Http\Response
     */
    public function edit(Form $form)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Form  $form
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Form $form)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Form  $form
     * @return \Illuminate\Http\Response
     */
    public function destroy(Form $form)
    {
        //
    }
}
