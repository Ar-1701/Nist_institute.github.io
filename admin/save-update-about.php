<?php 
    include "config.php";

    if(empty($_FILES['new-image']['name']))
    {
       $new_name = $_POST['old-image'];
      
    }
    else{$about_id = $_POST['about_id'];
        $sql1 = "SELECT about_img FROM about WHERE id ={$about_id} ";
        $result1 = mysqli_query($conn, $sql1);
        $row = mysqli_fetch_assoc($result1);
         unlink("upload/" . $row['about_img']);
            $errors = array();
            $file_name = $_FILES['new-image']['name'];
            $file_size = $_FILES['new-image']['size'];
            $file_tmp = $_FILES['new-image']['tmp_name'];
            $file_type = $_FILES['new-image']['type'];
            $file_ext = strtolower(end(explode('.',$file_name)));
            $extensions = array("jpeg","jpg","png");

            if(in_array($file_ext,$extensions) === false)
            {
                $errors[] = "THIS EXTENSION IS NOT ALLOWED.<br>Please Choose JPG OR PNG File.";
            }

            if($file_size > 2097152)
            {
                $errors[] = "File size is too large <br>please upload only 2mb file.";
            }
           
            $new_name = time()."-".basename($file_name);
            $target ="upload/".$new_name;
            // $img_name = $new_name;
            if(empty($errors) == true)
            {
                move_uploaded_file($file_tmp,$target);
            }
            else{
                print_r($errors);
                die();
            }
        }
       echo $sql = "UPDATE about SET about_title='{$_POST["about_title"]}', 
        about_description='{$_POST["about_description"]}', about_img ='{$new_name}'
        WHERE id = {$_POST["about_id"]};";
        $result = mysqli_query($conn,$sql);

        if($result)
        {
            header("Location: {$hostname}about-list.php");
        }
        else{
            echo"Query Failed";
        }
?>