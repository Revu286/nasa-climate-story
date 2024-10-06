<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - Climate Change Awareness</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <!-- Background Video Section -->
    <div class="video-background">
        <video autoplay loop muted playsinline>
            <source src="earth-revolving1.mp4" type="video/mp4">
        </video>
    </div>
    
    <!-- Navigation -->
    <header>
        <nav>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="story.php">Story</a></li>
                <li><a href="news.php">News</a></li>
                <li><a href="learn.php">Learn</a></li>
                <li><a href="about.php">About Us</a></li>
            </ul>
        </nav>
    </header>

    <!-- Hero Section -->
    <section id="home" class="hero">
        <div>
            <h1>OUR EARTH - THE PAST</h1>
        </div>
    </section>

    <!-- Mission Section -->
    <section class="scroll-section">
        <h2>Our Mission</h2>
        <p>
            Our mission is to educate and empower individuals to take action against climate change. By providing accurate information and practical solutions, we aim to foster a sustainable future for all.
        </p>
        <div class="video-container">
            <video autoplay loop muted playsinline>
                <source src="your-video-file.mp4" type="video/mp4">
                Your browser does not support the video tag.
            </video>
        </div>

        <!-- Additional Action Section -->
        <main class="container">
            <section class="action-question">
                <h1>Take Action for Change</h1>
                <p>Join us in making a difference in the fight against climate change.</p>
            </section>
        
            <section class="action-question">
                <h2>Do you want to make a change to this world?</h2>
                <button id="yes-btn" class="btn yes-btn non-responsive" onclick="handleYesClick()">Yes</button>
            </section>

            <div id="click-here-section" class="click-here-section" style="display:none;" onclick="window.location.href='restoration.php'">
                <h3>Great! Click below to see future developments:</h3>
                <button id="click-here-btn" class="btn">Click Here</button>
            </div>
        </main>
    </section>

    <script src="script1.js"></script>
    <script>
        // JavaScript function to handle the click event of the "Yes" button
        function handleYesClick() {
            document.getElementById('click-here-section').style.display = 'block'; // Show the "Click Here" section
        }
    </script>
</body>
</html>

