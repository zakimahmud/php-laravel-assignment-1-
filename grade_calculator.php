<?php
    // Declare three test scores
    $score1 = 85;
    $score2 = 72;
    $score3 = 68;

    // Calculate the average
    $average = ($score1 + $score2 + $score3) / 3;

    // Determine the grade
    if ($average >= 90) {
        $grade = 'A';
    } elseif ($average >= 80) {
        $grade = 'B';
    } elseif ($average >= 70) {
        $grade = 'C';
    } elseif ($average >= 60) {
        $grade = 'D';
    } else {
        $grade = 'F';
    }

    // Display the results
    echo "Test Scores: $score1, $score2, $score3<br>";
    echo "Average: $average<br>";
    echo "Grade: $grade<br>";
?>
