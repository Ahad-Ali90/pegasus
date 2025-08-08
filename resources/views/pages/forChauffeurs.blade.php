<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>For Chauffeurs | Pegasus Transfers</title>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;500;700&display=swap" rel="stylesheet"/>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;500;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
   <style>
    * { margin: 0; padding: 0; box-sizing: border-box; font-family: 'Inter', sans-serif; }
    body, html {
      height: 100%; 
      scroll-behavior: smooth; 
      background: #fff; 
      color: #000; 
    }
    body, html {
  margin: 0;
  padding: 0;
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
  transition: all 0.3s ease;
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
    top: 30px !important;
  }

  .nav-overlay,
  #main-nav {
    top: 30px !important;
    height: calc(100vh - 50px);
  }
}

  .hero {
  position: relative;
  height: 100vh;
  padding-top: 100px;
  display: flex;
  align-items: center;
  justify-content: flex-end;
  padding-right: 5%;
  overflow: hidden;
  z-index: 1;
}

.hero-image {
  position: absolute;
  top: 100px;
  left: 0;
  width: 100%;
  height: 75vh;
  z-index: -1;
  overflow: hidden;
  transform: translateZ(0);
}

.hero-image img {
  width: 100%;
  height: 100%;
  object-fit: cover;
  display: block;
  image-rendering: auto;
}


@media (max-width: 768px) {
  .hero {
    height: 100vh;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    padding: 0 20px;
    text-align: center;
  }

  .hero-image {
    top: 30px;
    height: 100vh;
  }

  .hero-image img {
    height: 100%;
    object-fit: cover;
  }

  .hero .btn {
    margin-top: 1.5rem;
  }
}


     .left-hero-text {
  position: absolute;
  top: 88%;
  left: 0%;
  width: 65%;
  z-index: 2;
  text-align: center;
}

.left-hero-text p {
  font-family: 'Playfair Display', serif;
  font-size: 34px;
  font-weight: 700;
  color: #000000;
  padding: 16px 20px;
  white-space: nowrap;         
  overflow: hidden;
  max-width: 100%;
}
 @media (max-width: 786px) {
  .left-hero-text {
   display: none;
  }

 }
.center-button {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  z-index: 3;
}

.apply-btn {
  display: inline-block;
  padding: 14px 30px;
  font-size: 17px;
  font-weight: bold;
  color: black;
  background: linear-gradient(to right, red, orange);
  border-radius: 30px;
  text-decoration: none;
  transition: all 0.3s ease;
  box-shadow: 0 6px 15px rgba(0, 0, 0, 0.2);
}

.apply-btn:hover {
  background: orangered;
  color: white;
  transform: scale(1.05);
}
.chauffeur-benefits {
  display: grid;
  grid-template-columns: repeat(6, 1fr);
  gap: 30px;
  max-width: 1200px;
  margin: 40px auto;
  padding: 0 20px;
}

.card {
  background: #fff;
  padding: 25px;
  border-radius: 16px;
  box-shadow: 0 4px 12px rgba(0,0,0,0.1);
  text-align: center;
  transition: transform 0.3s ease;
}


.card:nth-child(1),
.card:nth-child(2),
.card:nth-child(3) {
  grid-column: span 2;
}

.card.wider {
  grid-column: span 3;
}


.card i {
  font-size: 2rem;
  color: #000;
  margin-bottom: 12px;
}

/* Mobile Responsive */
@media (max-width: 768px) {
  .chauffeur-benefits {
    grid-template-columns: 1fr;
  }

  .card {
    grid-column: auto !important;
    width: 100%;
  }
}
.card {
  position: relative;
  overflow: hidden;
  background: #fff;
  padding: 25px;
  border-radius: 16px;
  box-shadow: 0 4px 12px rgba(0,0,0,0.1);
  text-align: center;
  transition: color 0.4s ease, background 0.4s ease;
  z-index: 1;
}

