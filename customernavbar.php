<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
  <!-- fontawesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="customer.css">
  <style>
    .nav-link {
      line-height: 1.4;
      /* Set consistent line height */
      padding: 6px 10px;
      /* Adjust padding to control height */
      transition: color 0.3s ease, background-color 0.3s ease;
      color: white !important;
    }

    /* Add hover effect for nav links */
    .nav-link:hover {
      color: white !important;
      /* Ensure text color changes to white */
      background-color: orange !important;
      /* Background color on hover */
      text-decoration: none;
      transition: color 0.3s ease, background-color 0.3s ease;
    }

    /* Add hover effect for buttons */
    .btn-warning:hover {
      background-color: orange !important;
      /* Darker orange */
      color: white !important;
      /* Ensure text color changes to white */
      transition: background-color 0.3s ease, color 0.3s ease;
    }

    .btn-outline-warning:hover {
      background-color: orange !important;
      /* Orange background */
      color: white !important;
      /* Ensure text color changes to white */
      transition: background-color 0.3s ease, color 0.3s ease;
    }
  </style>
</head>

<body>

  <nav class="navbar navbar-expand-lg" style="background-color: rgb(120, 126, 136);  font-family: 'Poppins', sans-serif; position: sticky; top: 0; z-index: 1020;">
    <div class="container-fluid">

    
        <a class="navbar-brand text-white me-4" href="index.php" style="font-size: 1.2rem;">
  <i class="fa-solid fa-hotel" style="color: #FFD43B;"> Haven</i> 
</a>

    
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="home.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="services.php">Services</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Bookings
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="rooms.php">Rooms Booking</a></li>
              <li><a class="dropdown-item" href="tablereserv.php">Table Reserve</a></li>
            </ul>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Food Menu
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="csouth.php">South Indian</a></li>
              <li><a class="dropdown-item" href="cnorth.php">North Indian</a></li>
              <li><a class="dropdown-item" href="#">Chinese</a></li>
              <li><a class="dropdown-item" href="#">Fast Food</a></li>
              <li><a class="dropdown-item" href="#">Continental</a></li>
              <li><a class="dropdown-item" href="cbeverages.php">Beverages</a></li>
              <li><a class="dropdown-item" href="cdesert.php">Deserts</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="payment.php">Payment</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="offer&packages.php">Offers and Packages</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="mybookings.php">My Bookings</a>
          </li>


          <li class="nav-item" style="margin-top: 9px;">
            <a href="mycart.php">
              <span>
                <i class="fa-solid fa-cart-shopping" style="color: #ffffff; font-size:1.2rem;"></i>
              </span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contactus.php"></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contactus.php">Contact Us</a>
          </li>
          <li class="nav-item">

            <a class="btn btn-outline-warning text-white px-3" href="logout.php" style="border-radius: 20px; font-size: 1rem;">
              <i class="fa-solid fa-user fa-lg" style="color: #ffffff;"></i>
              <span>
                Logout
              </span>
            </a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>
</body>

</html>