<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
<?php 
   session_start();

   include("php/config.php");
   if(!isset($_SESSION['valid'])){
    header("Location: index.php");
   }
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <script src="web.js"></script>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit profile</title>
    <link rel="stylesheet" href="style/style.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    
</head>

<body>

<header>
      <?php include('../../luhith/components/header2.php') ?>
</header>
  
  <div class="container">
        <div class="box form-box">
            <?php 
               if(isset($_POST['submit'])){

                $name = $_POST['name'];
                $address = $_POST['address'];
                $age = $_POST['age'];
                $gender = $_POST['gender'];
                $vehicletype = $_POST['vehicletype'];
                $email = $_POST['email'];
                $username = $_POST['username'];
                $password = $_POST['password'];

                $id = $_SESSION['id'];

                $edit_query = mysqli_query($con,"UPDATE users SET Name='$name', Address='$address', Age='$age', Gender='$gender', Vehicletype='$vehicletype', Email='$email', Username='$username', Password='$password'  WHERE Id=$id ") or die("error occurred");

                if($edit_query){
                    echo "<div class='message'>
                    <p>Profile Updated!🥰🤗</p>
                </div> <br>";
                echo "<a href='profile.php'><button class='btn'>Go Home</button>";
                }
               }else{

                $id = $_SESSION['id'];
                $query = mysqli_query($con,"SELECT*FROM users WHERE Id=$id ");

                while($result = mysqli_fetch_assoc($query)){
                    $res_name = $result['Name'];
                    $res_Address = $result['Address'];
                    $res_Age = $result['Age'];
                    $res_Gender = $result['Gender'];
                    $res_Vehicletype = $result['Vehicletype'];
                    $res_Email = $result['Email'];
                    $res_Username = $result['Username'];
                    $res_Password = $result['Password'];
                }

            ?>
  <header>Edit Profile</header>
    <form action="" method="post">
                <div class="field input">
                    <label for="username">Enter Name <i class="bx bx-user-circle"></i></label>
                    <input type="varchar" name="name" id="name" value="<?php echo $res_name; ?>" autocomplete="off" required>
                </div>

                <div class="field input">
                    <label for="address">Address <i class="bx bx-map-pin"></i></label>
                    <input type="varchar" name="address" id="address" value="<?php echo $res_Address; ?>" autocomplete="off" required>
                </div>

                <div class="field input">
                    <label for="age">Age <i class="bx bx-id-card"></i></label>
                    <input type="number" name="age" id="age" value="<?php echo $res_Age; ?>" autocomplete="off" required>
                </div>

                <div class="field input">
                    <label for="gender">Gender </label>
                    <input type="varchar" name="gender" id="gender" value="<?php echo $res_Gender; ?>" autocomplete="off" required>
                </div>

                <div class="field input">
                    <label for="vehicletype">Vehicle Type <i class="bx bx-car"></i></label>
                    <input type="varchar" name="vehicletype" id="vehicletype" value="<?php echo $res_Vehicletype; ?>" autocomplete="off" required>
                </div>

                <div class="field input">
                    <label for="email">Email <i class="bx bx-envelope"></i></label>
                    <input type="varchar" name="email" id="email" value="<?php echo $res_Email; ?>" autocomplete="off" required>
                </div>

                <div class="field input">
                    <label for="username">Username <i class="bx bx-user"></i></label>
                    <input type="varchar" name="username" id="username" value="<?php echo $res_Username; ?>" autocomplete="off" required>
                </div>

                <div class="field input">
                    <label for="password">Password <i class="bx bx-key"></i></label>
                    <input type="varchar" name="password" id="password" value="<?php echo $res_Password; ?>" autocomplete="off" required>
                </div>
                
                <div class="field">
                    
                    <input type="submit" class="btn" name="submit" value="Update" required>
                </div>
    </form>
        </div>
        <?php } ?>
      </div>
      <?php require_once("../components/footer.php") ?>

</body>
</html>
