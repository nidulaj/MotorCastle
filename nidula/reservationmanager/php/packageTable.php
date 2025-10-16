<?php

  include 'read.php';

  if ($result->num_rows > 0) {
      echo "<table border='1'>";
      echo "<tr>
              <th>Package ID</th>
              <th>Package Name</th>
              <th>Package Description</th>
              <th>Features</th>
              <th>Package Unit</th>
              <th>Unit Price</th>
              <th>Total Price</th>
              <th>Available Vehicle Types</th>
            </tr>";

      // Output the rows
      while ($row = $result->fetch_assoc()) {
          echo "<tr>
                  <td>" . $row["package_id"] . "</td>
                  <td>" . $row["package_name"] . "</td>
                  <td>" . $row["package_description"] . "</td>
                  <td>" . $row["features"] . "</td>
                  <td>" . $row["package_unit"] . "</td>
                  <td>" . $row["unit_price"] . "</td>
                  <td>" . $row["total_price"] . "</td>
                  <td>" . $row["available_vehicle_types"] . "</td>
                </tr>";
      }

      echo "</table>";
  } 
  else{
    echo "No result found";
  }

?>