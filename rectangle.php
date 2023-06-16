// Write a program to calculate the area and perimeter of a rectangle given its length and width.

<?php
function Area($length, $width) {
    $area = $length * $width;
    return $area;
}
function Perimeter($length, $width) {
    $perimeter = 2 * ($length + $width);
    return $perimeter;
}
$length = 3;
$width = 5;
$area = Area($length, $width);
$perimeter = Perimeter($length, $width);
echo " Area: " . $area . "\n";
echo " Perimeter: " . $perimeter;
?>