<?php include "config.php";
if ($_FILES['fileToUpload']['name'] != '') {
    $filename = $_FILES['fileToUpload']['name'];
    $file_tmp = $_FILES['fileToUpload']['tmp_name'];
    $extension = pathinfo($filename, PATHINFO_EXTENSION);
    $valid_ext = array("jpg", "jpeg", "png");

    if (in_array($extension, $valid_ext)) {
        $path = "upload/carousel-image/" . $filename;
        if (move_uploaded_file($file_tmp, $path)) {
            $user_check = "SELECT carousel_name,carousel_id FROM carousel WHERE carousel_name = '{$filename}'";
            $result1 = mysqli_query($conn, $user_check) or die("Query Failed.");

            if (mysqli_num_rows($result1) > 0) {
                echo '<script>alert("File Already Upload.")</script>';
            }
            else {
                $sql = "INSERT INTO carousel(carousel_name) VALUES ('{$filename}')";
                $result = mysqli_query($conn, $sql);
            }
        }
    }
    else {
        echo '<script>alert("Invalid File Format.")</script>';
    }
}
else {
    echo '<script>alert("Please Upload Image.")</script>';
}
?>  