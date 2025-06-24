<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Program;
use Illuminate\Http\Request;

class ProgramController extends Controller
{
    public function index()
    {
        $programs = Program::all();
        return view('admin.program.index', compact('programs'));
    }

    public function create()
    {
        return view('admin.program.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required|string|max:255',
            'deskripsi' => 'nullable|string',
            'tanggal' => 'nullable|date',
        ]);

        Program::create($request->all());

        return redirect()->route('program.index')->with('success', 'Program berhasil ditambahkan.');
    }

    public function edit(Program $program)
    {
        return view('admin.program.edit', compact('program'));
    }

    public function update(Request $request, Program $program)
    {
        $request->validate([
            'judul' => 'required|string|max:255',
            'deskripsi' => 'nullable|string',
            'tanggal' => 'nullable|date',
        ]);

        $program->update($request->all());

        return redirect()->route('program.index')->with('success', 'Program berhasil diupdate.');
    }

    public function destroy(Program $program)
    {
        $program->delete();

        return redirect()->route('program.index')->with('success', 'Program berhasil dihapus.');
    }

    public function show($id)
{
    $program = Program::findOrFail($id);
    return view('admin.program.show', compact('program'));
}



}
