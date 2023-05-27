<?php

include "connection.php";

// manual insertion

$insert_query = "INSERT INTO students(id, name, country, subject) VALUES ('1', 'Test', 'India', 'Eng')";

$insertion_done = mysqli_query($conn, $insert_query);



// Check insertion
if ($insertion_done) {

    echo "Insertion successfully";

  }else{

      echo "Insertion failed because "  . mysqli_connect_error();

  }
?>