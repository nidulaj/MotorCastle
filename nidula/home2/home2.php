<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home</title>
  <link rel="stylesheet" href="style/home/header-home.css">
  <link rel="stylesheet" href="style/home/mainContent.css">
  <link rel="stylesheet" href="style/home/video.css">
  <link rel="stylesheet" href="style/home/packages.css">
  <link rel="stylesheet" href="style/home/review.css">
  <link rel="stylesheet" href="style/home/footer.css">
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
  <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Aclonica" />

</head>

<body>
  <div class="home">
    <header>
      <?php include('../../luhith/components/header2.php') ?>
    </header>
    <div class="video-container">
      <video autoplay muted loop class="background-video">
        <source src="image/home/video.mp4" type="video/mp4">
        Your browser does not support the video tag.
      </video>
      <div class="content">
        <p class="p1">More than </p>
        <p class="p2">PARKING STYSTEM</p>
        <p class="p3">It's a Real State</p>
        <p class="p4">Cars are changing. So is parking. Motor castle provide smarter parking solutions for you</p>
        <a href="../../imasha/booking/reservationform.php"><button class="reserve-button">Reserve Your Parking space</button></a>
      </div>
    </div>
    <div class="middle-content">
      <div class="packages">
        <div class="packages-title">Packages</div>
        <div class="packages-content">
          <div class="container" id="package1">
            <div class="card">
              <div class="front">
                <h1>General</h1>
              </div>
              <div class="back">
                <h1>General</h1>
                <p>Basic parking services with automated entry and exit.<br>
                  Standard parking spots, subject to availability.
                </p>
              </div>
            </div>
          </div>
          <div class="container" id="package2">
            <div class="card">
              <div class="front">
                <h1>Premium</h1>
              </div>
              <div class="back">
                <h1>Premium</h1>
                <p>Enhanced parking experience with quicker access to prime spots.<br>
                  Reserved parking spots closer to exits or elevators.
                </p>
              </div>
            </div>
          </div>
          <div class="container" id="package3">
            <div class="card">
              <div class="front">
                <h1>VIP</h1>
              </div>
              <div class="back">
                <h1>VIP</h1>
                <p>Luxury parking with the highest level of convenience and exclusivity.<br>
                  Exclusive parking zones with valet services.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="packages-more">
        <a href="../../nidula/reservationmanager/packages.php"><button>See More Packages</button></a>
      </div>
      <div class="main-scroll-div">
        <div></div>
        <div class="cover">
          <div class="scroll-reviews">
            <div class="review" id="review1">
              <div class="review-header">
                <div class="user-img">
                  <img class="review-user-img" src="image/home/supun.jpg" alt="" />
                </div>
                <div class="user-name">Dinujaya Supun</div>
              </div>
              <div class="review-body">
                <div class="review-discription">
                  "I’ve been using this automated parking system for a couple of months now, and I must say it’s incredibly convenient. The entire process from booking a spot to making payments is smooth and easy. I love the user-friendly interface, and the fact that I don’t have to worry about parking availability anymore has reduced a lot of stress. Highly recommended!"
                </div>
                <div class="star-rating">
                  <span class="filled">&#9733;</span>
                  <span class="filled">&#9733;</span>
                  <span class="filled">&#9733;</span>
                  <span>&#9733;</span>
                  <span>&#9733;</span>
                </div>
              </div>
            </div>
            <div class="review" id="review2">
              <div class="review-header">
                <div class="user-img">
                  <img class="review-user-img" src="image/home/imma.jpg" alt="" />
                </div>
                <div class="user-name">Imasha Athapaththu</div>
              </div>
              <div class="review-body">
                <div class="review-discription">
                  "As someone who is always on the go, this automated parking system is a lifesaver! The website is easy to navigate, and booking my spot in advance ensures I don’t waste time searching for parking. The automated entry and exit process is quick, and the digital receipts make expense tracking easier. Definitely a 5-star experience!"
                </div>
                <div class="star-rating">
                  <span class="filled">&#9733;</span>
                  <span class="filled">&#9733;</span>
                  <span class="filled">&#9733;</span>
                  <span>&#9733;</span>
                  <span>&#9733;</span>
                </div>
              </div>
            </div>
            <div class="review" id="review3">
              <div class="review-header">
                <div class="user-img">
                  <img class="review-user-img" src="image/home/luhith.jpg" alt="" />
                </div>
                <div class="user-name">Luhith Himsara</div>
              </div>
              <div class="review-body">
                <div class="review-discription">
                  "While the concept of automated parking is great, I faced some issues with the payment process. I got charged twice, and it took a while to get a refund. The support system isn't very responsive, which can be frustrating. Once they improve the customer service side, this system will be amazing."
                </div>
                <div class="star-rating">
                  <span class="filled">&#9733;</span>
                  <span class="filled">&#9733;</span>
                  <span class="filled">&#9733;</span>
                  <span>&#9733;</span>
                  <span>&#9733;</span>
                </div>
              </div>
            </div>
            <div class="review" id="review4">
              <div class="review-header">
                <div class="user-img">
                  <img class="review-user-img" src="image/home/nidula.jpg" alt="" />
                </div>
                <div class="user-name">Nidula Jayalath</div>
              </div>
              <div class="review-body">
                <div class="review-discription">
                  "The automated parking system is a great idea, but I’ve encountered some technical glitches while using the website. Sometimes it takes too long to load, and there have been occasions when the booking didn’t go through, leading to confusion when I arrived at the parking location. With a bit more attention to these bugs, this could be an excellent service."
                </div>
                <div class="star-rating">
                  <span class="filled">&#9733;</span>
                  <span class="filled">&#9733;</span>
                  <span class="filled">&#9733;</span>
                  <span>&#9733;</span>
                  <span>&#9733;</span>
                </div>
              </div>
            </div>
            <div class="review" id="review5">
              <div class="review-header">
                <div class="user-img">
                  <img class="review-user-img" src="image/home/nuwantha.jpg" alt="" />
                </div>
                <div class="user-name">Damika Nuwantha</div>
              </div>
              <div class="review-body">
                <div class="review-discription">
                  "I appreciate that this system caters to individuals with disabilities. The accessible parking options are easy to find and book through the site, and the automated processes at the parking lot are hassle-free. The website's clear design and accessibility features show a thoughtful approach. I’ll continue using this service for its reliability."
                </div>
                <div class="star-rating">
                  <span class="filled">&#9733;</span>
                  <span class="filled">&#9733;</span>
                  <span class="filled">&#9733;</span>
                  <span>&#9733;</span>
                  <span>&#9733;</span>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div></div>
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
</body>

</html>