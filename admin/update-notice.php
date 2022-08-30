<?php include "header.php"; ?>
<div id="admin-content">
  <div class="container">
  <div class="row">
    <div class="col-md-12">
        <h1 class="admin-heading">Update Notice</h1>
    </div>
    <div class="col-md-offset-3 col-md-6">
        <?php
include "config.php";
$notice_id = $_GET['id'];

$sql = "SELECT * FROM notice WHERE notice_id = {$notice_id}";

$result = mysqli_query($conn, $sql) or die("Query Failed.");

if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
?>
        <!-- Form for show edit-->
        <form action="save-update-notice.php" method="POST" enctype="multipart/form-data" autocomplete="off">
            <div class="form-group">
                <input type="hidden" name="notice_id"  class="form-control" value="<?php echo $row['notice_id']; ?>" placeholder="">
            </div>
            <div class="form-group">
                <label for="exampleInputTile">Title</label>
                <input type="text" name="notice_title"  class="form-control" id="exampleInputUsername" value="<?php echo $row['notice_title']; ?>">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1"> Description</label>
                <textarea name="description" class="form-control"  required rows="5">
                    <?php echo $row['description']; ?>
                </textarea>
            </div>
            <div class="form-group">
                          <label for="exampleInputPassword1">Category</label>
                          <select name="category" class="form-control">
                              <option disabled> Select Category</option>
                              <?php include "config.php";

        $sql1 = "SELECT * FROM category";
        $result1 = mysqli_query($conn, $sql1) or die("Query Failed.");
        if (mysqli_num_rows($result1) > 0) {
            while ($row1 = mysqli_fetch_assoc($result1)) {
                if ($row['category'] == $row1['category_id']) {
                    $selected = "selected";
                }
                else {
                    $selected = "";
                }                echo "<option {$selected} value='{$row1['category_id']}'> {$row1['category_name']} </option>";
            }
        }
?>
                          </select>
                          <input type="hidden" name="old_category" value="<?php echo $row['category']; ?>">
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
