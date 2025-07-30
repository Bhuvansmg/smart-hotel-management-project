
<?php
session_start();
if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST['t8']) && isset($_POST['t2'])) {
    $_SESSION['price'] = $_POST['t8'];
    // $_SESSION['email'] = $_POST['t2'];
}
$price = isset($_SESSION['price']) ? $_SESSION['price'] : 0;
// $email = isset($_SESSION['email']) ? $_SESSION['email'] : '';
// ?>
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
        #paymode {
            margin-left: 40%;
            margin-top: 80px;
        }

        #mybtn {
            margin-left: 120px;
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
    
 <div class="container d-flex justify-content-center align-items-center" style="min-height: 80vh;">
    <div class="text-center border rounded p-5 shadow" style="max-width: 400px;">
      <h2 class="mb-3">Table Booking Payment</h2>
      <p class="fs-5 mb-4">
        Amount: <strong>₹<?php echo $price; ?></strong>
      </p>
      <button class="btn btn-primary w-100 mb-3" onclick="simulatePayment()">Pay Now</button>

      <div id="loadingSpinner" class="mt-4 d-none">
        <div class="spinner-border text-info" role="status"></div>
        <p class="mt-2">Processing Payment...</p>
      </div>

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

 <?php




if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST['t8']) && isset($_POST['t2'])) {
    $_SESSION['price'] = $_POST['t8'];
    // $_SESSION['email'] = $_POST['t2'];

    // Collect all form data
    $r0 = $_SESSION['email'];
    echo $r0;
    $name = $_POST['t1'];
    $email = $_POST['t2'];
    $phone = $_POST['t3'];
    $date = $_POST['t4'];
    $time = $_POST['t5'];
    $ac = $_POST['t6'];
    $seats = $_POST['t7'];
    $price = $_POST['t8'];
    $paymentMethod = $_POST['paymentMethod'];

    // Insert into database
     $sql =("INSERT INTO tablereserv (fullname, emailid, phnumber, reservdate, timeslot, acnonac, numseats, price,cemail) 
    VALUES ('$name','$email','$phone','$date','$time','$ac','$seats','$price','$r0')");
  if (mysqli_query($conn, $sql)) {
	echo "<script>window.location.href = 'tmypay.php';</script>";

	
    } else {
      echo "Error: " . mysqli_error($conn);
    }

    mysqli_close($conn);
  }


$price = isset($_SESSION['price']) ? $_SESSION['price'] : 0;
$email = isset($_SESSION['email']) ? $_SESSION['email'] : '';
?>

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