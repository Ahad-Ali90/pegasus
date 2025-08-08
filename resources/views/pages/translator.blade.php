<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Google Translate Working Example</title>
  <style>
    /* Hide Google Translate banner and frame */
    .goog-te-banner-frame.skiptranslate, 
    .goog-logo-link, 
    .goog-te-gadget {
      display: none !important;
    }
    body {
      top: 0px !important;
    }
    #google_translate_element {
      display: none;
    }
  </style>
</head>
<body>

  <!-- Custom Dropdown -->
  <select onchange="translateLanguage(this.value)">
    <option value="">🌐 Select Language</option>
    <option value="en">English</option>
    <option value="es">Spanish</option>
    <option value="de">German</option>
    <option value="ar">Arabic</option>
    <option value="fr">French</option>
    <option value="zh-CN">Chinese</option>
    <option value="ur">Urdu</option>
  </select>

  <h1>Hello, this is a demo page</h1>
  <p>Test if translation is working.</p>

  <!-- Hidden Google Translate Container -->
  <div id="google_translate_element"></div>

  <!-- Google Translate Script -->
  <script type="text/javascript">
    function googleTranslateElementInit() {
      new google.translate.TranslateElement({
        pageLanguage: 'en',
        includedLanguages: 'en,es,de,fr,ar,zh-CN,ur',
        layout: google.translate.TranslateElement.InlineLayout.SIMPLE
      }, 'google_translate_element');
    }
  </script>
  <script src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>

  <!-- Custom Script to Trigger Translation -->
  <script>
    function translateLanguage(lang) {
      const interval = setInterval(() => {
        const select = document.querySelector(".goog-te-combo");
        if (select) {
          select.value = lang;
          select.dispatchEvent(new Event("change"));
          clearInterval(interval);
        }
      }, 100);
    }
  </script>

</body>
</html>
