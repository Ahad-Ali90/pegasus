<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <meta name="google" content="notranslate">

  <title>Pegasus Transfers – Business Overview</title>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;500;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <link rel="stylesheet" href="styles.css">
  <style>
    * { margin: 0; padding: 0; box-sizing: border-box; font-family: 'Inter', sans-serif; }
    body, html {
      height: 100%; 
      scroll-behavior: smooth; 
      background: #fff; 
      color: #000; 
    }
    


     .top-bar {
  display: flex;
  justify-content: space-between;
  align-items: center;
  padding: 6px 20px;
  background-color: #ffffff;
  color: #000000;
  font-size: 15px;
  font-weight: 500;
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  z-index: 20;
}

.top-left,
.top-center,
.top-right {
  display: flex;
  align-items: center;
  gap: 20px;
}

.top-center {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translateX(-50%);
  width: 180px;
}

   .top-bar i {
  margin-right: 6px;
  color: #2bc94d;
  font-size: 18px;
}

.email-icon {
  font-size: 20px;
  color: #2bc94d;
}
.phone-icon {
  color: #2bc94d;
  font-size: 18px;
  margin-right: 6px;
}

.whatsapp-icon {
  font-size: 22px;
  font-weight: 900;
  color: #25D366;
  margin-right: 6px;
  margin-left: 12px; 
}
.gradient-text {
  background-image: linear-gradient(to right, #ffc966, #ffe7ba, #ffc219f5);
  background-clip:text ;
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
}
.promo-badge {
  background: linear-gradient(to right, #00000054, #cec7c14d, #0a0a0a54);
  padding: 0px 24px; 
  border-radius: 5px;
  
  display: flex;
  align-items: center;
  gap: 10px;
  z-index: 10;
  font-family: 'Playfair Display', serif;
  font-style: italic;
  border: 2px solid rgba(255, 255, 255, 0.685);
  animation: pulseZoom 2s infinite ease-in-out;
  white-space: nowrap;
}

.promo-badge .promo-text {
  color: #111;
  font-weight: 700;
  font-size: 15px;
  letter-spacing: 0.5px;
}

.promo-badge .big-star {
  font-size: 20px;
  color: gold;
}


.promo-text .highlight {
  color: green;
  text-decoration: underline;
}

@keyframes pulseZoom {
  0%, 100% {
    transform: translate(-50%, -50%) scale(1);
  }
  50% {
    transform: translate(-50%, -50%) scale(1.08);
  }
}

@keyframes sparkle {
  0%, 100% {
    text-shadow: 0 0 3px gold, 0 0 6px #ffd700;
  }
  50% {
    text-shadow: 0 0 10px #fff700, 0 0 15px gold;
  }
}

  header {
  width: 100%;
  padding: 6px 30px; 
   background: linear-gradient(to right, #282B2B, #000000);
  box-shadow: 0 0 15px rgba(0,0,0,0.1);
  display: flex;
  justify-content: space-between;
  align-items: center;
  position: fixed;
  top: 28px;
  left: 0;
  z-index: 10;
  height: 60px;
}
.gradient-text {
  background-image: linear-gradient(to right, #ffc966, #ffe7ba, #ffc219f5);
  background-clip:text ;
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
}
    .logo-gif {
      height: 200px;
      width: 200px;
      object-fit: contain;
      display: block;
      margin: 0%;
    }
   nav ul {
  display: flex;
  list-style: bold;
  gap: 30px;
  padding-right: 0px; 
  margin-left: 200px; 
  margin-right: 0% ;
}

nav ul li {
  display: flex;
  align-items: center;
  position: relative;
}

nav ul li a,
nav ul li .dropdown-toggle {
  display: flex;
  align-items: center;
  height: 100%;
}
nav ul li a {
  text-decoration: none;
  font-weight: bold;
  font-size: 17px;
  background: linear-gradient(to right, #ffc966, #ffe7ba, #ffc219f5);
  background-clip: text;
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
  transition: 0.3s;
   padding: 6px 10px;
  line-height: 1;
}


nav ul li a:hover {
  color: #a2d330 !important;
}

.contact-outline {
  display: inline-flex;
  align-items: center;
  gap: 8px;
   padding: 6px 14px;
  line-height: 1;
  border: 2px solid #CF8852;
  border-radius: 30px;
  background: transparent;
  transition: all 0.3s ease;
  font-size: 17px;
  font-weight: bold;


  background: none !important;
  -webkit-text-fill-color: initial !important;
  color: inherit !important;
}

.contact-text {
   background-image: linear-gradient(to right, #ffc966, #ffe7ba, #ffc219f5);
 background-clip: text;
   -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
  display: inline-block;
}

.phone-icon {
  color: #32cd32;

  animation: ring 1.5s infinite;
}


.contact-outline:hover {
  box-shadow: 0 0 12px rgba(255, 193, 25, 0.6);
  transform: translateY(-2px);
}

@keyframes ring {
  0% { transform: rotate(0deg); }
  10% { transform: rotate(15deg); }
  20% { transform: rotate(-15deg); }
  30% { transform: rotate(10deg); }
  40% { transform: rotate(-10deg); }
  50% { transform: rotate(5deg); }
  60% { transform: rotate(-5deg); }
  70% { transform: rotate(0deg); }
  100% { transform: rotate(0deg); }
}

.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-menu {
  position: absolute;
  top: 100%;
  left: 50%;
  transform: translateX(-50%);
  background-color: #ffffff;
  list-style: none;
  padding: 0;
  margin: 0;
  min-width: 200px;
  border-radius: 6px;
  box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
  display: none;
  z-index: 999;
}

.dropdown:hover .dropdown-menu {
  display: block;
}

.dropdown-menu li a {
  display: block;
  padding: 12px 18px;
  text-decoration: none;
  font-size: 15px;
  font-weight: 500;
  color: #000 !important;       
  background-color: #fff !important;
  -webkit-text-fill-color: initial !important;
}

.dropdown-menu li a:hover {
  background-color: #ffe6c7;
  color: #f57c00 !important;
}

.menu-toggle {
  display: none;
  cursor: pointer;
  padding: 10px;
  z-index: 1000;
}

.menu-toggle i {
  color: #ffc219f5;
  font-size: 24px;
}

.menu-toggle {
  display: none;
  cursor: pointer;
  padding: 10px;
  z-index: 1000;
}

.menu-toggle i {
  color: #ffc219f5;
  font-size: 24px;
}

.menu-toggle {
  display: none;
  background: none;
  border: none;
  cursor: pointer;
  padding: 10px;
  z-index: 1001;
}

.menu-icon {
  font-size: 28px;
  color: #ffc219f5;
}

@media (max-width: 1024px) {
  .menu-toggle {
    position: absolute;
    right: 20px;
    top: 50%;
    transform: translateY(-50%);
    font-size: 28px;
    color: #ffc219f5;
    cursor: pointer;
    z-index: 1100;
     width: 40px;
  height: 40px;
  display: flex;
  align-items: center;
  justify-content: center;
  }

  #main-nav {
    position: fixed;
    top: 115px;
    left: -100%;
    width: 80%;
    max-width: 300px;
    height: calc(100vh - 115px);
    background: linear-gradient(to bottom, #1a1a1a, #000);
    transition: left 0.3s ease;
    z-index: 1000;
    overflow-y: auto;
    padding: 20px 0;
  }

  #main-nav.active {
    left: 0;
  }

  .nav-list {
    display: flex;
    flex-direction: column;
    align-items: flex-start; 
    padding: 0;
    margin: 0;
  }

  .nav-list li {
    width: 100%;
  }

  .nav-link {
    text-align: left;
    width: 100%;
    padding: 15px 25px;
  }
  .dropdown-menu {
    position: static;
    transform: none;
    width: 100%;
    background-color: rgba(0, 0, 0, 0.7);
    border-left: 4px solid #ffc219f5;
    padding-left: 20px;
    max-height: 0;
    overflow: hidden;
    transition: max-height 0.3s ease;
  }

  .dropdown.active .dropdown-menu {
    max-height: 500px;
  }

  .dropdown-menu li a {
    color: white !important;
    padding: 12px 20px;
    display: block;
    border-bottom: 1px solid rgba(255, 255, 255, 0.1);
  }

  .dropdown-menu li a:hover {
    background-color: rgba(255, 255, 255, 0.1);
    color: #ffc219f5 !important;
  }

  .nav-overlay {
    position: fixed;
    top: 115px;
    left: 0;
    width: 100%;
    height: calc(100vh - 115px);
    background: rgba(0,0,0,0.5);
    z-index: 999;
    opacity: 0;
    visibility: hidden;
    transition: all 0.3s;
  }

  .nav-overlay.active {
    opacity: 1;
    visibility: visible;
  }
}
.icon-only {
  display: flex;
  align-items: center;
  gap: 4px;
  text-decoration: none;
  color: inherit;
  font-size: 15px;
}


.promo-badge {
  display: flex;
  align-items: center;
  gap: 8px;
}

@media (max-width: 768px) {
  .top-bar {
    flex-direction: row;
    justify-content: space-between;
    align-items: center;
    padding: 6px 12px;
    background: #ffffff;
    border-bottom: 1px solid #ccc;
    top: 0;
    position: fixed;
    z-index: 1000;
  }

  .top-left {
    display: flex;
    align-items: center;
    gap: 10px;
    border-right: 1px solid #ccc;
    padding-right: 10px;
  }

  .top-right {
    display: flex;
    gap: 4px;
    align-items: center;
  }
  .text-only {
    display: none !important;
  }

  .promo-badge {
    font-size: 12px;
    padding: 4px 10px;
    gap: 14px;
    background: #f8f8f8;
    border-radius: 6px;
    border: 1px solid #ddd;
    display: flex;
    align-items: center;
    white-space: nowrap;
    margin-left: 50%;
    margin-right: 12px;
    position: static;
    transform: none;
  }

  .promo-badge .promo-text {
    font-size: 12px;
    font-weight: 600;
  }

  .promo-badge .big-star {
    font-size: 14px;
  }

  header {
    top: 50px !important;
  }

  .nav-overlay,
  #main-nav {
    top: 50px !important;
    height: calc(100vh - 50px);
  }
}




body {
  font-family: 'Inter', sans-serif;
  margin: 0;
  padding: 0;
  background: #fff;
  color: #000;
}

.hero-wrapper {
  margin-top: 50px;
  width: 100%;
}


.hero-banner-container {
  position: relative;
  width: 100%;
  height: 460px;
  overflow: hidden;
  object-fit: contain;
}

.hero-banner-container img {
  width: 100%;
  height: 100%;
  object-fit: cover;
  object-position: center 25%;
  display: block;
}

.hero-button {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
   background: linear-gradient(to right, red, orange);
  color: white;
  padding: 12px 28px;
  border-radius: 6px;
  text-decoration: none;
  font-weight: bold;
  font-size: 16px;
  z-index: 2;
  transition: background 0.3s ease;
}

.hero-button:hover {
  background: orangered;
}

.trustpilot-badge {
  position: absolute;
  bottom: 20px;
  left: 50%;
  transform: translateX(-50%);
  z-index: 3;
  background: rgba(252, 252, 252, 0.521);
  padding: 6px 12px;
  border-radius: 6px;
  box-shadow: 0 4px 12px rgb(202, 191, 191);
}

.trustpilot-badge img {
  height: 28px;
  display: block;
}
.below-image-heading {
  text-align: center;
  font-size: 32px;
  color: #111;
  margin-top: 30px;
  font-weight: 700;
  font-family: 'Playfair Display', serif;
}

.overview-section {
  padding: 60px 20px;
  max-width: 1000px;
  margin: auto;
  text-align: center;
  font-family: 'Playfair Display', serif;
}

/* BENEFITS */
.benefits-section {
  background: #f8f8f8;
  padding: 60px 20px;
}

.benefit-wrapper {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(240px, 1fr));
  gap: 30px;
  max-width: 1100px;
  margin: auto;
}

.benefit-card {
  background: white;
  padding: 30px 20px;
  border-radius: 10px;
  box-shadow: 0 4px 10px rgba(0, 0, 0, 0.05);
  text-align: center;
  transition: 0.3s ease;
}

.benefit-card h3 {
  font-size: 18px;
  margin-bottom: 10px;
}

.benefit-card p {
  font-size: 14px;
  color: #555;
  line-height: 1.5;
}

.benefit-card i {
  font-size: 36px;
  color: #f37c06;
  margin-bottom: 15px;
}
.partner-logos-section {
  background: #fff;
  padding: 40px 0;
  overflow: hidden;
  border-top: 1px solid #eee;
  border-bottom: 1px solid #eee;
}

.logos-wrapper {
  width: 100%;
  overflow: hidden;
  position: relative;
}

.logos-h1 {
  text-align: center;
  right: 10%;
   font-size: 22px;
      font-weight: 600;
      font-family: 'Playfair Display', serif;
      color:#f37c06;
}
.logos-track {
  display: flex;
  width: max-content;
  animation: scroll-logos 25s linear infinite;
}

.logos-track img {
  height: 100px;
  max-width: 180px;
  object-fit: contain;
  margin: 0 20px;
  transition: transform 0.4s ease;
}

.logos-track img:hover {
  transform: scale(1.05);
}


@keyframes scroll-logos {
  0% {
    transform: translateX(0%);
  }
  100% {
    transform: translateX(-70%);
  }
}

/* CTA */
.cta-section {
  background: #eff5f4;
  color: rgb(0, 0, 0);
  text-align: center;
  padding: 60px 20px;
}

.cta-section a.btn-primary {
  margin-top: 20px;
   background: linear-gradient(to right, red, orange);
  color: rgb(0, 0, 0);
  padding: 12px 28px;
  border-radius: 6px;
  text-decoration: none;
  display: inline-block;
  transition: background 0.3s ease;
}

.cta-section a.btn-primary:hover {
  background: orangered;
}

.footer-full {
  background: #000;
  color: #fcfcfc;
  padding: 60px 20px 30px;
    margin-top: 75px;
  font-size: 17px; 
}
.footer-main {
  display: flex;
  flex-wrap: wrap;
  gap: 50px;
  justify-content: space-between;
  max-width: 1200px;
  margin: auto;
}

.footer-main div {
  min-width: 200px;
  flex: 1;
}

.footer-main h4 {
  color: #ffffff;
  margin-bottom: 19px;
  font-size: 16px;
  font-family: 'Playfair Display', serif;
}

.footer-main ul {
  list-style: none;
  padding: 0;
  font-family: 'Playfair Display', serif;
}

.footer-main li {
  margin-bottom: 12px;
  font-size: 16px;
  line-height: 1.5;
  font-family: 'Playfair Display', serif;
}

.footer-main a {
  color: #f57c00;
  text-decoration: none;
  font-family: 'Playfair Display', serif;
  transition: color 0.3s;
}

.footer-main a:hover {
  color: #fff;
}

.footer-bottom {
  margin-top: 50px;
  text-align: center;
  border-top: 1px solid #333;
  padding-top: 20px;
  font-size: 16px;
  font-family: 'Playfair Display', serif;
}

.footer-bottom .social {
  margin-top: 10px;
}

.footer-bottom .social i {
  color: #ccc;
  margin: 0 10px;
  cursor: pointer;
  transition: color 0.3s;
}

.footer-bottom .social i:hover {
  color: #f57c00;
}
.license-img {
  display: block;
  margin-top: 10px;
  margin-left: auto;
  margin-right: 3px;
  width: 120px;
  border: 1px solid #ccc;
  border-radius: 4px;
}

/* Responsive */
@media (max-width: 768px) {
  .footer-main {
    flex-direction: column;
    align-items: right;
    text-align: center;
  }
  .hero-banner-container{
    object-fit: contain;
  }
}


@media (max-width: 768px) {
  .hero {
    padding-left: 5%;
    justify-content: center;
    text-align: center;
  }

  .hero h1 {
    font-size: 28px;
  }

  .hero p {
    font-size: 16px;
  }

  .benefit-wrapper {
    grid-template-columns: 1fr;
  }
}

  </style>
  
 <body>
<div class="top-bar">
 
  <div class="top-left">
    <a href="mailto:leccars7@gmail.com" class="icon-only">
      <i class="fa-regular fa-envelope email-icon"></i>
      <span class="text-only">leccars7@gmail.com</span>
    </a>
  </div>

  <div class="top-center">
    <div class="promo-badge">
      <span class="big-star">★</span>
      <span class="promo-text">Get <span class="highlight">10%</span> Off on Your First Ride!</span>
      <span class="big-star">★</span>
    </div>
  </div>

  <div class="top-right">
    <a href="tel:+442030062690" class="icon-only">
      <i class="fas fa-phone phone-icon"></i>
      <span class="text-only">+44 2030 062690</span>
    </a>

    <a href="https://wa.me/447354438757?text=Hello%2C%20I%20would%20like%20to%20book%20a%20ride" target="_blank" class="icon-only">
      <i class="fab fa-whatsapp whatsapp-icon"></i>
      <span class="text-only">+44 7354 438757</span>
    </a>
  </div>
</div>


 <header>
  <div class="logo-gif">
    <img src="images/" alt="Logo" class="logo-gif">
  </div>

  <button class="menu-toggle" id="mobile-menu" aria-label="Toggle navigation">
    <span class="menu-icon">☰</span>
  </button>

  <nav id="main-nav">
   <ul class="nav-list">
       <li><a href="homepage.html" class="nav-link"><span class="gradient-text">Home</span></a></li>
      <li class="dropdown">
        <a href="#" class="nav-link dropdown-toggle">
          <span class="gradient-text">Our Services</span>
        </a>
        <ul class="dropdown-menu">
          <li><a href="airporttransfers.html" class="nav-link">Airport Transfers</a></li>
          <li><a href="hourlyhire.html" class="nav-link">Hourly Hire</a></li>
          <li><a href="citytocityrides.html" class="nav-link">City to City Rides</a></li>
        </ul>
      </li>

      <li class="dropdown">
        <a href="#" class="nav-link dropdown-toggle"><span class="gradient-text">For Business</span></a>
        <ul class="dropdown-menu">
          <li><a href="overview.html" class="nav-link">Overview</a></li>
          <li><a href="coorporation.html"class="nav-link">Corporations</a></li>
          <li><a href="travelagenncies.html"class="nav-link">Travel Agencies</a></li>
        </ul>
      </li>
      
      <li><a href="forChauffeurs.html" class="nav-link"><span class="gradient-text">For Chauffeurs</span></a></li>

      <li class="dropdown">
        <a href="#" class="nav-link dropdown-toggle"><span class="gradient-text">Languages</span></a>
        <ul class="dropdown-menu language-dropdown">
          <li><a href="#" onclick="changeLanguage('en')">English</a></li>
          <li><a href="#" onclick="changeLanguage('es')">Español</a></li>
          <li><a href="#" onclick="changeLanguage('ch')">Español</a></li>
          <li><a href="#" onclick="changeLanguage('jp')">Español</a></li>
          <li><a href="#" onclick="changeLanguage('ar')">Español</a></li>
          <li><a href="#" onclick="changeLanguage('fr')">Español</a></li>

        </ul>
      </li>
<li>
        <a href="contactus.html" class="contact-outline nav-link">
          <i class="fas fa-phone phone-icon"></i>
          <span class="contact-text">Contact Us</span>
        </a>
      </li>
    </ul>
  </nav>
  
  <!-- Mobile menu overlay -->
  <div class="nav-overlay" id="nav-overlay"></div>
</header>


<section class="hero-wrapper">

 <div style ="height: 50px;">

 </div> 

  <div class="hero-banner-container">
    <img src="images/shutterstock_2389405899.jpg" alt="Professional Chauffeur Service" />
 
   <section class="trustpilot-badge">
  <p>Rated Excellent on <strong>Trustpilot</strong> 🌟🌟🌟🌟🌟</p>
  <a href="https://www.trustpilot.com/evaluate/www.pegasustransfers.com" target="_blank">Leave us a review</a>
</section>

    <a href="#benefits" class="hero-button">Explore Benefits</a>
  </div>

  
  <h2 class="below-image-heading">Business Professionals Choose Pegasus Transfers</h2>
</section>



<section class="overview-section">
  <h2>Why Businesses Trust Pegasus Transfers</h2>
  <p>We’re more than a minicab service — we’re your professional travel partner. With dedicated business support, executive chauffeurs, and reliable airport pickups, your company will always be in motion with comfort and class.</p>
</section>

<section class="benefits-section" id="benefits">
  <div class="benefit-wrapper">
    <div class="benefit-card">
      <i class="fas fa-globe-europe"></i>
      <h3>Corporate Travel Worldwide</h3>
      <p>Seamless business rides across London and beyond, including international client pickups.</p>
    </div>
    <div class="benefit-card">
      <i class="fas fa-user-shield"></i>
      <h3>Executive-Class Chauffeurs</h3>
      <p>Well-trained professionals, in-suit and on-time, fluent in etiquette and multilingual support.</p>
    </div>
    <div class="benefit-card">
      <i class="fas fa-headset"></i>
      <h3>Priority Support</h3>
      <p>Fast, reliable support for corporate accounts 24/7 — by phone, email, or WhatsApp.</p>
    </div>
    <div class="benefit-card">
      <i class="fas fa-leaf"></i>
      <h3>Eco-Friendly Fleet</h3>
      <p>Hybrid and electric executive vehicles available to reduce your carbon footprint.</p>
    </div>
  </div>
</section>
<section class= "logos-h1">
  <h1>
    Official booking partner for:
  </h1>

</section>


<section class="partner-logos-section">
  <div class="logos-wrapper">
    <div class="logos-track">

      <img src="images/finaltalixo.png" alt="partner 1"/>
      <img src="images/wewlcome pick.png" alt="Partner 2" />
      <img src="images/transfers.png" alt="Partner 3" />
      <img src="images/hoppa.png" alt="Partner 4" />
      <img src="images/kiwitaxi.png" alt="Partner 5" />
      <img src="images/mozio.png" alt="Partner 6" />
      <img src="images/booking.png" alt="Partner 7" />


     <img src="images/finaltalixo.png" alt="partner 1"/>
      <img src="images/wewlcome pick.png" alt="Partner 2" />
      <img src="images/transfers.png" alt="Partner 3" />
      <img src="images/hoppa.png" alt="Partner 4" />
      <img src="images/kiwitaxi.png" alt="Partner 5" />
      <img src="images/mozio.png" alt="Partner 6" />
      <img src="images/booking.png" alt="Partner 7" />


       <img src="images/finaltalixo.png" alt="partner 1"/>
      <img src="images/wewlcome pick.png" alt="Partner 2" />
      <img src="images/transfers.png" alt="Partner 3" />
      <img src="images/hoppa.png" alt="Partner 4" />
      <img src="images/kiwitaxi.png" alt="Partner 5" />
      <img src="images/mozio.png" alt="Partner 6" />
      <img src="images/booking.png" alt="Partner 7" />
    </div>
    </div>
    </section>

<!-- === CTA SECTION === -->
<section class="cta-section">
  <h2>Want to Set Up a Business Account?</h2>
  <p>Let us help streamline your company’s ground transport.</p>
 <a href="https://mail.google.com/mail/?view=cm&fs=1&to=leccars7@gmail.com" target="_blank" class="btn-primary">
  Email Us to Get Started
</a>
</section>



<script>
  const menuToggle = document.getElementById("mobile-menu");
  const nav = document.getElementById("main-nav");
  const overlay = document.getElementById("nav-overlay");

  // Toggle Menu Open/Close
  menuToggle.addEventListener("click", () => {
    const isOpen = nav.classList.toggle("active");
    overlay.classList.toggle("active");

    // Toggle icon
    menuToggle.innerHTML = isOpen ? '<span class="menu-icon">✕</span>' : '<span class="menu-icon">☰</span>';
  });

  // Close on overlay click
  overlay.addEventListener("click", () => {
    closeMenu();
  });

  // Toggle dropdowns on click
  document.querySelectorAll(".dropdown-toggle").forEach((toggle) => {
    toggle.addEventListener("click", function (e) {
      e.preventDefault();
      const parent = this.parentElement;
      parent.classList.toggle("active");

      // Close other dropdowns
      document.querySelectorAll(".dropdown").forEach((el) => {
        if (el !== parent) el.classList.remove("active");
      });
    });
  });

  // Close Menu Function
  function closeMenu() {
    nav.classList.remove("active");
    overlay.classList.remove("active");
    menuToggle.innerHTML = '<span class="menu-icon">☰</span>';

    // Close all dropdowns
    document.querySelectorAll(".dropdown").forEach(d => d.classList.remove("active"));
  }

  // Auto-close on resize if screen is large
  window.addEventListener("resize", () => {
    if (window.innerWidth > 1024) {
      closeMenu();
    }
  });
</script>
<section class="footer-full">
  <div class="footer-main" style="text-align: left;  width: 100%; margin: 0 auto;">
    <div>
      <h4>AIRPORT TRANSFERS</h4>
      <ul>
        <li><a href="heathrow airport.html">Heathrow Airport Mini Cab</a></li>
        <li><a href="gatwickairport.html">Gatwick Airport Mini Cab</a></li>
        <li><a href="stansted.html">Stansted Airport Mini Cab</a></li>
        <li><a href="luton.html">Luton Airport Mini Cab</a></li>
          <li><a href="lonodncity.html">London City Airport</a></li>
      </ul>
    </div>

    <div>
      <h4>SEA-PORT TRANSFERS</h4>
      <ul>
        <li><a href="southhamptoncruiseport.html">Southampton Cruise Port</a></li>
        <li><a href="portsmouthport.html">Portsmouth Cruise Port</a></li>
        <li><a href= "HarwichCruise.html">Harwich Cruise Port</a></li>
        <li><a href= "DoverCruise.html">Dover Cruise Port</a></li>
        <li><a href="tilburydocs port.html">Tilbury Docks</a></li>
        
        
      </ul>
    </div>

    <div>
      <h4>POPULAR ROUTES</h4>
      <ul>
        <li ><a href="londontooxford.html" >London to Oxford</a></li>
        <li ><a href="londontomanchester.html" >London to Manchester</a></li>
        <li ><a href="londontocambridge.html" >London to Cambridge</a></li>
         <li ><a href="londontobrimingham.html" >London to Brimingham</a></li>
         <li ><a href="londontobath.html" >London to Bath</a></li>
        
      </ul>
    </div>

     <div>
        <h4>INTER-CITY ROUTES</h4>
        <ul>
           <li><a href="cityairporttowestminister.html">City Airport to Westminster</a></li>
           <li><a href="gatwicktocan.html">Gatwick to Canary Wharf</a></li>
           <li><a href="heathrowtochelsea.html">Heathrow to Chelsea</a></li>
           <li><a href="lutontosouthkosington.html">Luton to South Kensington</a></li>
           <li><a href="StanstedtoKing'sCross.html">Stansted to Kingcross</a></li>
        </ul>
      </div>


    <div>
      <h4>SUPPORT</h4>
      <ul>
        <li><a href="faqs.html">FAQs</a></li>
        <li><a href="terms and conditions.html">Terms & Conditions</a></li>
        <li><a href="Privacy Policy.html">Privacy Policy</a></li>
        <li><a href="Blogs.html">Blogs</a></li>
        <li><a href="contactus.html">Contact Us</a></li>
      </ul>
    <img src="images/liscence.jpeg" alt="Company License" class="license-img" />
</div>
  </div>
 <div style="height: 100px;"></div>
  <div class="footer-bottom">
    <p>© 2025 Pegasus Minicab London | Reliable Airport Transfers Across London</p>
    <div class="social">
      <i class="fab fa-facebook-f"></i>
      <i class="fab fa-twitter"></i>
      <i class="fab fa-linkedin-in"></i>
      <i class="fab fa-instagram"></i>
    </div>
  </div>
</section>

<script>
  const cards = document.querySelectorAll('.benefit-card');

  const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        entry.target.style.opacity = 1;
        entry.target.style.transform = 'translateY(0)';
        entry.target.style.transition = 'opacity 0.6s ease, transform 0.6s ease';
      }
    });
  }, {
    threshold: 0.1
  });

  cards.forEach(card => {
    observer.observe(card);
  });
</script>
</body>
</html>
