<?php include("db.php"); ?>
<?php include("customernavbar.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel Management System</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <style>
        /* General Styling */
        body {
            font-family: 'Poppins', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f9;
        }

        /* Hero Section */
        .hero {
            position: relative;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
            color: white;
            overflow: hidden;
        }

        .hero .slideshow-container {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: 1;
        }

        .hero .slideshow-container img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            display: none;
        }

        .hero .slideshow-container img.active {
            display: block;
        }

        .hero .content {
            position: relative;
            z-index: 2;
            text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.7);
        }

        .hero .content h1 {
            font-size: 4rem;
            animation: fadeInDown 1.5s ease-in-out;
        }

        .hero .content p {
            font-size: 1.5rem;
            margin-top: 20px;
            animation: fadeInUp 1.5s ease-in-out;
        }

        .hero .content .btn {
            margin-top: 30px;
            padding: 12px 25px;
            font-size: 1.2rem;
            background-color: orange;
            color: white;
            border: none;
            border-radius: 10px;
            transition: transform 0.3s ease, background-color 0.3s ease;
        }

        .hero .content .btn:hover {
            background-color: white;
            color: orange;
            font-weight: bold;
            transform: scale(1.0);
        }

        @keyframes fadeInDown {
            from {
                opacity: 0;
                transform: translateY(-20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
    </style>
</head>
<body>
    <!-- Hero Section -->
    <div class="hero">
        <!-- Slideshow -->
        <div class="slideshow-container">
            <img class="mySlides active" src="cimages/h01.jpeg" alt="Slide 1">
            <img class="mySlides" src="cimages/h2.jpg" alt="Slide 2">
            <img class="mySlides" src="cimages/h3.jpg" alt="Slide 3">
            <img class="mySlides" src="cimages/h4.jpg" alt="Slide 4">
        </div>

        <!-- Hero Content -->
        <div class="content">
            <h1>Welcome to Paradise Hotel</h1>
            <p>Where luxury meets comfort. Your dream stay awaits.</p>
            <a href="#services" class="btn">Discover More</a>
        </div>
    </div>

    <!-- About Us Section -->
    <section class="about">
        <div class="container">
            <h2>About Us</h2>
            <p>Paradise Hotel is a luxurious retreat offering world-class amenities, exceptional service, and an unforgettable experience. Whether you're here for business or leisure, we ensure your stay is nothing short of perfection.</p>
        </div>
    </section>

    <!-- Services Section -->
    <section id="services" class="services">
        <div class="container">
            <h2>Our Services</h2>
            <div class="row">
                <div class="col-md-4">
                    <div class="card service-card">
                        <img src="cimages/s1.jpeg" class="card-img-top" alt="Room Service">
                        <div class="card-body">
                            <h5 class="card-title">Room Service</h5>
                            <p class="card-text">Enjoy 24/7 room service with a variety of food and beverages delivered to your room.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card service-card">
                        <img src="cimages/s2.jpeg" class="card-img-top" alt="Luxury Rooms">
                        <div class="card-body">
                            <h5 class="card-title">Luxury Rooms</h5>
                            <p class="card-text">Stay in our luxurious rooms with modern amenities and breathtaking views.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card service-card">
                        <img src="cimages/s3.jpeg" class="card-img-top" alt="Swimming Pool">
                        <div class="card-body">
                            <h5 class="card-title">Swimming Pool</h5>
                            <p class="card-text">Dive into our crystal-clear swimming pool and enjoy a refreshing experience.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <p>&copy; 2025 Paradise Hotel. All Rights Reserved. | <a href="#">Privacy Policy</a></p>
    </footer>

    <!-- JavaScript for Slideshow -->
    <script>
        let slideIndex = 0;
        const slides = document.querySelectorAll(".mySlides");

        function showSlides() {
            slides.forEach((slide, index) => {
                slide.classList.remove("active");
                if (index === slideIndex) {
                    slide.classList.add("active");
                }
            });
            slideIndex = (slideIndex + 1) % slides.length;
        }

        setInterval(showSlides, 3000); // Change image every 3 seconds
    </script>
</body>
</html>