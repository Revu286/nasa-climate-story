<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Climate News - Live Updates</title>
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <style>
        body {
            font-family: Arial, sans-serif;
            background: url('images/background.jpg') no-repeat center center fixed;
            background-size: cover;
            margin: 0;
            padding: 0;
            height: 100vh;
            display: flex;
            flex-direction: column;
            overflow: hidden;
        }
        header {
            position: fixed;
            top: 0;
            width: 100%;
            background-color: rgba(51, 51, 51, 0.8);
            padding: 10px 20px;
            z-index: 10;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        header ul {
            list-style-type: none;
            display: flex;
            gap: 20px;
            margin-left: auto;
        }
        header ul li a {
            color: white;
            text-decoration: none;
            padding: 10px 20px;
            background-color: rgba(0, 0, 0, 0.5);
            border-radius: 4px;
            transition: background-color 0.3s ease;
        }
        header ul li a:hover {
            background-color: rgba(76, 175, 80, 0.8);
        }
        main {
            padding-top: 70px;
            display: flex;
            flex: 1;
            align-items: center;
            justify-content: center;
        }
        .swiper-container {
            width: 50%;
            height: 70%;
        }
        .swiper-slide {
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            align-items: center;
            padding: 20px;
            text-align: center;
            cursor: pointer;
            transition: transform 0.3s ease;
        }
        .swiper-slide img {
            width: 100%;
            height: 160px;
            border-radius: 10px;
            margin-bottom: 10px;
        }
        .swiper-slide h2 {
            font-size: 18px;
            margin: 10px 0;
            height: 50px;
            overflow: hidden;
        }
        .swiper-slide p {
            font-size: 14px;
            color: #555;
            height: 50px;
            overflow: hidden;
        }
        .modal {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.8);
            justify-content: center;
            align-items: center;
            z-index: 100;
        }
        .modal-content {
            background-color: #fff;
            border-radius: 10px;
            padding: 20px;
            max-width: 800px;
            width: 90%;
            text-align: center;
            position: relative;
        }
        .modal-content iframe {
            width: 100%;
            height: 400px;
        }
        .close-btn {
            position: absolute;
            top: 10px;
            right: 20px;
            font-size: 24px;
            cursor: pointer;
            color: #333;
        }
    </style>
</head>
<body>

<header>
    <h1>Climate News</h1>
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

<main>
    <div class="swiper-container">
        <div class="swiper-wrapper" id="news-slides">
            <!-- News slides will be dynamically injected here by JavaScript -->
        </div>
        <div class="swiper-pagination"></div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
    </div>
</main>

<!-- Modal for video -->
<div class="modal" id="newsModal">
    <div class="modal-content">
        <span class="close-btn" onclick="closeModal()">×</span>
        <h2 id="modal-title"></h2>
        <p id="modal-description"></p>
        <iframe id="news-video" frameborder="0" allowfullscreen></iframe>
    </div>
</div>

<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<script>
    const apiKey = '08f993b37b6841469be6a6fb92d96573';
    const newsEndpoint = `https://newsapi.org/v2/everything?q=climate+change+&+weather+crisis&sortBy=publishedAt&pageSize=10&apiKey=${apiKey}`;

    async function fetchNews() {
        try {
            const response = await fetch(newsEndpoint);
            const data = await response.json();
            const articles = data.articles.slice(0, 10);
            const newsSlidesContainer = document.getElementById('news-slides');
            newsSlidesContainer.innerHTML = '';

            articles.forEach((article) => {
                const slide = document.createElement('div');
                slide.classList.add('swiper-slide');
                slide.setAttribute('data-title', article.title);
                slide.setAttribute('data-description', article.description);
                slide.setAttribute('data-video', article.url);

                slide.innerHTML = `
                    <img src="${article.urlToImage || 'images/default.jpg'}" alt="${article.title}">
                    <h2>${article.title}</h2>
                    <p>${article.description}</p>
                `;
                slide.onclick = () => openModal(slide);
                newsSlidesContainer.appendChild(slide);
            });

            initSwiper();
        } catch (error) {
            console.error('Error fetching news:', error);
        }
    }

    function openModal(slide) {
        const modal = document.getElementById('newsModal');
        const title = slide.getAttribute('data-title');
        const description = slide.getAttribute('data-description');
        const videoUrl = slide.getAttribute('data-video');

        document.getElementById('modal-title').innerText = title;
        document.getElementById('modal-description').innerText = description;
        document.getElementById('news-video').src = videoUrl;

        modal.style.display = 'flex';
    }

    function closeModal() {
        const modal = document.getElementById('newsModal');
        modal.style.display = 'none';
        document.getElementById('news-video').src = '';
    }

    function initSwiper() {
        new Swiper('.swiper-container', {
            slidesPerView: 2,
            spaceBetween: 10,
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
            loop: true,
            centeredSlides: true,
            effect: 'fade',
            fadeEffect: { crossFade: true }
        });
    }

    fetchNews();
</script>

</body>
</html>
