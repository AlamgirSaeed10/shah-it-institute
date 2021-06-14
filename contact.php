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

    <section id="page-banner" class="pt-105 pb-130 bg_cover" data-overlay="8" style="background-image: url(images/page-banner-6.jpg)">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="page-banner-cont">
                        <h2>Contact</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Contact</li>
                            </ol>
                        </nav>
                    </div> <!-- page banner cont -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>

    <!--====== PAGE BANNER PART ENDS ======-->

    <!--====== CONTACT PART START ======-->
    <?php
    $success = "";
    $error = "";

    if (isset($_POST['contact-submit'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $subject = $_POST['subject'];
        $message = $_POST['message'];

        $sql = "INSERT INTO `contact_us`(`name`, `email`, `subject`, `phone`, `message`,`message_date`) 
        VALUES ('$name','$email','$subject','$phone','$message',date('y/m/d'))";

        if ($conn->query($sql) === TRUE) {
            $success = "Message has been sent successfully";
        } else {
            $error =  "Error: " . $sql . "<br>" . $conn->error;
        }
    }
    ?>

    <section id="contact-page" class="pt-90 pb-120 gray-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <div class="contact-from mt-30">
                        <div class="section-title">
                            <h5>Contact Us</h5>
                            <h2>Keep in touch</h2>
                        </div> <!-- section title -->
                        <div class="main-form pt-45">
                            <?php
                            if ($success) { ?>
                                <div>
                                    <p id="alert-message-success">
                                        <strong>Success! </strong> <?php echo $success; ?>
                                    </p>
                                </div><?php
                                    } else { ?>
                                <p id="alert-message-error">
                                    <?php echo $success; ?>
                                <?php }
                                ?>
                                <form method="post" data-toggle="validator">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="singel-form form-group">
                                                <input name="name" type="text" placeholder="Your name" data-error="Name is required." required="required">
                                                <div class="help-block with-errors"></div>
                                            </div> <!-- singel form -->
                                        </div>
                                        <div class="col-md-6">
                                            <div class="singel-form form-group">
                                                <input name="email" type="email" placeholder="Email" data-error="Valid email is required." required="required">
                                                <div class="help-block with-errors"></div>
                                            </div> <!-- singel form -->
                                        </div>
                                        <div class="col-md-6">
                                            <div class="singel-form form-group">
                                                <input name="subject" type="text" placeholder="Subject" data-error="Subject is required." required="required">
                                                <div class="help-block with-errors"></div>
                                            </div> <!-- singel form -->
                                        </div>
                                        <div class="col-md-6">
                                            <div class="singel-form form-group">
                                                <input name="phone" type="text" placeholder="Phone" data-error="Phone is required." required="required">
                                                <div class="help-block with-errors"></div>
                                            </div> <!-- singel form -->
                                        </div>
                                        <div class="col-md-12">
                                            <div class="singel-form form-group">
                                                <textarea name="message" placeholder="Messege" data-error="Please,leave us a message." required="required"></textarea>
                                                <div class="help-block with-errors"></div>
                                            </div> <!-- singel form -->
                                        </div>
                                        <p class="form-message"></p>
                                        <div class="col-md-12">
                                            <div class="singel-form">
                                                <button name="contact-submit" class="main-btn">Write Us</button>
                                            </div> <!-- singel form -->
                                        </div>
                                    </div> <!-- row -->
                                </form>
                        </div> <!-- main form -->
                    </div> <!--  contact from -->
                </div>
                <div class="col-lg-5">
                    <div class="contact-address mt-30">
                        <ul>
                            <li>
                                <div class="singel-address">
                                    <div class="icon">
                                        <i class="fa fa-home"></i>
                                    </div>
                                    <div class="cont">
                                        <p>Chaudhary heights first floor, Citi housing Jhelum Punjab </p>
                                    </div>
                                </div> <!-- singel address -->
                            </li>
                            <li>
                                <div class="singel-address">
                                    <div class="icon">
                                        <i class="fa fa-phone"></i>
                                    </div>
                                    <div class="cont">
                                        <p>+92 544-225094</p>
                                    </div>
                                </div> <!-- singel address -->
                            </li>
                            <li>
                                <div class="singel-address">
                                    <div class="icon">
                                        <i class="fa fa-envelope-o"></i>
                                    </div>
                                    <div class="cont">
                                        <p>info@shahitinstitute.com</p>
                                    </div>
                                </div> <!-- singel address -->
                            </li>
                        </ul>
                    </div> <!-- contact address -->
                    <div class="map mt-30">
                        <div id="contact-map"></div>
                    </div> <!-- map -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>

    <!--====== CONTACT PART ENDS ======-->

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