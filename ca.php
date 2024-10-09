<?php
function gradeCalculator($marks) {
    $grade = "";

    if ($marks < 60) {
        $grade = "'F'";
    } 
    else if ($marks >= 60 && $marks < 70) {
        $grade = "'D'";
    } 
    else if ($marks >= 70 && $marks < 80) {
        $grade = "'C'";
    } 
    else if ($marks >= 80 && $marks < 90) {
        $grade = "'B'";
    } 
    else if ($marks >= 90 ) {
        $grade = "'A'";
    } 

    return "The grade for a score of $marks is: $grade";
}

$marks = readline("When score = ");
echo gradeCalculator($marks) . "\n";

?>
