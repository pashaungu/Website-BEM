<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Kalender;
use Illuminate\Http\Request;

class KalenderController extends Controller
{
    public function index()
    {
        $kalenders = Kalender::all();
        return view('admin.kalender.index', compact('kalenders'));
    }

    public function create()
    {
        return view('admin.kalender.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required|string|max:255',
            'deskripsi' => 'nullable|string',
            'tanggal' => 'required|date',
        ]);

        Kalender::create($request->all());

        return redirect()->route('kalender.index')->with('success', 'Kalender berhasil ditambahkan.');
    }

    public function edit(Kalender $kalender)
    {
        return view('admin.kalender.edit', compact('kalender'));
    }

    public function update(Request $request, Kalender $kalender)
    {
        $request->validate([
            'judul' => 'required|string|max:255',
            'deskripsi' => 'nullable|string',
            'tanggal' => 'required|date',
        ]);

        $kalender->update($request->all());

        return redirect()->route('kalender.index')->with('success', 'Kalender berhasil diperbarui.');
    }

    public function destroy(Kalender $kalender)
    {
        $kalender->delete();

        return redirect()->route('kalender.index')->with('success', 'Kalender berhasil dihapus.');
    }
    
    public function show($id)
{
    $kalender = Kalender::findOrFail($id);
    return view('admin.kalender.show', compact('kalender'));
}


}
