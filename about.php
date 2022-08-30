<?php
$active_page = 'about';
include "header.php";
?>
<div class="container ">
    <?php include "config.php";
    $sql = "SELECT * FROM about";
    $result = mysqli_query($conn, $sql) or die("Query Failed.");
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) { ?>
            <div class=" container about-container">
                <div class="box">&emsp14;
                    <h1><?php echo $row['about_title']; ?></h1>
                    <div class="box-img">
                        <img class="img-fluid" src="admin/upload/<?php echo $row['about_img']; ?>" alt="">
                    </div>
                    <div class="title-desc">
                        <p>
                            <?php echo $row['about_description']; ?>
                        </p>
                        <button type="button" class="btn btn-primary readMore">ReadMore</button>
                    </div>
                </div>
            </div>
    <?php  }
    } ?>
</div>
<br><br>
<!-- footer -->
<?php include "footer.php"; ?>
<script src="js/jquery.js"></script>
<script src="js/script.js"></script>
</body>

</html>