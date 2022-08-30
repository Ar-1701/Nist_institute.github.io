<?php include "config.php";

$course_name = mysqli_real_escape_string($conn, $_POST['course_name']);
$course_link = mysqli_real_escape_string($conn, $_POST['course_link']);
$course_eligible = mysqli_real_escape_string($conn, $_POST['course_eligible']);
$course_sly = mysqli_real_escape_string($conn, $_POST['course_sly']);
$course_duration = mysqli_real_escape_string($conn, $_POST['course_duration']);
$sql = "INSERT INTO course(course_name,course_link)
        VALUES('{$course_name}','{$course_link}');";
$sql .= "INSERT INTO subjects(eligible,syllabus,about)
    VALUES('{$course_eligible}','{$course_sly}','{$course_duration}');";

// $result = mysqli_multi_query($conn, $sql) or die("QUERY FALIED");
if(mysqli_multi_query($conn, $sql))
{
    // header("Location:{$hostname}course-list.php");
}
   else{
    echo "Query Failed";
   }  

?>
