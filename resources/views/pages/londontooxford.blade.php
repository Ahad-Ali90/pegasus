@extends('layouts.user.layout')

@section('content')


  <!-- Header -->
  <header>
  <h1>Taxi from London to Oxford</h1>
  <p>Private Transfers from London to Oxford – Fixed Prices, Executive Cars & 24/7 Availability</p>
  </header>
<div class="vehicle-card">
  <img src="images/oxford.jpg.jpg" class="vehicle-image" />
 
</div>

  <section>
    <h2>Why Choose Pegasus Minicabs for Your Oxford Transfer?</h2>
    <ul>
      <li>Fixed fare from just £110 – No hidden charges</li>
      <li>Professional drivers & clean, modern vehicles</li>
      <li>Baby and child seats available on request</li>
      <li>24/7 customer support and booking flexibility</li>
      <li>Executive & MPV vehicles for larger groups or luxury rides</li>
    </ul>
    <a class="button" href="homepage.html">Book Your Transfer Now</a>
  </section>

  <section>
    <h2>Distance and Travel Time</h2>
    <p>The journey from London to Oxford is approximately 56 miles (90 km). Travel time by taxi is around 1 hour 30 minutes depending on traffic conditions.</p>
  </section>

   <section>
    <h2>Taxi Options and Prices</h2>
    <table>
      <thead>
        <tr><th>Vehicle Type</th><th>Capacity</th><th>Fare (From)</th></tr>
      </thead>
      <tbody>
        <tr><td>Saloon (Standard)</td><td>Up to 4 passengers</td><td>£110</td></tr>
        <tr><td>MPV</td><td>Up to 6 passengers</td><td>£135</td></tr>
        <tr><td>Executive</td><td>Up to 3 passengers</td><td>£150</td></tr>
        <tr><td>8-Seater Minibus</td><td>Up to 8 passengers</td><td>£170</td></tr>
   </tbody>
    </table>
  </section>


  <section>
    <h2>How to Book a London to Oxford Taxi</h2>
    <p>You can book online through our <a href="homepage.html">secure booking form</a> or call our 24-hour line at <a href="tel:+442030007600" style="color: #457fc2; text-decoration: underline ;">+44 20 3000 7600</a>. We accept all major cards and email receipts are available upon request.</p>
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
    <button class="faq-question">Do you offer return transfers from Oxford to London?</button>
    <div class="faq-answer">
      <p>Absolutely. You can schedule return journeys in advance or on short notice.</p>
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


  
 @endsection