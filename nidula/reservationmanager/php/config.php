<?php

  $con=new mysqli("localhost","root","","motorcastle");

  if($con->connect_error){
    die("Connection failed ".$con->connect_error);
  }

?>