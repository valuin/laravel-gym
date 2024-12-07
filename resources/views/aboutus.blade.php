@extends('layouts.app') @section('content')
<div class="container mx-auto py-8">
    <!-- Header Section -->
    <div class="flex flex-col items-center justify-center px-4">
        <h1 class="text-6xl font-extrabold text-center mb-8">FIRST IN TOWN</h1>
        <div class="flex w-full">
            <!-- Foto sebelah kiri -->
            <div class="flex-1">
                <img src="{{ asset('aboutimg1/aboutusimg2.png') }}" alt="Gym Image 1" class="rounded-l-lg h-auto w-full object-cover">
            </div>
            <div class="flex flex-col justify-center items-center text-white p-20 w-1/2">
                <p class="text-lg text-justify leading-relaxed">
                At RamsFit, we are committed to empowering individuals to achieve their fitness goals through a supportive and inclusive environment. 
                With state-of-the-art equipment, personalized training programs, and expert instructors, we strive to cater to all levels of fitness, 
                from beginners to seasoned athletes.
                </p>
            </div>
            <!-- Foto sebelah kanan -->
            <div class="flex-1">
                <img src="{{ asset('aboutimg1/GYM.png') }}" alt="Gym Image 2" class="rounded-r-lg h-auto w-full object-cover">
            </div>
        </div>
    </div>
</div>

<!--Team Photo Secion -->
<div class="container mx-auto py-16 px-4 flex flex-wrap items-center justify-between">
  <!-- Bagian Kiri: Kotak-kotak -->
  <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 w-full md:w-2/3">
    <!-- Kotak 1 -->
    <div class="text-black bg-gradient-to-b from-[#737373] via-[#A6A6A6] to-[#D9D9D9] rounded-lg p-4 flex flex-col items-center">
      <img src="aboutimg1/ariq2.jpg" alt="Ariq Adlan" class="w-full h-full rounded-lg mb-4">
      <h3 class="text-lg font-bold text-center">Ariq Adlan</h3>
      <p class="text-sm text-center">Pilates Instructor</p>
    </div>
    <!-- Kotak 2 -->
    <div class="text-black bg-gradient-to-b from-[#737373] via-[#A6A6A6] to-[#D9D9D9] rounded-lg p-4 flex flex-col items-center">
      <img src="aboutimg1/ciul.jpg" alt="Cinta Auliya" class="w-full h-full rounded-lg mb-4">
      <h3 class="text-lg font-bold text-center">Cinta Auliya</h3>
      <p class="text-sm text-center">Yoga Instructor</p>
    </div>
    <!-- Kotak 3 -->
    <div class="text-black bg-gradient-to-b from-[#737373] via-[#A6A6A6] to-[#D9D9D9] rounded-lg p-4 flex flex-col items-center">
      <img src="aboutimg1/rama.jpg" alt="Ilham Rizky" class="w-full h-full rounded-lg mb-4">
      <h3 class="text-lg font-bold text-center">Ilham Rizky</h3>
      <p class="text-sm text-center">Pilates Instructor</p>
    </div>
    <!-- Kotak 4 -->
    <div class="text-black bg-gradient-to-b from-[#737373] via-[#A6A6A6] to-[#D9D9D9] rounded-lg p-4 flex flex-col items-center">
      <img src="aboutimg1/aya.jpg" alt="Layalia Nur" class="w-full h-full rounded-lg mb-4">
      <h3 class="text-lg font-bold text-center">Layalia Nur</h3>
      <p class="text-sm text-center">Yoga Instructor</p>
    </div>
    <!-- Kotak 5 -->
    <div class="text-black bg-gradient-to-b from-[#737373] via-[#A6A6A6] to-[#D9D9D9] rounded-lg p-4 flex flex-col items-center">
      <img src="aboutimg1/vall.png" alt="Valtrizt" class="bg-white w-full h-full rounded-lg mb-4">
      <h3 class="text-lg font-bold text-center">Valtrizt</h3>
      <p class="text-sm text-center">Body Combat Instructor</p>
    </div>
  </div>
  <!-- Bagian Kanan -->
  <div class="flex-1 flex flex-col justify-center text-center md:text-right mt-8 md:mt-0">
    <h2 class="text-4xl font-bold">Meet Our Team</h2>
    <p class="text-lg mt-4">Let's make your journey extraordinary!</p>
  </div>
</div>

<!-- About section -->
<div class="container mx-auto flex flex-col md:flex-row items-center py-12 px-6 gap-x-16">
    <div class="text-white md:w-1/3 mb-8 md:mb-0 pr-8">
        <h2 class="text-4xl font-bold mb-6">Our Code</h2>
        <p class="text-lg leading-relaxed">
            Strength drives us, discipline guides us, and excellence defines our fitness journey.
        </p>
    </div>

    <div class="text-black grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 md:w-2/3">
        <!-- Box 1 -->
        <div class="bg-gradient-to-b from-[#737373] via-[#A6A6A6] to-[#D9D9D9] rounded-lg p-6 shadow-md">
            <h3 class="text-xl font-bold mb-4 text-center">OUR MANIFESTO</h3>
            <p class="text-center font-medium leading-relaxed">
            We break limits. Our clubs inspire you to move, sweat, and embrace your fitness journey with boldness and confidence.
            </p>
        </div>
        <!-- Box 2 -->
        <div class="bg-gradient-to-b from-[#737373] via-[#A6A6A6] to-[#D9D9D9] rounded-lg p-6 shadow-md">
            <h3 class="text-xl font-bold mb-4 text-center">OUR SIGNATURE STYLE</h3>
            <p class="text-center font-medium leading-relaxed">
            Expert-designed workouts: Energizing, empowering, transforming. Your journey to greatness begins now!
            </p>
        </div>
        <!-- Box 3 -->
        <div class="bg-gradient-to-b from-[#737373] via-[#A6A6A6] to-[#D9D9D9] rounded-lg p-6 shadow-md">
            <h3 class="text-xl font-bold mb-4 text-center">OUR MISSION</h3>
            <p class="text-center font-medium leading-relaxed">
            We're all about making fitness fun—empowering you to look and feel your absolute best.
            </p>
        </div>
        <!-- Box 4 -->
        <div class="bg-gradient-to-b from-[#737373] via-[#A6A6A6] to-[#D9D9D9] rounded-lg p-6 shadow-md">
            <h3 class="text-xl font-bold mb-4 text-center">WE'VE GOT EDGE</h3>
            <p class="text-center font-medium leading-relaxed">
            We revolutionize fitness, break boundaries, ignite confidence, and inspire bold transformations.
            </p>
        </div>
        <!-- Box 5 -->
        <div class="bg-gradient-to-b from-[#737373] via-[#A6A6A6] to-[#D9D9D9] rounded-lg p-6 shadow-md">
            <h3 class="text-xl font-bold mb-4 text-center">WE'RE ALL ABOUT FUN</h3>
            <p class="text-center font-medium leading-relaxed">
            A vibrant, social tribe embracing joy and energy. Life's a celebration, and we bring the party to fitness!
            </p>
        </div>
        <!-- Box 6 -->
        <div class="bg-gradient-to-b from-[#737373] via-[#A6A6A6] to-[#D9D9D9] rounded-lg p-6 shadow-md">
            <h3 class="text-xl font-bold mb-4 text-center">WE'RE AWESOME</h3>
            <p class="text-center font-medium leading-relaxed">
            Life's a grand stage, and we're here to shine like the stars we are!</p>
        </div>
    </div>
</div>


@endsection