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

$sql = "SELECT id, name, email, phone FROM test_registered WHERE id='$currId'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {

    // output data of each row
    $row = mysqli_fetch_assoc($result); 
    
    $rowData =$row['id']."," . $row['name'] ."," . $row['email'] ."," . $row['phone'];
    
    $splitted = explode(",", $rowData);

    print_r(json_encode($splitted));

} else {
  echo "0 results";
}

mysqli_close($conn);
?>