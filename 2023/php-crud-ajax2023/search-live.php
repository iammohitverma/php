<?php

$searchVal = $_POST['searchVal'];


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

$sql = "SELECT id FROM `test_registered` WHERE name LIKE '%$searchVal%'";
$result = mysqli_query($conn, $sql);

$rowsFound = "";

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        //   echo $row['id'];
        $rowsFound .= $row['id'] . ",";
    }
    
    $splitted = explode(",", $rowsFound);
    print_r(json_encode($splitted));

  } else {
    echo "0";
  }

mysqli_close($conn);
?>