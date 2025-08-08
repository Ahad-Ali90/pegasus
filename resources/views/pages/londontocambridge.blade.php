@extends('layouts.user.layout')

@section('content')

  <!-- Header -->
  <header>
     <h1>Taxi from London to Cambridge</h1>
    <p>Private Transfers from London to Cambridge – Fixed Rates, Executive Cars & 24/7 Availability</p>
</header>
<div class="vehicle-card">
  <img src="images/cambridge.jpg.jpg" class="vehicle-image" />
</div>
<section>

     <h2>Why Book Your Cambridge Transfer with Pegasus Minicabs?</h2>
    <ul>
      <li>Fixed fare starting from £120 – no hidden costs</li>
      <li>Professional drivers & comfortable vehicles</li>
      <li>Baby and child seats available on request</li>
      <li>Executive and MPV cars available for groups and VIPs</li>
      <li>24/7 customer support with instant booking confirmation</li>
    </ul>
    <a class="button" href="homepage.html">Book Your Transfer Now</a>
</section>
 <section> 
    <h2>Distance and Travel Time</h2>
    <p>The distance from Central London to Cambridge is approximately 64 miles (103 km). The journey by private taxi typically takes around 1 hour 40 minutes, depending on traffic conditions.</p>
  </section>

  <section>
    <h2>Taxi Options and Prices</h2>
    <table>
      <thead>
  <tr><th>Vehicle Type</th><th>Capacity</th><th>Fare (From)</th></tr>
      </thead>
      <tbody>
         <tr><td>Saloon (Standard)</td><td>Up to 4 passengers</td><td>£120</td></tr>
        <tr><td>MPV</td><td>Up to 6 passengers</td><td>£145</td></tr>
        <tr><td>Executive</td><td>Up to 3 passengers</td><td>£160</td></tr>
        <tr><td>8-Seater Minibus</td><td>Up to 8 passengers</td><td>£180</td></tr>
    </tbody>
    </table>
  </section>
 <section>
    <h2>How to Book Your London to Cambridge Taxi</h2>
    <p>Booking is easy and instant. Use our <a href="homepage.html">online booking form</a> or call <a href="tel:+442030007600">+44 20 3000 7600</a>. We accept all major cards and offer receipts on request.</p>
  </section>
 <section class="faq-section">
  <h2 class="faq-title">Frequently Asked Questions</h2>
  <div class="faq-item">
    <button class="faq-question">Do you offer 24/7 service?</button>
    <div class="faq-answer">
      <p>Yes, Pegasus Minicabs operates around the clock including weekends and holidays.</p>
    </div>
 
  <div class="faq-item">
    <button class="faq-question">Are your fares fixed?</button>
    <div class="faq-answer">
      <p>Yes, all our prices are fixed – no hidden charges or surge pricing.</p>
    </div>
     <div class="faq-item">
    <button class="faq-question">Can I schedule a return from Cambridge?</button>
    <div class="faq-answer">
      <p>Yes, you can book both one-way and return journeys with flexible pickup times.</p>
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