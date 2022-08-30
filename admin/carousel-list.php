<?php include "header.php"; ?>
  <div id="admin-content">
      <div class="container">
          <div class="row">
              <div class="col-md-10">
                  <h1 class="admin-heading">All Carousel</h1>
              </div>
              <div class="col-md-2">
                  <a class="add-new" href="car-image-test.php">add Carousel</a>
              </div>
              <div class="col-md-12">
                    <?php include "config.php";
$sql = "SELECT * FROM carousel ORDER BY  carousel_id DESC";
$result = mysqli_query($conn, $sql) or die("Query Failed.");
if (mysqli_num_rows($result) > 0) { ?>
                  <table class="content-table">
                      <thead>
                          <th>S.No.</th>
                          <th>Full Name</th>
                      </thead>
                      <?php while ($row = mysqli_fetch_assoc($result)) { ?>
                      <tbody>
                          <tr>
                              <td class='id'><?php echo $row['carousel_id']; ?></td>
                              <td><img src="upload/carousel-image/<?php echo $row['carousel_name']; ?>"style="width:200px;height:150px;" alt="carousel-image" srcset=""></td>                                                                                    
                          </tr>                       
                      </tbody>
                      <?php
    }?>
                  </table>
                  <?php
}
else {
    echo "<div class='alert alert-danger'>No Record Found</div>";
}?>
              </div>
          </div>
      </div>
  </div>
<?php include "footer.php"; ?>
