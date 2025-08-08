@extends('layouts.user.layout')

@section('content')


  <!-- Header -->
  <header>
    <h1>Southampton Cruise Port Transfers</h1>
    <p>Private Taxis To & From London, Heathrow, Gatwick | Pegasus Minicab London</p>
  </header>

  <!-- Sticky Hero Image 1 -->
  <div class="sticky-wrapper">
    <img src="images/southhamptoncruiseport.jpg" alt="Cruise Ship" class="sticky-image">
  </div>

  <!-- Content Block 1 -->
  <div class="content fade-in">
    <h2>Southampton Cruise Port Transfers (One-Way & Return)</h2>
    <p>Pegasus Minicab London offers smooth, reliable private transfers to and from <strong>Southampton Cruise Terminals</strong>. Whether you are departing from London or arriving back from a cruise, our drivers ensure a hassle-free journey—every time.</p>

    <h2>✔ London to Southampton Cruise Terminals</h2>
    <p>Departing for your cruise? We provide door-to-door transfers from:</p>
    <ul>
      <li>🏙️ Central London Hotels & Residences</li>
      <li>✈️ London Heathrow Airport (LHR)</li>
      <li>✈️ London Gatwick Airport (LGW)</li>
    </ul>
  </div>

 
  <div class="sticky-wrapper">
    <img src="images/southampton2.jpg" alt="Luxury car driving" class="sticky-image">
  </div>

  <!-- Content Block 2 -->
  <div class="content fade-in">
    <h2>✔ Southampton Cruise Port to London, Heathrow or Gatwick</h2>
    <p>Just disembarked your cruise? We’ll meet you right at the terminal and transfer you directly to your hotel, airport or home address in London.</p>
    <ul>
      <li>✅ Meet & Greet at the cruise terminal</li>
      <li>✅ Help with luggage</li>
      <li>✅ Fixed-price, no surprise fares</li>
      <li>✅ 24/7 service, including early mornings</li>
    </ul>

    <h2>Why Choose Pegasus Minicab London?</h2>
    <ul>
      <li>🚖 Executive, MPV, 8 Seater Van & 9 Seater minibus vehicles available</li>
      <li>👨‍✈️ Experienced, licensed professional drivers</li>
      <li>📞 Live customer support 24/7</li>
      <li>📍 GPS-tracked vehicles with punctual pickups</li>
    </ul>

    <h2>How Long Is the Journey?</h2>
    <p>Transfers from London to Southampton Cruise Port typically take between <strong>1 hour 45 minutes to 2 hours 15 minutes</strong>, depending on traffic. We recommend early pickups for cruise departures and flexible scheduling for return trips.</p>

    <h2>Book Now for Peace of Mind</h2>
    <p>Start or finish your cruise journey the right way. Let Pegasus Minicab London handle your transfers to and from Southampton Cruise Port.</p>

    <a href="homepage.html" class="cta-button">Book Your Cruise Port Transfer</a>
  </div>

  <!-- Scroll-triggered Fade-in Script -->
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