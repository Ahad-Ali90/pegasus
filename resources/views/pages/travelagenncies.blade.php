<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Travel Agencies – Pegasus Transfers</title>
  <link rel="stylesheet" href="styles.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
 <style>
  * { margin: 0; padding: 0; box-sizing: border-box; font-family: 'Inter', sans-serif; }
    body, html {
      height: 100%; 
      scroll-behavior: smooth; 
      background: #fff; 
      color: #000; 
    }
    
/*top bar for header space */

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
  margin-left: 12px; /* 👈 Pushes it to the right */
}
/* Restore the gradient text */
.gradient-text {
  background-image: linear-gradient(to right, #ffc966, #ffe7ba, #ffc219f5);
  background-clip:text ;
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
}
.promo-badge {
  background: linear-gradient(to right, #00000054, #cec7c14d, #0a0a0a54);
  padding: 0px 24px; /* Less height, more width */
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

/* Zoom in/out pulse animation */
@keyframes pulseZoom {
  0%, 100% {
    transform: translate(-50%, -50%) scale(1);
  }
  50% {
    transform: translate(-50%, -50%) scale(1.08);
  }
}

/* Sparkle animation for stars */
@keyframes sparkle {
  0%, 100% {
    text-shadow: 0 0 3px gold, 0 0 6px #ffd700;
  }
  50% {
    text-shadow: 0 0 10px #fff700, 0 0 15px gold;
  }
}
/*header*/
  header {
  width: 100%;
  padding: 6px 30px; /* increased left-right padding */
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
/* Fix alignment of all nav list items */
nav ul li {
  display: flex;
  align-items: center;
  position: relative;
}

/* Optional: Align dropdown text as well */
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

/* On hover */
nav ul li a:hover {
  color: #a2d330 !important;
}

/* Contact button — override default styles */
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

  /* Remove the gradient fill for icon visibility */
  background: none !important;
  -webkit-text-fill-color: initial !important;
  color: inherit !important;
}

/* Only apply gradient to the Contact Us text */
.contact-text {
   background-image: linear-gradient(to right, #ffc966, #ffe7ba, #ffc219f5);
 background-clip: text;
   -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
  display: inline-block;
}
/* Phone icon visible in green */
.phone-icon {
  color: #32cd32;

  animation: ring 1.5s infinite;
}

/* Button hover glow */
.contact-outline:hover {
  box-shadow: 0 0 12px rgba(255, 193, 25, 0.6);
  transform: translateY(-2px);
}

/* Phone ring animation */
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

/* Parent Dropdown */
.dropdown {
  position: relative;
  display: inline-block;
}

/* Dropdown Menu */
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

/* Show dropdown on hover */
.dropdown:hover .dropdown-menu {
  display: block;
}

/* Dropdown Links */
.dropdown-menu li a {
  display: block;
  padding: 12px 18px;
  text-decoration: none;
  font-size: 15px;
  font-weight: 500;
  color: #000 !important;           /* BLACK TEXT */
  background-color: #fff !important;
  -webkit-text-fill-color: initial !important; /* FIX invisibility */
  transition: all 0.3s ease;
}

/* Hover Effect */
.dropdown-menu li a:hover {
  background-color: #ffe6c7;
  color: #f57c00 !important;
}
/* Mobile Menu Toggle */
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

/* Mobile Navigation */
/* Mobile Menu Toggle */
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

/* Mobile Navigation */
/* Mobile Menu Styles */
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
    align-items: flex-start; /* Align items to the left */
    padding: 0;
    margin: 0;
  }

  .nav-list li {
    width: 100%;
  }

  .nav-link {
    text-align: left; /* Ensure text is aligned to left */
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

/* Promo badge default styles — already working */
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


.container {
  max-width: 100%;
  margin: 0 auto;
  padding: 0 20px;
}

/* HERO SECTION */
.hero-heading-wrapper {
  padding-top: 120px;
  margin-bottom: 5px;
}
.hero-heading {
  font-size: 2.4rem;
  font-weight: 700;
  font-family: 'Playfair Display', serif;
  color: #111;
  text-align: left;
  padding-left: 40px;
  white-space: nowrap;
  margin-top: 0px;
}
.hero-image-below-heading {
  width: 100%;
  height: 65vh;
  overflow: hidden;
}
.hero-image-full {
  width: 100%;
  height: 100%;
  object-fit: cover;
  display: block;
}

/* MAIN CONTENT */
.content-section {
  text-align: center;

}
.content-section h2 {
  font-size: 2rem;
  margin-bottom: 60;
  font-family: 'Playfair Display', serif;
}

.agency-features-section {
  background: #f5f5f5;
  padding: 80px 20px;
  text-align: center;
}

.section-heading {
  font-size: 2.2rem;
  margin-bottom: 40px;
  font-weight: 700;
  color: #111;
}

.feature-grid {
  display: flex;
 
  justify-content: center;
  gap: 40px;
  max-width: 1200px;
  margin: auto;
}

.feature-card {
  background: #fff;
  border-radius: 12px;
  box-shadow: 0 4px 14px rgba(0, 0, 0, 0.07);
  padding: 30px 20px;
  flex: 1 1 300px;
  max-width: 350px;
  transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.feature-card:hover {
  transform: translateY(-8px);
  box-shadow: 0 6px 18px rgba(0, 0, 0, 0.1);
}

.feature-card h3 {
  font-size: 1.4rem;
  margin: 20px 0 10px;
  color: #111;
}

.feature-card p {
  font-size: 1rem;
  color: #555;
}

.icon {
  font-size: 36px;
  color: #e6b400;
}


/* IMAGE BELOW */
.image-full-below-text img.full-img {
  width: 100%;
  height: auto;
  object-fit: cover;
  display: block;
  overflow: hidden;
  
}
.text-below-image {
  margin-top: -30px;
  padding: 40px 20px 60px;
  text-align: center;
}
.text-below-image h3 {
  font-size: 1.8rem;
  font-family: 'Playfair Display', serif;
  color: #111;
  line-height: 1.4;
}

/* BENEFITS */

.agency-benefits {
  background: #e4e4e4;
  padding: 80px 20px;
  text-align: center;
}

.agency-benefits h2 {
  font-size: 2.5rem;
  margin-bottom: 50px;
  color: #111;
  font-weight: 600;
}

.benefit-grid {
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
  gap: 40px;
  max-width: 1200px;
  margin: 0 auto;
}

.benefit-card {
  background: #fff;
  padding: 30px 20px;
  border-radius: 12px;
  box-shadow: 0 0 12px rgba(0, 0, 0, 0.05);
  flex: 1 1 300px;
  transition: transform 0.3s ease;
}

.benefit-card:hover {
  transform: translateY(-5px);
}

.benefit-card i {
  font-size: 40px;
  color: #cfa135; /* premium gold */
  margin-bottom: 15px;
}

.benefit-card h3 {
  font-size: 1.3rem;
  font-weight: 600;
  color: #111;
  margin-bottom: 10px;
}

.benefit-card p {
  color: #555;
  font-size: 1rem;
  line-height: 1.6;
}

/* Responsive */
@media (max-width: 768px) {
  .benefit-grid {
    flex-direction: column;
    align-items: center;
  }
}


/* FLEET */
.modern-fleet {
  background: #111;
  width:100%;
  padding: 80px 0px;
  color: #fff;
  text-align: center;
}
.modern-fleet h2 {
  font-size: 2.3rem;
  margin-bottom: 20px;
}
.modern-fleet p {
  max-width: 700px;
  margin: 0 auto 40px;
  font-size: 1.1rem;
  color: #ddd;
}
.fleet-grid {
  display: flex;
  flex-wrap: wrap;
  gap: 40px;
  justify-content: center;
  max-width: 1200px;
  margin: auto;
}
.fleet-card {
  flex: 1 1 300px;
  background: #222;
  border-radius: 10px;
  padding: 20px;
   overflow: hidden;
}
.fleet-card img {
  width: 100%;
  height: 200px; 
  border-radius: 10px;
}
.fleet-card h3 {
  margin-top: 15px;
  font-size: 1.2rem;
}
.fleet-card p {
  color: #ccc;
  line-height: 1.6;
}

/* FAQ */
.faq-section {
  max-width: 800px;
  margin: 80px auto;
  padding: 0 20px;
  text-align: left;
}
.faq-section h2 {
  font-size: 2rem;
  margin-bottom: 30px;
  text-align: center;
  color: #111;
}
details {
  background: #f3f3f3;
  padding: 15px 20px;
  margin-bottom: 15px;
  border-radius: 6px;
  cursor: pointer;
}
summary {
  font-weight: bold;
  font-size: 16px;
}
.footer-full {
  background: #000;
  color: #fcfcfc;
  padding: 60px 20px 30px;
    margin-top: 75px; /* More space above footer */
  font-size: 17px; /* Increased base font */
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
    text-align: left;
  }
}

/* RESPONSIVE */
@media (max-width: 768px) {
  
  .elevated-heading {
    font-size: 1.5rem;
  }
  .benefit-grid {
    flex-direction: column;
    align-items: center;
  }

  .hero-image-below-heading {
    height: 250px;
  }

  .hero-heading-wrapper {
    padding-top: 90px;
  }

  .hero-heading {
    text-align: center;
    font-size: 1.6rem;
    padding-left: 0;
  }
}

@media (max-width: 768px) {
  .feature-grid,
  .fleet-grid {
    flex-direction: column;
    align-items: center;
  }

  .feature-card,
  .fleet-card {
    width: 90%;
    max-width: 100%;
  }
}
@media (max-width: 768px) {
  .content-section,
  .agency-features-section,
  .agency-benefits,
  .text-below-image {
    padding: 30px 15px;
  }

  .section-heading,
  .agency-benefits h2 {
    font-size: 1.6rem;
  }

  .text-below-image h3 {
    font-size: 1.4rem;
  }
}

</style>
</head>
<div class="top-bar">
  <!-- LEFT: EMAIL -->
  <div class="top-left">
    <a href="mailto:leccars7@gmail.com" class="icon-only">
      <i class="fa-regular fa-envelope email-icon"></i>
      <span class="text-only">leccars7@gmail.com</span>
    </a>
  </div>

  <!-- CENTER: PROMO BADGE -->
  <div class="top-center">
    <div class="promo-badge">
      <span class="big-star">★</span>
      <span class="promo-text">Get <span class="highlight">10%</span> Off on Your First Ride!</span>
      <span class="big-star">★</span>
    </div>
  </div>

  <!-- RIGHT: PHONE + WHATSAPP -->
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

  <!-- Mobile menu toggle button -->
  <button class="menu-toggle" id="mobile-menu" aria-label="Toggle navigation">
    <span class="menu-icon">☰</span>
  </button>

  <!-- Main navigation -->
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

          <!-- other language options -->
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



<section class="hero-heading-wrapper">
  <h1 class="hero-heading">Business Travel Solutions for Travel Agencies</h1>
</section>
<section class="hero-image-below-heading">
 <img src="images/travelagency.jpg" alt="Travel Agency Hero" class="hero-image-full" />

</section>

<!-- Features -->
<section class="content-section">
  <h2>Elevate Your Travel Agency Benifits</h2>
<section class="agency-features-section">
  <div class="feature-grid">
    
    <div class="feature-card fade-in">
      <i class="fas fa-users icon"></i>
      <h3>Easy Group Bookings</h3>
      <p>Book for individuals, families, or entire corporate groups with just a few clicks.</p>
    </div>

    <div class="feature-card fade-in">
      <i class="fas fa-calendar-check icon"></i>
      <h3>Instant Booking & Tracking</h3>
      <p>Access real-time status and scheduling tools for full control over client journeys.</p>
    </div>

    <div class="feature-card fade-in">
      <i class="fas fa-plane-departure icon"></i>
      <h3>Reliable Airport Transfers</h3>
      <p>Offer your clients prompt and premium transfers to and from major London airports.</p>
    </div>

  </div>
</section>

  
<section class="image-full-below-text">
  <img src="images/travelagencies.jpg.jpg" alt="Travel Agency Staff" class="full-img" style=" width: 100%; margin: 0 auto;" />
</section>
<section class="text-below-image">
  <div class="container">
    <h3>We Handle the Journey, You Focus on the Destination! </h3>
  </div>
</section>
<div style="height: 50px;"></div>

<section class="modern-fleet">
  <div class="container">
    <h2>Our Modern Fleet</h2>
    <p>From executive sedans to spacious MPVs, our vehicles are handpicked to deliver exceptional service to your clients — every time.</p>
    <div class="fleet-grid">
      <div class="fleet-card">
        <img src="images/mercedesEQS450.jpg" alt="Electric Sedan" />
        <h3>Electric Executive</h3>
        <p>Zero-emissions rides with premium interiors — perfect for eco-conscious professionals.</p>
      </div>
      <div class="fleet-card">
        <img src="images/vclass.jpg" alt="Business MPV" />
        <h3>Business MPV</h3>
        <p>Comfortable and spacious — ideal for group transfers, VIP delegations, or event travel.</p>
      </div>
      <div class="fleet-card">
        <img src="images/sclassnew.jpg" alt="First Class Sedan" />
        <h3>First-Class Sedan</h3>
        <p>For high-profile guests who expect the best — combining elegance, privacy, and performance.</p>
      </div>
    </div>
  </div>
</section>

<!-- FAQs -->
<!-- FAQs -->
<div class="container">
<section class="faq-section">

  <h2>Frequently Asked Questions</h2>
  <details>
    <summary>Can we earn commission on bookings?</summary>
    <p>Yes, approved travel agencies are eligible for a commission on every ride booked through their account.</p>
  </details>
  <details>
    <summary>Do you support bulk bookings?</summary>
    <p>Absolutely! You can book multiple rides for different clients or for group transfers via our central dashboard.</p>
  </details>
  <details>
    <summary>Is there a dedicated agent support line?</summary>
    <p>Yes, all agency partners are assigned a dedicated account manager for support and coordination.</p>
  </details>
  <details>
    <summary>How do we track bookings and invoices?</summary>
    <p>You’ll receive monthly summaries and have access to a real-time agency dashboard to track rides and earnings.</p>
  </details>
</section>
</div>

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
  document.addEventListener('DOMContentLoaded', () => {
    const fadeEls = document.querySelectorAll('.fade-in');
    const observer = new IntersectionObserver(entries => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          entry.target.style.opacity = 1;
          entry.target.style.transform = "translateY(0)";
        }
      });
    }, { threshold: 0.3 });

    fadeEls.forEach(el => {
      el.style.opacity = 0;
      el.style.transform = "translateY(40px)";
      el.style.transition = "all 0.6s ease-out";
      observer.observe(el);
    });
  });
</script>

</body>
</html>

