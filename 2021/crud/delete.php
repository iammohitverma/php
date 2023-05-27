<?php

include "./css/style.css";
include "connection.php";

?>


<?php
            
    $id  = $_GET['id'];

    $selectQuery = "SELECT * FROM students WHERE id={$id}";

    $deletequery = mysqli_query($conn, $selectQuery);

    $deleteresult = mysqli_fetch_array($deletequery);

    // echo $deleteresult['id'];

    $query = "DELETE FROM students WHERE id = {$id}";

    if (mysqli_query($conn, $query)) {
        
        echo "data deleted";

                // Redirect browser
        header("Location: ./display.php");
        
        exit;

        // echo "<script> setTimeout(function(){ 


            
        //  }, 3000); </script>";

    }else{

        echo "Delete query not working";

    }

?>