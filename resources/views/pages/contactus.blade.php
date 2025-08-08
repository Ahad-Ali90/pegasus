@extends('layouts.user.layout')

@section('content')

<div style="height: 130px;">

</div>

<section class="hero">
  <div class="hero-background">
    <video autoplay muted loop playsinline>
      <source src="images/contact.mp4" type="video/mp4" />
      Your browser does not support the video tag.
    </video>
  </div>
</section>
<section class="contact-container">
  <div class="contact-wrapper">
    <div class="contact-card contact-info">
      <h2>Reach Us Directly</h2>

    <p>
      <i class="fas fa-phone phone-icon" style="color: #2bc94d;"></i>
      <a href="tel:+442030062690" style="color: inherit; text-decoration: none;">
        +44 2030 062690
      </a>
    </p>

    <p>
      <i class="fab fa-whatsapp " style="color:#2bc94d;"></i>
      <a href="https://wa.me/447354438757?text=Hello%2C%20I%20would%20like%20to%20book%20a%20ride" style="color: inherit; text-decoration: none;">
        +44 7354 438757
      </a>
    </p>

    <p>
      <i class="fa-regular fa-envelope email-icon" style="color: #2bc94d;"></i>
      <a href="mailto:leccars7@gmail.com" style="color: inherit; text-decoration: none;">
        leccars7@gmail.com
      </a>
    </p>

    <p>
      <i class="fas fa-map-marker-alt" style="color: #c9302b;"></i>
      London, UK
    </p>

    <p>
      <i class="fas fa-clock" style="color: #000000;"></i>
      24/7 Customer Support
    </p>
 
  </div>
 <div class="contact-card contact-form">
      <h2>Get In Touch With Pegasus Transfers</h2>
   <form action="mailto:hayaakhlq@gmail.com" method="post" enctype="text/plain">

      <input type="text" placeholder="Your Name" required />
      <input type="email" placeholder="Your Email" required />
      <input type="tel" placeholder="Your Phone" />
      <textarea rows="5" placeholder="Your Message" required></textarea>
      <button type="submit">SUBMIT</button>
    </form>
  </div>
  </div>
</section>
<section class="map-section">
  <iframe
    src="images/https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d39764.94205590373!2d-0.14401384720135097!3d51.391209520477936!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4876093d57e660a5%3A0x91dc2a63bda6f3b!2sChallenge%20House%2C%20616%20Mitcham%20Rd%2C%20Croydon%20CR0%203AA%2C%20UK!5e0!3m2!1sen!2suk!4v1721300000000!5m2!1sen!2suk"
    width="100%" height="350" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
  </iframe>
</section>

 @endsection