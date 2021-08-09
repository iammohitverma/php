<?php

include "./dbcon.php";

$id  = $_GET['id'];

$selectQuery = "delete from registration where id={$id}";

$deletequery = mysqli_query($conn, $selectQuery);

$deleteresult = mysqli_fetch_array($deletequery);

header('location : select.php');

?>