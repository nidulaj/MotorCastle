<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Motor Castle|Contact us</title>
    <link rel="stylesheet" type="text/css" href="css/contact.css">
    <link rel="stylesheet" type="text/css" href="css/header.css">
    <link rel="stylesheet" type="text/css" href="css/footer.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">

</head>
<body>
<header>
      <?php include('../../luhith/components/header2.php') ?>
    </header>
</div>
    <section class="contact">
    <div class="container">
        <h2>Contact us</h2>
        <div class="contact-wrapper">
            <div class="contact-form">
                <h3>Send us a message</h3>
                <form id="contactForm" method="post" action="update.php">
                    <div class="form-group">
                       <input type="number" id="id" name="iid" placeholder="Inquiry ID" required>
                    </div>
                    <div class="form-group">
                       <input type="text" id="name" name="name" placeholder="Your Name"required>
                    </div>
                    <div class="form-group">
                        <input type="email" id="email" name="email" placeholder="Your email"required>
                    </div>
                    <div class="form-group">
                       <textarea name="message" id="message" placeholder="Your Message" required></textarea>
                     </div>
                     <button type="submit">Update</button>
                </form>
            </div>
            <div class="contact-info">
               <h3>Contact Information</h3> 
               <p>tel: 033-2232814</p>
               <p>Email:infomotorcastle@gmail.com</p>
               <p>Location:123 street, colombo, Sri Lanka</p>
            </div>
        </div>
    </div>
</section>

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
</body>
</html>