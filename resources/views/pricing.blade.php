@extends('layouts.app')

@section('content')
<div class="container mx-auto py-8">
    <h1 class="text-4xl font-bold text-center mb-8">Our Pricing Plans</h1>
    <div class="flex flex-col md:flex-row justify-center items-center space-y-4 md:space-y-0 md:space-x-4">
        <!-- Basic Plan -->
        <div class="border p-6 rounded-lg shadow-lg w-full md:w-1/3">
            <h2 class="text-2xl font-semibold mb-4 text-center">Basic</h2>
            <p class="text-center text-4xl font-bold mb-4">$19<span class="text-xl font-normal">/month</span></p>
            <ul class="mb-6">
                <li class="mb-2">Access to gym facilities</li>
                <li class="mb-2">Free Wi-Fi</li>
                <li class="mb-2">Locker room access</li>
            </ul>
            <div class="text-center">
                <a href="#" class="bg-green-500 text-white px-4 py-2 rounded hover:bg-green-600 transition">Get Started</a>
            </div>
        </div>
        <!-- Standard Plan -->
        <div class="border p-6 rounded-lg shadow-lg w-full md:w-1/3">
            <h2 class="text-2xl font-semibold mb-4 text-center">Standard</h2>
            <p class="text-center text-4xl font-bold mb-4">$29<span class="text-xl font-normal">/month</span></p>
            <ul class="mb-6">
                <li class="mb-2">Everything in Basic</li>
                <li class="mb-2">Group classes</li>
                <li class="mb-2">Sauna access</li>
            </ul>
            <div class="text-center">
                <a href="#" class="bg-green-500 text-white px-4 py-2 rounded hover:bg-green-600 transition">Get Started</a>
            </div>
        </div>
        <!-- Premium Plan -->
        <div class="border p-6 rounded-lg shadow-lg w-full md:w-1/3">
            <h2 class="text-2xl font-semibold mb-4 text-center">Premium</h2>
            <p class="text-center text-4xl font-bold mb-4">$49<span class="text-xl font-normal">/month</span></p>
            <ul class="mb-6">
                <li class="mb-2">Everything in Standard</li>
                <li class="mb-2">Personal trainer sessions</li>
                <li class="mb-2">Nutrition plan</li>
            </ul>
            <div class="text-center">
                <a href="#" class="bg-green-500 text-white px-4 py-2 rounded hover:bg-green-600 transition">Get Started</a>
            </div>
        </div>
    </div>
</div>
@endsection