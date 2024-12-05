@extends('layout.main')
@section('uji')



 <!-- Carousel -->
<section class="yu">
 <div class="carousel w-full" id="carousel">
    <div id="slide1" class="carousel-item relative w-full">
        <img src="{{asset('poto/croiissan.png')}}" class="w-full h-64 object-cover" />
        <div class="absolute left-5 right-5 top-1/2 flex -translate-y-1/2 transform justify-between">
        </div>
    </div>
    <div id="slide2" class="carousel-item relative w-full">
        <img src="{{asset('poto/jaw.png')}}" class="w-full h-64 object-cover" />
        <div class="absolute left-5 right-5 top-1/2 flex -translate-y-1/2 transform justify-between">
        </div>
    </div>
    <div id="slide3" class="carousel-item relative w-full">
        <img src="{{asset('poto/kuni.png')}}" class="w-full h-64 object-cover" />
        <div class="absolute left-5 right-5 top-1/2 flex -translate-y-1/2 transform justify-between">
        </div>
    </div>
    <div id="slide4" class="carousel-item relative w-full">
        <img src="{{asset('poto/tor.png')}}" class="w-full h-64 object-cover" />
        <div class="absolute left-5 right-5 top-1/2 flex -translate-y-1/2 transform justify-between">
        </div>
    </div>
</div>
</section>
<hr class="pu">
<div class="container">
        <div class="text-section">
            <h1 class="leading-tight text-4xl font-bold">Rasa Asli, <br>Kualitas Tinggi</h1>
            <p>Roti Nusantara Memiliki Varian Produk Terbanyak dan Jaminan Kualitas Produk & Layanan.</p>
            <p class="operational-hours">Jam Operasional (Tiap Hari):<br>06.00 - 21.00</p>
            <a href="/product" class="btn">Pilih Produk Rosan</a>
        </div>
        <div class="image-section">
            <img src="{{asset('poto/tat.png')}}" alt="">
        </div>
    </div>
  <div>
    </div>
    <div class="min-h-screen flex flex-col p-8 sm:p-16 md:p-24 justify-center bg-purple" class="gambar1">
  <!-- Themes: blue, purple and teal -->
  <div data-theme="teal" class="mx-auto max-w-6xl">
    <h2 class="sr-only"></h2>
    <section class="font-sans text-black" class="ros">
      <div class="[ lg:flex lg:items-center ] [ fancy-corners fancy-corners--large fancy-corners--top-left fancy-corners--bottom-right ]">
        <div class="flex-shrink-0 self-stretch sm:flex-basis-40 md:flex-basis-50 xl:flex-basis-60">
          <div class="h-full">
            <article class="h-full">
              <div class="h-full">
                <img class="sus" class="h-full object-cover" src="{{asset('poto/sus.webp')}}" width="733" height="412" alt='""' typeof="foaf:Image" />
              </div>
            </article>
          </div>
        </div>
        <div class="p-6 bg-grey">
          <div class="leading-relaxed">
            <h2 class="leading-tight text-4xl font-bold">Rekomendasi: Banget</h2>
            <p class="mt-4">Ini adalah roti sus khas dari perusahaan Rosan, memiliki rasa yang khas dan memiliki cream yang manis yang berbeda dari roti lainnya..</p>
            <p class="mt-4">Perusahaan Rosan memiliki resep khusus dalam pembuatan roti sus. Resep ini turun-temurun dari pemilik perusahaan Rosan. Roti ini memiliki harga yang lebih murah ketimbang produk roti lainnya di perusahaan Rosan..</p>
          </div>
        </div>
      </div>
    </section>
  </div>
</div>

@endsection