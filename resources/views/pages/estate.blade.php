<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Estate Car – Pegasus Transfers</title>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;500;700&display=swap" rel="stylesheet">
  <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;500;700&display=swap" rel="stylesheet">
  <style>
    * {
      margin: 0; padding: 0; box-sizing: border-box;
      font-family: 'Inter', sans-serif;
    }

    html, body {
      height: 100%;
      background-color: #f8f8f8a9;
      color: #000;
    }

    .container {
      
  width: 100%;
  margin: 0 auto;
  padding-top: 60px; 
  animation: fadeIn 1s ease-in-out;
}


.top-back-button {
  text-align: justify;
  background-color: #f8f8f8a9;
  padding: 20px 0;
  position: relative;
  z-index: 10;
 
}

/* Actual Button Styling */
.top-back-button a {
  display: inline-block;
  background-color: #d35400;
  color: white;
  font-size: 16px;
  font-weight: 600;
  padding: 12px 20px;
  border-radius: 6px;
  text-decoration: none;
  box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
  transition: all 0.3s ease;
}

/* Hover Effect */
.top-back-button a:hover {
  background-color: #b84300;
  transform: scale(1.05);
}

    h1 {
      font-size: 38px;
      margin-bottom: 14px;
      color: #222;
      text-align: center;
      text-decoration: whitesmoke ;
    }
/* Back Button Container */
.top-back-button {
  text-align: justify;
  background-color: #f8f8f8a9;
  padding: 20px 0;
  position: relative;
  z-index: 10;
 
}

/* Actual Button Styling */
.top-back-button a {
  display: inline-block;
  background-color: #d35400;
  color: white;
  font-size: 16px;
  font-weight: 600;
  padding: 12px 20px;
  border-radius: 6px;
  text-decoration: none;
  box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
  transition: all 0.3s ease;
}

/* Hover Effect */
.top-back-button a:hover {
  background-color: #b84300;
  transform: scale(1.05);
}

    .car-image {
      width: 100%;
      max-height: 350px;
      object-fit: contain;
      background-color: #f5f5f591;
      padding: 20px;
      border-radius: 10px;
      margin-bottom: 24px;
      transition: transform 0.3s;
    }

    .car-image:hover {
      transform: scale(1.02);
    }

    .description {
      margin-bottom: 30px;
      text-align: center;
    }

    .description p {
      font-size: 15px;
      color: #444;
      max-width: 900px;
      margin: 0 auto;
    }

    .features {
  display: flex;
  flex-wrap: wrap;
  gap: 20px;
  justify-content: center;
  padding: 40px 20px;
  background: #f7f7f7;
}

.feature-box {
  position: relative;
  flex: 1 1 220px;
  min-height: 180px;
  background: #ffffff;
  border-radius: 12px;
  padding: 25px 20px;
  text-align: center;
  box-shadow: 0 4px 12px rgba(0, 0, 0, 0.08);
  overflow: hidden;
  transition: transform 0.3s ease, color 0.4s ease;
  z-index: 0;
}

