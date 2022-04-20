@extends('layouts.main_admin')

@section('tambah_kamar')
<div class="container mt-5">
    <h2 class="text-center mt-5 pt-3 text-brown"><b>Form Pemesanan</b></h2>
    <div class="card card-brown shadow mt-3 mb-5 rounded-20">
       <div class="card-body p-4">
          <form action="/submit_form" method="POST">
             @csrf
             <div class="row g-3 align-items-center">
                <div class="col mb-3">
                   <label for="tgl_checkin" class="form-label text-brown">Tanggal Check In</label>
                   <input type="date" name="tgl_checkin"
                      class="@error('tgl_checkin') is-invalid @enderror form-control rounded-10 form-brown text-form-brown"
                      id="tgl_checkin" required autofocus value="{{ old('tgl_checkin') }}">
                   @error('tgl_checkin')
                      <div class="invalid-feedback">
                         {{ $message }}
                      </div>
                   @enderror
                </div>
                <div class="col mb-3">
                   <label for="tgl_checkout" class="form-label text-brown">Tanggal Check Out</label>
                   <input type="date" name="tgl_checkout"
                      class="@error('tgl_checkout') is-invalid @enderror form-control rounded-10 form-brown text-form-brown"
                      id="tgl_checkout" required value="{{ old('tgl_checkout') }}">
                   @error('tgl_checkout')
                      <div class="invalid-feedback">
                         {{ $message }}
                      </div>
                   @enderror
                </div>
                <div class="col mb-3">
                   <label for="jumlah_kamar" class="form-label text-brown">Jumlah Kamar</label>
                   <input type="number" name="jumlah_kamar"
                      class="@error('jumlah_kamar') is-invalid @enderror form-control rounded-10 form-brown text-form-brown"
                      id="jumlah_kamar" min="1" required value="{{ old('jumlah_kamar') }}">
                   @error('jumlah_kamar')
                      <div class="invalid-feedback">
                         {{ $message }}
                      </div>
                   @enderror
                </div>
             </div>
             <div class="mb-3">
                <label for="nama_tamu" class="form-label text-brown">Nama Tamu</label>
                <input type="text" name="nama_tamu"
                   class="@error('nama_tamu') is-invalid @enderror form-control rounded-10 form-brown" id="nama_tamu"
                   required value="{{ old('nama_tamu') }}">
                @error('nama_tamu')
                   <div class="invalid-feedback">
                      {{ $message }}
                   </div>
                @enderror
             </div>
             <div class="mb-3">
                <label for="email" class="form-label text-brown">Email</label>
                <input type="email" name="email"
                   class="@error('email') is-invalid @enderror form-control rounded-10 form-brown" id="email" required
                   value="{{ old('email') }}">
                @error('email')
                   <div class="invalid-feedback">
                      {{ $message }}
                   </div>
                @enderror
             </div>
             <div class="mb-3">
                <label for="no_telepon" class="form-label text-brown">Nomor Telepon</label>
                <input type="number" name="no_telepon"
                   class="@error('no_telepon') is-invalid @enderror form-control rounded-10 form-brown" id="no_telepon"
                   required value="{{ old('no_telepon') }}">
                @error('no_telepon')
                   <div class="invalid-feedback">
                      {{ $message }}
                   </div>
                @enderror
             </div>
             <div class="mb-3">
                <label for="tipe_kamar" class="form-label text-brown">Tipe Kamar</label>
                <select class="form-select rounded-10 form-brown text-form-brown" name="kamar_id" id="tipe_kamar">
                   @foreach ($kamar as $kamar)
                      @if (old('tipe_kamar') == $kamar->id)
                         <option value="{{ $kamar->id }}" selected>{{ $kamar->nama_tipe }}</option>
                      @else
                         <option value="{{ $kamar->id }}">{{ $kamar->nama_tipe }}</option>
                      @endif
                   @endforeach
                </select>
             </div>
             <button type="submit" class="btn bg-brown text-white float-end rounded-10 mt-4">Konfirmasi
                Pemesanan</button>
          </form>
       </div>
    </div>
 </div>
@endsection
