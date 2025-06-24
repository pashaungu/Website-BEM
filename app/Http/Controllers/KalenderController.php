<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kalender;

class KalenderController extends Controller
{
    public function public()
    {
        $kalenders = Kalender::all();
        return view('pages.kalender', compact('kalenders'));
    }
}
