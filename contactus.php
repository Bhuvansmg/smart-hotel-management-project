<?php
// Start the session
session_start();
?>
<?php include("db.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Contact Us</title>
  <link rel="stylesheet" href="contact.css">

  <link rel="stylesheet" href="bootstrap-5.3.5-dist/css/bootstrap.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />
<style>
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
     font-weight: 400;
     margin: 0;
    }
    </style>
</head>
<body>

  <?php include("bcnavbar.php"); ?>

  <div class="container-fluid px-0">

    <!-- Rest of your contact page content -->
    <div class="section-title">
      <h2>CONTACT</h2>
      <span>Contact Us For Any Query</span>
  </div>




    <!-- <section class="hero-section">
    <div>
        <h1>Contact</h1>
        <span>Contact Us For Any Query</span>
    </div>
   </section> -->
    <div class="contact-info">
      <div>
        <h4>BOOKING</h4>
        <p>book@example.com</p>
      </div>
      <div>
        <h4>GENERAL</h4>
        <p>info@example.com</p>
      </div>
      <div>
        <h4>TECHNICAL</h4>
        <p>tech@example.com</p>
      </div>
    </div>

    <form class="contact-form" method="post" action="">
      <input type="text" name="c1" placeholder="Your Name" required>
      <input type="email"  name="c2"  placeholder="Your Email" required>
      <input type="text"  name="c3" placeholder="Subject"  required>
      <textarea   name="c4"  placeholder="Message" required></textarea><br>
      <button  name="msg" type="submit">SEND MESSAGE</button>
    </form>

    <div class="map">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d193571.4382958984!2d-74.11808686025612!3d40.70582538407505!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c250b080a16455%3A0x8d7454e9b593c2e3!2sNew%20York!5e0!3m2!1sen!2sin!4v1683724851067!5m2!1sen!2sin" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
    </div>
  </div>
  <br>  <br>  <br>


    <?php include('footer.php'); ?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-QF1QI9j8fW/8zQ4U5e6FJ5Q8j5p6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q/>
<?php 
if(isset($_POST['msg'])){
  $c1 = $_POST["c1"];
  $c2 = $_POST["c2"];
  $c3 = $_POST["c3"];
  $c4 = $_POST["c4"];
  $c5 =  $_SESSION['email'];
  $sql = "INSERT INTO contactus(cname,emailid,sub,msg,cemail)VALUES ('$c1','$c2','$c3','$c4','$c5')";
  $retval = mysqli_query($conn, $sql);

  if(mysqli_num_rows($retval) > 0){
    $_SESSION['email'] = $em;
    echo '<script>
      alert("Contact Success");
    </script>';
  } else {
    echo '<script>
      alert("Contact Failed");
    </script>';
  }
}
?>
</body>

</html>