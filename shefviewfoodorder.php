<?php include("db.php"); ?>
<?php include("shefnavbar.php"); ?>
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
        <h3 class="mb-4">Manage Menu Items</h3>

        <input type="text" id="searchInput" class="form-control search-box" placeholder="Search by name...">

        <table class="table table-bordered table-hover">
            <thead>
                <tr>

                    <th width="88">Food Name</th>
                    <th width="67">Quantity</th>
                    <th width="109">Table Number</th>
                    <th width="82">Price</th>
                    <th width="82">Food Status</th>


                    <?php
                    $sql = "SELECT * FROM custfoodorder";
                    $retval = mysqli_query($conn, $sql);
                    if (mysqli_num_rows($retval) > 0) {
                        while ($row = mysqli_fetch_assoc($retval)) {
                    ?>
                <tr>
                    <td><?php echo $row["foodname"] ?></td>
                    <td><?php echo $row['quantity'] ?></td>
                    <td><?php echo $row['tablenum'] ?></td>
                    <td>₹<?php echo $row['foodprice'] ?></td>
                    <td bgcolor="#FFFFFF">
                        <form id="form1" name="form1" method="post" action="">
                            <select name="sts">
                                <option>Prep</option>
                                <option>Cooking</option>
                                <option>Firing</option>
                                <option>Ready</option>
                          
                            </select>

                            <input type="hidden" value="" name="" />
                            <input type="submit" value="" name="" />
                        </form>
                    </td>
                </tr>
        <?php

                        }
                    }
        ?>

        </tbody>
        </table>
    </div>

<br> <br> <br>
  <?php include("footer.php"); ?>

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