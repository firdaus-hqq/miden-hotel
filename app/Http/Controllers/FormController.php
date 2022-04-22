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
            'forms' => Form::where('status', 'menunggu')->order($order = request(['filter', 'order']))->filter(request(['search']))->get(),
            "title" => "Pending"
        ]);
    }

    public function ongoing()
    {
        return view('resepsionis.ongoing', [
            'guests' => Form::where('status', 'checkin')->order($order = request(['filter', 'order']))->filter(request(['search']))->get(),
            "title" => "On Going"
        ]);
    }

    public function history()
    {
        return view('resepsionis.history', [
            'histories' => Form::where('status', 'checkout')->order($order = request(['filter', 'order']))->filter(request(['search']))->get(),
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
        $validatedData = $request->validate([
            'tgl_checkin' => 'required|date',
            'tgl_checkout' => 'required|date',
            'jumlah_kamar' => 'required|integer',
            'nama_tamu' => 'required',
            'email' => 'required',
            'no_telepon' => 'required|numeric',
            'kamar_id' => 'required',
            'harga' => 'required'
        ]);

        $form = Form::create($validatedData);

        if($form){
            return redirect('/resi/'. $form->id)->with('success', 'Pemesanan berhasil! Silakan cetak resi untuk diberikan kepada resepsionis saat check in.');
        }
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
    public function update($id)
    {
        $form           = Form::find($id);
        $form->status   = 'checkin';
        $form->save();

        return redirect('/pending')->with('success', 'Tamu berhasil check in!');
    }

    public function update_ongoing($id)
    {
        $form           = Form::find($id);
        $form->status   = 'checkout';
        $form->save();

        return redirect('/ongoing')->with('success', 'Tamu berhasil check out!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Form  $form
     * @return \Illuminate\Http\Response
     */
    public function destroy(Form $form)
    {
        Form::destroy($form->id);
        return redirect('/pending')->with('success', 'Tamu berhasil ditolak!');
    }

    public function hapus($id)
    {
        $form   = Form::find($id);
        $form->delete();

        return redirect('/pending')->with('success', 'Tamu berhasil ditolak!');
    }

    public function hapus_history($id)
    {
        $form   = Form::find($id);
        $form->delete();

        return redirect('/history')->with('success', 'History berhasil dihapus!');
    }

    // public function cari(Request $request)
    // {
    //     // menangkap data pencarian
    //     $cari = $request->cari;

    //     // mengambil data dari table form sesuai pencarian data
    //     $form = Form::where('status', 'menunggu' and 'nama_tamu', 'like', "%" . $cari . "%")->paginate();

    //     // mengirim data form ke view index
    //     return view('resepsionis.pending', ['form' => $form]);
    // }
}
