@extends('layouts.admin')

@section('content')
<div class="container mx-auto py-10">
    <h1 class="text-2xl font-bold mb-6">Tambah Kegiatan Baru</h1>

    {{-- Notifikasi sukses --}}
    @if (session('success'))
        <div class="mb-4 p-4 bg-green-100 border border-green-400 text-green-800 rounded">
            {{ session('success') }}
        </div>
    @endif

    {{-- Notifikasi error validasi --}}
    @if ($errors->any())
        <div class="mb-6 bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded">
            <ul class="list-disc ml-6">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('kalender.store') }}" method="POST" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
        @csrf

        <!-- Tanggal -->
        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="tanggal">
                Tanggal Kegiatan
            </label>
            <input type="date" name="tanggal" id="tanggal" value="{{ old('tanggal') }}"
                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight" required>
        </div>

        <!-- Judul -->
        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="judul">
                Nama Kegiatan
            </label>
            <input type="text" name="judul" id="judul" value="{{ old('judul') }}"
                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight" required>
        </div>

        <!-- Deskripsi -->
        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="deskripsi">
                Tempat / Keterangan
            </label>
            <input type="text" name="deskripsi" id="deskripsi" value="{{ old('deskripsi') }}"
                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight" required>
        </div>

        <!-- Tombol -->
        <div class="flex items-center justify-between">
            <button type="submit"
                class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                Simpan
            </button>
            <a href="{{ route('kalender.index') }}"
                class="inline-block align-baseline font-bold text-sm text-blue-600 hover:text-blue-800">
                Batal
            </a>
        </div>
    </form>
</div>
@endsection
