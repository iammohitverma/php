
  
  <?php

//   error_reporting(0);

  
    if(isset($_POST['submit'])){

        $name = $_POST['name'];

        $country = $_POST['country'];

        $subject = $_POST['subject'];

        
        // Insert image

        // if(isset($_FILES['image'])){

            // echo "<pre>";
            
            // print_r ( $_FILES["image"] );
    
            // echo "</pre>";
    
            $file_name = $_FILES["image"]["name"];

            $file_tmp_name = $_FILES["image"]["tmp_name"];
    
            $uploaded_image = "uploaded-images/" . $file_name;
    
            move_uploaded_file($file_tmp_name, $uploaded_image);
    
        // }


        if($name!== "" && $country!== "" && $file_name !=="" && $subject !== ""){

            $insert_query = "INSERT INTO students(name, country, image, subject) VALUES ('$name', '$country', '$uploaded_image', '$subject' )";

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

    $conn->close();
  ?>

    