 <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Pegasus Transfers – Corporations</title>
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
    
/* Desktop default top-bar (min-width: 769px and above) */

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
  padding: 0px 24px; /* 🔧 Less height, more width */
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

   .corp-faqs {
      padding: 60px 20px;
      max-width: 900px;
      margin: auto;
    }

    .corp-faqs h2 {
      text-align: center;
      font-size: 28px;
      margin-bottom: 30px;
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
      font-size: 17px;
    }

    summary::-webkit-details-marker {
      color: #ff8800;
    }

    @media (max-width: 768px) {
      .content h2 { font-size: 1.8rem; }
      .content p { font-size: 1rem; }
      .intro h1 { font-size: 2rem; }
    }
    @media (max-width: 768px) {
  .intro h1 {
    font-size: 2rem;
  }

  .intro p {
    font-size: 1rem;
  }
}
.chauffeurs {
  background: #fff;
  padding: 80px 20px;
  text-align: center;
}

.chauffeurs h2 {
  font-size: 2.5rem;
  margin-bottom: 20px;
  font-weight: 600;
  color: #111;
  font-family: 'Playfair Display', serif;
}

.chauffeurs-intro {
  font-size: 1.1rem;
  color: #333;
  max-width: 800px;
  margin: 0 auto 40px;
  line-height: 1.6;
  font-family: 'Inter', sans-serif;
   text-align: left;
}

.chauffeur-cards {
  display: flex;
  flex-wrap: wrap;
  gap: 30px;
  justify-content: center;
  width: 100%;
  max-width: 500px;
  margin: 0 auto;
}

.chauffeur-cards .card {
  flex: 1 1 250px;
  background: #ffffff;
  padding: 20px;
  border-radius: 0px;
   text-align: left;
}

.chauffeur-cards .card img {
  width: 100%;
  max-width: 500px; /* adjust as desired */
  height: auto;
  object-fit: cover;
  margin-bottom: 15px;
}


.chauffeur-cards p {
  color: #444;
  font-size: 1rem;
  line-height: 1.5;
}

@media (max-width: 768px) {
  .chauffeur-cards {
    flex-direction: column;
  }
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
    text-align: center;
  }
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

.hero-content {
  background-color: rgba(243, 241, 241, 0);
  max-width: 800px;
  margin: auto;
  padding: 40px 20px;
  border-radius: 10px;
}

.hero-content h1 {
  font-size: 2.8rem;
  color: #111;
  font-weight: 600;
}

.hero-content p {
  font-size: 1.2rem;
  color: #333;
  margin: 20px 0;
}

