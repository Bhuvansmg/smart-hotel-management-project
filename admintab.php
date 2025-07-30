<?php include("db.php"); ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="admin.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">

</head>

<body>

  <!-- <nav class="navbar navbar-expand-lg bg-body-tertiary"> -->
  <nav class="navbar navbar-expand-lg" style="color: white;  background-color:rgb(120, 126, 136); ">
    <div class="container-fluid " id="adminnavbarNav">

      <!-- <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button> -->
      <div class="collapse navbar-collapse" id="navbarSupportedContent">

        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item  me-3">
            <a class="nav-link" href="cfolder/home.php">Home</a>
          </li>
          <li class="nav-item  me-3">
            <a class="nav-link" aria-current="page" href="dashboard.php">Dashboard</a>
          </li>

          <li class="nav-item  me-3">
            <a class="nav-link" href="#">Room Management</a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="adminaddroom.php">Add Room</a></li>
              <li><a class="dropdown-item" href="adminviewroom.php">View Rooms</a></li>
              <li><a class="dropdown-item" href="adminroomscat.php"> Rooms Category</a></li>

            </ul>
          </li>

          <!-- <li class="nav-item me-3">
            <a class="nav-link" href="#">View Bookings</a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="adminaddroom.php">Add Room</a></li>
              <li><a class="dropdown-item" href="adminviewroom.php">View Rooms</a></li>
            </ul>
          </li> -->

          <li class="nav-item dropdown me-3">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
           View Bookings
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="adminviewroomsbooking.php">Rooms Booking</a></li>
              <li><a class="dropdown-item" href="adminviewtable.php">Table Bookingss </a></li>

            </ul>
          </li>




          <li class="nav-item dropdown me-3">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Staffs
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="addstaffapp.php">Add Staffs</a></li>
              <li><a class="dropdown-item" href="staff.php">View Staffs info </a></li>

            </ul>
          </li>
          <li class="nav-item dropdown me-3">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Manage Menu Items
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="adminfooditem.php">Manage Items</a></li>
              <li><a class="dropdown-item" href="adminsouth.php">South Indian </a></li>
              <li><a class="dropdown-item" href="adminnorth.php">North Indian</a></li>
              <li><a class="dropdown-item" href="#">Chinese</a></li>
              <li><a class="dropdown-item" href="#">Fast Food</a></li>
              <li><a class="dropdown-item" href="#">Continental</a></li>
              <li><a class="dropdown-item" href="adminbeverages.php">Beverages</a></li>
              <li><a class="dropdown-item" href="admindesert.php">Deserts</a></li>
              <!-- <li><hr class="dropdown-divider"></li> -->

            </ul>
          </li>
          <li class="nav-item me-3">
            <a class="nav-link" href="adminviewcustomerdetails.php">Customers</a>
          </li>
          <li class="nav-item me-3">
            <a class="nav-link" href="adminpayment.php">Payments</a>
          </li>
          <li class="nav-item me-3">
            <a class="nav-link" href="adminshefitems.php">Shef Items</a>
          </li>
          <li class="nav-item me-3">
            <a class="nav-link" href="#">Logout</a>
          </li>
          <!-- <li class="nav-item">
          <a class="nav-link disabled" aria-disabled="true">Disabled</a>
        </li> -->
        </ul>

        <!-- <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form> -->

      </div>
    </div>
  </nav>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>
</body>

</html>