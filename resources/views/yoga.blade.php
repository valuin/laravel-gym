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
            height: 100vh; 
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
            background-image: url('https://tfx.sg/wp-content/uploads/2023/11/INBODY-ANALYSIS_HOMEPAGE-BANNER-scaled.jpg');
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
            padding: 5px;
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
            font-size: 1rem;
            color: white;
            margin-bottom: 10px; 
        }

        .checkbox-group input[type="checkbox"] {
            margin-right: 10px; 
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

        /* Modal Styles */
        .modal {
            position: fixed;
            z-index: 1000;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.8);
            display: none;
            justify-content: center;
            align-items: center;
            }

        .modal-content {
            background-color: black;
            padding: 20px;
            border-radius: 8px;
            width: 100%;
            max-width: 500px;
            color: white;
            position: relative;
        }

        .modal-content h2 {
            margin-bottom: 10px;
            margin-top: 10px;
        }

        .modal-content p {
            background-color: black;
            padding: 20px;
            border-radius: 8px;
            width: 100%;
            max-width: 500px;
            color: white;
            position: relative;
            max-height: 400px; 
            overflow-y: auto; 
        }

        .close {
            position: absolute;
            top: 10px;
            right: 10px;
            font-size: 20px;
            cursor: pointer;
        }

        .alert-danger {
            color: #a94442;
            background-color: #f2dede;
            border-color: #ebccd1;
            padding: 10px;
            margin-bottom: 15px;
            border-radius: 5px;
        }


    </style>
</head>
<body>
    <div class="container">
        <div class="form-wrapper">
            <!-- Left Section with Text -->
            <div class="left-section">
                <h1>Join RamsFit</h1>
                <p>Our fitness programs are designed to provide you with a comprehensive workout experience, combining elements of strength, flexibility, and mindfulness. Whether you choose Yoga, Pilates, or Body Combat, each class is crafted to cater to your fitness needs and goals. Engage in dynamic movements, boost your cardiovascular health, and enhance your overall well-being with our expert-led sessions.</p>
            </div>

            <!-- Form Section -->
            <div class="form-container">
                <h2>Try Free for 7 Days</h2>
                
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form action="{{ route('yesking') }}" method="POST">
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
                            I’ve read and agreed to the  <a href="#" id="termsLink" style="color: #4CAF50;">terms and conditions</a>
                        </label>
                       
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

      <!-- Modal -->
      <div id="termsModal" class="modal">
        <div class="modal-content">
            <span class="close">&times;</span>
            <h2>Terms & Conditions for Gym Class Subscription</h2>
            <p>
    <b>1.</b> Subscription is valid only for members who have completed registration and full payment according to the chosen package.<br>
    <b>2.</b> Membership activation starts from the date of verified payment.<br>
    <b>3.</b> Payments must be made upfront and are non-refundable, with renewal required before expiration to avoid additional fees.<br>
    <b>4.</b> Members can only access classes and facilities included in their selected package, and subscriptions are non-transferable.<br>
    <b>5.</b> Class bookings must be made in advance, with cancellations allowed up to 12 hours before the class to avoid penalties.<br>
    <b>6.</b> Members are responsible for their own health and must ensure they are fit before participating in any class, as the gym is not liable for injuries caused by personal negligence.<br>
    <b>7.</b> Subscription cancellation is allowed at any time, but fees are non-refundable, and the gym may terminate memberships for rule violations.<br>
    <b>8.</b> Members are required to follow all gym rules, including cleanliness and proper use of facilities.<br>
    <b>9.</b> The gym reserves the right to modify terms and conditions with prior notice.<br>
    <b>10.</b> By subscribing, members agree to these terms and conditions.
</p>

        </div>
    </div>

    <script>
        const termsModal = document.getElementById("termsModal");
        const closeModal = document.querySelector(".close");

        document.getElementById("termsLink").addEventListener("click", function(event) {
            event.preventDefault();
            termsModal.style.display = "flex";
        });

        closeModal.addEventListener("click", function() {
            termsModal.style.display = "none";
        });

        window.onclick = function(event) {
            if (event.target == termsModal) {
                termsModal.style.display = "none";
            }
        }
    </script>
</body>
</html>
