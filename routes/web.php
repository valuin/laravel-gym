<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ClassController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\CustomRegisterController;
use App\Http\Controllers\MemberController;


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
Route::get('/pricing', function () {
    return view('pricing');
})->name('pricing');
Route::get('/classes', function () {
    return view('classes');
})->name('classes');
Route::post('/yesking', [ClassController::class, 'register'])->name('yesking');
Route::post('/register', [MemberController::class, 'store'])->name('register');
Route::get('/member', [MemberController::class, 'index'])->name('member');
Route::post('/member', [MemberController::class, 'store'])->name('member.store');


Route::middleware('auth')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/yoga', function () { return view('yoga');})->name('yoga');
});

require __DIR__ . '/auth.php';
