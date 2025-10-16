<?php

session_start();
session_destroy();


setcookie("admin", "", time() - 3600, "/");


header("Location: ../../luhith/adminlogin/adminIndex.php");
exit();
?>