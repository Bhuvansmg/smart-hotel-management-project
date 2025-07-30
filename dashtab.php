<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Hotel Admin Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
   
</head>

<body class="bg-gray-100 font-sans">
    <div class="flex h-screen">
        <!-- Sidebar -->
        <aside class="w-64 bg-blue-900 text-white flex flex-col">
            <div class="p-6 text-2xl font-bold border-b border-blue-700">HotelAdmin</div>
            <nav class="flex-1 px-4 py-4 space-y-2">
                <a href="admintab.php" class="flex items-center gap-3 p-2 rounded hover:bg-blue-700"><span class="material-icons">dashboard</span>Dashboard</a>
                <a href="adminviewroomsbooking.php" class="flex items-center gap-3 p-2 rounded hover:bg-blue-700"><span class="material-icons">hotel</span>Rooms</a>
                <a href="adminviewtable.php" class="flex items-center gap-3 p-2 rounded hover:bg-blue-700"><span class="material-icons">book_online</span>Reservations</a>
                <a href="shef/shefviewfoodorder.php" class="flex items-center gap-3 p-2 rounded hover:bg-blue-700"><span class="material-icons">restaurant</span>Food Orders</a>
                <a href="reviews.php" class="flex items-center gap-3 p-2 rounded hover:bg-blue-700"><span class="material-icons">reviews</span>Reviews</a>
                <a href="adminviewcustomerdetails.php" class="flex items-center gap-3 p-2 rounded hover:bg-blue-700"><span class="material-icons">groups</span>Customers</a>
                <a href="staff.php" class="flex items-center gap-3 p-2 rounded hover:bg-blue-700"><span class="material-icons">people</span>Staff</a>
                <a href="notification.php" class="flex items-center gap-3 p-2 rounded hover:bg-blue-700"><span class="material-icons">notifications</span>Notifications</a>
                <a href="#" class="flex items-center gap-3 p-2 rounded hover:bg-blue-700"><span class="material-icons">settings</span>Settings</a>
                <a href="#" class="flex items-center gap-3 p-2 rounded hover:bg-blue-700"><span class="material-icons">security</span>Security</a>
                <a href="#" class="flex items-center gap-3 p-2 mt-4 border-t border-blue-700 pt-2 hover:bg-red-600"><span class="material-icons">logout</span>Sign Out</a>
            </nav>
           

        </aside>
            </div>

</body>