/* Hover gradient effect */
.feature-box::before {
  content: "";
  position: absolute;
  top: 0;
  left: -100%;
  width: 100%;
  height: 100%;
  background: linear-gradient(to right, #f37c06, #f5ab61);
  transition: left 0.6s ease;
  z-index: 1;
}

.feature-box:hover::before {
  left: 0;
}

/* Icon style */
.feature-box i {
  font-size: 2.5rem;
  margin-bottom: 12px;
  color: #f37c06;
  transition: color 0.3s ease;
}

/* Text above background */
.feature-box * {
  position: relative;
  z-index: 2;
}

/* Hover effects */
.feature-box:hover h4,
.feature-box:hover p,
.feature-box:hover i {
  color: white;
  text-shadow: 0 0 10px rgba(255, 255, 255, 0.6);
  font-weight: 600;
}

.feature-box:hover {
  transform: translateY(-5px);
}

    button.toggle-info,
    button.toggle-luggage {
      background-color: #d35400;
      color: white;
      padding: 10px 20px;
      border: none;
      border-radius: 6px;
      cursor: pointer;
      font-weight: bold;
      margin: 15px auto;
      display: block;
      transition: background-color 0.3s;
    }

    button:hover {
      background-color: #b84300;
    }
.toggle-luggage {
  background-color: #d35400;
  color: white;
  padding: 10px 22px;
  border: none;
  border-radius: 6px;
  cursor: pointer;
  font-weight: bold;
  font-size: 16px;
  transition: background-color 0.3s;
  white-space: nowrap;
}

.toggle-luggage:hover {
  background-color: #b84300;
}

    .extra-info {
      display: none;
      margin-top: 15px;
      font-size: 14px;
      color: #555;
      max-width: 900px;
      margin-left: auto;
      margin-right: auto;
      text-align: center;
    }

    /* ✅ Luggage Reference Full Width */
.luggage-reference {
  width: 100%;
  background: linear-gradient(to right, #fff9f2, #fff);
  padding: 60px 20px;
}

.luggage-wrapper {
  max-width: 1200px;
  margin: 0 auto;
  text-align: center;
}
.luggage-wrapper h2 {
  font-size: 26px;
  color: #d35400;
  margin-bottom: 10px;
}

.luggage-wrapper p {
  color: #555;
  margin-bottom: 20px;
}

.luggage-chart {
  width: 100%;
  max-width: 600px;
  border-radius: 10px;
  margin: 0 auto 30px;
  display: block;
}

/* ✅ Luggage Table Styling */
.luggage-table {
  width: 100%;
  border-collapse: collapse;
  margin-bottom: 20px;
}

.luggage-table th {
  background-color: #d35400;
  color: white;
  padding: 12px;
  font-size: 16px;
}

.luggage-table td {
  padding: 12px;
  font-size: 15px;
  border: 1px solid #ddd;
}


.quick-highlights {
  background-color: #fff8f2;
  padding: 20px;
  border-radius: 10px;
  margin-top: 30px;
  border-left: 4px solid #d35400;
  text-align: left;
  max-width: 800px;
  margin-left: auto;
  margin-right: auto;
}

.quick-highlights p {
  font-size: 15px;
  margin: 6px 0;
  color: #333;
}

button.toggle-info,
    button.toggle-luggage {
      background-color: #d35400;
      color: white;
      padding: 10px 20px;
      border: none;
      border-radius: 6px;
      cursor: pointer;
      font-weight: bold;
      margin: 15px auto;
      display: block;
      transition: background-color 0.3s;
    }

    button:hover {
      background-color: #b84300;
    }
.toggle-luggage {
  background-color: #d35400;
  color: white;
  padding: 10px 22px;
  border: none;
  border-radius: 6px;
  cursor: pointer;
  font-weight: bold;
  font-size: 16px;
  transition: background-color 0.3s;
  white-space: nowrap;
}

.toggle-luggage:hover {
  background-color: #b84300;
}

    .extra-info {
      display: none;
      margin-top: 15px;
      font-size: 14px;
      color: #555;
      max-width: 900px;
      margin-left: auto;
      margin-right: auto;
      text-align: center;
    }

    .luggage-image {
      display: block;
      margin: 0 auto 20px;
      width: 100%;
      max-width: 750px;
      border-radius: 10px;
    }

.interactive-cards {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
  gap: 20px;
  margin: 50px 0;
  padding: 0 20px;
}

.card {
  position: relative;
  background: #fff;
  padding: 60px 20px;
  text-align: center;
  font-size: 15px;
  color: #333;
  border-radius: 12px;
  cursor: pointer;
  overflow: hidden;
  transition: all 0.4s ease;
  box-shadow: 0 0 10px rgba(0,0,0,0.05);
  height: 420px;
  width: auto;

}

.card:hover {
  color: white;
  background-size: cover;
  background-position: center;
  transform: scale(0.8);
}
.card::before {
  content: "";
  position: absolute;
  top: 0; left: 0;
  width: 300px;
  height: 600%;
 background: linear-gradient( top right, rgba(212, 123, 20, 0.877),
    transparent
  );
  transform: translate(100%, 100%) rotate(360deg); 
  transform-origin: center;
  transition: transform 0.6s ease;
  z-index: 1;
}

.card:hover::before {
  transform: translate(0, 0) rotate(-90deg); }


.card:hover p {
  opacity: 0;
  transition: 0.3s ease;
}


.card::after {
  content: '';
  position: absolute;
  bottom: 0;
  left: 0;
  height: 100%;
  width: 100%;
  background: linear-gradient(
    to top right,
    rgba(226, 140, 12, 0.699),
    transparent
  );
  z-index: 1;
  transform: skewY(-3deg); /* diagonal feel */
  transform-origin: bottom left;
}

.card:hover::after {
  background-image: url('');
  background-size: cover;
  background-position: center;
}

.card-content {
  position: relative;
  z-index: 2;
}

.card-content i {
  font-size: 40px;
  color: #d35400; /* Orange suitcase */
  margin-bottom: 12px;
  transition: transform 0.3s;
}

.card-content h3 {
  font-size: 20px;
  font-weight: 700;
  color: #222;
  margin-bottom: 10px;
  transition: color 0.3s;
}

.card-content p {
  font-size: 15px;
  color: #444;
  line-height: 1.5;
  margin: 0 auto;
  max-width: 220px;
  transition: opacity 0.3s ease;
}

.card:hover .card-content p {
  opacity: 0;
}

.card:hover .card-content h3 {
 opacity: 0;
}
.card:hover .card-content i {
  color: #fff;
  transform: scale(1.1);
}


.card-bg {
  position: absolute;
  top: 0;
  left: 0;
  height: 100%;
  width: 100%;
  background-size: contain;        
  background-repeat: no-repeat;  
  background-position: center;     
  opacity: 0;
  transform: scale(1);
  transition: opacity 0.3s ease, transform 0.4s ease;
  
  z-index: 1;
}


.card:hover .card-bg {
  opacity: 1;
  transform: scale(1.1);
}

.card-content {
  position: relative;
  z-index: 2;
  transition: opacity 0.3s ease;
}

.card:hover .card-content {
  opacity: 0;
}

.contact-section {
  margin: 60px auto;
  padding: 40px 25px;
  max-width: 900px;
  background: linear-gradient(135deg, #ffffff, #f9f4ee);
  border-radius: 16px;
  border-left: 6px solid #d35400;
  box-shadow: 0 8px 20px rgba(0, 0, 0, 0.06);
  position: relative;
  overflow: hidden;
  transition: transform 0.3s;
}
.contact-section:hover::before {
  content: "";
  position: absolute;
  top: 0;
  left: -75%;
  width: 50%;
  height: 100%;
  background: linear-gradient(120deg, rgba(255, 255, 255, 0.2), rgba(255,255,255,0));
  transform: skewX(-25deg);
  animation: shine 1s ease;
}
@keyframes shine {
  0% {
    left: -75%;
  }
  100% {
    left: 125%;
  }
}
.contact-section h2 {
  font-size: 26px;
  color: #222;
  margin-bottom: 12px;
  text-align: center;
}
.contact-section h2 i {
  color: #d35400;
  margin-right: 8px;
}
.subtitle {
  text-align: center;
  font-size: 15px;
  color: #555;
  margin-bottom: 25px;
}
.contact-details {
  display: flex;
  flex-direction: column;
  align-items: left; 
  gap: 14px;
  padding-left: 60px;
}
.contact-item {
  display: flex;
  align-items: center;
  font-size: 16px;
  color: #333;
  text-align: center;
}
.contact-item i {
  color: #088833;
  margin-right: 10px;
  min-width: 24px;
  text-align: left;
}
.contact-item a {
  color: #d35400;
  text-decoration: none;
  transition: color 0.3s;
}
.contact-item a:hover {
  color: #b84300;
}
    footer {
      text-align: center;
      font-size: 14px;
      color: #777;
      margin-top: 50px;
    }
 @keyframes fadeIn {
      from { opacity: 0; transform: translateY(30px); }
      to { opacity: 1; transform: translateY(0); }
    }
    @keyframes fadeUp {
  from {
    opacity: 0;
    transform: translateY(30px);
  }
  to {
    opacity: 1;
    transform: translateY(0);
  }
}

    footer {
      text-align: center;
      font-size: 14px;
      color: #777;
      margin-top: 50px;
    }
 @keyframes fadeIn {
      from { opacity: 0; transform: translateY(30px); }
      to { opacity: 1; transform: translateY(0); }
    }
   
  </style>
</head>
<body>

  <div class="container">
   <div class="top-back-button">
  <a href="homepage.html">← Back to Home</a>
</div>

    <h1 style="  font-family: 'Playfair Display', serif;">Estate Car</h1>
    <img src="images/estatecar-removebg-preview.png" alt="Estate Car" class="car-image" />

    <div class="description">
      <p>The Estate Car is ideal for passengers needing more luggage space while retaining a comfortable sedan-style ride. Vehicles like the Toyota Prius+ or Ford Mondeo Estate provide a perfect balance between passenger comfort and cargo capacity.</p>
    </div>

    <div class="features">
      <div class="feature-box">
          <i class="fas fa-users"></i>
        <h4>Capacity</h4>
        <p>Up to 4 passengers</p>
      </div>
      <div class="feature-box">
         <i class="fas fa-suitcase-rolling"></i>
        <h4>Luggage</h4>
        <p>3 carry-ons or 3 standard check-in,
or 3 extra large check-in bag</p>
      </div>
      <div class="feature-box">
        <i class="fas fa-snowflake"></i>
        <h4>Comfort</h4>
        <p>Rear AC vents, ample boot space</p>
      </div>
      <div class="feature-box">
         <i class="fas fa-star"></i>
        <h4>Recommended For</h4>
        <p>Travelers with luggage or airport pickups</p>
      </div>
    </div>

    <button class="toggle-info" onclick="toggleInfo()">Show More Details</button>
    <div class="extra-info" id="moreInfo">
      <p>Our Estate Cars are cleaned daily, feature extended boot space, and are perfect for travelers carrying extra items. Pets and child seats can be accommodated with advance notice.</p>
    </div>
<div style="height: 30px;"></div>
    <!-- Luggage Capacity Section -->
 <div style="background: white;">
  <div style="max-width: 1200px; margin: auto; padding: 40px 20px;">
    <h2 style="font-size: 30px; text-align: center; margin-bottom: 30px; color: #222;">
      Luggage Capacity Guidance
    </h2>
<p>Compare your bags to the standard size guidelines below:</p>


    <table class="luggage-table">
      <thead>
        <tr>
          <th>Luggage Type</th>
          <th>Max Dimensions (cm)</th>
          <th>Max Dimensions (inches)</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Personal Items</td>
          <td>45 x 30 x 20</td>
          <td>18 x 12 x 8</td>
        </tr>
        <tr>
          <td>Carry-on Bags</td>
          <td>55 x 45 x 25</td>
          <td>22 x 18 x 10</td>
        </tr>
        <tr>
          <td>Standard Check-In</td>
          <td>66 x 44 x 27</td>
          <td>26 x 17 x 10</td>
        </tr>
        <tr>
          <td>Extra Large Check-In</td>
          <td>78 x 55 x 30</td>
          <td>31 x 22 x 12</td>
        </tr>
      </tbody>
    </table>
  </div>
</section>



<section>
<div class="interactive-cards">
  <div class="card" data-img="estate1.png">
     <div class="card-bg"></div> <!-- ✅ ADD THIS LINE -->
    <div class="card-content">
      <i class="fas fa-suitcase-rolling"></i>
      <h3>3 Standard</h3>
      <p>Ideal for short city trips with.</p>
    </div>
  </div>
  <div class="card" data-img="estate2.png">
    <div class="card-content">
      <i class="fas fa-suitcase-rolling"></i>
      <h3>1 Standard - 1 Extra Large</h3>
      <p>Perfect for airport rides with medium luggage.</p>
    </div>
  </div>
  <div class="card" data-img="estate3.png">
    <div class="card-content">
      <i class="fas fa-suitcase-rolling"></i>
      <h3>4 Small Carry-on</h3>
      <p>Great for corporate travel with hand luggage.</p>
    </div>
  </div>
</div>


</section>
<section class="contact-section">
  <h2>
    <i class="fas fa-headset"></i> Need Help? Contact Us
  </h2>
  <p class="subtitle">Still unsure? Reach out — we’re happy to assist.</p>
  <div class="contact-details">
    <div class="contact-item">
      <i class="fas fa-phone-alt"></i>
      <span><strong>Phone:</strong> <a href="tel:+442030062690">+44 2030 062690</a></span>
    </div>
    <div class="contact-item">
      <i class="fas fa-envelope"></i>
      <span><strong>Email:</strong> <a href="mailto:leccars7@gmail.com">leccars7@gmail.com</a></span>
    </div>
    <div class="contact-item">
      <i class="fab fa-whatsapp"></i>
      <span><strong>WhatsApp:</strong> <a href="https://wa.me/447354438757">+44 7354 438757</a></span>
    </div>
  </div>
</section>
    <footer>
      © 2025 Pegasus Minicab London 
    </footer>
  </div>

  <script>
    function toggleInfo() {
      const info = document.getElementById('moreInfo');
      info.style.display = info.style.display === 'block' ? 'none' : 'block';
    }
  </script>
<script>
  document.querySelectorAll('.card').forEach(card => {
    const imageUrl = card.getAttribute('data-img');
    const bgDiv = document.createElement('div');
    bgDiv.className = 'card-bg';
    bgDiv.style.backgroundImage = `url(${imageUrl})`;
    card.insertBefore(bgDiv, card.firstChild);
  });
</script>
</body>
</html>
