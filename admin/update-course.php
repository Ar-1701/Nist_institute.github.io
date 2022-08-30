<?php include "header.php"; ?>
  <div id="admin-content">
      <div class="container">
          <div class="row">
              <div class="col-md-12">
                  <h1 class="adin-heading"> Update Course</h1>
              </div>
              <div class="col-md-offset-3 col-md-6">
              <?php
include "config.php";
$course_id = mysqli_real_escape_string($conn, $_GET['id']);
$sql = "SELECT course.id,course.course_name,subjects.id,subjects.eligible,subjects.syllabus,
             subjects.about FROM course
             LEFT JOIN subjects
             ON course.id = subjects.id
             WHERE course.id = $course_id";

$result = mysqli_query($conn, $sql) or die("Query Failed.");

if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
?>
            <form action="save-update-course.php" method ="POST">
                <div class="form-group">
                    <input type="hidden" name="id" class="form-control" value="<?php echo $row['id'];?>" placeholder="">
                </div>
            <div class="form-group">
                <label for="exampleInputTile">Title</label>
                <input type="text" name="course_name"  class="form-control" id="exampleInputUsername" value="<?php echo trim($row['course_name']); ?>">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Eligible</label>
                <textarea name="eligible" class="form-control"  required rows="5">
                    <?php echo trim($row['eligible']); ?>
                </textarea>
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1"> Duration</label>
                <textarea name="about" class="form-control"  required rows="5">
                    <?php echo trim($row['about']); ?>
                </textarea>
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1"> Syllabus</label>
                <textarea name="syllabus" class="form-control"  required rows="5">
                    <?php echo trim($row['syllabus']); ?>
                </textarea>
            </div>
        <input type="submit" name="sumbit" class="btn btn-primary" value="Update" required />
                  </form>
                  <?php
    }
}?>
                </div>
              </div>
            </div>
          </div>
<?php include "footer.php"; ?>
