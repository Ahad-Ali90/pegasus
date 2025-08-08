@extends('layouts.user.layout')

@section('content')


 <div class="main-content">
    <section>
    <div class= "firstheading">
        <h1>Heathrow Airport Transfers – London’s Trusted Airport Taxi Service</h1>
        <p><strong>Fast, reliable & affordable minicab service to and from Heathrow Airport.</strong> Fixed prices | Meet & Greet | Free flight monitoring | 24/7 availability.</p>
    </div>
      </section>
    <section>
        <h2>Why Choose Pegasus for Your Heathrow Airport Transfer?</h2>
        <ul>
            <li>Fixed & competitive prices – no hidden charges</li>
            <li>Live flight monitoring for delays or early arrivals</li>
            <li>24/7 customer support and dispatch team</li>
            <li>Range of vehicles: Saloon, Estate, MPV, Executive & 8-Seaters</li>
            <li>Child seat available on request</li>
        </ul>
    </section>

    <section>
        <h2>Heathrow Pick-Up Process (Meet & Greet Included)</h2>
        <ol>
            <li>Our driver monitors your flight using real-time flight data.</li>
            <li>After your flight lands, the driver will wait up to 60 minutes free of charge.</li>
            <li>Your driver will meet you inside the terminal arrivals hall with a name board.</li>
            <li>For added convenience, you will receive the driver’s contact info before pick-up.</li>
        </ol>
        <p><strong>Optional:</strong> For kerbside pick-up, contact us after landing to avoid airport parking fees.</p>
    </section>

    <section>
        <h2>Fixed Heathrow Taxi Prices</h2>
        <table border="1">
            <thead>
                <tr>
                    <th>From/To London Areas</th>
                    <th>Saloon (1 - 4 Pax)</th>
                    <th>MPV (4 - 6 Pax)</th>
                    <th>Van (6 - 8 Pax)</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Central London (Zone 1)</td>
                    <td>from £65</td>
                    <td>from £85</td>
                    <td>from £95</td>
                    
                </tr>
                <tr>
                    <td>Canary Wharf / East London</td>
                    <td>from £75</td>
                    <td>from £95</td>
                    <td>from £105</td>
                </tr>
                <tr>
                    <td>North London</td>
                    <td>from £70</td>
                    <td>from £90</td>
                    <td>from £100</td>
                </tr>
            </tbody>
        </table>
        <p>✅ Prices include airport parking and waiting time.<br>
        ✅ All prices are <strong>fixed</strong>, regardless of traffic or delays.</p>
    </section>

    <section>
        <h2>Travelling with Luggage or Children?</h2>
        <p>No problem! Our vehicles are equipped to handle:</p>
        <ul>
            <li>Large suitcases & hand luggage</li>
            <li>Prams, pushchairs, or sports equipment</li>
            <li>Child seats (infant, toddler, booster) on request – please specify at time of booking.</li>
        </ul>
    </section>

    <!-- BOOKING SECTION -->
<section style="padding: 20px 0;">
  <h2>Book Your Heathrow Transfer Now</h2>
  <p>Booking your Heathrow airport taxi is quick and easy:</p>
  <ol>
    <li>Fill out the <a href="homepage.html">booking form</a> with pick-up and drop-off details.</li>
    <li>Receive instant confirmation via email or WhatsApp.</li>
    <li>We handle the rest — your driver arrives on time, every time.</li>
  </ol>

<p><strong>Prefer to book by phone?</strong> 
  <a href="tel:+442030062690" style="text-decoration: underline; color: inherit;">
    <i class="fas fa-phone-alt" style="font-size: 20px; color: #28a745; margin-right: 6px;"></i>
    +44 20 3000 7600
  </a>
</p>

<p><strong>Or WhatsApp:</strong>
  <a href="https://wa.me/447354438757?text=Hello%2C%20I%20would%20like%20to%20book%20a%20ride" 
     target="_blank" 
     style="color: inherit; text-decoration:underline;">
    <i class="fab fa-whatsapp" style="font-size: 22px; color: #25D366; margin-right: 6px;"></i>
    +44 7354 438757
  </a>
</p>

</section>

<!-- REVIEWS SECTION -->
<section style="margin-top: 60px;">
  <h2 style="text-align: center; margin-bottom: 30px;">⭐ What Our Customers Say</h2>
  <div style="display: flex; flex-wrap: wrap; justify-content: center; gap: 20px;">

    <!-- REVIEW 1 -->
    <div style="background: #f9f9f9; border-left: 5px solid #f57c00; border-radius: 10px; padding: 20px; max-width: 450px; box-shadow: 0 4px 8px rgba(0,0,0,0.08);">
      <p style="font-style: italic;">“Pegasus were brilliant. We landed at T5, the driver was waiting with a board and even helped with bags. Smooth journey into Kensington!”</p>
      <div style="margin-top: 10px; font-weight: bold;">Ahmed S.</div>
      <div style="color: #25D366; font-size: 18px;">★★★★★</div>
    </div>

    <!-- REVIEW 2 -->
    <div style="background: #f9f9f9; border-left: 5px solid #f57c00; border-radius: 10px; padding: 20px; max-width: 450px; box-shadow: 0 4px 8px rgba(0,0,0,0.08);">
      <p style="font-style: italic;">“Excellent Heathrow pick-up for our family of five. Spacious MPV, driver arrived early, car was spotless. Highly recommend!”</p>
      <div style="margin-top: 10px; font-weight: bold;">James W.</div>
      <div style="color: #25D366; font-size: 18px;">★★★★★</div>
    </div>

  </div>
</section>


    <section>
        <h2>Also Offering Return Transfers</h2>
        <p>Heading <strong>from London to Heathrow</strong>? We provide:</p>
        <ul>
            <li>Early morning and late-night pickups</li>
            <li>Hotel, Airbnb, and private residence pickups</li>
            <li>Multiple pickup or drop-off points for group travel</li>
        </ul>
        <h2>Other Airports We Cover</h2>
        <ul>
            <li><a href="gatwickairport.html">Gatwick Airport Transfers</a></li>
            <li><a href="stansted.html">Stansted Airport Transfers</a></li>
            <li><a href="luton.html">Luton Airport Transfers</a></li>
            <li><a href="lonodncity.html">London City Airport Transfers</a></li>
        </ul>
    </section>
 </div>
    @endsection