@extends('layouts.user.layout')

@section('content')


  <!-- Header -->
  <header>
    <h1>Portsmouth Cruise Port Transfers</h1>
    <p>Taxi To & From London, Heathrow & Gatwick | Pegasus Minicab London</p>
  </header>

  <!-- Sticky Image 1 -->
  <div class="sticky-wrapper">
    <img src="images/portsmouth1.jpg" alt="Portsmouth Cruise Ship" class="sticky-image">
  </div>

  <!-- Content Block 1 -->
  <div class="content fade-in">
    <h2>Transfers To & From Portsmouth Cruise Port</h2>
    <p>Pegasus Minicab London offers professional, fixed-price private transfers to and from <strong>Portsmouth International Port</strong>. Whether you're sailing from or returning to Portsmouth, we’ll get you to and from <strong>London, Heathrow, and Gatwick</strong> with comfort and reliability.</p>

    <h2>✔ Airport & London Pickups to Portsmouth</h2>
    <p>We provide direct transfers from:</p>
    <ul>
      <li>🏙️ Central London locations</li>
      <li>✈️ Heathrow Airport</li>
      <li>✈️ Gatwick Airport</li>
    </ul>
  </div>

  <!-- Sticky Image 2 -->
  <div class="sticky-wrapper">
    <img src="images/portsmouth2.jpg" alt="Luxury Ride" class="sticky-image">
  </div>

  <!-- Content Block 2 -->
  <div class="content fade-in">
    <h2>✔ Portsmouth to London & Airports</h2>
    <p>After your cruise, we’ll meet you at the terminal exit and drive you safely to your destination in London or any major airport.</p>
    <ul>
      <li>✅ Door-to-door drop-off</li>
      <li>✅ Free meet and greet</li>
      <li>✅ Fixed-price service</li>
      <li>✅ 24/7 availability</li>
    </ul>

    <h2>Why Book With Pegasus Minicab London?</h2>
    <ul>
      <li>🚘 Executive vehicles: Saloon, MPV, 8-seaters & 9 Seater minibus</li>
      <li>💼 Luggage help included</li>
      <li>💳 Fixed pricing confirmed at booking</li>
      <li>📞 Live customer support 24/7</li>
    </ul>

    <h2>Journey Time</h2>
    <p>The journey from Portsmouth to London typically takes <strong>2 to 2.5 hours</strong>. Timing may vary based on traffic and location.</p>

    <h2>Book Your Portsmouth Transfer Now</h2>
    <p>Get to or from Portsmouth Cruise Port in style. Book online with Pegasus Minicab London for stress-free travel to and from your cruise terminal.</p>

    <a href="homepage.html" class="cta-button">Book Now</a>
  </div>

  <!-- Fade-In Scroll Script -->
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