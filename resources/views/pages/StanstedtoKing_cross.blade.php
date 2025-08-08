@extends('layouts.user.layout')

@section('content')

<section>
  <div class=".header1" style="margin-top: 120px; text-align: center; text-decoration: solid; font-size: 26px;">
    <h1>Taxi from Stansted Airport to King's Cross</h1>
    <p>Comfortable, fixed-price airport transfers from Stansted to King's Cross with Pegasus Minicabs</p>
  </div>
</section>

<!-- Main Content -->
<div class="main-content">
  <section>
    <h2>Why Book With Us?</h2>
    <ul>
      <li>✅ Fixed fares starting from £90</li>
      <li>✅ Free meet and greet inside Stansted arrivals</li>
      <li>✅ 30 minutes free waiting time after landing</li>
      <li>✅ Real-time flight monitoring included</li>
      <li>✅ Choice of saloon, MPV or executive vehicles</li>
    </ul>
  </section>

  <section>
    <h2>Journey Details</h2>
    <p>The distance from Stansted Airport to King's Cross is about 37 miles (60 km), and the journey time usually ranges between 60 to 75 minutes depending on traffic.</p>
  </section>

  <section>
    <h2>Vehicle Options & Pricing</h2>
    <table>
      <thead>
        <tr><th>Vehicle</th><th>Capacity</th><th>Fare (from)</th></tr>
      </thead>
      <tbody>
          <tr><td>Saloon</td><td>Up to 1-4 passengers</td><td>£90</td></tr>
          <tr><td>MPV</td><td>Up to 4-6 passengers</td><td>£105</td></tr>
          <tr><td>Van</td><td>Up to 6-8 passengers</td><td>£115</td></tr>
      </tbody>
    </table>
  </section>

  <section style="margin-top: 40px; background-color: #fff3e0; padding: 25px 20px; border-radius: 10px;">
    <h2>Book Now</h2>
    <p style="font-size: 1.05rem; color: #222; margin-bottom: 10px;">
      Book your Stansted to King's Cross taxi easily online via our 
      <a href="homepage.html" style="color:#d35400; text-decoration: underline;">booking form</a> or call us at 
      <a href="tel:+442030007600" style="color:#d35400; font-weight: bold;">+44 20 3000 7600</a>. 
      <strong> or on WhatsApp: </strong>
      <a href="https://wa.me/447354438757?text=Hello%2C%20I%20would%20like%20to%20book%20a%20ride" target="_blank">+44 7354 438757</a>
    </p>
    <p style="color:#444;">You'll receive driver and vehicle details via SMS and email after confirmation.</p>
  </section>

  <!-- Styled FAQs -->
  <section class="faq-section">
    <h2>FAQs – Stansted to King's Cross Transfers</h2>

    <div class="faq-item">
      <input type="checkbox" id="faq1" />
      <label for="faq1">Do you include meet & greet?</label>
      <div class="faq-content">
        Yes. Your driver will meet you inside the terminal at the arrival gate with a name board.
      </div>
    </div>

    <div class="faq-item">
      <input type="checkbox" id="faq2" />
      <label for="faq2">Will the fare change if there's traffic?</label>
      <div class="faq-content">
        No. All fares are fixed regardless of traffic conditions.
      </div>
    </div>

    <div class="faq-item">
      <input type="checkbox" id="faq3" />
      <label for="faq3">Can I request a child seat?</label>
      <div class="faq-content">
        Yes, child seats are available upon request during booking.
      </div>
    </div>
  </section>
</div>
</body>
@endsection