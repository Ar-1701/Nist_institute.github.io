<?php
include "config.php";
$notice_id = $_GET['id'];
$sql = "DELETE FROM notice WHERE notice_id = $notice_id";

if (mysqli_query($conn, $sql)) {
   header("Location:{$hostname}notice.php");
}
else {
   echo " Can't Delete User. ";
}
mysqli_close($conn);
?>