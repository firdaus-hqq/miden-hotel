<div class="container" id="kamar">
    <div class="mt-5 d-inline-block">
        <h1 class="text-center text-brown">Kamar</h1>
        @foreach ($kamar as $kamar)
            <div class="card card-brown rounded-20 shadow mt-3">
                <div class="card-body">
                    <div>
                        <h2 class="text-brown float-start col-lg-8">{{ $kamar->nama_tipe }}</h2>
                        <img src="{{ URL::asset('admin/images/' . $kamar->gambar) }}"
                            class="img-fluid float-end col-lg-4 rounded-20" style="max-width: 30rem" alt="">
                        <p class="text-brown col-lg-7">{{ Str::limit($kamar->deskripsi, 200) }}</p>
                    </div>
                    <h3 class="text-brown mt-2">Rp.{{ $kamar->harga }}/malam</h3>
                    <a href="/kamar" class="btn btn-2 mt-1">Selengkapnya</a>
                    <a href="/form" class="btn btn-1 mt-1">RESERVASI SEKARANG</a>
                </div>
            </div>
        @endforeach
    </div>
</div>
