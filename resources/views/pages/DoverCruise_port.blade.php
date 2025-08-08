@extends('layouts.user.layout')

@section('content')

  <!-- Header -->
  <header>
    <h1>Dover Cruise Port Transfers</h1>
    <p>Taxi to & from London, Heathrow & Gatwick | Pegasus Minicab London</p>
  </header>
<div class="sticky-wrapper">
    <img src="images/dover.jpg" alt="Cruise Ship" class="sticky-image">
  </div>
 <div class="content fade-in">

<h2>Transfers to and from Dover Cruise Port</h2>
    <p>Pegasus Minicab London provides reliable and professional taxi transfers to and from <strong>Dover Cruise Port</strong>. Whether you're heading to the terminal to start your cruise or need a return trip to London or the airport, our drivers ensure a smooth, timely, and safe journey.</p>

    <h2>✅ London to Dover Cruise Terminal</h2>
    <p>We cover all pickup locations including:</p>
    <ul>
      <li>📍 Central London hotels and residences</li>
      <li>✈️ Heathrow Airport (LHR)</li>
      <li>✈️ Gatwick Airport (LGW)</li>
    </ul>

    <h2>✅ Dover Cruise Port to London, Heathrow or Gatwick</h2>
    <p>After your cruise, we’ll be waiting to greet you at the terminal exit, ready to take you to your destination—whether it’s an airport or hotel.</p>
    <ul>
      <li>✅ Meet & Greet at terminal exit</li>
      <li>✅ Help with luggage</li>
      <li>✅ No hidden fees – Fixed price guarantee</li>
      <li>✅ Available 24/7, even early mornings</li>
    </ul>
 </div>
  <div class="sticky-wrapper">
    <img src="images/dover2.jpg" alt="Luxury car driving" class="sticky-image">
  </div>
  <div class="content fade-in">
    <h2>Why Travel with Pegasus Minicab London?</h2>
    <ul>
      <li>🚘 Clean, executive-class vehicles (Saloon, MPV, 8-Seaters & 9 Seaters)</li>
      <li>🧑‍✈️ Friendly, fully licensed drivers</li>
      <li>📱 Live support team for urgent queries</li>
      <li>📡 GPS-tracked pickups and flexible schedules</li>
    </ul>

    <h2>How Long Is the Journey?</h2>
    <p>The trip from Central London to Dover Cruise Port takes approximately <strong>2 to 2.5 hours</strong>. We recommend booking in advance to avoid last-minute rush and ensure on-time arrival.</p>

    <h2>Book Your Dover Cruise Transfer Today</h2>
    <p>We make it easy to get to your cruise ship in style and comfort. Book now for a smooth experience to or from Dover Port.</p>

    <a href="homepage.html" class="cta-button">Book Your Dover Cruise Transfer</a>
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