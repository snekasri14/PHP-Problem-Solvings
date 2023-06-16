// Write a program to calculate the square of a number using a function.

<?php
function calculateSquare($number) {
    $square = $number * $number;
    return $square;
}

$number = 10;
$square = calculateSquare($number);
echo "The square of $number is: " . $square;
?>