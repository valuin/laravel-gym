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

    <script
        src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"
        defer
    ></script>

    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const navbar = document.getElementById("navbar");
            const navbarContent = document.getElementById("navbar-content");
            const logoText = document.getElementById("logo-text");
            const logoImg = document.getElementById("logo-img");
            const navbarFlex = document.getElementById("navbar-flex");
            const authLinks = document.getElementById("auth-links");
            const navLinks = document.getElementById("nav-links");

            window.addEventListener("scroll", function () {
                const scrollPosition = window.scrollY;
                const maxScroll = 200;
                const progress = Math.min(scrollPosition / maxScroll, 1);

                // Update Navbar Position
                if (progress > 0) {
                    navbar.classList.add("top-4");
                    navbar.classList.remove("top-0");
                } else {
                    logoImg.style.display = "flex";
                    logoText.style.display = "flex";
                    navbar.classList.add("top-0");
                    navbar.classList.remove("top-4");
                }

                if (scrollPosition < 55) {
                    authLinks.classList.remove("ml-16");
                }
                if (scrollPosition > 35) {
                    logoText.style.display = "none";
                    logoImg.style.display = "none";
                    authLinks.classList.add("ml-16");
                } else {
                    logoText.style.display = "flex";
                    logoImg.style.display = "flex";
                }

                if (progress > 0) {
                    navbarContent.classList.add(
                        "bg-white/5",
                        "backdrop-blur-lg",
                        "border-white/50",
                        "shadow-glow",
                        "rounded-full",
                        "text-white",
                        "p-2",
                        "radial-gradient"
                    );
                    navbarContent.classList.remove(
                        "mt-4",
                        "text-white",
                        "border-transparent"
                    );
                } else {
                    navbarContent.classList.add(
                        "mt-4",
                        "text-white",
                        "border-transparent"
                    );
                    navbarContent.classList.remove(
                        "bg-white/5",
                        "backdrop-blur-lg",
                        "border-white/50",
                        "shadow-glow",
                        "rounded-full",
                        "text-white",
                        "p-2",
                        "radial-gradient"
                    );
                }

                navbarContent.classList.add("border");
                navbarContent.style.maxWidth = `${100 - progress * 34}%`;
                navbarContent.style.borderRadius = `${progress * 9999}px`;
                const paddingY = 0.75 + progress * 0.25;
                const paddingX = 1 + progress * 5;
                navbarContent.style.padding = `${paddingY}rem ${paddingX}rem`;
            });
        });
    </script>

    <body
        class="font-sans antialiased text-white h-12 w-full flex flex-col bg-cover bg-center"
        style="background-image: url('{{ asset('bg.png') }}')"
    >
        <div class="mx-auto flex-grow p-10 w-full py-10 relative mb-2 z-10">
            <!-- Header -->
            <nav
                id="navbar"
                class="w-11/12 fixed z-50 transition-all duration-300 ease-in-out top-0"
            >
                <div
                    id="navbar-content"
                    class="mx-auto flex justify-between items-center text-sm p-2 py-5 mt-4 text-white transition-all duration-300 ease-in-out"
                >
                    <div
                        id="navbar-flex"
                        class="flex items-center justify-between w-full"
                    >
                        <!-- Left Container: Logo and Navigation Links -->
                        <div class="flex items-center space-x-4">
                            <!-- Brand Logo -->
                            <a href="/" class="logo-link flex items-center">
                                <img
                                    src="{{ asset('icon.png') }}"
                                    alt="Ramsfit logo"
                                    class="w-6 h-6"
                                    id="logo-img"
                                />
                                <h2
                                    id="logo-text"
                                    class="text-xl font-semibold ml-2"
                                >
                                    Ramsfit
                                </h2>
                            </a>
                            <!-- Navigation Links -->
                            <nav
                                class="hidden md:flex space-x-4 text-base font-semibold"
                                id="nav-links"
                            >
                                <a
                                    href="{{ route('homepage') }}"
                                    class="hover:text-green-400 transition"
                                    >Home</a
                                >
                                <a
                                    href="{{ route('aboutus') }}"
                                    class="hover:text-green-400 transition"
                                    >About</a
                                >
                                <a
                                    href="{{ route('pricing') }}"
                                    class="hover:text-green-400 transition"
                                    >Pricing</a
                                >
                                <a
                                    href="{{ route('classes') }}"
                                    class="hover:text-green-400 transition"
                                    >Classes</a
                                >
                                <a
                                    href="{{ route('location') }}"
                                    class="hover:text-green-400 transition"
                                    >Location</a
                                >
                            </nav>
                        </div>

                        <!-- Right Container: Authentication Links -->
                        <div
                            class="hidden md:flex space-x-6 text-base font-semibold ml-auto"
                            id="auth-links"
                        >
                            @guest
                            <a
                                href="{{ route('login') }}"
                                class="hover:text-green-400 transition"
                                >Login</a
                            >
                            <a
                                href="{{ route('register') }}"
                                class="hover:text-green-400 transition"
                                >Register</a
                            >
                            @else
                            <div class="relative" x-data="{ open: false }">
                                <div class="flex flex-row">
                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 24 24"
                                        fill="currentColor"
                                        class="size-6"
                                    >
                                        <path
                                            fill-rule="evenodd"
                                            d="M7.5 6a4.5 4.5 0 1 1 9 0 4.5 4.5 0 0 1-9 0ZM3.751 20.105a8.25 8.25 0 0 1 16.498 0 .75.75 0 0 1-.437.695A18.683 18.683 0 0 1 12 22.5c-2.786 0-5.433-.608-7.812-1.7a.75.75 0 0 1-.437-.695Z"
                                            clip-rule="evenodd"
                                        />
                                    </svg>
                                    <button
                                        @click="open = !open"
                                        class="hover:text-green-400 transition focus:outline-none"
                                    >
                                        {{ Auth::user()->name }}
                                    </button>
                                </div>
                                <!-- Dropdown Menu -->
                                <div
                                    x-show="open"
                                    @click.away="open = false"
                                    x-transition
                                    class="absolute right-0 mt-2 w-48 bg-white rounded-md shadow-lg origin-top-right"
                                >
                                    <a
                                        href="{{ route('dashboard') }}"
                                        class="block px-4 py-2 text-gray-800 hover:bg-gray-100"
                                        >Dashboard</a
                                    >
                                    <form
                                        method="POST"
                                        action="{{ route('logout') }}"
                                    >
                                        @csrf
                                        <button
                                            type="submit"
                                            class="w-full text-left px-4 py-2 text-gray-800 hover:bg-gray-100"
                                        >
                                            Logout
                                        </button>
                                    </form>
                                </div>
                            </div>
                            @endguest
                        </div>
                    </div>
                </div>
            </nav>
            <!-- Main Content -->
            <main class="text-start w-full mt-20">@yield('content')</main>
        </div>
        <!-- Footer Component -->
        <x-footer />
    </body>
</html>
