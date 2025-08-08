<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <meta name="google" content="notranslate">
  <meta name="description" content="Book affordable and reliable London airport transfers with Pegasus Transfers. Covering Heathrow, Gatwick, Stansted and more"/>
  <title>London Airport Transfers | Reliable Heathrow Taxi | Pegasus Transfers</title>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;500;700&display=swap" rel="stylesheet">
  
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">

</head>
<body>


            @include('layouts.user.header')



            @yield('content')


            @include('layouts.user.footer')

<script>

function googleTranslateElementInit() {
  new google.translate.TranslateElement({
    pageLanguage: 'en',
    includedLanguages: 'en,es,fr,de,it,ar,zh-CN,ja',
    layout: google.translate.TranslateElement.InlineLayout.SIMPLE
  }, 'google_translate_element');

  var style = document.createElement('style');
  style.textContent = '.goog-logo-link, .goog-te-gadget-icon { display: none !important; }';
  document.head.appendChild(style);
}


function loadGoogleTranslate() {
  const script = document.createElement('script');
  script.src = '//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit';
  document.head.appendChild(script);
}


function changeLanguage(lang) {
  if (typeof google !== 'undefined' && google.translate) {
    const select = document.querySelector('.goog-te-combo');
    if (select) {
      select.value = lang;
      select.dispatchEvent(new Event('change'));
      localStorage.setItem('preferredLang', lang);
    }
  }
}


document.addEventListener('DOMContentLoaded', function() {
  loadGoogleTranslate();
  
  const savedLang = localStorage.getItem('preferredLang');
  if (savedLang) {
    setTimeout(() => changeLanguage(savedLang), 1000);
  }
  

  const checkBanner = setInterval(() => {
    const banner = document.querySelector('.goog-te-banner-frame');
    if (banner) {
      banner.style.display = 'none';
      document.body.style.top = '0';
      clearInterval(checkBanner);
    }
  }, 100);
});


setInterval(() => {
  if (typeof google !== 'undefined' && google.translate) {
    const iframe = document.querySelector('.goog-te-menu-frame');
    if (iframe) {
      const iframeDoc = iframe.contentDocument || iframe.contentWindow.document;
      const select = iframeDoc.querySelector('.goog-te-combo');
      if (select) {
        const currentLang = select.value;
        localStorage.setItem('preferredLang', currentLang);
      }
    }
  }
}, 2000);


</script>
<script>
  const menuToggle = document.getElementById("mobile-menu");
  const nav = document.getElementById("main-nav");
  const overlay = document.getElementById("nav-overlay");


  menuToggle.addEventListener("click", () => {
    const isOpen = nav.classList.toggle("active");
    overlay.classList.toggle("active");

 
    menuToggle.innerHTML = isOpen ? '<span class="menu-icon">✕</span>' : '<span class="menu-icon">☰</span>';
  });


  overlay.addEventListener("click", () => {
    closeMenu();
  });

  // Toggle dropdowns on click
  document.querySelectorAll(".dropdown-toggle").forEach((toggle) => {
    toggle.addEventListener("click", function (e) {
      e.preventDefault();
      const parent = this.parentElement;
      parent.classList.toggle("active");

      // Close other dropdowns
      document.querySelectorAll(".dropdown").forEach((el) => {
        if (el !== parent) el.classList.remove("active");
      });
    });
  });

  // Close Menu Function
  function closeMenu() {
    nav.classList.remove("active");
    overlay.classList.remove("active");
    menuToggle.innerHTML = '<span class="menu-icon">☰</span>';

    // Close all dropdowns
    document.querySelectorAll(".dropdown").forEach(d => d.classList.remove("active"));
  }

  // Auto-close on resize if screen is large
  window.addEventListener("resize", () => {
    if (window.innerWidth > 1024) {
      closeMenu();
    }
  });
</script>

</body>
</html>