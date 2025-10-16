<?php

	require 'php/config.php';
	
	$Reservation = $_POST["reservatio-id"];
	
	
	$sql = "DELETE FROM bookings WHERE ReservationID = '$Reservation'";
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
	if($con->query($sql)){
		
		echo "<head>
    <title>Delete Reservation Details</title>
    </head>
    <body>
     
    <div class='delete'>
    <h2 id=insert>Sucessfully Deleted!</h2>
     
     
    <a href='../../nidula/home2/home2.php'>Back to homepage</a>
     
    </div> 
    </body>";
	}
	
	else{
		
		echo "not success";
	}

?>