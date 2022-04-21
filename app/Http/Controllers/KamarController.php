<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kamar;

use Carbon\Carbon;

class KamarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.kamar_admin', [
            "title" => "Kamar",
            'kamar' => Kamar::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.tambah_kamar', [
            "title" => "Tambah Kamar"
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
        if ($request->hasFile('gambar')) {
            $file = $request->file('gambar');
            $filename = date('YmdHi') . $file->getClientOriginalName();

            $validatedData = $request->validate([
                'nama_tipe' => 'required',
                'deskripsi' => 'required',
                'harga' => 'required|integer',
                'jumlah' => 'required|integer',
                'gambar' => 'mimes:jpeg,bmp,png'
            ]);

            $validatedData['gambar'] = $filename;

            Kamar::create($validatedData);

            $file->move(public_path('admin/images'), $filename);
        }

        return redirect('/kamar_admin')->with('success', 'Tambah kamar berhasil!');
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
        return view('admin.edit_kamar', [
            "kamar" => Kamar::find($id),
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
        $kamar = Kamar::find($id);
        if($request->hasFile('gambar')){

            $request->validate([
                'gambar' => 'mimes:jpeg,bmp,png' // Only allow .jpg, .bmp and .png file types.
            ]);

            $file = $request->file('gambar');
            $filename = date('YmdHi').$file->getClientOriginalName();

            $kamar->gambar = $filename;

            $file->move(public_path('admin/images'), $filename);
        }

        $kamar->nama_tipe = $request->nama_tipe;
        $kamar->deskripsi = $request->deskripsi;
        $kamar->harga = $request->harga;
        $kamar->jumlah = $request->jumlah;
        $kamar->save();

        return redirect('/kamar_admin')->with('success', 'Kamar berhasil diedit!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $kamar = Kamar::find($id);
        $kamar->delete();
        return redirect('/kamar_admin')->with('success', 'Kamar berhasil dihapus!');
    }
}
