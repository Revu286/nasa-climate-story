<?php
// Database connection
$servername = "localhost"; // Change if your DB server is different
$username = "root"; // Your DB username
$password = ""; // Your DB password
$dbname = "nasa"; // Your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Initialize variables for error handling
$success = "y";
$error = "x";

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $story = $_POST['story'];
    $location = $_POST['location'];
    $coordinates = $_POST['coordinates'];
    $address = $_POST['address'];
    $extra_info = $_POST['extra_info'];

    // Prepare and bind
    $stmt = $conn->prepare("INSERT INTO climate_stories (name, email, story, location, coordinates, address, extra_info) VALUES (?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("sssssss", $name, $email, $story, $location, $coordinates, $address, $extra_info);

    if ($stmt->execute()) {
        $success = "Story submitted successfully!";
    } else {
        $error = "Error: " . $stmt->error;
    }

    $stmt->close();
}

$conn->close();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Story Page with Video Background</title>
    <style>
        /* Basic Reset */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Arial', sans-serif;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            overflow: hidden;
        }

        /* Fullscreen video background */
        .video-background {
            position: fixed;
            top: 0;
            left: 0;
            min-width: 100%;
            min-height: 100%;
            z-index: -1;
            object-fit: cover;
        }

        /* Header navigation styles */
        header {
            position: absolute;
            top: 0;
            right: 0;
            width: 100%;
            padding: 15px;
            background-color: rgba(21, 130, 11, 0.5); /* Semi-transparent background for the header */
            z-index: 1000;
            text-align: center;
            display: flex;
            justify-content: flex-end;
            align-items: center; /* Center align the header contents */
        }

        nav ul {
            list-style: none;
            display: inline-block; /* Align buttons horizontally */
            margin: 0;
            padding: 0;
        }

        nav ul li {
            display: inline; /* Inline items to display in a row */
            margin: 0 15px; /* Spacing between items */
        }

        nav ul li a {
            color: white;
            font-weight: bold;
            padding: 10px 20px;
            text-decoration: none;
            border-radius: 5px;
            background-color: rgba(255, 255, 255, 0.2); /* Button background */
            transition: background-color 0.3s ease;
        }

        nav ul li a:hover {
            background-color: rgba(11, 182, 23, 0.5); /* Button hover effect */
        }

        /* Adding semi-transparent background for the entire content */
        .content-wrapper {
            background-color: rgba(0, 0, 0, 0.7); /* Semi-transparent dark background */
            width: 80%;
            padding: 50px;
            border-radius: 20px;
            text-align: center;
            color: white;
            z-index: 2; /* Make sure content is on top of video */
        }

        .container {
            display: flex;
            justify-content: space-around;
            margin-top: 20px;
        }

        .option-box {
            width: 48%;
            height: 300px;
            position: relative;
            overflow: hidden;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            cursor: pointer;
            transition: transform 0.3s ease;
        }

        .option-box:hover {
            transform: scale(1.05);
        }

        .option-box img {
            width: 110%;
            height: 100%;
            object-fit: cover;
            opacity: 0.8;
        }

        .option-box h2 {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            color: white;
            font-size: 2rem;
            text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.5);
            z-index: 2;
        }

        .option-box::after {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 110%;
            height: 100%;
            background: rgba(0, 0, 0, 0.4); /* Dark overlay on images */
            z-index: 1;
        }
    </style>
</head>
<body>

    <!-- Header Section with Horizontal Buttons -->
    <header>
        <nav>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="story_page.php">Story</a></li>
                <li><a href="learn.php">Learn</a></li>
                <li><a href="news.php">News</a></li>
                <li><a href="aboutus.php">About Us</a></li>
            </ul>
        </nav>
    </header>

    <!-- Video Background -->
    <video class="video-background" autoplay muted loop>
        <source src="earth2.mp4" type="video/mp4">
        Your browser does not support the video tag.
    </video>

    <div class="content-wrapper">
        <h1>Welcome to the Climate Stories</h1>
        <p>Share your experiences or explore stories about climate change happening around the world.</p>

        <div class="container">
            <!-- Explore Stories Option -->
            <div class="option-box" onclick="window.location.href='explore.php'">
                <img src="explore.jpeg" alt="Explore Stories Background">
                <h2>Explore Stories</h2>
            </div>

            <!-- Submit Stories Option -->
            <div class="option-box" onclick="window.location.href='submit_story.php'">
                <img src="submit.jpeg" alt="Submit Stories Background">
                <h2>Submit Stories</h2>
            </div>
        </div>
    </div>

</body>
</html>