.card::before {
  content: "";
  position: absolute;
  top: 0;
  left: -100%;
  width: 100%;
  height: 100%;
   background: linear-gradient(to top, rgba(255, 218, 106, 0.9), rgba(243, 228, 194, 0.9));
  transition: left 0.5s ease;
  z-index: 0;
}

.card i,
.card h4,
.card p {
  position: relative;
  z-index: 1;
  transition: color 0.4s ease;
}


.card:hover::before {
  left: 0;
}

.card:hover i,
.card:hover h4,
.card:hover p {
  color: rgb(32, 32, 32);
}

.mobile-menu-toggle {
  display: none;
  font-size: 28px;
  background: none;
  border: none;
  cursor: pointer;
  margin-left: auto;
  padding: 10px;
}

.requirements-btn {
  display: inline-block;
  padding: 10px 20px;
  background: linear-gradient(to right, red, orange);
  color: #fff;
  text-decoration: none;
  border-radius: 6px;
  transition: background-color 0.3s ease;
}

.requirements-btn:hover {
  background-color:  orangered;
   color: #000;
}


.requirements-image img {
  width: 100%;
  border-radius: 10px;
  box-shadow: 0 4px 12px rgba(0,0,0,0.1);
}
@media (max-width: 768px) {
  .requirements-container {
    flex-direction: column;
    text-align: center;
  }

  .requirements-text h2 {
    font-size: 22px;
  }

  .requirements-text ul {
    padding-left: 0;
    list-style-position: inside;
  }

  .requirements-btn {
    margin-top: 10px;
  }

  .requirements-image {
    margin-top: 20px;
  }
}
.requirements-section {
  background-color: #ffffff;
  padding: 60px ;
  text-align: center;
}
.requirements-steps-container{
   max-width: 1500px;
  margin: auto;
  display: flex;
  align-items: center;
  justify-content: space-between;
  flex-wrap: wrap;
  gap: 40px;

}
.driver-steps-container {
  max-width: 100%;
  margin: auto;
  display: flex;
  align-items: center;
  justify-content: space-between;
  flex-wrap: wrap;
  gap: 40px;
}

.driver-steps-text,
.driver-steps-image {
  flex: 1 1 45%;
}

.driver-steps-text h2 {
  font-size: 2.2rem;
  margin-bottom: 20px;
}

.driver-steps-text p {
  font-size: 1.1rem;
  margin-bottom: 20px;
}

.requirements-list {
  list-style: none;
  padding-left: 0;
  text-align: left;
  display: inline-block; 
}

.requirements-list li {
  margin-bottom: 12px;
  font-size: 1rem;
  line-height: 1.6;
  font-weight: 500;
}

.requirements-list .number {
  color: goldenrod;
  font-weight: bold;
  margin-right: 10px;
}

.driver-steps-image img {
  width: 100%;
  height: auto;
  border-radius: 8px;
}

.driver-steps-section {
  background-color: #ffffff;
  padding: 60px ;
  text-align: center;
}



.driver-steps-content {
  flex: 1 1 45%;
}

.driver-steps-content h2 {
  font-size: 28px;
  margin-bottom: 20px;
  color: #111;
}

.driver-steps-content ul {
  list-style: none;
  padding: 0;
  margin: 0 0 30px 0;
}

.driver-steps-content ul li {
  margin-bottom: 12px;
  font-size: 18px;
  color: #333;
  position: relative;
  padding-left: 30px;
  text-align: left;
}

.driver-steps-content ul li strong {
  position: absolute;
  left: 0;
  top: 0;
  color: #eab308;
}

.apply-btn {
  padding: 12px 24px;
   background: linear-gradient(to right, red, orange);
  color: #fff;
  border-radius: 6px;
  text-decoration: none;
  transition: all 0.3s ease;
  font-weight: 500;
}

.apply-btn:hover {
  background: orangered;
  color: #000;
}

