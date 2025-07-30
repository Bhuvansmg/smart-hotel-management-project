<?php include("staffnavbar.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Staff Profile - Abhishek S L</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background-color: #f8f9fa;
    }
    .sidebar {
      height: 100vh;
      background-color: #e9ecef;
      padding: 20px;
    }
    .sidebar a {
      display: block;
      padding: 10px 15px;
      margin-bottom: 10px;
      color: #343a40;
      text-decoration: none;
      border-radius: 5px;
      transition: background 0.3s;
    }
    .sidebar a:hover {
      background-color: #dee2e6;
    }
    .topbar {
      background-color: #ffffff;
      padding: 15px 25px;
      box-shadow: 0 2px 4px rgba(0,0,0,0.05);
    }
    .profile-box {
      background-color: #ffffff;
      padding: 30px;
      margin: 20px;
      border-radius: 10px;
      box-shadow: 0 2px 8px rgba(0,0,0,0.1);
    }
    .profile-img {
      width: 180px;
      height: 180px;
      border-radius: 50%;
      object-fit: cover;
    }
  </style>
</head>
<body>

<div class="container-fluid">
  <div class="row">
    <!-- Sidebar -->
    <div class="col-md-2 sidebar">
      <h4 class="mb-4">Staff Panel</h4>
      <a href="#">Dashboard</a>
      <a href="#">My Profile</a>
      <a href="#">Tasks</a>
      <a href="#">Logout</a>
    </div>

    <!-- Main Content -->
    <div class="col-md-10">
      <!-- Topbar -->
      <div class="topbar d-flex justify-content-between align-items-center">
        <h5 class="mb-0">Welcome, Abhishek S L</h5>
        <span>Staff Panel</span>
      </div>

      <!-- Profile Section -->
      <div class="profile-box d-flex justify-content-between align-items-center flex-wrap">
        <!-- Staff Details -->
        <div class="profile-info">
          <h3>Rithvik M</h3>
          <p><strong>Position:</strong> Senior Manager</p>
          <p><strong>Email:</strong> rithvik@example.com</p>
          <p><strong>Phone:</strong> +91-9876543210</p>
          <p><strong>Address:</strong> Bangalore, India</p>
          <p><strong>Join Date:</strong> 01-Jan-2024</p>
        </div>

        <!-- Profile Photo -->
        <div>
          <img src="staffimg.jpeg" alt="Profile" class="profile-img">
        </div>
      </div>
    </div>
  </div>
</div>

</body>
</html>