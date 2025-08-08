@extends('layouts.user.layout')

@section('content')

  <header>
    <h1>Tilbury Cruise Port Transfers</h1>
    <p>Taxi to & from London, Heathrow & Gatwick | Pegasus Minicab London</p>
  </header>

   <div class="sticky-wrapper">
    <img src="images/tilbury docs.jpg" alt="Luxury Ride" class="sticky-image">
  </div>
  <div class="content">
    <h2>Transfers to and from Tilbury Cruise Terminal</h2>
    <p>Pegasus Minicab London offers seamless, fixed-rate taxi transfers to and from <strong>Tilbury Docks Cruise Port</strong>. Whether you're heading off on a voyage or returning from one, our reliable service ensures stress-free travel.</p>

    <h2>✅ London to Tilbury Cruise Terminal</h2>
    <p>We provide door-to-door service from:</p>
    <ul>
      <li>🏨 Central London hotels, homes & business addresses</li>
      <li>✈️ Heathrow Airport (LHR)</li>
      <li>✈️ Gatwick Airport (LGW)</li>
    </ul>

    <h2>✅ Tilbury Cruise Port to London, Heathrow or Gatwick</h2>
    <p>Our drivers will be ready to greet you at the cruise terminal upon arrival and assist with your luggage for a smooth journey to your destination.</p>
    <ul>
      <li>✅ Meet & Greet included</li>
      <li>✅ Free waiting time and luggage help</li>
      <li>✅ Fixed price guarantee</li>
      <li>✅ 24/7 availability</li>
    </ul>

    <h2>Why Choose Pegasus Minicab London?</h2>
    <ul>
      <li>🚖 Executive and clean vehicles (Saloon, MPV, 8 & 9 seaters)</li>
      <li>🧑‍✈️ Professional, PCO-licensed drivers</li>
      <li>📞 Responsive customer support team</li>
      <li>📍 GPS-monitored trips and flexible schedules</li>
    </ul>

    <h2>Travel Time and Distance</h2>
    <p>The distance between Central London and Tilbury Cruise Terminal is approximately 30–40 miles. The journey takes <strong>about 1 to 1.5 hours</strong>, depending on traffic. We advise early bookings for smooth coordination with your cruise check-in time.</p>

    <h2>Book Your Tilbury Cruise Transfer</h2>
    <p>Reserve your transfer today with Pegasus Minicab London for a reliable and relaxed trip to or from Tilbury Docks.</p>

    <a href="homepage.html" class="cta-button">Book Your Tilbury Cruise Transfer</a>
  </div>


 @endsection

  <script>
    const faders = document.querySelectorAll('.fade-in');

    const appearOptions = {
      threshold: 0.1,
      rootMargin: "0px 0px -50px 0px"
    };

    const appearOnScroll = new IntersectionObserver((entries, appearOnScroll) => {
      entries.forEach(entry => {
        if (!entry.isIntersecting) {
          return;
        } else {
          entry.target.classList.add('appear');
          appearOnScroll.unobserve(entry.target);
        }
      });
    }, appearOptions);

    faders.forEach(fader => {
      appearOnScroll.observe(fader);
    });
  </script>