<?php include("db.php"); ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="shef.css">
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
          
          <li class="nav-item  me-5">
            <a class="nav-link" aria-current="page" href="#">Dashboard</a>
          </li>

          <li class="nav-item  me-5">
            <a class="nav-link" aria-current="page" href="shefviewfoodorder.php">View Food Orders</a>
          </li>

          <li class="nav-item  me-5">
            <a class="nav-link" aria-current="page" href="managemenu.php">Manage Menu Items</a>
          </li>

          <li class="nav-item  me-5">
            <a class="nav-link" aria-current="page" href="#">Update Dish Status</a>
          </li>

         
          </li>
          <li class="nav-item me-5">
            <a class="nav-link" href="request.php">Request Supplies</a>
          </li>
          <li class="nav-item me-5">
            <a class="nav-link" href="#">Logout</a>
          </li>
         
         
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