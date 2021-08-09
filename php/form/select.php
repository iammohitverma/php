<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Data</title>
    <?php include "./style.css"?>
</head>
<body>

<table cellspacing="0" cellpadding="0" style="text-align:center; background: #f5f5ff;" width="100%">
    <tbody>
        <tr>
            <td>
                <table cellspacing="0" cellpadding="0" style="margin: auto; width: 1500px;">
                    <tbody>
                        <tr>
                            <th>ID</th>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>Email</th>
                            <th>Country</th>
                            <th>Subject</th>
                            <th>Update</th>
                            <th>Delete</th>
                        </tr>


                        <?php

                            echo "<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css'>";

                            include "./dbcon.php";

                            $selectQuery = "select * FROM registration";

                            $query = mysqli_query($conn, $selectQuery); 

                            while ( $result = mysqli_fetch_assoc($query)) {

                        ?>

                        <tr>
                            <td><?php echo $result['id'] ?></td>
                            <td><?php echo $result['first_name'] ?></td>
                            <td><?php echo $result['last_name'] ?></td>
                            <td><?php echo $result['email'] ?></td>
                            <td><?php echo $result['country'] ?></td>
                            <td><?php echo $result['subject'] ?></td>
                            <td><a href="update.php?id='<?php echo $result['id'];?>'>"><i class="far fa-edit"></i></a></td>
                            <td><a href="delete.php?id='<?php echo $result['id'];?>'>"><i class="fas fa-trash"></i></a></td>
                        </tr>

                        <?php

                        }

                        ?>

                    </tbody>
                </table>
            </td>
        </tr>
    </tbody>
</table>
    
</body>
</html>