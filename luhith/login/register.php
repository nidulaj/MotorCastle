<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <script src="web.js"></script>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="style/style.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <script src="confirm.js"></script>
</head>
<body>

<header>
      <?php include('../../luhith/components/header1.php') ?>
</header>

  <div class="container">
        <div class="box form-box">

        <?php 
         
         include("php/config.php");
         if(isset($_POST['submit'])){
            
            $name = $_POST['name'];
            $address = $_POST['address'];
            $age = $_POST['age'];
            $gender = $_POST['gender'];
            $vehicletype = $_POST['vehicletype'];
            $email = $_POST['email'];
            $username = $_POST['username'];
            $password = $_POST['password'];


         //verifying the unique email

         $verify_query = mysqli_query($con,"SELECT Email FROM users WHERE Email='$email'");

         if(mysqli_num_rows($verify_query) !=0 ){
            echo "<div class='message'>
                      <p>This email is used, Try another One Please!</p>
                  </div> <br>";
            echo "<a href='javascript:self.history.back()'><button class='btn'>Go Back</button>";
         }
         else{
            
            mysqli_query($con,"INSERT INTO users( Name, Address, Age, Gender, Vehicletype, Email, Username, Password ) VALUES('$name','$address','$age', '$gender', '$vehicletype', '$email', '$username', '$password')") or die("Error Occured");

            echo "<div class='message'>
                      <p>Registration successfully!🤗</p>
                  </div> <br>";
            echo "<a href='index.php'><button class='btn'>Login Now</button>";
        }

         }else{
         
        ?>
 ?>

<header>Sign Up</header>
<form action="" method="post"  onsubmit="return checkPassword()">

<div class="field input">
        <label for="name">Enter Name <i class="bx bx-user-circle"></i></label>
        <input type="text" name="name" id="name" autocomplete="off" required>
    </div>

    <div class="field input">
        <label for="address">Address <i class="bx bx-map-pin"></i></Address></label>
        <input type="text" name="address" name="address" autocomplete="off" required>
    </div>

    <div class="field input">
        <label for="age">Age <i class="bx bx-id-card"></i></label>
        <input type="number" name="age" name="age" autocomplete="off" required>
    </div>

    <div class="gender-selection">
         <label for="gender">Gender</label><br>
        <input type="radio" name="gender" value="male" autocomplete="off" required> Male <br>
        <input type="radio" name="gender" value="female" autocomplete="off" required> Female
    </div>

    <div class="field input">
        <label for="vehicletype">Vehicle Type <i class="bx bx-car"></i></label>
            <select name="vehicletype" id="vehicletype" required>
                <option value="" disabled selected>Select Vehicle Type</option>s
                <option value="car">Car</option>
                <option value="motorcycle">Motorcycles and Scooters</option>
                <option value="van">Van</option>
                <option value="truck">Truck</option>
                <option value="bus">Bus</option>
                <option value="tuk tuk">Tuk-Tuk</option>
            </select>
    </div>

    <div class="field input">
        <label for="email">Email <i class="bx bx-envelope"></i></label>
        <input type="text" name="email" id="email" autocomplete="off" required>
        <small class="error-message">Please enter a valid email address.</small>
    </div>

    <div class="field input">
        <label for="username">Username <i class="bx bx-user"></i></label>
        <input type="text" name="username" id="username" autocomplete="off" required>
      
    </div>

    <div class="field input">
        <label for="password">Password <i class="bx bx-key"></i></label>
        <input type="password" name="password" id="password" autocomplete="off" required>
    </div>

    <div class="field input">
        <label for="password">Confirm Password <i class="bx bx-key"></i></label>
        <input type="password" name="password" id="cpassword" autocomplete="off" required>
    </div>

    <div class="two-col">
    <div class="one">
        <input type="checkbox" id="register-check">
        <label for="register-check"> Remember Me</label>
    </div>
    <div class="one">
        <input type="checkbox" id="register-check">
        <label for="register-check"> I Accept the Terms & Condition</label>
    </div>
    <div class="two">
        <label><a href="#">Terms & conditions</a></label>
    </div>

    <div class="field">
        
        <input type="submit" class="btn" name="submit" value="Register" required>
    </div>
    <div class="links">
        Already a member? <a href="index.php">Sign In</a>
    </div>
</form>
</div>
<?php } ?>
</div>
</div>
<?php require_once("../components/footer.php") ?>        
</body>
</html>