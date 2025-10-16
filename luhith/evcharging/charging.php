<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Car Parking Calculator</title>
  <link rel="stylesheet" href="style/style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
    <header>
      <?php include('../../luhith/components/header2.php') ?>
    </header>
  <div class="container">
    <h1>EV Charging</h1>

    <div class="charge-method">
      <label for="charge-method"> <i class="fas fa-plug"></i> Charging Method </label>
      <select id="charge-method">
        <option value="daily">Daily</option>
        <option value="monthly">Monthly</option>
      </select>
    </div>

    <div class="charge-period">
      <button id="daily-btn" class="active">Daily</button>
      <button id="monthly-btn">Monthly</button>
    </div>

    <div class="vehicle-type">
      <label for="vehicle-type"> <i class="fas fa-car"></i> Vehicle Type</label>
      <select id="vehicle-type">
        <option value="small">Small Car</option>
        <option value="medium">Medium Car</option>
        <option value="large">Large Car</option>
      </select>
    </div>

    <div class="charging-time">
      <label for="charging-time"><i class="fas fa-clock"></i> Charging Time(hours) </label>
      <input type="number" id="charging-time" placeholder="Enter time">
    </div>

    <button id="calculate-btn">CALCULATE</button>

    <div id="result"></div>
  </div>
  <footer class="footer">
    <div class="footer-container">
      <div class="row">
        <!-- Quick Links Section -->
        <div class="footer-col">
          <h4>Quick Links</h4>
          <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">Booking</a></li>
            <li><a href="#">EV Charging</a></li>
            <li><a href="#">About Us</a></li>
            <li><a href="#">Contact Us</a></li>
          </ul>
        </div>

        <!-- Extra Links Section -->
        <div class="footer-col">
          <h4>Extra Links</h4>
          <ul>
            <li><a href="#">FAQ</a></li>
            <li><a href="#">Need Help</a></li>
            <li><a href="#">Privacy Policy</a></li>
            <li><a href="#">Terms Of Use</a></li>
            <li><a href="#">Payment Option</a></li>
          </ul>
        </div>

        <!-- Contact Info Section -->
        <div class="footer-col">
          <h4>Contact Info</h4>
          <ul>
            <li><i class="fas fa-phone-alt"></i> +123-456-7890</li>
            <li><i class="fas fa-phone-alt"></i> +111-223-3267</li>
            <li><i class="fas fa-phone-alt"></i> +111-567-4532</li>
            <li>
              <i class="fas fa-envelope"></i> infomotorcastle@gmail.com
            </li>
          </ul>
        </div>

        <!-- Follow Us Section -->
        <div class="footer-col">
          <h4>Follow Us</h4>
          <ul>
            <li>
              <i class="fab fa-facebook"></i> <a href="#">Facebook</a>
            </li>
            <li>
              <i class="fab fa-instagram"></i> <a href="#">Instagram</a>
            </li>
            <li><i class="fab fa-twitter"></i> <a href="#">Twitter</a></li>
            <li>
              <i class="fab fa-linkedin"></i> <a href="#">LinkedIn</a>
            </li>
            <li>
              <i class="fab fa-whatsapp"></i> <a href="#">WhatsApp</a>
            </li>
          </ul>
        </div>
      </div>
    </div>

    <!-- Footer Copyright -->
    <div class="footer-copyright">
      COPYRIGHT @ MOTOR CASTLE PARKING SOLUTIONS 2024
    </div>
  </footer>


  <script src="script/script.js"></script>
</body>
</html>