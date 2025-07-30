<?php include("db.php"); ?>
<?php include("admintab.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Hotel Staff Application Form</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
  <link rel="stylesheet" href="admin.css">
  <style>
    body {
      background-color: #f8f9fa;
    }
    .form-container {
      max-width: 800px;
      margin: auto;
      padding: 40px;
      background: white;
      border-radius: 10px;
      box-shadow: 0 0 20px rgba(0,0,0,0.1);
    }
  </style>
</head>
<body>

  <div class="container mt-5">
    <div class="form-container">
      <h2 class="mb-4 text-center">New Staff Application Form</h2>
      <form action="" method="POST">
        <!-- Personal Info -->
        <div class="row mb-3">
          <div class="col-md-6">
            <label for="fullName" class="form-label">Full Name</label>
            <input type="text" name="s1" class="form-control" id="fullName" placeholder="Enter full name" required>
          </div>
          <div class="col-md-6">
            <label for="dob" class="form-label">Date of Birth</label>
            <input type="date" name="s2" class="form-control" id="dob" required>
          </div>
        </div>

        <div class="mb-3">
          <label for="gender" class="form-label">Gender</label>
          <select class="form-select" name="s3" id="gender" required>
            <option selected disabled>Choose...</option>
            <option>Male</option>
            <option>Female</option>
            <option>Other</option>
          </select>
        </div>

        <!-- Contact Info -->
        <div class="row mb-3">
          <div class="col-md-6">
            <label for="phone" class="form-label">Phone Number</label>
            <input type="tel" name="s4" class="form-control" placeholder="+91..." required>
          </div>
          <div class="col-md-6">
            <label for="email" class="form-label">Email (optional)</label>
            <input type="email" name="s5" class="form-control" id="email" placeholder="example@email.com">
          </div>
        </div>

        <div class="mb-3">
          <label for="address" class="form-label">Permanent Address</label>
          <textarea class="form-control"  name="s6" id="address" rows="2" required></textarea>
        </div>

        <!-- Job Details -->
        <div class="row mb-3">
          <div class="col-md-6">
            <label for="designation" class="form-label">Designation</label>
            <input type="text" name="s7" class="form-control" id="designation" placeholder="e.g., Cleaner, Chef" required>
          </div>
          <div class="col-md-6">
            <label for="department" class="form-label">Department</label>
            <select class="form-select"  name="s8" id="department" required>
              <option selected disabled>Select...</option>
              <option>Housekeeping</option>
              <option>Kitchen</option>
              <option>Reception</option>
              <option>Maintenance</option>
              <option>Security</option>
            </select>
          </div>
        </div>

        <div class="row mb-3">
          <div class="col-md-6">
            <label for="shift" class="form-label">Shift Timing</label>
            <input type="text"  name="s9" class="form-control" id="shift" placeholder="e.g., 3 AM – 11 AM" required>
          </div>
          <div class="col-md-6">
            <label for="joiningDate" class="form-label">Date of Joining</label>
            <input type="date"  name="s10" class="form-control" id="joiningDate" required>
          </div>
        </div>
        <div class="row mb-3">
            <div class="col-md-6">
              <label for="shiftTime" class="form-label">Shift Duration</label>
              <select class="form-select" name="s11" id="shiftTime" required>
                <option selected disabled>Select duration</option>
                <option value="8 hours">8 Hours</option>
                <option value="10 hours">10 Hours</option>
                <option value="12 hours">12 Hours</option>
              </select>
        </div>
        <div class="col-md-6">
            <label for="shiftType" class="form-label">Shift Type</label>
            <select class="form-select" name="s12" id="shiftType" required>
              <option selected disabled>Select shift</option>
              <option value="Day">Day Shift</option>
              <option value="Night">Night Shift</option>
              <option value="Flexible">Flexible</option>
            </select>
          </div>
        </div>

        <!-- Documents -->
        <div class="mb-3">
          <label for="photo" class="form-label">Upload Photo</label>
          <input class="form-control" type="file" name="s13" required>
        </div>
        <div class="mb-3">
          <label for="idProof" class="form-label">Upload ID Proof</label>
          <input class="form-control"  type="file" name="s14" required>
        </div>

        <!-- Extra Notes -->
        <div class="mb-3">
          <label for="notes" class="form-label">Notes / Remarks</label>
          <textarea class="form-control" name="s15" id="notes"></textarea>
        </div>

        <button type="submit"  name="Submit1" class="btn btn-success w-100" >Submit Application</button>
      </form>
    </div>
  </div>

<?php 
if (isset($_POST['Submit1'])) {
    $s1=$_POST["s1"];
    $s2=$_POST["s2"];
    $s3=$_POST["s3"];
    $s4=$_POST["s4"];
    $s5=$_POST["s5"];
    $s6=$_POST["s6"];
    $s7=$_POST["s7"];
    $s8=$_POST["s8"];
    $s9=$_POST["s9"];
    $s10=$_POST["s10"];
    $s11=$_POST["s11"];
    $s12=$_POST["s12"];
    $s13=$_POST["s13"];
    $s14=$_POST["s14"];
    $s15=$_POST["s15"];

    // Handle file uploads
    // $uploadDir = "imgstaff/";
    // $photoPath = $uploadDir . basename($_FILES["photo"]["name"]);
    // $idProofPath = $uploadDir . basename($_FILES["idproof"]["name"]);

    //if (move_uploaded_file($_FILES["photo"]["tmp_name"], $photoPath) && move_uploaded_file($_FILES["idproof"]["tmp_name"], $idProofPath)) {
        $sql = "INSERT INTO addstaff(fullname,dob,gender,phnumber,email,paddress,designation,dept,shifttime,doj,shiftduration,shifttype,photo,idproof,note)
                VALUES ('$s1','$s2','$s3','$s4','$s5','$s6','$s7','$s8','$s9','$s10','$s11','$s12','$s13','$s14','$s15')";

        if (mysqli_query($conn, $sql)){
     ?>     
     <script>alert("Product added successfully");</script>
         
<?php 
}else{
echo "Could not insert record:".mysqli_error($conn);
}
}

?>


   

 
</body>
</html>