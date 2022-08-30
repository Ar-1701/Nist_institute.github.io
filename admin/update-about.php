<?php include "header.php"; ?>
<div id="admin-content">
  <div class="container">
  <div class="row">
    <div class="col-md-12">
        <h1 class="admin-heading">Update About</h1>
    </div>
    <div class="col-md-offset-3 col-md-6">
        <?php
include "config.php";
$post_id = $_GET['id'];

$sql = "SELECT * FROM about WHERE id = {$post_id}";

$result = mysqli_query($conn, $sql) or die("Query Failed.");

if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
?>
        <!-- Form for show edit-->
        <form action="save-update-about.php" method="POST" enctype="multipart/form-data" autocomplete="off">
            <div class="form-group">
                <input type="hidden" name="about_id"  class="form-control" value="<?php echo $row['id']; ?>" placeholder="">
            </div>
            <div class="form-group">
                <label for="exampleInputTile">Title</label>
                <input type="text" name="about_title"  class="form-control" id="exampleInputUsername" value="<?php echo $row['about_title']; ?>">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1"> Description</label>
                <textarea name="about_description" class="form-control"  required rows="5">
                    <?php echo $row['about_description']; ?>
                </textarea>
            </div>
            <div class="form-group">
                <label for="">About image</label>
                <input type="file" name="new-image">
                <br>
                <img src="upload/<?php echo $row['about_img'];?>" width="150px"height="100px" alt="uploaded file">
                <input type="hidden" name="old-image" value="<?php echo $row['about_img']; ?>">
            </div>
            <input type="submit" name="submit" class="btn btn-primary" value="Update" />
        </form>
        <!-- Form End -->
        <?php
    }
}
else {
    echo "Record Not Found.";
}
?>      
      </div>
    </div>
  </div>
</div>
<?php include "footer.php"; ?>
