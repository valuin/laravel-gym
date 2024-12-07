<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ClassModel;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ClassController extends Controller
{
    public function register(Request $request)
    {
        \Log::info('Data diterima:', $request->all());

        $validated = $request->validate([
            'city' => 'required|string|max:255',
            'class' => 'required|string|max:255',
            'session' => 'required|string|max:255',
            'name' => 'required|string|max:255',
            'wa_number' => 'required|string|max:255',
            'terms' => 'required|in:on',
        ]);

        $validated['email'] = Auth::user()->email;

        
        \Log::info('Data tervalidasi:', $validated);

       
        ClassModel::create($validated);

        \Log::debug('Query Log:', DB::getQueryLog());

        return redirect()->route('classes')->with('success', 'Registrasi berhasil!');
    }
}
