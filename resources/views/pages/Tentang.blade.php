@extends('layouts.app')

@section('content')
<section class="bg-white py-20">
    <div class="max-w-6xl mx-auto px-4 text-center">
        <h1 class="text-4xl font-bold text-blue-800 mb-6">Tentang BEM</h1>
        <p class="text-gray-700 text-lg mb-10 max-w-3xl mx-auto">
            Badan Eksekutif Mahasiswa (BEM) adalah organisasi mahasiswa yang bertugas sebagai perwakilan aspirasi mahasiswa serta pelaksana program kerja yang berdampak bagi kampus dan masyarakat. Kami hadir untuk membangun perubahan, inovasi, dan kolaborasi nyata antar mahasiswa.
        </p>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 text-left">
            <div class="bg-blue-50 p-6 rounded-lg shadow hover:shadow-lg transition">
                <h2 class="text-xl font-semibold text-blue-700 mb-2">Visi</h2>
                <p class="text-gray-600">
                    Menjadi organisasi mahasiswa yang berintegritas, progresif, dan berdampak nyata untuk kampus dan masyarakat.
                </p>
            </div>

            <div class="bg-blue-50 p-6 rounded-lg shadow hover:shadow-lg transition">
                <h2 class="text-xl font-semibold text-blue-700 mb-2">Misi</h2>
                <ul class="list-disc pl-5 text-gray-600 space-y-2">
                    <li>Mengakomodasi aspirasi dan kebutuhan mahasiswa</li>
                    <li>Mengadakan program kerja yang inovatif dan bermanfaat</li>
                    <li>Menjalin sinergi dengan organisasi internal dan eksternal kampus</li>
                </ul>
            </div>

            <div class="bg-blue-50 p-6 rounded-lg shadow hover:shadow-lg transition">
                <h2 class="text-xl font-semibold text-blue-700 mb-2">Nilai-Nilai</h2>
                <p class="text-gray-600">
                    Kolaboratif, Integritas, Profesional, Transparan, dan Sosial.
                </p>
            </div>
        </div>
    </div>
</section>
@endsection
