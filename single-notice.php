<?php include "header.php";
include "config.php";
$notice_id = $_GET['id'];
$sql = "SELECT * FROM notice WHERE notice_id = {$notice_id}";
$result = mysqli_query($conn, $sql) or die("Query Failed.");
if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) { ?>
        <div class="card" style="width: 18rem;">
            <div class="card-body">
                <p class="card-text"><?php echo $row['notice_title']; ?></p>
                <p class="bg bg-primary"><?php echo $row['notice_date']; ?></p>
            </div>
        </div>
<?php }
}
include "footer.php"; ?>