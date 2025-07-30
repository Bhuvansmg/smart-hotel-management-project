<?php
// Start the session
session_start();
?>

<?php include("db.php"); ?>
<?php include("customernavbar.php"); ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Admin Dashboard - Customer Info</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
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

    /* footer style*/
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
     
  </style>
</head>

<body>

  <div class="container">
    <!-- Customer Registration Table -->
    <div class="card">
      <div class="card-header">My Room Bookings</div>
      <div class="card-body">
        <!-- <input type="text" class="form-control search-input" placeholder="Search by Name" onkeyup="filterTable(this, 'regTable')"> -->

        <table class="table table-bordered table-hover" id="regTable" style="text-align: center;">
          <thead>
            <tr>
              <th> Room Type</th>
              <th>Bed type</th>
              <th>Check In</th>
              <th>Check Out</th>
              <th>Meal</th>
              <th>Number of Person</th>
              <th>Price</th>


            </tr>
          </thead>
          <tbody>

            <?php




            $c = $_SESSION['email'];
            // Then continue with your query using $cb


            $sql = "SELECT * FROM roomsbooking  WHERE emailid = '$c'";
            $retval = mysqli_query($conn, $sql);
            if (mysqli_num_rows($retval) > 0) {

              while ($row = mysqli_fetch_assoc($retval)) {
            ?>
                <tr>
                  <td width="196" bgcolor="#FFFFFF">
                    <div align="center"><?php echo $row["roomtype"] ?></div>
                  </td>
                  <td bgcolor="#FFFFFF">
                    <div align="center"><?php echo $row["bedtype"] ?> </div>
                  </td>
                  <td bgcolor="#FFFFFF">
                    <div align="center"><?php echo $row["cin"] ?></div>
                  </td>
                  <td bgcolor="#FFFFFF">
                    <div align="center"><?php echo $row["cout"] ?> </div>
                  </td>
                  <td width="196" bgcolor="#FFFFFF">
                    <div align="center"><?php echo $row["meal"] ?></div>
                  </td>
                  <td width="196" bgcolor="#FFFFFF">
                    <div align="center"><?php echo $row["noofperson"] ?></div>
                  </td>
                  <td width="196" bgcolor="#FFFFFF">
                    <div align="center"><?php echo $row["price"] ?></div>
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

  <!-- <script>
  function filterTable(input, tableId) {
    const filter = input.value.toLowerCase();
    const rows = document.querySelectorAll(#${tableId} tbodtr);
    rows.forEach(row => {
      const text = row.textContent.toLowerCase();
      row.style.display = text.includes(filter) ? '' : 'none';
    });
  }
</script> -->


  <div class="container">
    <!-- Customer Registration Table -->
    <div class="card">
      <div class="card-header">My Table Bookings</div>
      <div class="card-body">
        <!-- <input type="text" class="form-control search-input" placeholder="Search by Name" onkeyup="filterTable(this, 'regTable')"> -->

        <table class="table table-bordered table-hover" id="regTable" style="text-align: center;">
          <thead>
            <tr>
              <th> Name</th>
              <th>Reserve Date</th>
              <th>Time Slot</th>
              <th>Ac/non-AC</th>

              <th>Number of Person</th>
              <th>Price</th>


            </tr>
          </thead>


          <?php

          $d = $_SESSION['email'];

          // Then continue with your query using $cb


          $sql = "SELECT * FROM tablereserv WHERE cemail = '$d'";
          $retval = mysqli_query($conn, $sql);
          if (mysqli_num_rows($retval) > 0) {

            while ($row = mysqli_fetch_assoc($retval)) {
          ?>
              <tr>
                <td width="196" bgcolor="#FFFFFF">
                  <div align="center"><?php echo $row["fullname"] ?></div>
                </td>
                <td bgcolor="#FFFFFF">
                  <div align="center"><?php echo $row["reservdate"] ?> </div>
                </td>
                <td bgcolor="#FFFFFF">
                  <div align="center"><?php echo $row["timeslot"] ?></div>
                </td>
                <td bgcolor="#FFFFFF">
                  <div align="center"><?php echo $row["acnonac"] ?> </div>
                </td>
                <td width="196" bgcolor="#FFFFFF">
                  <div align="center"><?php echo $row["numseats"] ?></div>
                </td>
                <td width="196" bgcolor="#FFFFFF">
                  <div align="center"><?php echo $row["price"] ?></div>
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
    <br><br><br>

    <br><br><br><br><br><br><br><br><br>
  </div>
  <?php include('footer.php'); ?>
</body>

</html>