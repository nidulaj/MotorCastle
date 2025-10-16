<?php 
   session_start();

   include("php/config.php");
   
   
   if(!isset($_SESSION['valid'])){
       header("Location: index.php");
       exit();
   }

   $id = $_SESSION['id'];
   $stmt = $con->prepare("SELECT * FROM users WHERE Id = ?");
   $stmt->bind_param("i", $id);
   $stmt->execute();
   $result = $stmt->get_result()->fetch_assoc();

   if ($result) {
       $res_Name = $result['Name'];
       $res_Address = $result['Address'];
       $res_Age = $result['Age'];
       $res_Gender = $result['Gender'];
       $res_Vehicletype = $result['Vehicletype'];
       $res_Email = $result['Email'];
       $res_Uname = $result['Username'];
       $res_Password = $result['Password'];
       $res_id = $result['ID'];
   } else {
      
       echo "User not found.";
       exit();
   }
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <script src="web.js"></script>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="style/style.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">    
  </head>
  <body>

  <div class="header">
      <a href="../../nidula/home2/home2.php"><div class="header-left">
        <div class="logo-container"><img class="logo" src="image/header/logo.png" alt=""></div>
        <div class="name-container">Motor Castle Parking</div>
      </div></a>
      <div class="header-middle">
        <a href="../../nidula/home2/home2.php"><div class="home-container">Home</div></a>
        <a href="../../imasha/booking/read.php"><div class="bookings-container">Bookings</div></a>
        <a href="../evcharging/charging.php"><div class="ev-charging-container">EV Charging</div></a>
        <a href="../aboutus2/aboutus2.php"><div class="about-us-container">About us</div></a>
        <a href="../../nuwantha/contactus/contact.php"><div class="contact-us-container">Contact Us</div></a>
      </div>
      <div class="header-right">
        <div class="login"><button class="change-profile"><a href='edit.php?Id=<?php echo $res_id; ?>'>Change Profile</a></button></div>
        <div class="signup"><button class="log-out"><a href="php/logout.php">Log Out</button></a></div>
      </div>
  </div>
  <main>
       <div class="main-box top">
          <div class="top">
            <div class="box">
                <p>Hello <b><?php echo htmlspecialchars($res_Uname); ?></b>, Welcome🙈✨</p>
            </div>
            <div class="box">
                <p>You're from <b><?php echo htmlspecialchars($res_Address); ?></b></p>
            </div>
            <div class="box">
                <p>You're <b><?php echo htmlspecialchars($res_Age); ?>years age.</b>.</p>
            </div>
          </div>
          <div class="bottom">
            <div class="box">
                <p>Your vehicle type is <b><?php echo htmlspecialchars($res_Vehicletype); ?></b>.</p>
            </div>
          </div>
       </div>
    </main>

    <?php require_once("../components/footer.php") ?>    
  </body>
</html>
