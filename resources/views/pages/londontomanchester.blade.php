@extends('layouts.user.layout')

@section('content')

  <!-- Header -->
  <header>
    <h1>Private Taxi from London to Manchester</h1>
    <p>Fixed Fare · Executive Cars & Vans · 24/7 Service · Instant Booking</p>
  </header>
<div class="vehicle-card">
  <img src="images/manchester.jpg" class="vehicle-image" />
</div>
<section>
      <h2>Why Travel with Pegasus Minicabs?</h2>
      <ul>
        <li>Fixed fare from just £290</li>
        <li>Comfortable saloon, MPV,executive & van vehicles</li>
        <li>Child seats upon request</li>
        <li>Trusted long-distance operator</li>
        <li>24/7 live support</li>
      </ul>
      <a class="button" href="homepage.html">Book Your Taxi Now</a>
    </section>

    <section>
      <h2>Journey Info</h2>
      <p><strong>Distance:</strong> Approx. 200 miles (322 km)</p>
      <p><strong>Estimated Time:</strong> 4 to 4.5 hours depending on traffic</p>
    </section>
 
    <section>
      <h2>Taxi Options & Prices</h2>
     <table>
      <thead>
        <tr><th>Vehicle Type</th><th>Passengers</th><th>Fare (From)</th></tr>
      </thead>
</tbody>
        <tr><td>Saloon (Standard)</td><td>Up to 4</td><td>£290</td></tr>
        <tr><td>MPV</td><td>Up to 6</td><td>£340</td></tr>
        <tr><td>Executive</td><td>Up to 3</td><td>£370</td></tr>
        <tr><td>8-Seater Minibus</td><td>Up to 8</td><td>£395</td></tr>
        </tbody>
    </table>
  </section>


<section class="faq-section">
  <h2 class="faq-title">Frequently Asked Questions</h2>
  <div class="faq-item">
    <button class="faq-question">Is your London to Manchester taxi service available 24/7?</button>
    <div class="faq-answer">
      <p>Yes, we operate 24/7 including early mornings, late nights, weekends and holidays.</p>
    </div>
 
  <div class="faq-item">
    <button class="faq-question">Are your fares fixed?</button>
    <div class="faq-answer">
      <p>Yes, all our prices are fixed – no hidden charges or surge pricing.</p>
    </div>
     <div class="faq-item">
    <button class="faq-question">How long does the journey take?</button>
    <div class="faq-answer">
      <p>Usually between 4 and 4.5 hours depending on traffic and pickup point in London.</p>
    </div>
     <div class="faq-item">
    <button class="faq-question">Can I request a baby seat or booster seat?</button>
    <div class="faq-answer">
      <p>Yes, baby and child seats are available. Just let us know when booking.</p>
    </div>
     <div class="faq-item">
    <button class="faq-question">Will I receive a confirmation?</button>
    <div class="faq-answer">
      <p>Yes, instant confirmation will be sent via email or SMS once your booking is complete.</p>
    </div>
  </div>
  </div>
 
</section>
<script>
  const faqButtons = document.querySelectorAll('.faq-question');

  faqButtons.forEach(button => {
    button.addEventListener('click', () => {
      button.classList.toggle('active');
      const answer = button.nextElementSibling;
      if (button.classList.contains('active')) {
        answer.style.maxHeight = answer.scrollHeight + 'px';
      } else {
        answer.style.maxHeight = null;
      }
    });
  });
</script>
  
    

 @endsection