@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Classes - RamsFit</title>
    <script src="https://cdn.tailwindcss.com"></script>
  </head>
  <body class="bg-gray-900 text-white">

   <!-- Hero Section -->
   <section class="relative mt-4 mx-5">
    <img src="{{ asset('group-young-people-training-gym-indoors-maintaining-sportive-lifestyle.webp') }}" alt="Gym Image" class="rounded-lg object-cover w-full h-96">
    <div class="absolute inset-0 bg-black bg-opacity-50 flex flex-col justify-center p-8 text-left rounded-lg">
      <h1 class="text-7xl font-black leading-tight uppercase">The Ultimate Membership Experience</h1>
      <p class="mt-10 text-xl">You’re in charge. Get pumped with your choice of membership.</p>
      <button
      class="mt-4 px-6 py-3 bg-white text-black font-semibold rounded-lg hover:bg-gray-200"
      onclick="document.getElementById('price-list').scrollIntoView({ behavior: 'smooth' });">
      Find Out More
      </button>
    </div>
  </section>

  <!-- Stats Section -->
  <section class="grid grid-cols-3 gap-6 text-center mt-12 mx-10">
    <div class="bg-[#262626] py-10 rounded-lg">
      <h2 class="text-6xl font-bold">25</h2>
      <p class="text-xl uppercase">Clubs</p>
    </div>
    <div class="bg-[#262626] py-10 rounded-lg">
      <h2 class="text-6xl font-bold">5000</h2>
      <p class="text-xl uppercase">Classes per month</p>
    </div>
    <div class="bg-[#262626] py-10 rounded-lg">
      <h2 class="text-6xl font-bold">85</h2>
      <p class="text-xl uppercase">Classes</p>
    </div>
  </section>

  <!--Price List Section-->
        <section id="price-list">
        <div class="container mx-auto px-5 relative z-10">
        <main class="flex flex-col items-center">
        <h1 class="text-5xl font-black text-center mt-10 mb-5">
          HIGH GAINS WITHOUT THE HIGH PRICE
        </h1>
        <div class="flex flex-wrap justify-center gap-10 pt-10">
          <!--Daily Plan -->
          <a href="{{ route('member') }}">
          <div
            class="w-[275px] h-[450px] bg-white text-black rounded-2xl flex flex-col border-2 border-white items-center text-center shadow-lg transform hover:shadow-emerald-500/60 hover:border-emerald-500/70 hover:-translate-y-1 transition duration-300 p-5">
            <h3 class="text-xl mb-3">Daily</h3>
            <h1 class="text-4xl font-bold mb-5">35k / Day</h1>
            <p class="text-base mb-4">Full-day access to all gym facilities</p>
            <p class="text-base mb-4">
              Access to group fitness classes (Yoga, Zumba, etc.)
            </p>
            <p class="text-base">Locker room and shower access</p>
          </div>
          </a>
          <!-- Annual Plan -->
          <a href="{{ route('member') }}">
          <div
            class="w-[325px] h-[500px] border-2 bg-gradient-to-b from-emerald-500 to-white text-black rounded-2xl flex flex-col items-center  text-center shadow-lg transform hover:-translate-y-1 transition duration-300 p-5 hover:shadow-emerald-500/30""
          >
            <h3 class="text-xl mb-3">Annual</h3>
            <h1 class="text-4xl font-bold mb-5">2.8 Mio / Year</h1>
            <h4 class="text-lg font-bold mb-4">
              All monthly benefits, plus FREE personal training session every
              month
            </h4>
            <h4 class="text-lg mb-4">
              Exclusive access to members-only events and workshops
            </h4>
            <h4 class="text-lg mb-4">
              Priority booking for classes and training sessions
            </h4>
            <h4 class="text-lg">
              15% discount on all in-gym purchases (supplements, gear, etc.)
            </h4>
          </div>
          </a>
          <!--Monthly Plan -->
          <a href="{{ route('member') }}">
          <div
            class="w-[275px] h-[450px] bg-white text-black rounded-2xl flex flex-col border-2 border-white items-center text-center shadow-lg transform hover:shadow-emerald-500/60 hover:border-emerald-500/70 hover:-translate-y-1 transition duration-300 p-3">
            <h3 class="text-xl mb-3">Monthly</h3>
            <h1 class="text-4xl font-bold mb-5">300k / Month</h1>
            <p class="text-base mb-4">
              Unlimited access to gym facilities and classes
            </p>
            <p class="text-base mb-4">
              Free fitness assessment and consultation with a trainer
            </p>
            <p class="text-base mb-4">
              Access to all gym amenities (locker rooms, showers, sauna)
            </p>
            <p class="text-base">10% discount on personal training sessions</p>
          </div>
          </a>
        </div>
        </section>
      </main>
    </div>
  </body>
</html>

@endsection