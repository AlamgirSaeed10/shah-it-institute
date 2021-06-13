<?php
header("Content-type: image/jpg");
include("database/connection.php");
$sql = "SELECT * FROM course_deatil ";
$resultset = mysqli_query($conn, $sql) or die("database error:" . mysqli_error($conn));
while ($record = mysqli_fetch_assoc($resultset)) {
?>
    <div class="card hovercard">
        <div class="cardheader">
            <div class="avatar">
                <img alt="" src="<?php echo $record['teacher_image']; ?>">

                <?php echo base64_encode($record['teacher_image']);
                ?>

            </div>
        </div>
        <div class="card-body info">
            <div class="title">
                <a href="#"><?php echo $record['teacher_name']; ?></a>
            </div>
        </div>

    </div>
<?php } ?>