@extends('layouts.app') @section('content')
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
            <p class="text-base leading-relaxed">
                Welcome back to your dashboard!
            </p>
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
                <li class="mb-2">
                    <strong>{{ $class->class }}</strong> - {{ $class->session }}
                    ({{ $class->city }})
                </li>
            @endforeach
        </ul>
    @endif
</div>
</div>
@endsection
