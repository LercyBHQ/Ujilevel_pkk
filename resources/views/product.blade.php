@extends('layout.main')
@section('uji')
<title>Produk Kami</title>

<!-- Header Section -->
<div class="text-center p-10">
    <h1 class="font-extrabold text-4xl mb-4 text-gray-800">Produk Kami</h1>
    <p class="text-lg text-gray-600">Nikmati berbagai produk lezat dengan harga spesial!</p>
</div>

@if (session('success'))
    <div class="bg-green-500 text-white p-3 rounded-lg shadow-md mb-4 text-center">
        {{ session('success') }}
    </div>
@endif

<!-- Produk Grid Section -->
<section id="Products" class="w-full grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-8 mt-10 mb-5 px-6">

    <!-- Produk Card 1 -->
    <div class="w-full bg-white shadow-lg rounded-xl overflow-hidden transform duration-500 hover:scale-105 hover:shadow-2xl">
        <a href="#">
            <img src="{{ asset('poto/canai.jfif') }}" alt="Roti Canai" class="w-full h-72 object-cover rounded-t-xl">
            <div class="p-5">
                <span class="text-xs text-gray-500 uppercase">Rosan</span>
                <h2 class="text-xl font-bold text-gray-800 capitalize mt-2 truncate">Roti Canai</h2>
                <div class="flex items-center justify-between mt-3">
                    <span class="text-lg font-semibold text-gray-800">Rp12.000</span>
                    <del class="text-sm text-gray-500">Rp18.000</del>
                </div>
                <form method="POST" action="/cart/add" class="mt-4" onsubmit="return confirm('Apakah kamu yakin ingin membelinya?');">
                    @csrf
                    <input type="hidden" name="product_id" value="1">
                    <input type="hidden" name="product_name" value="Roti Canai">
                    <input type="hidden" name="price" value="12000">
                    <button type="submit" class="w-full bg-blue-500 text-white py-2 rounded-md hover:bg-blue-600 transition ease-in-out duration-300">
                        Beli
                    </button>
                </form>
            </div>
        </a>
    </div>

    <!-- Produk Card 2 -->
    <div class="w-full bg-white shadow-lg rounded-xl overflow-hidden transform duration-500 hover:scale-105 hover:shadow-2xl">
        <a href="#">
            <img src="{{ asset('poto/tortilla.jfif') }}" alt="Tortilla Beef" class="w-full h-72 object-cover rounded-t-xl">
            <div class="p-5">
                <span class="text-xs text-gray-500 uppercase">Rosan</span>
                <h2 class="text-xl font-bold text-gray-800 capitalize mt-2 truncate">Tortilla Beef</h2>
                <div class="flex items-center justify-between mt-3">
                    <span class="text-lg font-semibold text-gray-800">Rp14.000</span>
                    <del class="text-sm text-gray-500">Rp19.000</del>
                </div>
                <form method="POST" action="/cart/add" class="mt-4" onsubmit="return confirm('Apakah kamu yakin ingin membelinya?');">
                    @csrf
                    <input type="hidden" name="product_id" value="2">
                    <input type="hidden" name="product_name" value="Tortilla Beef">
                    <input type="hidden" name="price" value="14000">
                    <button type="submit" class="w-full bg-blue-500 text-white py-2 rounded-md hover:bg-blue-600 transition ease-in-out duration-300">
                        Beli
                    </button>
                </form>
            </div>
        </a>
    </div>

    <!-- Produk Card 3 -->
    <div class="w-full bg-white shadow-lg rounded-xl overflow-hidden transform duration-500 hover:scale-105 hover:shadow-2xl">
        <a href="#">
            <img src="{{ asset('poto/sus.webp') }}" alt="Roti Sus" class="w-full h-72 object-cover rounded-t-xl">
            <div class="p-5">
                <span class="text-xs text-gray-500 uppercase">Rosan</span>
                <h2 class="text-xl font-bold text-gray-800 capitalize mt-2 truncate">Roti Sus</h2>
                <div class="flex items-center justify-between mt-3">
                    <span class="text-lg font-semibold text-gray-800">Rp8.000</span>
                    <del class="text-sm text-gray-500">Rp10.000</del>
                </div>
                <form method="POST" action="/cart/add" class="mt-4" onsubmit="return confirm('Apakah kamu yakin ingin membelinya?');">
                    @csrf
                    <input type="hidden" name="product_id" value="3">
                    <input type="hidden" name="product_name" value="Roti Sus">
                    <input type="hidden" name="price" value="8000">
                    <button type="submit" class="w-full bg-blue-500 text-white py-2 rounded-md hover:bg-blue-600 transition ease-in-out duration-300">
                        Beli
                    </button>
                </form>
            </div>
        </a>
    </div>

    <!-- Produk Card 4 -->
    <div class="w-full bg-white shadow-lg rounded-xl overflow-hidden transform duration-500 hover:scale-105 hover:shadow-2xl">
        <a href="#">
            <img src="{{ asset('poto/es coklat.jpg') }}" alt="Es Coklat" class="w-full h-72 object-cover rounded-t-xl">
            <div class="p-5">
                <span class="text-xs text-gray-500 uppercase">Rosan</span>
                <h2 class="text-xl font-bold text-gray-800 capitalize mt-2 truncate">Es Coklat</h2>
                <div class="flex items-center justify-between mt-3">
                    <span class="text-lg font-semibold text-gray-800">Rp9.000</span>
                    <del class="text-sm text-gray-500">Rp15.000</del>
                </div>
                <form method="POST" action="/cart/add" class="mt-4" onsubmit="return confirm('Apakah kamu yakin ingin membelinya?');">
                    @csrf
                    <input type="hidden" name="product_id" value="4">
                    <input type="hidden" name="product_name" value="Es Coklat">
                    <input type="hidden" name="price" value="9000">
                    <button type="submit" class="w-full bg-blue-500 text-white py-2 rounded-md hover:bg-blue-600 transition ease-in-out duration-300">
                        Beli
                    </button>
                </form>
            </div>
        </a>
    </div>
    <div class="w-full bg-white shadow-lg rounded-xl overflow-hidden transform duration-500 hover:scale-105 hover:shadow-2xl">
        <a href="#">
            <img src="{{ asset('poto/croisan.jpg') }}" alt="Croissant" class="w-full h-72 object-cover rounded-t-xl">
            <div class="p-5">
                <span class="text-xs text-gray-500 uppercase">Rosan</span>
                <h2 class="text-xl font-bold text-gray-800 capitalize mt-2 truncate">Croissant</h2>
                <div class="flex items-center justify-between mt-3">
                    <span class="text-lg font-semibold text-gray-800">Rp12.000</span>
                    <del class="text-sm text-gray-500">Rp18.000</del>
                </div>
                <form method="POST" action="/cart/add" class="mt-4" onsubmit="return confirm('Apakah kamu yakin ingin membelinya?');">
                    @csrf
                    <input type="hidden" name="product_id" value="4">
                    <input type="hidden" name="product_name" value="Es Coklat">
                    <input type="hidden" name="price" value="12000">
                    <button type="submit" class="w-full bg-blue-500 text-white py-2 rounded-md hover:bg-blue-600 transition ease-in-out duration-300">
                        Beli
                    </button>
                </form>
            </div>
        </a>
    </div>

    <!-- Produk Card 5 -->
    <div class="w-full bg-white shadow-lg rounded-xl overflow-hidden transform duration-500 hover:scale-105 hover:shadow-2xl">
        <a href="#">
            <img src="{{ asset('poto/es mangga.jpg') }}" alt="Es Mangga" class="w-full h-72 object-cover rounded-t-xl">
            <div class="p-5">
                <span class="text-xs text-gray-500 uppercase">Rosan</span>
                <h2 class="text-xl font-bold text-gray-800 capitalize mt-2 truncate">Es Mangga</h2>
                <div class="flex items-center justify-between mt-3">
                    <span class="text-lg font-semibold text-gray-800">Rp9.000</span>
                    <del class="text-sm text-gray-500">Rp15.000</del>
                </div>
                <form method="POST" action="/cart/add" class="mt-4" onsubmit="return confirm('Apakah kamu yakin ingin membelinya?');">
                    @csrf
                    <input type="hidden" name="product_id" value="5">
                    <input type="hidden" name="product_name" value="Es Mangga">
                    <input type="hidden" name="price" value="9000">
                    <button type="submit" class="w-full bg-blue-500 text-white py-2 rounded-md hover:bg-blue-600 transition ease-in-out duration-300">
                        Beli
                    </button>
                </form>
            </div>
        </a>
    </div>

</section>

@endsection
