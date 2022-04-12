@extends('layouts.main')

@section('beranda')
   <div class="container mt-5 pt-5" id="beranda">
      <img src="images/landingimage.png" class="img-fluid float-end ms-3" alt="">
      <h1 class="col-lg-5 text-brown">Kami Memberikan Yang Terbaik</h1>
      <p class="col-lg-5 lh-5 fs-5 text-brown">Kami menyediakan kamar, ruang pertemuan, pelayanan, fasilitas dan
         segala yang anda perlukan dengan kualitas terbaik.</p>
      <a href="/form" class="btn bg-brown btn-lg text-white mt-4 fs-5"><b>RESERVASI SEKARANG</b></a>
   </div>
   @include('tentang')
   @include('thumbkamar')
   @include('fasilitas')
@endsection
