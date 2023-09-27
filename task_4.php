<?php

// Create a multidimensional array called $studentGrades to store the grades of three students. Each student has grades for three subjects: Math, English, and Science. Write a PHP function which takes "$studentGrades" as an argument to calculate and print the average grade for each student.


$studentGrades = [
    'Student1' => ['Math' => 90, 'English' => 85, 'Science' => 88],
    'Student2' => ['Math' => 78, 'English' => 92, 'Science' => 89],
    'Student3' => ['Math' => 85, 'English' => 88, 'Science' => 90],
];

function calculateAverageGrades($studentGrades) {
    foreach ($studentGrades as $student => $grades) {
        $total = array_sum($grades); // Calculate the total of all grades
        $count = count($grades); // Count the number of subjects
        $average = $total / $count; // Calculate the average grade

        echo "Student $student's Average Grade: $average\n";
    }
}

// Call the function with the student grades array
calculateAverageGrades($studentGrades);