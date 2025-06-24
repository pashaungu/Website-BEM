@extends('layouts.app')

@section('content')
<section class="bg-gradient-to-b from-white to-blue-50 py-20">
    <div class="text-center mb-12">
        <h2 class="text-4xl font-bold text-blue-900">Get in Touch</h2>
        <p class="text-lg text-gray-600 mt-2">Kami siap menerima kritik dan saran dari Anda.</p>
    </div>

    <div class="container mx-auto px-4 grid md:grid-cols-2 gap-10">
        <!-- Kiri: Info Kontak -->
        <div class="bg-cover bg-center rounded-xl p-8 text-white relative" style="background-image: url('/images/gedung.jpg');">
            <div class="absolute inset-0 bg-blue-900 bg-opacity-70 rounded-xl"></div>
            <div class="relative z-10 space-y-5">
                <h3 class="text-2xl font-bold">Hubungi Kami</h3>
                <p>Silakan isi formulir atau hubungi kontak kami secara langsung.</p>
                <div class="flex items-start gap-4">
                    <div class="text-2xl">📞</div>
                    <div><strong>Telepon:</strong> 089526075707</div>
                </div>
                <div class="flex items-start gap-4">
                    <div class="text-2xl">✉️</div>
                    <div><strong>Email:</strong> bem@gmail.com</div>
                </div>
            </div>
        </div>

        <!-- Kanan: Formulir -->
        <div class="bg-white shadow-xl rounded-xl p-8">
            <h3 class="text-2xl font-bold text-blue-900 mb-6">Kirim Pesan</h3>

            @if(session('success'))
                <div class="mb-4 p-4 bg-green-100 text-green-800 rounded">
                    {{ session('success') }}
                </div>
            @endif

            @if($errors->any())
                <div class="mb-4 p-4 bg-red-100 text-red-800 rounded">
                    <ul class="list-disc ml-5 text-sm">
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{ route('kontak.kirim') }}" method="POST" class="space-y-5">
                @csrf
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <input type="text" name="name" placeholder="Nama Lengkap" class="border p-3 rounded w-full" value="{{ old('name') }}" required>
                    <input type="text" name="phone" placeholder="No. Telepon (Opsional)" class="border p-3 rounded w-full" value="{{ old('phone') }}">
                </div>
                <input type="email" name="email" placeholder="Alamat Email" class="border p-3 rounded w-full" value="{{ old('email') }}" required>

                <select name="subject" class="border p-3 rounded w-full" required>
                    <option value="" disabled selected>Pilih Subjek</option>
                    <option value="Kritik" {{ old('subject') == 'Kritik' ? 'selected' : '' }}>Kritik</option>
                    <option value="Saran" {{ old('subject') == 'Saran' ? 'selected' : '' }}>Saran</option>
                </select>

                <textarea name="message" placeholder="Isi pesan Anda..." class="border p-3 rounded w-full h-32 resize-none" required>{{ old('message') }}</textarea>

                <button type="submit" class="w-full bg-blue-900 hover:bg-blue-700 text-white py-3 rounded font-semibold transition duration-300">
                    KIRIM
                </button>
            </form>
        </div>
    </div>
</section>
@endsection
