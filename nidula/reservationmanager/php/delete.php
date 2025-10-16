<?php

  include 'config.php';

  $packageID = $_POST["packageID"];

  $sql = "DELETE FROM packages WHERE package_id='$packageID'";

  if($con->query($sql)){
    echo '<head>
                  <title>Delete Details</title>
                  <link rel="stylesheet" href="../style/package form/feedback.css" />
                  </head>
                  <body>
                  <div class="feedback">
                    <div class="feedback-msg"> 
                      Deleted the Package Successful!
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