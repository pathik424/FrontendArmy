<?php
// $x = 5; // global scope



// function myTest() {
//     // using x inside this function will generate an error
//     echo "<p>Variable x inside function is: $x</p>";
// } 
// myTest();

// echo "<p>Variable x outside function is: $x</p>";
?>

<?php


// function myTest() {
//     $x = 5; // local scope
//     echo "<p>Variable x inside function is: $x</p>";
//   }
//   myTest();
  
//   // using x outside the function will generate an error
//   echo "<p>Variable x outside function is: $x</p>";


?>

<?php

// global word use

// $x = 5;
// $y = 10;

// function myTest() {
//   global $x, $y;
//   $y = $x + $y;
// }

// myTest();
// echo $y; // outputs 15

?>

<?php

// static  variable using

function myTest() {
    static $x = 0;
    echo $x;
    $x++;
  }
  
  myTest();
  myTest();
  myTest();
  myTest();
  myTest();
?>