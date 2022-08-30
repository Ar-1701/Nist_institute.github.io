<?php $active_page = 'gallery';
include "header.php"; ?>
<!-- content -->
<h1>---Gallery---</h1>

<?php include "config.php";
$sql = "SELECT * FROM carousel ORDER BY  carousel_id DESC";
$result = mysqli_query($conn, $sql) or die("Query Failed.");
if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) { ?>
        <div class="container" style="">
            <div class="row">
                <div class="col-1">
                    <div class="card" style="width:500px;display:inline-flex;">
                        <img src="admin/upload/carousel-image/<?php echo $row['carousel_name']; ?>" class="img-fluid card-img-top" style="width:1000px;height:500px;" alt="carousel-image" srcset="">
                    </div>
                </div>
            </div> <?php ?>
        </div>
<?php
    }
} ?>
<!-- footer -->
<?php include "footer.php"; ?>