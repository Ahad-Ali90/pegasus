<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="description" content="Book your Heathrow to Chelsea taxi with Pegasus Minicabs. Fixed prices, free flight monitoring & meet-and-greet service. Safe, reliable airport transfers to Chelsea, London." />
  <title>Taxi from Heathrow Airport to Chelsea London | Pegasus Minicabs</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
  <style>
     * { margin: 0; padding: 0; box-sizing: border-box; font-family: 'Inter', sans-serif; }
    body, html {
      height: 100%; 
      scroll-behavior: smooth; 
      background: #fff; 
      color: #000; 
    } 
    html {
  scroll-behavior: smooth;
  -webkit-tap-highlight-color: transparent;
  overflow-x: hidden;
}
   header {
  width: 100%;
  padding: 6px 30px; /* increased left-right padding */
   background: linear-gradient(to right, #000000, #000000);
  box-shadow: 0 0 15px rgba(0,0,0,0.1);
  display: flex;
  justify-content: space-between;
  align-items: center;
  position: fixed;
  top: 0px;
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
  margin-top: 22px;
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

.header1{
      background-color: #000;
      color: white;
      padding: 20px 30px;
      position: sticky;
      top: 0;
      z-index: 999;
    }

    .header1 h1 {
      font-size: 24px;
      margin-bottom: 5px;
    }

    .header1 p {
      font-size: 16px;
      color: #ccc;
    }

   .main-content {
       padding-left: 20px;
  padding-right: 20px;
    margin-top: 90px;
    }

    h2 {
      font-size: 1.5rem;
      margin-top: 40px;
      margin-bottom: 20px;
      border-left: 6px solid #f57c00;
      padding-left: 10px;
    }

    ul {
      padding-left: 20px;
      margin-bottom: 20px;
    }

    ul li {
      margin-bottom: 10px;
    }

    table {
      width: 100%;
      border-collapse: collapse;
      margin-bottom: 20px;
    }

    th, td {
      border: 1px solid #ccc;
      padding: 12px;
      text-align: center;
    }

    th {
      background-color: #f57c00;
      color: white;
    }

    a {
      color: #f57c00;
      text-decoration: none;
      font-weight: 500;
    }

    a:hover {
      text-decoration: underline;
    }

    /* Accordion FAQ Styling */
    .faq-section {
      margin-top: 40px;
    }

    .faq-item {
      border-bottom: 1px solid #ccc;
      padding: 15px 0;
    }

    .faq-item input[type="checkbox"] {
      display: none;
    }

    .faq-item label {
      display: block;
      font-weight: bold;
      font-size: 1.1rem;
      cursor: pointer;
      position: relative;
      padding-left: 25px;
    }

    .faq-item label::before {
      content: "\f078";
      font-family: "Font Awesome 6 Free";
      font-weight: 900;
      position: absolute;
      left: 0;
      top: 2px;
      transition: transform 0.3s ease;
    }

    .faq-item input[type="checkbox"]:checked + label::before {
      transform: rotate(180deg);
    }

    .faq-content {
      display: none;
      margin-top: 10px;
      color: #444;
      padding-left: 25px;
    }

    .faq-item input[type="checkbox"]:checked ~ .faq-content {
      display: block;
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
    }

    .footer-main a {
      color: #f57c00;
      text-decoration: none;
    }

    .footer-main a:hover {
      color: #fff;
    }

    .footer-bottom {
      margin-top: 50px;
      text-align: center;
      border-top: 1px solid #333;
      padding-top: 20px;
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
    @media (max-width: 768px) {
      header h1 {
        font-size: 20px;
      }

      .faq-item label {
        font-size: 1rem;
      }
    }
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

  <!-- Header -->
   <section>
  <div class= ".header1" style ="margin-top: 120px; text-align: center; text-decoration: solid; font-size: 26px;">
    <h1>Taxi from Heathrow to Chelsea, London</h1>
    <p>Fast, reliable, and affordable airport transfers from Heathrow to Chelsea with Pegasus Minicabs</p>
    </div>
  </section>


  <!-- Main Content -->
  <div class="main-content">
    <section>
      <h2>Why Book With Pegasus?</h2>
      <ul>
        <li>✅ Fixed fare: From £65 – no hidden charges</li>
        <li>✅ Meet & Greet service at Heathrow terminals</li>
        <li>✅ Free flight tracking & 60 mins free wait time</li>
        <li>✅ Executive & Saloon vehicles available</li>
        <li>✅ Child seats on request</li>
      </ul>
    </section>
    <section>
      <h2>Distance & Journey Time</h2>
      <p>The distance between Heathrow Airport and Chelsea is approximately 15 miles (24 km), and the journey typically takes around 35–50 minutes depending on traffic conditions.</p>
    </section>

    <section>
      <h2>Vehicles & Pricing</h2>
      <table>
        <thead>
          <tr><th>Vehicle</th><th>Capacity</th><th>Fare (from)</th></tr>
        </thead>
        <tbody>
            <tr><td>Saloon</td><td>Up to 1-4 passengers</td><td>£65</td></tr>
          <tr><td>MPV</td><td>Up to 4-6 passengers</td><td>£80</td></tr>
          <tr><td>Van</td><td>Up to 6-8 passengers</td><td>£85</td></tr>
        </tbody>
      </table>
    </section>

    <section style="margin-top: 40px; background-color: #fff3e0; padding: 25px 20px; border-radius: 10px;">
  <h2>How to Book</h2>
  <p style="font-size: 1.05rem; color: #222; margin-bottom: 10px;">
    Book your London City Airport to Westminster taxi easily online via our <a href="homepage.html" style="color:#d35400; text-decoration: underline;">booking form</a> or call us at 
    <a href="tel:+442030007600" style="color:#d35400; font-weight: bold;">+44 20 3000 7600</a>.<strong> or on Whatsapp: </strong><a href="https://wa.me/447354438757?text=Hello%2C%20I%20would%20like%20to%20book%20a%20ride" target="_blank">+44 7354 438757</a>
  </p>
  <p style="color:#444;">
    You'll receive driver and vehicle details via SMS and email after confirmation.
  </p>
</section>
    <!-- Styled FAQs -->
    <section class="faq-section">
      <h2>FAQs for Heathrow to Chelsea Transfers</h2>

      <div class="faq-item">
        <input type="checkbox" id="faq1" />
        <label for="faq1">Will the driver wait if my flight is delayed?</label>
        <div class="faq-content">
          Yes. We monitor your flight and adjust pickup times accordingly. No extra charge.
        </div>
      </div>

      <div class="faq-item">
        <input type="checkbox" id="faq2" />
        <label for="faq2">Is there a night fare or weekend surcharge?</label>
        <div class="faq-content">
          No, our fares are fixed 24/7 – including weekends and holidays.
        </div>
      </div>

      <div class="faq-item">
        <input type="checkbox" id="faq3" />
        <label for="faq3">Where will I meet the driver at Heathrow?</label>
        <div class="faq-content">
          Inside arrivals with a name board (Meet & Greet included).
        </div>
      </div>
    </section>
  </div>

  <!-- Footer --> 
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
</body>
</html>