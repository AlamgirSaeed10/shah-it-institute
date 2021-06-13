<?php
if (isset($_POST['submit'])) {
    $user_search = $_POST['search-course'];
    $sql = "SELECT * FROM courses WHERE `course_name`= '$user_search'";

    $result = $conn->query($sql);
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_array($result)) {
            echo $row['course_name'];
        }
    } else {

        echo "Course not available";
    }
}
?>
<div class="search-box">
    <div class="serach-form">
        <div class="closebtn">
            <span></span>
            <span></span>
        </div>
        <form method="POST" autocomplete="off">
            <input type="text" name="search-course" id="search-course" placeholder="Search by keyword">
            <button name="submit"><i class="fa fa-search"></i></button>
        </form>
    </div> <!-- serach form -->
</div>