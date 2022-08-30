<?php include "header.php"; ?>
  <div id="admin-content">
      <div class="container">
          <div class="row">
              <div class="col-md-10">
                  <h1 class="admin-heading">About</h1>
              </div>
              <div class="col-md-2">
                  <a class="add-new" href="add-about.php">add About</a>
              </div>
              <div class="col-md-12">
                <?php
              include "config.php";
              $limit = 10;
              if (isset($_GET['page'])) {
                $pages = $_GET['page'];
              }
              else {
                $pages = 1;
              }
              $offset = ($pages - 1) * $limit;
              $sql = " SELECT * FROM about
              ORDER BY id DESC
              LIMIT {$offset},{$limit}";
              $result = mysqli_query($conn, $sql) or die("Query Failed.");
              if (mysqli_num_rows($result) > 0) {
              ?>
                  <table class="content-table">
                      <thead>
                          <th>S.No.</th>
                          <th>Title</th>
                          <th>Description</th>
                          <th>Edit</th>
                          <th>Delete</th>
                      </thead>
                      <tbody>
                        <?php while ($row = mysqli_fetch_assoc($result)) { ?>
                          <tr id="about-table-data">
                              <td class='id'><?php echo $row['id']; ?></td>
                              <td><?php echo $row['about_title']; ?></td>                           
                              <td><?php echo $row['about_description']; ?></td>                           
                              <td class='edit'><a href='update-about.php?id=<?php echo $row["id"]; ?>'><i class="bi bi-pencil-square"></i></a></td>
                              <td class='delete'><a href='delete-about.php?id=<?php echo $row["id"]; ?>'><i class='bi bi-trash text-danger'></i></a></td>
                          </tr>
                          <?php }?> 
                      </tbody>
                  </table>
                  <?php }
                  else{
                    echo"<h4 style='color:red';>No Record Found.</h4>";
                  }
                  $sql1 = "SELECT * FROM about";
                   $result1 = mysqli_query($conn,$sql1) or die("Query Failed.");             
                   if(mysqli_num_rows($result1)  > 0){

                    $total_records = mysqli_num_rows($result1);                  
                    $to_page = ceil($total_records/$limit);
                    echo '<ul class="pagination admin-pagination">';
                      if($pages > 1)
                      {
                        echo'<li><a href="about-list.php?page='.($pages - 1).'">Prev</a></li>'; 
                        } 
                    for($i = 1; $i <= $to_page;$i++)
                    {
                        if($i == $pages)
                        {
                            $active = "active";
                        }
                        else{
                            $active = "";
                        }
                        echo'<li class="'.$active.'"><a href ="about-list.php?page='.$i.'">'.$i.'</a></li>';
                    }
                    if($to_page > $pages)
                    {
                        echo'<li><a href="about-list.php?page='.($pages + 1).'">Next</a></li>'; 
                    }
                    echo'</ul>';
                   }
                  ?>

              </div>
          </div>
      </div>
  </div>
<?php include "footer.php"; ?>
<script src="../js/jquery.js"></script>
<script src="../js/script.js"></script>