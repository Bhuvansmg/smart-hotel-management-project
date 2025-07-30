<?php include("db.php"); ?>
<?php include("customernavbar.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Offers & Packages</title>
  <style>
    body {
      font-family: 'Segoe UI', sans-serif;
      background-color: #f8f9fb;
      margin: 0;
      padding: 0;
    }

    .container {
      max-width: 1200px;
      margin: auto;
      padding: 40px 20px;
    }

    h1 {
      text-align: center;
      margin-bottom: 20px;
      color:orangered;
    }

    .filters {
      text-align: center;
      margin-bottom: 30px;
    }

    .filters button {
      padding: 10px 20px;
      margin: 5px;
      border: none;
      background: #3498db;
      color: white;
      border-radius: 8px;
      cursor: pointer;
      transition: background 0.3s;
    }

    .filters button:hover {
      background: #2980b9;
    }

    .cards {
      display: flex;
      flex-wrap: wrap;
      gap: 80px;
      justify-content: center;
    }

    .card {
      background: #fff;
      border-radius: 12px;
      box-shadow: 0 4px 12px rgba(0,0,0,0.1);
      width: 280px;
      overflow: hidden;
      transition: transform 0.3s;
    }

    .card:hover {
      transform: translateY(-5px);
    }

    .card img {
      width: 100%;
      height: 180px;
      object-fit: cover;
    }

    .card-content {
      padding: 20px;
    }

    .card-content h3 {
      margin: 0 0 10px;
      color: #2c3e50;
    }

    .card-content p {
      font-size: 14px;
      margin-bottom: 10px;
    }

    .price {
      font-weight: bold;
      color: #e67e22;
    }
    /* footer style */
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

</head>
<body>

  <div class="container">
    <h1>Special Offers & Packages</h1>

    <div class="filters">
      <button onclick="filterOffers('all')">All</button>
      <button onclick="filterOffers('Family')">Family</button>
      <button onclick="filterOffers('Friends')">Friends</button>
      <button onclick="filterOffers('Buffet')">Buffet</button>
      <button onclick="filterOffers('Dessert')">Dessert</button>
    </div>
  
    <div class="cards" id="offersContainer"></div>
  </div>
 <?php include('footer.php'); ?>
 
  <script>
    const offers = [
      { title: "Family Feast Combo", category: "Family", description: "Meal for 4 with starters, main & desserts.", price: "₹999", image: "cimages/darkrrom.jpeg" },
      { title: "friends Night Dinner", category: "Romantic", description: "Romantic 3-course meal + drinks.", price: "₹1499", image: "cimages/o2.jpg" },
      { title: "Weekend Buffet Bonanza", category: "Buffet", description: "Unlimited buffet every weekend.", price: "₹799", image: "cimages/o4.jpg" },
      { title: "Dessert Lover's Delight", category: "Dessert", description: "3 desserts for the price of 2!", price: "₹299", image: "cimages/b1.jpg" },
      { title: "Kids Meal Pack", category: "Family", description: "Special meals designed for children.", price: "₹399", image: "cimages/k1.jpg" },
      { title: "Anniversary Special", category: "Romantic", description: "Complimentary cake + candlelight dinner.", price: "₹1799", image: "cimages/a1.jpg" },
      { title: "Lunch Buffet", category: "Buffet", description: "Weekday unlimited lunch buffet offer.", price: "₹599", image: "cimages/L1.jpg" },
      { title: "Sweet Tooth Sampler", category: "Dessert", description: "Try 5 mini-desserts in one plate!", price: "₹349", image: "cimages/s1.jpg" }
    ];

    const container = document.getElementById("offersContainer");

    function renderOffers(data) {
      container.innerHTML = '';
      data.forEach(offer => {
        const card = document.createElement("div");
        card.className = "card";
        card.innerHTML = `
          <img src="${offer.image}" alt="${offer.title}" />
          <div class="card-content">
            <h3>${offer.title}</h3>
            <p>${offer.description}</p>
            <div class="price">${offer.price}</div>
          </div>
        `;
        container.appendChild(card);
      });
    }

    function filterOffers(category) {
      if (category === 'all') {
        renderOffers(offers);
      } else {
        const filtered = offers.filter(offer => offer.category === category);
        renderOffers(filtered);
      }
    }

    // Initial render
    renderOffers(offers);
  </script>

</body>
</html>