<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RegistrationController;
use Illuminate\Support\Facades\Route;

// Rute untuk registrasi custom
Route::post('/custom-register', [RegistrationController::class, 'store'])->name('custom.register');

Route::get('/', function () {
    return view('welcome');
});

Route::get('/yoga', function () {
    return view('yoga');
})->name('yoga');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/pricing', function () { return view('pricing'); })->name('pricing');
Route::get('/classes', function () { return view('classes'); })->name('classes');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
