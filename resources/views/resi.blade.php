@extends('layouts.main')

@section('resi')
    <div class="container pt-5">
        <a href="/" class="btn btn-1 mt-4">
            <- Kembali ke Halaman Utama</a>
                @if (session()->has('success'))
                    <div class="alert alert-success mt-2" role="alert">
                        {{ session('success') }}
                    </div>
                @endif
    </div>
    <div class="container card col-lg-4 shadow mt-2" id="resi">
        <div class="card-body">
            <img src="{{ URL::asset('images/logotext.png') }}" class="" style="max-width: 10rem" alt="">
            <p class="mt-3 text-center">ID Pemesanan Kamar Anda:</p>
            <h1 class="text-center">{{ $form->id }}</h1>
            <p class="float-start col-6">Check In: {{ $form->tgl_checkin }}</p>
            <p class="float-end col-6">Check Out: {{ $form->tgl_checkout }}</p>
            <p class="float-start col-6">Tipe Kamar: {{ $form->kamars->nama_tipe }}</p>
            <p class="float-end col-6">Jumlah Kamar: {{ $form->jumlah_kamar }}</p>
            <table class="border-top border-bottom col-12 mb-3">
                <tr>
                    <td>Nama</td>
                    <td>:</td>
                    <td>{{ $form->nama_tamu }}</td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td>:</td>
                    <td>{{ $form->email }}</td>
                </tr>
                <tr>
                    <td>No. Telepon</td>
                    <td>:</td>
                    <td>{{ $form->no_telepon }}</td>
                </tr>
            </table>
            <div class="float-end">
                <p class="d-inline">Total:</p>
                <p class="fs-4">Rp.{{ $form->harga }}</p>
            </div>
        </div>
    </div>
    <div class="container mt-3">
        <button type="submit" onclick="printForm('resi')" class="btn btn-1 fs-4 mx-auto d-block col-sm-5">Cetak</button>
    </div>
    <script>
        function printForm(divName) {
            var printContents = document.getElementById(divName).innerHTML;
            var originalContents = document.body.innerHTML;

            document.body.innerHTML = printContents;

            window.print();

            document.body.innerHTML = originalContents;
        }
    </script>
@endsection
