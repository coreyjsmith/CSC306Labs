<?php
  $server_name = "localhost";
  $user_name = "root";
  $password = "";
  $dbname = "landscape";
  
  $conn = new mysqli($server_name, $user_name, $password, $dbname);
  
  if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
  }

  echo "<table>
        <tr>
          <th>Customer ID</th>
          <th>Customer L Name</th>
          <th>Customer F Name</th>
          <th>Street address</th>
          <th>Service</th>
          <th>Customer Bill</th>
          <th>Amount Paid</th>
          <th>Bill Date</th>
          <th>Bill Status</th>
          <th>Message Sent(Hover to see)</th>
        </tr>";


  
  $sql = "SELECT * FROM customers,billing where customers.customer_ID = billing.customer_ID";
  $result = $conn->query($sql);
  if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
      
      $c_id = $row["customer_ID"];
      $customer_L_Name = $row["customer_L_Name"];
      $customer_F_Name = $row["customer_F_Name"];
      $customer_Title = $row["customer_Title"].", ";
      $customer_Email = $row["customer_Email"];
      $street_Address = $row["street_Address"];
      $service = $row["service"];
      $customer_bill = $row["customer_bill"];
      $amt_paid = $row["amt_paid"];
      $bill_date = $row["bill_date"];
      $calculate = $customer_bill - $amt_paid;
      $status = "None";

      if ($calculate == 0) {
        
        $message = "Hello,".$customer_F_Name."Thank you for paying your due amount. We hope to see your continued business in the future.";
        $status = "No dues";
      }

      elseif ($calculate > 0) {
        
        $message = "Hello,".$customer_F_Name."Your remaining due amount is $"$calculate". Thank you.";
      
      mail($customer_Email,"Message from Lee",$message);
      ?>
            <tr>
              <td><?php echo $c_id ?></td>
              <td><?php echo $customer_L_Name ?></td>
              <td><?php echo $customer_F_Name ?></td>
              <td><?php echo $street_Address ?></td>
              <td><?php echo $service ?></td>
              <td><?php echo $customer_bill ?></td>
              <td><?php echo $amt_paid ?></td>
              <td><?php echo $bill_date ?></td>
              <td><?php echo $status ?></td>
              <td><a href="" title="<?php echo $message ?>">Message</a></td>
            </tr>

      <?php
    }
    echo "</table>";
  } else {
    echo "0 results";
  }
?>