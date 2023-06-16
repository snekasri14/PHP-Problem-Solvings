<?php
$n = 25;
$factorial = 1;
for ($i = 1; $i <= $n; $i++) {
    $factorial *= $i;
}
echo "Factorial of $n: " . $factorial;
?>
