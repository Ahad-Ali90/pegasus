<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Apply Now – Pegasus Transfers</title>
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
  margin-left: 12px; /* 👈 Pushes it to the right */
}
/* Restore the gradient text */
.gradient-text {
  background-image: linear-gradient(to right, #ffc966, #ffe7ba, #ffc219f5);
  background-clip:text ;
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
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
  max-width: 150px;
  width: auto;
  height: auto;
  display: flex;
  align-items: center;
}
.logo-gif img {
  max-height: 50px;
  width: auto;
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
  margin-top: 20px;
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
  background: none;
  border: none;
  font-size: 28px;
  color: white;
  cursor: pointer;
  z-index: 1100;
  position: absolute;
  right: 20px;
  top: 50%;
  transform: translateY(-50%);
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
      width: 100%;
      padding: 150px 10%;
      background: #fff;
      box-sizing: border-box;
      animation: fadeIn 1.2s ease-in;
    }

    /* ===== Headers ===== */
    h1 {
      font-size: 2.8rem;
      margin-bottom: 10px;
      color: #111;
      position: relative;
      padding-left: 15px;
      border-left: 6px solid #f57c00;
      animation: slideInLeft 1s ease;
    }

    h2 {
      font-size: 1.7rem;
      margin-top: 50px;
      margin-bottom: 14px;
      color: #222;
      position: relative;
      padding-bottom: 8px;
      animation: slideInUp 1s ease;
    }
    
    
    
    h2::after {
      content: "";
      position: absolute;
      width: 50px;
      height: 3px;
      background-color: #f57c00;
      left: 0;
      bottom: 0;
    }


     p {
      margin-bottom: 18px;
      font-size: 1.1rem;
      animation: fadeUp 1s ease;
    }

    ul {
      margin-bottom: 20px;
      padding-left: 20px;
    }

    ul li {
      margin-bottom: 10px;
      list-style-type: none;
    }

     
    a {
      color: #f57c00;
      text-decoration: none;
      transition: all 0.3s ease;
    }

    a:hover {
      text-decoration: underline;
    }
    strong {
      font-weight: bold;
    }
   @keyframes fadeIn {
      from { opacity: 0; }
      to { opacity: 1; }
    }

    @keyframes slideInLeft {
      from { opacity: 0; transform: translateX(-40px); }
      to { opacity: 1; transform: translateX(0); }
    }

    @keyframes slideInUp {
      from { opacity: 0; transform: translateY(30px); }
      to { opacity: 1; transform: translateY(0); }
    }

    @keyframes fadeUp {
      from { opacity: 0; transform: translateY(20px); }
      to { opacity: 1; transform: translateY(0); }
    }

    /* ===== Responsive ===== */
    @media (max-width: 1024px) {
      .container {
        padding: 400px 6%;
      }

      h1 {
        font-size: 2.4rem;
      }

      h2 {
        font-size: 1.5rem;
      }

      p {
        font-size: 1.05rem;
      }
    }

    @media (max-width: 768px) {
      .container {
        padding: 180px 5%;
      }

      h1 {
        font-size: 2rem;
      }

      h2 {
        font-size: 1.3rem;
      }

      p {
        font-size: 0.95rem;
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
  text-decoration: none;
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
 </style>
</head>
<body>
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
    <img src="images/LOGO.png" alt="Logo" class="logo-gif">
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

<section>
  <div class="container">
    <h1>Driver Payement and Policy Infromation/h1>
    <p>This Privacy Notice explains how Pegasus Transfers London (“we”, “us”, “our”) collects, uses, stores and protects your personal data. We comply with UK Data Protection Act 2018 and GDPR regulations.</p>

    <h2>1. Who We Are</h2>
    <p>Pegasus Transfers Limited, registered in the UK. We are the data controller of your personal information collected via our website and services.</p>

    <h2>2. Data We Collect</h2>
    <ul>
      <li>Personal identifiers: name, email, phone number, pickup/drop-off addresses</li>
      <li>Account data: login credentials, booking history, contact preferences</li>
      <li>Payment data: We do not store card details directly; handled via secure third-party providers</li>
      <li>Technical & usage data: IP address, device type, cookies, analytics</li>
      <li>Special category data: only collected with explicit consent, if required (e.g. disability access needs)</li>
    </ul>

    <h2>3. How We Use Your Data</h2>
    <ul>
      <li>To provide and manage your bookings and payments</li>
      <li>To verify identity and comply with legal / TfL licensing obligations</li>
      <li>To send booking confirmations, updates, and marketing (where consent given)</li>
      <li>To improve our services via analytics and customer feedback</li>
    </ul>

    <h2>4. Who We Share Data With</h2>
    <p>We only share necessary data with:</p>
    <ul>
      <li>Our licensed drivers and subcontractors bound by confidentiality</li>
      <li>Payment processors, regulatory authorities, or service providers as required</li>
      <li>Potential business buyers or third-parties in case of restructuring (anonymised where feasible)</li>
    </ul>

    <h2>5. Transfers Outside UK/EEA</h2>
    <p>Where needed, data may be transferred outside the UK/EEA, e.g. to group companies or service providers. We ensure appropriate safeguards are in place.</p>

    <h2>6. Data Retention</h2>
    <p>We retain your data only as long as necessary—e.g. to fulfill the contract, handle complaints or meet legal requirements—and then securely dispose of it.</p>

    <h2>7. Your Rights</h2>
    <p>You have the right to:</p>
    <ul>
      <li>Access your personal data</li>
      <li>Rectify inaccuracies</li>
      <li>Request deletion in certain circumstances</li>
      <li>Restrict or object to processing (especially direct marketing)</li>
      <li>Receive your data in a portable format</li>
    </ul>
    <p>To exercise these rights, contact us at the details below.</p>

    <h2>8. Security Measures</h2>
    <p>We use industry-standard security, encryption, restricted access, and breach notification procedures to keep your data safe.</p>

    <h2>9. Cookies</h2>
    <p>We use cookies for functionality and analytics. You can control cookie preferences via your browser settings. Please check our full Cookie Policy.</p>

    <h2>10. Policy Updates</h2>
    <p>This policy was last updated on July 1, 2025. We may update it periodically and will publish changes on our website.</p>

    <h2>11. Contact Us</h2>
    <p>
      <strong>Pegasus Transfers Limited</strong><br />
      Email: <a href="mailto:info@pegasusminicablondon.com">info@pegasusminicablondon.com</a><br />
      Tel: <a href="tel:+442030062690">+44 203 006 2690</a>
    </p>
  </div>
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

