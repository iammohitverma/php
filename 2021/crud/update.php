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


        <?php
            
            $id  = $_GET['id'];

            $selectQuery = "SELECT * FROM students WHERE id={$id}";

            $updatequery = mysqli_query($conn, $selectQuery);

            $updateresult = mysqli_fetch_array($updatequery);

            $old_image = $updateresult['image'];

        ?>


        <form action="" method="post" enctype="multipart/form-data">

            <div class="input-wrap">
                <label for="name">Name</label>
                <input type="text" id="name" name="name" placeholder="Your name.." value="<?php echo $updateresult['name'];?>">
            </div>

            <div class="input-wrap">
                <label for="country">Country</label>
                <select id="country" name="country" value="<?php echo $updateresult['country'];?>">
                <option value="australia">Australia</option>
                <option value="canada">Canada</option>
                <option value="usa">USA</option>
                </select>
            </div>

            <div class="input-wrap">
                <label for="image">Upload Image</label>
                <input type="file" name="image" id="image" value="<?php echo $updateresult['image'];?>">
                <img src="<?php echo $updateresult['image']?>">
            </div>

            <div class="input-wrap">
                <label for="subject">Subject</label>
                <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px" value="<?php echo $updateresult['subject'];?>"><?php echo $updateresult['subject'];?></textarea>
            </div>

            <input type="submit" value="Update" class="btn" name="update">

            <a href="./display.php" class="btn">View All Data</a>

            
  
            <?php

                if(isset($_POST['update'])){

                    $name = $_POST['name'];

                    $country = $_POST['country'];

                    $subject = $_POST['subject'];

                    $file_name = $_FILES["image"]["name"];

                    $file_tmp_name = $_FILES["image"]["tmp_name"];
            
                    $uploaded_image = "uploaded-images/" . $file_name;
    
                    
                    
                    
                    
                    if($name!== "" && $country!== "" && $file_tmp_name != "" &&$subject !== ""){


                        // unlink old image first
                        unlink($old_image);

                        move_uploaded_file($file_tmp_name, $uploaded_image);

                        $old_image == $uploaded_image;

                        $update_query = "UPDATE students SET name= '$name',country='$country',image= '$uploaded_image',subject='$subject' WHERE id = {$id}";


                        // Check updation
                        if (mysqli_query($conn, $update_query)) {

                            echo "updation successfully";

                        }else{

                            echo "updation failed because "  . mysqli_connect_error();

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
