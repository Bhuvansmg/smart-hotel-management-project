<?php include('staffnavbar.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Hotel Staff Dashboard</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background: linear-gradient(120deg, #f8fafc 0%, #e0e7ff 100%);
      min-height: 100vh;
      font-family: 'Poppins', sans-serif;
    }
    .dashboard-card {
      transition: transform 0.2s, box-shadow 0.2s;
    }
    .dashboard-card:hover {
      transform: translateY(-8px) scale(1.03);
      box-shadow: 0 8px 32px rgba(44,62,80,0.15);
    }
    .dashboard-icon {
      font-size: 2.5rem;
      color:orange;
      margin-bottom: 10px;
    }
    .navbar-brand {
      font-weight: bold;
      letter-spacing: 1px;
    }
    .welcome {
      font-size: 1.5rem;
      font-weight: 500;
      color: #374151;
    }
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
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"/>
</head>
<body>

  <!-- <nav class="navbar navbar-expand-lg navbar-dark bg-primary shadow-sm">
    <div class="container">
      <a class="navbar-brand" href="#">Hotel Staff Portal</a>
      <div>
        <span class="navbar-text text-light me-3">Welcome, Staff</span>
        <a href="logout.php" class="btn btn-outline-light btn-sm">Logout</a>
      </div>
    </div>
  </nav> -->

  <div class="container py-5">
    <div class="text-center mb-5">
      <h1 class="fw-bold mb-2">Staff Dashboard</h1>
      <p class="welcome">Manage reservations, rooms, and guest services efficiently.</p>
    </div>
    <div class="row g-4 justify-content-center">
      <div class="col-md-4">
        <a href="reservations.php" class="text-decoration-none">
          <div class="card dashboard-card text-center p-4 shadow-sm h-100">
            <div class="dashboard-icon"><i class="fa-solid fa-calendar-check"></i></div>
            <h5 class="card-title mb-2">Table Reservations</h5>
            <p class="card-text text-muted">View, approve, or manage all table bookings.</p>
          </div>
        </a>
      </div>
      <div class="col-md-4">
        <a href="rooms.php" class="text-decoration-none">
          <div class="card dashboard-card text-center p-4 shadow-sm h-100">
            <div class="dashboard-icon"><i class="fa-solid fa-bed"></i></div>
            <h5 class="card-title mb-2">Room Management</h5>
            <p class="card-text text-muted">Assign, clean, or update room statuses.</p>
          </div>
        </a>
      </div>
      <div class="col-md-4">
        <a href="guests.php" class="text-decoration-none">
          <div class="card dashboard-card text-center p-4 shadow-sm h-100">
            <div class="dashboard-icon"><i class="fa-solid fa-users"></i></div>
            <h5 class="card-title mb-2">Guest Services</h5>
            <p class="card-text text-muted">Check-in/out guests and manage guest requests.</p>
          </div>
        </a>
      </div>
      <div class="col-md-4">
        <a href="payments.php" class="text-decoration-none">
          <div class="card dashboard-card text-center p-4 shadow-sm h-100">
            <div class="dashboard-icon"><i class="fa-solid fa-credit-card"></i></div>
            <h5 class="card-title mb-2">Payments</h5>
            <p class="card-text text-muted">View and manage all payment transactions.</p>
          </div>
        </a>
      </div>
      <div class="col-md-4">
        <a href="reports.php" class="text-decoration-none">
          <div class="card dashboard-card text-center p-4 shadow-sm h-100">
            <div class="dashboard-icon"><i class="fa-solid fa-chart-line"></i></div>
            <h5 class="card-title mb-2">Reports</h5>
            <p class="card-text text-muted">Generate and view daily, weekly, or monthly reports.</p>
          </div>
        </a>
      </div>
      <div class="col-md-4">
        <a href="profile.php" class="text-decoration-none">
          <div class="card dashboard-card text-center p-4 shadow-sm h-100">
            <div class="dashboard-icon"><i class="fa-solid fa-user"></i></div>
            <h5 class="card-title mb-2">My Profile</h5>
            <p class="card-text text-muted">View and update your staff profile details.</p>
          </div>
        </a>
      </div>
    </div>
  </div>
 <?php include('footer.php'); ?>
</body>
</html>