@media (max-width: 768px) {
  .driver-steps-container, 
  .requirements-steps-container
   {
    flex-direction: column;
  }

  .driver-steps-image,
  .driver-steps-content {
    flex: 1 1 100%;
  }

  .driver-steps-content h2 {
    font-size: 22px;
    text-align: center;
  }

  .driver-steps-content ul li {
    font-size: 16px;
  }

  .apply-btn {
    display: block;
    width: fit-content;
    margin: 0 auto;
  }
}
.faqs-section {
  background-color: #f8f8f8;
 padding: 0;
}

.faqs-container {
  max-width: 900px;
  margin: 0 auto;
}

.faqs-heading {
  text-align: center;
  font-size: 2rem;
  margin-bottom: 30px;
  font-weight: 600;
  color: #111;
}

.faq {
  margin-bottom: 15px;
  border-bottom: 1px solid #ccc;
}

.faq-question {
  background: none;
  border: none;
  width: 100%;
  text-align: left;
  font-size: 1.1rem;
  font-weight: 500;
  padding: 15px;
  cursor: pointer;
  transition: background 0.3s;
  color: #111;
}

.faq-question:hover {
  background-color: #eaeaea;
}

.faq-answer {
  padding: 0 15px 15px;
  display: none;
  color: #555;
  font-size: 0.95rem;
}

.faq.open .faq-answer {
  display: block;
}
.footer-full {
  background: #000;
  color: #fcfcfc;
  padding: 60px 20px 30px;
    margin-top: 75px;
  font-size: 17px; 
  width: auto;
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


@media (max-width: 768px) {
  .footer-main {
    flex-direction: column;
    align-items: right;
    text-align: center;
  }
}

.standards-grid {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(260px, 1fr));
  gap: 30px;
}

.standard-card {
  position: relative;
  background: #fff;
  border-radius: 12px;
  padding: 25px;
  box-shadow: 0 4px 12px rgba(0,0,0,0.08);
  text-align: left;
  overflow: hidden;
  transition: all 0.4s ease;
  z-index: 1;
}


.standard-card::before {
  content: "";
  position: absolute;
  bottom: -100%;
  left: 0;
  width: 100%;
  height: 100%;
  background: linear-gradient(to top, rgba(254, 215, 102, 0.9), rgba(255, 255, 255, 0.9));
  transition: all 0.4s ease;
  z-index: 0;
}

.standard-card:hover::before {
  bottom: 0;
}

.standard-card h3,
.standard-card p,
.standard-card ul,
.standard-card li {
  position: relative;
  z-index: 1;
}

.standard-card h3 {
  font-size: 20px;
  color: #19191a;
  margin-bottom: 12px;
  font-weight: 700;
}

.standard-card p,
.standard-card li {
  color: #333;
  font-size: 15px;
  line-height: 1.6;
}

.standard-card ul {
  list-style: disc;
  padding-left: 20px;
  margin-top: 8px;
}


@media (max-width: 768px) {
  .standard-card {
    padding: 20px;
  }

  .standard-card h3 {
    font-size: 18px;
  }

  .standard-card p,
  .standard-card li {
    font-size: 14px;
  }
}
@media (max-width: 768px) {
  .chauffeur-section {
    padding: 2rem 1rem;
  }

  .chauffeur-section h2 {
    font-size: 1.8rem;
    text-align: center;
  }

  .chauffeur-grid {
    grid-template-columns: 1fr !important;
    gap: 1.5rem;
  }

  .chauffeur-card {
    padding: 1.5rem;
  }

  .chauffeur-card h3 {
    font-size: 1.2rem;
    text-align: center;
  }

  .chauffeur-card p {
    text-align: center;
  }

  .chauffeur-card:hover {
    transform: none;
  }

  .chauffeur-card::before {
    border-radius: 1rem;
  }

  .chauffeur-card:hover::before {
    transform: scaleY(1);
  }
}
@media (max-width: 768px) {
 
  .chauffeur-section img {
    width: 100%;
    height: auto;
    display: block;
    margin: 0 auto;
  }


  .chauffeur-section .btn {
    display: block;
    margin: 2rem auto 0 auto;
    text-align: center;
  }
}

 </style>
