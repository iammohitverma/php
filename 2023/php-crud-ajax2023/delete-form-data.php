<?php

$currId = $_POST['id'];

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

// sql to delete a record
$sql = "DELETE FROM test_registered WHERE id=$currId";

if (mysqli_query($conn, $sql)) {
  echo "1";
} else {
  echo "0" . mysqli_error($conn);
}

mysqli_close($conn);
?>