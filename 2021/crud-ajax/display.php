

<?php

    include "connection.php";

    $display_query = "SELECT * FROM `students`";

    $result = mysqli_query($conn, $display_query);



    echo


    "<tr>
        <th>ID</th>
        <th>Name</th>
        <th>Country</th>
        <th>Image</th>
        <th>Subject</th>
        <th colspan='2'>Operation</th>
    </tr>";

    if (mysqli_num_rows($result) > 0) {

        // output data of each row

        while($row = mysqli_fetch_assoc($result)) {

            echo 

            "<tr>" .
            
                "<td> ". $row["id"]. "</td>" .

                "<td> ". $row["name"]. "</td>" .  

                "<td> ". $row["country"]. "</td>" . 
                
                "<td> <img src='" . $row["image"]. "'></td>" .

                "<td> ". $row["subject"]. "</td>" .

                "<td> <a href='./update.php?id=$row[id]' class='icon'> <img src='./images/edit.svg'> </a> </td>" .

                "<td> <a href='javascript:void(0)' class='delete-id' data-id='$row[id]' class='icon'> <img src='./images/delete.svg'> </a> </td>" .

            "</tr>";


        }

    } else {

        echo "0 result";

    }

    $conn->close();



?>
