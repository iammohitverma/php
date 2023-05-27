<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>
<body>

<?php
    // echo "<p style='margin:0'>Hello</p>";
    // $name = "Mohit";
    // $age = 24;
    // echo " $name <br>";
    // echo $age;

    // $num1 = 3;
    // $num2 = 4;
    // $powerOfNumber = pow($num1, $num2);
    // echo $powerOfNumber;




    // Area of a circle
    // Aoc = \pi r^2

    // $pi = 3.14;
    // $radius = 5;
    // $areaOfCircle = $pi * $radius *$radius;
    // echo $areaOfCircle;




    // Area of a triangle
    // Aot = (1/2) * $height * $base;

    // $height = 5;
    // $base = 3;
    // $areaOfTriangle = (1/2) * $height * $base;
    // echo $areaOfTriangle;




    // Area of Square
    // Aos = area*area
    // $num = 5;
    // $areaOfSquare = $num * $num;
    // echo $areaOfSquare;



    // Area of Rectangle
    // Aos =  $length * $width;
    // $length = 5;
    // $width = 3;
    // $areaOfRectangle = $length * $width;
    // echo $areaOfRectangle;




    // $a = 5;
    // if($a == 5){
    //     echo "True";
    // }
    // else{
    //     echo "False";
    // }
    // echo ($a == 5) ? "True" : "False";




?>

<!-- 
<form method="post">
    <input type="text" name="favColor">
    <input type="submit" name="submit" value="submit">
</form> -->

<?php
    // if(isset($_POST['submit'])){
    //     $favColor = $_POST['favColor'];
    //     switch ($favColor) {
    //         case "red":
    //           echo "Your favorite color is red!";
    //           break;
    //         case "blue":
    //           echo "Your favorite color is blue!";
    //           break;
    //         case "green":
    //           echo "Your favorite color is green!";
    //           break;
    //         default:
    //           echo "Your favorite color is neither red, blue, nor green!";
    //       }
    // };
?>


<!-- Basic Calculator -->

<!-- <form method="post">
  <input type="number" name="num1" required>
  <input type="number" name="num2" required>
  <select name="operation" required>
    <option value  selected disabled>Operation</option>
    <option value="add">ADD</option>
    <option value="sub">SUB</option>
    <option value="multi">multi</option>
  </select>
  <input type="submit" name="submit" value="submit">
</form> -->

<?php
    // if(isset($_POST['submit'])){
    //     $num1 = $_POST['num1'];
    //     $num2 = $_POST['num2'];
    //     $operation = $_POST['operation'];
    //     switch ($operation) {
    //         case "add":
    //           echo '<h1> Addition of two number is ' . ($num1 + $num2) . '</h1>';
    //           break;
    //         case "sub":
    //           echo '<h1> Subtraction of two number is ' .  ($num1 - $num2) . '</h1>';
    //           break;
    //         case "multi":
    //           echo '<h1> Multiplication of two number is ' .  ($num1 * $num2) . '</h1>';
    //           break;
    //         default:
    //           echo "Something went wrong";
    //       }
    // };
?>

<!-- Loops in PHP -->

<?php
// $i = 0;
//   while($i<100){
//     ++$i;
//     echo $i . '<br>';
//   }



// $i = 0;
// do {
//   echo ++$i . '<br>';
// } while ($i < 10);


// for ($i=0; $i <= 10 ; $i++) { 
//   echo $i . '<br>';
// }
// output is 11
// echo $i;

?>


<?php
    // Generate Random Number
    // $randomNum = rand(minValue, maxValue);
    // $randomNum = rand(0, 10);
    // echo $randomNum;
?>



<?php
// FIZZ BUZZ Challenge 3 5
    // for ($i=1; $i <= 50; $i++) { 
    //     // echo $i . "</br>";
    //     if (($i % 5 == 0) &&( $i % 3 == 0)){
    //         echo  "FIZZ & BUZZ </br>";
    //     }else if($i % 5 == 0){
    //         echo  "BUZZ </br>";
    //     }else if($i % 3 == 0){
    //         echo  "FIZZ </br>";
    //     }else{
    //         echo $i . "</br>";
    //     }
    // }
?>



<?php
// Via JS start
// function coinFlip() {
    //     return (Math.floor(Math.random() * 2) == 0) ? 'heads' : 'tails';
// }
// Via JS end


// $head = 0;
// $tail = 0;
// for ($i=1; $i <= 100; $i++) { 
//     $randomNum = rand(1, 2);
//     // echo "<h1>" . $randomNum . "</h1>";
//     if($randomNum == 1) {
//         $head++;
//         // echo "<h1> HEAD </h1>";
//     }else{
//         $tail++;
//         // echo "<h1> TAIL </h1>";
//     }
// }
// echo "<h1>There are {$head} Heads and {$tail} Tails</h1>";
// if($head > $tail){
//     echo "<h3>Heads Win</h3>";
// }else if($head < $tail){
//     echo "<h3>Tails Win</h3>";
// }else{
//     echo "<h3>DRAW</h3>";
// }
?>


<?php
    // FIND THE LENGTH OF STRING
    // $data = "Hello PHP";
    // $length = strlen($data);
    // echo $length;
?>


<?php
    // The str_word_count() function counts the number of words in a string.

    // echo str_word_count("Hello world!");
?>


<?php
// <p>Search the string "Hello World!", find the value "world" and replace it with "Peter":</p>
// echo str_replace(Search,Replace, Subject);
    // echo str_replace("world","Peter","Hello world!");

// incasesensitive search
// <p>Search the string "Hello World!", find the value "world" and replace it with "Peter":</p>
    // echo str_ireplace("World","Peter","Hello world!");
?>
    

    
<?php
    // function myFun(){
    //     echo "Hello PHP";
    // }
    // myFun();


    // function with parameters
    // function myFun($a, $b){ //Parameter
    //     $sum = $a + $b;
    //     echo $sum;
    // }
    // myFun(1, 2); //Argument



    // set default parameter in function
    // function myFun($a=2, $b = 1){ //Parameter set default using = 
    //     $sum = $a + $b;
    //     echo $sum;
    // }
    // myFun(); //Argument



    // return in function
    // function myFun($a, $b){
    //     $sum = $a + $b;
    //     return $sum;
    // }
    // $output =  myFun(5, 5);
    // $output2 =  myFun(5, 15);
    // echo $output . "</br>";   
    // echo $output2;   
?>



<?php
    // PHP Arrays
    // $cars = array("Volvo", "BMW", "Toyota"); 
    // echo "<pre> ";
    // print_r($cars);
    // $cars[2] = "Hyundai";
    // print_r($cars);
    // echo "</pre> ";
    // echo $cars[2];



    // Loop array PHP
    // $cars = array("Volvo", "BMW", "Toyota"); 
    // for ($i=0; $i < sizeof($cars); $i++) { 
    //     echo $cars[$i] . "<br>";
    // }
    

    // $cars = array("Volvo", "BMW", "Toyota"); 
    // for ($i=0; $i < count($cars); $i++) { 
    //     echo $cars[$i] . "<br>";
    // }


    // Foreach Loop in PHP
    // $cars = array("Volvo", "BMW", "Toyota"); 
    // echo "<ol>";
    // foreach($cars as $names){
    //     echo "<li>".$names. "</li>";
    // }
    // echo "</ol>";


    // sort and reverse arrays
    $cars = array("Volvo", "BMW", "Toyota"); 
    // sort($cars);
    rsort($cars);
    foreach($cars as $names){
        echo "<li>".$names. "</li>";
    }
?>


</body>
</html>