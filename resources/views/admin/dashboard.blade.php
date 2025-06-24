@extends('layouts.admin')

@section('content')
<section class="min-h-screen bg-gradient-to-r from-purple-600 to-blue-600 text-white py-20">
    <div class="max-w-6xl mx-auto px-4">
        <h1 class="text-4xl font-bold mb-8 animate__animated animate__fadeIn">Dashboard Admin</h1>

        <!-- Info Boxes -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-12">
            <div class="bg-white text-gray-800 rounded-lg p-6 shadow hover:shadow-lg transition animate__animated animate__zoomIn">
                <h2 class="text-lg font-semibold">Total Program</h2>
                <p class="text-2xl font-bold mt-2">{{ $totalProgram }}</p>
            </div>
            <div class="bg-white text-gray-800 rounded-lg p-6 shadow hover:shadow-lg transition animate__animated animate__zoomIn">
                <h2 class="text-lg font-semibold">Kalender Kegiatan</h2>
                <p class="text-2xl font-bold mt-2">{{ $totalKalender }}</p>
            </div>
            <div class="bg-white text-gray-800 rounded-lg p-6 shadow hover:shadow-lg transition animate__animated animate__zoomIn">
                <h2 class="text-lg font-semibold">Admin Terdaftar</h2>
                <p class="text-2xl font-bold mt-2">{{ $totalAdmin }}</p>
            </div>
        </div>

       <!-- Quick Links -->
<div class="grid grid-cols-1 md:grid-cols-3 gap-6">
    <a href="{{ route('program.index') }}"
       class="bg-gradient-to-r from-purple-600 to-blue-600 text-white p-6 rounded-lg text-xl font-semibold shadow-lg hover:opacity-90 transition animate__animated animate__fadeInUp">
        Kelola Program
    </a>
    <a href="{{ route('kalender.index') }}"
       class="bg-gradient-to-r from-purple-600 to-blue-600 text-white p-6 rounded-lg text-xl font-semibold shadow-lg hover:opacity-90 transition animate__animated animate__fadeInUp">
        Kelola Kalender
    </a>
    <a href="{{ route('admin.inbox') }}"
       class="bg-gradient-to-r from-purple-600 to-blue-600 text-white p-6 rounded-lg text-xl font-semibold shadow-lg hover:opacity-90 transition animate__animated animate__fadeInUp">
        Kelola Pesan 
    </a>
</div>

    </div>
</section>
@endsection
