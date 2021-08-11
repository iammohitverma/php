<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display Data</title>
    <?php include "./css/style.css";?>
</head>
<body>

    <div class="table-wrap">
        <table>

            <tbody>

                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Country</th>
                    <th>Image</th>
                    <th>Subject</th>
                    <th colspan="2">Operation</th>
                </tr>            




                <?php

                    include "connection.php";

                    $display_query = "SELECT * FROM `students`";

                    $result = mysqli_query($conn, $display_query);





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

                                "<td> <a href='./delete.php?id=$row[id]' class='icon'> <img src='./images/delete.svg'> </a> </td>" .

                            "</tr>";

                        }

                    } else {

                        echo "0 result";

                    }

                    $conn->close();



                ?>

                


            </tbody>

        </table>        

    </div>
</body>
</html>



