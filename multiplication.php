// Create a loop that prints the multiplication table of a given number

<?php
function Multiplication($number) {
    for ($i = 1; $i <= 10; $i++) {
        $result = $number * $i;
        echo $number . " x " . $i . " = " . $result . "\n";
    }
}
$Number = 2;
echo "Multiplication Table of " . $Number . ":\n";
Multiplication($Number);
?>