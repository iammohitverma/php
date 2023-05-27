<?php

$currId = $_POST['id'];
$nameVal = $_POST['name'];
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

$sql = "UPDATE test_registered SET id='$currId', name='$nameVal',email='$emailVal',phone='$phoneVal' WHERE id=$currId";

if (mysqli_query($conn, $sql)) {
  echo "1";
} else {
  echo "0" . mysqli_error($conn);
}

mysqli_close($conn);
?>