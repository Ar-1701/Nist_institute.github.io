<?php include "header.php"; ?>
  <div id="admin-content">
      <div class="container">
         <div class="row">
             <div class="col-md-12">
                 <h1 class="admin-heading">Add New Course</h1>
             </div>
              <div class="col-md-offset-3 col-md-6">
                  <!-- Form -->
                  <form id="add-form-course">
                      <div class="form-group">
                          <label for="course_name">Title</label>
                          <input type="text" name="course_name" id="course_name" class="form-control"  autocomplete="off" required>
                      </div>
                      <div class="form-group">
                          <label for="exampleInputPassword1">Eligibility</label>
                          <textarea name="course_eligible" id="course_eligible" class="form-control" rows="5"  required></textarea>
                      </div>
                      <div class="form-group">
                          <label for="exampleInputPassword1">syllabus</label>
                          <textarea name="course_sly" id="course_sly" class="form-control" rows="5"  required></textarea>
                      </div>
                      <div class="form-group">
                          <label for="exampleInputPassword1">Duration</label>
                          <textarea name="course_duration" id="course_duration" class="form-control" rows="5"  required></textarea>
                      </div>
                      <input type="submit" name="course-submit" id="course-submit" class="btn btn-primary" value="Save" required />
                  </form>
                  <!--/Form -->
              </div>
          </div>
      </div>
  </div>
<?php include "footer.php"; ?>
<script src="../js/jquery.js"></script>
<script src="../js/script.js"></script>