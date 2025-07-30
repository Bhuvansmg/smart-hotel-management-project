<?php include("db.php"); ?>
<?php include("bcnavbar.php"); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel Management System</title>

    <!-- Poppins Font -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet" />
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" />
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />

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
            background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('images/hotel-hero.jpg') no-repeat center center/cover;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            color: white;
            text-align: center;
            position: relative;
        }

        .hero h1 {
            font-size: 4rem;
            animation: fadeInDown 1.5s ease-in-out;
            text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.7);
        }

        .hero p {
            font-size: 1.5rem;
            margin-top: 20px;
            animation: fadeInUp 1.5s ease-in-out;
        }

        .hero .btn {
            margin-top: 30px;
            padding: 12px 25px;
            font-size: 1.2rem;
            background-color: orange;
            color: white;
            border: none;
            border-radius: 10px;
            /* transition: transform 0.3s ease, background-color 0.3s ease; */
        }

        .hero .btn:hover {
            background-color: white;
            color: orange;
            font-weight: bold;
            /* transform: scale(1.0); */
        }




        /* Services Section */
        .services {
            padding: 50px 0;
            background-color: #ffffff;
        }

        .services h2 {
            text-align: center;
            margin-bottom: 30px;
            font-size: 2.8rem;
            color: orange;
        }

        .service-card {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .service-card:hover {
            transform: scale(1.05);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
        }

        /* Testimonials Section */
        .testimonials {
            padding: 50px 0;
            background-color: #f8f9fa;
        }

        .testimonials h2 {
            text-align: center;
            margin-bottom: 30px;
            font-size: 2.5rem;
            color: #FF8C00;
        }

        .testimonial-card {
            background-color: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease;
        }

        .testimonial-card:hover {
            transform: translateY(-10px);
        }


        /* About Us Section */
        .about {
            padding: 60px 0;
            background-color: #ffffff;
        }

        .about h2 {
            text-align: center;
            margin-bottom: 40px;
            font-size: 2.8rem;
            color: orange;
        }

        .about p {
            text-align: center;
            font-size: 1.2rem;
            color: #555;
            line-height: 1.8;
        }

        /* Gallery Section */
        .gallery {
            padding: 60px 0;
            background-color: #f4f4f9;
        }

        .gallery h2 {
            text-align: center;
            margin-bottom: 40px;
            font-size: 2.8rem;
            color: orange;
        }

        .gallery img {
            width: 100%;
            height: 250px;
            object-fit: cover;
            border-radius: 10px;
            transition: transform 0.3s ease;
        }

        .gallery img:hover {
            transform: scale(1.05);
        }

        /* Contact Us Section */
        .contact {
            padding: 60px 0;
            background-color: #ffffff;
        }

        .contact h2 {
            text-align: center;
            margin-bottom: 40px;
            font-size: 2.8rem;
            color: orange;
        }

        .contact form {
            max-width: 600px;
            margin: 0 auto;
        }

        .contact form .form-control {
            margin-bottom: 20px;
            border-radius: 5px;
        }

        .contact form .btn {
            background-color: orangered;
            color: white;
            border: none;
            border-radius: 5px;
            padding: 10px 20px;
        }

        .contact form .btn:hover {
            background-color: #e85d50;
        }

        /* Footer */
        footer {
            background-color: #2c2c54;
            color: white;
            padding: 20px 0;
            text-align: center;
        }

        footer a {
            color: #ff6f61;
            text-decoration: none;
        }

        footer a:hover {
            text-decoration: underline;
        }



        .hero .content {
            position: relative;
            z-index: 2;
            animation: fadeIn 2s ease-in-out;
        }


        /* Keyframes for animation */
        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(20px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }





        /* general  */

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
            color: white;
            text-align: center;
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
        }

        .hero .content {
            position: relative;
            z-index: 2;
            color: white;
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
            /* transition: transform 0.3s ease, background-color 0.3s ease; */
        }

        .hero .content .btn:hover {
            background-color: white;
            color: orange;
            font-weight: lighter;
            /* transform: scale(1.0); */
        }

        /* slides images */

        .mySlides {
            display: none;
        }

        .active {
            display: block;
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
            <img class="mySlides active" src="cimages/s11.jpg" alt="Slide 1">
            <img class="mySlides active" src="cimages/S002.jpg" alt="Slide 2">
            <img class="mySlides" src="cimages/h2.jpg" alt="Slide 3">
            <img class="mySlides" src="cimages/sr1.jpg" alt="Slide 4">
            <img class="mySlides" src="cimages/h4.jpg" alt="Slide 5">
        </div>

        <!-- Hero Content -->
        <div class="content">
            <h1>Welcome to Haven Hotel</h1>
            <p>Where luxury meets comfort. Your dream stay awaits.</p>
            <a href="#services" class="btn">Discover More</a>
        </div>
    </div>

    <!-- About Us Section -->
    <section class="about">
        <div class="container">
            <h2>About Us</h2>
            <p>Haven Hotel is a luxurious retreat offering world-class amenities, exceptional service, and an unforgettable experience. Whether you're here for business or leisure, we ensure your stay is nothing short of perfection.</p>
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

    <!-- Gallery Section -->
    <section class="gallery">
        <div class="container">
            <h2>Gallery</h2>
            <div class="row">
                <div class="col-md-4">
                    <img src="cimages/G1.jpeg" alt="Gallery Image 1">
                </div>
                <div class="col-md-4">
                    <img src="cimages/G2.jpeg" alt="Gallery Image 2">
                </div>
                <div class="col-md-4">
                    <img src="cimages/G3.jpeg" alt="Gallery Image 3">
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Us Section -->
    <section class="contact">
        <div class="container">
            <h2>Contact Us</h2>
            <form>
                <input type="text" class="form-control" placeholder="Your Name" required>
                <input type="email" class="form-control" placeholder="Your Email" required>
                <textarea class="form-control" rows="5" placeholder="Your Message" required></textarea>
                <button type="submit" class="btn">Send Message</button>
            </form>
        </div>
    </section>

    <!-- Footer -->
    <!-- Footer -->

    <?php include('footer.php'); ?>



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




    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-QF1QI9j8fW/8zQ4U5e6FJ5Q8j5p6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q/>
</body>
</html>