@extends('layouts.app') @section('content')

<div class="flex flex-wrap w-full mx-auto overflow-hidden">
    <!-- Image Left -->
    <div class="w-full md:w-1/3 overflow-hidden order-2 md:order-1">
        <img
            src="{{ asset('about1.png') }}"
            alt="Ramfit Image"
            class="w-full h-full object-cover rounded-tr-[10%] rounded-br-[10%]"
        />
    </div>
    <!-- Content -->
    <div
        class="w-full md:w-1/3 p-6 flex flex-col justify-center order-1 md:order-2"
    >
        <h2 class="text-4xl font-bold mb-6">
            At RamsFit, We Are Committed...
        </h2>
        <p class="text-base leading-relaxed mb-6 text-justify">
            We are empowering individuals to achieve their fitness goals
            through a supportive and inclusive environment. With
            state-of-the-art equipment, personalized training programs, and
            expert instructors, we strive to cater to all levels of fitness,
            from beginners to seasoned athletes.
        </p>
        <a
            href="#testimonials"
            class="inline-block bg-white text-black px-4 py-2 rounded-md font-bold hover:bg-green-400 hover:text-white transition duration-200"
            >View More</a
        >
    </div>
    <!-- Image Right -->
    <div class="w-full md:w-1/3 overflow-hidden order-3 md:order-3">
        <img
            src="{{ asset('about2.png') }}"
            alt="Ramfit Image"
            class="w-full h-full object-cover rounded-tl-[10%] rounded-bl-[10%]"
        />
    </div>
</div>

<div class="container mx-auto py-8">
    <h2 class="text-5xl font-bold text-center mb-10">
        WHAT THEY SAID ABOUT US
    </h2>

    <div class="flex flex-col space-y-8">
        <!-- Testimonial 1 -->
        <div
            class="bg-white bg-opacity-10 backdrop-blur-sm rounded-lg p-6 shadow-lg flex items-center hover:shadow-xl transition duration-300"
        >
            <img
                src="{{ asset('testimony-1.png') }}"
                alt="Lala Martinez"
                class="w-32 h-32 rounded-md mr-6"
            />
            <div id="testimonials" class="text-white">
                <p class="text-base leading-relaxed mb-4">
                    "This gym has everything I need for a great workout. The
                    equipment is modern and well-maintained, and the staff are
                    always friendly and helpful. The cleanliness of the facility
                    is also impressive, making it a comfortable place to
                    exercise. Highly recommended!"
                </p>
                <p class="font-bold">Lala Martinez</p>
                <p class="italic">Student</p>
            </div>
        </div>
        <!-- Testimonial 2 -->
        <div
            class="bg-white bg-opacity-10 backdrop-blur-sm rounded-lg p-6 shadow-lg flex items-center hover:shadow-xl transition duration-300"
        >
            <img
                src="{{ asset('testimony-2.png') }}"
                alt="Stevan Carpenter"
                class="w-32 h-32 rounded-md mr-6"
            />
            <div class="text-white">
                <p class="text-base leading-relaxed mb-4">
                    "Fantastic place to work out. The atmosphere is motivating,
                    and the classes are fun!"
                </p>
                <p class="font-bold">Stevan Carpenter</p>
                <p class="italic">Engineer</p>
            </div>
        </div>
        <!-- Testimonial 3 -->
        <div
            class="bg-white bg-opacity-10 backdrop-blur-sm rounded-lg p-6 shadow-lg flex items-center hover:shadow-xl transition duration-300"
        >
            <img
                src="{{ asset('testimony-1.png') }}"
                alt="Josef Mehmed"
                class="w-32 h-32 rounded-md mr-6"
            />
            <div class="text-white">
                <p class="text-base leading-relaxed mb-4">
                    "The atmosphere at this gym is fantastic. It’s a friendly
                    and motivating environment, and I feel comfortable working
                    out here. Whether you're a beginner or experienced, you’ll
                    find a supportive community that encourages you to meet your
                    fitness goals."
                </p>
                <p class="font-bold">Josef Mehmed</p>
                <p class="italic">Teacher</p>
            </div>
        </div>
        <!-- Testimonial 4 -->
        <div
            class="bg-white bg-opacity-10 backdrop-blur-sm rounded-lg p-6 shadow-lg flex items-center hover:shadow-xl transition duration-300"
        >
            <img
                src="{{ asset('testimony-2.png') }}"
                alt="Julia Rodrigo"
                class="w-32 h-32 rounded-md mr-6"
            />
            <div class="text-white">
                <p class="text-base leading-relaxed mb-4">
                    "Love this gym! Clean, spacious, and the staff is super
                    friendly."
                </p>
                <p class="font-bold">Julia Rodrigo</p>
                <p class="italic">Pharmacist</p>
            </div>
        </div>
    </div>
</div>

@endsection
