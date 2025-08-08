@extends('layouts.user.layout')

@section('content')
  <header>
     <h1>Taxi from London to Bath</h1>
    <p>Private Transfers · Fixed Rates · Executive Vehicles · 24/7 Availability</p>
  </header>
 <div class="vehicle-wrapper">
   <img src="images/bath,uk.jpg" class="vehicle-image" />
</div>
 <section>
      <h2>Why Travel with Pegasus Minicabs?</h2>
      <ul>
        <li>Fixed fare from just £195</li>
        <li>Professional, licensed drivers</li>
        <li>Clean, modern vehicles including MPVs,executive cars & Vans</li>
        <li>Baby seats available on request</li>
        <li>24/7 service with instant confirmation</li>
      </ul>
      <a class="button" href="homepage.html">Book Your Taxi Now</a>
    </section>

    <section>
      <h2>Distance and Journey Duration</h2>
      <p><strong>Distance:</strong> Approx. 115 miles (185 km)</p>
      <p><strong>Estimated Time:</strong> Around 2 hours 30 minutes depending on traffic</p>
    </section>

    <section>
      <h2>Taxi Prices from London to Bath</h2>
 <table>
      <thead>
        <tr><th>Vehicle Type</th><th>Passengers</th><th>Fare (From)</th></tr>
      </thead>
      <tbody>
        <tr><td>Saloon (Standard)</td><td>Up to 4</td><td>£195</td></tr>
        <tr><td>MPV</td><td>Up to 6</td><td>£225</td></tr>
        <tr><td>Executive</td><td>Up to 3</td><td>£245</td></tr>
        <tr><td>8-Seater Minibus</td><td>Up to 8</td><td>£270</td></tr>
   </tbody>
    </table>
  </section>
<section class="faq-section">
  <h2 class="faq-title">Frequently Asked Questions</h2>
  <div class="faq-item">
    <button class="faq-question">What is the estimated travel time from London to Oxford?</button>
    <div class="faq-answer">
      <p>The journey takes approximately 1 hour and 30 minutes, depending on traffic conditions.</p>
    </div>
 
  <div class="faq-item">
    <button class="faq-question">Are your fares fixed?</button>
    <div class="faq-answer">
      <p>Yes, all our prices are fixed – no hidden charges or surge pricing.</p>
    </div>
     <div class="faq-item">
    <button class="faq-question">Do you provide 24/7 taxi service from London to Bath?</button>
    <div class="faq-answer">
      <p>Yes, our service runs 24 hours a day, 7 days a week – including holidays.</p>
    </div>
     <div class="faq-item">
    <button class="faq-question">How far is Bath from London by taxi?</button>
    <div class="faq-answer">
      <p>The journey is around 115 miles and takes about 2.5 hours depending on your pickup point in London.</p>
    </div>
     <div class="faq-item">
    <button class="faq-question">Can I book a return journey?</button>
    <div class="faq-answer">
      <p>Yes, we can arrange both one-way and return transfers to and from Birmingham.</p>
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

  
  <section>
    <h2>How to Book Your London to Bath Taxi</h2>
    <p>Booking is easy and instant. Use our <a href="homepage.html">online booking form</a> or call <a href="tel:+442030007600">+44 20 3000 7600</a>. We accept all major cards and offer receipts on request.</p>
  </section>
 @endsection