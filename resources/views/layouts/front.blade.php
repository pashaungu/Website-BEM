<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BEM | {{ $title ?? 'Beranda' }}</title>

    <!-- CSS & Tailwind -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- AOS Animations -->
    <link rel="stylesheet" href="https://unpkg.com/aos@2.3.1/dist/aos.css">
</head>
<body class="bg-gray-50 text-gray-900 font-sans antialiased">

    {{-- Navbar Umum --}}
    @include('partials.navbar')

    {{-- Konten Utama --}}
    <main>
        @yield('content')
    </main>

    {{-- Footer (Opsional) --}}
    <footer class="bg-white text-center text-gray-500 text-sm py-4 mt-10 shadow-inner">
        &copy; {{ date('Y') }} BEM. All rights reserved.
    </footer>

    {{-- AOS JS --}}
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>AOS.init();</script>
</body>
</html>
