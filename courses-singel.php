<!doctype html>
<html lang="en">

<head>
    <?php include("database/connection.php"); ?>
    <?php include("link-libraries.php"); 
    // session_start();
    // print_r($_SESSION['idd']);
    ?>
</head>

<body>

<?php 
$id = $_GET['id'];
print_r($id);
$t_id = "";
$c_name = "";
$c_img = "";

?>

    <!--====== PRELOADER PART START ======-->
    <!-- <?php include("splash-loader.php"); ?> -->
    <!--====== PRELOADER PART START ======-->

    <!--====== HEADER PART START ======-->
    <?php include("header.php"); ?>
    <!--====== HEADER PART ENDS ======-->

    <!--====== PAGE BANNER PART START ======-->
    <?php
      $sql = "SELECT * FROM `course_deatil` where course_id ='$id'";
      $result = $conn->query($sql);
      if (mysqli_num_rows($result) > 0) {
          while ($row = mysqli_fetch_array($result)) {
             $c_img = $row['course_image'];
              $c_name = $row['course_name'];
          }
      }
        ?>

    
<?php
 if ($id=="web-001")
 {
     include("sub-pages/web-development.php"); 
 }
 if ($id=="dmm-003")
 {
     include("sub-pages/Digital-Media-Marketing.php"); 
 }
 if ($id=="gfx-002")
 {
     include("sub-pages/Graphic-Design.php"); 
 }
 if ($id=="pf-004")
 {
     include("sub-pages/Programming-Fundamentals.php"); 
 }
 if ($id=="mad-005")
 {
     include("sub-pages/Mobile-Application-Development.php"); 
 }
 if ($id=="gad-006")
 {
     include("sub-pages/Game-Development.php"); 
 }
 if ($id=="cw-007")
 {
     include("sub-pages/Content-Writing.php"); 
 }
 if ($id=="mso-008")
 {
     include("sub-pages/Microsoft-Office.php"); 
 }


 ?>
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