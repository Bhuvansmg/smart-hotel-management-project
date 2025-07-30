<?php include("db.php"); ?>
<?php include("admintab.php"); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <title>Admin Payments | Hotel Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
   </head>

<body class="bg-gray-100 p-6">
   
    <h1 class="text-3xl font-bold text-gray-800 mb-6">Payments Overview</h1>

    <!-- Payment Summary Cards -->
    <div class="grid grid-cols-1 md:grid-cols-4 gap-6 mb-8">
        <div class="bg-white p-4 rounded shadow">
            <h2 class="text-sm text-gray-500">Total Payments</h2>
            <p class="text-2xl font-bold text-blue-700">₹2,50,000</p>
        </div>
        <div class="bg-white p-4 rounded shadow">
            <h2 class="text-sm text-gray-500">Room Bookings</h2>
            <p class="text-xl font-bold text-green-600">₹1,20,000</p>
        </div>
        <div class="bg-white p-4 rounded shadow">
            <h2 class="text-sm text-gray-500">Food Orders</h2>
            <p class="text-xl font-bold text-orange-500">₹80,000</p>
        </div>
        <div class="bg-white p-4 rounded shadow">
            <h2 class="text-sm text-gray-500">Table Reservations</h2>
            <p class="text-xl font-bold text-purple-600">₹50,000</p>
        </div>
    </div>

    <!-- Section: Room Booking Payments -->
    <div class="bg-white rounded shadow p-4 mb-6">
        <h2 class="text-xl font-semibold text-gray-700 mb-3">Room Booking Payments</h2>
       
     <table class="w-full text-center table-auto border-collapse">
    <thead class="bg-gray-100 text-gray-700">
        <tr>
            <th class="p-2 font-semibold">Booking ID</th>
            <th class="p-2 font-semibold">Guest</th>
            <th class="p-2 font-semibold">Amount</th>
            <th class="p-2 font-semibold">Date</th>
            <th class="p-2 font-semibold">Status</th>
        </tr>
    </thead>
    <tbody class="text-gray-800">
        <?php
            $sql = "SELECT * FROM roomsbooking";
            $retval = mysqli_query($conn, $sql);
            if (mysqli_num_rows($retval) > 0) {
                while ($row = mysqli_fetch_assoc($retval)) {
        ?>
        <tr class="border-b">
            <td class="p-2"><?php echo $row["id"] ?></td>
            <td class="p-2"><?php echo $row["fname"] ?></td>
            <td class="p-2"><?php echo $row["price"] ?></td>
            <td class="p-2"><?php echo $row["cin"] ?></td>
            <td class="p-2 text-green-600">Paid</td>
        </tr>
        <?php
                }
            }
        ?>
    </tbody>
</table>
    </div>

    <!-- Section: Food Orders -->
    <div class="bg-white rounded shadow p-4 mb-6">
        <h2 class="text-xl font-semibold text-gray-700 mb-3">Food Orders</h2>
        <table class="w-full text-left table-auto">
            <thead class="bg-gray-100 text-gray-600">
                <tr>
                    <th class="p-2">Order ID</th>
                    <th class="p-2">Customer</th>
                    <th class="p-2">Amount</th>
                    <th class="p-2">Date</th>
                    <th class="p-2">Status</th>
                </tr>
            </thead>

            <tbody>
                <tr class="border-t">
                    <td class="p-2">FO67890</td>
                    <td class="p-2">Priya Sharma</td>
                    <td class="p-2">₹2,000</td>
                    <td class="p-2">2025-05-08</td>
                    <td class="p-2 text-green-600">Paid</td>
                </tr>
            </tbody>
        </table>
    </div>

    <!-- Section: Table Reservations -->
    <div class="bg-white rounded shadow p-4 mb-6">
        <h2 class="text-xl font-semibold text-gray-700 mb-3">Table Reservations</h2>
        <table class="w-full text-left table-auto">
            <thead class="bg-gray-100 text-gray-600">
                <tr>
                    <th class="p-2">Reservation ID</th>
                    <th class="p-2">Name</th>
                    <th class="p-2">Amount</th>
                    <th class="p-2">Date</th>
                    <th class="p-2">Status</th>
                </tr>
            </thead>
            <tbody>
                        
<?php 

$sql = "SELECT * FROM tablereserv";
$retval = mysqli_query($conn,$sql);
if(mysqli_num_rows($retval)>0){
while($row = mysqli_fetch_assoc($retval)){
?>
  <tr>
 <td class="p-2"><?php echo $row["id"] ?></td>
            <td class="p-2"><?php echo $row["fullname"] ?></td>
            <td class="p-2"><?php echo $row["price"] ?></td>
            <td class="p-2"><?php echo $row["reservdate"] ?></td>
            <td class="p-2 text-green-600">Paid</td>
  </tr>
  <?php
}
}
?> 
            </tbody>
        </table>
    </div>

    <!-- Optional: Other Services -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-QF1QI9j8fW/8zQ4U5e6FJ5Q8j5p6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q/>
</body>
</body>

</html>