<?php
include "db.php";

$firstname = $_POST["firstname"];
$lastname = $_POST["lastname"];
$email = $_POST["email"];
$mobile = $_POST["mobile"];
$dob = $_POST["dob"];

$sql = "INSERT INTO patients (firstname, lastname, email, mobile, dob)
VALUES ('$firstname', '$lastname', '$email', '$mobile', '$dob')";

if ($conn->query($sql) === TRUE) {
  echo "Patient added.";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>