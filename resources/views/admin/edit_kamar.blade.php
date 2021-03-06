@extends('layouts.main_admin')

@section('edit_kamar')
    <a href="/kamar_admin" class="btn btn-1">
        <- Kembali </a>
            <div class="card card-brown shadow mt-3 mb-5 rounded-20">
                <div class="card-body p-4">
                    <form action="/kamar_admin/{{ $kamar->id }}" method="POST" enctype="multipart/form-data">
                        @method('put')
                        @csrf
                        <div class="mb-3">
                            <label for="nama_tipe" class="form-label text-brown">Nama Tipe Kamar</label>
                            <input type="text" name="nama_tipe"
                                class="@error('nama_tipe') is-invalid @enderror form-control rounded-10 form-brown"
                                id="nama_tipe" required autofocus value="{{ old('nama_tipe', $kamar->nama_tipe) }}">
                            @error('nama_tipe')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="deskripsi" class="form-label text-brown">Deskripsi</label>
                            <textarea type="deskripsi" name="deskripsi"
                                class="@error('deskripsi') is-invalid @enderror form-control rounded-10 form-brown"
                                style="height: 150px" id="deskripsi"
                                required>{{ old('deskripsi', $kamar->deskripsi) }}</textarea>
                            @error('deskripsi')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="harga" class="form-label text-brown">Harga</label>
                            <input type="number" name="harga"
                                class="@error('harga') is-invalid @enderror form-control rounded-10 form-brown" id="harga"
                                required value="{{ old('harga', $kamar->harga) }}">
                            @error('harga')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="jumlah" class="form-label text-brown">Jumlah Kamar</label>
                            <input type="number" name="jumlah"
                                class="@error('jumlah') is-invalid @enderror form-control rounded-10 form-brown" id="jumlah"
                                required value="{{ old('jumlah', $kamar->jumlah) }}">
                            @error('jumlah')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="gambar" class="form-label text-brown">Gambar</label>
                            <input
                                class="@error('gambar') is-invalid @enderror form-control rounded-10 form-brown text-brown"
                                name="gambar" type="file" id="gambar" value="{{ old('gambar', $kamar->gambar) }}">
                            @error('gambar')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <button type="submit" class="btn bg-brown text-white float-end rounded-10 mt-4">Edit Kamar</button>
                    </form>
                </div>
            </div>
        @endsection
