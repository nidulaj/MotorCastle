<?php
require 'config.php';

$uName=$_POST["name"];
$uemail=$_POST["email"];
$uMessage=$_POST["message"];

$sql="INSERT INTO inquiry VALUES('','$uName','$uemail','$uMessage')";
if($con->query($sql))
{
    echo '<head>
          <title>Inquiry Delete Details</title>
          <link rel="stylesheet" href="css/feedback.css" />
          <link rel="stylesheet" href="css/header.css" />
          <link rel="stylesheet" href="css/footer.css" />
          <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">

          </head>
          <body>
          <header>
          <?php include("../../luhith/components/header2.php") ?>
          </header>
          <div class="feedback">
            <div class="feedback-msg"> 
              Inquiry sent Successfully!
            </div>
            <a href="read.php"><button>See Inquiry Details</button></a>
            
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
          </body>';

}
else{
    echo '<head>
                  <title>Inquiry Delete Details</title>
                  <link rel="stylesheet" href="css/feedback.css" />
                  <link rel="stylesheet" href="css/header.css" />
                  <link rel="stylesheet" href="css/footer.css" />
                  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
                  </head>
                  <body>
                  <header>
                    <?php include("../../luhith/components/header2.php") ?>
                  </header>
                  <div class="feedback">
                    <div class="feedback-msg"> 
                      Inquiry not sent!
                    </div>
                    <a href="contact.php"><button>Back to Dashboard</button></a>
                    
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
                  </body>';
}

$con->close();

?>