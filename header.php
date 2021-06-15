<header id="header-part">
      <div class="navigation navigation-2 navigation-3">
          <div class="container">
              <div class="row no-gutters">
                  <div class="col-lg-11 col-md-10 col-sm-9 col-12">
                      <nav class="navbar navbar-expand-lg">
                          <a class="navbar-brand" href="index.php">
                          <div class="logo">
                              <img src="images/logo.png" alt="shah IT institute logo" style="width: 80px;">
                          </div>
                          </a>
                          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                              <span class="icon-bar"></span>
                              <span class="icon-bar"></span>
                              <span class="icon-bar"></span>
                          </button>

                          <div class="collapse navbar-collapse sub-menu-bar" id="navbarSupportedContent">
                              <ul class="navbar-nav ml-auto">
                                  <li class="nav-item">
                                      <a  href="index.php" class=" <?php if(basename($_SERVER['PHP_SELF']) == "index.php" ){
                                          echo "active";
                                      }else{
                                          echo "";
                                      } ?>">Home</a>
                                  </li>
                                  <li class="nav-item">
                                    <a  href="courses.php" class=" <?= (basename($_SERVER['PHP_SELF']) == "courses.php" )? "active" : ""; ?>">Courses</a>
                                      <ul class="sub-menu">
                                          <li><a href="courses-singel.php" >Programming Fundamentals</a></li>
                                          <li><a href="courses-singel.php">Graphic Design</a></li>
                                          <li><a href="courses-singel.php">Mobile App Development</a></li>
                                          <li><a href="courses-singel.php">Web App Development</a></li>
                                          <li><a href="courses-singel.php">Unity Game Development</a></li>
                                          <li><a href="courses-singel.php">Microsoft Office</a></li>
                                          <li><a href="courses-singel.php">Content Writing</a></li>
                                      </ul>
                                  </li>
                                  <li class="nav-item">
                                  <a  href="teachers.php" class=" <?= (basename($_SERVER['PHP_SELF']) == "teachers.php" )? "active" : ""; ?>">Our teachers</a>
                                  </li>
                                  <li class="nav-item">
                                      <a  href="blog.php" class=" <?= (basename($_SERVER['PHP_SELF']) == "blog.php" )? "active" : ""; ?>">Blog</a>
                                  </li>
                                  <li class="nav-item">
                                  <a  href="about.php" class=" <?= (basename($_SERVER['PHP_SELF']) == "about.php" )? "active" : ""; ?>">About Us</a>
                                  </li>
                                  <li class="nav-item">
                                      <a  href="contact.php" class=" <?= (basename($_SERVER['PHP_SELF']) == "contact.php" )? "active" : ""; ?>">Contact Us</a>
                                  </li>
                              </ul>
                          </div>
                      </nav> <!-- nav -->
                  </div>
                  <div class="col-lg-1 col-md-2 col-sm-3 col-3">
                      <div class="right-icon text-right">
                          <ul>
                              <!-- <li><a href="#" id="search"><i class="fa fa-search"></i></a></li> -->
                          </ul>
                      </div> <!-- right icon -->
                  </div>
              </div> <!-- row -->
          </div> <!-- container -->
      </div>
  </header>