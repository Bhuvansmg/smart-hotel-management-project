<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>



  <link rel="stylesheet" href="bootstrap-5.3.5-dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="customer.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body>
<div class="modal fade" id="orderModal" tabindex="-1" aria-labelledby="orderModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <form action="submit_order.php" method="POST" class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Confirm Your Order</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>
      <div class="modal-body">

        <input type="hidden" name="item" value="<?php echo $row['foodname']; ?>">
        <input type="hidden" name="price" id="modalPrice">
        <input type="hidden" name="quantity" id="modalQuantity">

        <div class="mb-3">
          <label for="table_number" class="form-label">Table Number:</label>
          <input type="number" name="table_number" class="form-control" required>
        </div>

        <div class="mb-3">
          <label class="form-label">Total Price:</label>
          <input type="text" class="form-control" id="modalTotal" readonly>
        </div>

      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-success">Confirm Order</button>
      </div>
    </form>
  </div>
</div>

  <?php include('footer.php'); ?>





      <!-- <div class="modal fade" id="orderModal" tabindex="-1" aria-labelledby="orderModalLabel" aria-hidden="true">
          <div class="modal-dialog">
         
              <div class="modal-header">
                <h5 class="modal-title">Confirm Your Order</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
              </div>
              <div class="modal-body">

                <input type="hidden" name="item" value="<?php echo $row['foodname']; ?>">
                <input type="hidden" name="price" id="modalPrice">
                <input type="hidden" name="quantity" id="modalQuantity">

                <div class="mb-3">
                  <label for="table_number" class="form-label">Table Number:</label>
                  <input type="number" name="table_number" class="form-control" required>
                </div>

                <div class="mb-3">
                  <label class="form-label">Total Price:</label>
                  <input type="text" class="form-control" id="modalTotal" readonly>
                </div>

              </div>
              <div class="modal-footer">
                <input type="submit" name="corder" class="btn btn-success">Confirm Order</input>
              </div>
        
          </div>

        </div>
     -->
<!-- Bootstrap JS & jQuery (required for modal) -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>