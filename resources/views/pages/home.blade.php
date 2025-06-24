@extends('layouts.app')

@section('content')

<!-- Hero Section -->
<section class="min-h-screen bg-gradient-to-r from-blue-100 to-blue-300 py-20 flex items-center" data-aos="fade-up">
    <div class="max-w-6xl mx-auto px-4 flex flex-col md:flex-row items-center justify-between">
        <div class="md:w-1/2 mb-10 md:mb-0">
            <h2 class="text-4xl font-bold text-blue-800 animate__animated animate__fadeInDown">Selamat Datang di Website BEM</h2>
            <p class="mt-4 text-lg text-gray-700 animate__animated animate__fadeInLeft">
                Bersama BEM, mari bangun semangat kolaborasi dan inovasi!
            </p>
            <a href="#tentang" class="inline-block mt-6 px-6 py-3 bg-blue-600 text-white rounded shadow hover:bg-blue-700 transition animate__animated animate__pulse animate__infinite">
                Pelajari Lebih Lanjut
            </a>
        </div>
        <div class="md:w-1/2 text-center">
            <img src="{{ asset('images/University-Students-Illustration-1024x870.jpg') }}" alt="Mahasiswa" class="w-3/4 mx-auto rounded-lg shadow-lg animate__animated animate__zoomIn">
        </div>
    </div>
</section>

<!-- Tentang Section -->
<section id="tentang" class="py-20 bg-white text-center" data-aos="fade-up">
    <div class="max-w-6xl mx-auto px-4">
        <h2 class="text-3xl font-bold text-blue-800 mb-4 animate__animated animate__fadeIn">Tentang BEM</h2>
        <p class="text-gray-700 text-lg mb-10 leading-relaxed animate__animated animate__fadeInUp">
            BEM adalah organisasi mahasiswa yang bergerak dalam bidang sosial, pendidikan, dan kemahasiswaan.
            Kami hadir sebagai wadah aspirasi dan penggerak perubahan positif di lingkungan kampus dan masyarakat.
        </p>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <div class="bg-blue-50 p-6 rounded-lg shadow animate__animated animate__bounceIn">
                <h3 class="text-xl font-semibold text-blue-700 mb-2">Visi</h3>
                <p class="text-gray-600">Menjadi motor penggerak mahasiswa yang berintegritas, kritis, dan solutif.</p>
            </div>
            <div class="bg-blue-50 p-6 rounded-lg shadow animate__animated animate__bounceIn" style="animation-delay:0.2s;">
                <h3 class="text-xl font-semibold text-blue-700 mb-2">Misi</h3>
                <p class="text-gray-600">Mengembangkan potensi mahasiswa melalui program kerja yang inovatif dan kolaboratif.</p>
            </div>
            <div class="bg-blue-50 p-6 rounded-lg shadow animate__animated animate__bounceIn" style="animation-delay:0.4s;">
                <h3 class="text-xl font-semibold text-blue-700 mb-2">Nilai</h3>
                <p class="text-gray-600">Profesional, Religius, Nasionalis, Berdaya Saing, dan Berorientasi Sosial.</p>
            </div>
        </div>
    </div>
</section>

<!-- Program Section -->
<section id="program" class="py-20 bg-blue-50 text-center" data-aos="fade-up">
    <div class="max-w-6xl mx-auto px-4">
        <h2 class="text-3xl font-bold text-blue-800 mb-4 animate__animated animate__fadeIn">Program Unggulan BEM</h2>
        <p class="text-gray-700 text-lg mb-10 animate__animated animate__fadeInUp">
            Berikut beberapa program kerja unggulan kami untuk mendukung pengembangan mahasiswa.
        </p>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            @forelse ($programs as $program)
                <div class="bg-white p-6 rounded-lg shadow hover:shadow-lg animate__animated animate__zoomIn">
                    <h3 class="text-xl font-semibold text-blue-700 mb-2">{{ $program->judul }}</h3>
                    <p class="text-gray-600">{{ Str::limit($program->deskripsi, 100) }}</p>
                </div>
            @empty
                <p class="text-gray-500 col-span-3">Belum ada program ditambahkan.</p>
            @endforelse
        </div>
    </div>
</section>

<!-- Kalender Section -->
<section id="kalender" class="py-20 bg-white text-center" data-aos="fade-up">
    <div class="max-w-6xl mx-auto px-4">
        <h2 class="text-3xl font-bold text-blue-800 mb-6 animate__animated animate__fadeIn">Kalender Kegiatan</h2>
        <p class="text-gray-700 text-lg mb-10 animate__animated animate__fadeInUp">Jadwal lengkap kegiatan BEM sepanjang tahun.</p>
        <div class="overflow-x-auto animate__animated animate__zoomIn">
            <table class="min-w-full table-auto border-collapse shadow bg-white rounded-lg overflow-hidden">
                <thead class="bg-blue-600 text-white">
                    <tr>
                        <th class="px-4 py-3">Tanggal</th>
                        <th class="px-4 py-3">Nama Kegiatan</th>
                        <th class="px-4 py-3">Tempat</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($kalenders as $event)
                        <tr class="border-b hover:bg-blue-100 transition">
                            <td class="px-4 py-3">{{ \Carbon\Carbon::parse($event->tanggal)->translatedFormat('d M Y') }}</td>
                            <td class="px-4 py-3">{{ $event->judul }}</td>
                            <td class="px-4 py-3">{{ $event->tempat ?? '-' }}</td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="3" class="px-4 py-3 text-gray-500">Belum ada kegiatan.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</section>

<!-- Kontak Section -->
<section id="kontak" class="py-20 bg-blue-50 text-center" data-aos="fade-up">
    <div class="max-w-6xl mx-auto px-4">
        <h2 class="text-3xl font-bold text-blue-800 mb-4 animate__animated animate__fadeIn">Hubungi Kami</h2>
        <p class="text-gray-700 text-lg mb-10 animate__animated animate__fadeInUp">Jangan ragu untuk menghubungi kami jika ada pertanyaan atau saran.</p>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 text-left">
            <div class="bg-white p-6 rounded-lg shadow animate__animated animate__fadeInLeft">
                <h3 class="text-lg font-semibold text-blue-700 mb-2">Email</h3>
                <p class="text-gray-600">bem@example.com</p>
            </div>
            <div class="bg-white p-6 rounded-lg shadow animate__animated animate__fadeInLeft" style="animation-delay:0.3s;">
                <h3 class="text-lg font-semibold text-blue-700 mb-2">Telepon</h3>
                <p class="text-gray-600">+62 812-3456-7890</p>
            </div>
            <div class="bg-white p-6 rounded-lg shadow animate__animated animate__fadeInLeft" style="animation-delay:0.6s;">
                <h3 class="text-lg font-semibold text-blue-700 mb-2">Alamat</h3>
                <p class="text-gray-600">Jl. Kampus No. 123, Depok, Jawa Barat</p>
            </div>
        </div>
    </div>
</section>

@endsection
