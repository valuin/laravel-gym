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
        @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        @else
        <style>
        </style>
        @endif
        
    </head> 
    <body
        class="font-sans antialiased text-white h-full bg-cover bg-center p-5"
        style="background-image: url('{{ asset('bg.png') }}');"
    >
        <div class="container mx-auto px-4 py-5 relative z-10">
            <!-- Header -->
            <header class="flex justify-between items-center">
                <div class="logo flex items-center">
                    <img
                        src="{{ asset('icon.png') }}"
                        alt="Ramsfit logo"
                        class="w-8 h-8 mr-2"
                    />
                    <nav class="flex space-x-6">
                        <a
                            href="homepage.html"
                            class="hover:text-green-400 transition"
                            >Home</a
                        >
                        <a
                            href="aboutus.html"
                            class="hover:text-green-400 transition"
                            >About</a
                        >
                        <a
                            href="pricing.html"
                            class="hover:text-green-400 transition"
                            >Pricing</a
                        >
                        <a
                            href="classes.html"
                            class="hover:text-green-400 transition"
                            >Classes</a
                        >
                        <a
                            href="locations.html"
                            class="hover:text-green-400 transition"
                            >Location</a
                        >
                    </nav>
                </div>
            </header>
            <!-- Main Content -->
            <main class="text-start mt-20">
                <h1 class="text-6xl font-bold mb-5">RamsFit</h1>
                <h2 class="text-2xl mb-10">THE BEST GYM IN TOWN</h2>
                <a
                    href="classes.html"
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
                    <div
                        class="stats relative z-10 flex justify-between space-x-4"
                    >
                        <div class="stat text-center">
                            <div class="stat-number text-5xl font-bold">2</div>
                            <div class="stat-label text-xl mt-2">
                                Fitness Centers
                            </div>
                        </div>
                        <div class="stat text-center">
                            <div class="stat-number text-5xl font-bold">
                                850
                            </div>
                            <div class="stat-label text-xl mt-2">
                                Happy Clients
                            </div>
                        </div>
                        <div class="stat text-center">
                            <div class="stat-number text-5xl font-bold">
                                24/7
                            </div>
                            <div class="stat-label text-xl mt-2">
                                Operating Hours
                            </div>
                        </div>
                    </div>
                </section>
            </main>
            <!-- Footer -->
            <footer class="mt-20">
                <h2 class="text-2xl mb-5">Contact Us</h2>
                <div
                    class="footer-content flex flex-col md:flex-row justify-between space-y-4 md:space-y-0"
                >
                    <p>Address: Jalan Kebugaran</p>
                    <p>Phone: +62 8129897767</p>
                    <p>Email: info@ramsfit.com</p>
                </div>
            </footer>
        </div>
    </body>
</html>
