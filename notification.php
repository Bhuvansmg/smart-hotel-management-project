
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin Notifications</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .notification-card {
            border-left: 4px solid #007bff;
            background: #fdfdfd;
            padding: 15px;
            margin-bottom: 15px;
            border-radius: 6px;
            box-shadow: 0 1px 3px rgba(0,0,0,0.1);
        }
        .notif-header {
            font-weight: bold;
            font-size: 16px;
        }
        .notif-time {
            font-size: 12px;
            color: #888;
        }
        .notif-content {
            margin-top: 5px;
        }
    </style>
</head>
<body>


<div class="container mt-5">
    <h2>Review Notification Settings</h2>
    <form>
        <div class="form-check">
            <input class="form-check-input" type="checkbox" id="emailAlert">
            <label class="form-check-label" for="emailAlert">Receive email alerts for new reviews</label>
        </div>
        <div class="form-check mt-2">
            <input class="form-check-input" type="checkbox" id="dashboardAlert">
            <label class="form-check-label" for="dashboardAlert">Show new review alerts on dashboard</label>
        </div>
        <button type="button" class="btn btn-primary mt-3" onclick="alert('Settings saved (demo only).')">Save Settings</button>
    </form>
</div>
<div class="container mt-4">
    <h2>Notifications</h2>

    <div class="notification-card">
        <div class="notif-header">New Customer Review</div>
        <div class="notif-time">2 minutes ago</div>
        <div class="notif-content">"Excellent room service!" - John D.</div>
    </div>

    <div class="notification-card">
        <div class="notif-header">New Table Reservation</div>
        <div class="notif-time">10 minutes ago</div>
        <div class="notif-content">Reservation made for 2 guests at 7:00 PM by Sarah Lee.</div>
    </div>

    <div class="notification-card">
        <div class="notif-header">Food Order Placed</div>
        <div class="notif-time">15 minutes ago</div>
        <div class="notif-content">Room 204 ordered 2x Club Sandwich and 1x Coffee.</div>
    </div>

    <div class="notification-card">
        <div class="notif-header">New Staff Application</div>
        <div class="notif-time">1 hour ago</div>
        <div class="notif-content">Ravi Kumar has applied for the Front Desk position.</div>
    </div>

    <div class="notification-card">
        <div class="notif-header">Maintenance Request</div>
        <div class="notif-time">2 hours ago</div>
        <div class="notif-content">Air conditioning issue reported in Room 310.</div>
    </div>

</div>
</body>
</html>
