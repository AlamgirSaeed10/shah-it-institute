<!doctype html>
<html lang="en">

<head>
    <?php include("database/connection.php"); ?>
    <?php include("link-libraries.php"); ?>
</head>

<?php $user_id = "stud-" . time(); ?>

<body>

    <!--====== PRELOADER PART START ======-->
    <?php include("splash-loader.php"); ?>
    <!--====== PRELOADER PART START ======-->

    <!--====== HEADER PART START ======-->
    <?php include("header.php"); ?>
    <!--====== HEADER PART ENDS ======-->
    <?php
    $sql = "SELECT COUNT(id) FROM `registerd_users`";
    // SELECT * FROM `certified_students`

    $result = $conn->query($sql);
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_array($result)) {
            $total_student = $row['COUNT(id)'];
        }
    }
    $sql = "SELECT COUNT(id) FROM `certified_students`";
    // SELECT * FROM `certified_students`

    $result = $conn->query($sql);
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_array($result)) {
            $certified_students = $row['COUNT(id)'];
        }
    }
    $sql = "SELECT COUNT(id) FROM `courses`";

    $result = $conn->query($sql);
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_array($result)) {
            $total_courses = $row['COUNT(id)'];
        }
    }
    $sql = "SELECT COUNT(id) FROM `our_teachers`";

    $result = $conn->query($sql);
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_array($result)) {
            $total_teachers = $row['COUNT(id)'];
        }
    } ?>



    <!--====== SLIDER PART START ======-->
    <?php
    if (isset($_POST['submit-btn'])) {
        if (!empty($_POST['course-selection'])) {
            $selected = $_POST['course-selection'];
            echo 'You have chosen: ' . $selected;
        } else {
            echo 'Please select the value.';
        }
    }
    ?>

    <section id="slider-part-3" class="bg_cover" style="background-image: url(images/slider/bg-04.jpg)">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="slider-cont-3 text-center">
                        <h2>Search for prefered courses</h2>
                        <span>More then 9+ courses for you</span>
                        <div class="slider-search mt-45">
                            <form method="POST" autocomplete="off">
                                <div class="row no-gutters">
                                    <div class="col-sm-9">
                                        <select name="course-selection">
                                            <?php
                                            $sql = "SELECT * FROM `courses`";
                                            $result = $conn->query($sql);

                                            if ($result->num_rows > 0) {
                                                while ($row = $result->fetch_assoc()) { ?>
                                                    <option value="<?php echo $row["course_name"] ?>"><?php echo $row["course_name"] ?></option>
                                            <?php
                                                }
                                            }
                                            ?>
                                        </select>
                                    </div>
                                    <div class="col-sm-3">
                                        <button name="submit-btn" class="main-btn">Search Now</button>
                                    </div>
                                </div> <!-- row -->
                            </form>
                        </div>
                    </div> <!-- slider cont3 -->
                </div>
            </div> <!-- row -->
            <!-- slider feature -->
        </div> <!-- container -->
    </section>

    <!--====== SLIDER PART ENDS ======-->

    <!--====== CATEGORY PART START ======-->

    <section id="category-3" class="category-2-items pt-50 pb-80 gray-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="singel-items text-center mt-30">
                        <div class="items-image">
                            <img src="images/category/ctg-1.jpg" alt="Category">
                        </div>
                        <div class="items-cont">
                            <a href="#">
                                <h5>Mobile App Design</h5>
                            </a>
                        </div>
                    </div> <!-- singel items -->
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="singel-items text-center mt-30">
                        <div class="items-image">
                            <img src="images/category/ctg-1.jpg" alt="Category">
                        </div>
                        <div class="items-cont">
                            <a href="#">
                                <h5>Graphic Design</h5>
                            </a>
                        </div>
                    </div> <!-- singel items -->
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="singel-items text-center mt-30">
                        <div class="items-image">
                            <img src="images/category/ctg-1.jpg" alt="Category">
                        </div>
                        <div class="items-cont">
                            <a href="#">
                                <h5>Web App development</h5>
                            </a>
                        </div>
                    </div> <!-- singel items -->
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="singel-items text-center mt-30">
                        <div class="items-image">
                            <img src="images/category/ctg-1.jpg" alt="Category">
                        </div>
                        <div class="items-cont">
                            <a href="#">
                                <h5>Game development</h5>
                            </a>
                        </div>
                    </div> <!-- singel items -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>

    <!--====== CATEGORY PART ENDS ======-->

    <!--====== COURSE PART START ======-->

    <section id="course-part" class="pt-30 pb-115">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="section-title pb-45">
                        <h5>Our course</h5>
                        <h2>Featured courses </h2>
                    </div> <!-- section title -->
                </div>
            </div> <!-- row -->
            <div class="row course-slied mt-30">
                <?php
                $sql = "SELECT * FROM course_deatil ";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    while ($row = mysqli_fetch_assoc($result)) { ?>
                        <div class="col-lg-4">

                            <div class="singel-course-2">
                                <div class="thum">
                                    <div class="image">
                                        <img src="images/course/cu-1.jpg" alt="Course">
                                    </div>
                                    <div class="price">
                                        <span><?php echo $row['course_price'];  ?></span>
                                    </div>
                                    <div class="course-teacher">
                                        <div class="thum">
                                            <a href="<?php echo $row['id'];  ?>"><?php echo '<img src="data:image/jpeg;base64,' . base64_encode($row['teacher_image']) . '" width=50px />' ?></a>
                                        </div>
                                        <div class="name">
                                            <a href="#">
                                                <h6> <?php echo $row['course_id'];  ?></h6>
                                            </a>
                                        </div>
                                        <div class="review">
                                            <ul>
                                                <li><i class="fa fa-star"></i><?php echo $row['course_review'] ?></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="cont">
                                    <a href="#">
                                        <h4><?php echo $row['course_description'];  ?></h4>
                                    </a>
                                </div>
                            </div>
                            <!-- singel course -->
                        </div>
                <?php
                    }
                }
                ?>
            </div> <!-- course slied -->
        </div> <!-- container -->
    </section>

    <!--====== COURSE PART ENDS ======-->

    <!--====== COUNT DOWN PART START ======-->
    <?php
    if (isset($_POST['signup-button'])) {
        $username = $_POST['student-name'];
        $email = $_POST['student-email'];
        $phone = $_POST['student-phone'];
        $address = $_POST['student-email'];
        $selected_courses = $_POST['student-name'];

        $sql = "INSERT INTO `registerd_users`(`user_id`, `username`, `email`, `phone`, `address`, `selected_courses`, `created_date`) 
        VALUES ('$user_id ', '$username','$email','$phone','$address','$selected_courses',date('d/m/y'))";

        if ($conn->query($sql) === TRUE) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
    ?>
    <section id="count-down-part" class="bg_cover pt-70 pb-120" data-overlay="8" style="background-image: url(images/bg-2.jpg)">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-lg-6">
                    <div class="count-down-cont pt-50">
                        <h3>Get Yourself registerd For Free</h3>
                        <h2>Sign up Now</h2>
                        <div data-countdown="2021/06/19">

                        </div>
                    </div> <!-- count down cont -->
                </div>
                <div class="col-lg-5 offset-lg-1 col-md-10">
                    <div class="category-form category-form-3 pt-50">
                        <div class="form-title text-center">
                            <h3>Limited Seats Available!</h3>
                            <span>Sign up now </span>
                            <p style="color: white;">Register youself to get 10% discount on all our courses</p>
                        </div>
                        <div class="main-form">
                            <form method="POST" autocomplete="off">
                                <div class="singel-form">
                                    <input type="text" name="student-name" id="student-name" placeholder="Your name" required>
                                </div>
                                <div class="singel-form">
                                    <input type="email" name="student-email" id="student-email" placeholder="Your Mail" required>
                                </div>
                                <div class="singel-form">
                                    <input type="text" name="student-phone" id="student-phone" placeholder="Your Phone" required>
                                </div>
                                <div class="singel-form">
                                    <input type="text" name="student-address" id="student-address" placeholder="Your Address" required>
                                </div>
                                <!-- <div class="singel-form">
                                    <input type="checkbox" name="" id="" value="PHP"> Content Writing
                                    <input type="checkbox" name="" id="" value="PHP"> Graphic Design
                                    <input type="checkbox" name="" id="" value="PHP">Web development
                                    <input type="checkbox" name="" id="" value="PHP"> Android development
                                    <input type="checkbox" name="" id="" value="PHP">Unity Game development
                                    <input type="checkbox" name="" id="" value="PHP">Programming Fundamentals
                                    <input type="checkbox" name="" id="" value="PHP"> MS Office
                                    <input type="checkbox" name="" id="" value="PHP">Social Media Marketing
                                </div> -->
                                <div class="singel-form">
                                    <button class="main-btn" name="signup-button">Get it Now</button>
                                </div>
                            </form>
                        </div>
                    </div> <!-- category form -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>

    <!--====== COUNT DOWN PART ENDS ======-->

    <!--====== COUNTER PART START ======-->

    <div id="counter-part" class="bg_cover pt-25 pb-70 gray-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-sm-6">
                    <div class="singel-counter counter-3 text-center mt-40">
                        <span><span class="counter"><?php echo $total_student; ?></span>+</span>
                        <p>Students enrolled</p>
                    </div> <!-- singel counter -->
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="singel-counter counter-3 text-center mt-40">
                        <span><span class="counter"><?php echo $total_courses; ?></span>+</span>
                        <p>Available Courses</p>
                    </div> <!-- singel counter -->
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="singel-counter counter-3 text-center mt-40">
                        <span><span class="counter"><?php echo $certified_students; ?></span>+</span>
                        <p>People certified</p>
                    </div> <!-- singel counter -->
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="singel-counter counter-3 text-center mt-40">
                        <span><span class="counter"><?php echo $total_teachers; ?></span>+</span>
                        <p>Our Teachers</p>
                    </div> <!-- singel counter -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </div>
    <!--====== COUNTER PART ENDS ======-->

    <!--====== EVENT 2 PART START ======-->
    <!--====== EVENT 2 PART ENDS ======-->

    <!--====== TEACHERS PART START ======-->
    <!--====== TEACHERS PART ENDS ======-->

    <!--====== NEWS PART START ======-->

    <section id="news-part" class="pt-30 pb-110">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="section-title pb-50">
                        <h5>Latest News</h5>
                        <h2>From the news</h2>
                    </div> <!-- section title -->
                </div>
            </div> <!-- row -->
            <div class="row">
                <div class="col-lg-6">
                    <div class="singel-news mt-30">
                        <div class="news-thum pb-25">
                            <img src="images/news/n-1.jpg" alt="News">
                        </div>
                        <div class="news-cont">
                            <ul>
                                <li><a href="#"><i class="fa fa-calendar"></i>2 December 2018 </a></li>
                                <li><a href="#"> <span>By</span> Adam linn</a></li>
                            </ul>
                            <a href="blog-singel.php">
                                <h3>Tips to grade high cgpa in university life</h3>
                            </a>
                            <p>Lorem ipsum gravida nibh vel velit auctor aliquetn sollicitudirem quibibendum auci elit cons equat ipsutis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt .</p>
                        </div>
                    </div> <!-- singel news -->
                </div>
                <div class="col-lg-6">
                    <div class="singel-news news-list">
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="news-thum mt-30">
                                    <img src="images/news/ns-1.jpg" alt="News">
                                </div>
                            </div>
                            <div class="col-sm-8">
                                <div class="news-cont mt-30">
                                    <ul>
                                        <li><a href="#"><i class="fa fa-calendar"></i>2 December 2018 </a></li>
                                        <li><a href="#"> <span>By</span> Adam linn</a></li>
                                    </ul>
                                    <a href="blog-singel.php">
                                        <h3>Intellectual communication</h3>
                                    </a>
                                    <p>Gravida nibh vel velit auctor aliquetn sollicitudirem quibibendum auci elit cons vel.</p>
                                </div>
                            </div>
                        </div> <!-- row -->
                    </div> <!-- singel news -->
                    <div class="singel-news news-list">
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="news-thum mt-30">
                                    <img src="images/news/ns-2.jpg" alt="News">
                                </div>
                            </div>
                            <div class="col-sm-8">
                                <div class="news-cont mt-30">
                                    <ul>
                                        <li><a href="#"><i class="fa fa-calendar"></i>2 December 2018 </a></li>
                                        <li><a href="#"> <span>By</span> Adam linn</a></li>
                                    </ul>
                                    <a href="blog-singel.php">
                                        <h3>Study makes you perfect</h3>
                                    </a>
                                    <p>Gravida nibh vel velit auctor aliquetn sollicitudirem quibibendum auci elit cons vel.</p>
                                </div>
                            </div>
                        </div> <!-- row -->
                    </div> <!-- singel news -->
                    <div class="singel-news news-list">
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="news-thum mt-30">
                                    <img src="images/news/ns-3.jpg" alt="News">
                                </div>
                            </div>
                            <div class="col-sm-8">
                                <div class="news-cont mt-30">
                                    <ul>
                                        <li><a href="#"><i class="fa fa-calendar"></i>2 December 2018 </a></li>
                                        <li><a href="#"> <span>By</span> Adam linn</a></li>
                                    </ul>
                                    <a href="blog-singel.php">
                                        <h3>Technology edcution is now....</h3>
                                    </a>
                                    <p>Gravida nibh vel velit auctor aliquetn sollicitudirem quibibendum auci elit cons vel.</p>
                                </div>
                            </div>
                        </div> <!-- row -->
                    </div> <!-- singel news -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>

    <!--====== NEWS PART ENDS ======-->

    <!--====== PATNAR LOGO PART START ======-->
    <?php include("partner-logos.php"); ?>
    <!--====== PATNAR LOGO PART ENDS ======-->

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