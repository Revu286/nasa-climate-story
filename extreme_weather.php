<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Extreme Weather</title>
    <link rel="stylesheet" href="style2.css">
    <script defer src="script.js"></script>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f4f8;
            margin: 0;
            padding: 0;
            color: #333;
        }

        header {
            background-color: rgba(28, 169, 33, 0.8);
            color: white;
            padding: 20px 0;
            text-align: center;
        }

        h1 {
            margin: 0;
            font-size: 2.5em;
        }

        section.content {
            max-width: 90%;
            margin: 20px auto;
            text-align: center;
            padding: 20px;
            background: white;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        section.content img {
            width: 50%;
            border-radius: 10px;
            margin-bottom: 20px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.2);
        }

        .card-container {
            display: flex;
            justify-content: space-around;
            margin: 20px auto;
            flex-wrap: wrap;
            max-width: 90%;
            gap: 20px; /* Add gap between cards */
        }

        .card {
            width: 30%;
            min-width: 300px; /* Ensure a minimum width */
            perspective: 1000px; /* Add perspective to the container */
        }

        .card-inner {
            position: relative;
            width: 100%;
            height: 100%;
            transition: transform 0.6s;
            transform-style: preserve-3d; /* Allow 3D space for children */
        }

        .card:hover .card-inner {
            transform: rotateY(180deg); /* Flip the card */
        }

        .card-front, .card-back {
            position: absolute;
            width: 100%;
            height: 100%;
            backface-visibility: hidden; /* Hide back face when flipped */
            border: 1px solid #dee2e6;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
            background-color: #ffffff;
            padding: 20px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        .card-back {
            transform: rotateY(180deg); /* Show back when flipped */
        }

        .card h3 {
            margin-top: 0;
            color: rgba(28, 169, 33, 0.8);
        }

        ul {
            list-style-type: none;
            padding: 0;
            text-align: left;
        }

        ul li {
            margin-bottom: 10px;
        }

        section.video-section {
            max-width: 90%;
            margin: 20px auto;
            padding: 20px;
            background: white;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            display: flex;
            justify-content: center; /* Center align video */
        }

        footer {
            text-align: center;
            margin-top: 30px;
            padding: 20px 0;
            background-color: rgba(28, 169, 33, 0.8);
            color: white;
        }

        .back-home-button {
            display: inline-block;
            padding: 12px 30px;
            background-color: #ffffff;
            color: rgba(28, 169, 33, 0.8);
            text-decoration: none;
            font-size: 1.2em;
            border-radius: 5px;
            transition: background-color 0.3s ease, color 0.3s ease;
            border: 2px solid rgba(28, 169, 33, 0.8);
        }

        .back-home-button:hover {
            background-color: rgba(28, 169, 33, 0.8);
            color: white;
        }

        /* Responsive Styles */
        @media (max-width: 768px) {
            .card {
                width: 90%; /* Adjust card width on smaller screens */
                margin: 10px auto; /* Center align cards on smaller screens */
            }
        }
    </style>
</head>
<body>
    <header>
        <h1>Extreme Weather</h1>
    </header>

    <section class="content">
        <img src="images/EW.jpg" alt="Extreme Weather">
        <p>
            Extreme weather refers to severe or unusual weather conditions that deviate significantly from the average. These can include hurricanes, heatwaves, floods, and blizzards, all of which can have serious consequences for life, property, and the environment.
        </p>
        <p>
            As climate change progresses, the frequency and intensity of extreme weather events are increasing, threatening ecosystems and human populations. Understanding these phenomena is crucial for developing effective response strategies and resilience measures.
        </p>
    </section>

    <!-- Card Overview Section -->
    <section class="card-container">
        <div class="card">
            <div class="card-inner">
                <div class="card-front">
                    <h3>Definition</h3>
                </div>
                <div class="card-back">
                    <h3>More on Definition</h3>
                    <p><strong>Extreme Weather</strong>: Refers to unusual or severe weather events that occur outside the normal climatic patterns, including hurricanes, tornadoes, floods, droughts, and heatwaves.</p>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-inner">
                <div class="card-front">
                    <h3>Causes</h3>
                </div>
                <div class="card-back">
                    <h3>More on Causes</h3>
                    <ul>
                        <li><strong>Climate Change</strong>: Global warming leads to increased evaporation and alters weather patterns, making extreme events more likely.</li>
                        <li><strong>Ocean Currents</strong>: Changes in ocean temperatures and currents can influence weather systems, leading to unusual weather events.</li>
                        <li><strong>Land Use Changes</strong>: Urbanization and deforestation can impact local climates, exacerbating extreme weather occurrences.</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-inner">
                <div class="card-front">
                    <h3>Impacts</h3>
                </div>
                <div class="card-back">
                    <h3>More on Impacts</h3>
                    <ul>
                        <li><strong>Human Displacement</strong>: Extreme weather can lead to loss of homes and communities, forcing people to relocate.</li>
                        <li><strong>Health Risks</strong>: Increased incidence of heat-related illnesses, respiratory issues, and waterborne diseases due to flooding.</li>
                        <li><strong>Economic Costs</strong>: Damage to infrastructure, increased recovery costs, and disruption to businesses can have significant economic impacts.</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Video Section -->
    <section class="video-section">
        <video controls style="width: 80%; border-radius: 5px;">
            <source src="videos/extreme_weather_video.mp4" type="video/mp4">
            Your browser does not support the video tag.
        </video>
    </section>

    <footer>
        <a href="learn.php" class="back-home-button">Back to Learn</a>
    </footer>
</body>
</html>
