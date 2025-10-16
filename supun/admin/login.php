<?php
    session_start();

    
    if (isset($_POST["login"])) {
        $username = $_POST["username"];
        $password = $_POST["password"];

        
        $correctUsername = "admin";
        $correctPassword = "password123";

    
        if ($username == $correctUsername && $password == $correctPassword) {
            
            $_SESSION["username"] = $username;

        
            setcookie("admin", "loggedIn", time() + (30 * 24 * 60 * 60), "/");

    
            header("Location: index.php");
            exit();
        } else {
            
            $error = "Incorrect username or password. Please try again.";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>

    <h2>Admin Login</h2>

    <form action="login.php" method="post">
        Username: <br>
        <input type="text" name="username" required><br>
        Password: <br>
        <input type="password" name="password" required><br><br>
        <input type="submit" name="login" value="Login"><br>
    </form>

    <?php
    
    if (isset($error)) {
        echo "<div style='color: red;'>$error</div>";
    }
    ?>

</body>
</html>
