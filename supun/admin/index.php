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
    <title>Administrator Dashboard</title>

    <link rel="stylesheet" href="admincss/header.css">
    <link rel="stylesheet" href="adminCss/adminDashboardStyles.css">
    <link rel="stylesheet" href="adminCss/main.css">
    <link rel="stylesheet" href="adminCss/calender.css">
    <link rel="stylesheet" href="adminCss/navbar.css">
    <link rel="stylesheet" href="adminCss/sidebar.css">
    <link rel="stylesheet" href="adminCss/content.css">
    <link rel="stylesheet" href="adminCss/belowContent.css">
    <link rel="stylesheet" href="adminCss/bookingTable.css">
    <link rel="stylesheet" href="adminCss/dashboardHeading.css">
    <link rel="stylesheet" href="adminCss/systemAlert.css">
    <link rel="stylesheet" href="adminCss/upperContent.css">
    <link rel="stylesheet" href="adminCss/footer.css">
    <link rel="stylesheet" href="adminCss/welcomeMsg.css">
    <link rel="stylesheet" href="adminCss/slideshow.css">
    
</head>

<body>
   
    <header>

    <?php include('includes/header.php')?>

        <div class="dashboardHeading" id="dashboardHeading">
            Welcome to the Admin Panel!
        </div>

    </div>
    </header>

    <main>
        <div class="main">
            
            <div class="sidebar">

                <ul>
                    <li><a href="#" class="active">Dashboard</a></li>
                    <li><a href="../../nidula/reservationmanager/reservationTable.php">Reservations</a></li>
                    <li><a href="manageEmployee.php">Employee Management</a></li>
                    <li><a href="../../luhith/login/admin.php">Customer Management</a></li>
                    
                    
                </ul>

            </div>


            <div class="content">
                <center><div class="welcomeMsg">Welcome, Admin!<br><br><h2></div></center>
                <div class="upperContent">
                
                    
                
                <h1>Current Parking Areas</h1>
    
                <div id="slideshow">
                    <img id="currentImage" src="images/img1.jpg" alt="Image 1"> 
                    <div id="prev" class="arrow">❮</div> 
                    <div id="next" class="arrow">❯</div> 
                </div>

                <script>
                    const images = [
                        "images/img1.jpg",
                        "images/img2.jpg",
                        "images/castle.jpg"
                    ]; 

                    let currentIndex = 0; 

                    // Function to change the displayed image
                    function showImage(index) {
                        const currentImage = document.getElementById("currentImage");
                        currentImage.src = images[index]; 
                    }

            
                    function nextImage() {
                        currentIndex = (currentIndex + 1) % images.length; 
                        showImage(currentIndex);
                    }

                    
                    function prevImage() {
                        currentIndex = (currentIndex - 1 + images.length) % images.length; 
                        showImage(currentIndex);
                    }

                
                    document.getElementById("next").addEventListener("click", nextImage);
                    document.getElementById("prev").addEventListener("click", prevImage);

            
                    document.addEventListener("keydown", function(event) {
                        if (event.key === "ArrowRight") {
                            nextImage();
                        } else if (event.key === "ArrowLeft") {
                            prevImage();
                        }
                    });

    </script>

                </div>

                
                <div class="belowContent">
                    <div class="bookingTable">
                    <h3><br>Employee Data</style><br></h3>
                        <?php
                            require 'config.php';
        
                            $sqlRead = "SELECT Id, Name, Contact_no, Email, DOB, Gender, Address, Username, Password, Confirmed_Password FROM employee ORDER BY Id DESC LIMIT 5";        
                            $result = $con->query($sqlRead);
        
                            if ($result->num_rows > 0) 
                            {
                                 echo "<div class = 'employeeTable' >";
                                    echo "<table border='1'>";
                                    echo "<tr><th>Id</th><th>Name</th><th>Contact No</th><th>Email</th><th>DOB</th><th>Gender</th><th>Address</th><th>Username</th><th>Password</th><th>Confirmed Password</th></tr>"; 
                                    while ($row = $result->fetch_assoc())
                                    {
                                        echo "<tr>";
                                        echo "<td>" . $row["Id"] . "</td>";
                                        echo "<td>" . $row["Name"] . "</td>";
                                        echo "<td>" . $row["Contact_no"] . "</td>";
                                        echo "<td>" . $row["Email"] . "</td>";
                                        echo "<td>" . $row["DOB"] . "</td>";
                                        echo "<td>" . $row["Gender"] . "</td>"; 
                                        echo "<td>" . $row["Address"] . "</td>";
                                        echo "<td>" . $row["Username"] . "</td>";
                                        echo "<td>" . $row["Password"] . "</td>";
                                        echo "<td>" . $row["Confirmed_Password"] . "</td>";
                                        echo "</tr>";
                                    }
                                    echo "</table>";
                                echo "</div>";
                            } 
                            
                            else 
                            {
                                echo "<br>No results<br>";
                            }
        
                            $con->close();
                        ?>
                    
                    <button onclick="window.location.href='read.php'">View all data</button>
                    
                    </div>
                </div>
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

    <script src="adminJs/adminDashboard.js"></script>
    <script src="adminJs/footer.js"></script>
</body>

</html>

