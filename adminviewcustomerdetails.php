<?php include("db.php"); ?>
<?php include("admintab.php"); ?>
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
      box-shadow: 0 2px 8px rgba(0,0,0,0.05);
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
    <div class="card-header">Customer Details</div>
    <div class="card-body">
      <input type="text" class="form-control search-input" placeholder="Search by Name" onkeyup="filterTable(this, 'regTable')">
      
      <table class="table table-bordered table-hover" id="regTable" style="text-align: center;">
        <thead>
          <tr>
          <th>Customer Id</th>
          <th>Full Name</th>
            <th>Email ID</th>
            <th>Phone num</th>
            <th>Password</th>
            <th>Confirm Password</th>
           
          </tr>
        </thead>
/        <tbody>
          
<?php 

$sql = "SELECT * FROM customer";
$retval = mysqli_query($conn,$sql);
if(mysqli_num_rows($retval)>0){
while($row = mysqli_fetch_assoc($retval)){
?>
  <tr>
  <td width="196" bgcolor="#FFFFFF"><div align="center"><?php echo $row["customerid"]?></div></td>
    <td bgcolor="#FFFFFF"><div align="center"><?php echo $row["fullname"]?> </div></td>
    <td bgcolor="#FFFFFF"><div align="center"><?php echo $row["emailid"]?></div></td>
	<td bgcolor="#FFFFFF"><div align="center"><?php echo $row["phnumber"]?> </div></td>
    <td width="196" bgcolor="#FFFFFF"><div align="center"><?php echo $row["cpassword"]?></div></td>
    <td width="196" bgcolor="#FFFFFF"><div align="center"><?php echo $row["ccpassword"]?></div></td>
   
  </tr>
  <?php
}
}
?> 
       
</tbody>
 </table>
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

</body>
</html>