<div class="booking-container">
  <div class="right-hero">

    <span class="corner-line corner-top"></span>
    <span class="corner-line corner-right"></span>
    <span class="corner-line corner-bottom"></span>
    <span class="corner-line corner-left"></span>

    <form class="form-box" action="serviceclass.html" method="get">

      <h2>Book Your Ride</h2>

      <div class="form-group">
        <select id="rideType" required onchange="toggleFields()">
          <option value="" disabled selected hidden></option>
          <option value="one-way">One-way</option>
          <option value="hourly">Hourly</option>
        </select>
        <label>Ride Type</label>
      </div>

      <div class="form-group" id="pickup-group" style="position: relative;">
        <input type="text" id="pickup" placeholder=" " autocomplete="off" required />
        <label>Pickup Location</label>
        <div id="pickup-suggestions" class="suggestions"></div>
      </div>

      <div class="form-group" id="dropoff-group" style="position: relative;">
        <input type="text" id="dropoff" placeholder=" " autocomplete="off" />
        <label>Drop-off Location</label>
        <div id="dropoff-suggestions" class="suggestions"></div>
      </div>

      <div class="form-group" id="duration-group" style="display:none;">
        <select>
          <option value="" disabled selected hidden></option>
          <option>1 Hour</option>
          <option>2 Hours</option>
          <option>3 Hours</option>
          <option>4 Hours</option>
          <option>5 Hours</option>
          <option>6 Hours</option>
          <option>7 Hours</option>
          <option>8 Hours</option>
          <option>9 Hours</option>
          <option>10 Hours</option>
          <option>11 Hours</option>
          <option>12 Hours</option>
          <option>13 Hours</option>
          <option>14 Hours</option>
          <option>15 Hours</option>
          <option>16 Hours</option>
          <option>17 Hours</option>
          <option>18 Hours</option>
          <option>19 Hours</option>
          <option>20 Hours</option>
          <option>21 Hours</option>
          <option>22 Hours</option>
          <option>23 Hours</option>
          <option>24 Hours</option>
        </select>
        <label>Duration</label>
      </div>

      <div class="form-group">
        <input type="datetime-local" placeholder=" " required />
        <label>Date & Time</label>
      </div>

      <button type="submit" class="btn-primary">Search</button>
    </form>
  </div>
</div>

<style>
  .suggestions {
    position: absolute;
    background: white;
    max-height: 150px;
    overflow-y: auto;
    width: 100%;
    z-index: 1000;
  }
  .suggestion-item {
    padding: 8px;
    cursor: pointer;
  }
  .suggestion-item:hover {
    background-color: #f0f0f0;
  }
</style>

<script>
function toggleFields() {
  const rideType = document.getElementById('rideType').value;
  const dropoffGroup = document.getElementById('dropoff-group');
  const durationGroup = document.getElementById('duration-group');

  if (rideType === 'hourly') {
    durationGroup.style.display = 'block';
    dropoffGroup.style.display = 'none';
    dropoffGroup.querySelector('input').required = false;
    durationGroup.querySelector('select').required = true;
  } else if (rideType === 'one-way') {
    dropoffGroup.style.display = 'block';
    durationGroup.style.display = 'none';
    dropoffGroup.querySelector('input').required = true;
    durationGroup.querySelector('select').required = false;
  }
}

// Autocomplete using Photon API (OpenStreetMap)
function setupAutocomplete(inputId, suggestionBoxId) {
  const input = document.getElementById(inputId);
  const suggestionBox = document.getElementById(suggestionBoxId);

  input.addEventListener('input', async () => {
    const query = input.value.trim();
    suggestionBox.innerHTML = '';
    if (query.length < 3) return; // wait for at least 3 chars

    try {
      const response = await fetch(`https://photon.komoot.io/api/?q=${encodeURIComponent(query)}&limit=5`);
      const data = await response.json();

      data.features.forEach(feature => {
        const div = document.createElement('div');
        div.classList.add('suggestion-item');
        div.textContent = feature.properties.name + (feature.properties.city ? ', ' + feature.properties.city : '') + (feature.properties.country ? ', ' + feature.properties.country : '');
        div.addEventListener('click', () => {
          input.value = div.textContent;
          suggestionBox.innerHTML = '';
        });
        suggestionBox.appendChild(div);
      });
    } catch (e) {
      console.error('Error fetching suggestions:', e);
    }
  });

  // Close suggestions when clicking outside
  document.addEventListener('click', (e) => {
    if (!suggestionBox.contains(e.target) && e.target !== input) {
      suggestionBox.innerHTML = '';
    }
  });
}

// Initialize
setupAutocomplete('pickup', 'pickup-suggestions');
setupAutocomplete('dropoff', 'dropoff-suggestions');
</script>
