<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function dashboard()
    {
        $userEmail = Auth::user()->email; // Mengambil email pengguna yang login
        $classes = DB::table('classes') // Query ke tabel classes
            ->where('email', $userEmail)
            ->get();

        return view('dashboard', compact('classes')); // Mengirimkan $classes ke view
    }
}
