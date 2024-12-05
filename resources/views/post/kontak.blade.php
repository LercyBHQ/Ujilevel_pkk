@extends('layout.main')
@section('uji')
<title>Kontak</title>

<section class=" dark:bg-slate-800" id="contact">
    <div class="mx-auto max-w-7xl px-4 py-16 sm:px-6 lg:px-8 lg:py-20">
        <div class="mb-4">
            <div class="mb-6 max-w-3xl text-center sm:text-center md:mx-auto md:mb-12">
                <h2
                    class="font-heading mb-4 font-bold tracking-tight text-gray-900 dark:text-white text-3xl sm:text-5xl">
                    Contact Us
                </h2>
            </div>
        </div>
        <div class="flex items-stretch justify-center">
            <div class="grid md:grid-cols-2">
                <div class="h-full pr-6">
                    <p class="mt-3 mb-12 text-lg text-gray-600 dark:text-slate-400">
                        Hubungi kami jika anda mengalami masalah dan berikan kami keluhan tentang produk kami, kami akan
                        dengan senang hati melayani anda dan memberikan solusi yang tepat.
                    </p>
                    <ul class="mb-6 md:mb-0">
                        <li class="flex">
                            <div class="flex h-10 w-10 items-center justify-center rounded bg-blue-900 text-gray-50">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="h-6 w-6">
                                    <path d="M9 11a3 3 0 1 0 6 0a3 3 0 0 0 -6 0"></path>
                                    <path
                                        d="M17.657 16.657l-4.243 4.243a2 2 0 0 1 -2.827 0l-4.244 -4.243a8 8 0 1 1 11.314 0z">
                                    </path>
                                </svg>
                            </div>
                            <div class="ml-4 mb-4">
                                <h3 class="mb-2 text-lg font-medium leading-6 text-gray-900 dark:text-white">Our Address
                                </h3>
                                <p class="text-gray-600 dark:text-slate-400">Jatim, Pasuruan-Purwosari, Sengon Agung,
                                    Sumberrejo</p>
                            </div>
                        </li>
                        <li class="flex">
                            <div class="flex h-10 w-10 items-center justify-center rounded bg-blue-900 text-gray-50">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="h-6 w-6">
                                    <path
                                        d="M5 4h4l2 5l-2.5 1.5a11 11 0 0 0 5 5l1.5 -2.5l5 2v4a2 2 0 0 1 -2 2a16 16 0 0 1 -15 -15a2 2 0 0 1 2 -2">
                                    </path>
                                    <path d="M15 7a2 2 0 0 1 2 2"></path>
                                    <path d="M15 3a6 6 0 0 1 6 6"></path>
                                </svg>
                            </div>
                            <div class="ml-4 mb-4">
                                <h3 class="mb-2 text-lg font-medium leading-6 text-gray-900 dark:text-white">Contact
                                </h3>
                                <p class="text-gray-600 dark:text-slate-400">WA: +628121-7832-907</p>
                                <p class="text-gray-600 dark:text-slate-400">Email: baihaqifijar8686@gmail.com</p>
                            </div>
                        </li>
                        <li class="flex">
                            <div class="flex h-10 w-10 items-center justify-center rounded bg-blue-900 text-gray-50">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="h-6 w-6">
                                    <path d="M3 12a9 9 0 1 0 18 0a9 9 0 0 0 -18 0"></path>
                                    <path d="M12 7v5l3 3"></path>
                                </svg>
                            </div>
                            <div class="ml-4 mb-4">
                                <h3 class="mb-2 text-lg font-medium leading-6 text-gray-900 dark:text-white">Working
                                    hours</h3>
                                <p class="text-gray-600 dark:text-slate-400">Senin - Jum'at: 08:00 - 17:00</p>
                                <p class="text-gray-600 dark:text-slate-400">Sabtu &amp; Minggu: 08:00 - 12:00</p>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="card h-fit max-w-6xl p-5 md:p-12" id="form">
                    <div class="row">
                        <div class="col-md-6 offset-md-3">
                            @if (session('success'))
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    {{ session('success') }}
                                    <button type="button" class="btn-close" data-bs-dismiss="alert"
                                        aria-label="Close"></button>
                                </div>
                            @endif

                            <form method="POST" action="{{ url('posts') }}">
                                @csrf
                                <div class="mb-6">
                                    <div class="mx-0 mb-1 sm:mb-4">
                                        <label for="title" class="pb-1 text-xs uppercase tracking-wider"></label>
                                        <input type="text" id="title" name="title" placeholder="Nama"
                                            class="mb-2 w-full rounded-md border border-gray-400 py-2 pl-2 pr-4 shadow-md dark:text-gray-300 @error('title') is-invalid @enderror"
                                            value="{{ old('title') }}">
                                        @error('title')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="mx-0 mb-1 sm:mb-4">
                                        <label for="body" class="pb-1 text-xs uppercase tracking-wider"></label>
                                        <textarea id="body" name="body" cols="30" rows="5"
                                            placeholder="Tulis pesan anda..."
                                            class="mb-2 w-full rounded-md border border-gray-400 py-2 pl-2 pr-4 shadow-md dark:text-gray-300 @error('body') is-invalid @enderror">{{ old('body') }}</textarea>
                                        @error('body')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="text-center">
                                    <button type="submit"
                                        class="w-full bg-blue-800 text-white px-6 py-3 font-xl rounded-md sm:mb-0">Send
                                        Message</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="max-w-6xl mx-auto mt-12 px-4">
    <!-- Header Section -->
    <div class="text-center mb-8">
        <h1 class="text-3xl font-extrabold text-gray-800">Daftar Saran Atau Tanggapan</h1>
        <p class="text-lg text-gray-600 mt-2">Lihat dan kelola saran dari pengguna.</p>
    </div>

    <!-- Table Section -->
    <div class="bg-gray-900 rounded-lg shadow-lg p-6">
        <table class="w-full table-auto border-collapse rounded-lg overflow-hidden">
            <thead class="bg-gray-800 text-gray-50">
                <tr>
                    <th class="px-6 py-3 text-left text-sm font-semibold">Nama</th>
                    <th class="px-6 py-3 text-left text-sm font-semibold">Saran</th>
                    <th class="px-6 py-3 text-center text-sm font-semibold">Aksi</th>
                </tr>
            </thead>
            <tbody class="bg-blue-900 text-gray-50">
                @foreach ($posts as $post)
                    <tr class="hover:bg-blue-800 transition duration-200">
                        <td class="px-6 py-4 text-sm break-words w-1/4">{{ $post->title }}</td>
                        <td class="px-6 py-4 text-sm break-words w-1/2 max-w-[200px] truncate overflow-hidden" title="{{ $post->body }}">
                            {{ $post->body }}
                        </td>
                        <td class="px-6 py-4 text-center space-x-3">
                            <!-- Edit Button -->
                            <a href="{{ route('posts.edit', $post->id) }}" 
                                class="text-white bg-blue-600 hover:bg-blue-700 focus:ring-4 focus:ring-blue-300 rounded-lg text-sm px-4 py-2 transition duration-300">
                                Edit
                            </a>
                            <!-- Delete Button -->
                            <form method="POST" action="{{ url('posts', $post->id) }}" onsubmit="return confirm('⚠️ Apakah kamu yakin ingin menghapus?');" class="inline-block">
                                @csrf
                                @method('DELETE')
                                <button type="submit" 
                                    class="text-white bg-red-600 hover:bg-red-700 focus:ring-4 focus:ring-red-300 rounded-lg text-sm px-4 py-2 transition duration-300">
                                    Hapus
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
</div>

</section>
@endsection