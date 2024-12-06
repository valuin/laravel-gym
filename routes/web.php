<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RegistrationController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MemberController;


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
Route::get('/aboutus', function () { return view('aboutus'); })->name('aboutus');
Route::get('/homepage', function () { return view('welcome'); })->name('homepage');
Route::get('/location', function () { return view('location'); })->name('location');
Route::get('/member', function () {return view('member'); })->name('member');



// Gunakan satu route untuk handle form pendaftaran
Route::post('/classes', [RegistrationController::class, 'store'])->name('register');
Route::post('/register', [MemberController::class, 'store'])->name('register');
Route::post('/member', [MemberController::class, 'store'])->name('register')->withoutMiddleware('auth');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';