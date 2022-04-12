@extends('layouts.main')

@section('resi')
   <div class="container pt-5">
      <a href="/" class="btn btn-1 mt-4">
         <- Kembali ke Halaman Utama</a>
   </div>
   <div class="container card col-lg-4 shadow mt-2">
      <div class="card-body">
         <img src="images/logotext.png" class="" style="max-width: 10rem" alt="">
         <p class="mt-3 text-center">ID Pemesanan Kamar Anda:</p>
         <h1 class="text-center">1</h1>
         <p class="float-start col-6">Check In: 2022-04-22</p>
         <p class="float-end col-6">Check Out: 2022-04-23</p>
         <p class="float-start col-6">Tipe Kamar: Family Suite</p>
         <p class="float-end col-6">Jumlah Kamar: 1</p>
         <table class="border-top border-bottom col-12 mb-3">
            <tr>
               <td>Nama</td>
               <td>:</td>
               <td>Ujang</td>
            </tr>
            <tr>
               <td>Email</td>
               <td>:</td>
               <td>ujang@mail.id</td>
            </tr>
            <tr>
               <td>No. Telepon</td>
               <td>:</td>
               <td>081264828973</td>
            </tr>
         </table>
         <div class="float-end">
            <p class="d-inline">Total:</p>
            <p class="fs-4">Rp.500000</p>
         </div>
      </div>
   </div>
   <div class="container mt-3">
      <button type="submit" class="btn btn-1 fs-4 mx-auto d-block col-sm-5">Cetak</button>
   </div>
@endsection
