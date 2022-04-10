@extends('resepsionis.tabel_resepsionis')

@section('pending')
<div>
    <form method="GET">
        <div class="mb-3">
            <label for="cari" class="form-label text-brown">Cari</label>
            <div class="d-flex flex-row">
                <div class="d-flex flex-row">
                    <input type="text" class="form-control rounded-10 form-brown me-1" id="cari"
                        aria-describedby="button-addon2">
                    <button class="btn btn-1 me-1" type="button" id="button-addon2">Cari</button>
                </div>
                <button class="btn btn-1" type="button" id="button-addon2">+ Tambah Data</button>
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
                    @foreach ($forms as $form)
                    <tr>
                        <th class="align-middle" scope="row">{{ $loop->iteration }}</th>
                        <td class="align-middle">{{ $form->nama_tamu }}</td>
                        <td class="align-middle">{{ $form->kamar_id}}</td>
                        <td class="align-middle">{{ $form->jumlah_kamar }}</td>
                        <td class="align-middle">{{ $form->tgl_checkin }}</td>
                        <td class="align-middle">{{ $form->tgl_checkout }}</td>
                        <td class="align-middle">{{ $form->email }}</td>
                        <td class="align-middle">{{ $form->no_telepon }}</td>
                        <td class="align-middle">
                            <a href="" class="btn btn-1 text-white rounded-10">Check In</a>
                            <a href="" class="btn btn-2 text-brown rounded-10">Tolak</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
