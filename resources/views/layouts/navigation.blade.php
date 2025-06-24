<!-- Kosongkan atau buat minimal untuk publik -->
<nav class="bg-white border-b border-gray-200 shadow">
    <div class="max-w-7xl mx-auto px-4 py-4 flex justify-between items-center">
        <div class="text-lg font-bold text-blue-700">
            BEM
        </div>
        @auth
            <div class="text-sm text-gray-600">
                {{ Auth::user()->name }}
            </div>
        @endauth
    </div>
</nav>
