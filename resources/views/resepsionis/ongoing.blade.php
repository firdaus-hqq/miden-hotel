@extends('resepsionis.tabel_resepsionis')

@section('ongoing')
   <div>
      @if (session()->has('success'))
         <div class="alert alert-success" role="alert">
            {{ session('success') }}
         </div>
      @endif
      <form action="/ongoing" method="GET">
        <div class="mb-3">
            <label for="cari" class="form-label text-brown">Cari</label>
            <div class="d-flex flex-row">
                <div class="d-flex flex-row">
                    <input type="text" class="form-control rounded-10 form-brown me-1" name="search" id="cari"
                        placeholder="Cari berdasarkan nama..." value="{{ request('search') }}">
                    <button class="btn btn-1 me-1" type="submit" id="button-addon2">Cari</button>
                </div>
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
