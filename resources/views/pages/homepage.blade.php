@extends('layouts.user.layout')

@section('content')


<section class="hero">

 <div class="hero-background">
  <img src="{{ asset('images/hoempage1.jpg') }}" alt="Background"
  style="position: absolute; top: 0; left: 0; width: 100vw; height: 100vh; object-fit: cover; z-index: -2;">
 
</div>
 
  <div class="left-hero-text">
  <p>Welcome to Pegasus Transfers – Your Trusted London Airport Transfers Partner</p>
  <p>Pegasus Transfers offers fast, reliable, and professional airport transfer services in London, including Heathrow, Gatwick, Stansted, and Luton. Whether you need a taxi, executive car, or chauffeur service, we ensure a smooth journey every time.</p>
</div>
@include('layouts.user.bookingForm')
</section>


<section style="padding: 60px 20px; background-color: #f9f9f9;" id="services">
  <div style="max-width: 1200px; margin: 0 auto; text-align: center;">
    <h2 style="font-size: 42px; font-weight: bold; margin-bottom: 40px; color: #000000; font-family: 'Playfair Display', serif;">
      Our Services
    </h2>
     
    <div class="services-grid">
   
       <a href="airporttransfers.html" class="service-link">
      <div class="service-card">
        <img src="{{ asset('images/airport transfers 50.jpg') }}" alt="Airport Transfers" class="service-image">
        <div class="service-content">
          <h3 class="service-title">Airport Transfers</h3>
          <p class="service-description">Reliable, on-time airport pickups and drop-offs to all major airports in London.</p>
        </div>
      </div>
      </a>

       <a href="hourlyhire.html" class="service-link">
      <div class="service-card">
        <img src="{{ asset('images/hourlyhiring.jpg') }}" alt="Hourly Hire" class="service-image">
        <div class="service-content">
          <h3 class="service-title">Hourly Hire</h3>
          <p class="service-description">Hire a chauffeur by the hour — ideal for meetings, shopping, and city exploration.</p>
        </div>
      </div>
      </a>

       <a href="citytocityrides.html" class="service-link">
      <div class="service-card">
        <img src="{{ asset('images/privatjetpagasus.jpg') }}" alt="City to City Rides" class="service-image">
        <div class="service-content">
          <h3 class="service-title">City to City Rides</h3>
          <p class="service-description">Enjoy premium, long-distance rides between cities with comfort and style.</p>
        </div>
      </div>
    </div>
  </div>
  </a>
</section>


<section style="padding: 60px 20px; background-color: #ffffff;">
  <div style="max-width: 1200px; margin: 0 auto; text-align: center;">
    <h2 style="font-size: 42px; font-weight: bold; margin-bottom: 40px; color: #000000; font-family: 'Playfair Display', serif;">
      Additional Services
    </h2>

    <div class="services-grid">
      <!-- Child Seat -->
      <div class="service-card">
        <img src="{{ asset('images/child seat.png') }}" alt="Child Seat" class="service-image">
        <div class="service-content">
          <h3 class="service-title">Child Seat Available</h3>
          <p class="service-description">Ensure your child's safety and comfort with our secure child seat options upon request.</p>
        </div>
      </div>

      <!-- Water Bottles -->
      <div class="service-card">
        <img src="{{ asset('images/waterbottleservice.jpg') }}" alt="Water Bottles" class="service-image">
        <div class="service-content">
          <h3 class="service-title">Complimentary Water Bottles</h3>
          <p class="service-description">Stay refreshed during your journey with complimentary mineral water in all rides.</p>
        </div>
      </div>

      <!-- Free Wi-Fi -->
      <div class="service-card">
        <img src="{{ asset('images/freewifi.png') }}" alt="Free Wi-Fi" class="service-image">
        <div class="service-content">
          <h3 class="service-title">Free Wi-Fi in Every Ride</h3>
          <p class="service-description">Stay connected on the go with fast and secure in-car Wi-Fi — great for business or leisure!</p>
        </div>
      </div>
    </div>
  </div>
</section>



