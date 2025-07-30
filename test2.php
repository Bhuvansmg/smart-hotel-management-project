<!-- filepath: c:\xampp\htdocs\hotelprj\stafffolder\staff_room_service.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Room Service</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
    <link rel="stylesheet" href="staff.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
        }
        .room-card {
            transition: transform 0.3s ease;
        }
        .room-card:hover {
            transform: scale(1.05);
        }
        .room-image {
            height: 200px;
            object-fit: cover;
        }
        .task-list {
            list-style-type: none;
            padding: 0;
        }
        .task-list li {
            margin-bottom: 10px;
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
                    <a class="nav-link" href="staff_dashboard.php">Dashboard</a>
                </li>
                <li class="nav-item mx-4">
                    <a class="nav-link active" href="staff_room_service.php">Room Service</a>
                </li>
                <li class="nav-item mx-4">
                    <a class="nav-link" href="staff_attendance.php">Attendance</a>
                </li>
                <li class="nav-item mx-4">
                    <a class="nav-link" href="staff_profile.php">My Profile</a>
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
    <h1 class="mb-4">Room Service</h1>
    <div class="row">
        <!-- Room 101 -->
        <div class="col-md-4 mb-4">
            <div class="card room-card shadow-sm">
                <img src="images/room101.jpg" alt="Room 101" class="card-img-top room-image">
                <div class="card-body">
                    <h5 class="card-title">Room 101</h5>
                    <p class="card-text">Status: Occupied</p>
                    <h6>Tasks:</h6>
                    <ul class="task-list">
                        <li>✔ Deliver fresh towels</li>
                        <li>✔ Refill minibar</li>
                        <li>✖ Fix air conditioning</li>
                    </ul>
                    <button class="btn btn-primary">Mark as Complete</button>
                </div>
            </div>
        </div>

        <!-- Room 102 -->
        <div class="col-md-4 mb-4">
            <div class="card room-card shadow-sm">
                <img src="images/room102.jpg" alt="Room 102" class="card-img-top room-image">
                <div class="card-body">
                    <h5 class="card-title">Room 102</h5>
                    <p class="card-text">Status: Vacant</p>
                    <h6>Tasks:</h6>
                    <ul class="task-list">
                        <li>✔ Clean the room</li>
                        <li>✔ Change bed linens</li>
                        <li>✖ Repair broken lamp</li>
                    </ul>
                    <button class="btn btn-primary">Mark as Complete</button>
                </div>
            </div>
        </div>

        <!-- Room 103 -->
        <div class="col-md-4 mb-4">
            <div class="card room-card shadow-sm">
                <img src="images/room103.jpg" alt="Room 103" class="card-img-top room-image">
                <div class="card-body">
                    <h5 class="card-title">Room 103</h5>
                    <p class="card-text">Status: Under Maintenance</p>
                    <h6>Tasks:</h6>
                    <ul class="task-list">
                        <li>✖ Fix plumbing issue</li>
                        <li>✖ Replace curtains</li>
                        <li>✔ Inspect electrical wiring</li>
                    </ul>
                    <button class="btn btn-primary">Mark as Complete</button>
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
    // Example JavaScript for task completion
    document.querySelectorAll('.btn-primary').forEach(button => {
        button.addEventListener('click', () => {
            alert('Task marked as complete!');
        });
    });
</script>
</body>
</html>