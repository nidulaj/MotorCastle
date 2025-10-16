<?php

$con = mysqli_connect("localhost", "root", "", "motorcastle");

if (!$con) 
{
    die("Connection failed: " .$con->connect_error());
} 
?>
