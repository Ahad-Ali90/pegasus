@extends('layouts.user.layout')

@section('content')
  <script type="application/ld+json">
  {
    "@context": "https://schema.org", 
    "@type": "FAQPage",
    "mainEntity": [
      {
        "@type": "Question",
        "name": "Do you offer fixed prices for airport transfers?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "Yes, all our fares are fixed at the time of booking. There are no hidden charges—even if your flight is delayed or traffic is heavy."
        }
      },
      {
        "@type": "Question",
        "name": "What happens if my flight is delayed?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "We track all flights in real time. Your driver will adjust the pick-up time based on your actual arrival. 60 minutes free wait time is included after landing."
        }
      },
      {
        "@type": "Question",
        "name": "Where will I meet my driver at the airport?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "Your driver will meet you in the arrivals area with a name board. If you prefer curbside pickup, let us know at the time of booking."
        }
      },
      {
        "@type": "Question",
        "name": "Do your vehicles have child seats?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "We do not supply children's car seats or baby seats in our vehicles. However, you are welcome to bring and install your own car seat for the journey."
        }
      },
      {
        "@type": "Question",
        "name": "How do I pay for my transfer?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "You can pay securely online/Bank transfer when booking, or choose cash directly to the driver. Corporate accounts are also available."
        }
      }
    ]
  }
  </script>

 
  
<section>
  <div class="faq-wrapper">
    <h1>Frequently Asked Questions</h1>

    <div class="faq-item">
      <button class="faq-question">Do you offer fixed prices for airport transfers?</button>
      <div class="faq-answer">
        <p>Yes, all our fares are fixed at the time of booking. There are no hidden charges—even if your flight is delayed or traffic is heavy.</p>
      </div>
    </div>

    <div class="faq-item">
      <button class="faq-question">What happens if my flight is delayed?</button>
      <div class="faq-answer">
        <p>We track all flights in real time. Your driver will adjust the pick-up time based on your actual arrival. 60 minutes free wait time is included after landing.</p>
      </div>
    </div>

    <div class="faq-item">
      <button class="faq-question">Where will I meet my driver at the airport?</button>
      <div class="faq-answer">
        <p>Your driver will meet you in the arrivals area with a name board. If you prefer curbside pickup, let us know at the time of booking.</p>
      </div>
    </div>

    <div class="faq-item">
      <button class="faq-question">Do your vehicles have child seats?</button>
      <div class="faq-answer">
        <p>We do not supply children's car seats or baby seats in our vehicles. However, you are welcome to bring and install your own car seat for the journey. Please see <a href="https://www.gov.uk/child-car-seats-the-rules/when-a-child-can-travel-without-a-car-seat" target="_blank">official guidance</a>.</p>
      </div>
    </div>

    <div class="faq-item">
      <button class="faq-question">How do I pay for my transfer?</button>
      <div class="faq-answer">
        <p>You can pay securely online/Bank transfer when booking, or choose cash directly to the driver. Corporate accounts are also available.</p>
      </div>
    </div>
  </div>
</section>
  <script>
    const faqs = document.querySelectorAll(".faq-item");

    faqs.forEach(faq => {
      const btn = faq.querySelector(".faq-question");
      btn.addEventListener("click", () => {
        const isOpen = faq.classList.contains("open");

        faqs.forEach(f => f.classList.remove("open"));
        if (!isOpen) faq.classList.add("open");
      });
    });
  </script>

  @endsection