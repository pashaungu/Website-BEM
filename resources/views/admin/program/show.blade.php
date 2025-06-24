@extends('layouts.admin')

@section('content')
<div class="container mx-auto px-4 py-10">
    <h1 class="text-3xl font-bold text-blue-800 mb-6">Detail Program</h1>

    <div class="bg-white rounded-lg shadow p-6">
        <h2 class="text-2xl font-semibold text-purple-700 mb-4">{{ $program->judul }}</h2>

        <p class="text-gray-700 mb-6 leading-relaxed">{{ $program->deskripsi }}</p>

        <div class="text-sm text-gray-500 mb-6">
            <p><strong>Dibuat pada:</strong> {{ $program->created_at->format('d M Y') }}</p>
            <p><strong>Terakhir diperbarui:</strong> {{ $program->updated_at->format('d M Y') }}</p>
        </div>

        <div class="flex gap-4">
            <a href="{{ route('program.index') }}" class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded">
                Kembali ke Daftar
            </a>
            <a href="{{ route('program.edit', $program->id) }}" class="bg-yellow-500 hover:bg-yellow-600 text-white px-4 py-2 rounded">
                Edit Program
            </a>
            <form action="{{ route('program.destroy', $program->id) }}" method="POST" onsubmit="return confirm('Yakin ingin menghapus program ini?')">
                @csrf
                @method('DELETE')
                <button type="submit" class="bg-red-600 hover:bg-red-700 text-white px-4 py-2 rounded">
                    Hapus
                </button>
            </form>
        </div>
    </div>
</div>
@endsection
