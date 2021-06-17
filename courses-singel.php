<!doctype html>
<html lang="en">

<head>
    <?php include("database/connection.php"); ?>
    <?php include("link-libraries.php"); ?>
</head>

<body>

<?php 
$id = $_GET['id'];
$t_id = "";
$c_name = "";
?>

    <!--====== PRELOADER PART START ======-->
    <!-- <?php include("splash-loader.php"); ?> -->
    <!--====== PRELOADER PART START ======-->

    <!--====== HEADER PART START ======-->
    <?php include("header.php"); ?>
    <!--====== HEADER PART ENDS ======-->

    <!--====== PAGE BANNER PART START ======-->

    <section id="page-banner" class="pt-105 pb-110 bg_cover" data-overlay="8" style="background-image: url(images/page-banner-2.jpg)">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="page-banner-cont">
                        <h2>Learn basic javascript</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item"><a href="#">Courses</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Learn basic javasript</li>
                            </ol>
                        </nav>
                    </div> <!-- page banner cont -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>

    <!--====== PAGE BANNER PART ENDS ======-->

    <!--====== COURSES SINGEl PART START ======-->

    <section id="corses-singel" class="pt-90 pb-120 gray-bg">
        <div class="container">
            <div class="row">
                    <?php
                        $sql = "SELECT * FROM `course_deatil` where course_id ='$id'";
                        $result = $conn->query($sql);
                        if (mysqli_num_rows($result) > 0) {
                            while ($row = mysqli_fetch_array($result)) {
                                $t_id = $row['teacher_id'];
                                $c_name = $row['course_description'];
                          ?>
                <div class="col-lg-8">
                    <div class="corses-singel-left mt-30">
                        <div class="title">
                            <h3><?php echo $row['course_description']?></h3>
                        </div> <!-- title -->
                        
                        <div class="course-terms">
                        <?php
                        $sql = "SELECT * FROM `our_teachers` where teacher_id ='$t_id'";
                        $result = $conn->query($sql);
                        if (mysqli_num_rows($result) > 0) {
                            while ($row = mysqli_fetch_array($result)) {
                                
                          ?>
                            <ul>
                                <li>
                                    <div class="teacher-name">
                                        <div class="thum">
                                            <img src="images/course/teacher/t-1.jpg" alt="Teacher">
                                        </div>
                                        <div class="name">
                                            <span>Teacher</span>
                                            <h6><?php echo $row['teacher_name']?></h6>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                <?php
                        $sql = "SELECT * FROM `courses` where course_id ='$id'";
                        $result = $conn->query($sql);
                        if (mysqli_num_rows($result) > 0) {
                            while ($row = mysqli_fetch_array($result)) {
                                
                          ?>
                                    <div class="course-category">
                                        <span>Category</span>
                                        <h6><?php echo $row['course_category']?> </h6>
                                    </div>
                                    <?php }}?>
                                </li>
                                <li>
                                    <div class="review">
                                        <span>Review</span>
                                        <ul>
                                            <li><a href="#"><i class="fa fa-star"></i></a></li>
                                            <li><a href="#"><i class="fa fa-star"></i></a></li>
                                            <li><a href="#"><i class="fa fa-star"></i></a></li>
                                            <li><a href="#"><i class="fa fa-star"></i></a></li>
                                            <li><a href="#"><i class="fa fa-star"></i></a></li>
                                            <li class="rating">(20 Reviws)</li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                            <?php }}?>
                        </div> <!-- course terms -->

                        <div class="corses-singel-image pt-50">
                            <img src="images/course/cu-1.jpg" alt="Courses">
                        </div> <!-- corses singel image -->

                        <div class="corses-tab mt-30">
                            <ul class="nav nav-justified" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a class="active" id="overview-tab" data-toggle="tab" href="#overview" role="tab" aria-controls="overview" aria-selected="true">Overview</a>
                                </li>
                                <li class="nav-item">
                                    <a id="curriculam-tab" data-toggle="tab" href="#curriculam" role="tab" aria-controls="curriculam" aria-selected="false">Curriculam</a>
                                </li>
                                <li class="nav-item">
                                    <a id="instructor-tab" data-toggle="tab" href="#instructor" role="tab" aria-controls="instructor" aria-selected="false">Instructor</a>
                                </li>
                            </ul>

                            <div class="tab-content" id="myTabContent">
                                <?php
                                $sql = "SELECT * FROM `single_course` WHERE course_id='$id'";
                                $result = $conn->query($sql);
                                if (mysqli_num_rows($result) > 0) {
                                    while ($row = mysqli_fetch_array($result)) {  
                                ?>
                                <div class="tab-pane fade show active" id="overview" role="tabpanel" aria-labelledby="overview-tab">
                                    <div class="overview-description">
                                        <div class="singel-description pt-40">
                                            <h6>Course Summery</h6>
                                            <p><?php echo $row['course_summary'];?></p>
                                        </div>
                                        <div class="singel-description pt-40">
                                            <h6>Requrements</h6>
                                            <p><?php echo $row['requirments'];?></p>
                                        </div>
                                    </div> <!-- overview description -->
                                </div>
                                <div class="tab-pane fade" id="curriculam" role="tabpanel" aria-labelledby="curriculam-tab">
                                    <div class="curriculam-cont">
                                        <div class="title">
                                            <h6><?php echo $c_name;?></h6>
                                        </div>
                                        <div class="accordion" id="accordionExample">
                                            <div class="card">
                                                <div class="card-header" id="headingOne">
                                                    <a href="#" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                        <ul>
                                                            <li><i class="fa fa-file-o"></i></li>
                                                            <li><span class="lecture"><?php echo $row['lectures'];?></span></li>
                                                            <li><span class="head">What is javascirpt</span></li>
                                                            <li><span class="time d-none d-md-block"> <span></span></span></li>
                                                        </ul>
                                                    </a>
                                                </div>
                                                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                                                    <div class="card-body">
                                                        <p><?php echo $row['curriculam'];?></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div> <!-- curriculam cont -->
                                </div>
                                    <?php
                                        $sql = "SELECT * FROM `our_teachers` WHERE teacher_id='$t_id'";
                                        $result = $conn->query($sql);
                                        if (mysqli_num_rows($result) > 0) {
                                            while ($row = mysqli_fetch_array($result)) {  
                                    ?>
                                <div class="tab-pane fade" id="instructor" role="tabpanel" aria-labelledby="instructor-tab">
                                    <div class="instructor-cont">
                                        <div class="instructor-author">
                                            <div class="author-thum">
                                            <?php echo '<img src="data:image/jpeg;base64,' . base64_encode($row['teacher_image']) . '" />' ?>
                                            </div>
                                            <div class="author-name">
                                                <a href="#">
                                                    <h5><?php echo $row['teacher_name'];?></h5>
                                                </a>
                                                <span><?php echo $row['designation'];?></span>
                                                <ul class="social">
                                                    <li><a href="#"><i class="fa fa-facebook-f"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="instructor-description pt-25">
                                            <p><?php echo $row['objective'];?></p>
                                        </div>
                                    </div> <!-- instructor cont -->
                                    <?php }}?>
                                </div>
                            </div> <!-- tab content -->
                            <?php }}?>
                        </div>
                    </div> <!-- corses singel left -->

                </div>
                <div class="col-lg-4">
                    <div class="row">
                        <div class="col-lg-12 col-md-6">
                            <div class="course-features mt-30">
                                <h4>Course Features </h4>
                                <ul>
                                    <li><i class="fa fa-clock-o"></i>Duaration : <span><?php echo $row['duration'];?></span></li>
                                    <li><i class="fa fa-clone"></i>Leactures : <span><?php echo $row['lectures'];?></span></li>
                                    <li><i class="fa fa-beer"></i>Quizzes : <span><?php echo $row['quizzes'];?></span></li>
                                    <li><i class="fa fa-user-o"></i>Students : <span><?php echo $row['quizzes'];?></span></li>
                                </ul>
                            </div> <!-- course features -->
                        </div>
                    </div>
                </div>
            
            
            <?php } }?></div> <!-- row -->
            </div> <!-- container -->
    </section>

    <!--====== COURSES SINGEl PART ENDS ======-->

    <!--====== FOOTER PART START ======-->
    <?php include("footer.php"); ?>
    <!--====== FOOTER PART ENDS ======-->

    <!--====== BACK TO TP PART START ======-->
    <a href="#" class="back-to-top"><i class="fa fa-angle-up"></i></a>
    <!--====== BACK TO TP PART ENDS ======-->

    <!--====== BACK TO TP PART ENDS ======-->
    <?php include("jsScripts.php"); ?>
    <!--====== BACK TO TP PART ENDS ======-->

</body>

</html>