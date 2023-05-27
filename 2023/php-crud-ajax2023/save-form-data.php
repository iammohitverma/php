<?php

var_dump($_REQUEST);

$nameVal = $_POST['name'];
echo $nameVal;
$emailVal = $_POST['email'];
$phoneVal = $_POST['phone'];

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "test_db";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

// $sql = "INSERT INTO test_registered (name, email, phone), VALUES ($nameVal, $emailVal, $phoneVal)";
$sql = "INSERT INTO test_registered(`name`, `email`, `phone`) VALUES ( '$nameVal', '$emailVal', '$phoneVal')";

if (mysqli_query($conn, $sql)) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>