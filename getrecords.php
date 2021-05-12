<!DOCTYPE html>

<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "patientrecords";
$conn = new mysqli($servername, $username, $password,$dbname);

if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}

?>


<head>
<meta charset="UTF-8">

<style>
table {
width: 100%; 
}

td, th {
border: 1px solid #000000;
text-align: left;
padding: 8px;
}

tr{
background-color: #dddddd;
}
</style>

<title>Display Records</title>
</head>



<body>

<h1>Display Records</h1>

<table>

<tr style='background-color: #dbdbdb;'>
<th>ID Num</th>
<th>First Name</th>
<th>Last Name</th>
<th>Address</th>
<th>Age</th>
<th>Gender</th>
<th>Marital Status</th>
</tr>

<?php

$sql = "Records";

$result = $conn->query($sql);

if($result->num_rows>0){

$i=0;

while($row = $result->fetch_assoc()){

if($i%2==0){

echo "<tr> 

<td>".$row['idnum']."</td>
<td>".$row['fname']."</td>
<td>".$row['lname']."</td>
<td>".$row['address']."</td>
<td>".$row['age']."</td>
<td>".$row['gender']."</td>
<td>".$row['marital']."</td><tr>";

}else{

echo "<tr style='background-color: #dbdbdb;'> 

<td>".$row['idnum']."</td>
<td>".$row['fname']."</td>
<td>".$row['lname']."</td>
<td>".$row['address']."</td>
<td>".$row['age']."</td>
<td>".$row['gender']."</td>
<td>".$row['marital']."</td><

tr>";
}

$i++;

}else{

echo "Records Not found";

}

?>

</table>

</body>

</html>