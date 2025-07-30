<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Our Rooms - Hotel Name</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <!-- Rooms Section -->
    <section class="rooms container my-5">
        <div class="row g-4">
            <div class="col-md-3">
                <div class="room-card">
                    <img src="roomsimg/d1.jpeg" alt="Deluxe Room" class="img-fluid">
                    <h2>Deluxe Room</h2>
                    <p>₹3500 / night</p>
                    <button class="book-btn btn btn-primary" 
                            data-bs-toggle="modal" 
                            data-bs-target="#bookingModal" 
                            data-room="Deluxe Room" 
                            data-price="3500">
                        Book Now
                    </button>
                </div>
            </div>
            <div class="col-md-3">
                <div class="room-card">
                    <img src="roomsimg/e1.webp" alt="Executive Suite" class="img-fluid">
                    <h2>Executive Suite</h2>
                    <p>₹5500 / night</p>
                    <button class="book-btn btn btn-primary" 
                            data-bs-toggle="modal" 
                            data-bs-target="#bookingModal" 
                            data-room="Executive Suite" 
                            data-price="5500">
                        Book Now
                    </button>
                </div>
            </div>
            <div class="col-md-3">
                <div class="room-card">
                    <img src="roomsimg/s1.jpeg" alt="Standard Room" class="img-fluid">
                    <h2>Standard Room</h2>
                    <p>₹2500 / night</p>
                    <button class="book-btn btn btn-primary" 
                            data-bs-toggle="modal" 
                            data-bs-target="#bookingModal" 
                            data-room="Standard Room" 
                            data-price="2500">
                        Book Now
                    </button>
                </div>
            </div>
            <div class="col-md-3">
                <div class="room-card">
                    <img src="roomsimg/f1.jpg" alt="Family Room" class="img-fluid">
                    <h2>Family Room</h2>
                    <p>₹4500 / night</p>
                    <button class="book-btn btn btn-primary" 
                            data-bs-toggle="modal" 
                            data-bs-target="#bookingModal" 
                            data-room="Family Room" 
                            data-price="4500">
                        Book Now
                    </button>
                </div>
            </div>
        </div>
    </section>

    <!-- Booking Modal -->
    <div class="modal fade" id="bookingModal" tabindex="-1" aria-labelledby="bookingModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="bookingModalLabel">Book Your Room</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="bookingForm">
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="roomType" class="form-label">Room Type</label>
                                <input type="text" class="form-control" id="roomType" readonly>
                            </div>
                            <div class="col-md-6">
                                <label for="price" class="form-label">Price (per night)</label>
                                <input type="text" class="form-control" id="price" readonly>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="numPersons" class="form-label">Number of Persons</label>
                                <input type="number" class="form-control" id="numPersons" min="1" required>
                            </div>
                            <div class="col-md-6">
                                <label for="checkIn" class="form-label">Check-In Date</label>
                                <input type="date" class="form-control" id="checkIn" required>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-success w-100">Proceed to Payment</button>
                    </form>
                </div>
            </div>
        </div>
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
        // Populate modal with room details
        const bookingModal = document.getElementById('bookingModal');
        bookingModal.addEventListener('show.bs.modal', function(event) {
            const button = event.relatedTarget;
            const roomType = button.getAttribute('data-room');
            const price = button.getAttribute('data-price');

            document.getElementById('roomType').value = roomType;
            document.getElementById('price').value = `₹${price}`;
        });

        // Handle booking form submission
        const bookingForm = document.getElementById('bookingForm');
        bookingForm.addEventListener('submit', function(event) {
            event.preventDefault();
            const roomType = document.getElementById('roomType').value;
            const numPersons = parseInt(document.getElementById('numPersons').value, 10);

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

            // Hide payment modal
            const paymentModal = bootstrap.Modal.getInstance(document.getElementById('paymentModal'));
            paymentModal.hide();

            // Show success modal
            const successModal = new bootstrap.Modal(document.getElementById('successModal'));
            successModal.show();
        });
    </script>
</body>

</html>