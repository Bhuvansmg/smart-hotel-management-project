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
    <title>Order Summary & Payment</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-color: #fdf6f0;
            font-family: 'Segoe UI', sans-serif;
        }

        .summary-card {
            background:rgb(240, 215, 187);
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            margin-top: 50px;
        }

        h4 {
            color: #e67e22;
            font-weight: bold;
        }

        .table thead {
            background-color: #f9e4d4;
        }

        .table thead th {
            color: #d35400;
        }

        .grand-total-row td {
            font-weight: bold;
            background-color: #fdebd0;
            color: #d35400;
        }

        .btn-orange {
            background-color: #e67e22;
            color: white;
            border: none;
        }

        .btn-orange:hover {
            background-color: #ca6f1e;
        }

        .payment-options label {
            margin-right: 20px;
            font-weight: 500;
        }
        /* footer style */
    #last{

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

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="summary-card">
                    <h4 class="text-center mb-4">Order Summary</h4>
                    <table class="table text-center">
                        <thead>
                            <tr>
                                <th>Food Item</th>
                                <th>Qty</th>
                                <th>Table Number</th>
                                <th>Price</th>

                            </tr>
                        </thead>
                        <tbody>
                            <?php
                              $c = $_SESSION['email'];
                            // $tablenum = $_GET['tablenum']; // securely fetch the customer's table number

                            // Fetch individual orders
                            $sql = "SELECT foodname, quantity, tablenum, foodprice FROM custfoodorder WHERE cemail = '$c'";
                            $retval = mysqli_query($conn, $sql);

                            // Fetch grand total for that specific customer
                            $totalResult = mysqli_query($conn, "SELECT SUM(foodprice) AS grandtotal FROM custfoodorder WHERE cemail = '$c'");
                            $grandTotal = 0;
                            if ($totalRow = mysqli_fetch_assoc($totalResult)) {
                                $grandTotal = $totalRow['grandtotal'];
                            }

                            if ($retval && mysqli_num_rows($retval) > 0) {
                                while ($row = mysqli_fetch_assoc($retval)) {
                            ?>
                                    <tr>
                                        <td><?php echo $row["foodname"]; ?></td>
                                        <td><?php echo $row["quantity"]; ?></td>
                                        <td><?php echo $row["tablenum"]; ?></td>
                                        <td><?php echo $row["foodprice"]; ?></td>
                                    </tr>
                            <?php
                                }
                            }
                            ?>
                            <tr>
                                <td colspan="3" style="text-align: right;"><strong>Grand Total:</strong></td>
                                <td><strong>₹<?php echo number_format($grandTotal, 2); ?></strong></td>
                            </tr>


                        </tbody>
                    </table>

                    <div class="mt-4">
                        <h5 class="mb-3 text-warning">Select Payment Method</h5>
                        <div class="form-group payment-options">
                            <label><input type="radio" name="payment" checked> UPI</label>
                            <label><input type="radio" name="payment"> Credit / Debit Card</label>
                            <label><input type="radio" name="payment"> Cash</label>
                            <label><input type="radio" name="payment"> Net Banking</label>
                            <img  src="cimages/myQR.jpg" style="width:200px; height:150px"/>
                        </div>
                    </div>

                    <div class="text-center mt-4">
                        <a href="food-menu.php" class="btn btn-secondary mr-2">Back to Menu</a>
                        <button class="btn btn-orange">Confirm & Pay</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br> <br> <br> <br> <br> <br> <br> <br>
    <?php include("footer.php"); ?>
</body>

</html>