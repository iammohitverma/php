<?php
$servername = "localhost";
$username = "root";
$password = "";
$db = "crud_db";
// Create connection
$conn = new mysqli($servername, $username, $password, $db);

// Check connection
if ($conn->connect_error) {
  die("DB Connection failed: " . $conn->connect_error);
}
echo "DB Connected successfully";
?>