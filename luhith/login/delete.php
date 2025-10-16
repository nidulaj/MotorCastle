<?php
include("php/config.php");

$Id = $_POST["UID"]; 

$sql = "DELETE FROM users WHERE ID = '$Id'"; 


$con->query($sql);


?>
