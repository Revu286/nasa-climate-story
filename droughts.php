<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Droughts</title>
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

        .card-front,
        .card-back {
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
        <h1>Droughts</h1>
    </header>

    <section class="content">
        <img src="images/D.jpg" alt="Droughts">
        <p>
            Droughts are prolonged periods of abnormally low rainfall that cause water shortages. They have a devastating effect on agriculture, water supply, and ecosystems, leaving communities without access to basic resources.
        </p>
        <p>
            As climate change worsens, droughts are becoming more frequent and severe, impacting food production and increasing the risk of famine in vulnerable regions. Solutions involve water management, conservation, and climate mitigation efforts.
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
                    <p><strong>Drought</strong>: A prolonged period of abnormally low rainfall, resulting in a significant water shortage. Droughts can vary in duration and severity and are classified into meteorological, agricultural, hydrological, and socioeconomic droughts.</p>
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
                        <li><strong>Climate Variability</strong>: Natural climate patterns like El Niño or La Niña can influence rainfall, leading to extended dry periods.</li>
                        <li><strong>Climate Change</strong>: Rising global temperatures exacerbate evaporation and alter precipitation patterns, prolonging dry spells.</li>
                        <li><strong>Overuse of Water Resources</strong>: Excessive extraction of groundwater and surface water for agriculture, industry, and domestic use depletes water sources faster than they are replenished.</li>
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
                        <li><strong>Agricultural Losses</strong>: Crop failures lead to food shortages and price increases. Livestock face reduced feed availability and water scarcity.</li>
                        <li><strong>Water Shortages</strong>: Diminished drinking water availability leads to health risks, strained reservoirs, and increased competition for resources.</li>
                        <li><strong>Economic Consequences</strong>: Higher costs for water, irrigation, and food production burden local economies.</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Video Section -->
    <section class="video-section">
        <video controls style="width: 80%; border-radius: 5px;">
            <source src="videos/Drought and Agriculture - Predict, Plan and Prepare_ Stop Drought Becoming Famine.mp4" type="video/mp4">
            Your browser does not support the video tag.
        </video>
    </section>

    <footer>
        <a href="learn.php" class="back-home-button">Back to Learn</a>
    </footer>
</body>

</html>
