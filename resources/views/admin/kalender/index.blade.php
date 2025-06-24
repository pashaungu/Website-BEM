@extends('layouts.admin')

@section('content')
<div class="container mx-auto py-10">
    <div class="flex justify-between items-center mb-6">
        <h1 class="text-2xl font-bold">Daftar Kalender Kegiatan</h1>
        <a href="{{ route('kalender.create') }}" class="bg-purple-600 hover:bg-purple-700 text-white font-semibold px-4 py-2 rounded">
            Tambah Kegiatan
        </a>
    </div>

    @if(session('success'))
        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-4">
            {{ session('success') }}
        </div>
    @endif

    <div class="overflow-x-auto bg-white rounded shadow">
        <table class="min-w-full text-sm text-left">
            <thead class="bg-purple-600 text-white">
                <tr>
                    <th class="px-6 py-3">Tanggal</th>
                    <th class="px-6 py-3">Nama Kegiatan</th>
                    <th class="px-6 py-3">Tempat</th>
                    <th class="px-6 py-3 text-center">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($kalenders as $kalender)
                <tr class="border-b hover:bg-gray-100">
                    <td class="px-6 py-4">{{ $kalender->tanggal }}</td>
                    <td class="px-6 py-4">{{ $kalender->nama }}</td>
                    <td class="px-6 py-4">{{ $kalender->tempat }}</td>
                    <td class="px-6 py-4 text-center">
                        <a href="{{ route('kalender.edit', $kalender->id) }}" class="text-blue-500 hover:underline mr-3">Edit</a>
                        <form action="{{ route('kalender.destroy', $kalender->id) }}" method="POST" class="inline-block" onsubmit="return confirm('Yakin ingin menghapus kegiatan ini?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="text-red-500 hover:underline">Hapus</button>
                        </form>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="4" class="px-6 py-4 text-center text-gray-500">Belum ada kegiatan</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection
