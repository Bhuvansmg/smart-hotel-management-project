<?php include("db.php"); ?>
<?php include("customernavbar.php"); ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="bootstrap-5.3.5-dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="customer.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>

<body>
  <div class=" d-flex justify-content-center gap-5 my-3">
   
  </div>
  <div class="container">
    <div class="row">
      <?php
      $sql = "SELECT * FROM food where foodtype = 'Desert'";
      $retval = mysqli_query($conn, $sql);
      while ($row = mysqli_fetch_assoc($retval)) {

      ?>
        <div class="col-lg-3 col-md-4 col-sm-8 mb-2 custom-margin">
          <div class="box p-3 text-center">

            <div class="img-box mb-2" style="border-radius:5px; overflow:hidden;">
              <img src="fimages/desert/<?php echo str_replace(' ', '%20', $row['foodimage']); ?>" class="img-fluid" style="height:250px; width:250px; object-fit:cover;" alt="Food Image">

            </div>

            <div class="detail-box d-flex justify-content-between align-items-center">
              <h6 class="fw-400 mb-2"><?php echo $row['foodname']; ?></h6>
              <span class="text-primary fw-bold">₹<?php echo $row['foodprice']; ?></span>
            </div>

            <form action="cdesertorderfood.php" method="post">
              <div class="mt-3">
                <input type="hidden" name="fid" value="<?php echo $row['id'] ?>">
                <input type="submit" name="order" value="Order" class="btn btn-sm fw-400" style="background-color:orange; color:#FFFFFF;" />
              </div>
            </form>
            <!-- <div class="new"><span></span></div> -->


          </div>
        </div>
      <?php
      }
      ?>
    </div>
  </div>
  <?php include('footer.php'); ?>
  <script src="bootstrap-5.3.5-dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>