</head>
<body>
<div class="top-bar">
  
  <div class="top-left">
    <a href="mailto:leccars7@gmail.com" class="icon-only">
      <i class="fa-regular fa-envelope email-icon"></i>
      <span class="text-only">leccars7@gmail.com</span>
    </a>
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
  

  <div class="nav-overlay" id="nav-overlay"></div>
</header>



<section class="hero">
  <div class="hero-image">
    <img 
  src="images/forchauffeur.jpg"
  srcset="forchauffeur.jpg 1x, forchauffeur@2x.jpg 2x"
  alt="By the Hour Service">
  </div>


  <div class="center-button">
    <a href="chauffeursForm.html" class="apply-btn">Apply Now</a>
  </div>


  <div class="left-hero-text">
    <p>Become a Chaffeur Partner With Pegasus</p>
  </div>
</section>
<section style="padding: 80px 20px; background-color: #f9f9f9; text-align: center;">
  <h2 style="font-size: 36px; font-family: 'Playfair Display', serif; margin-bottom: 20px;">
    Drive with Pegasus – Where Professionalism Meets Prestige
  </h2>
  <p style="font-size: 18px; max-width: 800px; margin: 0 auto 30px;">
    At Pegasus Transfers, we value reliability, excellence, and respect. Become a part of a growing family where your skills and service are rewarded with consistent bookings, respectful clientele, and exceptional support.
  </p>

<div class="chauffeur-benefits">
  <!-- Top Row -->
  <div class="card">
    <i class="fas fa-user-tie"></i>
    <h4>Professional Environment</h4>
    <p>Work with a company that values professionalism and courtesy in every ride.</p>
  </div>
  <div class="card">
    <i class="fas fa-calendar-check" style="color: #d37474bb;"></i>
    <h4>Flexible Scheduling</h4>
    <p>You control your hours. Choose when and how long you want to drive.</p>
  </div>
  <div class="card">
    <i class="fas fa-star" style="color: #ddc910;"></i>
    <h4>High-End Clients</h4>
    <p>Serve clients who value quality service, helping you grow your reputation.</p>
  </div>

  <!-- Bottom Row -->
  <div class="card wider">
    <i class="fas fa-money-bill-wave"></i>
    <h4>Competitive Earnings</h4>
    <p>Enjoy excellent rates and frequent rides in London's busiest zones.</p>
  </div>
  <div class="card wider">
    <i class="fas fa-headset" style="color: #109cdd;"></i>
    <h4>24/7 Driver Support</h4>
    <p>We’re always here to help you with any issues or questions you have.</p>
  </div>
</div>

<section class="driver-steps-section">
  <div class="requirements-steps-container">
    <div class="driver-steps-image">
      <img src="images/forchauffeur2.jpg" alt="Driver onboarding">
    </div>
    <div class="driver-steps-content">
      <h2>Our Basic Requirements</h2>
      <ul>
        <li><strong>1.</strong> SmartPhone mobile with working Internet.</li>
     <li><strong>2.</strong> Profile Picture.</li>
      <li><strong>3.</strong> D VLA License Front & Back</li>
      <li><strong>4.</strong> Driver Valid PCO (Paper & Badge).</li>
       <li><strong>5.</strong>Drivers National Insurance Number.</li>
       <li><strong>6.</strong> Vehicle Log Book 1st & 2nd Page V5</li>
        <li><strong>7.</strong> MOT</li>
          <li><strong>8.</strong> InsuranceCertificate(if fleet insurance, attach detail paper)</li>
          <li><strong>9.</strong> Vehicle PCO.</li>
           <li><strong>10.</strong> Vehicle Rental Agreement(if rental Vehicle).</li>
           <li><strong>11.</strong> Vehicle Front and Back photo(Show car registration plate).</li>
      </ul>
      <a href="" class="apply-btn">View Our Policy</a>
    </div>
  </div>
</section>


