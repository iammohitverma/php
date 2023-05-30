<?php
include "connection.php";

$currId = $_POST['id'];

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