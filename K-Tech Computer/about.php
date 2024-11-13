<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>K-Tech Computers - About Us</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        /* General body styles with background image */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            color: #333;
            background-image: url('11.jpg'); /* Replace '11.jpg' with your image path */
            background-size: cover; /* Makes sure the image covers the entire page */
            background-repeat: no-repeat; /* Prevents tiling */
            background-position: center; /* Centers the image */
            background-attachment: fixed; /* Ensures background stays fixed when scrolling */
        }

        /* Header styling */
        header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px 20px;
            background-color: rgba(51, 51, 51, 0.8); /* Semi-transparent background for better text visibility */
            color: #fff;
        }

        header .logo h1 {
            margin: 0;
            font-size: 24px;
        }

        header .nav-icons img {
            width: 24px;
            height: 24px;
            margin-left: 10px;
        }

        /* About us section */
        .about-us {
            text-align: center;
            padding: 20px;
            background: rgba(255, 255, 255, 0.8); /* Semi-transparent background */
            margin: 20px;
            border-radius: 10px; /* Rounded corners */
        }

        .about-us h2, .about-us .core-values {
            margin: 10px 0;
            font-size: 28px;
        }

        .core-values-icons {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            margin: 20px 0;
        }

        .value-item {
            width: 120px;
            margin: 10px;
            text-align: center;
        }

        .value-item img {
            width: 50px;
            height: 50px;
        }

        .description, .founder, .closing {
            max-width: 600px;
            margin: 10px auto;
            line-height: 1.6;
        }

        /* Positioning and styling the owner photo */
        .owner-section {
            position: fixed;
            bottom: 20px;
            right: 20px;
            text-align: center;
            margin: 0;
        }

        .owner-photo-container {
            border: 4px solid #333;
            padding: 5px;
            display: inline-block;
            animation: fadeIn 2s ease-in-out;
            background: rgba(255, 255, 255, 0.8); /* Optional background for better contrast */
            border-radius: 10px; /* Optional rounded edges */
        }

        .owner-photo {
            width: 150px;
            height: auto;
            border-radius: 10px; /* Rounded edges */
            animation: scaleUp 1.5s infinite alternate; /* Animation for photo scaling effect */
        }

        .owner-name {
            margin-top: 10px;
            font-size: 18px;
            font-weight: bold;
            animation: fadeIn 2s ease-in-out;
        }

        /* Keyframes for animations */
        @keyframes scaleUp {
            0% { transform: scale(1); }
            100% { transform: scale(1.05); }
        }

        @keyframes fadeIn {
            0% { opacity: 0; }
            100% { opacity: 1; }
        }
    </style>
</head>
<body>
    <header>
        <div class="header-container">
            <div class="logo">
                <h1>K-TECH COMPUTERS</h1>
            </div>
            <nav class="nav-icons">
                <a href="#"><img src="face.png" alt="Facebook"></a>
                <a href="#"><img src="twit.jfif" alt="Twitter"></a>
            </nav>
        </div>
    </header>

    <section class="owner-section">
        <div class="owner-photo-container">
            <img src="my.jpeg" alt="Kavindu Kalhara Ranathunga" class="owner-photo">
            <p class="owner-name">Mr. Kavindu Kalhara</p>
        </div>
    </section>

    <section class="about-us">
        <h2>ABOUT US</h2>
        <p class="core-values">OUR CORE VALUES</p>
        <div class="core-values-icons">
            <div class="value-item">
                <img src="cust.webp" alt="Customer First" />
                <p>Customer: First, Always</p>
            </div>
            <div class="value-item">
                <img src="peo.png" alt="Our People" />
                <p>Our People: Our Strength</p>
            </div>
            <div class="value-item">
                <img src="nego.jpg" alt="Quality Policy" />
                <p>Quality Policy: Non Negotiable</p>
            </div>
            <div class="value-item">
                <img src="com.webp" alt="Commitment" />
                <p>Commitment: We Keep Our Words</p>
            </div>
            <div class="value-item">
                <img src="exe.jpg" alt="Excellence" />
                <p>Excellence: We Give Our Best</p>
            </div>
        </div>
        <p class="description">
            We are dedicated to building your dream PC using quality components to fulfill the dreams of our valued customers through a proper customer support process.
        </p>
        <p class="founder">
            Founded in 2012 by Kavindu Kalhara Ranathunga, K-Tech Computers has come a long way from its beginnings in his home. When Kalhara first started out, his passion for "quality and affordable tech products" drove him to start this so that K-Tech Computers can offer you the latest products to your doorstep. We now serve customers all over Sri Lanka and are thrilled to have turned our passion into our own website.
        </p>
        <p class="closing">
            I hope you enjoy the products as much as I enjoy offering them to you. If you have any questions or comments, please don't hesitate to contact me.<br>
            <strong>Kavindu Kalhara Ranathunga</strong>
        </p>
    </section>
</body>
</html>
