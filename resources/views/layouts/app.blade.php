<!-- resources/views/layouts/app.blade.php -->
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />

        <title>@yield('title', 'Ramsfit - The Best Gym in Town')</title>

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
        class="font-sans antialiased text-white h-12 w-full flex flex-col bg-cover bg-center"
        style="background-image: url('{{ asset('bg.png') }}')"
    >
        <div class="mx-auto flex-grow p-10 w-full py-10 relative mb-2 z-10">
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
            <main class="text-start w-full mt-20">@yield('content')</main>
        </div>
        <!-- Footer Component -->
        <x-footer />
    </body>
</html>
