// Write a program to sort an array of numbers in ascending order.

<?php
function Ascending($array) {
    sort($array);
    return $array;
}
$numbers = array(10, 52, 18, 90, 21, 71);
$sortedNumbers = Ascending($numbers);
echo "Sorted array in ascending order: ";
foreach ($sortedNumbers as $number) {
    echo $number . " ";
}
?>