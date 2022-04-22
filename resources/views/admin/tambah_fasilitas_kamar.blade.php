@extends('layouts.main_admin')

@section('tambah_fasilitas_hotel')
    <a href="/fasilitas_kamar" class="btn btn-1">
        <- Kembali </a>
            <div class="card card-brown shadow mt-3 mb-5 rounded-20">
                <div class="card-body p-4">
                    <form action="/fasilitas_kamar" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="kamar_id" class="form-label text-brown">Tipe Kamar</label>
                            <select class="form-select rounded-10 form-brown text-form-brown" name="kamar_id" id="kamar_id">
                               @foreach ($kamar as $kamar)
                                  @if (old('kamar_id') == $kamar->id)
                                     <option value="{{ $kamar->id }}" selected>{{ $kamar->nama_tipe }}</option>
                                  @else
                                     <option value="{{ $kamar->id }}">{{ $kamar->nama_tipe }}</option>
                                  @endif
                               @endforeach
                            </select>
                         </div>
                        <div class="mb-3">
                            <label for="fasilitas" class="form-label text-brown">Nama Fasilitas</label>
                            <input type="text" name="fasilitas"
                                class="@error('fasilitas') is-invalid @enderror form-control rounded-10 form-brown"
                                id="fasilitas" required autofocus value="{{ old('fasilitas') }}">
                            @error('fasilitas')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="jumlah" class="form-label text-brown">Jumlah</label>
                            <input type="number" name="jumlah"
                                class="@error('jumlah') is-invalid @enderror form-control rounded-10 form-brown"
                                id="jumlah" required autofocus value="{{ old('jumlah') }}">
                            @error('jumlah')
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
