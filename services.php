<?php include("customernavbar.php"); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel Services</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
    <link rel="stylesheet" href="services.css">
    <style>
        /* General Styling */
        body {
            font-family: 'Roboto', sans-serif;
            background-color: #f8f9fa;
            margin: 0;
            padding: 0;
        }

        h1,
        h2,
        h3 {
            text-align: center;
            margin-bottom: 20px;
            font-weight: bold;
        }

        .section-title {
            font-size: 2rem;
            color: #007bff;
            margin-bottom: 30px;
        }

        /* Hero Section */
        .hero {
            background: url('images/hotel-hero.jpg') no-repeat center center/cover;
            height: 400px;
            margin-top:-100px;
            display: flex;
            justify-content: center;
            align-items: center;
            color:orange;
            /* text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.7); */
        }

        .hero h1 {
            font-size: 3rem;
        }

        /* Services Section */
        .services {
            padding: 50px 0;
        }

        .service-card {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .service-card:hover {
            transform: scale(1.05);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
        }

        .service-card img {
            height:250px;
            object-fit: cover;
        }

        /* Animation */
        .fade-in {
            animation: fadeIn 1.5s ease-in-out;
        }

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

        /* Footer */
        footer {
            background-color: #343a40;
            color: white;
            padding: 20px 0;
            text-align: center;
        }

        /* header */
    .service-card img {
    height:250px; /* Increased height for images */
    object-fit: cover; /* Ensures the image fits nicely within the specified height */
}
#page-header {
    background-size: cover;
    background-position:center;
    height:400px; /* Adjust height as needed */
}

#page-header .page-header-inner {
    background: rgba(0, 0, 0, 0.1); /* Overlay for better text visibility */
}

/* service container */
.services container{
    margin-top:-150px;
}
  #last{
     /* margin-top:-10px;  */
     font-size:25px;
     color: white;
     background-color: #2c2c54;
     padding-top: 20px;
     padding-bottom: 20px;
     height:150%;
    padding-left:40%;
     padding-right:40%;
     text-align: center;
     font-weight: 400;
     margin: 0;
    }
  </style>
    </style>
</head>

<body>
     <!-- Page Header Start -->
     <div id="page-header"  class="container-fluid page-header mb-5 p-0" style="background-image: url(cimages/darkheader.jpeg);">
        <div class="container-fluid page-header-inner py-5" style="background: rgba(0, 0, 0, 0.1);">
            <div class="container text-center pb-5">
                <h1 class="display-3 text-white mb-3 animated slideInDown">Services</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center text-uppercase">
                        <li class="breadcrumb-item"><a href="#" class="text-white text-decoration-none">Home</a></li>
                        <li class="breadcrumb-item"><a href="#" class="text-white text-decoration-none">Pages</a></li>
                        <li class="breadcrumb-item text-white active" aria-current="page">Services</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
        <!-- Page Header End -->


    <!-- Hero Section -->
    <div class="hero">
        <h1>Welcome to Our Hotel</h1>
    </div>

    <!-- Services Section -->
    <section class="services container" style="margin-top:-100px;">
        <!-- <h2 class="section-title">Our Services</h2> -->
        <div class="text-center wow fadeInUp " data-wow-delay="0.1s">
            <h6 class="section-title text-center text-primary text-uppercase">Our Services</h6>
            <h1 class="mb-5">Explore Our <span class="text-primary text-uppercase">Services</span></h1>
        </div>
        <div class="row">
            <!-- Service 1 -->
            <div class="col-md-4 mb-4 fade-in">
                <div class="card service-card">
                <img src="cimages/r.jpg" class="card-img-top" alt="Room Service">
                 <div class="card-body">
                    
                        <h5 class="card-title">Room Service</h5>
                        <p class="card-text">Enjoy 24/7 room service with a variety of food and beverages delivered to your room.</p>
                    </div>
                </div>
            </div>
            <!-- Service 2 -->
            <div class="col-md-4 mb-4 fade-in">
                <div class="card service-card">
                    <img src="cimages/r1.jpeg" class="card-img-top" alt="Luxury Rooms">
                    <div class="card-body">
                        <h5 class="card-title">Luxury Rooms</h5>
                        <p class="card-text">Stay in our luxurious rooms with modern amenities and breathtaking views.</p>
                    </div>
                </div>
            </div>
            <!-- Service 3 -->
            <div class="col-md-4 mb-4 fade-in">
                <div class="card service-card">
                    <img src="cimages/smingpool.jpeg" class="card-img-top" alt="Spa & Wellness">
                    <div class="card-body">
                        <h5 class="card-title">Swimming Pool</h5>
                        <p class="card-text">Dive into our crystal-clear swimming pool and enjoy a refreshing experience in a serene and luxurious setting.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Food Section -->
    <section class="services container">
        <h2 class="section-title">Our Food Menu</h2>
        <div class="row">
            <!-- Food 1 -->
            <div class="col-md-4 mb-4 fade-in">
                <div class="card service-card">
                    <img src="cimages/south.jpeg" class="card-img-top" alt="South Indian">
                    <div class="card-body">
                        <h5 class="card-title">South Indian Cuisine</h5>
                        <p class="card-text">Taste the authentic flavors of South India with our curated menu.</p>
                    </div>
                </div>
            </div>
            <!-- Food 2 -->
            <div class="col-md-4 mb-4 fade-in">
                <div class="card service-card">
                    <img src="cimages\chinese.jpeg" class="card-img-top" alt="Chinese">
                    <div class="card-body">
                        <h5 class="card-title">Chinese Cuisine</h5>
                        <p class="card-text">Savor the best of Chinese dishes prepared by our expert chefs.</p>
                    </div>
                </div>
            </div>
            <!-- Food 3 -->
            <div class="col-md-4 mb-4 fade-in">
                <div class="card service-card">
                    <img src="cimages/desert.jpeg" class="card-img-top" alt="Desserts">
                    <div class="card-body">
                        <h5 class="card-title">Delicious Desserts</h5>
                        <p class="card-text">Indulge in our wide range of desserts to satisfy your sweet tooth.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
     <?php include('footer.php'); ?>

    <!-- Footer -->
    <!-- <footer>
        <p>&copy; 2025 Hotel Management System. All Rights Reserved.</p>
    </footer> -->
    <style>
    body {
      font-family: 'Roboto', sans-serif;
      background-color: #f8f9fa;
      margin: 0;
      padding: 0;
    }

    .hero {
      background: url('images/hotel-hero.jpg') no-repeat center center/cover;
      height: 400px;
      display: flex;
      justify-content: center;
      align-items: center;
      color: orange;
    }

    .hero h1 {
      font-size: 3rem;
    }

    .services {
      padding: 50px 0;
    }

    .service-card {
      transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .service-card:hover {
      transform: scale(1.05);
      box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
    }

    .service-card img {
      height: 250px;
      object-fit: cover;
    }
  </style>



<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-QF1QI9j8fW/8zQ4U5e6FJ5Q8j5p6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q/>
</body>

</html>