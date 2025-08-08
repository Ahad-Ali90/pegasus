<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Airport Transfers | Pegasus Transfers</title>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;500;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
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
.promo-badge {
  background: linear-gradient(to right, #00000054, #cec7c14d, #0a0a0a54);
  padding: 6px 28px; /* 🔧 Less height, more width */
  border-radius: 10px;
  box-shadow: 0 4px 12px rgb(230, 226, 226);
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
  top: 45px;
  left: 0;
  z-index: 10;
  height: 70px;
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


  .hero {
  position: relative;
  height: 100vh;
  padding-top: 105px; 
  display: flex;
  align-items: center;
  justify-content: flex-end;
  padding-right: 5%;
  overflow: hidden;
  z-index: 1;
}

.hero-image {
  position: absolute;
  top: 105px;
  left: 0;
  width: 100%;
  height: 80vh; /* as per your request */
  z-index: -1;
  overflow: hidden;
   transform: translateZ(0);
   object-fit: contain;
}

.hero-background {
  position: absolute;
  top: 96px;
  left: 0;
  width: 100%;
  height: 75vh; /* Change from 60vh to full viewport height */
  z-index: -1;
  overflow: hidden;
}




  
@media (max-width: 768px) {
  .hero {
    flex-direction: column;
    align-items: center;
    justify-content: center;
    padding: 130px 20px 30px;
    height: auto;
  }
.hero-image {
    height: 45vh; /* Adjust for mobile if needed */
    object-fit: contain;
  }

.hero-image img {
    top: 110px;
    height: 300px;
  }

  
  .left-hero-text {
   display: none;
  }

  .left-hero-text p {
   display: none;
  }

  .right-hero {
    width: 100%;
    max-width: 95%;
    padding: 20px;
  }

}
   .booking-container {
  display: flex;
  justify-content: flex-start; /* default */
  padding-left: 60px;           /* pushes it to right slightly */
}

@media (max-width: 768px) {
  .booking-container {
    justify-content: center;
    padding-left: 0;
    width: 100vh;
    margin-top: 280px;;
  }
}
.right-hero {
  background: rgb(255, 255, 255);
  backdrop-filter: blur(18px);
  -webkit-backdrop-filter: blur(18px);
  border: 1px solid rgba(255, 255, 255, 0.479);
  padding: 22px 28px;
  padding-bottom: 12px;
  border-radius: 2px;
  width: 400px;
  min-height: 480px;
  box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.6);
  z-index: 2;
  position: relative;
  transition: all 0.3s ease;
  margin: auto;
 
}


.form-box {
  display: flex;
  flex-direction: column;
  gap: 22px;
}

h2 {
  font-size: 26px;
  font-weight: 700;
  margin-bottom: 10px;
  color: #1a1a1a;
  text-align: center;
  letter-spacing: 0.7px;
  text-transform: uppercase;
}

.form-group {
  position: relative;
 
}

label {
  position: absolute;
  left: 12px;
  top: 12px;
  color: #888;
  font-size: 14px;
  pointer-events: none;
  transition: 0.3s ease all;
  background: rgba(236, 234, 234, 0.7);
  padding: 0 4px;
  border-radius: 4px;
}

input:focus + label,
input:not(:placeholder-shown) + label,
select:focus + label,
select:valid + label {
  top: -8px;
  left: 10px;
  font-size: 12px;
  color: #f37c06;
}

input, select {
  width: 100%;
  padding: 14px 12px 8px;
  border: 1px solid #ccc;
  border-radius: 10px;
  font-size: 15px;
  background: #ffffff;
  transition: 0.3s ease;
  color: #333;
}

input:focus, select:focus {
  outline: none;
  border-color: #f37c06;
  box-shadow: 0 0 0 3px rgba(243, 124, 6, 0.2);
}

.btn-primary {
  
    background: linear-gradient(to right, red, orange);
  color: #fff;
  padding: 14px;
  border: none;
  width: 100%;
  border-radius: 12px;
  font-weight: bold;
  font-size: 15px;
  cursor: pointer;
  position: relative;
  overflow: hidden;
  transition: all 0.35s ease;
}

.btn-primary::after {
  content: "";
  position: absolute;
  top: 0;
  left: -100%;
  width: 100%;
  height: 100%;
  background: rgba(255,255,255,0.15);
  transition: left 0.4s ease;
}

.btn-primary:hover::after {
  left: 100%;
}

.btn-primary:hover {
  transform: translateY(-2px);
  box-shadow: 0 12px 20px rgba(243, 124, 6, 0.3);
}
 .form-box button:hover {
       background: linear-gradient(to right,orange red, );
    }

    /* === Glowing animated border === */
    .right-hero .corner-line {
  position: absolute;
  background: linear-gradient(90deg, orange, red);
  box-shadow: 0 0 8px rgba(255, 80, 0, 0.7);
  z-index: 3;
  animation: moveLine 4s linear infinite;
  pointer-events: none; /* Prevents any weird hover/click issues */
}
    .corner-top {
      top: 0;
      left: 0;
      height: 2px;
      width: 100%;
      animation-delay: 0s;
    }

    .corner-right {
      top: 0;
      right: 0;
      width: 2px;
      height: 100%;
      animation-delay: -1s;
    }

    .corner-bottom {
      bottom: 0;
      left: 0;
      height: 2px;
      width: 100%;
      animation-delay: -2s;
    }

    .corner-left {
      top: 0;
      left: 0;
      width: 2px;
      height: 100%;
      animation-delay: -3s;
    }

    @keyframes moveLine {
      0% {
        opacity: 0;
        transform: scaleX(0);
      }
      50% {
        opacity: 1;
        transform: scaleX(1);
      }
      100% {
        opacity: 0;
        transform: scaleX(0);
      }
    }

    @media (max-width: 500px) {
      .right-hero {
    width: 100vw;
    max-width: 100%;
    padding: 20px;
  }
    }
    .left-hero-text {
  position: absolute;
  top: 89%;
  left: 5%;
  width: 65%;
  z-index: 2;
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
   
    .left-hero-text {
  position: absolute;
  top: 90%;
  left: 5%;
  width: 65%;
  z-index: 2;
}

.left-hero-text p {
  font-family: 'Playfair Display', serif;
  font-size: 28px;
  font-weight: 700;
  color: #000000;
  padding: 16px 20px;
  white-space: nowrap;         
  overflow: hidden;
  max-width: 100%;
}
/* === CITY TO CITY PAGE STYLING === */
.city-benefits {
  padding: 80px 20px;
  background: #f9f9f9;
}
.city-benefits .benefit-block {
  display: flex;
  flex-wrap: wrap;
  align-items: center;
  margin-bottom: 80px;
  max-width: 1200px;
  margin-left: auto;
  margin-right: auto;
}
.city-benefits .benefit-block img {
  flex: 1 1 50%;
  max-width: 500px;
  width: 100%;
  border-radius: 10px;
}
.city-benefits .benefit-text {
  flex: 1 1 50%;
  padding: 20px 40px;
}
.city-benefits .benefit-text h2 {
  font-size: 2rem;
  margin-bottom: 20px;
  color: #111;
}
.city-benefits .benefit-text p {
  font-size: 1.1rem;
  color: #444;
  line-height: 1.7;
}

.city-benefits .benefit-block:nth-child(even) {
  flex-direction: row-reverse;
}

.city-routes {
  background: #111;
  color: #fff;
  padding: 80px 20px;
  text-align: center;
}
.city-routes h2 {
  font-size: 2.5rem;
  margin-bottom: 40px;
  color:white;
  font-family: 'Playfair Display', serif;
}
.routes-grid {
  display: flex;
  flex-wrap: wrap;
  gap: 30px;
  justify-content: center;
  max-width: 1100px;
  margin: auto;
}
.route-card {
  background: linear-gradient(to right, #a8a49f28,#a8a39e4d, #aaa39d7a );
 
  border-radius: 12px;
  padding: 25px;
  flex: 1 1 250px;
  max-width: 300px;
  transition: transform 0.3s ease;
}
.route-card:hover {
  transform: translateY(-5px);
}
.route-card h3 {
  font-size: 1.3rem;
  color: #f0c040;
  margin-bottom: 10px;
}
.route-card p {
  font-size: 1rem;
  color: #ccc;
  line-height: 1.5;
}

.city-cta {
  background: #f4f4f4;
  padding: 60px 20px;
  text-align: center;
}
.city-cta h2 {
  font-size: 2rem;
  margin-bottom: 20px;
}
.city-cta p {
  font-size: 1.1rem;
  margin-bottom: 30px;
}
.city-cta a {
  padding: 12px 30px;
   background: linear-gradient(to right, red, orange);
  color: #fff;
  text-decoration: none;
  border-radius: 6px;
  font-weight: bold;
  transition: background 0.3s ease;
}
.city-cta a:hover {
  background: orangered;
}
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
/* Responsive */
@media (max-width: 768px) {
  .city-benefits .benefit-block {
    flex-direction: column;
  }
  .city-benefits .benefit-text {
    padding: 20px 0;
  }
  .city-hero h1 {
    font-size: 2rem;
    padding: 15px 20px;
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


<!-- HERO SECTION -->
<section class="hero">
  <div class="hero-background">
 <img  src="images/citytocitybackground.jpg" alt="Background"
  style="position: absolute; top: 0; left: 0; width: 100vw; height: 100vh; object-fit: cover; z-index: -2;">
</div>


  <div class="left-hero-text">
    <p>Premium City-to-City Rides from London</p>
  </div>
 <div class="booking-container">
  <div class="right-hero">
    
    <!-- Glowing animated border lines -->
    <span class="corner-line corner-top"></span>
    <span class="corner-line corner-right"></span>
    <span class="corner-line corner-bottom"></span>
    <span class="corner-line corner-left"></span>

    <form class="form-box">
      <h2>Book Your Ride</h2>

      <div class="form-group">
        <select id="rideType" required onchange="toggleFields()">
          <option value="" disabled selected hidden></option>
          <option value="one-way">One-way</option>
          <option value="hourly">Hourly</option>
        </select>
        <label>Ride Type</label>
      </div>

      <div class="form-group" id="pickup-group">
        <input type="text" placeholder=" " required />
        <label>Pickup Location</label>
      </div>

      <div class="form-group" id="dropoff-group">
        <input type="text" placeholder=" " required />
        <label>Drop-off Location</label>
      </div>

      <div class="form-group" id="duration-group" style="display: none;">
        <select required>
          <option value="" disabled selected hidden></option>
          <option>1 Hour</option>
          <option>2 Hours</option>
          <option>3 Hours</option>
           <option>4 Hours</option>
        <option>5 Hours</option>
        <option>6 Hours</option>
        <option>7 Hours</option>
        <option>8 Hours</option>
        <option>9 Hours</option>
        <option>10 Hours</option>
        <option>11 Hours</option>
        <option>12 Hours</option>
        <option>13 Hours</option>
        <option>14 Hours</option>
        <option>15 Hours</option>
        <option>16 Hours</option>
        <option>17 Hours</option>
        <option>18 Hours</option>
        <option>19 Hours</option>
        <option>20 Hours</option>
        <option>21 Hours</option>
        <option>22 Hours</option>
        <option>23 Hours</option>
        <option>24 Hours</option>
        </select>
        <label>Duration</label>
      </div>

      
      <div class="form-group">
        <input type="datetime-local" placeholder=" " required />
        <label>Date & Time</label>
      </div>

      <button type="submit" class="btn-primary">Search</button>
    </form>
  </div>
</div>
</section>

<script>
  function toggleFields() {
    const rideType = document.getElementById('rideType').value;
    const dropoff = document.getElementById('dropoff-group');
    const duration = document.getElementById('duration-group');

    if (rideType === 'hourly') {
      dropoff.style.display = 'none';
      duration.style.display = 'block';
    } else {
      dropoff.style.display = 'block';
      duration.style.display = 'none';
    }
  }
</script>

<section class="city-benefits">
  <div class="benefit-block">
    <img src="images/citytocity1service.jpg" alt="Comfortable Ride" />
    <div class="benefit-text">
      <h2>Comfort Without Compromise</h2>
      <p>Travel in first-class vehicles with privacy, climate control, and Wi-Fi for long-distance journeys between major cities.</p>
    </div>
  </div>

  <div class="benefit-block">
    <img src="images/citytocity2service.jpg" alt="Door to Door" />
    <div class="benefit-text">
      <h2>Door-to-Door Convenience</h2>
      <p>We pick you up from your location and drop you right at your destination. No train delays, no platform stress.</p>
    </div>
  </div>

  <div class="benefit-block">
    <img src="images/citytocityservice3.jpg" alt="Safe Travel" />
    <div class="benefit-text">
      <h2>Safe, Reliable & Professional</h2>
      <p>Experienced chauffeurs, licensed vehicles, and real-time ride tracking ensure your journey is seamless and secure.</p>
    </div>
  </div>
</section>

<!-- City Routes -->
<section class="city-routes">
  <h2>Popular Routes from London</h2>
  <div class="routes-grid">
    <div class="route-card">
      <h3>London → Oxford</h3>
      <p>Relax and arrive refreshed in the historic city of Oxford.</p>
    </div>
    <div class="route-card">
      <h3>London → Cambridge</h3>
      <p>Book a ride to the world-renowned university city, known for its beauty and brilliance.</p>
    </div>
    <div class="route-card">
      <h3>London → Birmingham</h3>
      <p>Comfortable executive rides for business or leisure, right to the heart of the Midlands.</p>
    </div>
    <div class="route-card">
      <h3>London → Manchester</h3>
      <p>Premium long-distance journeys for meetings, events or weekend getaways.</p>
    </div>
    <div class="route-card">
  <h3>London → Brighton</h3>
  <p>Enjoy a smooth ride to the vibrant coastal city of Brighton. Perfect for day trips and beach escapes.</p>
</div>
<div class="route-card">
  <h3>London → Heathrow Airport</h3>
  <p>Get to Heathrow Airport hassle-free with our door-to-terminal transfers in luxury cars.</p>
</div>
<div class="route-card">
  <h3>London → Gatwick Airport</h3>
  <p>Book a reliable ride to Gatwick with real-time updates and professional chauffeur service.</p>
</div>
<div class="route-card">
  <h3>London → Bath</h3>
  <p>Travel in comfort to the historic city of Bath - Famous for Roman spas, culture, and stunning views.</p>
</div>

  </div>
</section>

<!-- Call to Action -->
<section class="city-cta">
  <h2>Need a Ride Between Cities?</h2>
  <p>Skip the train and choose Pegasus for your next intercity trip.</p>
<a href="#booking-form">Book Your City Ride</a>

</section>

<!-- FAQs -->
<section class="faq-section">
  <h2>Frequently Asked Questions</h2>
  <details>
    <summary>Are City-to-City rides fixed price?</summary>
    <p>Yes, we offer fixed prices so you know the cost upfront — no surprises.</p>
  </details>
  <details>
    <summary>Can I schedule rides for late night or early morning?</summary>
    <p>Absolutely. We operate 24/7, including holidays and overnight trips.</p>
  </details>
  <details>
    <summary>What happens if my pickup is delayed?</summary>
    <p>We offer free waiting time and real-time driver coordination to accommodate delays.</p>
  </details>
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

</body>
</html>

