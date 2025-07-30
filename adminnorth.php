<?php include("db.php"); ?>
<?php include("admintab.php"); ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
  <link rel="stylesheet" href="bootstrap-5.3.5-dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="admin.css">

</head>

<body>
<div class=" d-flex justify-content-center gap-5 my-3" >
    <form id="form1" name="form1" method="post" action="northvegfood.php">
     <input type="hidden" name="vegetarian" value="vegetarian" />
  
      <button type="submit" name="Submit" class="light-white-btn custom-btn"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB4AAAAeCAYAAAA7MK6iAAAACXBIWXMAAAsTAAALEwEAmpwYAAAAgklEQVR4nGNgGAUjDmitCmWzOxDeZn8g/KH9/rBfFGKQGa0gMwlaDFJIBQvRcSthi6njU3T8iBgf/6IFZiDVYoIaqGWO/ajFgyWo7YlMPKMWM4wG9ZBJXMSCUYsZhkxQ29OxWnxIbUvt9oc9GJimz8GwFoIWgxpmUMvp29gbBcMOAABYDOHxMx4bHgAAAABJRU5ErkJggg==" alt="square"> Vegetarian</button>
      
</form>

    <form id="form1" name="form1" method="post" action="northnonvegfood.php">

      <input type="hidden" name="Non_Vegetarian" value="Non vegetarian" />
      <button type="submit" name="Submit" class="light-white-btn custom-btn"><img alt="svgImg" id="vegicon" src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIj8+PHN2ZyBmaWxsPSIjRkE1MjUyIiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciICB2aWV3Qm94PSIwIDAgMzAgMzAiIHdpZHRoPSIzMHB4IiBoZWlnaHQ9IjMwcHgiPiAgICA8cGF0aCBkPSJNIDcgNCBDIDUuMzQzIDQgNCA1LjM0MyA0IDcgTCA0IDIzIEMgNCAyNC42NTcgNS4zNDMgMjYgNyAyNiBMIDIzIDI2IEMgMjQuNjU3IDI2IDI2IDI0LjY1NyAyNiAyMyBMIDI2IDcgQyAyNiA1LjM0MyAyNC42NTcgNCAyMyA0IEwgNyA0IHogTSA4IDggTCAyMiA4IEwgMjIgMjIgTCA4IDIyIEwgOCA4IHogTSAxMiAxMiBMIDEyIDE4IEwgMTggMTggTCAxOCAxMiBMIDEyIDEyIHoiLz48L3N2Zz4="/> Non Vegetarian</button>
 </form>
  </div>
  <div class="container">
    <div class="row">
      <?php
      $sql = "SELECT * FROM food where foodtype = 'northindian'";
      $retval = mysqli_query($conn, $sql);


      while ($row = mysqli_fetch_assoc($retval)) {

      ?>
        <div class="col-lg-3 col-md-4 col-sm-8 mb-2 custom-margin">
          <div class="box p-3 text-center">

            <div class="img-box mb-2" style="border-radius:5px; overflow:hidden;">
              <img src="fimages/nor/<?php echo $row['foodimage']; ?>" class="img-fluid" style="height:250px; width:250px; object-fit:cover;" alt="Food Image">
            </div>
            <div class="detail-box d-flex justify-content-between align-items-center">
                                <h6 class="fw-400 mb-2"><?php echo $row['foodname']; ?></h6>
                                <span class="text-primary fw-bold">₹<?php echo $row['foodprice']; ?></span>
                            </div>
                            <div class="mt-3">
                                <button class="btn btn-sm fw-400" style="background-color:orange; color:#FFFFFF;">Order</button>
                            </div>
                            <div class="new"><span></span></div>


          </div>
          <form action="" method="post">
            <input name="fid" type="hidden" value="<?php echo $row['id'] ?>">



            <button type="submit" name="delete" value="Delete"> <i class="fa-solid fa-trash-can" style="color: #e62828;"></i></button>
     

            <input type="text" name="fprice" value="<?php echo $row['foodprice'] ?>" style="width:60px;" required />
            <input type="submit" name="update" value="Update Price"  style="width:110px;  border-radius:5px; background-color:green; color:#FFFFFF;" />
          </form>
        </div>
      <?php
      }
      ?>
    </div>
  </div>




  
  <?php
      if (isset($_POST["delete"])) {
        $fid = $_POST["fid"];
        $sql = "delete from food where id ='$fid'";
        if (mysqli_query($conn, $sql)) {

      ?>
          <script>
            alert("Food item deleted successfully");
            window.open("adminnorth.php", "_self");
          </script>

      <?php
        }
      }
      ?>

<?php
      if (isset($_POST["update"])) {
        $fprice = $_POST["fprice"];
        $fid = $_POST["fid"];
        $sql = "update  food set foodprice ='$fprice' where id = '$fid'";
        if (mysqli_query($conn, $sql)) {

      ?>
          <script>
            alert("Food price update successfully");
            window.open("adminnorth.php","_self");
          </script>

      <?php
        }
      }
      ?>


  <script src="bootstrap-5.3.5-dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>