<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $courses = $_POST['course'];
    $credits = $_POST['credits'];
    $grades = $_POST['grade'];

    $totalPoints = 0;
    $totalCredits = 0;

    echo "<h2>GPA Calculation Results</h2>";
    echo "<table border='1' cellpadding='10'>";
    echo "<tr><th>Course</th><th>Credits</th><th>Grade Point</th></tr>";

    for ($i = 0; $i < count($courses); $i++) {
        $point = (float)$grades[$i];
        $credit = (int)$credits[$i];
        $totalPoints += ($point * $credit);
        $totalCredits += $credit;

        echo "<tr>";
        echo "<td>" . htmlspecialchars($courses[$i]) . "</td>";
        echo "<td>" . $credit . "</td>";
        echo "<td>" . $point . "</td>";
        echo "</tr>";
    }

    $gpa = $totalCredits > 0 ? ($totalPoints / $totalCredits) : 0;
    echo "</table>";
    
    $interpretation = "";
    if ($gpa >= 3.7) $interpretation = "Distinction";
    elseif ($gpa >= 3.0) $interpretation = "Merit";
    elseif ($gpa >= 2.0) $interpretation = "Pass";
    else $interpretation = "Fail";

    echo "<h3>Your Final GPA is: " . number_format($gpa, 2) . " ($interpretation)</h3>";
    echo "<br><a href='index.html'>Back to Calculator</a>";
}
?>
