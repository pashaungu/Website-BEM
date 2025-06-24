<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class AuthenticatedSessionController extends Controller
{
    /**
     * Tampilkan form login.
     */
    public function create(): View
    {
        return view('auth.login');
    }

    /**
     * Proses autentikasi login.
     */
    public function store(LoginRequest $request): RedirectResponse
    {
        $request->authenticate(); // Proses validasi email & password

        $request->session()->regenerate(); // Hindari session fixation

        // ✅ Arahkan berdasarkan role user
        return redirect()->intended(
            auth()->user()->role === 'admin'
                ? route('admin.dashboard')
                : route('home')
        );
    }

    /**
     * Logout user yang sedang login.
     */
    public function destroy(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout(); // Logout user

        $request->session()->invalidate(); // Hancurkan session

        $request->session()->regenerateToken(); // Reset CSRF token

        return redirect('/'); // Kembali ke homepage publik
    }
}
