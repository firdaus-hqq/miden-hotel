<?php

namespace App\Http\Controllers;

use App\Models\FasilitasHotel;
use Illuminate\Http\Request;

class FasilitasHotelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view(
            'admin.fasilitas_hotel',
            [
                "title" => "Fasilitas Hotel",
                'fasilitas_hotel' => FasilitasHotel::all()
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
        return view('admin.tambah_fasilitas_hotel', [
            "title" => "Tambah Fasilitas Hotel"
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
                'nama_fasilitas' => 'required',
                'deskripsi' => 'required',
                'gambar' => 'mimes:jpeg,bmp,png'
            ]);

            $validatedData['gambar'] = $filename;

            FasilitasHotel::create($validatedData);

            $file->move(public_path('admin/images'), $filename);
        }

        return redirect('/fasilitas_hotel')->with('success', 'Tambah fasilitas hotel berhasil!');
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
        return view('admin.edit_fasilitas_hotel', [
            "fasilitas_hotel" => FasilitasHotel::find($id),
            "title" => "Edit Fasilitas Hotel"
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
        $fasilitas_hotel = FasilitasHotel::find($id);
        if($request->hasFile('gambar')){

            $request->validate([
                'gambar' => 'mimes:jpeg,bmp,png' // Only allow .jpg, .bmp and .png file types.
            ]);

            $file = $request->file('gambar');
            $filename = date('YmdHi').$file->getClientOriginalName();

            $fasilitas_hotel->gambar = $filename;

            $file->move(public_path('admin/images'), $filename);
        }

        $fasilitas_hotel->nama_fasilitas = $request->nama_fasilitas;
        $fasilitas_hotel->deskripsi = $request->deskripsi;
        $fasilitas_hotel->save();

        return redirect('/fasilitas_hotel')->with('success', 'Fasilitas hotel berhasil diedit!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $fasilitas_hotel = FasilitasHotel::find($id);
        $fasilitas_hotel->delete();
        return redirect('/fasilitas_hotel')->with('success', 'Fasilitas hotel berhasil dihapus!');
    }
}
