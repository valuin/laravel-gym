<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ClassController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\CustomRegisterController;


Route::get('/', function () {
    return view('welcome');
});


Route::get('/homepage', function () {
    return view('welcome');
})->name('homepage');

Route::get('/aboutus', function () {
    return view('aboutus');
})->name('aboutus');

Route::get('/location', function () {
    return view('location');
})->name('location');

Route::get('/yoga', function () {
    return view('yoga');
})->name('yoga');

Route::get('/body_combat', function () {
    return view('body_combat');
})->name('body_combat');

Route::get('/pilates', function () {
    return view('pilates');
})->name('pilates');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/pricing', function () { return view('pricing'); })->name('pricing');
Route::get('/classes', function () { return view('classes'); })->name('classes');
Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');
Route::post('/yesking', [ClassController::class, 'register'])->name('yesking');
Route::get('/member', [MemberController::class, 'index'])->name('member');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
