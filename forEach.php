<?php
$students = array(
    array("John", 20),
    array("Jane", 22),
    array("David", 19)
);
foreach ($students as $student) {
    foreach ($student as $value) {
        echo $value . " ";
    }
    echo "\n";
}
?>
