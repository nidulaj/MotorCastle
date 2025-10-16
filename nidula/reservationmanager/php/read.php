<?php

  include 'config.php';

  $sql = "SELECT package_id,package_name,package_description,features,package_unit,unit_price,total_price,available_vehicle_types FROM packages";
  $result = $con->query($sql);
?>