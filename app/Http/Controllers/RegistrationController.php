<?php

namespace App\Http\Controllers;

use App\Models\Classes;
use Illuminate\Http\Request;

class RegistrationController extends Controller
{
    // Method untuk menyimpan data registrasi
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'city' => 'required|string',
            'class' => 'required|string',
            'session' => 'required|string',
            'name' => 'required|string',
            'wa_number' => 'required|string',
            'email' => 'required|email',
        ]);

        // Simpan data ke tabel 'classes'
        Classes::create([
            'city' => $validatedData['city'],
            'class' => $validatedData['class'],
            'session' => $validatedData['session'],
            'name' => $validatedData['name'],
            'wa_number' => $validatedData['wa_number'],
            'email' => $validatedData['email'],
        ]);

        // Redirect ke halaman classes dengan pesan sukses
        return redirect()->route('classes')->with('success', 'Registration successful!');
    }
}
