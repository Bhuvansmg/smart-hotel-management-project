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
<?php
// Fetch staff details
if (isset($_POST['edit'])) {
    $pid = $_POST['p_id'];
    $sql = "SELECT * FROM addstaff WHERE id = '$pid'";
    $retval = mysqli_query($conn, $sql);

    if ($row = mysqli_fetch_assoc($retval)) {
        ?>
   <form action="editstaffdetails.php" method="post">
  <div class="container mt-5">
    <div class="form-container">
    <h2 class="mb-4 text-center">Update/Edit Staff Application Details</h2>
        <!-- Personal Info -->
        <input type="hidden" name="p_id" value="<?php echo $pid; ?>">
        <div class="row mb-3">
          <div class="col-md-6">
            <label for="fullName" class="form-label">Full Name</label>
            <input type="text" name="u1" class="form-control" value="<?php echo $row['fullname'];?>" readonly="true">
          </div>
          <div class="col-md-6">
            <label for="dob" class="form-label">Date of Birth</label>
            <input type="date" name="u2" class="form-control" value="<?php echo $row['dob'];?>" readonly="true">
          </div>
        </div>

        <div class="mb-3">
          <label for="gender" class="form-label">Gender</label>
       
          <select class="form-select" name="u3" disabled>
    <option disabled>Choose...</option>
    <option value="Male" <?php if ($row['gender'] == 'Male') echo 'selected'; ?>  readonly="true">Male</option>
    <option value="Female" <?php if ($row['gender'] == 'Female') echo 'selected'; ?> readonly="true">Female</option>
    <option value="Other" <?php if ($row['gender'] == 'Other') echo 'selected'; ?> readonly="true">Other</option>

  </select>
        
        </div>

        <!-- Contact Info -->
        <div class="row mb-3">
          <div class="col-md-6">
          <label for="phone" class="form-label">Phone Number</label>
          <input type="tel" name="u4" class="form-control" value="<?php echo $row['phnumber']; ?>" required>
          </div>
          <div class="col-md-6">
          <label for="email" class="form-label">Email</label>
          <input type="email" name="u5" class="form-control" value="<?php echo $row['email']; ?>" required>
        </div>

        <div class="mb-3">
        <label for="address" class="form-label">Permanent Address</label>
        <textarea class="form-control" name="u6" rows="2" required><?php echo $row['paddress']; ?></textarea>
        </div>

        <!-- Job Details -->
        <div class="row mb-3">
          <div class="col-md-6">
            <label for="designation" class="form-label">Designation</label>
            <input type="text" name="u7" class="form-control" value="<?php echo $row['designation'];?>" readonly="true">
          </div>
          <div class="col-md-6">
            <label for="department" class="form-label">Department</label>
            <select class="form-select"  name="u8" disabled>
              <option >Select...</option>
              <option value="Housekeeping" <?php if ($row['dept'] == 'Housekeeping') echo 'selected'; ?>  readonly="true">Housekeeping</option>
              <option  value="Kitchen" <?php if ($row['dept'] == 'Kitchen') echo 'selected'; ?>  readonly="true">Kitchen</option>
              <option value="Reception" <?php if ($row['dept'] == 'Reception') echo 'selected'; ?> >Reception</option>
              <option value="Maintenance" <?php if ($row['dept'] == 'Maintenance') echo 'selected'; ?> >Maintenance</option>
              <option value="Security" <?php if ($row['dept'] == 'Security') echo 'selected'; ?> >Security</option>
            </select>
          </div>
        </div>

        <div class="row mb-3">
          <div class="col-md-6">
          <label for="shift" class="form-label">Shift Timing</label>
          <input type="text" name="u9" class="form-control" value="<?php echo $row['shifttime']; ?>" required>
          </div>
          <div class="col-md-6">
            <label for="joiningDate" class="form-label">Date of Joining</label>
            <input type="date"  name="u10" class="form-control" value="<?php echo $row['doj']?>" readonly="true">
          </div>
        </div>
        <div class="row mb-3">
            <div class="col-md-6">
            <label for="shiftDuration" class="form-label">Shift Duration</label>
                            <select class="form-select" name="u11" required>
                                <option value="8 hours" <?php if ($row['shiftduration'] == '8 hours') echo 'selected'; ?>>8 Hours</option>
                                <option value="10 hours" <?php if ($row['shiftduration'] == '10 hours') echo 'selected'; ?>>10 Hours</option>
                                <option value="12 hours" <?php if ($row['shiftduration'] == '12 hours') echo 'selected'; ?>>12 Hours</option>
                            </select>
        </div>
        <div class="col-md-6">
            <label for="shiftType" class="form-label">Shift Type</label>
            <select class="form-select" name="u12"value="<?php echo $row['shifttype']?>" required>
              <option selected disabled>Select shift</option>
              <option value="Day">Day Shift</option>
              <option value="Night">Night Shift</option>
              <option value="Flexible">Flexible</option>
            </select>
          </div>
        </div>

        <!-- Documents -->
        <div class="mb-3">
          <label for="photo" class="form-label">Upload Photo</label><br>
            <img src="Staffimages/<?php echo $row['photo'];?>"  alt="Uploaded photo" width="150px"  readonly="true"><br>
             <input class="form-control"  type="file" name="u13"  disabled>
        </div>
        <div class="mb-3">
          <label for="idProof" class="form-label">Upload ID Proof</label><br>
          <img src="Staffimages/<?php echo $row['idproof'];?>" alt="idproof" width="150px"  readonly="true"><br>
          <input class="form-control"  type="file" name="u14" disabled>
        </div>

        <!-- Extra Notes -->
        <div class="mb-3">
          <label for="notes" class="form-label">Notes / Remarks</label>
        
          <textarea class="form-control" name="u15" readonly="true"><?php echo $row['note']?></textarea>
        </div>

        <button type="submit"  name="update" class="btn btn-success w-100" >Update Staff Details</button>
   
    </div>
  </div>
  </form>
  <?php
          } else {
            echo "<script>alert('Staff not found!');</script>";
            echo "<script>window.location.href = 'viewstaffdetails.php';</script>";
        }

    }
       
    if (isset($_POST["update"])) {
        $pid = $_POST["p_id"];
        $u4 = $_POST["u4"];
        $u5 = $_POST["u5"];
        $u6 = $_POST["u6"];
        $u9 = $_POST["u9"];
        $u11 = $_POST["u11"];
    
        $sql = "UPDATE addstaff 
                SET phnumber = '$u4', 
                    email = '$u5', 
                    paddress = '$u6', 
                    shifttime = '$u9', 
                    shiftduration = '$u11' 
                WHERE id = '$pid'";
    
        if (mysqli_query($conn, $sql)) {
            echo "<script>alert('Staff Details Updated successfully');</script>";
            echo "<script>window.open('staff.php', '_self');</script>";
            exit;
        } else {
            echo "<script>alert('Error updating staff details: " . mysqli_error($conn) . "');</script>";
        }
    }
    ?>
</body>
</html>

