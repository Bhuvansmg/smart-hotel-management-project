<?php include("admintab.php"); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Food Items | Hotel Admin</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f4f4f4;
            color: #333;
        }

        .container {
            text-align: center;
            padding: 80px 20px;
        }

        h1 {
            font-size: 36px;
            color: #2c3e50;
            margin-bottom: 40px;
        }

        .btn {
            display: inline-block;
            padding: 12px 30px;
            margin: 10px;
            font-size: 18px;
            color: #fff;
            background-color: #2980b9;
            border: none;
            border-radius: 6px;
            text-decoration: none;
            transition: background-color 0.3s ease;
        }

        .btn:hover {
            background-color: #1c5980;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Manage Food Items</h1>
        <a href="foodtype.php" class="btn">Food Type</a>
        <a href="foodname.php" class="btn">Food Name</a>
    </div>
</body>

</html>