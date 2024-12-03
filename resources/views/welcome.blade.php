<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />

        <title>Ramsfit - The Best Gym in Town</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net" />
        <link
            href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap"
            rel="stylesheet"
        />

        <!-- Styles / Scripts -->
        @if (file_exists(public_path('build/manifest.json')) ||
        file_exists(public_path('hot'))) @vite(['resources/css/app.css',
        'resources/js/app.js']) @else
        <style></style>
        @endif
    </head>
    <body
        class="font-sans antialiased text-white min-h-screen w-full flex flex-col bg-cover bg-center"
        style="background-image: url('{{ asset('bg.png') }}')"
    >
            <main class="text-start w-full">
                @extends('layouts.app')

                @section('title', 'Ramsfit - The Best Gym in Town')

                @section('content')
                    <h1 class="text-6xl font-bold mb-5">RamsFit</h1>
                    <h2 class="text-2xl mb-10">THE BEST GYM IN TOWN</h2>
                    <a href="classes.html" class="cta-button inline-block bg-white text-black font-bold py-2 px-4 rounded hover:bg-green-400 transition">
                        Join Now
                    </a>
                    <!-- Stats Section -->
                    <section class="stats-container relative mt-16 bg-white bg-opacity-5 rounded-2xl shadow-xl hover:shadow-2xl transition p-10">
                        <img src="{{ asset('homepic.png') }}" alt="Gym equipment" class="stats-bg absolute inset-0 w-full h-full object-cover rounded-2xl opacity-20" />
                        <div class="stats relative z-10 flex justify-between space-x-4">
                            <div class="stat text-center">
                                <div class="stat-number text-5xl font-bold">2</div>
                                <div class="stat-label text-xl mt-2">Fitness Centers</div>
                            </div>
                            <div class="stat text-center">
                                <div class="stat-number text-5xl font-bold">850</div>
                                <div class="stat-label text-xl mt-2">Happy Clients</div>
                            </div>
                            <div class="stat text-center">
                                <div class="stat-number text-5xl font-bold">24/7</div>
                                <div class="stat-label text-xl mt-2">Operating Hours</div>
                            </div>
                        </div>
                    </section>
                @endsection
            </main>
    </body>
</html>
