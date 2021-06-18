<!doctype html>
<html lang="en">

<head>
    <?php include("database/connection.php"); ?>
    <?php include("link-libraries.php"); ?>
</head>


<body>
    <!--====== PRELOADER PART START ======-->
    <?php include("splash-loader.php"); ?>
    <!--====== PRELOADER PART START ======-->

    <!--====== HEADER PART START ======-->
    <?php include("header.php"); ?>
    <!--====== HEADER PART ENDS ======-->

    <!--====== PAGE BANNER PART START ======-->

    <section id="page-banner" class="pt-105 pb-130 bg_cover" data-overlay="8" style="background-image: url(images/page-banner-3.jpg)">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="page-banner-cont">
                        <h2>Teachers</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Teachers</li>
                            </ol>
                        </nav>
                    </div> <!-- page banner cont -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>

    <!--====== PAGE BANNER PART ENDS ======-->

    <!--====== TEACHERS PART START ======-->
    
    <section id="teachers-singel" class="pt-70 pb-120 gray-bg">
        <div class="container">
            <div class="row justify-content-center">
            <?php
            $id = $_GET['t_id'];
                $sql = "SELECT * FROM `our_teachers` WHERE teacher_id = '$id' ";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    while ($row = mysqli_fetch_assoc($result)) { ?>
                <div class="col-lg-4 col-md-8">
                    <div class="teachers-left mt-50">
                        <div class="hero">
                        <?php echo '<img src="data:image/jpeg;base64,' . base64_encode($row['teacher_image']) . '" />' ?>
                        </div>
                        <div class="name">
                            <h6><?php echo $row['teacher_name']?></h6>
                            <span><?php echo $row['designation']?></span>
                        </div>
                        <hr>
                        <div class="description">
                            <p><?php echo $row['description']?></p>
                        </div>
                    </div> <!-- teachers left -->
                </div>
                <div class="col-lg-8">
                    <div class="teachers-right mt-50">
                        <ul class="nav nav-justified" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="active" id="dashboard-tab" data-toggle="tab" href="#dashboard" role="tab" aria-controls="dashboard" aria-selected="true">Dashboard</a>
                            </li>
                            <li class="nav-item">
                                <a id="courses-tab" data-toggle="tab" href="#courses" role="tab" aria-controls="courses" aria-selected="false">Courses</a>
                            </li>
                        </ul> <!-- nav -->
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="dashboard" role="tabpanel" aria-labelledby="dashboard-tab">
                                <div class="dashboard-cont">
                                    <div class="singel-dashboard pt-40">
                                        <h5>About</h5>
                                        <p><?php echo $row['about_teacher']?></p>
                                    </div> <!-- singel dashboard -->
                                    <div class="singel-dashboard pt-40">
                                        <h5>Acchivments</h5>
                                        <p><?php echo $row['achievements']?></p>
                                    </div> <!-- singel dashboard -->
                                    <div class="singel-dashboard pt-40">
                                        <h5>My Objective</h5>
                                        <p><?php echo $row['objective']?></p>
                                    </div> <!-- singel dashboard -->
                                </div> <!-- dashboard cont -->
                                <?php } }?>
                            </div>
                            <div class="tab-pane fade" id="courses" role="tabpanel" aria-labelledby="courses-tab">
                                <div class="courses-cont pt-20">
                                    <div class="row"><?php
                $sql = "SELECT our_teachers.teacher_image,our_teachers.teacher_name, course_deatil.course_name,
                course_deatil.course_image,course_deatil.course_description
                FROM our_teachers
                INNER JOIN course_deatil ON our_teachers.teacher_id=course_deatil.teacher_id where our_teachers.teacher_id = '$id'";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    while ($row = mysqli_fetch_assoc($result)) { ?>
                                        <div class="col-md-6">
                                            <div class="singel-course mt-30">
                                                <div class="thum">
                                                    <div class="image">
                                                    <?php echo '<img src="data:image/jpeg;base64,' . base64_encode($row['course_image']) . '" />' ?>
                                                    </div>
                                                </div>
                                                <div class="cont border">
                                                    <ul>
                                                        <li><i class="fa fa-star"></i></li>
                                                        <li><i class="fa fa-star"></i></li>
                                                        <li><i class="fa fa-star"></i></li>
                                                        <li><i class="fa fa-star"></i></li>
                                                        <li><i class="fa fa-star"></i></li>
                                                    </ul>
                                                    <span>(20 Reviws)</span>
                                                    <a href="#"><h4><?php echo $row['course_description']?></h4></a>
                                                </div>
                                            </div> <!-- singel course -->
                                        </div>
                                        <?php }}?>
                                    </div> <!-- row -->
                                </div> <!-- courses cont -->
                            </div>
                        </div> <!-- tab content -->
                    </div> <!-- teachers right -->
                </div>
                
            </div> <!-- row -->
        </div> <!-- container -->
    </section>

    <!--====== EVENTS PART ENDS ======-->

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
