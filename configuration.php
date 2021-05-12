<?php

$servername = "localhost";
$username = "helper";
$password = "feelBetter";
$dbname = "doctorWho";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

?>