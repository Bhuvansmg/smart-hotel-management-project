<?php include("db.php"); ?>
<?php include("adminfooditem.php"); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Add Food Item</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f4f6f8;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 600px;
            margin: 80px auto;
            background-color: #ffffff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.1);
        }

        h2 {
            text-align: center;
            color: #2c3e50;
            margin-bottom: 30px;
        }

        label {
            display: block;
            margin-bottom: 6px;
            font-weight: 600;
            color: #34495e;
        }

        select,
        input[type="text"],
        input[type="file"] {
            width: 100%;
            padding: 10px;
            border-radius: 6px;
            border: 1px solid #ccc;
            margin-bottom: 20px;
            font-size: 16px;
        }

        input[type="submit"],
        input[type="reset"] {
            padding: 12px 20px;
            font-size: 16px;
            border: none;
            border-radius: 6px;
            margin-right: 10px;
            cursor: pointer;
        }

        input[type="submit"] {
            background-color: #27ae60;
            color: white;
        }

        input[type="reset"] {
            background-color: #e67e22;
            color: white;
        }

        input[type="submit"]:hover {
            background-color: #219150;
        }

        input[type="reset"]:hover {
            background-color: #cf6a11;
        }

        .message {
            text-align: center;
            margin-top: 20px;
            color: green;
        }
    </style>
</head>

<body>
    <div class="container">
        <h2>Add Food Item</h2>
        <form action="" method="post" enctype="multipart/form-data">
            <label for="p0">Select Food Type</label>
            <select name="p0" id="p0" required>
                <option value="">-- Select Type --</option>
                <?php
                $sql = "SELECT * FROM foodcategory";
                $result = mysqli_query($conn, $sql);
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<option value='{$row['foodtype']}'>{$row['foodtype']}</option>";
                }
                ?>
            </select>

            <label for="p1">Veg or Non-Veg</label>
            <select name="p1" id="p1" required>
                <option value="">-- Select Option --</option>
                <?php
                $sql = "SELECT DISTINCT vegornonveg FROM foodcategory";
                $result = mysqli_query($conn, $sql);
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<option value='{$row['vegornonveg']}'>{$row['vegornonveg']}</option>";
                }
                ?>
            </select>

            <label for="p2">Food Name</label>
            <input type="text" name="p2" id="p2" required>

            <label for="p3">Food Price</label>
            <input type="text" name="p3" id="p3" required>

            <label for="p4">Food Image</label>
            <input type="file" name="p4" id="p4" accept="image/*" required>

            <label for="p5">Description</label>
            <input type="text" name="p5" id="p5">

            <input type="reset" value="Reset">
            <input type="submit" name="Submit1" value="Add">
        </form>

        <?php
        if (isset($_POST['Submit1'])) {
            $p0 = $_POST["p0"];
            $p1 = $_POST["p1"];
            $p2 = $_POST["p2"];
            $p3 = $_POST["p3"];
            $p5 = $_POST["p5"];

            // Handle image upload
            $imgName = $_FILES['p4']['name'];
            $imgTmp = $_FILES['p4']['tmp_name'];
            $imgPath = "uploads/" . basename($imgName);
            move_uploaded_file($imgTmp, $imgPath);

            $sql = "INSERT INTO food(foodtype, vegornonveg, foodname, foodprice, foodimage, description)
                    VALUES('$p0','$p1','$p2','$p3','$imgName','$p5')";
            if (mysqli_query($conn, $sql)) {
                echo "<p class='message'>Food Added Successfully!</p>";
            } else {
                echo "<p class='message' style='color:red;'>Error: " . mysqli_error($conn) . "</p>";
            }
        }
        ?>
    </div>
</body>

</html>