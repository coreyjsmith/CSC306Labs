<?php
include "db.php";

$sql = "SELECT * FROM patients";

$result = $conn->query($sql);

if ($result->num_rows > 0) {

        echo "<table><th>Id</th><th>First Name</th><th>Last Name</th><th>Email</th><th>Mobile</th><th>Date Of Birth</th>";

        while($row = $result->fetch_assoc()) {
                echo "<tr><td>".$row['id']."</td><td>".$row['firstname']."</td><td>".$row['lastname']."</td><td>".$row['email']."</td><td>".$row['mobile']."</td><td>".$row['dob']."</td></tr>";
  }
} else {
  echo "0 results";
}

$conn->close();
?>