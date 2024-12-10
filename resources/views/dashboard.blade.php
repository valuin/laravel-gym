@extends('layouts.app') @section('content')
<!DOCTYPE html>
<html>
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
    
    <div class="container mx-auto py-8">
        <!-- Profile Section -->
        <div
            class="bg-white bg-opacity-10 backdrop-blur-sm rounded-lg p-6 shadow-lg flex items-center mb-10"
        >
            <svg
                xmlns="http://www.w3.org/2000/svg"
                fill="none"
                viewBox="0 0 24 24"
                stroke-width="1.5"
                stroke="currentColor"
                class="size-24"
            >
                <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    d="M17.982 18.725A7.488 7.488 0 0 0 12 15.75a7.488 7.488 0 0 0-5.982 2.975m11.963 0a9 9 0 1 0-11.963 0m11.963 0A8.966 8.966 0 0 1 12 21a8.966 8.966 0 0 1-5.982-2.275M15 9.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z"
                />
            </svg>
    
            <div class="text-white">
                <h2 class="text-4xl font-bold mb-2">{{ Auth::user()->name }}</h2>
                <a href="{{ route('profile.edit') }}">
                    <div class="flex gap-1">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L10.582 16.07a4.5 4.5 0 0 1-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 0 1 1.13-1.897l8.932-8.931Zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0 1 15.75 21H5.25A2.25 2.25 0 0 1 3 18.75V8.25A2.25 2.25 0 0 1 5.25 6H10" />
                          </svg>
                    
                        <p class="text-base leading-relaxed mt-0.5">
                            Edit Your Profile
                        </p>
                    </div>
                </a>
                <!-- Additional user info can be added here -->
            </div>
        </div>
    
        <!-- Booked Classes Placeholder -->
        <div
        class="bg-white bg-opacity-10 backdrop-blur-sm rounded-lg p-6 shadow-lg"
    >
        <h3 class="text-2xl font-bold mb-4">Your Booked Gym Classes</h3>
        @if($classes->isEmpty())
            <p class="text-base leading-relaxed">
                You have not booked any gym classes yet.
            </p>
        @else
            <ul class="mt-4">
                @foreach($classes as $class)
                <li class="mb-2 flex justify-between items-center">
                    <div>
                        <strong>{{ $class->class }} - <strong>{{ $class->date }}</strong></strong> - {{ $class->session }}
                        ({{ $class->city }})
                    </div>
                    <form action="{{ route('classes.destroy', $class->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this class?');">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="text-red-500 hover:text-red-700">Delete</button>
                    </form>
                </li>
                @endforeach
            </ul>
        @endif
    </div>
    </div>
</html>
@endsection
