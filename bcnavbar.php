<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
  <title>Hotel Management</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<style>
  .nav-link {
    line-height: 1.3;
    /* Set consistent line height */
    padding: 6px 10px;
    /* Adjust padding to control height */
    transition: color 0.3s ease, background-color 0.3s ease;
  }

  /* Add hover effect for nav links */
  .nav-link:hover {
    color: white !important;
    /* Text color changes to white */
    background-color: orange !important;
    /* Optional: Add a background color if needed */
    text-decoration: none;
    transition: color 0.3s ease, background-color 0.3s ease;
    border-radius: 5px;
  }

  /* Add hover effect for buttons */
  .btn-warning:hover {
    background-color: orange !important;
    /* Darker orange */
    color: white !important;
    /* Text color changes to white */
    transition: background-color 0.3s ease, color 0.3s ease;
  }

  .btn-outline-warning:hover {
    background-color: orange !important;
    /* Orange background */
    color: white !important;
    /* Text color changes to white */
    transition: background-color 0.3s ease, color 0.3s ease;
  }

  /* Add space between nav links */
  .nav-item {
    margin-right: 10px;
    /* Adjust this value for more or less space */
  }
</style>
</head>

<body>

  <nav class="navbar navbar-expand-lg" style="background-color: rgb(120, 126, 136); font-family: 'Poppins', sans-serif;">
    <div class="container-fluid  d-flex justify-content-between">





      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse " id="navbarNav">
        <ul class="navbar-nav">

          <li class="nav-item me-4">
            <a class="nav-link text-white" href="index.php" style="font-size: 1.2rem;">
              <span>
<i class="fa-solid fa-hotel" style="color: #FFD43B;"> Haven</i>
              </span>
            </a>
          </li>
          <li class="nav-item me-5">
            <a class="nav-link text-white" href="index.php" style="font-size: 1.2rem;">Home</a>
          </li>
          <li class="nav-item me-5">
            <a class="nav-link text-white" href="blaboutus.php" style="font-size: 1.2rem;">About Us</a>
          </li>
          <li class="nav-item me-5">
            <a class="nav-link text-white" href="blrooms.php" style="font-size: 1.2rem;">Rooms</a>
          </li>
          <li class="nav-item me-5">
            <a class="nav-link text-white" href="blservices.php" style="font-size: 1.2rem;">Services</a>
          </li>
          <li class="nav-item me-5">
            <a class="nav-link text-white" href="#" style="font-size: 1.2rem;">Gallery</a>
          </li>
          <li class="nav-item me-5">
            <a class="nav-link text-white" href="contactus.php" style="font-size: 1.2rem;">Contact Us</a>
          </li>


          <div class="h-100 d-inline-flex align-items-center py-2">

            <i class="fa-solid fa-phone fa-lg" style="color: #ffb10a;"></i>
            <p class="mb-0" style="color: white;">+012 345 6789</p>
          </div>
        </ul>
        <div class="d-flex" style="margin-left: auto; margin-right:16px;">
          <a class="btn btn-warning text-dark px-4 me-4" href="login.php" style="border-radius: 20px; font-size: 1rem;">
           <i class="fa-solid fa-user fa-lg" style="color:rgb(251, 240, 240);"></i>  
           <span>
            Login
           </span>

        </a>

          <a class="btn btn-outline-warning text-white px-4" href="register.php" style="border-radius: 20px; font-size: 1rem;">
            <i class="fa-solid fa-user fa-lg" style="color: #ffffff;"></i>
            <span>
                Sign Up
            </span>
          </a>
        </div>

      </div>
    </div>
  </nav>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>
</body>

</html>