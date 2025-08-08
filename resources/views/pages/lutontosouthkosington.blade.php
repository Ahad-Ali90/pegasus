@extends('layouts.user.layout')

@section('content')

<section>
  <div class=".header1" style="margin-top: 120px; text-align: center; text-decoration: solid; font-size: 26px;">
    <h1>Taxi from Luton Airport to South Kensington</h1>
    <p>Reliable and affordable airport transfers from Luton to South Kensington with Pegasus Minicabs</p>
  </div>
</section>

<!-- Main Content -->
<div class="main-content">
  <section>
    <h2>Why Travel With Pegasus?</h2>
    <ul>
      <li>✅ Fixed fares starting at £80</li>
      <li>✅ Free meet & greet at Luton arrivals</li>
      <li>✅ 24/7 availability with instant booking</li>
      <li>✅ Flight tracking and free 30 min wait</li>
      <li>✅ Child and baby seats available.</li>
    </ul>
  </section>

  <section>
    <h2>Distance & Travel Time</h2>
    <p>The distance from Luton Airport to South Kensington is approximately 35 miles (56 km). Journey time varies between 60–75 minutes depending on traffic.</p>
  </section>

  <section>
    <h2>Vehicle Options & Pricing</h2>
    <table>
      <thead>
        <tr><th>Vehicle</th><th>Capacity</th><th>Fare (from)</th></tr>
      </thead>
      <tbody>
          <tr><td>Saloon</td><td>Up to 1-4 passengers</td><td>£85</td></tr>
          <tr><td>MPV</td><td>Up to 4-6 passengers</td><td>£95</td></tr>
          <tr><td>Van</td><td>Up to 6-8 passengers</td><td>£105</td></tr>
      </tbody>
    </table>
  </section>

  <section style="margin-top: 40px; background-color: #fff3e0; padding: 25px 20px; border-radius: 10px;">
    <h2>How to Book</h2>
    <p style="font-size: 1.05rem; color: #222; margin-bottom: 10px;">
      Book your Luton Airport to South Kensington taxi easily online via our 
      <a href="homepage.html" style="color:#d35400; text-decoration: underline;">booking form</a> or call us at 
      <a href="tel:+442030007600" style="color:#d35400; font-weight: bold;">+44 20 3000 7600</a>. 
      <strong> or on WhatsApp: </strong>
      <a href="https://wa.me/447354438757?text=Hello%2C%20I%20would%20like%20to%20book%20a%20ride" target="_blank">+44 7354 438757</a>
    </p>
    <p style="color:#444;">You'll receive driver and vehicle details via SMS and email after confirmation.</p>
  </section>

  <!-- Styled FAQs -->
  <section class="faq-section">
    <h2>FAQs – Luton to South Kensington</h2>

    <div class="faq-item">
      <input type="checkbox" id="faq1" />
      <label for="faq1">How long will the driver wait?</label>
      <div class="faq-content">
        We include 60 minutes free waiting after flight landing time. Longer delays? We adjust accordingly based on flight tracking.
      </div>
    </div>

    <div class="faq-item">
      <input type="checkbox" id="faq2" />
      <label for="faq2">Are child seats available?</label>
      <div class="faq-content">
        Yes, child seats are available upon request during booking.
      </div>
    </div>

    <div class="faq-item">
      <input type="checkbox" id="faq3" />
      <label for="faq3">Is the fare fixed or metered?</label>
      <div class="faq-content">
        All fares are fixed at booking time, regardless of traffic.
      </div>
    </div>
  </section>
</div>

@endsection