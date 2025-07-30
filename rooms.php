<?php
// Start the session
session_start();
?>
<?php include('db.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Our Rooms - Hotel Name</title>
  <!-- <link rel="stylesheet" href="rooms.css"> -->
  <style>
    /* General */
    body {
      margin: 0;
      font-family: 'Poppins', sans-serif;
      background-color: #f7f7f7;
      color: #333;
    }

    .container {
      width: 90%;
      margin: auto;
      overflow: hidden;
    }

    /* Header */
    .header {
      position: relative;
      background: url('images/room-banner.jpg') no-repeat center center/cover;
      height: 480px;
      display: flex;
      align-items: center;
      justify-content: center;
      flex-direction: column;
      text-align: center;
      color: white;
      overflow: hidden;
    }

    .header .overlay {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background: rgba(0, 0, 0, 0.5);
      /* Add a dark overlay */
      z-index: 1;
    }

    .header .container {
      position: relative;
      z-index: 2;
    }

    .header h1 {
      font-size: 3rem;
      margin: 0;
      animation: fadeInDown 1s ease-in-out;
    }

    .header p {
      margin-top: 10px;
      font-size: 1.2rem;
      animation: fadeInUp 1s ease-in-out;
    }

   .cta-btn {
  display: inline-block;             /* Ensures proper box sizing */
  padding: 12px 30px;                /* Adjust padding for vertical space */
  background-color: #FFA500;         /* Orange background */
  color: white;
  text-decoration: none;
  font-size: 1.4rem;
  line-height: 1.5;                  /* Makes sure text height is normal */
  border-radius: 30px;
  transition: background 0.3s ease;
  animation: fadeInUp 1.5s ease-in-out;
  font-weight: 600;                  /* Optional: improves appearance */
}

.cta-btn:hover {
  background-color:rgb(255, 252, 246);
  color:orange;
}

    /* Animations */
    @keyframes fadeInDown {
      from {
        opacity: 0;
        transform: translateY(-20px);
      }

      to {
        opacity: 1;
        transform: translateY(0);
      }
    }

    @keyframes fadeInUp {
      from {
        opacity: 0;
        transform: translateY(20px);
      }

      to {
        opacity: 1;
        transform: translateY(0);
      }
    }



    /* .header {
  background: url('images/room-banner.jpg') no-repeat center center/cover;
  height: 300px;
  display: flex;
  align-items: center;
  justify-content: center;
  flex-direction: column;
  color: white;
  text-align: center;
}

.header p {
  margin-top: 10px;
  font-size: 16px;
} */

    /* Rooms Section */
    /* .rooms {
  display: grid;

  grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
  gap: 20px;
  margin: 50px 0;
} */
    /* Rooms Section */
    .rooms {
      display: flex;
      flex-wrap: wrap;
      /* Allow wrapping of items */
      justify-content: space-between;
      /* Center align the items */
      gap: 30px;
      /* Add consistent spacing between the cards */
      margin: 50px 0;
      /* Adjust margin for the section */
    }

    .room-card {
      background: white;
      border-radius: 10px;
      overflow: hidden;
      box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
      transition: transform 0.3s, box-shadow 0.3s;
      width: 280px;
      /* Set a fixed width for the cards */
      text-align: center;
      /* Center align the content inside the card */
    }

    /* .room-card {
  background: white;
  border-radius: 10px;
  overflow: hidden;
  
  box-shadow: 0 5px 15px rgba(0,0,0,0.1);
  transition: transform 0.3s, box-shadow 0.3s;
} */

    .room-card:hover {
      transform: translateY(-10px);
      box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
    }

    .room-card img {
      width: 100%;
      height: 200px;
      object-fit: cover;
    }

    .room-card h2 {
      margin: 15px;
    }

    .room-card p {
      margin: 0 15px 20px;
      font-weight: bold;
    }

    .book-btn {
      display: block;
      width: 80%;
      margin: 10px auto 20px;
      padding: 10px;
      background-color: #0077cc;
      color: white;
      border: none;
      border-radius: 30px;
      cursor: pointer;
      font-size: 16px;
      transition: background 0.3s;
    }

    .book-btn:hover {
      background-color: #005fa3;
    }

    /* Special Offer */

    .special-offer {
      background: linear-gradient(to right, #ffcc00, #ff9900);
      text-align: center;
      padding: 70px 20px;
      margin: 80px 0 0 0;
      border-radius: 20px 20px 0 0;
    }

    .special-offer h2 {
      margin-bottom: 20px;
      font-size: 36px;
    }

    .special-offer p {
      margin-bottom: 30px;
      font-size: 20px;
    }

    .offer-btn {
      background: #333;
      color: white;
      padding: 15px 40px;
      font-size: 18px;
      border: none;
      border-radius: 30px;
      cursor: pointer;
      transition: background 0.3s;
    }

    .offer-btn:hover {
      background: #555;
    }

    /* Footer
    .footer {
      text-align: center;
      padding: 20px;
      background: #222;
      color: #bbb;
      margin-top: 50px;
    } */

    /* Add blur effect */
    /* .blur-background {
      filter: blur(5px);
      pointer-events: none;
      /* Disable interactions with the blurred content */
    

      #last{
     /* margin-top:-10px;  */
     font-size:25px;
     color: white;
     background-color: #2c2c54;
     padding-top: 20px;
     padding-bottom: 20px;
     height:150%;
    padding-left:40%;
     padding-right:40%;
     text-align: center;
     font-weight: 400;
     margin: 0;
    }
  </style>
  </style>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">


  </style>
</head>

<body>
  <?php include("customernavbar.php"); ?>
  <!-- Header Section -->
  <header class="header">
    <div class="overlay"></div>
    <div class="container">
      <h1>Welcome to Our Luxurious Rooms</h1>
      <p>Experience comfort and elegance like never before</p>
      <a href="#rooms" class="cta-btn">Explore Rooms</a>
    </div>
  </header>
  <!-- <header class="header">
    <div class="container">
      <h1>Our Rooms</h1>
      <p>Home > Rooms</p>
    </div>
  </header> -->
  <br><br><br><br><br>
  <div>



  </div>
  <!-- Rooms Section -->
  <!-- Rooms Section -->
  <section class="rooms container">
    <div class="row g-6">
      <div class="col-md-3">
        <div class="room-card">
          <img src="roomsimg/d1.jpeg" alt="Deluxe Room">
          <h2>Deluxe Room</h2>
          <p>₹3500 / night</p>
          <button class="book-btn btn btn-primary" data-bs-toggle="modal" data-bs-target="#bookingModal" data-room="Deluxe Room" data-price="3500">Book Now</button>
        </div>
      </div>
      <div class="col-md-3">
        <div class="room-card">
          <img src="roomsimg/e1.webp" alt="Suite Room">
          <h2>Executive Suite</h2>
          <p>₹5500 / night</p>
          <button class="book-btn btn btn-primary" data-bs-toggle="modal" data-bs-target="#bookingModal" data-room="Executive Suite" data-price="5500">Book Now</button>
        </div>
      </div>
      <div class="col-md-3">
        <div class="room-card">
          <img src="roomsimg/s1.jpeg" alt="Standard Room">
          <h2>Standard Room</h2>
          <p>₹2500 / night</p>
          <button class="book-btn btn btn-primary" data-bs-toggle="modal" data-bs-target="#bookingModal" data-room="Standard Room" data-price="2500">Book Now</button>
        </div>
      </div>
      <div class="col-md-3">
        <div class="room-card">
          <img src="roomsimg/f1.jpg" alt="Family Room">
          <h2>Family Room</h2>
          <p>₹4500 / night</p>
          <button class="book-btn btn btn-primary" data-bs-toggle="modal" data-bs-target="#bookingModal" data-room="Family Room" data-price="4500">Book Now</button>
        </div>
      </div>
    </div>
  </section>

  <!-- Special Offer Section -->
  <section class="special-offer">
    <div class="container">
      <h2>Special Offer: 20% Off on Weekends!</h2>
      <p>Book your stay on weekends and enjoy exclusive discounts with complimentary breakfast.</p>
      <button class="offer-btn">View Offers</button>
    </div>
  </section>

  <!-- Booking Modal -->
  <form action="mypay.php" method="post">
    <div class="modal fade" id="bookingModal" tabindex="-1" aria-labelledby="bookingModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="bookingModalLabel">Book Your Room</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <!-- Guest Information Section -->
            <div class="mb-4">
              <h4>Guest Information</h4>
              <div class="row">
                <div class="col-md-6">
                  <label for="guestName" class="form-label">Full Name</label>
                  <input type="text" class="form-control" id="guestName" name="r1" placeholder="Enter Full Name" required>
                </div>
                <div class="col-md-6">
                  <label for="guestEmail" class="form-label">Email</label>
                  <input type="email" class="form-control" id="guestEmail" name="r2" placeholder="Enter Email" required>
                </div>
              </div>
              <div class="row mt-3">
                <div class="col-md-6">
                  <label for="guestPhone" class="form-label">Phone Number</label>
                  <input type="text" class="form-control" id="guestPhone" name="r3" placeholder="Enter Phone Number" pattern="[0-9]{10}" title=" 10 digit phone number " required>
                </div>
                <div class="col-md-6">
                  <label for="guestCountry" class="form-label">Country</label>
                  <select id="guestCountry" name="r4" class="form-select" required>
                    <option value="" selected>Select your country</option>
                    <?php
                    $countries = array("Afghanistan", "India", "United States", "United Kingdom", "Australia", "Canada", "Germany", "France", "Japan", "China");
                    foreach ($countries as $country) {
                      echo "<option value=\"$country\">$country</option>";
                    }
                    ?>
                  </select>
                </div>
              </div>
            </div>

            <!-- Reservation Information Section -->
            <div class="mb-4">
              <h4>Reservation Information</h4>
              <div class="row">
                <div class="col-md-6">
                  <label for="roomType" class="form-label">Room Type</label>
                  <input type="text" class="form-control" name="r5" id="roomType" readonly>
                </div>
                <div class="col-md-6">
                  <label for="price" class="form-label">Price (per night)</label>
                  <input type="text" class="form-control" name="r6" id="price" readonly>
                </div>
              </div>
              <div class="row mt-3">
                <div class="col-md-6">
                  <label for="checkIn" class="form-label">Check-In Date</label>
                  <input type="date" class="form-control" name="r7" id="checkIn" required>
                </div>
                <div class="col-md-6">
                  <label for="checkOut" class="form-label">Check-Out Date</label>
                  <input type="date" class="form-control" name="r8" id="checkOut" required>
                </div>
              </div>

              <div class="row mt-3">
                <div class="col-md-6">
                  <label for="bedType" class="form-label">Bedding Type</label>
                  <select id="bedType" name="r9" class="form-select" required>
                    <option value="" selected>Bedding Type</option>
                    <option value="Single">Single</option>
                    <option value="Double">Double</option>
                    <option value="Triple">Triple</option>
                    <option value="Quad">Quad</option>
                    <option value="None">None</option>
                  </select>
                </div>
                <div class="col-md-6">
                  <label for="mealPlan" class="form-label">Meal Plan</label>
                  <select id="mealPlan" name="r10" class="form-select" required>
                    <option value="" selected>Meal</option>
                    <option value="Room only">Room only</option>
                    <option value="Breakfast">Breakfast</option>
                    <option value="Half Board">Half Board</option>
                    <option value="Full Board">Full Board</option>
                  </select>
                </div>
              </div>

              <div class="row mt-3">
                <div class="col-md-6">
                  <label for="numPersons" class="form-label">Number of Persons</label>
                  <input type="number" class="form-control" id="numPersons" name="r11" min="1" required>
                </div>

                <div class="col-md-6">
                  <label for="idProof" class="form-label">Aadhar/ID Proof</label>
                  <input type="text" class="form-control" name="r12" id="idProof" placeholder="Enter Aadhar or ID Proof" pattern="[0-9]{12}" title=" 12 digit aadhar number" required>
                </div>
              </div>
            </div>

            <!-- Submit Button -->
            <button type="button" class="btn btn-success w-100" name="Confirm" data-bs-toggle="modal" data-bs-target="#paymentModal">Confirm Booking</button>
			
			
			
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
            <button type="submit" name="confirm" class="btn btn-success w-100">Confirm Payment</button>
          </div>

        </div>
      </div>
    </div>

  </form>




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





  <!-- Success Modal -->


  <!-- Success Modal -->
  <!-- <div class="modal fade" id="successModal" tabindex="-1" aria-labelledby="successModalLabel" aria-hidden="true">
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
  </div> -->


  <?php include('footer.php'); ?>

  <!-- Footer -->
  <!-- <footer class="footer">
    <p>© 2025 Hotel Name. All Rights Reserved.</p>
  </footer> -->








  <script>
    document.addEventListener('DOMContentLoaded', function() {
      const confirmBookingButton = document.querySelector('button[data-bs-toggle="modal"][data-bs-target="#paymentModal"]');

      if (confirmBookingButton) {
        confirmBookingButton.addEventListener('click', function() {
          // Open the Payment Modal
          const paymentModal = new bootstrap.Modal(document.getElementById('paymentModal'));
          paymentModal.show();
        });
      }
    });


    // Populate modal with room details
    const bookingModal = document.getElementById('bookingModal');
    bookingModal.addEventListener('show.bs.modal', function(event) {
      const button = event.relatedTarget;
      const roomType = button.getAttribute('data-room');
      const price = button.getAttribute('data-price');

      // Set room type and price in the modal
      document.getElementById('roomType').value = roomType;
      document.getElementById('price').value = `${price}`;

      // Handle max persons based on room type
      const numPersonsField = document.getElementById('numPersons');
      const numPersons = parseInt(numPersonsField.value, 10); // Get the value and parse it as an integer

      if (roomType === 'Family Room' && numPersons > 10) {
        alert('Family Room allows a maximum of 10 persons.');
        return;
      } else if (roomType !== 'Family Room' && numPersons > 4) {
        alert('This room allows a maximum of 4 persons.');
        return;
      }
    });

    // Handle form submission
    const bookingForm = document.getElementById('bookingForm');
    bookingForm.addEventListener('submit', function(event) {
      event.preventDefault();

      // Validate number of persons
      const numPersonsField = document.getElementById('numPersons');
      const maxPersons = numPersonsField.max;
      if (parseInt(numPersonsField.value) > parseInt(maxPersons)) {
        alert(`The maximum number of persons allowed for this room is ${maxPersons}.`);
        return;
      }

      // After booking confirmation, open the payment modal
      const paymentModal = new bootstrap.Modal(document.getElementById('paymentModal'));
      paymentModal.show(); // This will trigger the payment modal
      // Close the booking modal if needed
      const modal = bootstrap.Modal.getInstance(document.getElementById('bookingModal'));
      modal.hide();
    });

    // Handle payment form submission
    // const paymentForm = document.getElementById('paymentForm');
    // paymentForm.addEventListener('submit', function(event) {
    //   event.preventDefault();

    //   // Hide the payment modal
    //   const paymentModal = bootstrap.Modal.getInstance(document.getElementById('paymentModal'));
    //   paymentModal.hide();

    //   // Show the success modal
    //   const successModal = new bootstrap.Modal(document.getElementById('successModal'));
    //   successModal.show();
    // });






    function confirmPayment() {
      // Hide the payment modal
      const paymentModal = new bootstrap.Modal(document.getElementById('paymentModal'));
      paymentModal.hide();

      // Show the success modal
      const successModal = new bootstrap.Modal(document.getElementById('successModal'));
      successModal.show();
    }

    // Handle the form submission for payment
    const paymentForm = document.querySelector('form');
    paymentForm.addEventListener('submit', function(event) {
      event.preventDefault(); // Prevent the form from submitting traditionally

      confirmPayment(); // Call the function to show the success modal
    });
  </script>



  <!-- Add Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-QF1QI9j8fW/8zQ4U5e6FJ5Q8j5p6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q6b6Q/>

</body>

</html>


  <?php
  if (isset($_POST['confirm'])) {

    // Include DB connection

    $r0 = $_SESSION['email'];
    echo $r0;
    $r1 = $_POST['r1']; // fullname
    $r2 = $_POST['r2']; // emailid
    $r3 = $_POST['r3']; // phnumber
    $r4 = $_POST['r4']; // country
    $r5 = $_POST['r5']; // room type
    $r6 = $_POST['r6']; // price
    $r7 = $_POST['r7']; // check-in
    $r8 = $_POST['r8']; // check-out
    $r9 = $_POST['r9']; // bed type
    $r10 = $_POST['r10']; // meal
    $r11 = $_POST['r11']; // no of persons
    $r12 = $_POST['r12']; // identity proof
    $paymentmethod = $_POST['paymentMethod']; // payment


    $sql = "INSERT INTO roomsbooking(cemail,fname,emailid,phnumber,country,roomtype,price,cin,cout,bedtype,meal,noofperson,identityproof,paymentmethod)VALUES ('$r0','$r1', '$r2', '$r3', '$r4', '$r5', '$r6', '$r7', '$r8', '$r9', '$r10', '$r11', '$r12', '$paymentmethod')";
   
    
    if (mysqli_query($conn, $sql)) {
	echo "<script>window.location.href = 'mypay.php';</script>";

	
    } else {
      echo "Error: " . mysqli_error($conn);
    }

    mysqli_close($conn);
  }
  ?>