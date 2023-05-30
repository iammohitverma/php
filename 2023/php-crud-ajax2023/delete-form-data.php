<?php

include "connection.php";

$currId = $_POST['id'];


// sql to delete a record
$sql = "DELETE FROM test_registered WHERE id=$currId";

if (mysqli_query($conn, $sql)) {
  echo "1";
} else {
  echo "0" . mysqli_error($conn);
}

mysqli_close($conn);
?>