@extends('layouts.main_admin')

@section('kamar_admin')
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
               <a href="/kamar_admin/create" class="btn btn-1" type="button" id="button-addon2">+ Tambah Data</a>
            </div>
         </div>
      </form>
      @if (session()->has('success'))
         <div class="alert alert-success" role="alert">
            {{ session('success') }}
         </div>
      @endif
      <div class="card bg-cream rounded-20 mt-4">
         <div class="card-body">
            <table class="table table-hover table-responsive form-brown text-form-brown">
               <thead>
                  <tr>
                     <th scope="col">No.</th>
                     <th scope="col">Tipe Kamar</th>
                     <th scope="col">Deskripsi</th>
                     <th scope="col">Harga</th>
                     <th scope="col">Jumlah</th>
                     <th scope="col">Gambar</th>
                  </tr>
               </thead>
               <tbody>
                  @if (count($kamar) > 0)
                     @foreach ($kamar as $kamar)
                        <tr>
                           <td class="align-middle" scope="row">{{ $loop->iteration }}</td>
                           <td class="align-middle">{{ $kamar->nama_tipe }}</td>
                           <td class="align-middle">{{ $kamar->deskripsi }}</td>
                           <td class="align-middle">{{ $kamar->harga }}</td>
                           <td class="align-middle">{{ $kamar->jumlah }}</td>
                           <td class="align-middle">
                              <img src="admin/images/{{ $kamar->gambar }}" class="img-fluid" alt=""
                                 style="max-width: 150px">
                           </td>
                           <td>
                              <a href="/kamar_admin/{{ $kamar->id }}/edit" class="btn btn-1 text-white rounded-10 col-10">Edit</a>
                              <form action="/kamar_admin_delete/{{ $kamar->id }}" class="d-inline">
                                @csrf
                                <button type="submit" class="btn btn-2 text-brown rounded-10 mt-2"
                                   onclick="return confirm('Apakah Anda yakin akan menghapus kamar ini?')">Hapus</button>
                             </form>
                           </td>
                        </tr>
                     @endforeach
                  @else
                     <tr>
                        <td colspan="5" class="text-center">Tidak Ada Data</td>
                     </tr>
                  @endif
               </tbody>
            </table>
         </div>
      </div>
   </div>
@endsection
