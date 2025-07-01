<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Program;
use App\Models\Kalender;

class HomeController extends Controller
{
    public function index()
    {
        $programs = Program::latest()->take(3)->get(); // hanya ambil 3 program unggulan
        $kalenders = Kalender::latest()->take(3)->get(); // hanya ambil 3 kegiatan terbaru

        return view('pages.home', compact('programs', 'kalenders'));
        
    }
}
