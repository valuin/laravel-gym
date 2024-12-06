<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Yoga Registration</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        html, body {
            height: 100%;
            width: 100%;
            font-family: Arial, sans-serif;
            background-color: #333;
            color: white; 
        }

        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh; /* Mengisi seluruh layar */
            width: 100%;
        }

        .form-wrapper {
            display: flex;
            justify-content: space-between;
            align-items: stretch;
            width: 100%;
            max-width: 1600px;
            height: 100%; 
            overflow: hidden; 
        }

        .left-section {
            flex: 1;
            background-image: url('https://www.shutterstock.com/image-photo/barbell-weight-lowkey-fitness-dark-600nw-1835763928.jpg');
            background-size: cover;
            background-position: center;
            background-color: rgba(0, 0, 0, 0.7);
            color: white;
            display: flex;
            flex-direction: column;
            justify-content: center;
            padding: 40px;
            height: 100%;
            overflow: auto;
        }

        .left-section h1 {
            font-size: 3rem;
            font-weight: bold;
            margin-bottom: 15px;
        }

        .left-section p {
            font-size: 1.1rem;
            line-height: 1.6;
        }

        .form-container {
            flex: 1;
            background-color: black;
            padding: 40px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            overflow-y: auto;
            height: 100%;
        }

        h2 {
            text-align: center;
            font-size: 2rem;
            margin-bottom: 10px;
            margin-top: 150px;
        }

        label {
            display: block;
            margin: 8px 0 5px;
            font-size: 1rem;
            color: white;
        }

        select, input[type="text"], input[type="email"] {
            width: 100%;
            padding: 12px;
            margin-bottom: 15px;
            border: 1px solid #555;
            border-radius: 5px;
            font-size: 1rem;
            box-sizing: border-box;
            background-color: #333;
            color: white;
        }

        button {
            background-color: #4CAF50;
            color: white;
            padding: 14px 20px;
            border: none;
            border-radius: 5px;
            width: 100%;
            font-size: 1.1rem;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        button:hover {
            background-color: #45a049;
        }

        .checkbox-group {
            display: flex;
            flex-direction: column;
            margin-bottom: 20px;
        }

        .checkbox-group label {
            font-size: 0.9rem;
            color: white;
        }

        .error-list {
            margin-top: 20px;
            color: red;
        }

        .error-list ul {
            list-style-type: none;
            padding: 0;
        }

        .error-list ul li {
            background-color: #f8d7da;
            padding: 10px;
            margin: 5px 0;
            border-radius: 5px;
        }

    </style>
</head>
<body>
    <div class="container">
        <div class="form-wrapper">
            <!-- Left Section with Text -->
            <div class="left-section">
                <h1>Join Ramsfit</h1>
                <p>Our fitness programs are designed to provide you with a comprehensive workout experience, combining elements of strength, flexibility, and mindfulness. Whether you choose Yoga, Pilates, or Body Combat, each class is crafted to cater to your fitness needs and goals. Engage in dynamic movements, boost your cardiovascular health, and enhance your overall well-being with our expert-led sessions.</p>
            </div>

            <!-- Form Section -->
            <div class="form-container">
                <h2>Try Free for 7 Days</h2>
                <form action="{{ route('custom.register') }}" method="POST">
                    @csrf

                    <label for="city">City *</label>
                    <select name="city" id="city" required>
                        <option value="">Select City</option>
                        <option value="Pondok Labu">Pondok Labu</option>
                        <option value="Kemayoran">Kemayoran</option>
                    </select>

                    <label for="class">Class *</label>
                    <select name="class" id="class" required>
                        <option value="">Select Class</option>
                        <option value="Yoga">Yoga</option>
                        <option value="Pilates">Pilates</option>
                        <option value="Body Combat">Body Combat</option>
                    </select>

                    <label for="session">Training Session *</label>
                    <select name="session" id="session" required>
                        <option value="">Select Hour</option>
                        <option value="Morning (08.00 - 09.00)">Morning (08.00 - 09.00)</option>
                        <option value="Evening (16.00 - 17.00)">Evening (16.00 - 17.00)</option>
                        <option value="Night (19.00 - 20.00)">Night (19.00 - 20.00)</option>
                    </select>

                    <label for="name">Name *</label>
                    <input type="text" id="name" name="name" placeholder="Your Name" required>

                    <label for="wa_number">WhatsApp Number *</label>
                    <input type="text" id="wa_number" name="wa_number" placeholder="Your WhatsApp Number" required>

                    <label for="email">Email *</label>
                    <input type="email" id="email" name="email" placeholder="Your Email" required>

                    <div class="checkbox-group">
                        <label>
                            <input type="checkbox" name="terms" required>
                            I’ve read and agreed to the <a href="#" style="color: #4CAF50;">terms and conditions</a>
                        </label>
                        <label>
                            <input type="checkbox" name="health" required>
                            I’ve read and agree to the <a href="#" style="color: #4CAF50;">declaration of health</a>
                        </label>
                    </div>

                    <button type="submit">Register Now</button>
                </form>

                @if ($errors->any())
                    <div class="error-list">
                        <h3>Errors:</h3>
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
            </div>
        </div>
    </div>
</body>
</html>
