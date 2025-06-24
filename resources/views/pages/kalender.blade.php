@extends('layouts.app')

@section('content')
<section class="min-h-screen py-20 bg-white">
    <div class="max-w-6xl mx-auto px-4 text-center">
        <h2 class="text-3xl font-bold text-blue-800 mb-6">Kalender Kegiatan</h2>
        <p class="text-gray-700 text-lg mb-10">Berikut jadwal kegiatan BEM.</p>

        <div class="overflow-x-auto">
            <table class="w-full table-auto border-collapse shadow bg-white rounded-lg">
                <thead class="bg-blue-600 text-white">
                    <tr>
                        <th class="px-4 py-3">Tanggal</th>
                        <th class="px-4 py-3">Judul</th>
                        <th class="px-4 py-3">Deskripsi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($kalenders as $kegiatan)
                    <tr class="border-b hover:bg-blue-50">
                        <td class="px-4 py-3">{{ \Carbon\Carbon::parse($kegiatan->tanggal)->translatedFormat('d M Y') }}</td>
                        <td class="px-4 py-3">{{ $kegiatan->judul }}</td>
                        <td class="px-4 py-3">{{ $kegiatan->deskripsi }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</section>
@endsection
