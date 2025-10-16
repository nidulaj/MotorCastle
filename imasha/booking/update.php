<?php

require 'php/config.php';  

$Reservation = $_POST["reservatio-id"];
$username = $_POST["username"];
$date = $_POST["date"];
$entryTime = $_POST["fromTime"];
$endTime = $_POST["toTime"];
$vehicleType = $_POST["Vehicle-type"];
$packageType = $_POST["Package-type"];

if (empty($Reservation) || empty($date) || empty($entryTime) || empty($endTime) || empty($vehicleType) || empty($packageType)) {
    echo "All fields are required";
} else {
    $sql = "UPDATE bookings SET username='$username', date='$date', entry_time='$entryTime', exit_time='$endTime', vehicle_type='$vehicleType', package_type='$packageType' WHERE ReservationID ='$Reservation'";
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
    if ($con->query($sql)) {
        echo "<head>
    <title>Update Reservation Details</title>
    </head>
    <body>
     
    <div class='update'>
    <h2 id=insert>Succesfully Updated</h2>
    <div class='thankyou'>
    <p id=thank>Thank you for your Reservation! Your Booking has been sucessfully processed.</p><br>
    <a href='../../nidula/home2/home2.php'>Back to homepage</a>
    </div>
    </div>";
    } else {
        echo "not updated: " . $conn->error;
    }
}

$con->close();

?>
