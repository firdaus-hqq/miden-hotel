@extends('layouts.main_admin')

@section('dashboard')
    <ul class="nav nav-pills" id="pills-tab" role="tablist">
        <div class="card card-brown nav-item rounded-10 mt-3 me-3" style="width: 16rem;">
            <div class="card-body text-brown">
                <h1 class="card-title">74</h1>
                <p class="card-text">Jumlah Kamar</p>
            </div>
        </div>
        <div class="card card-brown nav-item rounded-10 mt-3 me-3" style="width: 16rem;">
            <div class="card-body text-brown">
                <h1 class="card-title">74</h1>
                <p class="card-text">Kamar Tersedia</p>
            </div>
        </div>
        <div class="card card-brown nav-item rounded-10 mt-3 me-3" style="width: 16rem;">
            <div class="card-body text-brown">
                <h1 class="card-title">74</h1>
                <p class="card-text">Jumlah Tamu yang Sedang Berkunjung</p>
            </div>
        </div>
        @if (auth()->user()->role === 'admin')
        <div class="card card-brown nav-item rounded-10 mt-3 me-3" style="width: 16rem;">
            <div class="card-body text-brown">
                <h1 class="card-title">74</h1>
                <p class="card-text">Jumlah Fasilitas</p>
            </div>
        </div>
        <div class="card card-brown nav-item rounded-10 mt-3 me-3" style="width: 16rem;">
            <div class="card-body text-brown">
                <h1 class="card-title">74</h1>
                <p class="card-text">Total Tamu yang Pernah Berkunjung</p>
            </div>
        </div>
        @endif
    </ul>
@endsection
