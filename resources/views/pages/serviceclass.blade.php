<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Select Vehicle Class | Pegasus Transfers</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
  <style>
    body {
      font-family: 'Helvetica Neue', sans-serif;
      margin: 0;
      background-color: #fff;
      color: #222;
    }

    /* Progress Tracker */
    .progress-bar {
      display: flex;
      justify-content: center;
      padding: 16px 0;
      border-bottom: 1px solid #eee;
    }

    .progress-bar span {
      margin: 0 10px;
      color: #999;
      position: relative;
    }

    .progress-bar .active {
      font-weight: bold;
      color: #000;
    }

    .progress-bar span::before {
      content: '●';
      margin-right: 5px;
      font-size: 14px;
      color: #ccc;
    }

    .progress-bar .active::before {
      color: #000;
    }

    .container {
      max-width: 700px;
      margin: 40px auto;
      padding: 0 20px 100px;
    }

    .info-box {
      background-color: #f4f6fa;
      border-radius: 8px;
      padding: 20px;
      margin-bottom: 30px;
    }

    .info-box strong {
      display: block;
      font-size: 16px;
      margin-bottom: 5px;
    }

    .info-box small {
      color: #666;
      font-size: 14px;
    }

    h2 {
      font-size: 20px;
      margin-bottom: 5px;
    }

    .subtitle {
      font-size: 14px;
      color: #666;
      margin-bottom: 20px;
    }

    /* Vehicle Card */
    .vehicle-card {
      border: 1px solid #ddd;
      border-radius: 10px;
      display: flex;
      align-items: center;
      padding: 15px;
      margin-bottom: 20px;
      gap: 15px;
    }

    .vehicle-card img {
      width: 100px;
      border-radius: 6px;
    }

    .vehicle-details {
      flex-grow: 1;
    }

    .vehicle-details h3 {
      margin: 0 0 5px;
      font-size: 17px;
    }

    .vehicle-meta {
      font-size: 14px;
      color: #444;
    }

    .vehicle-meta i {
      margin-right: 4px;
      color: #666;
    }

    .vehicle-description {
      font-size: 13px;
      color: #888;
      margin-top: 6px;
    }

    .vehicle-price {
      font-size: 16px;
      font-weight: bold;
      color: #000;
    }

    .vehicle-right {
      text-align: right;
    }

    /* Footer Sticky */
    .sticky-footer {
      position: fixed;
      bottom: 0;
      width: 100%;
      background-color: white;
      border-top: 1px solid #ddd;
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 15px 20px;
      z-index: 999;
    }

    .sticky-footer a {
      font-size: 14px;
      text-decoration: underline;
      color: #222;
    }

    .sticky-footer button {
      background: linear-gradient(to right, #f44336, #ff6f00);
      border: none;
      padding: 12px 30px;
      border-radius: 8px;
      font-size: 16px;
      color: white;
      cursor: pointer;
    }

    @media (max-width: 600px) {
      .vehicle-card {
        flex-direction: column;
        align-items: flex-start;
      }

      .vehicle-right {
        width: 100%;
        margin-top: 10px;
        text-align: left;
      }

      .sticky-footer {
        flex-direction: column;
        align-items: stretch;
        gap: 10px;
      }

      .sticky-footer button {
        width: 100%;
      }
    }
  </style>
</head>
<body>

  <div class="progress-bar">
    <span class="active">Service Class</span>
    <span>Pickup Info</span>
    <span>Payment</span>
    <span>Checkout</span>
  </div>

  <div class="container">


    <div class="info-box">
      <strong>Wed, Aug 6, 2025 at 04:16 PM (GMT+1)</strong>
      <small>Jurys Inn Heathrow → Gatwick Airport North Terminal</small><br>
      <small>Estimated arrival at 05:08 PM (GMT+1) • 68.4 km</small>
    </div>


    <h2>Select a vehicle class</h2>
    <p class="subtitle">All prices include estimated VAT, fees, and tolls</p>

    <div class="vehicle-card">
      <img src="images/exective car.png" alt="Business Class">
      <div class="vehicle-details">
        <h3>Business Class</h3>
        <div class="vehicle-meta">
          <i class="fas fa-user"></i> 3 &nbsp;&nbsp;
          <i class="fas fa-suitcase"></i> 2
        </div>
        <div class="vehicle-description">
          Most popular –    Mercedes E-Class, BMW 5 Series, Audi A6 or similar
        </div>
      </div>
      <div class="vehicle-right">
        <div class="vehicle-price">£70</div>
        <div><i class="fas fa-chevron-down"></i></div>
      </div>
    </div>
     <div class="vehicle-card">
      <img src="images/mpv_8 seater.png" alt="8 Seater Van">
      <div class="vehicle-details">
        <h3>8- Seater Van</h3>
        <div class="vehicle-meta">
          <i class="fas fa-user"></i> 7 &nbsp;&nbsp;
          <i class="fas fa-suitcase"></i> 7
        </div>
        <div class="vehicle-description">
          Most popular –  Ford Tourneo, Mercedes Vito or similar

        </div>
      </div>
      <div class="vehicle-right">
        <div class="vehicle-price">£75</div>
        <div><i class="fas fa-chevron-down"></i></div>
      </div>
    </div>
  <div class="vehicle-card">
      <img src="images/haya-removebg-preview.png" alt="9 Seater Van">
      <div class="vehicle-details">
        <h3>9-Seater Minibus </h3>
        <div class="vehicle-meta">
          <i class="fas fa-user"></i> 12 &nbsp;&nbsp;
          <i class="fas fa-suitcase"></i> 8
        </div>
        <div class="vehicle-description">
          Most popular –  Mercedes Vito Tourer - Extra long wheel based or similar

        </div>
      </div>
      <div class="vehicle-right">
        <div class="vehicle-price">£85</div>
        <div><i class="fas fa-chevron-down"></i></div>
      </div>
    </div>
  </div>


  <div class="sticky-footer">
    <a href="terms and conditions.html">View terms & conditions</a>
    <a href="pickupinfo.html" class="sticky-footer-button" style="padding-right: 80px">Continue </a>
     </div>
</div>
</body>
</html>
