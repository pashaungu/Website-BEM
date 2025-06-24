{{-- resources/views/auth/login.blade.php --}}
<x-guest-layout>
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email -->
        <div>
            <x-input-label for="email" :value="'Email'" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" 
                          :value="old('email')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="'Password'" />

            <div class="relative">
                <input id="password" 
                       class="block mt-1 w-full pr-10 rounded border-gray-300 focus:ring focus:ring-indigo-300" 
                       type="password" 
                       name="password" 
                       required 
                       autocomplete="current-password" />

                <button type="button" onclick="togglePassword()" 
                        class="absolute inset-y-0 right-0 flex items-center px-3 text-gray-600 focus:outline-none">
                    
                    <!-- Icon Mata Tutup (default muncul) -->
                    <svg id="eyeClosed" xmlns="http://www.w3.org/2000/svg" 
                         class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M13.875 18.825A10.05 10.05 0 0112 19c-4.478 0-8.268-2.943-9.542-7
                                 a10.05 10.05 0 012.187-3.368M9.88 9.88A3 3 0 0014.12 14.12M3 3l18 18" />
                    </svg>

                    <!-- Icon Mata Buka (default hidden) -->
                    <svg id="eyeOpen" xmlns="http://www.w3.org/2000/svg" 
                         class="h-5 w-5 hidden" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 
                                 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                    </svg>
                </button>
            </div>

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember -->
        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" 
                       class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" 
                       name="remember">
                <span class="ml-2 text-sm text-gray-600">Ingat saya</span>
            </label>
        </div>

        <div class="flex items-center justify-end mt-4">
            @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                    Lupa Password?
                </a>
            @endif

            <x-primary-button class="ml-3">
                Login
            </x-primary-button>
        </div>
    </form>

    <!-- Script Toggle Password -->
    <script>
        function togglePassword() {
            const password = document.getElementById("password");
            const eyeOpen = document.getElementById("eyeOpen");
            const eyeClosed = document.getElementById("eyeClosed");

            const isHidden = password.type === "password";
            password.type = isHidden ? "text" : "password";

            eyeOpen.classList.toggle("hidden", !isHidden);   // show eyeOpen when visible
            eyeClosed.classList.toggle("hidden", isHidden);  // hide eyeClosed when visible
        }
    </script>
</x-guest-layout>
