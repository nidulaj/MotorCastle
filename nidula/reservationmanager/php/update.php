<?php

  include 'config.php';

  $packageID = $_POST["packageID"];
  $packageName = $_POST["packageName"];
  $packageDescription = $_POST["packageDescription"];
  $features = $_POST["features"];
  $packageUnit = $_POST["packageUnit"];
  $unitPrice = isset($_POST["unitPrice"]) ? $_POST["unitPrice"] : 0;
  $totalPrice = isset($_POST["totalPrice"]) ? $_POST["totalPrice"] : 0;
  $vehicleType = $_POST["vehicleType"];

  $sql = "UPDATE packages set package_name='$packageName' ,package_description='$packageDescription' ,features='$features' ,package_unit='$packageUnit' ,unit_price='$unitPrice' ,total_price='$totalPrice' ,available_vehicle_types='$vehicleType' WHERE package_id='$packageID'";

  if($con->query($sql)){
    echo '<head>
                  <title>Delete Details</title>
                  <link rel="stylesheet" href="../style/package form/feedback.css" />
                  </head>
                  <body>
                  <div class="feedback">
                    <div class="feedback-msg"> 
                      Updated the Package Successful!
                    </div>
                    <a href="../reservationManager.php"><button>Back to Dashboard</button></a>
                    
                  </div>
                  </body>
                  ';
  }
  else{
    echo '<head>
                  <title>Delete Details</title>
                  <link rel="stylesheet" href="../style/package form/feedback.css" />
                  </head>
                  <body>
                  <div class="feedback">
                    <div class="feedback-msg"> 
                      Error
                    </div>
                    <a href="../reservationManager.php"><button>Back to Dashboard</button></a>
                    
                  </div>
                  </body>
                  ';
  }
?>