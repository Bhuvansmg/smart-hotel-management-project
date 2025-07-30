<?php include("db.php"); ?>
<?php include("adminfooditem.php"); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Food Type</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f4f6f8;
            margin: 0;
            padding: 0;
        }

        .form-container {
            width: 100%;
            max-width: 500px;
            margin: 80px auto;
            padding: 30px;
            background-color: #2c3e50;
            border-radius: 10px;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.2);
            color: #ecf0f1;
        }

        h2 {
            text-align: center;
            margin-bottom: 30px;
            color: #ffffff;
        }

        label {
            display: block;
            margin-bottom: 8px;
            font-weight: 500;
        }

        input[type="text"] {
            width: 100%;
            padding: 10px;
            border-radius: 6px;
            border: none;
            margin-bottom: 20px;
            font-size: 16px;
        }

        input[type="submit"] {
            background-color: #2980b9;
            color: white;
            padding: 12px 20px;
            border: none;
            border-radius: 6px;
            font-size: 16px;
            cursor: pointer;
            width: 100%;
        }

        input[type="submit"]:hover {
            background-color: #1f5c87;
        }

        .message {
            text-align: center;
            margin-top: 20px;
            color: green;
        }
    </style>
</head>

<body>

    <div class="form-container">
        <h2>Add Food Type</h2>
        <form method="POST" action="">
            <label for="a1">Food Type</label>
            <input type="text" name="a1" id="a1" required>

            <label for="a2">Veg or Non-Veg</label>
            <input type="text" name="a2" id="a2">

            <input type="submit" name="Submit1" value="Submit">
        </form>

        <?php
        if (isset($_POST['Submit1'])) {
            $a1 = $_POST["a1"];
            $a2 = $_POST["a2"];

            $sql = "INSERT INTO foodcategory (foodtype, vegornonveg) VALUES ('$a1', '$a2')";
            if (mysqli_query($conn, $sql)) {
                echo "<p class='message'>Food Type Added Successfully!</p>";
            } else {
                echo "<p class='message' style='color:red;'>Error: " . mysqli_error($conn) . "</p>";
            }
        }
        ?>
    </div>

</body>

</html>