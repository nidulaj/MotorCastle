
<header>
    <?php include("../../luhith/components/header2.php"); ?>
</header>




<?php

  require 'php/config.php';

  $username = $_POST["username"];
  $date = $_POST["date"];
  $entryTime = $_POST["fromTime"];
  $endTime = $_POST["toTime"];
  $vehicleType = $_POST["Vehicle-type"];
  $packageType = $_POST["Package-type"];
  
  $sql="INSERT INTO bookings VALUES ('','$username','$date','$entryTime','$endTime','$vehicleType','$packageType')";
  
  if($con->query($sql))
 
echo '
  <!DOCTYPE html>
<html>
<head>
    <title>Motor Castle Parking Solutions</title>
    <meta charset="utf-8">
    <script src="web.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
     <link rel="stylesheet" href="style/headerr.css"> 
     <link rel="stylesheet" href="style/footer.css">
     <link rel="stylesheet" href="style/form.css">
     <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
     <link rel="stylesheet" href="style/table.css">
     <script src="payment.js"></script>
     
</head>
<body>


    
    <hr>



    <div class="main-content">
      <div class="form">
        <div class="form-title"><center><h2>Park Reservation Form</h2></center></div>
        <div class="form-body">
          <form action="insertpayment.php" method="post" id="reservationForm">
            <div class="reservation-info">
              
            

            <div class="payment-details">
              <div><center><h3>Payment Details</h3></center></div>
              <div class="card-info">
                <div class="field-input">
                   Choose your payment method:<br>

                  <div class="visa">
                    <div><input type="radio" name="payment-method" value="visa"></div>
                    <div><img src="image/img (3).png" alt="visa"></div>
                  </div>

                  <div class="master">
                    <div><input type="radio" name="payment-method" value="master"></div>
                    <div><img src="image/img (2).png" alt="master"></div>
                  </div>
                </div>

                <div class="field-input">
                  <input type="text" name="cardNumber" placeholder="Card number" required><br>      
                  <input type="text" name="cardName" placeholder="Name on the card"><br>
                  <input type="text" name="expiry" placeholder="MM/YY" required><br>
                  <input type="text" name="cvv" placeholder="CVV"><br>
                </div>

                <div class="field-input">
                  <center><input type="submit" value="Pay here"></center>
                  
                </div>
              </div>
            </div>
          </form>
            </div>
          
        </div>
      </div>
    </div>
 
    <footer class="footer">
      <div class="container">
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

    <script>
  // Function to calculate and update payment total
  function updatePayment() {
    const vehicle = document.getElementById("vehicle").value;
    const packageType = document.getElementById("package").value;

    let payment = 0;

    // Calculate payment based on vehicle type
    if (vehicle == "car") {
      payment += 1000.00;
    } else if (vehicle == "van") {
      payment += 1500.00;
    } else if (vehicle == "jeep") {
      payment += 2000.00;
    } else if (vehicle == "bus") {
      payment += 2500.00;
    } else if (vehicle == "cab") {
      payment += 3000.00;
    }

    // Calculate payment based on package type
    if (packageType == "General") {
      payment += 0.00;
    } else if (packageType == "Premium") {
      payment += 750.00;
    } else if (packageType == "VIP") {
      payment += 1500.00;
    }

    // Update the total payment displayed on the page
    document.getElementById("payment_total").innerHTML = "Total Payment: Rs." + payment.toFixed(2);
  }

</script>

</body>    
 ';
 
?>
 
 