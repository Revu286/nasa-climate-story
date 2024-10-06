<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - Tell Us a Climate Story</title>
    <link rel="stylesheet" href="style4.css">
</head>

<body>
    <!-- Header Section (Consistent with Index Page) -->
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

    <main class="container">
        <!-- About Us Section -->
        <section class="about-section">
            <h1>About Us</h1>
            <p>
                At <strong>Tell Us a Climate Story</strong>, we believe that understanding the impact of climate change is essential for inspiring action. Our mission is to raise awareness about the pressing environmental challenges we face, including extreme weather conditions, droughts, wildfires, melting ice caps, rising sea levels, and biodiversity loss.
            </p>
        </section>

        <!-- Mission Section -->
        <section class="mission-section">
            <h2>Our Mission</h2>
            <p>
                We aim to empower individuals and communities to recognize their role in combating climate change. Through storytelling, education, and community engagement, we hope to create a global network of informed advocates who are passionate about protecting our planet for future generations.
            </p>
        </section>

        <!-- Vision Section -->
        <section class="vision-section">
            <h2>Our Vision</h2>
            <p>
                We envision a world where every person is aware of the climate crisis and takes meaningful action to address it. By sharing real-life stories and innovative solutions, we inspire hope and motivate change, transforming concern into collective action.
            </p>
        </section>

        <!-- Values Section -->
        <section class="values-section">
            <h2>Our Values</h2>
            <ul>
                <li><strong>Awareness:</strong> We believe that knowledge is the first step towards action. We strive to provide accurate, up-to-date information about climate change and its effects.</li>
                <li><strong>Engagement:</strong> We encourage individuals to participate in discussions, share their own stories, and collaborate on initiatives that promote sustainability.</li>
                <li><strong>Empowerment:</strong> We aim to equip people with the tools and resources they need to make informed decisions and take action in their communities.</li>
                <li><strong>Sustainability:</strong> We are committed to promoting environmentally-friendly practices and solutions that protect our planet and its resources.</li>
                <li><strong>Community:</strong> We foster a sense of belonging among our supporters and strive to create a global community dedicated to climate action.</li>
            </ul>
        </section>

        <!-- Get Involved Section -->
        <section class="involvement-section">
            <h2>Get Involved</h2>
            <p>
                We invite you to join us in this critical mission. Whether you want to share your own climate story, learn about sustainable practices, or participate in community initiatives, there are many ways to get involved. Together, we can make a difference!
            </p>
        </section>

        <!-- Contact Section -->
        <section class="contact-section">
            <h2>Contact Us</h2>
            <p>
                If you have questions, suggestions, or would like to collaborate with us, please reach out! We’d love to hear from you.
            </p>
            <h3>Contact Details</h3>
            <p>Email: <a href="mailto:info@tellusaclimatestory.org">info@tellusaclimatestory.org</a></p>
            <p>Phone: +1 (555) 123-4567</p>
            <p>Follow us on social media:</p>
            <ul>
                <li><a href="https://facebook.com/tellusaclimatestory" target="_blank">Facebook</a></li>
                <li><a href="https://twitter.com/tellusaclimatestory" target="_blank">Twitter</a></li>
                <li><a href="https://instagram.com/tellusaclimatestory" target="_blank">Instagram</a></li>
            </ul>
        </section>

        <!-- Feedback Form Section -->
        <section class="feedback-section">
            <h2>We Value Your Feedback</h2>
            <p>Your feedback helps us improve and serve you better. Please share your thoughts with us!</p>
            <form id="feedback-form" action="process_feedback.php" method="post">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" placeholder="Enter your name" required>

                <label for="email">Email:</label>
                <input type="email" id="email" name="email" placeholder="Enter your email" required>

                <label for="feedback">Feedback:</label>
                <textarea id="feedback" name="feedback" placeholder="Write your feedback here" rows="5" required></textarea>

                <button type="submit" class="btn">Submit Feedback</button>
            </form>
        </section>
    </main>

    <footer>
        <p>&copy; 2024 Tell Us a Climate Story. All rights reserved.</p>
        <a href="index.php" class="footer-link">Back to Home</a>
    </footer>

    <script src="script.js"></script>
</body>

</html>
