<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/pricing', function () { return view('pricing'); })->name('pricing');
Route::get('/classes', function () { return view('classes'); })->name('classes');
Route::get('/aboutus', function () { return view('aboutus'); })->name('aboutus');
Route::get('/homepage', function () { return view('homepage'); })->name('homepage');
Route::get('/location', function () { return view('location'); })->name('location');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
