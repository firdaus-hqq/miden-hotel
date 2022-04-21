<div class="container" id="fasilitas">
   <h1 class="text-center text-brown mt-5 pt-3">Fasilitas</h1>
   <div id="carouselExampleCaptions" class="carousel slide mt-3" data-bs-ride="carousel">
      <div class="carousel-indicators">
          @foreach ($fasilitas as $item)
         <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="{{ $loop->index }}" class="{{ $loop->index === 0 ? 'active':'' }}"
            aria-current="true" aria-label="Slide {{ $loop->iteration }}"></button>
            @endforeach
      </div>
      <div class="carousel-inner rounded-20">
          @foreach ($fasilitas as $item)
         <div class="carousel-item {{ $loop->iteration === 1 ? 'active':'' }}">
            <img src="{{ 'admin/images/'.$item->gambar }}" class="d-block w-100" style="max-height: 35rem" alt="...">
            <div class="carousel-caption d-none d-md-block">
               <h5>{{ $item->nama_fasilitas }}</h5>
               <p>{{ $item->deskripsi }}</p>
            </div>
         </div>
         @endforeach
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
         data-bs-slide="prev">
         <span class="carousel-control-prev-icon" aria-hidden="true"></span>
         <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
         data-bs-slide="next">
         <span class="carousel-control-next-icon" aria-hidden="true"></span>
         <span class="visually-hidden">Next</span>
      </button>
   </div>
</div>
