<!-- filepath: c:\xampp\htdocs\hotelprj\stafffolder\staff_dashboard.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Staff Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
    <link rel="stylesheet" href="staff.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
        }
        .card {
            transition: transform 0.3s ease;
        }
        .card:hover {
            transform: scale(1.05);
        }
        .navbar-brand {
            font-weight: bold;
        }
        .nav-link {
            font-size: 1.1rem;
        }
        .text-danger {
            font-weight: bold;
        }
    </style>
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg bg-body-tertiary shadow-sm mb-5">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Hotel Staff Panel</a>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item mx-4">
                    <a class="nav-link" href="#tasks">My Tasks</a>
                </li>
                <li class="nav-item mx-4">
                    <a class="nav-link" href="#room-service">Room Service</a>
                </li>
                <li class="nav-item mx-4">
                    <a class="nav-link" href="#attendance">Attendance</a>
                </li>
                <li class="nav-item mx-4">
                    <a class="nav-link" href="#profile">My Profile</a>
                </li>
                <li class="nav-item mx-4">
                    <a class="nav-link text-danger" href="logout.php">Logout</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<!-- Main Content -->
<div class="container">
    <div class="row">
        <!-- Tasks Section -->
        <div class="col-md-6 mb-4" id="tasks">
            <div class="card shadow-sm">
                <div class="card-body">
                    <h5 class="card-title">My Tasks</h5>
                    <p class="card-text">View and manage your assigned tasks efficiently.</p>
                    <a href="staff_tasks.php" class="btn btn-primary">Go to Tasks</a>
                </div>
            </div>
        </div>

        <!-- Room Service Section -->
        <div class="col-md-6 mb-4" id="room-service">
            <div class="card shadow-sm">
                <div class="card-body">
                    <h5 class="card-title">Room Service</h5>
                    <p class="card-text">Handle room service requests and updates.</p>
                    <a href="staff_room_service.php" class="btn btn-primary">Manage Room Service</a>
                </div>
            </div>
        </div>

        <!-- Attendance Section -->
        <div class="col-md-6 mb-4" id="attendance">
            <div class="card shadow-sm">
                <div class="card-body">
                    <h5 class="card-title">Attendance</h5>
                    <p class="card-text">Track your attendance and working hours.</p>
                    <a href="staff_attendance.php" class="btn btn-primary">View Attendance</a>
                </div>
            </div>
        </div>

        <!-- Profile Section -->
        <div class="col-md-6 mb-4" id="profile">
            <div class="card shadow-sm">
                <div class="card-body">
                    <h5 class="card-title">My Profile</h5>
                    <p class="card-text">Update your personal information and settings.</p>
                    <a href="staff_profile.php" class="btn btn-primary">Edit Profile</a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Footer -->
<footer class="text-center mt-5">
    <p>&copy; 2025 Hotel Management System. All Rights Reserved.</p>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>
<script>
    // Example JavaScript for interactivity
    document.querySelectorAll('.card').forEach(card => {
        card.addEventListener('click', () => {
            alert('Navigating to ' + card.querySelector('.card-title').textContent);
        });
    });
</script>
</body>
</html>