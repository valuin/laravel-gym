@extends('layouts.app')

@section('content')
<div>
    <!-- Header -->
    <header class="bg-black text-white p-4 flex justify-between items-center">
         </header>

    <!-- Hero Section -->
    <div class="relative h-[500px] w-full bg-cover bg-center" style="background-image: url('https://www.rishikulyogshalarishikesh.com/blog/wp-content/uploads/2024/08/ashtanga-vinyasa-yoga-1024x682.jpg');">
        <!-- Overlay -->
        <div class="absolute inset-0 bg-black bg-opacity-50"></div>
        <!-- Content -->
        <div class="absolute inset-0 flex flex-col justify-center text-white px-8 md:px-16 lg:px-32">
            <h1 class="text-4xl font-bold mb-4">ASHTANGA YOGA</h1>
            <p class="text-lg max-w-lg mb-6">
                Ashtanga Yoga is a dynamic practice that links breath with movement through a set sequence of postures, fostering strength, flexibility, and mindfulness. Rooted in ancient tradition, it encourages discipline and focus, making it a transformative journey for both body and mind.
            </p>
            <a href="{{ route('yoga') }}" class="relative bg-white text-black px-6 py-2 rounded-md font-bold hover:bg-gray-300 hover:shadow-[0_4px_20px_rgba(0,128,0,0.8)] hover:scale-105 w-fit transition">View This Class</a>
        </div>
    </div>

    <!-- Explore All Classes Section -->
    <div class="container mx-auto py-8">
        <h1 class="text-4xl font-bold text-center mb-8">Explore All Classes</h1>
        <div class="flex flex-wrap justify-center items-center gap-8">
            @php
                $classes = [
                    [
                        'name' => 'Yoga',
                        'price' => '$19',
                        'features' => ['Access to gym facilities', 'Free Wi-Fi', 'Locker room access'],
                        'image' => 'https://d1vbn70lmn1nqe.cloudfront.net/prod/wp-content/uploads/2021/06/29044522/Yoga.jpg', // URL Background Image
                        'url' => route('yoga') // Link tujuan
                    ],
                    [
                        'name' => 'Body Combat',
                        'price' => '$29',
                        'features' => ['Group Classes', 'Cardio Equipment', 'Guided Sessions'],
                        'image' => 'https://prod-everyoneactive-wp.s3.eu-west-2.amazonaws.com/wp-content/uploads/2019/02/14135347/FW17-BODYCOMBAT-BRAND-IMAGE-cropped-1024x576.jpg', // URL Background Image
                        'url' => route('yoga') // Link tujuan
                    ],
                    [
                        'name' => 'Pilates',
                        'price' => '$25',
                        'features' => ['Flexibility Training', 'Mindfulness Sessions', 'Premium Mats'],
                        'image' => 'https://cdn.prod.website-files.com/6474525654e763b2569e6b78/6541bc6dc2cdfb8dc7f64b89_64a4feaaba4b95d0185337ef_foundation-banner-image2.webp', // URL Background Image
                        'url' => route('yoga') // Link tujuan
                    ]
                ];
            @endphp

            @foreach ($classes as $class)
            <!-- Frame yang bisa diklik -->
            <a href="{{ $class['url'] }}" class="relative border rounded-lg shadow-lg w-full md:w-1/3 bg-cover bg-center text-white transition transform hover:scale-105 hover:shadow-[0_4px_20px_rgba(0,128,0,0.8)]" 
                 style="background-image: url('{{ $class['image'] }}');">
                <!-- Overlay -->
                <div class="absolute inset-0 bg-black bg-opacity-60 rounded-lg"></div>
                <!-- Content -->
                <div class="relative p-6">
                    <h2 class="text-2xl font-semibold mb-4 text-center">{{ $class['name'] }}</h2>
                    <p class="text-center text-xl font-bold mb-4">{{ $class['price'] }}<span class="text-sm font-normal">/month</span></p>
                    <ul>
                        @foreach ($class['features'] as $feature)
                            <li class="mb-2 text-sm">- {{ $feature }}</li>
                        @endforeach
                    </ul>
                </div>
            </a>
            @endforeach
        </div>
    </div>
</div>
@endsection
