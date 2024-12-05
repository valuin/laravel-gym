<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RamsFit</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="font-sans bg-gray-100">
    <div class="flex flex-row justify-center items-center min-h-screen bg-black">
        <!-- Left Section -->
        <div 
            class="flex flex-1 flex-col justify-center items-start text-left p-8 text-white bg-cover bg-center" 
            style="background-image: url('{{ asset('photo-fitness-man-woman-workout-gym_763111-22729.avif') }}')"
        >
            <h1 class="text-3xl font-bold">Join RamsFit</h1>
            <p class="mt-4 leading-relaxed">
                Our fitness programs are designed to provide you with a comprehensive workout experience, combining elements of strength, flexibility, and mindfulness. Whether you choose Yoga, Pilates, or Body Combat, each class is crafted to cater to your fitness needs and goals. Engage in dynamic movements, boost your cardiovascular health, and enhance your overall well-being with our expert-led sessions. Discover the perfect balance between body and mind in a supportive and motivating environment.
            </p>
        </div>

        <!-- Right Section -->
        <div class="flex-1 bg-black text-white p-8 rounded-lg">
            <h2 class="text-2xl font-semibold mb-4">Try Free For 7 Days</h2>
            
            <!-- Tampilkan pesan sukses -->
            @if (session('success'))
                <div class="p-4 mb-4 text-green-800 bg-green-100 rounded">
                    {{ session('success') }}
                </div>
            @endif

            <!-- Tampilkan pesan error -->
            @if ($errors->any())
                <div class="p-4 mb-4 text-red-800 bg-red-100 rounded">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{ route('register') }}" method="POST" class="space-y-4">
                @csrf
                <div class="form-group">
                    <label for="name" class="block text-sm mb-2">Name *</label>
                    <input type="text" id="name" name="name" required class="w-full p-2 rounded border border-gray-300 text-black">
                </div>
                <div class="form-group">
                    <label for="wa_number" class="block text-sm mb-2">WhatsApp Number *</label>
                    <input type="text" id="wa_number" name="wa_number" required class="w-full p-2 rounded border border-gray-300 text-black">
                </div>
                <div class="form-group">
                    <label for="email" class="block text-sm mb-2">Email *</label>
                    <input type="email" id="email" name="email" required class="w-full p-2 rounded border border-gray-300 text-black">
                </div>
                <div class="form-group">
                    <label for="class" class="block text-sm mb-2">Membership *</label>
                    <select id="class" name="class" required class="w-full p-2 rounded border border-gray-300 text-black">
                        <option value="">Select Membership</option>
                        <option value="Class1">Daily Plan</option>
                        <option value="Class2">Monthly Plan</option>
                        <option value="Class3">Annual Plan</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="city" class="block text-sm mb-2">Payment Methods *</label>
                    <select id="city" name="city" required class="w-full p-2 rounded border border-gray-300 text-black">
                        <option value="">Select Payment Methods</option>
                        <option value="payment1">Credit Card</option>
                        <option value="payment2">Bank Transfer</option>
                        <option value="payment2">Digital Wallets</option>
                    </select>
                </div>
                <div class="form-group flex items-center">
                    <input type="checkbox" id="terms" name="terms" required class="mr-2">
                    <label for="terms" class="text-sm">I’ve read and agreed to the terms and conditions</label>
                </div>
                <div class="form-group flex items-center">
                    <input type="checkbox" id="health" name="health" required class="mr-2">
                    <label for="health" class="text-sm">I’ve read and agree to the declaration of health</label>
                </div>
                <button type="submit" class="w-full p-3 bg-gray-700 text-white rounded hover:bg-green-500">
                    Register Now
                </button>
            </form>
        </div>
    </div>
</body>
</html>
