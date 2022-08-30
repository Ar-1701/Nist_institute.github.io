<?php $active_page = 'course';
include "header.php"; ?>
<!-- Main-content -->
<div class="container">
    <h1 class="sub">--&#9733;COURSE&#9733;--</h1>
</div>
<div class="container content">

    <!-- <div class="cg_course" > -->
    <h1 style="font-family:fantasy;text-transform: uppercase;text-align:center;background-color: chocolate;color: black;">
        regular courses</h1>
    <?php include "config.php";
    $sql = "SELECT * FROM course";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
    ?>
        <ul id="cg">
            <?php while ($row = mysqli_fetch_assoc($result)) { ?>
                <li>
                    <div class="card" style="width: 150px;border-radius: 15px;">
                        <a class="card-text button1" href="../nist/single-subject.php?id=<?php echo $row['id']; ?>">
                            <div class="card-body ">
                                <p class="card-text"><?php echo $row['course_name']; ?></p>
                            </div>
                        </a>
                    </div>
                </li>
            <?php  } ?>
        </ul>
    <?php  } ?>
</div>
<!-- </div> -->
<br><br>
<!-- footer -->
<?php include "footer.php"; ?>

</body>

</html>