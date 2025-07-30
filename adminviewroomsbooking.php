<?php include("db.php"); ?>
<?php include("admintab.php"); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Admin Dashboard - Customer Info</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        table{
            text-align: center;
            max-width:100%;
           
        }
    
       
        body {
            background-color: #eef1f7;
            font-family: 'Segoe UI', sans-serif;
        }

        .container {
            margin-top: 40px;
        }

        .card {
            border-radius: 8px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.05);
            margin-bottom: 30px;
        }

        .card-header {
            background-color: #ffc107;
            color: black;
            font-weight: bold;
        }

        .search-input {
            max-width: 300px;
            margin-bottom: 10px;
        }
    </style>
</head>

<body>

    <div class="container">
        <!-- Customer Registration Table -->
        <div class="card">
            <div class="card-header">Room Bookings</div>
            <div class="card-body">
                <input type="text" class="form-control search-input" placeholder="Search by Name" onKeyUp="filterTable(this, 'regTable')">

                <table width="103%" class="table table-bordered table-hover" id="regTable" style="text-align: center; width: 100%;">
                    <thead>
                        <tr>
                            <th>Full Name</th>
                            <th width="80">Email</th>
                            <th width="53">Phone num</th>
                            <th width="61">Room Type</th>
                            <th width="98">Price</th>
                            <th>Check  In</th>
                            <th>Check  Out</th>
                            <th>Meals</th>
                            <th>ID proof</th>
                            <th>Payment</th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php
         

                        $sql = "SELECT * FROM roomsbooking";
                        $retval = mysqli_query($conn, $sql);
                        if (mysqli_num_rows($retval) > 0) {
                            while ($row = mysqli_fetch_assoc($retval)) {
                        ?>
                                <tr>
                                    <td width="214" bgcolor="#FFFFFF">
                                        <div align="center"><?php echo $row["fname"] ?></div>
                                  </td>
                                    <td bgcolor="#FFFFFF">
                                        <div align="center"><?php echo $row["emailid"] ?> </div>
                                    </td>
                                    <td bgcolor="#FFFFFF">
                                        <div align="center"><?php echo $row["phnumber"] ?> </div>
                                    </td>
                                    <td bgcolor="#FFFFFF">
                                        <div align="center"><?php echo $row["roomtype"] ?> </div>
                                    </td>
                                    <td bgcolor="#FFFFFF">
                                        <div align="center"><?php echo $row["price"] ?></div>
                                    </td>
                                    <td bgcolor="#FFFFFF" width="150">
                                        <div align="center"><?php echo $row["cin"] ?> </div>
                                  </td>
                                    <td width="158" bgcolor="#FFFFFF">
                                        <div align="center"><?php echo $row["cout"] ?></div>
                                  </td>
                                    <td width="138" bgcolor="#FFFFFF">
                                        <div align="center"><?php echo $row["meal"] ?></div>
                                  </td>
                                    <td width="155" bgcolor="#FFFFFF">
                                        <div align="center"><?php echo $row["identityproof"] ?></div>
                                  </td>
                                    <td width="166" bgcolor="#FFFFFF">
                                        <div align="center"><?php echo $row["paymentmethod"] ?></div>
                                  </td>

                                </tr>
                        <?php
                            }
                        }
                        ?>

                    </tbody>
              </table>
            </div>
        </div>
    </div>
</body>
</html>