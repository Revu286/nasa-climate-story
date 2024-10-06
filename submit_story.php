<?php
// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Database configuration
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "nasa";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Capture form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $story = $_POST['story'];
    $location = $_POST['location'];
    $coordinates = $_POST['coordinates'];
    $address = $_POST['address'];
    $extra_info = $_POST['extra_info'];

    // Insert data into database
    $stmt = $conn->prepare("INSERT INTO stories (name, email, story, location, coordinates, address, extra_info) VALUES (?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("sssssss", $name, $email, $story, $location, $coordinates, $address, $extra_info);

    if ($stmt->execute()) {
        $submissionSuccess = true; // Flag to trigger success modal
    } else {
        echo "<p>Error submitting story: " . $stmt->error . "</p>";
    }

    $stmt->close();
    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Share Your Climate Story</title>
    <link rel="stylesheet" href="style4.css">
    
    <!-- Leaflet CSS -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" />
</head>
<body>

    <!-- Header Section -->
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

    <!-- Story Form -->
    <section class="story-form">
        <h2>Your Climate Story</h2>
        <form action="story.php" method="POST" onsubmit="return showAlert()">
            <!-- Name and Email -->
            <div class="form-group">
                <label for="name">Your Name:</label>
                <input type="text" id="name" name="name" required>
            </div>

            <div class="form-group">
                <label for="email">Your Email:</label>
                <input type="email" id="email" name="email" required>
            </div>

            <!-- Story Text -->
            <div class="form-group">
                <label for="story">Your Story:</label>
                <textarea id="story" name="story" rows="6" placeholder="Share your experience..." required></textarea>
            </div>

            <!-- Location Input -->
            <div class="form-group">
                <label for="location">Location Affected by Climate Change:</label>
                <input type="text" id="location" name="location" placeholder="e.g., New Orleans, USA" required>
            </div>

            <!-- Coordinates and Address (automatically filled) -->
            <div class="form-group">
                <label for="coordinates">Location Coordinates (Click the map):</label>
                <input type="text" id="coordinates" name="coordinates" placeholder="Latitude, Longitude" required readonly>
            </div>
            <div class="form-group">
                <label for="address">Address (Resolved from Coordinates):</label>
                <input type="text" id="address" name="address" placeholder="Address" required readonly>
            </div>

            <!-- Leaflet Map -->
            <div id="map"></div>

            <!-- Additional Info -->
            <div class="form-group">
                <label for="extra-info">Additional Information (Optional):</label>
                <textarea id="extra-info" name="extra_info" rows="4"></textarea>
            </div>

            <!-- Submit Button -->
            <button type="submit" class="submit-btn">Submit Your Story</button>
        </form>
    </section>

    <!-- Modal HTML -->
    <div id="successModal" class="modal" <?php if (isset($submissionSuccess)) echo 'style="display: block;"'; ?>>
        <div class="modal-content">
            <span class="close-button" onclick="closeModal()">&times;</span>
            <h2>Success!</h2>
            <p>Your climate story has been submitted successfully.</p>
        </div>
    </div>

    <!-- Leaflet JS -->
    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>
    <script src="script2.js"></script>

    <!-- JavaScript to Control Modal -->
    <script>
        function closeModal() {
            document.getElementById("successModal").style.display = "none";
        }
    </script>
</body>
</html>
