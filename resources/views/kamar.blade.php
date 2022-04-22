@extends('layouts.main')

@section('kamar')
    <div class="container mt-5">
        <a href="/" class="btn btn-1 mt-4">
            <- Kembali ke Halaman Utama</a>
                <img src="{{ URL::asset('admin/images/' . $kamar->gambar) }}" class="w-100 mt-3 rounded-20"
                    style="max-height: 30rem" alt="...">
                <h1 class="text-center text-brown mt-3 border-bottom mb-3">{{ $kamar->nama_tipe }}</h1>
                <div class="text-brown border-bottom">
                    <p>{{ $kamar->deskripsi }}</p>
                    <p>Fasilitas:</p>
                    <ul>
                        @foreach ($fasilitas as $fasilitas)
                            <li>{{ $fasilitas->jumlah > 1 ? $fasilitas->jumlah : '' }} {{ $fasilitas->fasilitas }}</li>
                        @endforeach
                    </ul>
                </div>
                <h3 class="text-brown float-start col-lg-8 mt-2">Rp.{{ $kamar->harga }}/malam</h3>
                <div class="float-end me-2 mt-2">
                    <a href="/form" class="btn btn-1">RESERVASI SEKARANG</a>
                </div>
    </div>
@endsection