<section class="cab-services" style="padding: 80px 20px; background-color: #ececec;">
  <h3 style="text-align: center; font-size: 42px; font-weight: bold; margin-bottom: 40px; color: #000;font-family: 'Playfair Display', serif;">
    Our Fleet
  </h3>
  <div style="overflow-x: auto; white-space: nowrap; padding-bottom: 20px;">
    <style>
      .cab-card {
        display: inline-block;
        background: #fff;
        border-radius: 16px;
        box-shadow: 0 4px 10px rgba(0,0,0,0.1);
        margin: 0 15px;
        width: 390px;
        vertical-align: top;
        overflow: hidden;
        font-family: 'Inter', sans-serif;
      }

      .cab-image {
        width: 100%;
        height: 240px;
        object-fit: contain;
height: 180px;
background-color: #f5f5f5;
      }

      .cab-content {
        padding: 20px;
        box-sizing: border-box;
      }

      .cab-title {
        font-size: 22px;
        font-weight: bold;
        margin-bottom: 6px;
        color: #000;
      }

      .cab-line {
        height: 4px;
        width: 60px;
        background: linear-gradient(to right, #f57c00, #ffd700);
        border-radius: 3px;
        margin: 10px 0 14px;
      }

      .cab-sub {
        font-size: 14px;
        color: #555;
        margin-bottom: 16px;
      }

      .cab-feature {
        font-size: 14px;
        color: #000;
        margin-bottom: 8px;
        display: flex;
        align-items: start;
        line-height: 1.4em;
      }

      .cab-feature i {
        color: #d4af37;
        margin-right: 8px;
        min-width: 18px;
      }

      .cab-price {
        font-size: 15px;
        color: #d35400;
        margin-top: 12px;
        font-weight: bold;
      }
    </style>
    @foreach($cars as $car)
    @if($car->features->isNotEmpty())
    <div class="cab-card">
      <img src="{{ asset('storage/' . $car->main_image) }}"  alt="{{ $car->name }}" class="cab-image">
      <div class="cab-content">
        <div class="cab-title">{{ $car->name }}</div>
        <div class="cab-line"></div>
        <div class="cab-sub">{{ $car->model }}</div>
        <div class="cab-feature"><i class="fas fa-user-friends"></i> {{ $car->features[0]->description}}</div>
       <div class="cab-feature" style="white-space: normal; word-break: break-word;">
        <i class="fas fa-suitcase"></i> {{ $car->features[1]->description}}
      </div>
        <div class="cab-price">Starting from £{{ $car->price }}</div>
        <a href="{{ route('car.show', $car->slug) }}" style="display: inline-block; margin-top: 15px;  background: linear-gradient(to right, red, orange); color: white; padding: 10px 20px; border-radius: 6px; text-decoration: none; font-weight: 600; transition: background 0.3s;">
        Learn More
      </a>
      </div>
    </div>
    @endif
    @endforeach
  </div>
</section>
<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>

<section class="city-routes">
  <h2>Popular Routes from London</h2>
  <div class="routes-grid">

    <a href="{{ route('heathrowairport') }}"class="route-link">
      <div class="route-card">
        <img src="{{ asset('images/AdobeStock_331179729.jpeg') }}" alt="Heathrow" />
        <h3>London → Heathrow Airport</h3>
        <p>Smooth & stress-free airport rides.</p>
      </div>
    </a>

    <a href="{{ route('gatwickairport') }}" class="route-link">
      <div class="route-card">
        <img src="{{ asset('images/gatwick.jpg') }}" alt="Gatwick" />
        <h3>London → Gatwick Airport</h3>
        <p>Reliable transfers for every flight.</p>
      </div>
    </a>

     <a href="{{ route('LondontoOxford') }}" class="route-link">
      <div class="route-card">
        <img src="{{ asset('images/oxford.jpg.jpg') }}" alt="Oxford" />
        <h3>London → Oxford</h3>
        <p>Classy journeys to the city of scholars.</p>
      </div>
    </a>

    <a href="{{ route('LondontoCambridge') }}"class="route-link">
      <div class="route-card">
        <img src="{{ asset('images/cambridge.jpg.jpg') }}" alt="Cambridge" />
        <h3>London → Cambridge</h3>
        <p>Prestigious travel made effortless.</p>
      </div>
    </a>

     <a href="{{ route('LondontoBrimingham') }}" class="route-link">
      <div class="route-card">
        <img src="{{ asset('images/brimingham.jpg') }}" alt="Birmingham" />
        <h3>London → Birmingham</h3>
        <p>Executive rides to the Midlands.</p>
      </div>
    </a>

    <a href="{{ route('LondontoManchester') }}" class="route-link">
      <div class="route-card">
        <img src="{{ asset('images/manchester.jpg') }}" alt="Manchester" />
        <h3>London → Manchester</h3>
        <p>Long-distance comfort, guaranteed.</p>
      </div>
    </a>

    <a href="londontobrighton.html" class="route-link">
      <div class="route-card">
        <img src="{{ asset('images/brighton.jpg') }}" alt="Brighton" />
        <h3>London → Brighton</h3>
        <p>Beach trips with luxury rides.</p>
      </div>
    </a>

    <a href="{{ route('LondontoBath') }}" class="route-link">
      <div class="route-card">
        <img src="{{ asset('images/bath,uk.jpg') }}" alt="Bath" />
        <h3>London → Bath</h3>
        <p>Travel to history in style.</p>
      </div>
    </a>

  </div>
</section>

@endsection