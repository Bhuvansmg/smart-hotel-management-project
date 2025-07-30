 <?php
// Start the session
session_start();
?>
<?php include('db.php'); ?>
<?php include("bcnavbar.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Login - Paradise Hotel</title>

  <!-- Poppins Font -->
  <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet" />
  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" />
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />

  <style>
    body {
      font-family: 'Poppins', sans-serif;
      background: linear-gradient(to right, rgb(221, 216, 205), rgb(225, 188, 184));
      min-height: 100vh;
    }

    .login-wrapper {
      display: flex;
      justify-content: center;
      align-items: center;
      padding: 60px 15px;
    }

    .login-container {
      background-color: #ffffff;
      padding: 40px;
      border-radius: 15px;
      box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
      width: 100%;
      max-width: 400px;
    }

    .login-container h2 {
      text-align: center;
      margin-bottom: 30px;
      color: #ff6f61;
    }

    .form-control {
      border-radius: 10px;
      padding: 10px;
    }

    .btn-login {
      background-color: #ff6f61;
      color: white;
      border: none;
      border-radius: 10px;
      padding: 10px 20px;
      width: 100%;
      transition: background-color 0.3s ease, transform 0.3s ease;
    }

    .btn-login:hover {
      background-color: #ffb10a;
      transform: scale(1.05);
    }

    .forgot-password,
    .register-link {
      text-align: center;
      margin-top: 15px;
    }

    .forgot-password a,
    .register-link a {
      color: #ff6f61;
      text-decoration: none;
      font-weight: bold;
      transition: color 0.3s ease;
    }

    .forgot-password a:hover,
    .register-link a:hover {
      color: #ffb10a;
    }
    /* footer style */
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
     font-weight: 300;
     margin: 0;
    }
  </style>

</head>
<body>

  <!-- Centered Login Form -->
  <div class="login-wrapper">
    <div class="login-container">
      <h2>Login</h2>
      <form action="" method="POST">
        <div class="mb-3">
          <label for="email" class="form-label">Email Address</label>
          <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email" required />
        </div>
        <div class="mb-3">
          <label for="password" class="form-label">Password</label>
          <input type="password" class="form-control" id="password" name="password" placeholder="Enter your password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[\W_]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required />
        </div>
        <button type="submit" name="Login" class="btn btn-login">Login</button>
      </form>
      <div class="forgot-password">
        <a href="#">Forgot Password?</a>
      </div>
      <div class="register-link">
        <form action="register.php" method="post">
        <p>Don't have an account? <a href="register.php">Register Here</a></p>
        </form>
      </div>
    </div>
  </div>



<br><br><br><br><br><br><br><br>
   <?php include('footer.php'); ?>


 
<?php 
if(isset($_POST['Login'])){
  $em = $_POST["email"];
  $pw = $_POST["password"];
  $sql = "SELECT * FROM customer WHERE emailid = '$em' AND cpassword = '$pw'";
  $retval = mysqli_query($conn, $sql);

  if(mysqli_num_rows($retval) > 0){
    $_SESSION['email'] = $em;
    echo '<script>
      alert("Login Success");
      window.open("home.php", "_self");
    </script>';
  } else {
    echo '<script>
      alert("Login Failed");
    </script>';
  }
}
?>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>
</body>
</html>
