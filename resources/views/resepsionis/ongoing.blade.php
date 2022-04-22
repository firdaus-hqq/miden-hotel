@extends('resepsionis.tabel_resepsionis')

@section('ongoing')
    <div>
        @if (session()->has('success'))
            <div class="alert alert-success" role="alert">
                {{ session('success') }}
            </div>
        @endif
        <form action="/ongoing" method="GET">
            <div class="row mt-3">
                <div class="col-lg-2">
                    <label for="filter" class="form-label text-brown">Urut Berdasarkan</label>
                    <select class="form-select form-brown rounded-10 text-brown" aria-label="filter" name="filter"
                        id="filter">
                        <option value="">
                            @if (request('filter') == 'tgl_checkin')
                                Tanggal Check In
                            @elseif (request('filter') == 'tgl_checkout')
                                Tanggal Check Out
                            @else
                                Pilih
                            @endif
                        </option>
                        <option value="" disabled>---------------------</option>
                        <option value="tgl_checkin">Tanggal Check In</option>
                        <option value="tgl_checkout">Tanggal Check Out</option>
                    </select>
                </div>
                <div class="col-lg-3">
                    <label for="order" class="form-label text-brown">Urutan</label>
                    <select class="form-select form-brown rounded-10 text-brown" aria-label="order" name="order" id="order">
                        <option value="">
                            @if (request('order') == 'desc')
                                Berurutan Turun
                            @elseif (request('order') == 'asc')
                                Berurutan Naik
                            @else
                                Pilih
                            @endif
                        </option>
                        <option value="" disabled>---------------------</option>
                        <option value="desc">Berurutan Turun</option>
                        <option value="asc">Berurutan Naik</option>
                    </select>
                </div>
                <div class="col-lg-5">
                    <label for="search" class="form-label text-brown">Pencarian</label>
                    <input type="text" class="form-control form-brown rounded-10 text-brown" id="search" name="search"
                        placeholder="Cari berdasarkan nama" value="{{ request('search') }}">
                </div>
                <div class="col-lg-2 mt-4 pt-1 mb-2">
                    <button type="submit" class="btn btn-1">
                        <img src="https://img.icons8.com/material-rounded/24/ffffff/search.png">
                    </button>
                    <a href="/ongoing" role="button" class="btn btn-1">
                        <img src="https://img.icons8.com/material-rounded/24/ffffff/reset.png">
                    </a>
                </div>
            </div>
        </form>
        <div class="card bg-cream rounded-20 mt-4">
            <div class="card-body">
                <table class="table table-hover table-responsive form-brown text-form-brown">
                    <thead>
                        <tr>
                            <th scope="col">No.</th>
                            <th scope="col">Nama Tamu</th>
                            <th scope="col">Tipe</th>
                            <th scope="col">Jumlah Kamar</th>
                            <th scope="col">Check In</th>
                            <th scope="col">Check Out</th>
                            <th scope="col">Email</th>
                            <th scope="col">No Telepon</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if (count($guests) > 0)
                            @foreach ($guests as $guest)
                                <tr>
                                    <th class="align-middle" scope="row">{{ $loop->iteration }}</th>
                                    <td class="align-middle">{{ $guest->nama_tamu }}</td>
                                    <td class="align-middle">{{ $guest->kamar_id }}</td>
                                    <td class="align-middle">{{ $guest->jumlah_kamar }}</td>
                                    <td class="align-middle">{{ $guest->tgl_checkin }}</td>
                                    <td class="align-middle">{{ $guest->tgl_checkout }}</td>
                                    <td class="align-middle">{{ $guest->email }}</td>
                                    <td class="align-middle">{{ $guest->no_telepon }}</td>
                                    <td class="align-middle">
                                        <form action="/ongoing/update/{{ $guest->id }}" method="POST">
                                            @csrf
                                            <button class="btn btn-1 text-white rounded-10">Check
                                                Out</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        @else
                            <tr>
                                <td colspan="9" class="text-center">Tidak Ada Data</td>
                            </tr>
                        @endif
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
