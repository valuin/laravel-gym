@extends('layouts.app')

@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RamsFit</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="font-sans bg-gray-100">
<div class="flex flex-col lg:flex-row justify-center items-center min-h-screen bg-transparent text-white">
    <!-- Left Section -->
    <div 
        class="flex-1 flex flex-col mr-4 justify-center items-start text-left p-8 bg-cover bg-center" 
        style="background-image: url('{{ asset('photo-fitness-man-woman-workout-gym_763111-22729.avif') }}')"
    >
        <div class="bg-black bg-opacity-60 p-6 rounded-lg">
            <h1 class="text-4xl font-extrabold leading-tight">Transform Your Body and Mind</h1>
            <p class="mt-6 text-lg leading-relaxed">
                Join <span class="text-emerald-400">RamsFit</span> today and unlock a world of fitness tailored just for you. Whether you're into <span class="font-semibold">Yoga, Pilates</span>, or <span class="font-semibold">Body Combat</span>, we offer expertly guided classes to suit your goals. Build strength, improve flexibility, and recharge your mind in a dynamic, supportive community.
            </p>
            <p class="mt-4 font-semibold text-emerald-400">Take the first step to a healthier, stronger you!</p>
        </div>
    </div>

    <!-- Right Section -->
    <div class="flex-1 bg-stone-900 text-white p-8 rounded-lg shadow-lg">
        <h2 class="text-3xl font-bold mb-6 text-center">Join Our Community Today!</h2>
        
        <!-- Tampilkan pesan sukses -->
        @if (session('success'))
            <div class="p-4 mb-4 text-green-800 bg-green-100 rounded">
                {{ session('success') }}
            </div>
        @endif

        <!-- Tampilkan pesan error -->
        @if ($errors->any())
            <div class="p-4 mb-4 text-red-800 bg-red-100 rounded">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

            <form action="{{ route('member') }}" method="POST" class="space-y-4">
            @csrf
            <!-- Nama -->
            <div class="form-group">
                <label for="name" class="block text-sm mb-2">Name *</label>
                <input type="text" id="name" name="name" required class="w-full p-2 rounded border border-gray-300 text-black">
            </div>

            <!-- Tanggal Lahir -->
            <div class="form-group">
                <label for="dob" class="block text-sm mb-2">Date of Birth *</label>
                <input type="date" id="dob" name="dob" required class="w-full p-2 rounded border border-gray-300 text-black">
            </div>

            <!-- Jenis Kelamin -->
            <div class="form-group">
                <label for="gender" class="block text-sm mb-2">Gender *</label>
                <select id="gender" name="gender" required class="w-full p-2 rounded border border-gray-300 text-black">
                    <option value="">Select Gender</option>
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                    <option value="other">Other</option>
                </select>
            </div>

            <!-- Nomor WhatsApp -->
            <div class="form-group">
                <label for="wa_number" class="block text-sm mb-2">WhatsApp Number *</label>
                <input type="tel" id="wa_number" name="wa_number" pattern="^\+?\d{10,15}$" required class="w-full p-2 rounded border border-gray-300 text-black">
            </div>

            <!-- Email -->
            <div class="form-group">
                <label for="email" class="block text-sm mb-2">Email *</label>
                <input type="email" id="email" name="email" required class="w-full p-2 rounded border border-gray-300 text-black">
            </div>

            <!-- Membership -->
            <div class="form-group">
                <label for="class" class="block text-sm mb-2">Membership *</label>
                <select id="membership" name="membership" required class="w-full p-2 rounded border border-gray-300 text-black">
                    <option value="">Select Membership</option>
                    <option value="daily">Daily Plan: Rp 35.000/day</option>
                    <option value="monthly">Monthly Plan: Rp 300.000/month</option>
                    <option value="annual">Annual Plan: Rp 2.800.000/year</option>
                </select>
            </div>

            <!-- Payment Methods -->
            <div class="form-group">
                <label for="payment_method" class="block text-sm mb-2">Payment Methods *</label>
                <select id="payment_method" name="payment_method" required class="w-full p-2 rounded border border-gray-300 text-black">
                    <option value="">Select Payment Method</option>
                    <option value="credit_card">Credit Card</option>
                    <option value="bank_transfer">Bank Transfer</option>
                    <option value="digital_wallet">Digital Wallets</option>
                </select>
            </div>

            <!-- Terms & Conditions -->
            <div class="form-group flex items-center">
                <input type="checkbox" id="terms" name="terms" required class="mr-2">
                <label for="terms" class="text-sm">I’ve read and agreed to the terms and conditions</label>
            </div>

            <!-- Declaration of Health -->
            <div class="form-group flex items-center">
                <input type="checkbox" id="health" name="health" required class="mr-2">
                <label for="health" class="text-sm">I’ve read and agree to the declaration of health</label>
            </div>

            <!-- Back Button -->
            <a href="{{ route('pricing') }}" 
            class="w-full p-3 text-center bg-gray-300 text-black rounded hover:bg-gray-400 block">
                Back to Pricing
            </a>

            <!-- Button -->
            <button type="submit" class="w-full p-3 bg-emerald-500 text-white rounded hover:bg-emerald-700">
                Register Now
            </button>
        </form>

        </div>
    </div>
</body>
</html>

@endsection