<?php include("db.php"); ?>
<?php include("admintab.php"); ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Customer Orders</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

  <style>
    body {
      background-color: #f4f6f9;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }

    .table-container {
      margin: 40px auto;
      max-width: 1000px;
      background: white;
      border-radius: 8px;
      padding: 25px;
      box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
    }

    .table th {
      background-color: #ffc107;
      color: #000;
    }

    .search-box {
      max-width: 300px;
      margin-bottom: 15px;
    }
  </style>
</head>

<body>

  <div class="table-container">
    <h3 class="mb-4">Customer Food Orders</h3>

    <input type="text" id="searchInput" class="form-control search-box" placeholder="Search by name...">

    <table class="table table-bordered table-hover">
      <thead>
        <thead>
          <tr>

            <th width="88">Request Id</th>
            <th width="136">Request Date</th>
            <th width="109">chef Name</th>
            <th width="108">Item Name</th>
            <th width="81">Category</th>
            <th width="110">Quantity</th>
            <th width="71">Priority</th>
            <th width="145">delivery Date</th>
            <th width="206">Note</th>
          </tr>
        </thead>

        <?php
        $sql = "SELECT * FROM shefsupplies";
        $retval = mysqli_query($conn, $sql);
        if (mysqli_num_rows($retval) > 0) {
          while ($row = mysqli_fetch_assoc($retval)) {
        ?>
            <tr>
              <td><?php echo $row["id"] ?></td>
              <td><?php echo $row["requestdate"] ?></td>
              <td><?php echo $row['chefname'] ?></td>
              <td><?php echo $row['itemname'] ?></td>
              <td><?php echo $row['category'] ?></td>
              <td><?php echo $row['quantity'] ?></td>
              <td><?php echo $row['priority'] ?></td>
              <td><?php echo $row['deliverydate'] ?></td>
              <td><?php echo $row['note'] ?></td>

            </tr>
        <?php

          }
        }
        ?>

        </tbody>
    </table>
  </div>

  <script>
    // Search Filter
    document.getElementById('searchInput').addEventListener('keyup', function() {
      const filter = this.value.toLowerCase();
      const rows = document.querySelectorAll('#customerTableBody tr');

      rows.forEach(row => {
        const name = row.cells[1].textContent.toLowerCase();
        row.style.display = name.includes(filter) ? '' : 'none';
      });
    });
  </script>

</body>

</html>