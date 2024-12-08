@extends('layouts.app')

@section('content')
<div class="bg-transparent text-white font-sans">
    <div class="relative w-11/12 h-[400px] rounded-lg shadow-lg overflow-hidden flex justify-between mx-auto my-12">
        <div class="absolute top-0 left-0 w-full h-full bg-cover bg-center z-1" style="background-image: url('gym-background.jpg');"></div>
        <div class="relative z-10 w-7/12 text-white bg-black bg-opacity-80 p-8 flex flex-col justify-center">
            <p class="font-bold">OUR BRANCHES</p>
            <h1 class="text-4xl font-bold mb-4">FIND AN IDEAL GYM SPOT</h1>
            <p class="text-lg mb-5">Choose a club or let us know where you want to work out!</p>
        </div>
        <div class="relative z-10 bg-white p-5 rounded-lg shadow-lg w-4/12 h-[60%] text-center self-center mr-12 flex flex-col justify-center text-black transition-transform duration-200 transform hover:-translate-y-1 hover:shadow-emerald-500/90">
            <?php
            $nearestBranch = [
                'name' => 'Pondok Labu',
                'city' => 'Jakarta Selatan',
                'address' => 'Jl. Pondok Labu No. 3, Jakarta Selatan'
            ];
            ?>
            <div class="absolute top-[-24px] left-1/2 transform -translate-x-1/2 bg-stone-600 text-white text-lg font-bold py-1 px-3 rounded-md shadow-md">NEAR YOU</div>
            <p class="text-xl font-bold mb-2"><?= htmlspecialchars($nearestBranch['name']); ?> - <?= htmlspecialchars($nearestBranch['city']); ?></p>
            <p><?= htmlspecialchars($nearestBranch['address']); ?></p>
        </div>
    </div>

    <div class="container mx-auto px-5">
        <h1 class="text-6xl my-10 text-left">LOCATION</h1>
        <div class="my-5">
            <label for="cities" class="inline-block mb-2">📍 Choose a City:</label>
            <select id="cities" class="block w-full p-3 rounded-md border-none font-sans bg-stone-900 text-white" onchange="displayLocations()">
                <option value="Jakarta">Jakarta</option>
                <option value="Bogor">Bogor</option>
                <option value="Depok">Depok</option>
                <option value="Tangerang">Tangerang</option>
                <option value="Bekasi">Bekasi</option>
            </select>
        </div>
        <section id="location-container" class="flex flex-wrap justify-between mt-10">
            </section>
    </div>
</div>

<script>
    function displayLocations() {
        const selectedCity = document.getElementById('cities').value;
        const locationContainer = document.getElementById('location-container');
        locationContainer.innerHTML = '';

        if (selectedCity === 'Jakarta') {
            const locations = [
                { "name": "Pondok Labu", "address": "Jl. Pondok Labu No. 3, Jakarta Selatan", "image": "public-location1.png" },
                { "name": "Kemayoran", "address": "Jl. Jenderal Sudirman No. 5, Jakarta Pusat", "image": "public-location2.png" }
            ];

            locations.forEach(location => {
                const locationCard = `
                    <div class="w-[48%] h-[200px] flex bg-stone-800 rounded-lg mb-5 transition-transform duration-200 transform border-stone-700 border shadow-xl duration-200 transition-all hover:-translate-y-0.5 hover:border-emerald-500/50 hover:shadow-emerald-500/10 overflow-hidden">
                        <img src="${location.image}" alt="${location.name}" class="w-2/5 h-full object-cover">
                        <div class="p-5 flex flex-col justify-center">
                            <h2 class="text-xl mb-3">${location.name}</h2>
                            <h4 class="text-base">${location.address}</h4>
                        </div>
                    </div>
                `;
                locationContainer.innerHTML += locationCard;
            });
        } else {
            locationContainer.innerHTML = '<p class="text-lg">No gyms in this area yet. Coming soon!</p>';
        }
    }

    // Call the function initially to display locations for Jakarta
    displayLocations();
</script>
@endsection