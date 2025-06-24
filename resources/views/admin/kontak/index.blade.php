@extends('layouts.admin')

@section('content')
<div class="p-6">
    <h2 class="text-2xl font-bold mb-4">Inbox Pesan Masuk</h2>

    @if ($kontaks->isEmpty())
        <p class="text-gray-600">Belum ada pesan masuk.</p>
    @else
        <div class="overflow-x-auto">
            <table class="min-w-full bg-white border">
                <thead class="bg-blue-800 text-white">
                    <tr>
                        <th class="py-2 px-4 border">Nama</th>
                        <th class="py-2 px-4 border">Email</th>
                        <th class="py-2 px-4 border">Subjek</th>
                        <th class="py-2 px-4 border">Pesan</th>
                        <th class="py-2 px-4 border">Tanggal</th>
                        <th class="py-2 px-4 border">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($kontaks as $kontak)
                        <tr class="hover:bg-gray-50">
                            <td class="py-2 px-4 border">{{ $kontak->name }}</td>
                            <td class="py-2 px-4 border">{{ $kontak->email }}</td>
                            <td class="py-2 px-4 border">{{ $kontak->subject }}</td>
                            <td class="py-2 px-4 border">
                                {{ \Illuminate\Support\Str::limit($kontak->message, 60) }}
                            </td>
                            <td class="py-2 px-4 border">{{ $kontak->created_at->format('d M Y') }}</td>
                            <td class="py-2 px-4 border">
                                <a href="{{ route('admin.inbox.show', $kontak->id) }}" class="text-blue-600 hover:underline mr-2">Lihat</a>
                                <form action="{{ route('admin.inbox.destroy', $kontak->id) }}" method="POST" class="inline-block" onsubmit="return confirm('Yakin ingin menghapus pesan ini?')">
                                    @csrf
                                    @method('DELETE')
                                    <button class="text-red-600 hover:underline">Hapus</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <div class="mt-4">
            {{ $kontaks->links() }}
        </div>
    @endif
</div>
@endsection
