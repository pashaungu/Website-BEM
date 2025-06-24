@extends('layouts.admin')

@section('content')
<div class="container mx-auto px-4 py-10">
    <h1 class="text-3xl font-bold text-blue-800 mb-6">Detail Kegiatan Kalender</h1>

    <div class="bg-white rounded-lg shadow p-6">
        <h2 class="text-2xl font-semibold text-purple-700 mb-4">{{ $kalender->judul }}</h2>

        <p class="text-gray-700 mb-2"><strong>Tanggal:</strong> {{ \Carbon\Carbon::parse($kalender->tanggal)->format('d M Y') }}</p>
        <p class="text-gray-700 mb-6"><strong>Tempat:</strong> {{ $kalender->tempat }}</p>

        <div class="text-sm text-gray-500 mb-6">
            <p><strong>Dibuat pada:</strong> {{ $kalender->created_at->format('d M Y') }}</p>
            <p><strong>Terakhir diperbarui:</strong> {{ $kalender->updated_at->format('d M Y') }}</p>
        </div>

        <div class="flex gap-4">
            <a href="{{ route('kalender.index') }}" class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded">
                Kembali ke Daftar
            </a>
            <a href="{{ route('kalender.edit', $kalender->id) }}" class="bg-yellow-500 hover:bg-yellow-600 text-white px-4 py-2 rounded">
                Edit
            </a>
            <form action="{{ route('kalender.destroy', $kalender->id) }}" method="POST" onsubmit="return confirm('Yakin ingin menghapus kegiatan ini?')">
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
