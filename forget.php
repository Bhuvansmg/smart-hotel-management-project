
<!DOCTYPE html>
<html>
<head>
    <title>Forgot Password | Hotel Name</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <style>
        body {
            background: linear-gradient(120deg, #f7f7f7 60%, #e0e7ff 100%);
            min-height: 100vh;
        }
        .hotel-logo {
            width: 80px;
            margin-bottom: 10px;
        }
        .footer {
            background: #2c2c54;
            color: #fff;
            text-align: center;
            padding: 18px 0 10px 0;
            margin-top: 60px;
            border-radius: 12px 12px 0 0;
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <div class="text-center mb-4">
            <img src="images/hotel-logo.png" alt="Hotel Logo" class="hotel-logo rounded-circle shadow-sm">
            <h2 class="fw-bold" style="color:#2c2c54;">Hotel Name</h2>
        </div>
        <div class="card shadow mx-auto" style="max-width: 500px;">
            <div class="card-header bg-primary text-white text-center">
                <h4 class="mb-0">Forgot Password</h4>
            </div>
            <div class="card-body">
                <form action="send-reset-link.php" method="POST">
                    <div class="mb-3">
                        <label for="email" class="form-label">Enter your registered email</label>
                        <input type="email" name="email" class="form-control" required placeholder="user@example.com">
                    </div>
                    <button type="submit" class="btn btn-primary w-100">Send Reset Link</button>
                </form>
                <div class="mt-3 text-center">
                    <a href="login.php" class="text-decoration-none">Back to Login</a>
                </div>
            </div>
        </div>

        <!-- Bootstrap loop for testimonials (example) -->
        <div class="mt-5">
            <h5 class="text-center mb-4 text-secondary">What Our Guests Say</h5>
            <div class="row row-cols-1 row-cols-md-3 g-4">
                <?php
                $testimonials = [
                    ["name" => "Amit", "text" => "Amazing stay! The staff was very friendly.", "img" => "images/user1.jpg"],
                    ["name" => "Priya", "text" => "Rooms were clean and luxurious. Highly recommend!", "img" => "images/user2.jpg"],
                    ["name" => "John", "text" => "Great location and excellent service.", "img" => "images/user3.jpg"],
                ];
                foreach ($testimonials as $t) {
                    echo '<div class="col">
                        <div class="card h-100 border-0 shadow-sm">
                            <img src="'.$t['img'].'" class="card-img-top rounded-circle mx-auto mt-3" style="width:70px;height:70px;object-fit:cover;" alt="'.$t['name'].'">
                            <div class="card-body text-center">
                                <p class="card-text fst-italic">"'.$t['text'].'"</p>
                                <h6 class="card-title mb-0">'.$t['name'].'</h6>
                            </div>
                        </div>
                    </div>';
                }
                ?>
            </div>
        </div>
        <!-- End testimonials -->
    </div>
    <div class="footer mt-5">
        &copy; <?php echo date('Y'); ?> Hotel Name. All Rights Reserved.
    </div>
</body>
</html>