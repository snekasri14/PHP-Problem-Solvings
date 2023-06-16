<?php
function calculateAverage($grades) {
    $totalGrades = count($grades);
    $sumGrades = array_sum($grades);
    $average = $sumGrades / $totalGrades;
    return $average;
}
$studentGrades = [85, 92, 78, 90, 88];
$averageGrade = calculateAverage($studentGrades);
echo "Student Grades: " . implode(", ", $studentGrades) . "<br>";
echo "Average Grade: " . $averageGrade;
?>
