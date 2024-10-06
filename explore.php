<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Explore Climate Stories</title>
    <!-- Include Swiper CSS -->
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background: url('images/background.jpg') no-repeat center center fixed; /* Set your background image */
            background-size: cover; /* Cover the entire body */
            margin: 0;
            padding: 0;
            overflow: hidden; /* Prevent scrolling */
            height: 100vh; /* Full height */
            display: flex;
            flex-direction: column; /* Align items vertically */
        }

        header {
            position: fixed;
            top: 0;
            right: 0;
            width: 100%;
            background-color: rgba(51, 51, 51, 0.8); /* Slight transparency */
            padding: 10px 20px;
            z-index: 10; /* Keeps the header above the swiper */
            display: flex;
            justify-content: center; /* Center the header title */
            align-items: center;
        }

        header h1 {
            color: white;
            font-size: 24px; /* Increase font size for the header title */
            margin: 0; /* Remove default margin */
        }

        header ul {
            list-style-type: none;
            display: flex;
            gap: 20px;
            margin-left: auto; /* Align links to the right */
        }

        header ul li {
            margin: 0; 
        }

        header ul li a {
            color: white;
            font-size: 18px;
            text-decoration: none;
            font-weight: bold;
            padding: 10px 20px;
            background-color: rgba(0, 0, 0, 0.5); /* Transparent background for visibility */
            border-radius: 4px;
            transition: background-color 0.3s ease;
        }

        header ul li a:hover {
            background-color: rgba(28, 169, 33, 0.8);/* Hover effect */
        }

        main {
            padding-top: 70px; /* Ensure content is below the fixed header */
            display: flex;
            flex: 1; /* Allow main to fill available space */
            align-items: center; /* Center vertically */
            justify-content: center; /* Center horizontally */
        }

        .swiper-container {
            width: 100%;
            height: 80%; /* Full height */
            display: flex;
            align-items: normal; /* Center vertically */
            justify-content: center; /* Center horizontally */
        }

        .swiper-slide {
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
            display: flex;
            flex-direction: column; /* Arrange content vertically */
            justify-content: center;
            align-items: center;
            font-size: 18px;
            color: #333;
            text-align: center;
            padding: 20px;
            transition: transform 0.3s ease, opacity 0.3s ease;
            width: 250px; /* Set fixed width for each slide */
            height: 350px; /* Set fixed height for each slide */
        }

        .swiper-slide img {
            width: 100%;
            height: auto;
            border-radius: 10px;
        }

        /* Highlight center card */
        .swiper-slide-active {
            transform: scale(1.1);
            z-index: 10; /* Bring the active card to the front */
        }

        .swiper-slide-next, .swiper-slide-prev {
            opacity: 0.5; /* Reduce opacity of the non-active cards */
        }
    </style>
</head>
<body>

<header>
    <h1>Explore Climate Stories</h1>
    <nav>
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="story.php">Story</a></li>
            <li><a href="learn.php">Learn</a></li>
            <li><a href="news.php">News</a></li>
            <li><a href="about.php">About Us</a></li>
        </ul>
    </nav>
</header>

<main>
    <div class="swiper-container">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <img src="images/weather_crisis.jpeg" alt="Weather Crisis">
                <p>Weather Crisis</p>
                <p>Extreme weather events, such as hurricanes and floods, are becoming more frequent and severe.</p>
            </div>
            <div class="swiper-slide">
                <img src="images/rising_sea_levels.jpeg" alt="Rising Sea Levels">
                <p>Rising Sea Levels</p>
                <p>Global warming is causing polar ice to melt, leading to rising sea levels that threaten coastal communities.</p>
            </div>
            <div class="swiper-slide">
                <img src="images/melting_ice_sheets.jpeg" alt="Melting Ice Sheets">
                <p>Melting Ice Sheets</p>
                <p>The Arctic and Antarctic ice sheets are rapidly losing mass, contributing to sea-level rise.</p>
            </div>
            <div class="swiper-slide">
                <img src="images/ocean_acidification.jpeg" alt="Ocean Acidification">
                <p>Ocean Acidification</p>
                <p>Excess carbon dioxide is changing ocean chemistry, impacting marine life and ecosystems.</p>
            </div>
            <div class="swiper-slide">
                <img src="images/deforestation.jpeg" alt="Deforestation">
                <p>Deforestation</p>
                <p>Cutting down forests contributes to greenhouse gas emissions and loss of habitat for wildlife.</p>
            </div>
            <div class="swiper-slide">
                <img src="images/sustainable_energy.jpeg" alt="Sustainable Energy">
                <p>Sustainable Energy</p>
                <p>Shifting to renewable energy sources is crucial in mitigating climate change impacts.</p>
            </div>
            <div class="swiper-slide">
                <img src="images/climate_education.jpeg" alt="Climate Education">
                <p>Climate Education</p>
                <p>Raising awareness about climate change and its effects is vital for community action.</p>
            </div>
        </div>
        <!-- Add Pagination -->
        <div class="swiper-pagination"></div>
        <!-- Add Navigation -->
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
    </div>
</main>

<!-- Include Swiper JavaScript -->
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<script>
    // Initialize Swiper
    const swiper = new Swiper('.swiper-container', {
        slidesPerView: 3,
        spaceBetween: 30,
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
        loop: true,
        centeredSlides: true, // Center the active slide
        on: {
            slideChange: function () {
                // Update opacity of slides on change
                this.slides.forEach((slide) => {
                    slide.style.opacity = '0.5'; // Set default opacity for all slides
                });
                this.slides[this.activeIndex].style.opacity = '1'; // Highlight active slide
            },
        },
    });
</script>
</body>
</html>
