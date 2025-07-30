<?php include("shefnavbar.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Manage Menu Items</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"/>
</head>
<body class="bg-light">

  <div class="container mt-5">
    <h2 class="mb-4 text-center">Manage Menu Items</h2>

    <!-- Add Menu Item Form -->
    <div class="card mb-4">
      <div class="card-header bg-primary text-white">Add New Item</div>
      <div class="card-body">
        <form>
          <div class="row g-3">
            <div class="col-md-4">
              <input type="text" class="form-control" placeholder="Item Name" required>
            </div>
            <div class="col-md-3">
              <input type="text" class="form-control" placeholder="Category (e.g. Starter, Main)">
            </div>
            <div class="col-md-2">
              <input type="number" class="form-control" placeholder="Price" required>
            </div>
            <div class="col-md-3">
              <button class="btn btn-success w-100" type="submit">Add Item</button>
            </div>
          </div>
        </form>
      </div>
    </div>

    <!-- Menu Items Table -->
    <div class="card">
      <div class="card-header bg-secondary text-white">Current Menu</div>
      <div class="card-body">
        <table class="table table-bordered table-hover">
          <thead class="table-light">
            <tr>
              <th>Item Name</th>
              <th>Category</th>
              <th>Price ($)</th>
              <th>Actions</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>Grilled Chicken</td>
              <td>Main</td>
              <td>12.99</td>
              <td>
                <button class="btn btn-sm btn-warning">Edit</button>
                <button class="btn btn-sm btn-danger">Delete</button>
              </td>
            </tr>
            <tr>
              <td>Caesar Salad</td>
              <td>Starter</td>
              <td>6.50</td>
              <td>
                <button class="btn btn-sm btn-warning">Edit</button>
                <button class="btn btn-sm btn-danger">Delete</button>
              </td>
            </tr>
            <!-- Add more rows as needed -->
          </tbody>
        </table>
      </div>
    </div>

  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>