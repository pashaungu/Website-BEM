<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Kontak;
use Illuminate\Http\Request;

class KontakAdminController extends Controller
{
    public function index()
    {
        $kontaks = Kontak::latest()->paginate(10);
        return view('admin.kontak.index', compact('kontaks'));
    }

    public function show($id)
    {
        $kontak = Kontak::findOrFail($id);
        return view('admin.kontak.show', compact('kontak'));
    }

    public function destroy($id)
    {
        $kontak = Kontak::findOrFail($id);
        $kontak->delete();

        return redirect()->route('admin.inbox')->with('success', 'Pesan berhasil dihapus!');
    }
}
