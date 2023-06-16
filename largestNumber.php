// Write a program to find the largest number in an array of numbers

<?php
// Define the numbers
$numbers = array(85,38,99,111,29);

// Find the largest number
$largestNumber = $numbers[0]; 
foreach ($numbers as $values) {
  if ($values > $largestNumber) {
    $largestNumber = $values;
  }
}

// Display the largest number
echo "The largest number in the array is: " . $largestNumber;
?>
