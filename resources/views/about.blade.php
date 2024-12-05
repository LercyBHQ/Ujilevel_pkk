@extends('layout.main')
@section('uji')
<title>About</title>

<div class="sm:flex items-center max-w-screen-xl mx-auto mt-10">
    <!-- Bagian Gambar -->
    <div class="sm:w-1/2 p-10">
        <div class="image object-center text-center">
            <img src="https://i.imgur.com/WbQnbas.png" alt="Tentang Kami" class="rounded-lg shadow-lg">
        </div>
    </div>

    <!-- Bagian Teks -->
    <div class="sm:w-1/2 p-5">
        <div class="text">
            <!-- Label About -->
            <span class="text-gray-500 border-b-2 border-indigo-600 uppercase tracking-wide">About us</span>
            <!-- Judul -->
            <h2 class="my-4 font-bold text-3xl sm:text-4xl">
                Tentang <span class="text-indigo-600">Perusahaan Kami</span>
            </h2>
            <!-- Deskripsi -->
            <p class="text-gray-700 leading-relaxed mb-6">
                Perusahaan Rosan baru berdiri pada tahun 2024. Perusahaan kami menyediakan berbagai macam produk roti 
                berkualitas tinggi yang dibuat dengan bahan-bahan pilihan. Kami berkomitmen untuk memberikan rasa terbaik 
                dengan inovasi berkelanjutan.
            </p>

            <!-- Daftar Keunggulan -->
            <ul class="text-gray-700 space-y-4">
                <li class="flex items-start">
                    <svg class="w-6 h-6 text-indigo-600 flex-shrink-0 mr-3" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"></path>
                    </svg>
                    <span>Bahan baku pilihan dan berkualitas tinggi.</span>
                </li>
                <li class="flex items-start">
                    <svg class="w-6 h-6 text-indigo-600 flex-shrink-0 mr-3" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"></path>
                    </svg>
                    <span>Proses pembuatan higienis dan ramah lingkungan.</span>
                </li>
                <li class="flex items-start">
                    <svg class="w-6 h-6 text-indigo-600 flex-shrink-0 mr-3" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"></path>
                    </svg>
                    <span>Pilihan roti dengan rasa khas Nusantara.</span>
                </li>
            </ul>

            <!-- Tombol Call to Action -->
            <div class="mt-6">
                <a href="/product" class="inline-block bg-indigo-600 text-white px-6 py-3 rounded-lg shadow-lg hover:bg-indigo-700 transition">
                    Lihat Produk Kami
                </a>
            </div>
        </div>
    </div>
</div>




@endsection