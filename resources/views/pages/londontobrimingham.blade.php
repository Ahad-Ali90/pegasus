@extends('layouts.user.layout')

@section('content')
    

  <header>
 <h1>Taxi from London to Birmingham</h1>
    <p>Reliable Private Transfers from London to Birmingham – Fixed Prices & 24/7 Availability</p>
  </header>
<div class="vehicle-wrapper">
   <img src="images/brimingham.jpg" class="vehicle-image" />
</div>

 <section>
    <h2>Why Choose Pegasus Minicabs for Birmingham Transfers?</h2>
    <ul>
      <li>Fixed fare starting from £190 – no hidden charges</li>
      <li>Comfortable private transfers with experienced drivers</li>
      <li>Baby and child seats available on request</li>
      <li>Executive & MPV vehicles for families or business travel</li>
      <li>24/7 service with instant booking confirmation</li>
    </ul>
    <a class="button" href="homepage.html">Book Your Transfer Now</a>
  </section>

  <section>
    <h2>Distance and Travel Time</h2>
    <p>The distance from Central London to Birmingham is approximately 125 miles (200 km). The journey typically takes around 2 hours 30 minutes by private taxi depending on traffic.</p>
  </section>

 <section>
    <h2>Taxi Options and Prices</h2>
    <table>
      <thead>
        <tr><th>Vehicle Type</th><th>Capacity</th><th>Fare (From)</th></tr>
      </thead>
      <tbody>
        <tr><td>Saloon (Standard)</td><td>Up to 4 passengers</td><td>£190</td></tr>
        <tr><td>MPV</td><td>Up to 6 passengers</td><td>£225</td></tr>
        <tr><td>Executive</td><td>Up to 3 passengers</td><td>£240</td></tr>
        <tr><td>8-Seater Minibus</td><td>Up to 8 passengers</td><td>£260</td></tr>
   </tbody>
    </table>
  </section>
<section>
    <h2>How to Book Your London to Birmingham Taxi</h2>
    <p>Book online via our <a href="homepage.html">secure booking form</a> or call <a href="tel:+442030062690">+44 20 3006 2690</a>. We accept all major cards and email receipts are available on request.</p>
  </section>

  
  <section>
    <h2>How to Book a London to Oxford Taxi</h2>
    <p>You can book online through our <a href="homepage.html">secure booking form</a> or call our 24-hour line at <a href="tel:+442030007600">+44 20 3000 7600</a>. We accept all major cards and email receipts are available upon request.</p>
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
    <button class="faq-question">Is this service available day and night?</button>
    <div class="faq-answer">
      <p>Yes, we operate 24/7 including weekends and holidays</p>
    </div>
     <div class="faq-item">
    <button class="faq-question">Can I request a baby seat or booster seat?</button>
    <div class="faq-answer">
      <p>Yes, baby and child seats are available free of charge. Just let us know when booking.</p>
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


 @endsection