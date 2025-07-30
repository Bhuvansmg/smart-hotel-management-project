<?php include("db.php"); ?>
<?php include("admintab.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Hotel Staff Directory</title>
  <!-- Bootstrap CDN -->
   <link href="admin.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background: #f8f9fa;
    }
    .staff-card {
      transition: transform 0.2s ease;
    }
    .staff-card:hover {
      transform: translateY(-5px);
    }
    .staff-img {
      object-fit: cover;
      height: 250px;
    }
  </style>
</head>
<body>
<div class="container text-center my-5">
  <h2>Meet Our Staff</h2>

  
  <div class="row justify-content-center mt-4">
    <!-- Buttons Row -->
    <div class="btn-group d-flex flex-wrap justify-content-center gap-3" role="group" aria-label="Hotel Workers">
  
      <a href="deptreception.php"  class="btn btn-outline-primary">
        Receptionist </a>

    <a href="deptkitchen.php"  class="btn btn-outline-primary" >
       Chef</a>

      <a href="deptmaintain.php" class="btn btn-outline-primary" >
      Cleaner </a>

      <a   href="deptsecurity.php" class="btn btn-outline-primary" >
      Security Guard </a>
     
  
      <!-- Add more buttons if needed -->
    </div>
  </div>

</div>



<form action="" method="post">
<div class="container pt-0">
  <!-- <h2 class="text-center mb-5">Meet Our Staff</h2> -->
  <div class="row g-4">
  <?php
      $sql = "SELECT * FROM addstaff";
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
</form>


</body>
</html>
