<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<?php include "./style.css"?>

</head>
<body>

<h3>Update Form</h3>

<?php

include "./dbcon.php";

$id  = $_GET['id'];

$selectQuery = "select * from registration where id={$id}";

$updatequery = mysqli_query($conn, $selectQuery);

$updateresult = mysqli_fetch_array($updatequery);



if (isset($_POST['submit'])) {
    $fname = $_POST['firstname'];
    $lname = $_POST['lastname'];
    $email = $_POST['email'];
    $country = $_POST['country'];
    $subject = $_POST['subject'];
    $updatequery = "insert into registration(first_name, last_name, email, country, subject) values('$fname', '$lname','$email','$country','$subject')";
    $query = mysqli_query($conn, $updatequery); 
    // Check connection
    if (!$query) {
      echo "Submitted failed";
    }
    echo "Submitted successfully";
  };
  
  

?>


<div class="container">
  <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="post">
    <label for="fname">First Name</label>
    <input type="text" id="fname" name="firstname" placeholder="Your name.." value="<?php echo $updateresult['first_name'];?>"> 

    <label for="lname">Last Name</label>
    <input type="text" id="lname" name="lastname" placeholder="Your last name.." value="<?php echo $updateresult['last_name'];?>"> 

    <label for="email">Email</label>
    <input type="email" id="email" name="email" placeholder="Your email.." value="<?php echo $updateresult['email'];?>">
 
    <label for="country">Country</label>
    <select id="country" name="country" value="<?php echo $updateresult['country'];?>">
      <option value="australia">Australia</option>
      <option value="canada">Canada</option>
      <option value="usa">USA</option>
    </select>

    <label for="subject">Subject</label>
    <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"  value="<?php echo $updateresult['subject'];?>"></textarea>

    <input type="submit" value="Update" name="submit">  
  </form>
</div>







</body>
</html>
