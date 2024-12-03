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

    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const navbar = document.getElementById("navbar");
            const navbarContent = document.getElementById("navbar-content");
            const logoText = document.getElementById("logo-text");
            const navbarFlex = document.getElementById("navbar-flex");

            window.addEventListener("scroll", function () {
                const scrollPosition = window.scrollY;
                const maxScroll = 200;
                const progress = Math.min(scrollPosition / maxScroll, 1);

                // Update Navbar Position
                if (progress > 0) {
                    navbar.classList.add("top-4");
                    navbar.classList.remove("top-0");
                } else {
                    logoText.style.display = "flex";
                    navbar.classList.add("top-0");
                    navbar.classList.remove("top-4");
                }

                if (scrollPosition > 100) {
                    logoText.style.display = "none";
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
                        "pr-20",
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
                const paddingX = 1 + progress * 15;
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
                class="w-full fixed z-50 transition-all duration-300 ease-in-out top-0"
            >
                <div
                    id="navbar-content"
                    class="mx-auto flex justify-between items-center text-sm p-2 py-5 mt-4 text-white transition-all duration-300 ease-in-out"
                >
                    <div
                        id="navbar-flex"
                        class="flex items-center justify-between w-full"
                    >
                        <!-- Brand Logo -->
                        <a href="/" class="logo-link">
                            <div class="logo flex items-center">
                                <img
                                    src="{{ asset('icon.png') }}"
                                    alt="Ramsfit logo"
                                    class="w-8 h-8"
                                />
                                <h2
                                    id="logo-text"
                                    class="text-xl font-semibold"
                                >
                                    Ramsfit
                                </h2>
                            </div>
                        </a>
                        <!-- Navigation Links -->
                        <nav
                            class="hidden md:flex space-x-4 text-base font-semibold pr-20"
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
                </div>
            </nav>
            <!-- Main Content -->
            <main class="text-start w-full mt-20">@yield('content')</main>
        </div>
        <!-- Footer Component -->
        <x-footer />
    </body>
</html>
