<?php include('db.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Hotel Table Reservation</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background-color: #f8f9fa;
    }
    .card {
      margin-top: 20px;
    }
    .seat-btn {
      display: inline-block;
      padding: 10px 15px;
      margin: 3px;
      border: 1px solid #ced4da;
      border-radius: 4px;
      cursor: pointer;
    }
    .seat-btn.selected {
      background-color: green;
      color: white;
      border-color: green;
    }
    .seat-btn:hover {
      background-color: #e9ecef;
    }
  </style>
</head>
<body>

<?php include("customernavbar.php"); ?>

<div class="container vh-100 d-flex justify-content-center align-items-center">
  <div class="reservation-form card p-4 shadow w-100" style="max-width: 600px;">
    <h3 class="text-center">Table Reservation</h3>
    <form id="reservationForm" method="post">
      <div class="mb-3">
        <label class="form-label">Full Name</label>
        <input type="text" class="form-control" name="fullname" required>
      </div>
      <div class="mb-3">
        <label class="form-label">Email address</label>
        <input type="email" class="form-control" name="emailid" required>
      </div>
      <div class="mb-3">
        <label class="form-label">Phone number</label>
        <input type="tel" class="form-control" name="phnumber" required>
      </div>
      <div class="mb-3">
        <label class="form-label">Reservation Date</label>
        <input type="date" class="form-control" name="reservdate" required>
      </div>
      <div class="mb-3">
        <label class="form-label">Select Time Slot</label>
        <select class="form-select" name="timeslot" id="timeSlot">
          <option value="10">10:00</option>
          <option value="12">12:00</option>
          <option value="14">14:00</option>
          <option value="16">16:00</option>
          <option value="18">18:00</option>
          <option value="20">20:00</option>
          <option value="22">22:00</option>
        </select>
      </div>
      <div class="mb-3">
        <label class="form-label">AC / Non-AC</label><br>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="acnonac" value="yes" id="acYes">
          <label class="form-check-label" for="acYes">AC</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="acnonac" value="no" id="acNo" checked>
          <label class="form-check-label" for="acNo">Non-AC</label>
        </div>
      </div>
      <div class="mb-3">
        <label class="form-label">Number of Seats</label><br>
        <?php for ($i = 1; $i <= 10; $i++): ?>
          <span class="seat-btn" data-value="<?= $i ?>"><?= $i ?></span>
        <?php endfor; ?>
        <input type="hidden" name="numseats" id="hiddenSeats">
      </div>
      <p id="priceDisplay">Total Price: ₹0</p>
      <input type="hidden" name="price" id="hiddenPrice">

      <button type="button" class="btn btn-primary" id="confirmBtn">Proceed to Payment</button>
    </form>
  </div>
</div>

<!-- Payment Modal -->
<div class="modal fade" id="paymentModal" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <form method="post" id="finalForm">
        <div class="modal-header">
          <h5 class="modal-title">Payment Details</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
        </div>
        <div class="modal-body">
          <input type="hidden" name="finalData" id="finalData">

          <div class="mb-3">
            <label for="paymentMethod" class="form-label">Payment Method</label>
            <select class="form-select" id="paymentMethod">
              <option value="creditCard">Credit Card</option>
              <option value="paypal">PayPal</option>
            </select>
          </div>

          <div id="creditCardFields">
            <div class="mb-3"><label class="form-label">Card Number</label>
              <input type="text" class="form-control" placeholder="XXXX XXXX XXXX XXXX" required>
            </div>
            <div class="mb-3"><label class="form-label">Expiry</label>
              <input type="text" class="form-control" placeholder="MM/YY" required>
            </div>
            <div class="mb-3"><label class="form-label">CVV</label>
              <input type="password" class="form-control" placeholder="XXX" required>
            </div>
          </div>

          <div id="paypalFields" style="display:none;">
            <div class="mb-3"><label class="form-label">PayPal Email</label>
              <input type="email" class="form-control" placeholder="email@example.com" required>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="submit" name="submitReservation" class="btn btn-success">Pay and Confirm</button>
        </div>
      </form>
    </div>
  </div>
</div>

<!-- Success Modal -->
<div class="modal fade" id="successModal" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content text-center p-4">
      <h5>Thank you!</h5>
      <p>Your reservation has been confirmed.</p>
      <button class="btn btn-success" data-bs-dismiss="modal">Close</button>
    </div>
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script>
  const seatButtons = document.querySelectorAll('.seat-btn');
  const priceDisplay = document.getElementById('priceDisplay');
  const timeSlot = document.getElementById('timeSlot');
  const acOptions = document.querySelectorAll('input[name="acnonac"]');
  const hiddenSeats = document.getElementById('hiddenSeats');
  const hiddenPrice = document.getElementById('hiddenPrice');

  let selectedSeats = 0;

  seatButtons.forEach(btn => {
    btn.addEventListener('click', () => {
      seatButtons.forEach(b => b.classList.remove('selected'));
      btn.classList.add('selected');
      selectedSeats = parseInt(btn.dataset.value);
      hiddenSeats.value = selectedSeats;
      updatePrice();
    });
  });

  [timeSlot, ...acOptions].forEach(el => el.addEventListener('change', updatePrice));

  function updatePrice() {
    if (!selectedSeats) {
      priceDisplay.textContent = "Total Price: ₹0";
      return;
    }

    let base = selectedSeats * 100;
    let time = parseInt(timeSlot.value);
    let ac = document.querySelector('input[name="acnonac"]:checked').value;
    let extra = 0;

    if ([14, 16].includes(time)) extra += 5;
    if ([18, 20].includes(time)) extra += 10;
    if (ac === 'yes' && (time < 14 || time > 20)) extra += 15;

    let total = base + extra;
    priceDisplay.textContent = `Total Price: ₹${total}`;
    hiddenPrice.value = total;
  }

  document.getElementById('confirmBtn').addEventListener('click', () => {
    if (!selectedSeats) return alert('Please select number of seats.');
    new bootstrap.Modal(document.getElementById('paymentModal')).show();
  });

  document.getElementById('paymentMethod').addEventListener('change', (e) => {
    const creditFields = document.getElementById('creditCardFields');
    const paypalFields = document.getElementById('paypalFields');
    creditFields.style.display = e.target.value === 'creditCard' ? 'block' : 'none';
    paypalFields.style.display = e.target.value === 'paypal' ? 'block' : 'none';
  });
</script>
</body>
</html>

<?php
if (isset($_POST['submitReservation'])) {
  $stmt = $conn->prepare("INSERT INTO tablereserv (fullname, emailid, phnumber, reservdate, timeslot, acnonac, numseats, price) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
  $stmt->bind_param("ssssssii",
    $_POST['fullname'],
    $_POST['emailid'],
    $_POST['phnumber'],
    $_POST['reservdate'],
    $_POST['timeslot'],
    $_POST['acnonac'],
    $_POST['numseats'],
    $_POST['price']
  );

  if ($stmt->execute()) {
    echo "<script>
      const successModal = new bootstrap.Modal(document.getElementById('successModal'));
      successModal.show();
    </script>";
  } else {
    echo "<script>alert('Reservation failed: " . $stmt->error . "');</script>";
  }
  $stmt->close();
  $conn->close();
}
?>
