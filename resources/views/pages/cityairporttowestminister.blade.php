@extends('layouts.user.layout')

@section('content')



  <!-- MAIN CONTENT -->
  <div class="main-content">
    <h1>Taxi from London City Airport to Westminster</h1>
    <p style="text-align:center; margin-bottom: 30px;">Private, fixed-fare transfers from London City Airport to Westminster with Pegasus Minicabs</p>

    <section>
      <h2>Why Choose Us?</h2>
      <ul>
        <li>✅ Fixed fare starting at £45</li>
        <li>✅ Free meet and greet at London City Airport</li>
        <li>✅ 24/7 service with instant booking confirmation</li>
        <li>✅ Flight tracking included</li>
        <li>✅ Child seats on request</li>
      </ul>
    </section>

    <section>
      <h2>Distance & Duration</h2>
      <p>The distance between London City Airport and Westminster is around 9 miles (14.5 km), with an average journey time of 30–40 minutes depending on traffic.</p>
    </section>

    <section>
      <h2>Vehicle Choices & Pricing</h2>
      <table>
        <thead>
          <tr><th>Vehicle</th><th>Capacity</th><th>Fare (from)</th></tr>
        </thead>
        <tbody>
          <tr><td>Saloon</td><td>Up to 4 passengers</td><td>£45</td></tr>
          <tr><td>MPV</td><td>Up to 4-6 passengers</td><td>£60</td></tr>
          <tr><td>Van</td><td>Up to 6-8 passengers</td><td>£70</td></tr>
        </tbody>
      </table>
    </section>

   <section style="margin-top: 40px; background-color: #fff3e0; padding: 10px 15px; border-radius: 2px;">
  <h2>How to Book</h2>
  <p style="font-size: 1.05rem; color: #222; margin-bottom: 10px;">
    Book your London City Airport to Westminster taxi easily online via our <a href="homepage.html" style="color:#d35400; text-decoration: underline;">booking form</a> or call us at 
    <a href="tel:+442030007600" style="color:#d35400; font-weight: bold;">+44 20 3000 7600</a>.<strong> or on Whatsapp: </strong><a href="https://wa.me/447354438757?text=Hello%2C%20I%20would%20like%20to%20book%20a%20ride" target="_blank">+44 7354 438757</a>
  </p>
  <p style="color:#444;">
    You'll receive driver and vehicle details via SMS and email after confirmation.
  </p>
</section>

    <section class="faq-section">
      <h2>FAQs – Gatwick to Canary Wharf Taxi</h2>

      <div class="faq-item">
        <input type="checkbox" id="faq1" />
        <label for="faq1">Do you monitor flight delays?</label>
        <div class="faq-content">
          Yes, we track all flights and adjust your pickup time accordingly. No extra charges.
        </div>
      </div>

      <div class="faq-item">
        <input type="checkbox" id="faq2" />
        <label for="faq2">Is the price fixed, or will it change with traffic?</label>
        <div class="faq-content">
          All prices are fixed—what you see is what you pay.
        </div>
      </div>

      <div class="faq-item">
        <input type="checkbox" id="faq3" />
        <label for="faq3">Where does the driver meet me at Gatwick?</label>
        <div class="faq-content">
          Inside the terminal at arrivals, holding a name board with your booking name.
        </div>
      </div>
    </section>
  </div>


 @endsection