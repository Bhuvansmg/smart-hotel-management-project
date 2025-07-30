<!-- filepath: c:\xampp\htdocs\hotelprj\cfolder\aboutus.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - Paradise Hotel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f4f4f9;
        }

        .hero {
            background: linear-gradient(rgba(245, 240, 240, 0.5), rgba(0, 0, 0, 0.5)), url('cimages/about-hero.jpg') no-repeat center center/cover;
            height: 60vh;
            display: flex;
            justify-content: center;
            align-items: center;
            color: white;
            text-align: center;
        }

        .hero h1 {
            font-size: 3.5rem;
            text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.7);
        }

        .about-section {
            padding: 60px 20px;
        }

        .about-section h2 {
            font-size: 2.5rem;
            color: #FF8C00;
            text-align: center;
            margin-bottom: 30px;
        }

        .about-section p {
            font-size: 1.2rem;
            color: #555;
            line-height: 1.8;
            text-align: justify;
        }

        .team-section {
            padding: 60px 20px;
            background-color: #ffffff;
        }

        .team-section h2 {
            font-size: 2.5rem;
            color: #FF8C00;
            text-align: center;
            margin-bottom: 30px;
        }

        .team-card {
            border: none;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease;
        }

        .team-card:hover {
            transform: scale(1.05);
        }

        .team-card img {
            border-radius: 50%;
            width: 150px;
            height: 150px;
            object-fit: cover;
            margin: 0 auto;
        }

        .team-card h5 {
            margin-top: 15px;
            font-size: 1.2rem;
            color: #333;
        }

        .team-card p {
            font-size: 1rem;
            color: #777;
        }

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
    </style>
</head>
<body>
    <!-- Hero Section -->
    <div class="hero">
        <h1>About Us</h1>
    </div>

    <!-- About Section -->
    <section class="about-section">
        <div class="container">
            <h2>Welcome to  Hotel</h2>
            <p>
                At Haven Hotel, we pride ourselves on offering a luxurious and unforgettable experience for our guests. Nestled in the heart of the city, our hotel combines modern elegance with timeless charm. Whether you're here for business or leisure, we ensure your stay is nothing short of perfection.
            </p>
            <p>
                Our state-of-the-art facilities, world-class dining, and exceptional service make us the preferred choice for travelers from around the globe. From our spacious rooms with breathtaking views to our relaxing spa and wellness center, every detail is designed to provide you with the ultimate comfort and convenience.
            </p>
        </div>
    </section>

<!-- Team Section -->
<section class="team-section">
    <div class="container">
        <h2>Meet Our Team</h2>
        <div class="row">
            <!-- Team Member 1 -->
            <div class="col-md-4">
                <div class="card team-card text-center">
                    <img src="cimages/about1.jpeg" alt="Team Member 1">
                    <div class="card-body">
                        <h5>John Doe</h5>
                        <p>General Manager</p>
                        <p class="text-muted">John brings over 15 years of experience in hospitality management, ensuring every guest enjoys a seamless stay.</p>
                        <a href="#" class="btn btn-outline-warning btn-sm">View Profile</a>
                    </div>
                </div>
            </div>
            <!-- Team Member 2 -->
            <div class="col-md-4">
                <div class="card team-card text-center">
                    <img src="cimages/about3.jpeg" alt="Team Member 2">
                    <div class="card-body">
                        <h5>Jane Smith</h5>
                        <p>Head Chef</p>
                        <p class="text-muted">Jane is a culinary expert who crafts exquisite dishes, blending local flavors with international cuisine.</p>
                        <a href="#" class="btn btn-outline-warning btn-sm">View Profile</a>
                    </div>
                </div>
            </div>
            <!-- Team Member 3 -->
            <div class="col-md-4">
                <div class="card team-card text-center">
                    <img src="cimages/about2.jpeg" alt="Team Member 3">
                    <div class="card-body">
                        <h5>Emily Johnson</h5>
                        <p>Guest Relations Manager</p>
                        <p class="text-muted">Emily ensures every guest feels at home, providing personalized service and attention to detail.</p>
                        <a href="#" class="btn btn-outline-warning btn-sm">View Profile</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

  <?php include('footer.php'); ?>
    <!-- Footer -->
    <footer>
        <p>&copy; 2025 Paradise Hotel. All Rights Reserved. | <a href="#">Privacy Policy</a></p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>