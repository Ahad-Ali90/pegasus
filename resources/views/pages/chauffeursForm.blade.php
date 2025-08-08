<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Apply Now – Pegasus Transfers</title>
  <style>
   @import url('https://fonts.googleapis.com/css2?family=Inter:wght@300;500;700&display=swap');

* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

body {
  font-family: 'Inter', sans-serif;
  background: radial-gradient(ellipse at top left, #0f0f0f, #000);
  color: #fff;
  min-height: 100vh;
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
}

.logo {
  font-size: 24px;
  margin-bottom: 20px;
  color: #fff;
  text-shadow: 0 0 10px #f90, 0 0 20px #f90;
}

.container {
  position: relative;
  width: 100%;
  max-width: 60%;
  padding: 2rem;
  height: auto;
  border-radius: 20px;
  background: rgba(30, 30, 30, 0.9);
  overflow: hidden;
  z-index: 1;
  backdrop-filter: blur(8px);
  box-shadow: 0 0 20px rgba(255, 165, 0, 0.25);
}

/* Neon animated box */
.container::before,
.container::after {
  content: '';
  position: absolute;
  top: -2px;
  left: -2px;
  right: -2px;
  bottom: -2px;
  background: linear-gradient(90deg, #f90, #ff5e00, #f90, #ff5e00);
  background-size: 400%;
  z-index: -1;
  filter: blur(6px);
  animation: rotateBox 8s linear infinite;
  border-radius: 20px;
}

.container::after {
  filter: blur(20px);
}
.container::before {
  content: '';
  position: absolute;
  top: -2px;
  left: -2px;
  right: -2px;
  bottom: -2px;
  z-index: -1;
  border-radius: 20px;
  background: linear-gradient(270deg, #00ffff, #a020f0, #32cd32, #ffa500, #00ffff);
  background-size: 1000% 1000%;
  animation: animatedGlowBorder 12s linear infinite;
  filter: blur(6px);
  opacity: 0.9;
}

.container::after {
  content: '';
  position: absolute;
  top: -2px;
  left: -2px;
  right: -2px;
  bottom: -2px;
  z-index: -2;
  border-radius: 20px;
  background: linear-gradient(270deg, #00ffff, #a020f0, #32cd32, #ffa500, #00ffff);
  background-size: 1000% 1000%;
  animation: animatedGlowBorder 16s linear infinite;
  filter: blur(20px);
  opacity: 0.6;
}

@keyframes animatedGlowBorder {
  0% {
    background-position: 0% 50%;
  }
  50% {
    background-position: 100% 50%;
  }
  100% {
    background-position: 0% 50%;
  }
}

@keyframes rotateBox {
  0% {
    background-position: 0% 50%;
  }
  50% {
    background-position: 100% 50%;
  }
  100% {
    background-position: 0% 50%;
  }
}

h2 {
  text-align: center;
  margin-bottom: 1.5rem;
  color: #fff;
  font-size: 22px;
  text-shadow: 0 0 5px #ff9900;
}

.step {
  display: none;
  animation: fadeIn 0.5s ease-in-out;
}

.step.active {
  display: block;
}

label {
  display: block;
  margin-top: 1rem;
  font-weight: 500;
}

input, select, textarea {
  width: 100%;
  padding: 0.75rem 1rem;
  background-color: #1f1f1f;
  border: 1px solid #444;
  color: #fff;
  border-radius: 8px;
  margin-top: 5px;
  transition: border-color 0.3s ease;
}

input:focus, select:focus, textarea:focus {
  outline: none;
  border-color: orange;
  box-shadow: 0 0 10px orange;
}

.buttons {
  display: flex;
  justify-content: space-between;
  margin-top: 1.5rem;
  gap: 1rem;
}

button {
  background: linear-gradient(145deg, #ff8c00, #ffa500);
  color: #000;
  padding: 0.7rem 1.5rem;
  border: none;
  border-radius: 30px;
  cursor: pointer;
  font-weight: bold;
  transition: 0.3s ease;
  box-shadow: 0 0 15px rgba(255,165,0,0.4);
}

button:hover {
  box-shadow: 0 0 25px orange;
  transform: scale(1.05);
}

button:disabled {
  opacity: 0.4;
  cursor: not-allowed;
}

.requirement-box {
  background-color: #121212;
  padding: 1rem;
  border-radius: 12px;
  border-left: 4px solid orange;
  margin-bottom: 1rem;
  box-shadow: 0 0 10px rgba(255,165,0,0.2);
  row-gap: 4px;
}

.confirmation-box {
  width: 100%;
  text-align: center;
}

.confirmation-box label {
  display: flex;
  align-items: center;
  gap: 2px;
  margin-top: 1rem;
}
.confirmation-box li
{
  width: 100%;
}
input[type="checkbox"] {
  transform: scale(1);
  accent-color: orange;
}

@keyframes fadeIn {
  from {
    opacity: 0;
    transform: translateY(15px);
  }
  to {
    opacity: 1;
    transform: translateY(0);
  }
}

@media (max-width: 600px) {
  .container {
    padding: 1.5rem;
    width: 90%;
  }

  .buttons {
    flex-direction: column;
  }

  button {
    width: 100%;
  }
}

  </style>
</head>
<body>

  <div class="logo">PEGASUS PARTNER</div>
  <div class="container">
    <h2>Apply to Become a Chauffeur</h2>
<form id="driverForm" action="submit.php" method="POST" enctype="multipart/form-data">
  <!-- Step 1 -->
  <div class="step active" id="step1">
    <label for="city">Select your city in the UK:</label>
    <select id="city" name="city" required>
      <option value="">-- Choose City --</option>
      <option>London</option>
      <option>Manchester</option>
      <option>Birmingham</option>
      <option>Leeds</option>
      <option>Glasgow</option>
    </select>
    <div class="buttons">
      <span></span>
      <button type="button" onclick="nextStep(1)">Next</button>
    </div>
  </div>

  <!-- Step 2 -->
<!-- Step 2 -->
<div class="step" id="step2">
  <h3 style="color: orange; text-align: center; margin-bottom: 1rem; font-size: 20px;">Required Documents & Conditions</h3>

  <div class="requirement-box">
    <ol style="list-style: none; counter-reset: step-counter; padding: 0; margin: 0;">
      <li style="counter-increment: step-counter; margin-bottom: 10px; display: flex;">
        <span style="color: gold; font-weight: bold; margin-right: 8px;">1.</span> Smartphone with working internet.
      </li>
      <li style="counter-increment: step-counter; margin-bottom: 10px; display: flex;">
        <span style="color: gold; font-weight: bold; margin-right: 8px;">2.</span> Profile Picture.
      </li>
      <li style="counter-increment: step-counter; margin-bottom: 10px; display: flex;">
        <span style="color: gold; font-weight: bold; margin-right: 8px;">3.</span> DVLA License (Front & Back).
      </li>
      <li style="counter-increment: step-counter; margin-bottom: 10px; display: flex;">
        <span style="color: gold; font-weight: bold; margin-right: 8px;">4.</span> Valid PCO (Paper & Badge).
      </li>
      <li style="counter-increment: step-counter; margin-bottom: 10px; display: flex;">
        <span style="color: gold; font-weight: bold; margin-right: 8px;">5.</span> National Insurance Number.
      </li>
      <li style="counter-increment: step-counter; margin-bottom: 10px; display: flex;">
        <span style="color: gold; font-weight: bold; margin-right: 8px;">6.</span> Vehicle Log Book – V5 (Page 1 & 2).
      </li>
      <li style="counter-increment: step-counter; margin-bottom: 10px; display: flex;">
        <span style="color: gold; font-weight: bold; margin-right: 8px;">7.</span> MOT Certificate.
      </li>
      <li style="counter-increment: step-counter; margin-bottom: 10px; display: flex;">
        <span style="color: gold; font-weight: bold; margin-right: 8px;">8.</span> Insurance Certificate (Fleet detail if applicable).
      </li>
      <li style="counter-increment: step-counter; margin-bottom: 10px; display: flex;">
        <span style="color: gold; font-weight: bold; margin-right: 8px;">9.</span> Vehicle PCO Certificate.
      </li>
      <li style="counter-increment: step-counter; margin-bottom: 10px; display: flex;">
        <span style="color: gold; font-weight: bold; margin-right: 8px;">10.</span> Rental Agreement (if using rental car).
      </li>
      <li style="counter-increment: step-counter; margin-bottom: 10px; display: flex;">
        <span style="color: gold; font-weight: bold; margin-right: 8px;">11.</span> Vehicle Photos (Front & Back, showing plate).
      </li>
    </ol>
  </div>

  <!-- Contract download -->
  <div style="text-align: center; margin: 20px 0;">
    <a href="Pegasus_Chauffeur_Contract_Fillable (2).pdf" download
      style="text-decoration: none; color: #000; background: linear-gradient(to right, #ffaa00, #ff5500); padding: 12px 24px; border-radius: 30px; font-weight: 600; font-size: 14px; display: inline-block; box-shadow: 0 0 10px rgba(255,165,0,0.3);">
      📄 Download Chauffeur Contract
    </a>
  </div>

  <!-- Confirmation checkbox -->
  <div class="confirmation-box" style="margin: 0 auto; text-align: center; width: 100%;">
    <label style="display: inline-flex; align-items: center; gap: 8px; font-size: 14px; text-align: left;">
      <input type="checkbox" id="requirementConfirm" />
      I have read and agreed to all the above requirements.
    </label>
  </div>

  <!-- Navigation Button -->
  <div class="buttons" style="margin-top: 20px; flex-direction: column; align-items: center;">
    <button type="button" class="next-btn" id="toStep3" disabled onclick="nextStep(2)" style="width: 100%; max-width: 220px;">
      Next
    </button>
  </div>
</div>


  <!-- Step 3 -->
  <div class="step" id="step3">
    <label for="fname">First Name:</label>
    <input type="text" id="fname" name="fname" required />

    <label for="lname">Last Name:</label>
    <input type="text" id="lname" name="lname" required />

    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required />

    <label for="phone">Phone Number:</label>
    <input type="tel" id="phone" name="phone" required />

    <label for="documents">Upload Documents:</label>
    <input type="file" id="documents" name="documents[]" multiple required />

    <div class="buttons">
      <button type="button" onclick="prevStep(3)">Back</button>
      <button type="submit">Submit</button>
    </div>
  </div>
</form>
<script>
  document.getElementById('requirementConfirm').addEventListener('change', () => {
    document.getElementById('toStep3').disabled = !document.getElementById('requirementConfirm').checked;
  });

  function nextStep(current) {
    document.getElementById(`step${current}`).classList.remove('active');
    document.getElementById(`step${current + 1}`).classList.add('active');
  }

  function prevStep(current) {
    document.getElementById(`step${current}`).classList.remove('active');
    document.getElementById(`step${current - 1}`).classList.add('active');
  }
</script>

</body>
</html>
