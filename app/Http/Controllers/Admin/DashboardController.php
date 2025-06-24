<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Program;
use App\Models\Kalender;
use App\Models\User;
use App\Models\Kontak;

class DashboardController extends Controller
{
    public function index()
    {
        return view('admin.dashboard', [
            'totalProgram' => Program::count(),
            'totalKalender' => Kalender::count(),
            'totalAdmin' => User::where('role', 'admin')->count()
        ]);
    }
}

