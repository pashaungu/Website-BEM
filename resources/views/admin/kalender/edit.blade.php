@extends('layouts.admin')

@section('content')
<div class="container mx-auto py-10">
    <h1 class="text-2xl font-bold mb-6">Edit Kegiatan</h1>

    <form action="{{ route('kalender.update', $kalender->id) }}" method="POST" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
        @csrf
        @method('PUT')

        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="tanggal">
                Tanggal Kegiatan
            </label>
            <input type="date" name="tanggal" id="tanggal" value="{{ $kalender->tanggal }}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight" required>
        </div>

        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="nama">
                Nama Kegiatan
            </label>
            <input type="text" name="nama" id="nama" value="{{ $kalender->nama }}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight" required>
        </div>

        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="tempat">
                Tempat
            </label>
            <input type="text" name="tempat" id="tempat" value="{{ $kalender->tempat }}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight" required>
        </div>

        <div class="flex items-center justify-between">
            <button type="submit" class="bg-purple-600 hover:bg-purple-700 text-white font-bold py-2 px-4 rounded">
                Update
            </button>
            <a href="{{ route('kalender.index') }}" class="inline-block align-baseline font-bold text-sm text-blue-600 hover:text-blue-800">
                Batal
            </a>
        </div>
    </form>
</div>
@endsection
