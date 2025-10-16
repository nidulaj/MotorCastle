<?php

  include 'config.php';

  $packageName = $_POST["packageName"];
  $packageDescription = $_POST["packageDescription"];
  $features = $_POST["features"];
  $packageUnit = $_POST["packageUnit"];
  $unitPrice = isset($_POST["unitPrice"]) ? $_POST["unitPrice"] : 0;
  $totalPrice = isset($_POST["totalPrice"]) ? $_POST["totalPrice"] : 0;
  $vehicleType = $_POST["vehicleType"];

  $sql = "INSERT INTO packages(package_name,package_description,features,package_unit,unit_price,total_price,available_vehicle_types) VALUES ('$packageName','$packageDescription','$features','$packageUnit','$unitPrice','$totalPrice','$vehicleType')";

  if($con->query($sql)){
    echo '<head>
                  <title>Delete Details</title>
                  <link rel="stylesheet" href="../style/package form/feedback.css" />
                  </head>
                  <body>
                  <div class="feedback">
                    <div class="feedback-msg"> 
                      Added the Package Successful!
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