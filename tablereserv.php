<?php
session_start();
include('db.php');

// if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST['table'])) {
//     $_SESSION['price'] = $_POST['t8'];
//     $_SESSION['email'] = $_POST['t2']; // Save email for debug
//     // header("Location: tmypay.php");
//     exit();
// }
?>

<?php include('db.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Hotel Table Reservation</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">


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

    #last {
      /* margin-top:-10px;  */
      font-size: 25px;
      color: white;
      background-color: #2c2c54;
      padding-top: 20px;
      padding-bottom: 20px;
      height: 150%;
      padding-left: 40%;
      padding-right: 40%;
      text-align: center;
      font-weight: 400;
      margin: 0;
    }
  </style>
</head>

<body>
  <?php include("customernavbar.php"); ?>

  <div class="container vh-70 d-flex justify-content-center align-items-center">
    <div class="reservation-form card p-4 shadow w-100" style="max-width: 600px;">
      <h3 class="text-center">Table Reservation</h3>
      <form action="tmypay.php" id="reservationForm" method="post">
        <div class="mb-3">
          <label class="form-label">Full Name</label>
          <input type="text" class="form-control" name="t1" required>
        </div>
        <div class="mb-3">
          <label class="form-label">Email address</label>
          <input type="email" class="form-control" name="t2" required>
        </div>
        <div class="mb-3">
          <label class="form-label">Phone number</label>
          <input type="tel" class="form-control" name="t3" required>
        </div>
        <div class="mb-3">
          <label class="form-label">Reservation Date</label>
          <input type="date" class="form-control" name="t4" required>
        </div>
        <div class="mb-3">
          <label class="form-label">Select Time Slot</label>
          <select class="form-select" name="t5" id="timeSlot" required>
            <option value="08:00">08:00 AM</option>
            <option value="10:00">10:00 AM</option>
            <option value="12:00">12:00 PM</option>
            <option value="01:00">01:00 PM</option>
            <option value="02:00">02:00 PM</option>
            <option value="04:00">04:00 PM</option>
            <option value="06:00">06:00 PM</option>
            <option value="08:00">08:00 PM</option>
            <option value="01:00">10:00 PM</option>
          </select>
        </div>
        <div class="mb-3">
          <label class="form-label">AC / Non-AC</label><br>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="t6" id="acYes" value="yes">
            <label class="form-check-label" for="acYes">AC</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="t6" id="acNo" value="no" checked>
            <label class="form-check-label" for="acNo">Non-AC</label>
          </div>
        </div>
        <div class="mb-3">
          <label class="form-label">Number of Seats</label><br>
          <span class="seat-btn" data-value="1">1</span>
          <span class="seat-btn" data-value="2">2</span>
          <span class="seat-btn" data-value="3">3</span>
          <span class="seat-btn" data-value="4">4</span>
          <span class="seat-btn" data-value="5">5</span>
          <span class="seat-btn" data-value="6">6</span>
          <span class="seat-btn" data-value="7">7</span>
          <span class="seat-btn" data-value="8">8</span>
          <span class="seat-btn" data-value="9">9</span>
          <span class="seat-btn" data-value="10">10</span>
          <input type="hidden" name="t7" id="hiddenSeats">
        </div>

        <p id="priceDisplay" class="mt-3">Total Price: ₹0</p>
        <input type="hidden" name="t8" id="hiddenPrice" value="">

        <button type="button" id="confirmBtn" class="btn btn-primary mt-3">Confirm Reservation</button>

  

        <!-- Payment Modal - now inside the form -->
        <div class="modal fade" id="paymentModal" tabindex="-1" aria-labelledby="paymentModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
              <div class="modal-header">
                <h1 class="modal-title fs-5" id="paymentModalLabel">Payment Details</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <div class="mb-3">
                  <label for="paymentMethod" class="form-label">Select Payment Method</label>
                  <select class="form-select" id="paymentMethod" name="paymentMethod">
                    <option value="creditCard">Credit Card</option>
                    <option value="paypal">PayPal</option>
                  </select>
                </div>
                <div id="creditCardFields">
                  <div class="mb-3">
                    <label for="cardNumber" class="form-label">Card Number</label>
                    <input type="text" class="form-control" name="cardNumber" id="cardNumber" placeholder="XXXX XXXX XXXX" pattern="[0-9]{12}" title=" 12 digit Debit card number" required>
                  </div>
                  <div class="mb-3">
                    <label for="expiry" class="form-label">Expiry (MM/YY)</label>
                    <input type="text" class="form-control" name="expiry" id="expiry" placeholder="MM/YY" required>
                  </div>
                  <div class="mb-3">
                    <label for="cvv" class="form-label">CVV</label>
                    <input type="password" class="form-control" name="cvv" id="cvv" placeholder="XXX" pattern="[0-9]{3}" title=" 3 digit cvv number" required>
                  </div>
                </div>
                <div id="paypalFields" style="display: none;">
                  <div class="mb-3">
                    <label for="paypalEmail" class="form-label">PayPal Email</label>
                    <input type="email" class="form-control" name="paypalEmail" id="paypalEmail">
                  </div>
                </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                <button type="submit" name="table" id="payButton" class="btn btn-primary">Pay</button>
              </div>
            </div>
          </div>
        </div>
      </form>
    </div>
  </div>




  <!-- Success Modal -->
  <div class="modal fade" id="successModal" tabindex="-1" aria-labelledby="successModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-body text-center">
          <h5 class="modal-title mb-3" id="successModalLabel">Thank You!</h5>
          <p>Your reservation has been confirmed.</p>
        </div>
        <div class="modal-footer justify-content-center">
          <button type="button" class="btn btn-success" data-bs-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>



  <?php include('footer.php'); ?>
  <script>
    let selectedSeatCount = 0;
    let total = 0;
    const seatButtons = document.querySelectorAll('.seat-btn');
    const priceDisplay = document.getElementById('priceDisplay');
    const timeSelect = document.getElementById('timeSlot');
    const acRadios = document.querySelectorAll('input[name="t6"]');
    const hiddenSeats = document.getElementById('hiddenSeats');
    const hiddenPrice = document.getElementById('hiddenPrice');

    seatButtons.forEach(btn => {
      btn.addEventListener('click', () => {
        seatButtons.forEach(b => b.classList.remove('selected'));
        btn.classList.add('selected');
        selectedSeatCount = parseInt(btn.dataset.value);
        hiddenSeats.value = selectedSeatCount;
        updatePrice();
      });
    });
    timeSelect.addEventListener('change', updatePrice);
    acRadios.forEach(radio => radio.addEventListener('change', updatePrice));

    function updatePrice() {
      if (!selectedSeatCount) {
        priceDisplay.textContent = "Total Price: ₹0";
        hiddenPrice.value = "";
        return;
      }
      let basePrice = selectedSeatCount * 100;
      let time = parseInt(timeSelect.value.split(':')[0]);
      let extra = 0;
      if (time === 14 || time === 16) extra += 5;
      else if (time === 18 || time === 20) extra += 10;
      const acSelected = document.querySelector('input[name="t6"]:checked').value === "yes";
      if (acSelected && (time < 14 || time > 20)) {
        extra += 15;
      }
      total = basePrice + extra;
      priceDisplay.textContent = "Total Price: ₹" + total;
      hiddenPrice.value = total;
    }

    document.getElementById('confirmBtn').addEventListener('click', function() {
      if (selectedSeatCount === 0) {
        alert('Please select number of seats.');
        return;
      }
      new bootstrap.Modal(document.getElementById('paymentModal')).show();
    });


    document.getElementById('payButton').addEventListener('click', function(e) {
      updatePrice();
      const method = document.getElementById('paymentMethod').value;
      if (method === 'creditCard') {
        const card = document.getElementById('cardNumber').value;
        const expiry = document.getElementById('expiry').value;
        const cvv = document.getElementById('cvv').value;
        if (!card || !expiry || !cvv) {
          alert('Please fill in all credit card details.');
          e.preventDefault();
          return;
        }
      } else {
        const paypalEmail = document.getElementById('paypalEmail').value;
        if (!paypalEmail) {
          alert('Please enter your PayPal email.');
          e.preventDefault();
          return;
        }
      }
      if (!hiddenPrice.value || hiddenPrice.value === "0") {
        alert('Please select number of seats and options to calculate price.');
        e.preventDefault();
        return;
      }
      console.log("Submitting price:", hiddenPrice.value);
      // Do NOT call e.preventDefault() here!
    });
  </script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>