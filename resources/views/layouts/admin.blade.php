<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Admin BEM</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-sans bg-gray-100 text-gray-900">

    {{-- ✅ NAVBAR ADMIN --}}
    <header class="bg-purple-800 text-white shadow py-4">
        <div class="max-w-7xl mx-auto px-4 flex justify-between items-center">
            <div class="text-xl font-bold">Admin BEM</div>
            <div class="flex items-center gap-4">
                <span class="text-sm">{{ Auth::user()->name }}</span>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="bg-white text-purple-800 px-3 py-1 rounded hover:bg-gray-200">
                        Logout
                    </button>
                </form>
            </div>
        </div>
    </header>

    {{-- ✅ KONTEN ADMIN --}}
    <main class="py-6">
        @yield('content')
    </main>

</body>
</html>
