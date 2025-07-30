<?php include("db.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="admin.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid"  id="adminnavbarNav">
    <a class="navbar-brand" href="#">Home</a>
    <!-- <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button> -->
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item  me-3">
          <a class="nav-link active" aria-current="page" href="#">Dashboard</a>
        </li>
        <li class="nav-item  me-3">
          <a class="nav-link" href="#">Room Bookings</a>
        </li>
        <li class="nav-item me-3">
          <a class="nav-link" href="#">Table Bookings</a>
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
             <li><a class="dropdown-item" href="#">Beverages</a></li>
             <li><a class="dropdown-item" href="#">Deserts</a></li>
            <!-- <li><hr class="dropdown-divider"></li> -->
        
          </ul>
        </li>
        <li class="nav-item me-3">
          <a class="nav-link" href="#">Customers</a>
        </li>
        <!-- <li class="nav-item">
          <a class="nav-link disabled" aria-disabled="true">Disabled</a>
        </li> -->
      </ul>

      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>

    </div>
  </div>
</nav>

<!-- End nav bar -->


<div class="container text-center my-5">
  <h2>Meet Our Staff</h2>

 
  <div class="row justify-content-center mt-4">
    <!-- Buttons Row -->
    <div class="btn-group d-flex flex-wrap justify-content-center gap-3" role="group" aria-label="Hotel Workers">
  
    <a href="deptreception.php"  class="btn btn-outline-primary">
        Receptionist </a>

    <a href="deptkitchen.php"  class="btn btn-outline-primary" >
       Chef</a>

      <a href="deptmaintain.php" class="btn btn-outline-primary">
      Cleaner </a>

      <a   href="deptsecurity.php" class="btn btn-outline-primary">
      Security Guard </a>
     
      <!-- Add more buttons if needed -->
    </div>
  </div>
 
</div>




<div class="container pt-0">
  <!-- <h2 class="text-center mb-5">Meet Our Staff</h2> -->
  <div class="row g-4">
  <?php
      $sql = "SELECT * FROM addstaff WHERE dept = 'Reception'";
      $retval = mysqli_query($conn, $sql);
     while ($row = mysqli_fetch_assoc($retval)) {

      ?>
    <!-- Staff Member Card -->
    <!-- Repeat this block for each staff member -->
  
    <div class="col-md-4">
      <div class="card staff-card shadow-sm">
        <br>   
      <img src="Staffimages/<?php echo $row['photo'];?>"style="height:200px; object-fit:adjust;" class="card-img-top staff-img" alt="Staff Image">
       
      
      <div class="card-body">
          <h5 class="card-title"><?php echo $row['fullname']; ?></h5>
          <p class="card-text"><?php echo $row['designation']; ?></p>
          <p class="text-muted">📞 +91<?php echo $row['phnumber']; ?><br>📧<?php echo $row['email']; ?></p>
          <form action="viewstaffdetails.php" method="POST">
          <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
         <button type="submit" class="btn btn-primary" name="view">View More</button>
         </form>
        </div>
      </div>
    </div>
    <?php
     }
      ?>

  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>  
</body>
</html>