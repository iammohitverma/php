<?php

include "./css/style.css";
include "connection.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP FORM</title>
</head>

<body>
    <div class="container">

        <h1 class="title">Form</h1>


        <form action="" method="post">

            <div class="input-wrap">
                <label for="name">Name</label>
                <input type="text" id="name" name="name" placeholder="Your name..">
            </div>

            <div class="input-wrap">
                <label for="country">Country</label>
                <select id="country" name="country">
                <option value="australia">Australia</option>
                <option value="canada">Canada</option>
                <option value="usa">USA</option>
                </select>
            </div>

            <div class="input-wrap">
                <label for="subject">Subject</label>
                <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>
            </div>

            <input type="submit" value="Submit" class="btn" name="submit">

            <a href="./display.php" class="btn">View All Data</a>

      


  
  
  
  <?php

    if(isset($_POST['submit'])){

        $name = $_POST['name'];

        $country = $_POST['country'];

        $subject = $_POST['subject'];



        if($name!== "" && $country!== "" && $subject !== ""){

            $insert_query = "INSERT INTO students(name, country, subject) VALUES ('$name', '$country', '$subject' )";

            $insertion_done = mysqli_query($conn, $insert_query);



            // Check insertion
            if ($insertion_done) {

                echo "Insertion successfully";

            }else{

                echo "Insertion failed because "  . mysqli_connect_error();

            }

        }else{

            echo "PLEASE FILL ALL FIELDS";

        }


    };

  ?>

    

    </form>

</div>


    
</body>
</html>
