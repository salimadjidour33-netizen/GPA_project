<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $course = $_POST['course'];
    $credits = $_POST['credits'];
    $grade = $_POST['grade'];

    $gpa = $grade; // في حالة مادة واحدة

    echo "<div style='text-align:center; font-family:sans-serif; margin-top:50px;'>";
    echo "<h3>Result for: $course</h3>";
    echo "<p>Your GPA is: <strong style='color:#2ecc71; font-size:24px;'>$gpa</strong></p>";
    echo "<a href='index.html'>Go Back</a>";
    echo "</div>";
}
?>
