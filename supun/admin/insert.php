<?php
    session_start();
/*
    // Check if the user is logged in
    if (!isset($_SESSION["username"])) {
        // If not logged in, redirect to login page
        header("Location: login.php");
        exit();
    }*/
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee registration confirmation</title>

    <link rel="stylesheet" href="employeeCss/header.css">
    <link rel="stylesheet" href="employeeCss/adminDashboardStyles.css">
    <link rel="stylesheet" href="employeeCss/main.css">
    <link rel="stylesheet" href="employeeCss/employeeForm.css">
    <link rel="stylesheet" href="employeeCss/navbar.css">
    <link rel="stylesheet" href="employeeCss/form.css">
    <link rel="stylesheet" href="employeeCss/content.css">
    <link rel="stylesheet" href="employeeCss/formButtons.css">
    <link rel="stylesheet" href="employeeCss/dashboardHeading.css">
    <link rel="stylesheet" href="employeeCss/legend.css">
    <link rel="stylesheet" href="employeeCss/upperContent.css">
    <link rel="stylesheet" href="employeeCss/footer.css">
    <link rel="stylesheet" href="employeeCss/backToAdminDashboard.css">
</head>

<body>
    <header>

    <?php include('includes/header.php')?>

        <div class="dashboardHeading" id="dashboardHeading">
            Welcome to MotorCastle Parking Solutions
        </div>

    </div>
    </header>

    <main>
        <div class="main">
            
            <div class="content">

                <div class = "employeeForm">
                
                    <?php
            
                        require 'config.php';

                        $empName = $_POST["eName"];
                        $empContact = $_POST ["eContact"];
                        $empEmail = $_POST ["eEmail"];
                        $empBirthday = $_POST["eBirthday"];
                        $empGender = $_POST["eGender"];
                        $empAddress = $_POST["eAddress"];
                        $empusername = $_POST["eUsername"];
                        $empPassword = $_POST["ePassword"];
                        $empConfirmPassword = $_POST["eConfirmPassword"];


                        $sqlInsert = "INSERT INTO employee VALUES ('','$empName','$empContact','$empEmail','$empBirthday','$empGender','$empAddress','$empusername','$empPassword','$empConfirmPassword')";

                        if($con -> query($sqlInsert))
                        {
                            echo "Inserted successfully";
                        }
                        else
                        {
                            echo "Insertion failed!".$con -> error;
                        }

                        $con -> close();
                    ?>
                </div>
                <center>
                <div class = "backToAdminDashboard">
                    <a href ="index.php">Go back to Administrator Dashboard</a>
                </div>
                </center>
            </div>
        </div>
    </main>

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

      <script src="employeeJs/adminDashboard.js"></script>
      <script src="employeeJs/footer.js"></script>
</body>

</html>