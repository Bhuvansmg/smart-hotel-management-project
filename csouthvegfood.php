<?php include("db.php"); ?>
<?php include("customernavbar.php"); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="bootstrap-5.3.5-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="admin.css">
<style>
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
</head>

<body>
    <div class=" d-flex justify-content-center gap-5 my-3">
        <form id="form1" name="form1" method="post" action="csouthvegfood.php">
            <input type="hidden" name="vegetarian" value="vegetarian" />

            <button type="submit" name="Submit" class="light-white-btn custom-btn"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB4AAAAeCAYAAAA7MK6iAAAACXBIWXMAAAsTAAALEwEAmpwYAAAAgklEQVR4nGNgGAUjDmitCmWzOxDeZn8g/KH9/rBfFGKQGa0gMwlaDFJIBQvRcSthi6njU3T8iBgf/6IFZiDVYoIaqGWO/ajFgyWo7YlMPKMWM4wG9ZBJXMSCUYsZhkxQ29OxWnxIbUvt9oc9GJimz8GwFoIWgxpmUMvp29gbBcMOAABYDOHxMx4bHgAAAABJRU5ErkJggg==" alt="square"> Vegetarian</button>

        </form>

        <form id="form1" name="form1" method="post" action="csouthnonvegfood.php">

            <input type="hidden" name="Non_Vegetarian" value="Non vegetarian" />
            <button type="submit" name="Submit" class="light-white-btn custom-btn"><img alt="svgImg" id="vegicon" src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIj8+PHN2ZyBmaWxsPSIjRkE1MjUyIiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciICB2aWV3Qm94PSIwIDAgMzAgMzAiIHdpZHRoPSIzMHB4IiBoZWlnaHQ9IjMwcHgiPiAgICA8cGF0aCBkPSJNIDcgNCBDIDUuMzQzIDQgNCA1LjM0MyA0IDcgTCA0IDIzIEMgNCAyNC42NTcgNS4zNDMgMjYgNyAyNiBMIDIzIDI2IEMgMjQuNjU3IDI2IDI2IDI0LjY1NyAyNiAyMyBMIDI2IDcgQyAyNiA1LjM0MyAyNC42NTcgNCAyMyA0IEwgNyA0IHogTSA4IDggTCAyMiA4IEwgMjIgMjIgTCA4IDIyIEwgOCA4IHogTSAxMiAxMiBMIDEyIDE4IEwgMTggMTggTCAxOCAxMiBMIDEyIDEyIHoiLz48L3N2Zz4=" /> Non Vegetarian</button>
        </form>
    </div>

    <div class="container">
        <div class="row">
            <?php
            if (isset($_POST["Submit"])) {
                $veg = $_POST["vegetarian"];
                $sql = "SELECT * FROM food where foodtype = 'southindian' and vegornonveg = '$veg' ";
                $retval = mysqli_query($conn, $sql);
                while ($row = mysqli_fetch_assoc($retval)) {
            ?>
                    <div class="col-lg-3 col-md-4 col-sm-8 mb-2 custom-margin">
                        <div class="box p-3 text-center">

                            <div class="img-box mb-2" style="border-radius:5px; overflow:hidden;">
                                <img src="fimages/south/<?php echo $row['foodimage']; ?>" class="img-fluid" style="height:250px; width:250px; object-fit:cover;" alt="Food Image">
                            </div>
                            <!-- <div class="detail-box">
                                <h6><?php echo $row['foodname']; ?></h6>
                                <span>₹<?php echo $row['foodprice']; ?></span>
                            </div> -->
                            <!-- Details -->
                            <div class="detail-box d-flex justify-content-between align-items-center">
                                <h6 class="fw-400 mb-2"><?php echo $row['foodname']; ?></h6>
                                <span class="text-primary fw-bold">₹<?php echo $row['foodprice']; ?></span>
                            </div>

                            <form action="orderfood.php" method="post">
                                <div class="mt-3">
                                    <input type="hidden" name="fid" value="<?php echo $row['id'] ?>">
                                    <input type="submit" name="order" value="Order" class="btn btn-sm fw-400" style="background-color:orange; color:#FFFFFF;" />
                                </div>
                            </form>
                        </div>
                    </div>
            <?php
                }
            }
            ?>
        </div>
    </div>
    <?php include('footer.php'); ?>
    <script src="bootstrap-5.3.5-dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>