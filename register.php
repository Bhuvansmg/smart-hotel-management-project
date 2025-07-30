<?php include('db.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Register - Paradise Hotel</title>

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet" />

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" />

    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(to right, #e9e4d4, #ffe0d6);
            min-height: 100vh;
            margin: 0;
        }

        .register-wrapper {
            min-height: calc(100vh - 80px); /* Adjust if navbar height changes */
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 40px 15px;
        }

        .register-container {
            background-color: #fff;
            padding: 35px;
            border-radius: 15px;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.15);
            max-width: 480px;
            width: 100%;
        }

        .register-container h2 {
            text-align: center;
            margin-bottom: 20px;
            color: #ff6f61;
        }

        .form-label {
            font-size: 0.95rem;
            margin-bottom: 4px;
        }

        .form-control {
            border-radius: 8px;
            padding: 6px 10px;
            font-size: 0.9rem;
            height: 38px;
            border: 1px solid #ccc;
            box-shadow: inset 2px 2px 5px rgba(0, 0, 0, 0.08);
            transition: border-color 0.3s, box-shadow 0.3s;
        }

        .form-control:focus {
            border-color: #ffb10a;
            box-shadow: inset 1px 1px 4px rgba(0, 0, 0, 0.1), 0 0 4px rgba(255, 177, 10, 0.4);
        }

        .btn.btn-register {
            background-color: #ff6f61;
            color: white;
            border: none;
            border-radius: 8px;
            padding: 10px;
            width: 100%;
          
            font-size: 0.95rem;
            transition: background-color 0.3s ease, transform 0.2s ease;
        }

        .btn.btn-register:hover {
    background-color: #ffb10a !important;
    transform: scale(1.03);
}

        .login-link {
            text-align: center;
            margin-top: 18px;
        }

        .login-link a {
            color: #ff6f61;
            text-decoration: none;
            font-weight: 500;
            transition: color 0.3s ease;
        }

        .login-link a:hover {
            color: #ffb10a;
        }
    </style>
</head>
<body>

<?php include("bcnavbar.php"); ?> <!-- Navbar now inside body -->

    <div class="register-wrapper">
        <div class="register-container">
            <h2>Create an Account</h2>
            <form action="" method="POST">
                <div class="mb-3">
                    <label for="fullname" class="form-label">Full Name</label>
                    <input type="text" class="form-control" id="fullname" name="r1"  pattern="[a-zA-Z ]{1,}"  title=" only aphabets is need " required />
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email Address</label>
                    <input type="email" class="form-control" id="email" name="r2" required />
                </div>
                <div class="mb-3">
                    <label for="phone" class="form-label">Phone Number</label>
                    <input type="tel" class="form-control" id="phone" name="r3" pattern="[0-9]{10}" title=" 10 digit phone number" required />
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Create Password</label>
                    <input type="password" class="form-control" id="password" name="r4" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[\W_]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required />
                </div>
                <div class="mb-3">
                    <label for="confirm_password" class="form-label">Confirm Password</label>
                    <input type="password" class="form-control" id="confirm_password" name="r5" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[\W_]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required />
                </div>
                <button type="submit" name="Submit" class="btn btn-register">Register</button>
            </form>
            <div class="login-link">
                <p>Already have an account? <a href="login.php">Login here</a></p>
            </div>
        </div>
    </div>


    <?php 
if (isset($_POST['Submit'])) {
    $r1 = $_POST['r1']; // fullname
    $r2 = $_POST['r2']; // emailid
    $r3 = $_POST['r3']; // phnumber
    $r4 = $_POST['r4']; // cpassword
    $r5 = $_POST['r5']; // ccpassword

    if ($r4 === $r5) {
        $sql = "INSERT INTO customer (fullname, emailid, phnumber, cpassword, ccpassword)
                VALUES ('$r1', '$r2', '$r3', '$r4', '$r5')";

        if (mysqli_query($conn, $sql)) {
            echo "<script>alert('Customer account created successfully');</script>";
        } else {
            echo "Could not insert record: " . mysqli_error($conn);
        }
    } else {
        echo "<script>alert('Create Password and Confirm Password do not match');</script>";
    }
}


?>

 echo '<script>
    
      window.open("", "_self");
    </script>';






    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
