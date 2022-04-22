<?php

namespace App\Http\Controllers;

use App\Models\FasilitasKamar;
use App\Models\Kamar;
use Illuminate\Http\Request;

class FasilitasKamarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view(
            'admin.fasilitas_kamar',
            [
                "title" => "Fasilitas Kamar",
                'fasilitas_kamar' => FasilitasKamar::all()
            ]
        );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.tambah_fasilitas_kamar', [
            'title' => 'Tambah Fasilitas Kamar',
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
        $validatedData = $request->validate([
            'kamar_id' => 'required',
            'fasilitas' => 'required',
            'jumlah' => 'required|integer'
        ]);

        FasilitasKamar::create($validatedData);

        return redirect('/fasilitas_kamar')->with('success', 'Tambah fasilitas kamar berhasil!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('admin.edit_fasilitas_kamar', [
            "fasilitas_kamar" => FasilitasKamar::find($id),
            "kamar" => Kamar::all(),
            "title" => "Edit Kamar"
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $fasilitas_kamar = FasilitasKamar::find($id);

        $fasilitas_kamar->kamar_id = $request->kamar_id;
        $fasilitas_kamar->fasilitas = $request->fasilitas;
        $fasilitas_kamar->jumlah = $request->jumlah;
        $fasilitas_kamar->save();

        return redirect('/fasilitas_kamar')->with('success', 'Fasilitas kamar berhasil diedit!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $fasilitas_kamar = FasilitasKamar::find($id);
        $fasilitas_kamar->delete();
        return redirect('/fasilitas_kamar')->with('success', 'Fasilitas kamar berhasil dihapus!');
    }
}
