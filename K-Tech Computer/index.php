<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <h1><title>K-Tech Computers</title></h1>
    <link rel="stylesheet" href="Home.css">
    <style>
        /* (Your existing styles here) */

        /* Animation for button hover */
        .btn-primary {
            display: inline-block;
            padding: 10px 20px;
            background-color: #00b5f7;
            color: #fff;
            border-radius: 5px;
            text-decoration: none;
            font-weight: bold;
            transition: background-color 0.3s ease, transform 0.3s ease;
        }

        .btn-primary:hover {
            background-color: #007bb5;
            transform: scale(1.05);
        }

        /* Fade-out animation for button */
        .fade-out {
            animation: fadeOut 0.5s forwards;
        }

        @keyframes fadeOut {
            0% {
                opacity: 1;
            }
            100% {
                opacity: 0;
                transform: scale(1.2);
            }
        }

    </style>
</head>
<body>
    <header>
        <div class="container">
            <div class="logo">
                <!-- Adjusted logo image source here -->
                <img src="ktch.png" alt="K-Tech Logo">
                <h1>K-Tech Computers</h1>
            </div>
            <nav>
                <a href="index.php">Home</a>
                <a href="sore2.php">Store</a>
                <a href="about.php">About</a>
                <a href="log.php">Sign Up</a>
                <a href="reg.php">Login</a>
            </nav>
        </div>
    </header>
    
    <section class="hero">
        <div class="overlay">
            <div class="hero-content">
                <div class="search-bar">
                    <input type="text" placeholder="Search Products">
                    <button type="submit">&#128269;</button>
                </div>
                <h2>Elevate Your Digital Experience with <p>K-Tech Computers</p></h2>
              
                <div class="features">
                    <span>Quality Products</span>
                    <span>Expert Support</span>
                    <span>Best Afterservice</span>
                </div>
                <a href="#" class="btn-primary" id="goToStoreBtn">Go to Store</a>
            </div>
        </div>
    </section>

    <footer>
        <!-- Your footer content -->
    </footer>

    <script>
        // JavaScript for handling the "Go to Store" button click with animation
        document.getElementById('goToStoreBtn').addEventListener('click', function(event) {
            // Prevent default behavior
            event.preventDefault();
            
            // Add fade-out animation to the button
            this.classList.add('fade-out');
            
            // After animation duration, navigate to store.php
            setTimeout(function() {
                window.location.href = 'store.php';
            }, 500);  // Delay matches the duration of the fade-out animation
        });
    </script>
</body>
</html>
