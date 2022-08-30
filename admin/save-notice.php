<?php

include "config.php";
$post_title = $_POST['post_title'];
$postdesc = $_POST['postdesc'];
$category = $_POST['category'];
$date = date("d M, Y");

$sql = "INSERT INTO notice(notice_title,description,notice_date,category)
        VALUES('{$post_title}','{$postdesc}','{$date}','{$category}');";

$sql .= "UPDATE category SET post = post + 1 WHERE category_id = {$category}";


if (mysqli_multi_query($conn, $sql)) {
// header("location: {$hostname}post.php");
}
else {
  echo "<div class='alert alert-danger'>Query Failed.</div>";
}
?>