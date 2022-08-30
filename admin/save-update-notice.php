<?php
include "config.php";

$sql = "UPDATE notice SET notice_title='{$_POST["notice_title"]}', description='{$_POST["description"]}',
        category = {$_POST["category"]}
        WHERE notice_id = {$_POST["notice_id"]};";
if ($_POST['old_category'] != $_POST['category']) {
    $sql .= "UPDATE category SET post = post - 1  WHERE category_id = {$_POST['old_category']};";
    $sql .= "UPDATE category SET post = post + 1  WHERE category_id = {$_POST['category']};";
}

$result = mysqli_multi_query($conn, $sql);

if ($result) {
    header("Location: {$hostname}notice.php");
}
else {
    echo "Query Failed";
}
?>