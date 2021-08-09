<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<?php include "./style.css"?>

</head>
<body>

<h3>Contact Form</h3>

<div class="container">
  <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="post">
    <label for="fname">First Name</label>
    <input type="text" id="fname" name="firstname" placeholder="Your name..">

    <label for="lname">Last Name</label>
    <input type="text" id="lname" name="lastname" placeholder="Your last name..">

    <label for="email">Email</label>
    <input type="email" id="email" name="email" placeholder="Your email..">

    <label for="country">Country</label>
    <select id="country" name="country">
      <option value="australia">Australia</option>
      <option value="canada">Canada</option>
      <option value="usa">USA</option>
    </select>

    <label for="subject">Subject</label>
    <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>

    <input type="submit" value="Submit" name="submit">  
    <a href="select.php" class="btn">All Data</a>
  </form>
</div>



<?php
include "./dbcon.php";

if (isset($_POST['submit'])) {
  $fname = $_POST['firstname'];
  $lname = $_POST['lastname'];
  $email = $_POST['email'];
  $country = $_POST['country'];
  $subject = $_POST['subject'];
  $insertQuery = "insert into registration(first_name, last_name, email, country, subject) values('$fname', '$lname','$email','$country','$subject')";
  $query = mysqli_query($conn, $insertQuery); 
  // Check connection
  if (!$query) {
    echo "Submitted failed";
  }
  echo "Submitted successfully";
};



?>

</body>
</html>
