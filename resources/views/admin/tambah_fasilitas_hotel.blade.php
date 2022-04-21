@extends('layouts.main_admin')

@section('tambah_fasilitas_hotel')
    <a href="/fasilitas_hotel" class="btn btn-1">
        <- Kembali </a>
            <div class="card card-brown shadow mt-3 mb-5 rounded-20">
                <div class="card-body p-4">
                    <form action="/fasilitas_hotel" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="nama_fasilitas" class="form-label text-brown">Nama Fasilitas</label>
                            <input type="text" name="nama_fasilitas"
                                class="@error('nama_fasilitas') is-invalid @enderror form-control rounded-10 form-brown"
                                id="nama_fasilitas" required value="{{ old('nama_fasilitas') }}">
                            @error('nama_fasilitas')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="deskripsi" class="form-label text-brown">Deskripsi</label>
                            <textarea type="deskripsi" name="deskripsi"
                                class="@error('deskripsi') is-invalid @enderror form-control rounded-10 form-brown"
                                style="height: 150px" id="deskripsi" required>{{ old('deskripsi') }}</textarea>
                            @error('deskripsi')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="gambar" class="form-label text-brown">Gambar</label>
                            <input
                                class="@error('gambar') is-invalid @enderror form-control rounded-10 form-brown text-brown"
                                name="gambar" type="file" id="gambar">
                            @error('gambar')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <button type="submit" class="btn bg-brown text-white float-end rounded-10 mt-4">Tambah Fasilitas</button>
                    </form>
                </div>
            </div>
        @endsection
