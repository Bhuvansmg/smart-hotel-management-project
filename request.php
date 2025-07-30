<?php include("db.php"); ?>
<?php include("shefnavbar.php"); ?>
<!DOCTYPE html><html lang="en">   
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Chef Request Supplies</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
  
    .form-section {
      margin-bottom: 30px;
    }
    .container{
        margin-top:10px;
    }
  </style>
</head>
<body>
  <div class="container">
    <h2 class="mb-4">Request Kitchen Supplies</h2><!-- Request Form -->
<form method="post" action="" id="supplyForm">
  <div class="row form-section">
    <div class="col-md-6">
      <label for="requestDate" class="form-label">Date of Request</label>
      <input type="date" class="form-control" id="requestDate" name="r1" required>
    </div>
    <div class="col-md-6">
      <label for="chefName" class="form-label">Requested By</label>
      <input type="text" class="form-control"   name="r2" id="chefName" placeholder="Chef Name" required>
    </div>
  </div>

  <div class="row form-section">
    <div class="col-md-4">
      <label for="itemName" class="form-label">Item Name</label>
      <input type="text" class="form-control"  name="r3" id="itemName" required>
    </div>
    <div class="col-md-4">
      <label for="category" class="form-label">Category</label>
      <select class="form-select"  name="r4" id="category" required>
        <option selected disabled>Select Category</option>
        <option>Vegetables</option>
        <option>Meat</option>
        <option>Spices</option>
        <option>Utensils</option>
        <option>Dairy</option>
      </select>
    </div>
    <div class="col-md-4">
      <label for="quantity" class="form-label">Quantity</label>
      <input type="text" class="form-control" name="r5" id="quantity" placeholder="e.g. 5 kg" required>
    </div>
  </div>

  <div class="row form-section">
    <div class="col-md-6">
      <label for="priority" class="form-label">Priority</label>
      <select class="form-select"  name="r6" id="priority" required>
        <option selected disabled>Select Priority</option>
        <option>Low</option>
        <option>Medium</option>
        <option>High</option>
      </select>
    </div>
    <div class="col-md-6">
      <label for="deliveryDate" class="form-label">Expected Delivery Date</label>
      <input type="date" class="form-control"  name="r7"  id="deliveryDate" required>
    </div>
  </div>

  <div class="form-section">
    <label for="notes" class="form-label">Additional Notes</label>
    <textarea class="form-control"  name="r8" id="notes" rows="3"></textarea>
  </div>

  <input type="submit" name="submit" value="Submit Request" class="btn btn-primary"></input>
  <input type="reset" value="Clear Form" class="btn btn-secondary"></input>
</form>

<!-- Toast Alert -->
<div class="toast-container position-fixed bottom-0 end-0 p-3">
  <div id="successToast" class="toast align-items-center text-bg-success border-0" role="alert">
    <div class="d-flex">
      <div class="toast-body">Request submitted successfully!</div>
      <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
    </div>
  </div>
</div>

  </div>  

  <br> <br> <br>
  <?php include("footer.php"); ?>
  <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script> 
   <script>
    document.getElementById('supplyForm').addEventListener('submit', function(event) {
      event.preventDefault();
      const toast = new bootstrap.Toast(document.getElementById('successToast'));
      toast.show();
      this.reset();
    });
  </script> -->
  

  <?php
  if (isset($_POST['submit'])) {

    // Include DB connection


    $r1 = $_POST['r1']; 
    $r2 = $_POST['r2']; // emailid
    $r3 = $_POST['r3']; // phnumber
    $r4 = $_POST['r4']; // country
    $r5 = $_POST['r5']; // room type
    $r6 = $_POST['r6']; // price
    $r7 = $_POST['r7']; // check-in
    $r8 = $_POST['r8']; // check-out
   

    $sql = "INSERT INTO shefsupplies(requestdate,chefname,itemname,category,quantity,priority,deliverydate,note)VALUES ('$r1', '$r2', '$r3', '$r4', '$r5', '$r6', '$r7', '$r8')";

    if (mysqli_query($conn, $sql)) {
      echo "<script>alert('Request Kitchen Supplies Successfully');</script>";
    } else {
      echo "Error: " . mysqli_error($conn);
    }

    mysqli_close($conn);
  }
  ?>

</body>
</html>