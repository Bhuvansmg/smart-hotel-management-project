<?php include("db.php"); ?>
<?php include("admintab.php"); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Staff Details</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    
<?php
if(isset($_POST['id'])) {
    $id = $_POST['id']; // Get the staff ID from the POST request
    $sql = "SELECT * FROM addstaff WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $id);
    $stmt->execute();
    $result = $stmt->get_result();
if($row = $result->fetch_assoc()) {
        ?>
            <div class="container py-5">
                <div class="row justify-content-center">
                    <div class="col-md-10">
                        <div class="card shadow-sm p-4" style="min-height: 600px;"> <!-- Increased height -->
                            <div class="row">
                                <!-- Image Section -->
                                <div class="col-md-4">
                                    
                                <img src="Staffimages/<?php echo $row['photo']; ?>" alt="Staff Image" class="img-fluid rounded" style="max-height: 300px; object-fit: cover;">
                                <br> <br>    
                               
                                    <h5> <?php echo $row['designation']; ?></h5>
                                </div>

                                <!-- Details Section -->
                                <div class="col-md-8">
                                    <h2 class="mb-4" style="font-size: 2rem;"><?php echo $row['fullname']; ?></h2>
                                    <div class="row mb-3">
                                        <div class="col-md-4"><strong style="font-size: 1.2rem;">Date of Birth:</strong></div>
                                        <div class="col-md-8" style="font-size: 1.2rem;"><?php echo $row['dob']; ?></div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-md-4"><strong style="font-size: 1.2rem;">Gender:</strong></div>
                                        <div class="col-md-8" style="font-size: 1.2rem;"><?php echo $row['gender']; ?></div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-md-4"><strong style="font-size: 1.2rem;">Phone:</strong></div>
                                        <div class="col-md-8" style="font-size: 1.2rem;">📞 +91 <?php echo $row['phnumber']; ?></div>
                                    </div>
                                    <div class="row mb-3"> 
                                        <div class="col-md-4"><strong style="font-size: 1.2rem;">Email:</strong></div>
                                        <div class="col-md-8" style="font-size: 1.2rem;">📧<?php echo $row['email']; ?></div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-md-4"><strong style="font-size: 1.2rem;">Address:</strong></div>
                                        <div class="col-md-8" style="font-size: 1.2rem;"><?php echo $row['paddress']; ?></div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-md-4"><strong style="font-size: 1.2rem;">Designation:</strong></div>
                                        <div class="col-md-8" style="font-size: 1.2rem;"><?php echo $row['designation']; ?></div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-md-4"><strong style="font-size: 1.2rem;">Department:</strong></div>
                                        <div class="col-md-8" style="font-size: 1.2rem;"><?php echo $row['dept']; ?></div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-md-4"><strong style="font-size: 1.2rem;">Shift Time:</strong></div>
                                        <div class="col-md-8" style="font-size: 1.2rem;"><?php echo $row['shifttime']; ?></div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-md-4"><strong style="font-size: 1.2rem;">Date of Joining:</strong></div>
                                        <div class="col-md-8" style="font-size: 1.2rem;"><?php echo $row['doj']; ?></div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-md-4"><strong style="font-size: 1.2rem;">Shift Duration:</strong></div>
                                        <div class="col-md-8" style="font-size: 1.2rem;"><?php echo $row['shiftduration']; ?></div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-md-4"><strong style="font-size: 1.2rem;">Note:</strong></div>
                                        <div class="col-md-8" style="font-size: 1.2rem;"><?php echo $row['note']; ?></div>
                                    </div>
                                    <div class="text-center mt-4">
                                      
                                            
                                        <div class="btn-group" role="group">
                                
                                     
                                            <a href="staff.php" class="btn btn-secondary me-4">Back to Directory</a>

                                            <form action="editstaffdetails.php" method="post">  
                                            <input name="p_id" type="hidden" value="<?php echo $row['id'] ?>"/>
                                            <button  type="submit" name="edit" class="btn btn-primary me-4">Edit</button>
                                            
                                            <button class="btn btn-danger me-4" onclick="return confirm('Are you sure you want to delete this staff member?');">Delete</button>
                                        </form>
                                        </div>
                                       
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

    <?php
        } else {
            echo "No details found.";
        }
    }

    ?> 
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>