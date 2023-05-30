<?php

include "connection.php";

$currId = $_POST['id'];
$nameVal = $_POST['name'];
$emailVal = $_POST['email'];
$phoneVal = $_POST['phone'];


$sql = "UPDATE test_registered SET id='$currId', name='$nameVal',email='$emailVal',phone='$phoneVal' WHERE id=$currId";

if (mysqli_query($conn, $sql)) {
  echo "1";
} else {
  echo "0" . mysqli_error($conn);
}

mysqli_close($conn);
?>