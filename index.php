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
    <section id="slider-part" class="slider-active">
        <div class="single-slider bg_cover1" style="background-image: url(images/slider/wd-01.jpg)" data-overlay="4">
            <div class="container">
                <div class="row">
                    <div class="col-xl-7 col-lg-9">
                        <div class="slider-cont">
                            <h1 data-animation="bounceInLeft" data-delay="1s">Web Application Development</h1>
                            <p data-animation="fadeInUp" data-delay="1.3s">Learn to create responsive, visually appealing sites that feature user-friendly design and clear navigation with the guidance of our expert instructors</p>
                            <ul>
                                <li><a data-animation="fadeInUp" data-delay="1.6s" class="main-btn" href="courses.php">Read More</a></li>
                            </ul>
                        </div>
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
        </div> <!-- single slider -->
        <div class="single-slider bg_cover1 " style="background-image: url(images/slider/gd-01.png)" data-overlay="4">
            <div class="container">
                <div class="row">
                    <div class="col-xl-7 col-lg-9">
                        <div class="slider-cont">
                            <h1 data-animation="bounceInLeft" data-delay="1s">Graphic Design</h1>
                            <p data-animation="fadeInUp" data-delay="1.3s">We will teach you from basics to expert level Graphics leading towards your career growth</p>
                            <ul>
                                <li><a data-animation="fadeInUp" data-delay="1.6s" class="main-btn" href="courses.php">Read More</a></li>
                            </ul>
                        </div>
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
        </div> <!-- single slider -->

        <div class="single-slider bg_cover1 " style="background-image: url(images/slider/dm-01.jpg)" data-overlay="4">
            <div class="container">
                <div class="row">
                    <div class="col-xl-7 col-lg-9">
                        <div class="slider-cont">
                            <h1 data-animation="bounceInLeft" data-delay="1s">Digital Media Marketing</h1>
                            <p data-animation="fadeInUp" data-delay="1.3s">The world is bound to be digital and in high times, we will teach you tips and tricks to master the world of social media. </p>
                            <ul>
                                <li><a data-animation="fadeInUp" data-delay="1.6s" class="main-btn" href="courses.php">Read More</a></li>
                            </ul>
                        </div>
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
        </div> <!-- single slider -->
        <div class="single-slider bg_cover1 " style="background-image: url(images/slider/gd-01.jpg)" data-overlay="4">
            <div class="container">
                <div class="row">
                    <div class="col-xl-7 col-lg-9">
                        <div class="slider-cont">
                            <h1 data-animation="bounceInLeft" data-delay="1s">Game Application Development</h1>
                            <p data-animation="fadeInUp" data-delay="1.3s">Game development is an innovative and valuable skill to withhold. Learn to make a fully-functional Game with proper training in the relevant frameworks.</p>
                            <ul>
                                <li><a data-animation="fadeInUp" data-delay="1.6s" class="main-btn" href="courses.php">Read More</a></li>
                            </ul>
                        </div>
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
        </div> <!-- single slider -->
        <div class="single-slider bg_cover1 " style="background-image: url(images/slider/ad-01.jpg)" data-overlay="4">
            <div class="container">
                <div class="row">
                    <div class="col-xl-7 col-lg-9">
                        <div class="slider-cont">
                            <h1 data-animation="bounceInLeft" data-delay="1s">Mobile Apps Development</h1>
                            <p data-animation="fadeInUp" data-delay="1.3s">Get your hands on our exclusive Mobile App development course and get your first skill-oriented job.</p>
                            <ul>
                                <li><a data-animation="fadeInUp" data-delay="1.6s" class="main-btn" href="courses.php">Read More</a></li>
                            </ul>
                        </div>
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
        </div> <!-- single slider -->
        <div class="single-slider bg_cover1 " style="background-image: url(images/slider/cw-01.jpg)" data-overlay="4">
            <div class="container">
                <div class="row">
                    <div class="col-xl-7 col-lg-9">
                        <div class="slider-cont">
                            <h1 data-animation="bounceInLeft" data-delay="1s">Content Writing</h1>
                            <p data-animation="fadeInUp" data-delay="1.3s">Content writing combined with proper SEO and creative writing skills can help your business generate more leads, traffic and sales. Learn now and lead by example.</p>
                            <ul>
                                <li><a data-animation="fadeInUp" data-delay="1.6s" class="main-btn" href="courses.php">Read More</a></li>
                            </ul>
                        </div>
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
        </div> <!-- single slider -->
        <div class="single-slider bg_cover1 " style="background-image: url(images/slider/ms-01.jpg)" data-overlay="4">
            <div class="container">
                <div class="row">
                    <div class="col-xl-7 col-lg-9">
                        <div class="slider-cont">
                            <h1 data-animation="bounceInLeft" data-delay="1s">Microsoft Office</h1>
                            <p data-animation="fadeInUp" data-delay="1.3s">The knowledge of MS Office is vital for almost every aspect of the job field. Learn invaluable office skills and make your CV stand out.</p>
                            <ul>
                                <li><a data-animation="fadeInUp" data-delay="1.6s" class="main-btn" href="courses.php">Read More</a></li>
                            </ul>
                        </div>
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
        </div> <!-- single slider -->
        <div class="single-slider bg_cover1 " style="background-image: url(images/slider/pf-01.jpg)" data-overlay="4">
            <div class="container">
                <div class="row">
                    <div class="col-xl-7 col-lg-9">
                        <div class="slider-cont">
                            <h1 data-animation="bounceInLeft" data-delay="1s">Programming Fundamentals</h1>
                            <p data-animation="fadeInUp" data-delay="1.3s">Ge yourself a complete guide on the basics of all programming languages and start your journey as a Programmer.</p>
                            <ul>
                                <li><a data-animation="fadeInUp" data-delay="1.6s" class="main-btn" href="courses.php">Read More</a></li>
                            </ul>
                        </div>
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
        </div> <!-- single slider -->
    </section>

    <!--====== SLIDER PART ENDS ======-->

    <!--====== COURSE PART START ======-->

    <section id="course-part" class="pt-30 pb-115">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title pb-30">
                        <h5>Our course</h5>
                        <h2>Featured courses </h2>
                    </div> <!-- section title -->
                </div>
            </div> <!-- row -->
            <div class="row course-slied mt-30">
                <?php
                // SELECT course_deatil.course_name,course_deatil.course_description,course_deatil.course_image,course_deatil.course_id,our_teachers.course_id, our_teachers.teacher_image FROM course_deatil
                // INNER JOIN our_teachers
                // ON our_teachers.course_id = course_deatil.course_id WHERE our_teachers.course_id = course_deatil.course_id
                $sql = "SELECT
                *,
                 our_teachers.course_id,
                 our_teachers.teacher_image
             FROM
                 course_deatil
             INNER JOIN our_teachers ON our_teachers.course_id = course_deatil.course_id
             WHERE
                 our_teachers.course_id = course_deatil.course_id";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    while ($row = mysqli_fetch_assoc($result)) { ?>
                        <div class="col-lg-12">
                            <div class="singel-course-2">
                                <div class="thum">
                                    <div class="image">
                                        <?php echo '<img src="data:image/jpeg;base64,' . base64_encode($row['course_image']) . '" width=400px height=300px />' ?>
                                    </div>
                                    <div class="course-teacher">
                                        <div class="thum">
                                            <?php echo '<img src="data:image/jpeg;base64,' . base64_encode($row['teacher_image']) . '" width=50px height=50px />' ?>
                                        </div>
                                        <div class="name">
                                        <a href="courses-singel.php?id=<?php echo $row['course_id']; ?>">
                                                <h6> <?php echo $row['course_name'];  ?></h6>
                                            </a>
                                        </div>

                                    </div>
                                </div>
                                <div class="cont">
                                    <a href="#">
                                        <h5><?php echo $row['course_description'];  ?></h5>
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
                                <!-- <div class="singel-form1radio">
                                    <input type="radio" name="" id="" value="PHP"> Content Writing
                                    <input type="radio" name="" id="" value="PHP"> Graphic Design
                                    <input type="radio" name="" id="" value="PHP">Web development
                                    <input type="radio" name="" id="" value="PHP"> Android development
                                    <input type="radio" name="" id="" value="PHP">Unity Game development
                                    <input type="radio" name="" id="" value="PHP">Programming Fundamentals
                                    <input type="radio" name="" id="" value="PHP"> MS Office
                                    <input type="radio" name="" id="" value="PHP">Social Media Marketing
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

    <!--====== TEASTIMONIAL PART START ======-->

    <section id="testimonial" class="bg_cover pt-40 pb-40" data-overlay="8" style="background-image: url(images/bg-2.jpg)">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="section-title pb-40">
                        <h5>Testimonial</h5>
                        <h2>What people say</h2>
                    </div> <!-- section title -->
                </div>
            </div> <!-- row -->
            <div class="row testimonial-slied mt-40">
                <div class="col-lg-12">
                    <div class="singel-testimonial">
                        <div class="testimonial-thum">
                            <img src="images/testimonial/man.png" alt="Testimonial">
                            <div class="quote">
                                <i class="fa fa-quote-right"></i>
                            </div>
                        </div>
                        <div class="testimonial-cont">
                            <p>If you have got a passion and purpose then Shah IT Institute is the right place
                                for you. I’m an IT graduate and wanted to enhance my Web Development skills.
                                I had a passion for web designs and my tutor just made my dream come true.</p>
                            <h6>Danish Jameel</h6>
                        </div>
                    </div> <!-- singel testimonial -->
                </div>
                <div class="col-lg-12">
                    <div class="singel-testimonial">
                        <div class="testimonial-thum">
                            <img src="images/testimonial/man.png" alt="Testimonial">
                            <div class="quote">
                                <i class="fa fa-quote-right"></i>
                            </div>
                        </div>
                        <div class="testimonial-cont">
                            <p>Instructors at Shah IT Institute really care for your success. When I enrolled, I thought I
                                wouldn’t be able to learn App development because I found it too complex. However, their flexible
                                teaching methods just changed my mind completely. Now I love developing mobile apps.</p>
                            <h6>Muhammad Qasim Baig</h6>
                        </div>
                    </div> <!-- singel testimonial -->
                </div>
                <div class="col-lg-12">
                    <div class="singel-testimonial">
                        <div class="testimonial-thum">
                            <img src="images/testimonial/man.png" alt="Testimonial">
                            <div class="quote">
                                <i class="fa fa-quote-right"></i>
                            </div>
                        </div>
                        <div class="testimonial-cont">
                            <p>Before I came to know about Shah IT Institute, I could only dream of learning web development
                                because I couldn’t afford to pay for expensive courses. Shah IT institute then offered
                                to not only just teach but fully equip me with the web development skills and all that
                                for completely free of cost. </p>
                            <h6>Danish Jameel</h6>
                        </div>
                    </div> <!-- singel testimonial -->
                </div>
                <div class="col-lg-12">
                    <div class="singel-testimonial">
                        <div class="testimonial-thum">
                            <img src="images/testimonial/man.png" alt="Testimonial">
                            <div class="quote">
                                <i class="fa fa-quote-right"></i>
                            </div>
                        </div>
                        <div class="testimonial-cont">
                            <p>My son is learning Web development from Shah IT Institute and I can see the interest
                                that he is taking. His course has not been completed yet and he already have received multiple
                                job offers based on his skills. Definitely a worthy investment.</p>
                            <h6>Jameel Ahmed</h6>
                        </div>
                    </div> <!-- singel testimonial -->
                </div>
                <div class="col-lg-12">
                    <div class="singel-testimonial">
                        <div class="testimonial-thum">
                            <img src="images/testimonial/man.png" alt="Testimonial">
                            <div class="quote">
                                <i class="fa fa-quote-right"></i>
                            </div>
                        </div>
                        <div class="testimonial-cont">
                            <p>Highly recommended institution for learning technical skills. The best thing
                                is that they believe in community education and they provide equal
                                opportunity to each of their students. </p>
                            <h6>Hafsa Abid</h6>
                        </div>
                    </div> <!-- singel testimonial -->
                </div>
            </div> <!-- testimonial slied -->
        </div> <!-- container -->
    </section>

    <!--====== TEASTIMONIAL PART ENDS ======-->


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