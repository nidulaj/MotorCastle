<?php

  $con = new mysqli("localhost" , "root" , "" , "motorcastle");

  if($con-> connect_error){
    die("connection failed".$con->connect_error);
  }
  else{
    echo "";
  }

?>