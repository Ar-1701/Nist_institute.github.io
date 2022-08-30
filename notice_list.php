<?php include "header.php"; ?>
<div class="container">
    <?php include "config.php";
    $pid = $_GET['pid'];
    $sql = "SELECT * FROM notice WHERE category = {$pid}";
    $result = mysqli_query($conn, $sql) or die("Query Failed.");
    if (mysqli_num_rows($result) > 0) { ?>
        <table class="table table-light">
            <tr>
                <?php while ($row = mysqli_fetch_assoc($result)) { ?>
                    <td>
                        <div class="card" style="width: 18rem;">
                            <div class="card-body">
                                <a class="text-black" href="../nist/single-notice.php?id=<?php echo $row['notice_id']; ?>">
                                    <p class="card-text "><?php echo $row['notice_title']; ?>
                                        <span class="card-text bg-primary"><?php echo $row['notice_date']; ?></span>
                                    </p>
                                </a>
                            </div>
                        </div>
                    </td>
                <?php } ?>
            </tr>
        </table>
    <?php } ?>
</div>
<?php include "footer.php"; ?>