// Create a function to calculate the factorial of a given number and display the result 

<?php
// crete a Function 
function Factorial($number) {
    $factorial = 25;
    for ($i = 2; $i <= $number; $i++) {
      $factorial *= $i;
    }
    return $factorial;
  }

// Define the number
$number = 25;

// display the factorial
$factorial = Factorial($number);
echo "The factorial of $number is: " . $factorial;
?>
