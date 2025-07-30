<!-- filepath: c:\xampp\htdocs\hotelprj\cfolder\test.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Room Booking</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light shadow-sm">
        <div class="container">
            <a class="navbar-brand" href="#">Hotel Name</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Rooms</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Room Booking Section -->
    <div class="container my-5">
        <h2 class="text-center mb-4">Room Booking</h2>
        <form id="bookingForm">
            <div class="row mb-3">
                <div class="col-md-6">
                    <label for="roomType" class="form-label">Room Type</label>
                    <select id="roomType" name="RoomType" class="form-select" required>
                        <option value="" selected>Select Room Type</option>
                        <option value="Deluxe Room">Deluxe Room</option>
                        <option value="Family Room">Family Room</option>
                        <option value="Single Room">Single Room</option>
                    </select>
                </div>
                <div class="col-md-6">
                    <label for="numPersons" class="form-label">Number of Persons</label>
                    <input type="number" class="form-control" id="numPersons" name="NumPersons" min="1" required>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-md-6">
                    <label for="checkIn" class="form-label">Check-In Date</label>
                    <input type="date" class="form-control" id="checkIn" name="CheckIn" required>
                </div>
                <div class="col-md-6">
                    <label for="checkOut" class="form-label">Check-Out Date</label>
                    <input type="date" class="form-control" id="checkOut" name="CheckOut" required>
                </div>
            </div>
            <button type="submit" class="btn btn-primary w-100">Proceed to Payment</button>
        </form>
    </div>



    <!-- Payment Modal -->
    <div class="modal fade" id="paymentModal" tabindex="-1" aria-labelledby="paymentModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="paymentModalLabel">Payment Options</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="paymentForm">
                        <h4>Select Payment Method</h4>
                        <div class="mb-3">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="paymentMethod" id="creditCard" value="Credit/Debit Card" required>
                                <label class="form-check-label" for="creditCard">Credit/Debit Card</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="paymentMethod" id="upi" value="UPI">
                                <label class="form-check-label" for="upi">UPI</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="paymentMethod" id="netBanking" value="Net Banking">
                                <label class="form-check-label" for="netBanking">Net Banking</label>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-success w-100">Confirm Payment</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Success Modal -->
    <div class="modal fade" id="successModal" tabindex="-1" aria-labelledby="successModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="successModalLabel">Booking Confirmed</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body text-center">
                    <h4>Your booking has been confirmed!</h4>
                    <p>Thank you for choosing our hotel.</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
    
    <script>
        // Handle booking form submission
        const bookingForm = document.getElementById('bookingForm');
        bookingForm.addEventListener('submit', function(event) {
            event.preventDefault();
            const roomType = document.getElementById('roomType').value;
            const numPersons = document.getElementById('numPersons').value;

            // Validate number of persons
            if (roomType === 'Family Room' && numPersons > 10) {
                alert('Family Room allows a maximum of 10 persons.');
                return;
            } else if (roomType !== 'Family Room' && numPersons > 4) {
                alert('This room allows a maximum of 4 persons.');
                return;
            }

            // Show payment modal
            const paymentModal = new bootstrap.Modal(document.getElementById('paymentModal'));
            paymentModal.show();
        });

        // Handle payment form submission
        const paymentForm = document.getElementById('paymentForm');
        paymentForm.addEventListener('submit', function(event) {
            event.preventDefault();

            // Show success modal
            const paymentModal = bootstrap.Modal.getInstance(document.getElementById('paymentModal'));
            paymentModal.hide();

            const successModal = new bootstrap.Modal(document.getElementById('successModal'));
            successModal.show();
        });
    </script>
</body>
</html>