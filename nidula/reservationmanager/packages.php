<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Packages</title>
  <link rel="stylesheet" href="style/packages/header-home.css" />
  <link rel="stylesheet" href="style/packages/mainContent.css" />
  <link rel="stylesheet" href="style/packages/footer.css" />
  <link rel="stylesheet" href="style/packages/packages.css" />
  <link
    rel="stylesheet"
    type="text/css"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" />
</head>

<body>
  <div class="all">
  <header>
      <?php include("../../luhith/components/header2.php") ?>
  </header>
    <div class="middle-content">
      <div class="title">
        <center>
          <h1>Packages</h1>
        </center>
      </div>
      <div class="basic-packaes">
        <div class="heading">
          <h2>Basic Packages</h2>
        </div>

        <div class="filter-container">
          <label for="vehicle-type">Filter by Vehicle Type: </label>
          <select id="vehicle-type" class="dropdown">
            <option value="All">All Packages</option>
            <option value="Compact cars">Compact cars</option>
            <option value="Sedans">Sedans</option>
            <option value="SUVs">SUVs</option>
            <option value="Electric Vehicle">Electric Vehicle</option>
          </select>
        </div>

        <div class="basic-package-container">
          <div class="package">
            <div class="package-name">
              <center>General Package</center>
            </div>
            <div class="package-info">
              <div class="description">
                The General Package offers essential parking solutions with
                reliable features for efficient automated management and a
                simple, user-friendly interface.
              </div>
              <div class="features">
                <p>
                  <b>Standard Parking Slot Allocation:</b> Automatic slot
                  allocation upon entry, with real-time availability updates.
                </p>
                <p>
                  <b>Basic Navigation Assistance:</b> Simple on-screen
                  guidance for available parking spots.
                </p>
                <p>
                  <b>Customer Support:</b> Standard support during working
                  hours.
                </p>
              </div>
              <div class="type">
                <p><b>Vehicle Types:</b> All Types</p>
              </div>
              <div class="price">
                <p><b>Price:</b></p>
              </div>
            </div>
          </div>
          <div class="package">
            <div class="package-name">
              <center>Premium Package</center>
            </div>
            <div class="package-info">
              <div class="description">
                The Premium Package offers advanced features for greater
                convenience and efficiency, ideal for customers seeking
                enhanced service.
              </div>
              <div class="features">
                <p>
                  <b>Priority Parking Slot Allocation:</b> Reserved slots for
                  premium members and faster access to parking spots.
                </p>
                <p>
                  <b>Automated Navigation & Guidance:</b> Real-time navigation
                  to the nearest available parking slot.
                </p>
                <p>
                  <b>Enhanced Security & Monitoring:</b> 24/7 surveillance and
                  alert systems.
                </p>
              </div>
              <div class="type">
                <p><b>Vehicle Types:</b> All Types</p>
              </div>
              <div class="price">
                <p><b>Price:</b></p>
              </div>
            </div>
          </div>
          <div class="package">
            <div class="package-name">
              <center>VIP Package</center>
            </div>
            <div class="package-info">
              <div class="description">
                The VIP Package offers top-level convenience, personalized
                services, and exclusive amenities for a luxurious parking
                experience.
              </div>
              <div class="features">
                <p>
                  <b>Dedicated Parking Areas:</b> VIP-only sections with
                  personalized slot allocations.
                </p>
                <p>
                  <b>Personalized Entry & Exit:</b> License plate recognition
                  with barrier-free access for swift entry and exit.
                </p>
                <p>
                  <b>Exclusive Security Features:</b> Access to private
                  monitoring and immediate response in case of emergencies.
                </p>
              </div>
              <div class="type">
                <p><b>Vehicle Types:</b> Electric Vehicles,Sedans,SUVs</p>
              </div>
              <div class="price">
                <p><b>Price:</b></p>
              </div>
            </div>
          </div>
        </div>
        <div class="optional-packages">
          <div class="heading">
            <h2>Optional Packages</h2>
          </div>
          <div class="optional-packages-container">
            <?php
            include 'php/packageDsiplay.php';
            ?>
          </div>
        </div>
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
  </div>

  <script src="script/packages.js"></script>
</body>

</html>