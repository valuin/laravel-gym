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
            @extends('layouts.app') @section('title', 'Ramsfit - The Best Gym in
            Town') @section('content')
            <h1 class="text-6xl font-bold mb-5">RamsFit</h1>
            <h2 class="text-2xl mb-10">THE BEST GYM IN TOWN</h2>
            <a
                href="{{ route('member') }}"
                class="cta-button inline-block bg-white text-black font-bold py-2 px-4 rounded hover:bg-green-400 transition"
            >
                Join Now
            </a>
            <!-- Stats Section -->
            <section
                class="stats-container relative mt-16 bg-white bg-opacity-5 rounded-2xl shadow-xl hover:shadow-2xl transition p-10"
            >
                <img
                    src="{{ asset('homepic.png') }}"
                    alt="Gym equipment"
                    class="stats-bg absolute inset-0 w-full h-full object-cover rounded-2xl opacity-20"
                />
                <div class="stats relative z-10 flex justify-between space-x-4">
                    <div class="stat text-center">
                        <div class="stat-number text-5xl font-bold">2</div>
                        <div class="stat-label text-xl mt-2">
                            Fitness Centers
                        </div>
                    </div>
                    <div class="stat text-center">
                        <div class="stat-number text-5xl font-bold">850</div>
                        <div class="stat-label text-xl mt-2">Happy Clients</div>
                    </div>
                    <div class="stat text-center">
                        <div class="stat-number text-5xl font-bold">24/7</div>
                        <div class="stat-label text-xl mt-2">
                            Operating Hours
                        </div>
                    </div>
                </div>
            </section>

            <div
                class="flex flex-col md:flex-row justify-center items-center mt-32 gap-6 text-center md:text-left"
            >
                <img
                    src="{{ asset('home2.png') }}"
                    alt="Gym equipment"
                    class="w-1/2 h-auto inline-block"
                />
                <div class="flex flex-col items-center md:items-start">
                    <h2 class="text-5xl font-bold">
                        Membership starts from Rp 35.000/day
                    </h2>
                    <p class="mt-4">
                        Enjoy unlimited workouts at all RamsFit clubs with
                        premium facilities and access to exclusive fitness
                        classes.
                    </p>
                </div>
            </div>

            <div
                class="flex flex-col justify-center items-center mt-32 gap-6 text-center md:text-left"
            >
                <!-- Section Title and Description -->
                <div class="flex-col justify-center text-center">
                    <span class="font-semibold text-5xl">Featured Class</span>
                    <p>
                        Unleash your potential with RamsFit's signature
                        workouts. Energizing, results-driven classes designed to
                        help you train like a pro!
                    </p>
                </div>

                <div
                    class="flex flex-row gap-6 items-start mt-8 w-full justify-center flex-wrap"
                >
                    <!-- Card 1: Yoga -->
                    <div
                        class="bg-white/10 backdrop-blur-sm rounded-lg p-6 hover:bg-white/20 transition-all border border-white/20 w-full sm:w-1/2 md:w-1/3"
                    >
                        <h3 class="text-2xl font-semibold mb-4">Yoga</h3>
                        <p class="text-sm text-gray-300 mb-4">
                            Find your inner balance with our expert-led yoga
                            sessions.
                        </p>
                        <div class="flex items-center mt-4">
                            <span class="text-sm">60 mins</span>
                            <span class="mx-2">•</span>
                            <span class="text-sm">All Levels</span>
                        </div>
                    </div>

                    <!-- Card 2: Body Combat -->
                    <div
                        class="bg-white/10 backdrop-blur-sm rounded-lg p-6 hover:bg-white/20 transition-all border border-white/20 w-full sm:w-1/2 md:w-1/3"
                    >
                        <h3 class="text-2xl font-semibold mb-4">Body Combat</h3>
                        <p class="text-sm text-gray-300 mb-4">
                            High-energy martial arts-inspired workout that burns
                            major calories.
                        </p>
                        <div class="flex items-center mt-4">
                            <span class="text-sm">45 mins</span>
                            <span class="mx-2">•</span>
                            <span class="text-sm">Intermediate</span>
                        </div>
                    </div>

                    <!-- Card 3: Pilates -->
                    <div
                        class="bg-white/10 backdrop-blur-sm rounded-lg p-6 hover:bg-white/20 transition-all border border-white/20 w-full sm:w-1/2 md:w-1/3"
                    >
                        <h3 class="text-2xl font-semibold mb-4">Pilates</h3>
                        <p class="text-sm text-gray-300 mb-4">
                            Core-strengthening exercises for improved
                            flexibility and posture.
                        </p>
                        <div class="flex items-center mt-4">
                            <span class="text-sm">50 mins</span>
                            <span class="mx-2">•</span>
                            <span class="text-sm">All Levels</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Testimonials Section -->
            <section class="testimonials-container mt-16">
                <h2 class="text-5xl font-bold mb-8 text-center">What They Said About Us</h2>
                <div class="flex flex-col md:flex-row justify-center items-center gap-8">
                    <!-- Testimonial Card 1 -->
                    <div class="bg-white bg-opacity-10 backdrop-blur-sm rounded-lg p-6 flex flex-col items-center text-center border border-white/20">
                        <img src="{{ asset('testimony-1.png') }}" alt="Customer Image" class="w-36 h-36 rounded-full mb-4">
                        <blockquote class="italic text-gray-300">
                            "RamsFit has transformed my fitness journey! The trainers are amazing and the facilities are top-notch."
                        </blockquote>
                    </div>
                    <!-- Testimonial Card 2 -->
                    <div class="bg-white bg-opacity-10 backdrop-blur-sm rounded-lg p-6 flex flex-col items-center text-center border border-white/20">
                        <img  src="{{ asset('testimony-2.png') }}" alt="Customer Image" class="w-36 h-36 rounded-full mb-4">
                        <blockquote class="italic text-gray-300">
                            "Amazing community and supportive staff. I've never felt more motivated to reach my fitness goals."
                        </blockquote>
                    </div>
                </div>
            </section>

            @endsection
        </main>
    </body>
</html>