.hero-content a {
  padding: 12px 30px;
  background: linear-gradient(to right, #ffc966, #ffb347);
  border-radius: 30px;
  color: #111;
  font-weight: 600;
  text-decoration: none;
}
.trustpilot-badge {
  position: absolute;
  bottom: 128px;
  left: 50%;
  transform: translateX(-50%);
  z-index: 3;
  background: rgba(252, 252, 252, 0.521);
  padding: 3px 6px;
  border-radius: 6px;
  box-shadow: 0 4px 12px rgb(202, 191, 191);
}

.trustpilot-badge img {
  height: 28px;
  display: block;
}


.corporations {
  padding: 80px 0;
  background-color: #f8f8f8;
  text-align: center;
}

.corporations h2 {
  font-size: 2.5rem;
  margin-bottom: 20px;
  color: #000;
}

.corporations p {
  font-size: 1.1rem;
  margin-bottom: 40px;
  color: #666;
}

.corporate-benefits {
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
  gap: 30px;
  margin-bottom: 50px;
}

.benefit {
  flex: 1 1 250px;
  max-width: 300px;
  background-color: #fff;
  padding: 30px 20px;
  border-radius: 15px;
  box-shadow: 0 2px 12px rgba(0, 0, 0, 0.08);
  transition: transform 0.3s ease;
}

.benefit:hover {
  transform: translateY(-8px);
}

.benefit-icon {
  font-size: 36px;
  color: #007bff;
  margin-bottom: 15px;
}

.benefit h3 {
  font-size: 1.3rem;
  margin-bottom: 10px;
  color: #222;
}

.benefit p {
  font-size: 1rem;
  color: #555;
}

/*================ Chauffeurs =================*/

.chauffeurs {
  padding: 80px 20px;
  background-color: #fff;
  text-align: center;
}

.chauffeurs h2 {
  font-size: 2.5rem;
  margin-bottom: 20px;
  color: #000;
}

.chauffeurs-intro {
  font-size: 1.1rem;
  color: #666;
  max-width: 900px;
  margin: 0 auto 50px;
}

.chauffeur-cards {
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
  gap: 30px;
}

.chauffeur-cards .card {
  flex: 1 1 300px;
  max-width: 350px;
  background-color: #f9f9f9;
  border-radius: 15px;
  overflow: hidden;
  box-shadow: 0 4px 12px rgba(0, 0, 0, 0.05);
  transition: transform 0.3s ease;
}

.chauffeur-cards .card:hover {
  transform: translateY(-8px);
}

.chauffeur-cards .card img {
  width: 100%;
  height: auto;
  display: block;
}

.chauffeur-cards .card-content {
  padding: 25px;
  text-align: left;
}

.chauffeur-cards .card-content h3 {
  font-size: 1.3rem;
  margin-bottom: 10px;
  color: #333;
}

.chauffeur-cards .card-content p {
  font-size: 1rem;
  color: #666;
}

/*================ FAQs =================*/

.corp-faqs {
  padding: 80px 20px;
  background-color: #f0f0f0;
  text-align: center;
}

.corp-faqs h2 {
  font-size: 2.5rem;
  margin-bottom: 30px;
  color: #000;
}

details {
  max-width: 800px;
  margin: 20px auto;
  background-color: #fff;
  border-radius: 10px;
  padding: 15px 25px;
  box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
  transition: background-color 0.3s ease;
  cursor: pointer;
  text-align: left;
}

details[open] {
  background-color: #f9f9f9;
}

summary {
  font-weight: 600;
  font-size: 1.1rem;
  color: #333;
  outline: none;
}

details p {
  margin-top: 10px;
  font-size: 1rem;
  color: #555;
  line-height: 1.6;
}

/*================ Footer =================*/


/*================ Mobile Styles =================*/

@media (max-width: 768px) {
  /* FAQs */
  .corp-faqs {
    padding: 40px 15px;
  }

  .corp-faqs h2 {
    font-size: 1.6rem;
  }

  details {
    padding: 12px 15px;
  }

  summary {
    font-size: 1rem;
  }

  /* Chauffeurs */
  .chauffeurs h2 {
    font-size: 1.8rem;
  }

  .chauffeurs-intro {
    font-size: 1rem;
    padding: 0 10px;
    text-align: center;
  }

  .chauffeur-cards .card {
    padding: 15px;
  }

  .chauffeur-cards .card img {
    max-width: 100%;
  }

  /* Hero */
  .hero-content h1 {
    font-size: 2rem;
  }

  .hero-content p {
    font-size: 1rem;
  }

  .hero-content a {
    padding: 10px 24px;
    font-size: 1rem;
  }

  .hero-bg {
    height: auto;
    object-fit: contain;
  } 

  /* Trustpilot */
  .trustpilot-badge {
    bottom: 40px;
    padding: 2px 4px;
  }

  .trustpilot-badge img {
    height: 22px;
  }

}
.responsive-section {
  display: flex;
  flex-wrap: wrap;
  align-items: center;
  padding: 80px 20px;
  max-width: 1200px;
  margin: auto;
  gap: 20px;
}

.responsive-section.reverse {
  flex-direction: row-reverse;
}

.image-container,
.text-container {
  flex: 1 1 50%;
  padding: 20px;
}

.image-container img {
  width: 100%;
  border-radius: 10px;
  display: block;
}

.text-container h3 {
  font-size: 1.8rem;
  color: #111;
  margin-bottom: 15px;
}

.text-container p {
  color: #444;
  font-size: 1.05rem;
  line-height: 1.7;
  margin-bottom: 15px;
}

.text-container ul {
  padding-left: 20px;
  line-height: 1.7;
  color: #333;
}

/* Mobile Responsive */
@media (max-width: 768px) {
  .responsive-section,
  .responsive-section.reverse {
    flex-direction: column;
    text-align: center;
  }

  .text-container {
    padding-top: 0;
  }

  .text-container h3 {
    font-size: 1.5rem;
  }

  .text-container p,
  .text-container ul {
    font-size: 1rem;
    text-align: left;
  }
}

  </style>
</head>
<body>
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



<section class="hero-wrapper">
  <div style ="height: 50px;">
 </div> 
 
<div class="hero-banner-container">
  <img src="images/coorporation1.png.jpg"/>
 <section class="trustpilot-badge">
  <p>Rated Excellent on <strong>Trustpilot</strong> 🌟🌟🌟🌟🌟</p>
  <a href="https://www.trustpilot.com/evaluate/www.pegasustransfers.com" target="_blank">Leave us a review</a>
</div>
</section>

<!-- ✅ Benefit Highlights Section -->
<section style="background-color: #f9f9f9; padding: 38px 20px 80px; text-align: center; margin-top: -30px;">
  <h2 style="font-size: 2.5rem; margin-bottom: 30px; color: #111;">
   Pegasus: The Luxury Choice
  </h2>
  <div style="height: 40px;"></div>

  <!-- FLEX BLOCKS 1–3 (always visible) -->
  <div style="display: flex; flex-wrap: wrap; gap: 40px; justify-content: space-between;">
    <!-- Block 1 -->
    <div style="flex: 1 1 350px;">
      <img src="images/flex1.png.jpg" alt="Account Manager" style="width: 100%; height: 220px; object-fit: contain; border-radius: 8px;">
      <h3 style="font-size: 1.2rem; font-weight: 600; margin-bottom: 10px;">Tailored Corporate Solutions</h3>
      <p style="color: #444; line-height: 1.6;">
       From airport transfers to executive meetings, Pegasus Transfers delivers flexible transportation customized for your company’s needs.
      </p>
    </div>

    <!-- Block 2 -->
    <div style="flex: 1 1 350px;">
      <img src="images/flex.jpg" alt="Corporate Dashboard" style="width: 100%; height: 220px; object-fit: contain; border-radius: 8px;">
      <h3 style="font-size: 1.2rem; font-weight: 600; margin-bottom: 10px;">Centralized Management</h3>
      <p style="color: #444; line-height: 1.6;">
        Book for individuals or entire teams with our centralized dashboard. Ddesigned for ease, clarity, and real-time oversight.
      </p>
    </div>

    <!-- Block 3 -->
    <div style="flex: 1 1 350px;">
      <img src="images/fllex3.jpg" alt="Punctual Chauffeur" style="width: 100%; height: 220px; object-fit: contain; border-radius: 8px;">
      <h3 style="font-size: 1.2rem; font-weight: 600; margin-bottom: 10px;">Reliable, Punctual, and Professional</h3>
      <p style="color: #444; line-height: 1.6;">
        Whether it’s airport pickups, last-minute meetings, or late-night events — our chauffeurs are always on time and in uniform.
      </p>
    </div>
  </div>

  <!-- EXPLORE MORE BUTTON -->
  <div style="margin-top: 60px;">
    <button onclick="revealFlexBlocks()" style="padding: 10px 30px; border-radius: 30px;  background: linear-gradient(to right, red, orange); border: none; font-weight: bold; cursor: pointer; size:70px;">
      Explore More
    </button>
  </div>

  <!-- FLEX BLOCKS 4–5 (initially hidden) -->
  <div id="hidden-flex" style="display: none; flex-wrap: wrap; gap: 40px; justify-content: space-between; margin-top: 50px;">

    <!-- Block 4 -->
    <div style="flex: 1 1 350px;">
      <img src="images/flex4.jpg" alt="Corporate Billing" style="width: 100%; height: 350px; object-fit: contain; border-radius: 8px;">
      <h3 style="font-size: 1.2rem; font-weight: 600; margin-bottom: 10px;">Transparent Pricing & Monthly Billing</h3>
      <p style="color: #444; line-height: 1.6;">
        No surprises. Get clear invoices, monthly statements, and flexible payment options tailored to corporate needs.
      </p>
    </div>

    <!-- Block 5 -->
    <div style="flex: 1 1 350px;">
      <img src="images/coorporationreplace.jpg" alt="Executive Service London" style="width: 100%; height: 350px; object-fit: contain; border-radius: 8px;">
      <h3 style="font-size: 1.2rem; font-weight: 600; margin-bottom: 10px;">Global-Standard Service in London</h3>
      <p style="color: #444; line-height: 1.6;">
        Trusted by executives worldwide, our service bridges the gap between global expectations and local delivery
      </p>
    </div>
  </div>
</section>

<!-- ✅ Quote Section -->
<section style="background-color: #111; color: #fff; padding: 60px 20px; text-align: center;">
  <h2 style="font-size: 2rem; margin-bottom: 15px;">Your Corporate Transport, Elevated</h2>
  <p style="font-size: 1.1rem; margin-bottom: 25px;">A single trusted partner for all your business mobility needs.</p>
  <a href="overview.html" style="padding: 10px 25px; border-radius: 25px;  background: linear-gradient(to right, red, orange); color: #111; font-weight: bold; text-decoration: none;">Start Partnership</a>
</section>

<!-- ✅ Section 1: Stress-Free Booking -->
<section class="responsive-section">
  <div class="image-container">
    <img src="images/coorporation1.png.jpg" alt="Stress-free corporate booking" />
  </div>
  <div class="text-container">
    <h3>Stress-Free Corporate Bookings</h3>
    <p>
      Say goodbye to last-minute booking chaos. With Pegasus Transfers, managing your company’s travel is simple, smart, and fast.
      Our business dashboard empowers your team to plan ahead or book instantly — with zero stress.
    </p>
    <ul>
      <li>✓ Instant bookings for teams or executives</li>
      <li>✓ Real-time availability tracking</li>
      <li>✓ Flexible scheduling — anytime, anywhere</li>
      <li>✓ All rides in one streamlined platform</li>
    </ul>
  </div>
</section>

<section class="responsive-section reverse">
  <div class="image-container">
    <img src="images/shutterstock_2389405899.jpg" alt="Corporate invoicing and policy" />
  </div>
  <div class="text-container">
    <h3>Corporate Policies Made Easy</h3>
    <p>
      Keep everything transparent and under control. Pegasus Transfers gives you flexible billing options, dedicated support, and travel policies your company can trust — all without hidden charges.
    </p>
    <ul>
      <li>✓ Monthly invoicing with detailed breakdowns</li>
      <li>✓ Custom travel rules for teams & departments</li>
      <li>✓ Account manager support 24/7</li>
      <li>✓ Secure, policy-compliant travel records</li>
    </ul>
  </div>
</section>

<section class="corp-faqs">
  <h2>Corporate FAQs</h2>
  <details>
    <summary>Can I manage bookings for a team?</summary>
    <p>Yes. You can centrally book rides for employees via our corporate dashboard.</p>
  </details>
  <details>
    <summary>Do you offer fixed monthly pricing?</summary>
    <p>We offer custom pricing plans based on your monthly ride volume.</p>
  </details>
  <details>
    <summary>Is support available 24/7?</summary>
    <p>Absolutely! Corporate clients receive round-the-clock support and priority handling.</p>
  </details>

  <details>
  <summary>Can we get a ride report or travel history for employees?</summary>
  <p>Yes. We provide detailed ride summaries and employee travel history for transparency and tracking.</p>
</details>

<details>
  <summary>Are your chauffeurs trained for VIP or executive protocols?</summary>
  <p>Absolutely. Our chauffeurs are trained in discretion, etiquette, and high-standard client service — ideal for executives and VIPs.</p>
</details>

<details>
  <summary>Do you offer fixed corporate rates or volume discounts?</summary>
  <p>We offer special pricing plans, fixed rates, and volume-based discounts tailored to your company’s size and travel needs.</p>
</details>

</section>
<script>
  function revealFlexBlocks() {
    const hiddenBlocks = document.getElementById("hidden-flex");
    if (hiddenBlocks.style.display === "none" || hiddenBlocks.style.display === "") {
      hiddenBlocks.style.display = "flex";
    } else {
      hiddenBlocks.style.display = "none";
    }
  }
</script>



<!-- ✅ Chauffeur Highlight -->
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


</body>
</html>

