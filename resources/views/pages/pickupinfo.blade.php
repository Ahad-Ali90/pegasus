
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Pickup Info | Pegasus Transfers</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <style>
    body {
      margin: 0;
      font-family: 'Helvetica Neue', sans-serif;
      background-color: #fff;
      color: #222;
    }
    .progress-bar {
      display: flex;
      justify-content: center;
      padding: 16px 0;
      border-bottom: 1px solid #ddd;
    }

    .progress-bar span {
      margin: 0 10px;
      color: #999;
      position: relative;
    }

    .progress-bar .active {
      font-weight: 600;
      color: #000;
    }

    .progress-bar span::before {
      content: '●';
      display: inline-block;
      margin-right: 5px;
      font-size: 14px;
      vertical-align: middle;
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
      margin: 30px 0 10px;
    }

    .radio-group {
      display: flex;
      flex-direction: column;
      border: 1px solid #ddd;
      border-radius: 8px;
      overflow: hidden;
      margin-top: 10px;
    }

    .radio-option {
      padding: 15px 20px;
      display: flex;
      align-items: center;
      cursor: pointer;
      border-bottom: 1px solid #eee;
    }

    .radio-option:last-child {
      border-bottom: none;
    }

    .radio-option input[type="radio"] {
      margin-right: 10px;
      accent-color: black;
    }
    .footer-button {
      position: fixed;
      bottom: 20px;
      left: 50%;
      transform: translateX(-50%);
      width: calc(100% - 40px);
      max-width: 680px;
      z-index: 1000;
    }

    .footer-button button {
      width: 100%;
      background: linear-gradient(to right, #f44336, #ff6f00);
      color: white;
      padding: 16px;
      font-size: 16px;
      font-weight: bold;
      border: none;
      border-radius: 10px;
      cursor: pointer;
    }

    @media (max-width: 600px) {
      .container {
        padding: 0 15px 120px;
      }
    }
  </style>
</head>
<body>

  
  <div class="progress-bar">
    <span>Service Class</span>
    <span class="active">Pickup Info</span>
    <span>Payment</span>
    <span>Checkout</span>
  </div>

 
  <div class="container">

   
    <div class="info-box">
      <strong>Wed, Aug 6, 2025 at 04:16 PM (GMT+1)</strong>
      <small>Jurys Inn Heathrow → Gatwick Airport North Terminal</small><br>
      <small>Estimated arrival at 05:08 PM (GMT+1) • 68.4 km</small>
    </div>

   
    <h2>Select who you are booking for</h2>
    <div class="radio-group">
      <label class="radio-option">
        <input type="radio" name="booking-for" checked>
        Book for myself
      </label>
      <label class="radio-option">
        <input type="radio" name="booking-for">
        Book for someone else
      </label>
    </div>
   
    <h2>Provide additional information</h2>
    <p style="color:#666; font-size:15px;">
      Enter the flight number to ensure the chauffeur picks up the guest at the correct terminal.
    </p>
    <input type="text" placeholder="Flight number (e.g., BA123)" style="width:100%; padding:14px; border:1px solid #ccc; border-radius:6px; margin-top:10px; font-size:15px;">

  </div>
  <div class="footer-button">
    <button>Continue</button>
  </div>

</div>
</body>
</html>
