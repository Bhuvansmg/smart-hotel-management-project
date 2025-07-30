<?php
// Start the session
session_start();
?>
<?php include('db.php'); ?>
 <?php include("customernavbar.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Hotel Payment</title>
  <!-- Poppins Font -->
  <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet" />
  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <style>
    #paymode{
      margin-left:40%;
      margin-top:80px;
    }
    #mybtn{
      margin-left:120px;
    }
    .checkmark-circle {
      width: 100px;
      height: 100px;
      position: relative;
      display: inline-block;
      vertical-align: top;
    }

    .checkmark-circle .background {
      width: 100px;
      height: 100px;
      border-radius: 50%;
      background: #28a745;
      position: absolute;
    }

    .checkmark-circle .checkmark {
      border-radius: 5px;
      height: 60px;
      width: 30px;
      transform: rotate(45deg);
      border-bottom: 8px solid #fff;
      border-right: 8px solid #fff;
      position: absolute;
      top: 25px;
      left: 35px;
    }
  </style>
</head>
<body>


<?php


  if (isset($_POST['confirm'])) {

    // Include DB connection

    $r0 = $_SESSION['email'];
    echo $r0;
    $r1 = $_POST['r1']; // fullname
    $r2 = $_POST['r2']; // emailid
    $r3 = $_POST['r3']; // phnumber
    $r4 = $_POST['r4']; // country
    $r5 = $_POST['r5']; // room type
    $r6 = $_POST['r6']; // price
    $r7 = $_POST['r7']; // check-in
    $r8 = $_POST['r8']; // check-out
    $r9 = $_POST['r9']; // bed type
    $r10 = $_POST['r10']; // meal
    $r11 = $_POST['r11']; // no of persons
    $r12 = $_POST['r12']; // identity proof
    $paymentmethod = $_POST['paymentMethod']; // payment

	$_SESSION["price"]=$r6;
    $sql = "INSERT INTO roomsbooking(cemail,fname,emailid,phnumber,country,roomtype,price,cin,cout,bedtype,meal,noofperson,identityproof,paymentmethod)VALUES ('$r0','$r1', '$r2', '$r3', '$r4', '$r5', '$r6', '$r7', '$r8', '$r9', '$r10', '$r11', '$r12', '$paymentmethod')";
   
    
    if (mysqli_query($conn, $sql)) {
	echo "<script>window.location.href = 'mypay.php';</script>";

	
    } else {
      echo "Error: " . mysqli_error($conn);
    }

    mysqli_close($conn);
  }
  ?>

<div class="container d-flex justify-content-center align-items-center" style="min-height: 80vh;">
  <div class="text-center border rounded p-5 shadow" style="max-width: 400px; width: 100%;">
    <h2 class="mb-3">Room Booking Payment</h2>
    <p class="fs-5 mb-4">Amount: <strong>₹<?php echo $_SESSION["price"] ?></strong></p>

    <button class="btn btn-primary w-100 mb-3" onclick="simulatePayment()">Pay Now</button>

    <!-- Fake Payment Processing -->
    <div id="loadingSpinner" class="mt-4 d-none">
      <div class="spinner-border text-info" role="status"></div>
      <p class="mt-2">Processing Payment...</p>
    </div>

    <!-- Success Message -->
    <div id="successMessage" class="d-none mt-5">
      <div class="checkmark-circle mb-3 mx-auto">
        <div class="background"></div>
        <div class="checkmark"></div>
      </div>
      <h4 class="text-success">Payment Successful!</h4>
      <p>Your booking has been confirmed.</p>
    </div>
  </div>
</div>

  <script>
    function simulatePayment() {
      // Show loading spinner
      document.getElementById("loadingSpinner").classList.remove("d-none");

      // Simulate fake payment delay (2.5s)
      setTimeout(function () {
        document.getElementById("loadingSpinner").classList.add("d-none");
        document.getElementById("successMessage").classList.remove("d-none");
      }, 2500);
    }
  </script>
 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>

</body>
</html>
