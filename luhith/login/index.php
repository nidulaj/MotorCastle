<?php 
   session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <script src="web.js"></script>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style/style.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    
</head>
<body>

<header>
      <?php include('../../luhith/components/header1.php') ?>
</header>

  <div class="container">
        <div class="box form-box">
            <?php 
              include("php/config.php");

              if(isset($_POST['submit'])) {
                $email = mysqli_real_escape_string($con, $_POST['email']);
                $password = mysqli_real_escape_string($con, $_POST['password']);

                $result = mysqli_query($con,"SELECT * FROM users WHERE Email='$email' AND Password='$password' ") or die("Select Error");
                $row = mysqli_fetch_assoc($result);

                
                    if(is_array($row) && !empty($row)){
                    
                    $_SESSION['id'] = $row['ID'];    
                    $_SESSION['name'] = $row['Name'];
                    $_SESSION['address'] = $row['Address'];
                    $_SESSION['age'] = $row['Age'];
                    $_SESSION['gender'] = $row['Gender'];
                    $_SESSION['vehicletype'] = $row['Vehicletype'];
                    $_SESSION['valid'] = $row['Email'];
                    $_SESSION['username'] = $row['Username'];
                    

                } else {
                    echo "<div class='message'>
                            <p><b>Wrong Email or Password🤷</b></p>
                          </div> <br>";
                    echo "<a href='index.php'><button class='btn'>Go Back</button></a>";
                }
                if(isset($_SESSION['valid'])){
                    header("Location: ../../nidula/home2/home2.php");
                }
              } else {


            ?>

              <header>Login</header>
                <form action="" method="post">
                  <div class="field input">
                      <label for="email">Email <i class="bx bx-envelope"></i></label>
                      <input type="email" name="email" id="email" autocomplete="off" required>
                  </div>

                  <div class="field input">
                      <label for="password">Password <i class="bx bx-key"></i></label>
                      <input type="password" name="password" id="password" autocomplete="off" required>
                  </div>
                  <div class="remember-forgot">
                      <label><input type="checkbox"> Remember me</label>
                      <a href="#">Forgot password?</a>
                  </div>

                  <div class="field">
                      <input type="submit" class="btn" name="submit" value="Login">
                  </div>
                  <div class="links">
                    Don't have an account? <a href="register.php">Sign Up Now</a>
                  </div>
                  <div class="links">
                    Log in as Admin <a href="../adminlogin/adminIndex.php">Sign in</a>
                  </div>
                </form>
        </div>
          <?php } ?>
  </div>
 <?php require_once("../components/footer.php") ?>      
</body>
</html>
