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
   <section class="relative mt-10 mx-5">
    <img src="https://drive.google.com/file/d/14PCOuQkGmnNMMjc1OAtgxlsa01ly1Fju/view?usp=drive_link" alt="Gym Image" class="rounded-lg object-cover w-full h-96">
    <div class="absolute inset-0 bg-black bg-opacity-50 flex flex-col justify-center p-8 text-left rounded-lg">
      <p class="text-lg font-semibold uppercase">Membership</p>
      <h1 class="text-5xl font-bold leading-tight">The Ultimate Membership Experience</h1>
      <p class="mt-2 text-lg">You’re in charge. Get pumped with your choice of membership.</p>
      <button class="mt-6 px-6 py-2 bg-white text-black font-semibold rounded-lg hover:bg-gray-200">Find Out More</button>
    </div>
  </section>

  <!-- Stats Section -->
  <section class="grid grid-cols-3 gap-6 text-center mt-12 mx-5">
    <div class="bg-gray-700 py-10 rounded-lg">
      <h2 class="text-4xl font-bold">25</h2>
      <p class="text-lg uppercase">Clubs</p>
    </div>
    <div class="bg-gray-700 py-10 rounded-lg">
      <h2 class="text-4xl font-bold">5000</h2>
      <p class="text-lg uppercase">Classes per month</p>
    </div>
    <div class="bg-gray-700 py-10 rounded-lg">
      <h2 class="text-4xl font-bold">85</h2>
      <p class="text-lg uppercase">Classes</p>
    </div>
  </section>
    <div class="container mx-auto px-5 relative z-10">
      <main class="flex flex-col items-center">
        <h1 class="text-5xl font-bold text-center mt-10 mb-5">
          HIGH GAINS WITHOUT THE HIGH PRICE
        </h1>
        <div class="flex flex-wrap justify-center gap-10 pt-10">
          <div
            class="w-[275px] h-[450px] bg-white text-black rounded-2xl flex flex-col items-center text-center shadow-lg hover:shadow-2xl transform hover:-translate-y-1 transition duration-300 p-5"
          >
            <h3 class="text-xl mb-3">Daily</h3>
            <h1 class="text-4xl font-bold mb-5">35k / Day</h1>
            <p class="text-sm mb-2">Full-day access to all gym facilities</p>
            <p class="text-sm mb-2">
              Access to group fitness classes (Yoga, Zumba, etc.)
            </p>
            <p class="text-sm">Locker room and shower access</p>
          </div>

          <div
            class="w-[325px] h-[500px] bg-gradient-to-b from-green-500 to-white text-black rounded-2xl flex flex-col items-center text-center shadow-lg hover:shadow-2xl transform hover:-translate-y-1 transition duration-300 p-5"
          >
            <h3 class="text-xl mb-3">Annual</h3>
            <h1 class="text-4xl font-bold mb-5">2.8 Mio / Year</h1>
            <h4 class="text-base font-bold mb-2">
              All monthly benefits, plus FREE personal training session every
              month
            </h4>
            <h4 class="text-base mb-2">
              Exclusive access to members-only events and workshops
            </h4>
            <h4 class="text-base mb-2">
              Priority booking for classes and training sessions
            </h4>
            <h4 class="text-base">
              15% discount on all in-gym purchases (supplements, gear, etc.)
            </h4>
          </div>

          <div
            class="w-[275px] h-[450px] bg-white text-black rounded-2xl flex flex-col items-center text-center shadow-lg hover:shadow-2xl transform hover:-translate-y-1 transition duration-300 p-5"
          >
            <h3 class="text-xl mb-3">Monthly</h3>
            <h1 class="text-4xl font-bold mb-5">300k / Month</h1>
            <p class="text-sm mb-2">
              Unlimited access to gym facilities and classes
            </p>
            <p class="text-sm mb-2">
              Free fitness assessment and consultation with a trainer
            </p>
            <p class="text-sm mb-2">
              Access to all gym amenities (locker rooms, showers, sauna)
            </p>
            <p class="text-sm">10% discount on personal training sessions</p>
          </div>
        </div>
      </main>
    </div>
  </body>
</html>

@endsection