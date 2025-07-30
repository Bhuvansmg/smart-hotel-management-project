<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Hotel Booking</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body { background-color: #f7f7f7; padding: 40px; }
    .card { border-radius: 15px; box-shadow: 0 4px 20px rgba(0,0,0,0.1); }
  </style>
</head>
<body>

<div class="container">
  <h2 class="text-center mb-4">Hotel Room Booking</h2>

  <?php if ($inserted): ?>
    <div class="alert alert-success">Booking successful!</div>
  <?php endif; ?>

  <form id="bookingForm" method="post">
    <div class="card p-4">
      <div class="row g-3">
        <div class="col-md-6"><label>Name</label><input type="text" name="name" class="form-control" required></div>
        <div class="col-md-6"><label>Email</label><input type="email" name="email" class="form-control" required></div>
        <div class="col-md-6"><label>Phone</label><input type="tel" name="phone" class="form-control" required></div>
        <div class="col-md-6"><label>Check-in Date</label><input type="date" name="checkin" class="form-control" required></div>
        <div class="col-md-6"><label>Check-out Date</label><input type="date" name="checkout" class="form-control" required></div>
        <div class="col-md-6"><label>Number of Rooms</label><input type="number" name="rooms" id="rooms" class="form-control" min="1" value="1" required></div>
        <div class="col-md-6"><label>Number of Persons</label><input type="number" name="persons" id="persons" class="form-control" min="1" required></div>
      </div>
      <div class="text-center mt-4">
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#paymentModal">Proceed to Payment</button>
      </div>
    </div>

    <!-- Payment Modal -->
    <div class="modal fade" id="paymentModal" tabindex="-1">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-header"><h5 class="modal-title">Payment</h5></div>
          <div class="modal-body">
            <div class="mb-3"><label>Card Number</label><input type="text" name="card_number" class="form-control" ></div>
            <div class="mb-3"><label>Cardholder Name</label><input type="text" name="card_name" class="form-control" required></div>
            <div class="row">
              <div class="col-md-6"><label>Expiry Date</label><input type="month" name="card_expiry" class="form-control" required></div>
              <div class="col-md-6"><label>CVV</label><input type="text" name="card_cvv" class="form-control" maxlength="4" required></div>
            </div>
          </div>
          <div class="modal-footer">
            <button type="submit" name="submit_payment" class="btn btn-success">Confirm Payment</button>
          </div>
        </div>
      </div>
    </div>
  </form>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script>
  const rooms = document.getElementById('rooms');
  const persons = document.getElementById('persons');

  rooms.addEventListener('input', () => {
    persons.max = rooms.value * 4;
  });

  persons.addEventListener('input', () => {
    if (parseInt(persons.value) > parseInt(persons.max)) {
      persons.setCustomValidity(`Maximum allowed: ${persons.max}`);
    } else {
      persons.setCustomValidity('');
    }
  });
</script>
</body>
</html>