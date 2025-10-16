<?php
require 'php/config.php'; 


$search = isset($_GET['search']) ? $_GET['search'] : '';


$sql = "SELECT ReservationID, username, date, entry_time, exit_time, vehicle_type, package_type FROM bookings";


if ($search != '') {
    $sql .= " WHERE ReservationID = '" . mysqli_real_escape_string($con, $search) . "'";
}

$result = $con->query($sql);
?>

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
     <link rel="stylesheet" href="style/read.css">

     
     
     <script src="payment.js"></script>
     
</head>
<body>
     
<header>
      <?php include('../../luhith/components/header2.php') ?>
    </header>

<div class="tableback">
    <div class="searchbar"><br><br>
        <h2>Check Your Reservation</h2><br>
        <form method="GET" action="" >
            <label>Search by Reservation ID:</label>
            <input type="text" id="search" name="search" placeholder="Enter Reservation ID" value="<?php echo htmlspecialchars($search); ?>">
            <button id=searchid type="submit">Search</button>
        </form>
    </div>
</div>
         
    
    

     <div class="table1">
     <div class="butn">  
            <button id="upd"><a href="update1.php">Update</a></button>
            <button id="del"><a href="delete1.php">Delete</a></button>
        </div>
</div>
      
        <?php
  
        if ($result->num_rows > 0) {
            echo "<table border='1' id=booking>";
            echo "<tr>
                    <th>Reservation ID</th>
                    <th>Username</th>
                    <th>Date</th>
                    <th>Entry Time</th>
                    <th>Exit Time</th>
                    <th>Vehicle Type</th>
                    <th>Package Type</th>
                  </tr>";

        
            while ($row = $result->fetch_assoc()) {
                echo "<tr>
                        <td>" . $row["ReservationID"] . "</td>
                        <td>" . $row["username"] . "</td>
                        <td>" . $row["date"] . "</td>
                        <td>" . $row["entry_time"] . "</td>
                        <td>" . $row["exit_time"] . "</td>
                        <td>" . $row["vehicle_type"] . "</td>
                        <td>" . $row["package_type"] . "</td>
                      </tr>";
            }

            echo "</table>";
        } else {
            if ($search != '') {
                echo "No results found for Reservation ID: " . htmlspecialchars($search);
            } else {
                echo "No bookings found.";
            }
        }
        ?>
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
</body>    


<?php

$con->close();
?>
