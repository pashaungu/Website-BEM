@extends('layouts.admin')

@section('content')
<div class="max-w-3xl mx-auto px-6 py-10 bg-white rounded shadow">
    <h2 class="text-2xl font-bold text-blue-800 mb-6">Detail Pesan Masuk</h2>

    <div class="space-y-4">
        <div>
            <span class="font-semibold text-gray-700">Nama:</span>
            <p>{{ $kontak->name }}</p>
        </div>

        <div>
            <span class="font-semibold text-gray-700">Email:</span>
            <p>{{ $kontak->email }}</p>
        </div>

        @if ($kontak->phone)
        <div>
            <span class="font-semibold text-gray-700">No. Telepon:</span>
            <p>{{ $kontak->phone }}</p>
        </div>
        @endif

        <div>
            <span class="font-semibold text-gray-700">Subjek:</span>
            <p>{{ $kontak->subject }}</p>
        </div>

        <div>
            <span class="font-semibold text-gray-700">Pesan:</span>
            <div class="whitespace-pre-line bg-gray-50 p-4 rounded border">{{ $kontak->message }}</div>
        </div>

        <div class="text-sm text-gray-500">
            Dikirim pada: {{ $kontak->created_at->format('d M Y H:i') }}
        </div>
    </div>

    <div class="mt-6 flex justify-between">
        <a href="{{ route('admin.inbox') }}" class="text-blue-600 hover:underline">← Kembali ke Inbox</a>

        <form action="{{ route('admin.inbox.destroy', $kontak->id) }}" method="POST" onsubmit="return confirm('Yakin ingin menghapus pesan ini?')">
            @csrf
            @method('DELETE')
            <button type="submit" class="text-red-600 hover:underline">Hapus Pesan</button>
        </form>
    </div>
</div>
@endsection
