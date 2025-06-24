<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Program;

class ProgramController extends Controller
{
    public function public()
    {
        $programs = Program::all();
        return view('pages.program', compact('programs'));
    }
}
