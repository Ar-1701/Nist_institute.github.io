<?php include "header.php"; ?>
  <div id="admin-content">
      <div class="container">
         <div class="row">
             <div class="col-md-12">
                 <h1 class="admin-heading">Add Carousel</h1>
             </div>
              <div class="col-md-offset-3 col-md-6">
                  <!-- Form -->    
                     
                  <form  id="add_form1">
                  <div class="form-group">
                          <label>Image</label>
                          <input type="file" id="fileToUpload" name="fileToUpload" required>
                      </div>                        
                      <input type="submit" name="c-submit" id="c-submit" class="btn btn-primary" value="Save" required />
                  </form>
                  <!--/Form -->
      <div id="image-prew" style="width:200px;height:200px;"></div>
              </div>
          </div>
      </div>
  </div>
<?php include "footer.php"; ?>
<script src="../js/jquery.js"></script>
<script>
  $(document).ready(function(){
    $("#add_form1").on("submit",function(e){     
        e.preventDefault();
        var formData = new FormData(this);
            $.ajax({
                url:"upload.php",
                type:"POST",
                data: formData,
                contentType : false,
                processData : false,
                success:function(data)
                {   
                  $("#image-prew").html(data);
                    window.location="carousel-list.php";             
                }
            });
    });
  });
</script>

