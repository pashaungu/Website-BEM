<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kontak;

class KontakController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|min:3|max:100',
            'phone' => 'nullable|string|regex:/^[0-9+\s()-]+$/|min:8|max:20',
            'email' => 'required|email:rfc,dns',
            'subject' => 'required|in:Kritik,Saran',
            'message' => 'required|string|min:10|max:1000',
        ]);

        Kontak::create($validated);

        return redirect()->back()->with('success', 'Pesan Anda berhasil dikirim!');
    }
}
