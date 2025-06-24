@extends('layouts.admin')

@section('content')
<div class="container mx-auto py-10">
    <h1 class="text-2xl font-bold mb-6">Edit Program: {{ $program->judul }}</h1>

    @if ($errors->any())
        <div class="mb-6 bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded">
            <ul class="list-disc ml-6">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('program.update', $program->id) }}" method="POST" class="bg-white p-6 rounded shadow-md">
        @csrf
        @method('PUT')

        <div class="mb-4">
            <label for="judul" class="block font-medium text-gray-700">Judul Program</label>
            <input type="text" name="judul" id="judul" value="{{ old('judul', $program->judul) }}" required
                class="w-full mt-1 p-2 border rounded focus:ring-2 focus:ring-blue-400">
        </div>

        <div class="mb-4">
            <label for="deskripsi" class="block font-medium text-gray-700">Deskripsi</label>
            <textarea name="deskripsi" id="deskripsi" rows="5" required
                class="w-full mt-1 p-2 border rounded focus:ring-2 focus:ring-blue-400">{{ old('deskripsi', $program->deskripsi) }}</textarea>
        </div>

        <div class="flex justify-end">
            <a href="{{ route('program.index') }}" class="mr-4 px-4 py-2 bg-gray-200 text-gray-800 rounded hover:bg-gray-300">Batal</a>
            <button type="submit" class="px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700">Update</button>
        </div>
    </form>
</div>
@endsection
