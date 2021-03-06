<!doctype html>
<html lang="en">

<head>
    <?php include("database/connection.php"); ?>
    <?php  include("link-libraries.php");
    session_start();
    
    ?>
</head>

<body>

    <!--====== PRELOADER PART START ======-->
    <!-- <?php include("splash-loader.php"); ?> -->
    <!--====== PRELOADER PART START ======-->

    <!--====== HEADER PART START ======-->
    <?php include("header.php"); ?>
    <!--====== HEADER PART ENDS ======-->

    <!--====== PAGE BANNER PART START ======-->
    <?php
    $sql = "SELECT COUNT(id) FROM `course_deatil`";

    $result = $conn->query($sql);
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_array($result)) {
            $total_courses = $row['COUNT(id)'];
        }
    }
    ?>
    <section id="page-banner" class="pt-105 pb-110 bg_cover" data-overlay="8" style="background-image: url(images/page-banner-2.jpg)">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="page-banner-cont">
                        <h2>Our Courses</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Courses</li>
                            </ol>
                        </nav>
                    </div> <!-- page banner cont -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>

    <!--====== PAGE BANNER PART ENDS ======-->

    <!--====== COURSES PART START ======-->

    <section id="courses-part" class="pt-50 pb-120 gray-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="courses-top-search">
                        <ul class="nav float-left" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="active" id="courses-grid-tab" data-toggle="tab" href="#courses-grid" role="tab" aria-controls="courses-grid" aria-selected="true"><i class="fa fa-th-large"></i></a>
                            </li>
                            <!-- <li class="nav-item">
                                <a id="courses-list-tab" data-toggle="tab" href="#courses-list" role="tab" aria-controls="courses-list" aria-selected="false"><i class="fa fa-th-list"></i></a>
                            </li> -->
                            <li class="nav-item">Showning <?php echo $total_courses;?> Results</li>
                        </ul> <!-- nav -->
                    </div> <!-- courses top search -->
                </div>
            </div> <!-- row -->
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="courses-grid" role="tabpanel" 
                aria-labelledby="courses-grid-tab">
                    <div class="row">
                    <?php
                $sql = "SELECT our_teachers.teacher_image,our_teachers.teacher_name, course_deatil.course_id, course_deatil.course_name,
                course_deatil.course_image,course_deatil.course_description
                FROM our_teachers
                INNER JOIN course_deatil ON our_teachers.teacher_id=course_deatil.teacher_id";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        // $_SESSION["idd"] = $row['course_id'];

                        ?>
                        <div class="col-lg-4 col-md-6">
                            <div class="singel-course mt-30">
                                <div class="thum">
                                    <div class="image">
                                    <a href="courses-singel.php?id=<?php echo $row['course_id'];?>">
                                    <?php
                                    if($row['course_image'] == null)
                                    {
                                        echo '<img src="images/noimg.png" width=400 height=300  />'; 
                                    }else{
                                        echo '<img src="data:image/jpeg;base64,'. base64_encode($row['course_image']) .'"
                                        alt='.$row['course_name'].'width=400 height=300  />';
                                    }
                                    ?>
                                    </a>
                                    </div>
                                </div>
                                <div class="cont">
                                    <ul>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                    </ul>
                                    <span>(20 Reviws)</span>
                                    <a href="courses-singel.php?id=<?php echo $row['course_id'];?>">
                                        <h5><?php echo $row['course_name'];?></h5>
                                    </a>
                                    <div class="course-teacher">
                                        <div class="thum">
                                        <?php echo '<img src="data:image/jpeg;base64,' . base64_encode($row['teacher_image']) . '" />' ?>
                                        </div>
                                        <div class="name">
                                                <h6><?php echo $row['teacher_name'];?></h6>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- singel course -->
                        </div>
                        <?php } } ?>
                    </div> <!-- row -->
                </div>
                
                <!-- </div> -->
            </div> <!-- tab content -->
        </div> <!-- container -->
    </section>

    <!--====== COURSES PART ENDS ======-->

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