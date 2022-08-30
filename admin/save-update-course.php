<?php
include "config.php";
$courseId = $_POST["id"];
$SubId = $courseId;
$sql = "UPDATE course SET course_name='{$_POST["course_name"]}' WHERE id = $courseId ;";
$sql .= "UPDATE subjects SET eligible='{$_POST["eligible"]}',syllabus='{$_POST["syllabus"]}',about='{$_POST["about"]}' WHERE id = $SubId;";
$result = mysqli_multi_query($conn, $sql);

if ($result) {
    header("Location: {$hostname}course-list.php");
}
else {
    echo "Query Failed";
}
?>