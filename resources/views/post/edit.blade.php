@extends('layout.main')
@section('uji')
<title>Edit Saran</title>

<div class="max-w-2xl mx-auto my-12 p-6 bg-white shadow-lg rounded-lg">
    <h2 class="text-2xl font-semibold text-gray-800 text-center mb-6">Edit Saran</h2>

    <!-- Form -->
    <form method="POST" action="{{ url('posts', $post->id) }}">
        @csrf
        @method('PUT')

        <!-- Nama -->
        <div class="mb-6">
            <label for="title" class="block text-sm font-medium text-gray-700">Nama Anda</label>
            <input type="text" id="title" name="title" value="{{ $post->title }}" class="mt-2 block w-full px-4 py-2 text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:focus:ring-blue-500 dark:text-white" placeholder="Nama Anda" required>
        </div>

        <!-- Pesan -->
        <div class="mb-6">
            <label for="body" class="block text-sm font-medium text-gray-700">Pesan</label>
            <textarea id="body" name="body" rows="4" class="mt-2 block w-full px-4 py-2 text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:focus:ring-blue-500 dark:text-white" placeholder="Tinggalkan Pesan...">{{ $post->body }}</textarea>
        </div>

        <!-- Button Submit -->
        <div class="flex justify-between items-center mb-6">
            <button type="submit" class="inline-block px-6 py-2.5 bg-blue-600 text-white font-medium text-sm leading-tight uppercase rounded-lg hover:bg-blue-700 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Kirim</button>
            <a href="{{ url('posts') }}" class="inline-block px-6 py-2.5 bg-gray-500 text-white font-medium text-sm leading-tight uppercase rounded-lg hover:bg-gray-600 focus:ring-4 focus:outline-none focus:ring-gray-300 dark:bg-gray-600 dark:hover:bg-gray-700 dark:focus:ring-gray-800">Kembali</a>
        </div>

        <!-- Success or Error Messages -->
        @if (session('success'))
            <div class="bg-green-500 text-white text-center p-3 rounded-md mb-4">
                <p>{{ session('success') }}</p>
            </div>
        @endif

        @if ($errors->any())
            <div class="bg-red-500 text-white text-center p-3 rounded-md">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    </form>
</div>

@endsection
