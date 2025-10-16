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
    <link rel="stylesheet" href="style/admin.css">
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>

</head>

<body>

<?php include('../../nidula/reservationmanager/header.php')?>

<div class="container">
          <div class="box form-box">
            <header>Delete User Profile</header>
                <form action="delete.php" method="post">
                  <div class="field input">
                    <label for="ID">User ID <i class="bx bx-user"></i></label>
                      <input type="text" name="UID" autocomplete="off" required>
                  </div>
                  <div class="field">
                    <div class="delete">
                      <input type="submit" class="btn" name="submit" value="Delete" onclick="openPopup()">
                      <div class="popup" id="popup">
                        <img src="image/ticket.png">
                        <h2>Success!!</h2>
                        <p>User Details Successfully Deleted.</p>
                        <p>Done!</p>
                        <button type="button">OK</button>
                      </div>
                    </div>
                  </div>
                </form>
          </div>
</div>

<script>
  let popup = document.getElementById("popup");

  function openPopup(){
    popup.classList.add("open-popup");
  }

  function closePopup(){
    popup.classList.remove("open-popup");
  }
</script>


<?php require_once("../../luhith/components/footer.php") ?>  

</body>
</html>