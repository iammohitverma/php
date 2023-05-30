<?php
include "connection.php";

    // var_dump($_REQUEST);

    // $name = $_POST['FirstName'];
    // echo $name;


/*********************/
// GET DATA FROM DB
/*********************/

$sql = "SELECT id, name, email, phone FROM test_registered";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {

    
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        ?>
        <tr data-row="<?php echo $row['id'];?>">

            <td><?php echo $row['id'];?></td>
            <td><?php echo $row['name'];?></td>
            <td><?php echo $row['email'];?></td>
            <td><?php echo $row['phone'];?></td>
            <td>
                <button class="btn btn-secondary text-white editBtn" data-edrow="<?php echo $row['id']?>">
                    <ion-icon name="create-outline"></ion-icon>
                </button>
                <button class="btn btn-danger text-white deleteBtn" data-delrow="<?php echo $row['id']?>">
                    <ion-icon name="trash-outline"></ion-icon>
                </button>
            </td>

        </tr>
        <?php
    }

} else {
  echo "0 results";
}

mysqli_close($conn);
?>
