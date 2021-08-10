<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "new_crud_db";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if ($conn) {
//   echo "DataBase Connected successfully";
}else{
    echo "DataBase Connection failed because "  . mysqli_connect_error();
}
?>