<section id="page-banner" class="pt-105 pb-110 bg_cover" data-overlay="8" style="background-image: url(images/page-banner-2.jpg)">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="page-banner-cont">
                        <h2>Learn basic javascript</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">Home</li>
                                <li class="breadcrumb-item">Courses</li>
                                <li class="breadcrumb-item active" aria-current="page"><?php echo $c_name;?></li>
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
                                // $course_name = $row['course_description'];
                          ?>
                <div class="col-lg-8">
                    <div class="corses-singel-left mt-30">
                        <div class="title">
                            <h3><?php echo $row['course_name']?></h3>
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
                                        <?php echo '<img src="data:image/jpeg;base64,' . base64_encode($row['teacher_image']) . '" width=50px height=50px/>' ?>
                                            <!-- <img src="images/course/teacher/t-1.jpg" alt="Teacher"> -->
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
                            while ($row = mysqli_fetch_array($result)) {?>
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

                        <div class="corses-singel-image pt-20">
                        <?php echo '<img src="data:image/jpeg;base64,' . base64_encode($c_img) . '" width=760px height=456px />' ?>
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
                                            <h6><?php echo $c_name?></h6>
                                        </div>
                                        <div class="accordion" id="accordionExample">
                                            <div class="card">
                                                <div class="card-header" id="headingOne">
                                                    <a href="#" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                        <ul>
                                                            <li><i class="fa fa-file-o"></i></li>
                                                            <li><span class="lecture">Lecture 1.1</span></li>
                                                            <li><span class="head">Overview of web and web development</span></li>
                                                            <li><span class="time d-none d-md-block"> </span></li>
                                                        </ul>
                                                    </a>
                                                </div>

                                                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                                                    <div class="card-body">
                                                        <p>Overview of web and web development, Explain HTML and use of HTML, Different tools to create HTML document</p>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            <div class="card">
                                                <div class="card-header" id="headingTow">
                                                    <a href="#" data-toggle="collapse" class="collapsed" data-target="#collapseTow" aria-expanded="true" aria-controls="collapseTow">
                                                        <ul>
                                                            <li><i class="fa fa-file-o"></i></li>
                                                            <li><span class="lecture">Lecture 1.2</span></li>
                                                            <li><span class="head">Different techniques to display HTML files</span></li>
                                                            <li><span class="time d-none d-md-block"> </li>
                                                        </ul>
                                                    </a>
                                                </div>

                                                <div id="collapseTow" class="collapse" aria-labelledby="headingTow" data-parent="#accordionExample">
                                                    <div class="card-body">
                                                        <p>Different techniques to display HTML files, Syntax of Tags, attributes, elements, Basic tags and definitions, like DOCTYPE</p>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="card">
                                                <div class="card-header" id="headingThree">
                                                    <a href="#" data-toggle="collapse" class="collapsed" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                        <ul>
                                                            <li><i class="fa fa-file-o"></i></li>
                                                            <li><span class="lecture">Lecture 1.3</span></li>
                                                            <li><span class="head">HTML Basics</span></li>
                                                            <li><span class="time d-none d-md-block"> </span></li>
                                                        </ul>
                                                    </a>
                                                </div>
                                                <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                                                    <div class="card-body">
                                                        <p>HTML Basics (Headings, Paragraph, Links, Images), HTML Tables, Lists</p>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="card">
                                                <div class="card-header" id="headingFore">
                                                    <a href="#" data-toggle="collapse" class="collapsed" data-target="#collapseFore" aria-expanded="false" aria-controls="collapseFore">
                                                        <ul>
                                                            <li><i class="fa fa-file-o"></i></li>
                                                            <li><span class="lecture">Lecture 1.4</span></li>
                                                            <li><span class="head">Definition of style and its method</span></li>
                                                            <li><span class="time d-none d-md-block"> </span></li>
                                                        </ul>
                                                    </a>
                                                </div>
                                                <div id="collapseFore" class="collapse" aria-labelledby="headingFore" data-parent="#accordionExample">
                                                    <div class="card-body">
                                                        <p>Definition of style and its method, CSS inline style, Customize CV in Table, Block and Inline elements</p>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="card">
                                                <div class="card-header" id="headingFive">
                                                    <a href="#" data-toggle="collapse" class="collapsed" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                                        <ul>
                                                            <li><i class="fa fa-file-o"></i></li>
                                                            <li><span class="lecture">Lecture 1.5</span></li>
                                                            <li><span class="head">Div concept</span></li>
                                                            <li><span class="time d-none d-md-block"> </span> </li>
                                                        </ul>
                                                    </a>
                                                </div>
                                                <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordionExample">
                                                    <div class="card-body">
                                                        <p>Div concept, heading float (left,right), Box Model, Convert Table task into DIV</p>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            <div class="card">
                                                <div class="card-header" id="headingSix">
                                                    <a href="#" data-toggle="collapse" class="collapsed" data-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                                        <ul>
                                                            <li><i class="fa fa-file-o"></i></li>
                                                            <li><span class="lecture">Lecture 1.6</span></li>
                                                            <li><span class="head">ID, Class, Inner Style, HTML5 tags and definitions</span></li>
                                                            <li><span class="time d-none d-md-block"> </span></li>
                                                        </ul>
                                                    </a>
                                                </div>
                                                <div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#accordionExample">
                                                    <div class="card-body">
                                                        <p>ID, Class, Inner Style, HTML5 tags and definitions, HTML Forms and input, Form input Element, Text fields, password, Radio buttons, Checkboxes</p>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            <div class="card">
                                                <div class="card-header" id="headingSeven">
                                                    <a href="#" data-toggle="collapse" class="collapsed" data-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                                                        <ul>
                                                            <li><i class="fa fa-file-o"></i></li>
                                                            <li><span class="lecture">Lecture 1.7</span></li>
                                                            <li><span class="head">CSS, Linked (External CSS) Style </span></li>
                                                            <li><span class="time d-none d-md-block"></span></li>
                                                        </ul>
                                                    </a>
                                                </div>
                                                <div id="collapseSeven" class="collapse" aria-labelledby="headingSeven" data-parent="#accordionExample">
                                                    <div class="card-body">
                                                        <p>CSS, Linked (External CSS) Style, CSS Selectors Reference, Positions(Absolute, Fixed, Relative), Z-index, display in style, Test, Box/text shadow</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card">
                                                <div class="card-header" id="headingeight">
                                                    <a href="#" data-toggle="collapse" class="collapsed" data-target="#collapseeight" aria-expanded="false" aria-controls="collapseeight">
                                                        <ul>
                                                            <li><i class="fa fa-file-o"></i></li>
                                                            <li><span class="lecture">Lecture 1.8</span></li>
                                                            <li><span class="head">Mid-Term exam </span></li>
                                                            <li><span class="time d-none d-md-block"></span></li>
                                                        </ul>
                                                    </a>
                                                </div>
                                                <div id="collapseeight" class="collapse" aria-labelledby="headingeight" data-parent="#accordionExample">
                                                    <div class="card-body">
                                                        <p> Mid-Term exam+preparation </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card">
                                                <div class="card-header" id="headingnine">
                                                    <a href="#" data-toggle="collapse" class="collapsed" data-target="#collapsenine" aria-expanded="false" aria-controls="collapsenine">
                                                        <ul>
                                                            <li><i class="fa fa-file-o"></i></li>
                                                            <li><span class="lecture">Lecture 2.1</span></li>
                                                            <li><span class="head">CSS Transition and transformation </span></li>
                                                            <li><span class="time d-none d-md-block"></span></li>
                                                        </ul>
                                                    </a>
                                                </div>
                                                <div id="collapsenine" class="collapse" aria-labelledby="headingnine" data-parent="#accordionExample">
                                                    <div class="card-body">
                                                        <p> CSS Transition and transformation, Animation, Background and its related styling, CSS Table, Grid system (bootstrap), Inspect element, JavaScript definition and Usage </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card">
                                                <div class="card-header" id="headingeleven">
                                                    <a href="#" data-toggle="collapse" class="collapsed" data-target="#collapseeleven" aria-expanded="false" aria-controls="collapseeleven">
                                                        <ul>
                                                            <li><i class="fa fa-file-o"></i></li>
                                                            <li><span class="lecture">Lecture 2.2</span></li>
                                                            <li><span class="head">Calculations </span></li>
                                                            <li><span class="time d-none d-md-block"></span></li>
                                                        </ul>
                                                    </a>
                                                </div>
                                                <div id="collapseeleven" class="collapse" aria-labelledby="headingeleven" data-parent="#accordionExample">
                                                    <div class="card-body">
                                                        <p>Calculation and some other functions, Calculator</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card">
                                                <div class="card-header" id="headingtwelve">
                                                    <a href="#" data-toggle="collapse" class="collapsed" data-target="#collapsetwelve" aria-expanded="false" aria-controls="collapsetwelve">
                                                        <ul>
                                                            <li><i class="fa fa-file-o"></i></li>
                                                            <li><span class="lecture">Lecture 2.3</span></li>
                                                            <li><span class="head">Final Project Assignment </span></li>
                                                            <li><span class="time d-none d-md-block"></span></li>
                                                        </ul>
                                                    </a>
                                                </div>
                                                <div id="collapsetwelve" class="collapse" aria-labelledby="headingtwelve" data-parent="#accordionExample">
                                                    <div class="card-body">
                                                        <p>Final Project Assignment</p>
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
                                        <p>A computer-science Masters Degree holder with more than 2 years of experience in the field of Web development. Real time training skills with more than a year of experience as a teacher in a college and then Shah IT institute.</p>

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
                        <?php
                        $sql = "SELECT * FROM `single_course` WHERE course_id='$id'";
                        $result = $conn->query($sql);
                        if (mysqli_num_rows($result) > 0) {
                        while ($row = mysqli_fetch_array($result)) {  
                        ?>
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
                        <?php } }?>
                    </div> <!-- row -->
                </div>
                <?php } }?>
            </div> <!-- row -->
            </div> <!-- container -->
    </section>