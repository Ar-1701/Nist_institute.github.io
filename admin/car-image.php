<?php include "header.php"; ?>
  <div id="admin-content">
      <div class="container">
         <div class="row">
             <div class="col-md-12">
                 <h1 class="admin-heading">Add Carousel</h1>
             </div>
              <div class="col-md-offset-3 col-md-6">
                  <!-- Form -->
                  <?php
include "config.php";
$new_name = '';
if (isset($_FILES['fileToUpload'])) {
  $errors = array();
  
  $file_name = $_FILES['fileToUpload']['name'];
  $file_size = $_FILES['fileToUpload']['size'];
  $file_tmp = $_FILES['fileToUpload']['tmp_name'];
  $file_type = $_FILES['fileToUpload']['type'];
  $file_ext = end(explode('.', $file_name));

  $extensions = array("jpeg","jpg");

  if (in_array($file_ext, $extensions) === false) {
    $errors[] = "This extension file not allowed, Please choose a JPG or PNG file.";
  }

  if ($file_size > 10485760) {
    $errors[] = "File size must be 10mb or lower.";
  }
  $new_name = time() . "-" . basename($file_name);
  $target = "upload/carousel-image/" . $new_name;

  if (empty($errors) == true) {
    move_uploaded_file($file_tmp, $target);
  }
  else {
    print_r($errors);
    die();
  }
}
 echo $sql = "INSERT INTO carousel(carousel_name) VALUES ('{$new_name}')";

if (mysqli_query($conn, $sql)) {
//   header("location: {$hostname}car-image.php");
}
else {
  echo "No Record";
}

?>                  
                  <form  id="add-form1" enctype="multipart/form-data">
                  <div class="form-group">
                          <label > Image</label>
                          <input type="file" id="fileToUpload" name="fileToUpload" required>
                      </div>
                        <br>
                      <input type="submit" name="c-submit" id="c-submit" class="btn btn-primary" value="Save" required />
                  </form>
                  <!--/Form -->

              </div>
          </div>
      </div>
  </div>
<?php include "footer.php"; ?>
<script src="../js/jquery.js"></script>
<script src="../js/script.js"></script>

