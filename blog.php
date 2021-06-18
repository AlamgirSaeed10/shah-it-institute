<!doctype html>
<html lang="en">
<head>
   
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
    
    <section id="page-banner" class="pt-105 pb-130 bg_cover" data-overlay="8" style="background-image: url(images/page-banner-4.jpg)">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="page-banner-cont">
                        <h2>Few tips for get better</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Blog</li>
                                </ol>
                        </nav>
                    </div>  <!-- page banner cont -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>
    
    <!--====== PAGE BANNER PART ENDS ======-->
   
    <!--====== BLOG PART START ======-->
 
      

    <section id="blog-singel" class="pt-90 pb-120 gray-bg">
        <div class="container">
           <div class="row">
           <?php
                    $link = "";
                    $title = "";
                    $pubDate = "";
                    $category ="";
                    $description ="";
                    
                    $map_url = "https://www.techrepublic.com/rssfeeds/articles/"; 
                    if (($response_xml_data = file_get_contents($map_url))===false){
                        echo "Error fetching XML\n";
                    } else {
                    libxml_use_internal_errors(true);
                    $data = simplexml_load_string($response_xml_data);
                    if (!$data) {
                        echo "Error loading XML\n";
                        foreach(libxml_get_errors() as $error) {
                            echo "\t", $error->message;
                        }
                    } else {
                        $category  =  $data->channel->category;
                        foreach($data->channel->item as $item)
                        {
                            $link =  (string)$item->link;
                            $title = (string)$item->title;
                            $pubDate = (string)$item->pubDate;
                            $description = (string)$item->description;
                            ?>
              <div class="col-lg-6">
                  <div class="blog-details mt-30">
                     <div class="cont">
                          <h5><?php echo $title;?></h5>
                          <ul>
                               <li><a href="#"><i class="fa fa-calendar"></i><?php echo " ".$pubDate;?></a></li>
                               <li><a href="#"><i class="fa fa-tags"></i><?php echo $category?></a></li>
                           </ul>
                           <p><?php echo $description; ?></p>
                           <div class="singel-form">
                            <button class="btn" ><a href="<?php echo $link;?>">Read more</a></button>
                            </div>
                      </div> <!-- cont -->
                  </div> <!-- blog details -->
              </div> 
              <?php   
              }
              }
            }
            ?>

           </div> <!-- row -->
        </div> <!-- container -->
    </section>
    
    <!--====== BLOG PART ENDS ======-->
   
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
