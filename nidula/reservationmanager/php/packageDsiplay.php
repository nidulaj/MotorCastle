<?php

  include 'read.php';

  if ($result->num_rows > 0){

    while ($row = $result->fetch_assoc()){

      echo '<div class="package">
            <div class="package-name">
              <center>'.$row["package_name"].'</center>
            </div>
            <div class="package-info">
              <div class="description">'.$row["package_description"].'</div>
              <div class="features">
                <p>'.$row["features"].'</p>
              </div>
              <div class="type">
                <p><b>Vehicle Types:</b> '.$row["available_vehicle_types"].'</p>
              </div>
              <div class="price">
                <p><b>Unit Type:</b> '.$row["package_unit"].'</p>
                <p><b>Unit Price:</b> '.$row["unit_price"].'</p>
                <p><b>Total Price:</b> '.$row["total_price"].'</p>
              </div>
              <div class="purchase"><a href=""><button>Purchase Package</button></a>
              </div>
            </div>
          </div>';

    }
  }


?>