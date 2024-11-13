<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Page</title>
    <link rel="stylesheet" href="styles.css">
    <!-- Font Awesome for the icon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-image: url('mix.jpg'); /* Replace with the path to your image */
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
            overflow: hidden;
            animation: backgroundAnimation 20s infinite alternate;
        }

        @keyframes backgroundAnimation {
            0% { background-position: center top; }
            100% { background-position: center bottom; }
        }

        .header {
            width: 100%;
            background-color: rgba(0, 123, 255, 0.7);
            padding: 10px;
            text-align: center;
            color: white;
            font-size: 24px;
            display: flex;
            align-items: center;
            justify-content: center;
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
        }

        .header i {
            margin-right: 10px;
            font-size: 30px;
        }

        .register-container {
            background-color: rgba(255, 255, 255, 0.9);
            padding: 30px 40px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            max-width: 400px;
            width: 100%;
        }

        h2 {
            text-align: center;
            margin-bottom: 20px;
            color: #333;
        }

        label {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
            color: #444;
        }

        input[type="text"],
        input[type="email"],
        input[type="tel"],
        input[type="password"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
            transition: border 0.3s, box-shadow 0.3s;
        }

        input[type="text"]:focus,
        input[type="email"]:focus,
        input[type="tel"]:focus,
        input[type="password"]:focus {
            border: 1px solid #007bff;
            outline: none;
            box-shadow: 0 0 8px rgba(0, 123, 255, 0.6);
        }

        button {
            width: 100%;
            padding: 12px;
            background: linear-gradient(135deg, #007bff, #0056b3);
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
            transition: background 0.4s, transform 0.2s;
            position: relative;
            overflow: hidden;
        }

        button:hover {
            background: linear-gradient(135deg, #0056b3, #004494);
            transform: scale(1.05);
        }

        button:active {
            transform: scale(1);
        }

        button::after {
            content: "";
            position: absolute;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            pointer-events: none;
            background: radial-gradient(circle, rgba(255, 255, 255, 0.4) 10%, transparent 10%);
            background-position: center;
            transform: scale(10);
            opacity: 0;
            transition: transform 0.4s, opacity 0.4s;
        }

        button:active::after {
            transform: scale(0);
            opacity: 1;
            transition: 0s;
        }
    </style>
</head>
<body>
    <div class="header">
        <i class="fas fa-laptop"></i> <!-- Laptop icon from Font Awesome -->
        K-Tech Computers
    </div>

    <div class="register-container">
        <h2>Register</h2>
        <form id="registerForm" action="reg2.php" method="post">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>

            <label for="phone">Phone Number:</label>
            <input type="tel" id="phone" name="phone" required>

            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>

            <button type="submit">Register</button>
        </form>
    </div>

    <script>
        document.getElementById('registerForm').addEventListener('submit', function(event) {
            event.preventDefault(); // Prevent form submission

            // Get form values
            const name = document.getElementById('name').value.trim();
            const email = document.getElementById('email').value.trim();
            const phone = document.getElementById('phone').value.trim();
            const password = document.getElementById('password').value.trim();

            // Validate name
            if (name === '') {
                alert('Please enter your name.');
                return;
            }

            // Validate email
            const emailPattern = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
            if (!emailPattern.test(email)) {
                alert('Please enter a valid email address.');
                return;
            }

            // Validate phone number (digits only, adjust length as necessary)
            const phonePattern = /^[0-9]{10}$/; // Example: 10 digits
            if (!phonePattern.test(phone)) {
                alert('Please enter a valid 10-digit phone number.');
                return;
            }

            // Validate password (minimum 6 characters)
            if (password.length < 6) {
                alert('Password must be at least 6 characters long.');
                return;
            }

            // If all validations pass
            alert('Registration successful!');
            this.submit(); // Optionally submit the form if server-side processing is needed
        });
    </script>
</body>
</html>
