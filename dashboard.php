<?php include("db.php"); ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Hotel Admin Dashboard</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
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

    <!-- Main Content -->
    <main class="flex-1 p-6 overflow-y-auto">
      <!-- <h1 class="text-3xl font-bold text-gray-800 mb-6">Dashboard</h1> -->
          <!-- Welcome -->
      <div class="mb-6">
        <h1 class="text-3xl font-bold text-gray-800">Welcome, Admin!</h1>
        <p class="text-gray-600">Here's what's happening in your hotel today.</p>
      </div>
      <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
        <div class="bg-white rounded-xl shadow p-5">
          <h2 class="text-lg font-semibold text-gray-700">Rooms Booked</h2>
          <p class="text-2xl font-bold text-blue-900">72</p>
        </div>
        <div class="bg-white rounded-xl shadow p-5">
          <h2 class="text-lg font-semibold text-gray-700">Food Orders</h2>
          <p class="text-2xl font-bold text-green-600">89</p>
        </div>
        <div class="bg-white rounded-xl shadow p-5">
          <h2 class="text-lg font-semibold text-gray-700">New Customers</h2>
          <p class="text-2xl font-bold text-purple-700">34</p>
        </div>
        <div class="bg-white rounded-xl shadow p-5">
          <h2 class="text-lg font-semibold text-gray-700">Total Reviews</h2>
          <p class="text-2xl font-bold text-red-500">7</p>
        </div>
      </div>
       <!-- Main Content -->
   
  <br><br>

      <!-- Info Cards -->
      <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 mb-6">
        <div class="bg-white p-5 rounded-xl shadow">
          <h2 class="text-lg font-semibold text-gray-700">Rooms Available</h2>
          <p class="text-2xl font-bold text-blue-900">53</p>
        </div>
        <div class="bg-white p-5 rounded-xl shadow">
          <h2 class="text-lg font-semibold text-gray-700">Total Rooms</h2>
          <p class="text-2xl font-bold text-green-600">125</p>
        </div>
        <div class="bg-white p-5 rounded-xl shadow">
          <h2 class="text-lg font-semibold text-gray-700">New Guests</h2>
          <p class="text-2xl font-bold text-purple-700">34</p>
        </div>
        <div class="bg-white p-5 rounded-xl shadow">
          <h2 class="text-lg font-semibold text-gray-700">Pending Reviews</h2>
          <p class="text-2xl font-bold text-red-500">7</p>
        </div>
      </div>

      <!-- Facilities Summary -->
      <div class="mb-6">
        <h2 class="text-xl font-bold text-gray-700 mb-2">Available Facilities</h2>
        <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-4">
          <div class="bg-white shadow p-4 rounded-lg">
            <span class="material-icons text-blue-700">pool</span>
            <h3 class="text-gray-800 font-semibold">Swimming Pool</h3>
          </div>
          <div class="bg-white shadow p-4 rounded-lg">
            <span class="material-icons text-green-700">spa</span>
            <h3 class="text-gray-800 font-semibold">Spa & Wellness</h3>
          </div>
          <div class="bg-white shadow p-4 rounded-lg">
            <span class="material-icons text-yellow-600">room_service</span>
            <h3 class="text-gray-800 font-semibold">24x7 Room Service</h3>
          </div>
          <div class="bg-white shadow p-4 rounded-lg">
            <span class="material-icons text-pink-600">wifi</span>
            <h3 class="text-gray-800 font-semibold">Free WiFi</h3>
          </div>
          <div class="bg-white shadow p-4 rounded-lg">
            <span class="material-icons text-indigo-600">fitness_center</span>
            <h3 class="text-gray-800 font-semibold">Gym Access</h3>
          </div>
          <div class="bg-white shadow p-4 rounded-lg">
            <span class="material-icons text-red-600">local_bar</span>
            <h3 class="text-gray-800 font-semibold">Bar & Lounge</h3>
          </div>
        </div>
      </div>

      <!-- Recent Bookings Table -->
      <div class="bg-white shadow rounded-xl p-4">
        <h2 class="text-xl font-bold mb-4 text-gray-800">Recent Bookings</h2>
        <table class="w-full text-left table-auto">
          <thead>
            <tr class="bg-gray-200 text-gray-600 uppercase text-sm">
              <th class="px-4 py-2">Guest</th>
              <th class="px-4 py-2">Room</th>
              <th class="px-4 py-2">Check-In</th>
              <th class="px-4 py-2">Check-Out</th>
              <th class="px-4 py-2">Status</th>
            </tr>
          </thead>
          <tbody>
            <tr class="border-t">
              <td class="px-4 py-2">John Doe</td>
              <td class="px-4 py-2">Suite 202</td>
              <td class="px-4 py-2">2025-05-10</td>
              <td class="px-4 py-2">2025-05-13</td>
              <td class="px-4 py-2 text-green-600 font-semibold">Confirmed</td>
            </tr>
            <tr class="border-t">
              <td class="px-4 py-2">Sarah Smith</td>
              <td class="px-4 py-2">Deluxe 105</td>
              <td class="px-4 py-2">2025-05-09</td>
              <td class="px-4 py-2">2025-05-12</td>
              <td class="px-4 py-2 text-yellow-500 font-semibold">Pending</td>
            </tr>
          </tbody>
        </table>
      </div>
    
    </main>
  </div>
    <script src="bootstrap-5.3.5-dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>