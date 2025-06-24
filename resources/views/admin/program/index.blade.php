@extends('layouts.admin')

@section('content')
@php use Illuminate\Support\Str; @endphp

<section class="py-10 px-6">
    <h2 class="text-2xl font-bold mb-6">Kelola Program</h2>

    @if(session('success'))
        <div class="mb-4 p-4 bg-green-100 text-green-800 rounded">{{ session('success') }}</div>
    @endif

    <div class="mb-4">
        <a href="{{ route('program.create') }}" class="bg-purple-700 text-white px-4 py-2 rounded hover:bg-purple-800">
            + Tambah Program Baru
        </a>
    </div>

    @if ($programs->isEmpty())
        <p class="text-gray-600">Belum ada program yang ditambahkan.</p>
    @else
        <div class="overflow-x-auto bg-white shadow rounded-lg">
            <table class="min-w-full text-sm border">
                <thead class="bg-purple-800 text-white">
                    <tr>
                        <th class="py-2 px-4 text-left">Judul</th>
                        <th class="py-2 px-4 text-left">Deskripsi</th>
                        <th class="py-2 px-4 text-left">Tanggal</th>
                        <th class="py-2 px-4 text-left">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($programs as $program)
                        <tr class="border-b hover:bg-gray-100 transition">
                            <td class="py-2 px-4">{{ $program->judul }}</td>
                            <td class="py-2 px-4">{{ Str::limit($program->deskripsi, 50) }}</td>
                            <td class="py-2 px-4">{{ $program->created_at->format('d M Y') }}</td>
                            <td class="py-2 px-4">
                                <a href="{{ route('program.edit', $program->id) }}" class="text-blue-600 hover:underline">Edit</a> |
                                <form action="{{ route('program.destroy', $program->id) }}" method="POST" class="inline-block" onsubmit="return confirm('Yakin ingin menghapus?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="text-red-600 hover:underline">Hapus</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    @endif
</section>
@endsection
