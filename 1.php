<!DOCTYPE html>
  <html>
  <head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, intial-scale=1.0"/>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <title>Showing image from Index.php page</title>
  <style>
	body{background-color: #f2f2f2; color: #333;}
	.main{box-shadow: 0 .125rem .25rem rgba(0,0,0,.075)!important;}
	h3{background-color: #4294D1; color: #f7f7f7; padding: 15px; border-radius: 4px; box-shadow: 0 1px 6px rgba(57,73,76,0.35);}
	.img-box{margin-top: 20px;}
	img{width: 600px; min-height: 400px; margin-bottom: 10px; box-shadow: 0 .125rem .25rem rgba(0,0,0,.075)!important; border:6px solid #f7f7f7;}
  </style>
  </head>

  <body>
	<!-------------------Main Content------------------------------>
  <div class="container main">
	<h3>Showing Image from Index.php Page</h3>
	<div class="img-box">
	<?php

	$id = $_GET["id"];
?>
<h1><?php echo $id;?></h1>
	</div>
  </div>
  </body>
  </html>