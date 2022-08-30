<?php
include "config.php";
session_start();

if(!isset($_SESSION["username"]))
{
    header("Location:{$hostname}");
}

if (isset($_FILES['fileToUpload'])) {
  $errors = array();

  $file_name = $_FILES['fileToUpload']['name'];
  $file_size = $_FILES['fileToUpload']['size'];
  $file_tmp = $_FILES['fileToUpload']['tmp_name'];
  $file_type = $_FILES['fileToUpload']['type'];
  $file_ext = end(explode('.', $file_name));

  $extensions = array("jpeg", "jpg", "png");

  if (in_array($file_ext, $extensions) === false) {
    $errors[] = "This extension file not allowed, Please choose a JPG or PNG file.";
  }

  if ($file_size > 2097152) {
    $errors[] = "File size must be 2mb or lower.";
  }
  $new_name = time() . "-" . basename($file_name);
  $target = "upload/" . $new_name;

  if (empty($errors) == true) {
    move_uploaded_file($file_tmp, $target);
  }
  else {
    print_r($errors);
    die();
  }
}
$about_title = $_POST['about_title'];
$about_description = $_POST['about_description'];

 $sql = "INSERT INTO about(about_title,about_description,about_img)
VALUES('{$about_title}','{$about_description}','{$new_name}');";

if (mysqli_query($conn, $sql)) {
  header("location: {$hostname}about-list.php");
}
else {
  echo "No Record";
}
?>