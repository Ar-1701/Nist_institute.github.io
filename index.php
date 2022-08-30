<?php $active_page = 'home';
include "header.php";
include "config.php"; ?>
<!-- carousel-start -->
<?php include "slider.php"; ?>
<!-- carousel-close -->
<br><br>
<h1 class="sub">Notice</h1>
<br><br><br><br>
<!-- MAin Content -->
<div class="container" id="main-content">
    <div class="row">
        <div class="col-4 a1">
            <h3><a id="notice">Notice</a></h3>
            <?php
            $sql = "SELECT * FROM notice WHERE category = 1";
            $result = mysqli_query($conn, $sql) or die("Query Failed.");
            if (mysqli_num_rows($result) > 0) { ?>
                <marquee class="mark1" height="460px" direction="down" scrollamount="3" onmouseover="stop()" onmouseout="start()">
                    <?php while ($row = mysqli_fetch_assoc($result)) { ?>
                        <a href="../nist/single-notice.php?id=<?php echo $row['notice_id']; ?>">
                            <span class="time" style="float:right"><?php echo $row['notice_date']; ?></span><?php echo $row['notice_title']; ?>
                        </a><br>
                        <hr>
                    <?php } ?>
                </marquee>
                <?php
            }
            $sql2 = "SELECT * FROM category WHERE category_id = 1";
            $result2 = mysqli_query($conn, $sql2) or die("Query Failed.");
            if (mysqli_num_rows($result2)) {
                while ($row = mysqli_fetch_assoc($result2)) {
                ?>
                    <a class=" btn btn-dark detail-notice" href="notice_list.php?pid=<?php echo $row['category_id']; ?>">Show</a>
            <?php }
            } ?>
        </div>
        <div class="col-4 a1">
            <h3><a id="notice"> Notification For Students</a>
            </h3>
            <?php
            $sql = "SELECT * FROM notice WHERE category = 2";
            $result = mysqli_query($conn, $sql) or die("Query Failed.");
            if (mysqli_num_rows($result) > 0) { ?>
                <marquee class="mark1" height="460px" direction="down" scrollamount="3" onmouseover="stop()" onmouseout="start()">
                    <?php while ($row = mysqli_fetch_assoc($result)) { ?>
                        <a href="../nist/single-notice.php?id=<?php echo $row['notice_id']; ?>">
                            <?php echo $row['notice_title']; ?>
                            <span class="time" style="float:right"><?php echo $row['notice_date']; ?></span>
                        </a><br>
                        <hr>
                    <?php } ?>
                </marquee>
                <?php
            }
            $sql2 = "SELECT * FROM category WHERE category_id = 2";
            $result2 = mysqli_query($conn, $sql2) or die("Query Failed.");
            if (mysqli_num_rows($result2)) {
                while ($row = mysqli_fetch_assoc($result2)) {
                ?>
                    <a class=" btn btn-dark detail-notice" href="notice_list.php?pid=<?php echo $row['category_id']; ?>">Show</a>
            <?php }
            } ?>
        </div>
        <div class="col-4 a1">
            <h3><a id="notice">Notification Related To Examination</a></h3>
            <?php include "config.php";
            $sql = "SELECT * FROM notice WHERE category >= 3 ";
            $result = mysqli_query($conn, $sql) or die("Query Failed.");
            if (mysqli_num_rows($result) > 0) { ?>
                <marquee class="mark1" height="460px" direction="down" scrollamount="3" onmouseover="stop()" onmouseout="start()">
                    <?php while ($row = mysqli_fetch_assoc($result)) { ?>
                        <a href="../nist/single-notice.php?id=<?php echo $row['notice_id']; ?>">
                            <span><?php echo $row['notice_title']; ?><span class="time" style="float:right"><?php echo $row['notice_date']; ?></span></span>

                        </a><br>
                        <hr>
                    <?php } ?>
                </marquee>
            <?php
            }
            $sql2 = "SELECT * FROM category WHERE category_id > 3 ";
            $result2 = mysqli_query($conn, $sql2) or die("Query Failed.");
            $row = mysqli_fetch_assoc($result2);
            ?>
            <a class=" btn btn-dark detail-notice" href="notice_list.php?pid=<?php echo $row['category_id']; ?>">Show</a>
        </div>
    </div>
</div>
<br><br>
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
<?php include "footer.php"; ?>
<!-- ---script--- -->
<script src="js/jquery.js"></script>
<script src="js/script.js"></script>