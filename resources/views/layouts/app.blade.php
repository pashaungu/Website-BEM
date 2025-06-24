<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Website BEM</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-sans bg-gray-50 text-gray-900">

    {{-- ✅ NAVBAR PUBLIK --}}
    <header class="bg-white shadow-md sticky top-0 z-50">
        <div class="max-w-7xl mx-auto px-4 py-4 flex justify-between items-center">
            <div class="flex items-center space-x-3">
                <img src="{{ asset('images/Logo_BEM.png') }}" alt="Logo BEM" class="h-10">
                <span class="font-bold text-xl text-blue-700">BEM</span>
            </div>
            <nav class="space-x-6">
                <a href="{{ route('home') }}" class="hover:text-blue-700 font-semibold">Beranda</a>
                <a href="{{ route('tentang') }}" class="hover:text-blue-700 font-semibold">Tentang</a>
                <a href="{{ route('program') }}" class="hover:text-blue-700 font-semibold">Program</a>
                <a href="{{ route('kalender') }}" class="hover:text-blue-700 font-semibold">Kalender</a>
                <a href="{{ route('kontak') }}" class="hover:text-blue-700 font-semibold">Kontak</a>
            </nav>
        </div>
    </header>

    <main class="py-6">
        @yield('content')
    </main>

</body>
</html>
