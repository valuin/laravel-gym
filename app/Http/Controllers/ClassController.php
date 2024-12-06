<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ClassModel;
use Illuminate\Support\Facades\DB;

class ClassController extends Controller
{
    public function register(Request $request)
    {
        // Log data yang diterima untuk debugging
        \Log::info('Data diterima:', $request->all());

        // Validasi data dari request
        $validated = $request->validate([
            'city' => 'required|string|max:255',
            'class' => 'required|string|max:255',
            'session' => 'required|string|max:255',
            'name' => 'required|string|max:255',
            'wa_number' => 'required|string|max:255',
            'email' => 'required|email|unique:classes,email',
            'terms' => 'required|in:on', // Pastikan terms tercentang
            'health' => 'required|in:on', // Pastikan health tercentang
        ]);

        // Log validasi untuk memastikan data valid
        \Log::info('Data tervalidasi:', $validated);

        // Simpan data yang sudah tervalidasi ke database
        ClassModel::create($validated);

        // Cek query yang dijalankan
        \Log::debug('Query Log:', DB::getQueryLog());

        // Arahkan kembali ke halaman classes.blade.php
        return redirect()->route('classes')->with('success', 'Registrasi berhasil!');
    }
}
