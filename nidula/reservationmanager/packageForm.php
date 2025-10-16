<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Add</title>
  <link rel="stylesheet" href="style/package form/header.css">
  <link rel="stylesheet" href="style/package form/form.css">
  <link rel="stylesheet" href="style/package form/footer.css">
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">

</head>

<body>
  <div class="full-content">
  <header>
  <?php include('header.php')?>
    </header>
    <div class="middle-content">
      <div class="package-form">
        <form method="post" action="php/insert.php">
          <center>
            <h1>Package Form</h1>
          </center>
          <div class="input-field">
            Package Name :
            <input type="text" name="packageName" placeholder="Package Name" required>
          </div>

          <div class="input-field">
            Package Description :
            <input type="text" name="packageDescription" placeholder="Package Description">
          </div>

          <div class="input-field">
            Features :
            <input type="text" name="features" placeholder="Features">
          </div>

          <div class="input-field">
            Package Unit :
            <select name="packageUnit" id="packageUnit" onclick="disablePriceUnit(); disableTotalPrice();">
              <option value="none">None</option>
              <option value="hourly">Hourly</option>
              <option value="daily">Daily</option>
              <option value="weekly">Weekly</option>
              <option value="monthly">Monthly</option>
            </select>
          </div>

          <div class="input-field">
            Unit Price :
            <input type="text" name="unitPrice" id="unitPrice" placeholder="Unit Price">
          </div>

          <div class="input-field">
            Total Price :
            <input type="text" name="totalPrice" id="totalPrice" placeholder="Total Price">
          </div>

          <div class="input-field">
            Available Vehicle Types : <br>
            <input type="radio" name="vehicleType" value="All Types">All Types<br>
            <input type="radio" name="vehicleType" value="Compact cars">Compact Cars<br>
            <input type="radio" name="vehicleType" value="Sedans">Sedans<br>
            <input type="radio" name="vehicleType" value="SUVs">SUVs<br>
            <input type="radio" name="vehicleType" value="Electric Vehicles">Electric Vehicles<br>
          </div>

          <div class="input-submit">
            <input type="submit" id="submit-button" value="Add Package">
          </div>

        </form>
      </div>
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
              <li><i class="fas fa-envelope"></i> infomotorcastle@gmail.com</li>
            </ul>
          </div>

          <!-- Follow Us Section -->
          <div class="footer-col">
            <h4>Follow Us</h4>
            <ul>
              <li><i class="fab fa-facebook"></i> <a href="#">Facebook</a></li>
              <li><i class="fab fa-instagram"></i> <a href="#">Instagram</a></li>
              <li><i class="fab fa-twitter"></i> <a href="#">Twitter</a></li>
              <li><i class="fab fa-linkedin"></i> <a href="#">LinkedIn</a></li>
              <li><i class="fab fa-whatsapp"></i> <a href="#">WhatsApp</a></li>
            </ul>
          </div>

        </div>
      </div>

      <!-- Footer Copyright -->
      <div class="footer-copyright">
        COPYRIGHT @ MOTOR CASTLE PARKING SOLUTIONS 2024
      </div>
    </footer>
  </div>

  <script src="script/packageForm.js"></script>
</body>

</html>