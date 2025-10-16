<?php

  require 'php/config.php';

   
  $paymentmethod=$_POST["payment-method"];
  $cardnumber=$_POST["cardNumber"];
  $cardname=$_POST["cardName"];
  $expirydate=$_POST["expiry"];
  $cvv=$_POST["cvv"];

  $msql="INSERT INTO payments VALUES ('$paymentmethod','$cardnumber','$cardname','$expirydate','$cvv')";
?>
<!DOCTYPE html>
<html>
<head>
    <title>Motor Castle Parking Solutions</title>
    <meta charset="utf-8">
    <script src="web.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
     <link rel="stylesheet" href="style/headerr.css"> 
     <link rel="stylesheet" href="style/footer.css">
     <link rel="stylesheet" href="style/form.css">
     <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
     <link rel="stylesheet" href="style/table.css">
     <link rel="stylesheet" href="style/insert.css">

     
</head>
<?php
  if($con->query($msql))
  {
    echo
    "<head>
    <title>Reservation Successful</title>
    </head>
    <body>
     
    <div class='success'>
    <h2 id=insert>Reservation Sucessfull</h2>
    <div class='thankyou'>
    <p id=thank>Thank you for your Reservation! Your Booking has been sucessfully processed.</p><br>
    <a href='../../nidula/home2/home2.php'>Back to homepage</a>
    </div>
    </div>"; 

    
}
  else{
    echo"Error".$con->error;
  }


  $con->close();
 

?>