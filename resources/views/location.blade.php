@extends('layouts.app')

@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Branches and Locations</title>
    <style>
        
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background-color: black; 
            color: white;
        }

        
        .content-wrapper {
            position: relative;
            width: 90%;
            height: 80%;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            display: flex;
            justify-content: space-between;
            margin: 50px auto;
        }

        .image-section {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-image: url('gym-background.jpg'); 
            background-size: cover;
            background-position: center;
            z-index: 1;
        }

        .text-section {
            position: relative;
            z-index: 2;
            width: 60%;
            color: white;
            background: rgba(0, 0, 0, 0.5);
            padding: 30px;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .text-section h1 {
            font-size: 2.5em;
            font-weight: bold;
            margin-bottom: 15px;
        }

        .text-section p {
            font-size: 1.2em;
            margin-bottom: 20px;
        }

        .near-you-box {
            position: relative;
            z-index: 2;
            background-color: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            width: 30%;
            height: 35%;
            text-align: center;
            align-self: center;
            margin-right: 50px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            color: black;
        }

        .near-you-box:hover {
            transform: translateY(-3px);
            box-shadow: 0 0 40px rgba(38, 247, 139, 0.3);
        }

        .near-you-box .branch-name {
            font-size: 1.5em; 
            font-weight: bold;
            margin-bottom: 10px;
        }
        .near-you-box::before {
            content: "NEAR YOU";
            position: absolute;
            top: -20px; 
            left: 50%;
            transform: translateX(-50%);
            background-color: #4f4e4e; 
            color: white; 
            font-size: 1.2em; 
            font-weight: bold;
            padding: 5px 10px;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }


        
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }

        .container h1 {
            font-size: 72px;
            margin: 40px 0 10px;
            text-align: left; 
        }

        .dropdown {
            margin: 20px 0;
        }

        .dropdown select {
            padding: 10px;
            border-radius: 5px;
            border: none;
            font-family: Arial, sans-serif;
            background-color: #111010;
            color: white;
        }

        .locations-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            margin-top: 40px;
        }

        .location-card {
            width: 500px;
            height: 200px;
            display: flex;
            background-color: #242323;
            border-radius: 10px;
            margin-bottom: 20px;
            transition: 0.2s;
            overflow: hidden;
        }

        .location-card:hover {
            transform: translateY(-3px);
            box-shadow: 0 0 40px rgba(38, 247, 139, 0.3);
        }

        .location-card img {
            width: 40%;
            height: 100%;
            object-fit: cover;
        }

        .location-text {
            padding: 20px;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .location-text h2 {
            font-size: 1.5em;
            margin-bottom: 10px;
        }

        .location-text h4 {
            font-size: 1em;
        }
    </style>
</head>
<body>
    
    <div class="content-wrapper">
        <div class="image-section"></div>
        <div class="text-section">
            <p><b>OUR BRANCHES</b></p>
            <h1>FIND AN IDEAL GYM SPOT</h1>
            <p>Choose a club or let us know where you want to work out!</p>
        </div>
        <div class="near-you-box">
            <?php
            $nearestBranch = [
                'name' => 'Pondok Labu',
                'city' => 'Jakarta Selatan',
                'address' => 'Jl. Pondok Labu No. 3, Jakarta Selatan'
            ];
            ?>
            <p class="branch-name"><?= htmlspecialchars($nearestBranch['name']); ?> - <?= htmlspecialchars($nearestBranch['city']); ?></p>
            <p><?= htmlspecialchars($nearestBranch['address']); ?></p>
        </div>
    </div>

    
    <div class="container">
        <h1>LOCATION</h1>
        <div class="dropdown">
            <label for="cities">📍 Choose a City:</label>
            <select id="cities" onchange="changeLocation()">
                <option value="Jakarta">Jakarta</option>
                <option value="Bogor">Bogor</option>
                <option value="Depok">Depok</option>
                <option value="Tangerang">Tangerang</option>
                <option value="Bekasi">Bekasi</option>
            </select>
        </div>
        <section class="locations-container">
            <?php
            $locations = [
                ["name" => "Pondok Labu", "address" => "Jl. Pondok Labu No. 3, Jakarta Selatan", "image" => "public-location1.png"],
                ["name" => "Kemayoran", "address" => "Jl. Jenderal Sudirman No. 5, Jakarta Pusat", "image" => "public-location2.png"]
            ];
            foreach ($locations as $location) {
                echo '<div class="location-card">';
                echo '<img src="' . $location['image'] . '" alt="' . $location['name'] . '">';
                echo '<div class="location-text">';
                echo '<h2>' . $location['name'] . '</h2>';
                echo '<h4>' . $location['address'] . '</h4>';
                echo '</div>';
                echo '</div>';
            }
            ?>
        </section>
    </div>
</body>
</html>



@endsection