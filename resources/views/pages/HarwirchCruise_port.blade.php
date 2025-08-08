@extends('layouts.user.layout')

@section('content')

  <!-- Header -->
  <header>
    <h1>Harwich Cruise Port Transfers</h1>
    <p>Taxi To & From London, Heathrow, Gatwick, Stansted & Luton | Pegasus Minicab London</p>
  </header>
<div class="sticky-wrapper">
    <img src="images/dover.jpg" alt="Cruise Ship" class="sticky-image">
  </div>
 <div class="content fade-in">
    <h2>Harwich Cruise Transfers with Airport Coverage</h2>
    <p>Pegasus Minicab London offers dependable, fixed-price private taxi transfers to and from <strong>Harwich Cruise Port</strong> for travelers arriving at or departing from <strong>Heathrow, Gatwick, Stansted, Luton, and Central London</strong>.</p>

    <h2>✅ London & Airport to Harwich Cruise Port</h2>
    <p>We collect you from:</p>
    <ul>
      <li>🏙️ Central London</li>
      <li>✈️ Heathrow Airport (LHR)</li>
      <li>✈️ Gatwick Airport (LGW)</li>
      <li>✈️ Stansted Airport (STN)</li>
      <li>✈️ Luton Airport (LTN)</li>
    </ul>

    <h2>✅ Harwich to London & All Airports</h2>
    <p>Returning from your cruise? We’ll greet you at the terminal and drop you off directly at:</p>
    <ul>
      <li>✔️ Heathrow, Gatwick, Stansted or Luton Airport</li>
      <li>✔️ Any hotel or address in London</li>
    </ul>


     <h2>Why Book with Pegasus?</h2>
    <ul>
      <li>✅ Fixed pricing – no hidden charges</li>
      <li>✅ Clean executive vehicles: Saloon, MPV, 8-seaters</li>
      <li>✅ Meet & greet + luggage help</li>
      <li>✅ Available 24/7 including early morning pickups</li>
    </ul>

    <h2>Journey Time</h2>
    <p>The journey takes approx. <strong>2.5 to 3 hours</strong> depending on location and traffic. Advance booking recommended for cruises and flights.</p>

    <h2>Book Your Harwich Transfer Now</h2>
    <p>Reserve your trip with Pegasus Minicab London for a smooth, safe and professional experience to or from Harwich Cruise Port.</p>

    <a href="homepage.html" class="cta-button">Book Now</a>
  </div>
<script>
    const faders = document.querySelectorAll('.fade-in');

    const appearOptions = {
      threshold: 0.15,
      rootMargin: "0px 0px -50px 0px"
    };

    const appearOnScroll = new IntersectionObserver(function(entries, observer) {
      entries.forEach(entry => {
        if (!entry.isIntersecting) return;
        entry.target.classList.add("show");
        observer.unobserve(entry.target);
      });
    }, appearOptions);

    faders.forEach(fader => {
      appearOnScroll.observe(fader);
    });
  </script>

 @endsection