<section class="driver-steps-section">
  <div class="driver-steps-container">
    <div class="driver-steps-image">
      <img src="images/forchaffeur3.jpg" alt="Driver onboarding">
    </div>
    <div class="driver-steps-content">
      <h2>Get Driving in Four Easy Steps</h2>
      <ul>
        <li><strong>1.</strong> Apply through our onboarding portal</li>
        <li><strong>2.</strong> Upload your documentation for review</li>
        <li><strong>3.</strong> Complete training & a quick interview</li>
        <li><strong>4.</strong> Accept your first ride!</li>
      </ul>
      <a href="chauffeursForm.html" class="apply-btn">Apply Now</a>
    </div>
  </div>
</section>
<!-- DRIVER STANDARDS SECTION -->
<!-- DRIVER STANDARDS SECTION WITH CARDS -->
<section class="driver-standards-section" style="background: #ffffff; padding: 60px 20px;">
  <div class="max-w-6xl mx-auto text-center">
    <h2 style="font-size: 36px; font-weight: 700; color: #333; border-bottom: 2px solid #facc15; display: inline-block; margin-bottom: 30px;">
      Driver Standards & Conduct Guidelines
    </h2>
    <p style="color: #555; font-size: 18px; max-width: 800px; margin: 0 auto 50px;">
      To ensure every ride is comfortable, safe, and professional, all drivers working with us are expected to uphold the following service standards:
    </p>

    <div class="standards-grid">
      <!-- Card 1 -->
      <div class="standard-card">
        <h3>✅ Professional Attire</h3>
        <p>Drivers must wear clean, well-fitted business attire—preferably a suit and dress shoes—to maintain a polished and professional image at all times.</p>
      </div>

      <!-- Card 2 -->
      <div class="standard-card">
        <h3>✅ Vehicle Presentation</h3>
        <p>All vehicles should be thoroughly cleaned inside and out before each journey. Any signs, stickers, or indications that the vehicle is used for taxi services must be removed.</p>
      </div>

      <!-- Card 3 -->
      <div class="standard-card">
        <h3>✅ Safety Compliance</h3>
        <p>Before the journey begins, drivers must ensure that all passengers are securely buckled in. Approved child seats must be properly installed when required.</p>
      </div>

      <!-- Card 4 -->
      <div class="standard-card">
        <h3>✅ Passenger Comfort & Etiquette</h3>
        <ul>
          <li>No unpleasant smells (smoke, food, etc.)</li>
          <li>Do not initiate conversations</li>
          <li>Music only upon request</li>
          <li>No phone use while driving</li>
        </ul>
      </div>
    </div>
  </div>
</section>


<section class="faqs-section">
  <div class="faqs-container">
    <h2 class="faqs-heading">Frequently Asked Questions</h2>
    
    <div class="faq">
      <button class="faq-question">What documents do I need to apply?</button>
      <div class="faq-answer">
        <p>You will need a valid driver’s license, vehicle insurance, proof of address, and your vehicle’s registration documents.</p>
      </div>
    </div>

    <div class="faq">
      <button class="faq-question">Is there any onboarding fee?</button>
      <div class="faq-answer">
        <p>No, our onboarding process is completely free of charge. We believe in transparency and fairness.</p>
      </div>
    </div>

    <div class="faq">
      <button class="faq-question">How soon can I start driving?</button>
      <div class="faq-answer">
        <p>Once you’ve completed the documentation, training modules, and a short interview, you can begin driving within 2-3 working days.</p>
      </div>
    </div>

    <div class="faq">
      <button class="faq-question">What type of vehicle do I need?</button>
      <div class="faq-answer">
        <p>You’ll need a clean, well-maintained vehicle that meets our safety standards. Luxury and executive-class vehicles are preferred.</p>
      </div>
    </div>
  </div>
</section>
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
<script>
  function toggleMenu() {
    const navMenu = document.querySelector("nav ul");
    navMenu.classList.toggle("show");
  }
</script>
<script>
  const faqQuestions = document.querySelectorAll(".faq-question");

  faqQuestions.forEach(button => {
    button.addEventListener("click", () => {
      const faq = button.parentElement;
      faq.classList.toggle("open");
    });
  });
</script>
</body>
</html>
