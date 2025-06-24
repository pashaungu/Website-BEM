@extends('layouts.app')

@section('content')
<section class="bg-blue-50 py-20">
    <div class="max-w-6xl mx-auto px-4 text-center">
        <h1 class="text-4xl font-bold text-blue-800 mb-6">Program Kerja BEM</h1>
        <p class="text-gray-700 text-lg mb-10 max-w-3xl mx-auto">
            Berikut adalah program kerja resmi BEM.
        </p>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            @foreach ($programs as $program)
            <div class="bg-white p-6 rounded-lg shadow hover:shadow-lg transition">
                <h2 class="text-xl font-semibold text-blue-700 mb-2">{{ $program->judul }}</h2>
                <p class="text-gray-600">{{ $program->deskripsi }}</p>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endsection
