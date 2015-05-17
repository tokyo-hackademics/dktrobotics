<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title>files</title>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">


<link href="css/bootstrap.css" rel="stylesheet">



<script src="js/angular/angular.js"></script>


<script src="js/jquery-2.1.3.min.js"></script> 
<script src="js/bootstrap.min.js"></script> 

<link rel="stylesheet" href="css/common.css">

<link rel="stylesheet" href="css/scrollpath.css" /> 

<link rel="stylesheet" href="css/course.css">

<link rel="stylesheet" href="css/file.css">


<script src="js/main.js"></script>

<script src="js/jquery.scrollpath.js"></script>

<script src="js/course.js"></script>
<script src="js/file.js"></script>

<script src="js/imagesloaded.pkgd.min.js"></script>
<script src="js/masonry.pkgd.min.js"></script>
<script src="js/classie.js"></script>
<script src="js/cbpGridGallery.js"></script>

</head>



<body id="wrapper">

<section class="container-fluid bg">
	

<div id="grid-gallery" class="grid-gallery">
	<section class="grid-wrap">
		<ul class="grid">
			<li class="grid-sizer"></li>



<?php
if ($dir = opendir("./robot-prog")) {
    while (($file = readdir($dir)) !== false) {
        if ($file != "." && $file != "..") {


 ?>
			<li>
				<figure>
					<img src="img/flac.jpg" alt="img01"/>
					<figcaption> <h3><?php echo "$file"; ?></h3></figcaption>
				</figure>
			</li>


 <?php
        }
    } 
    closedir($dir);
}
?>


		</ul>
	</section>









	<section class="slideshow">
		<ul>

<?php
if ($dir = opendir("./robot-prog")) {
    while (($file = readdir($dir)) !== false) {
        if ($file != "." && $file != "..") {


 ?>


			<li>
				<figure>
					<figcaption>
						<h3><?php echo "$file"; ?></h3>
						
					</figcaption>
					<img src="img/flac.jpg" alt="img01"/>
				</figure>
			</li>

 <?php
        }
    } 
    closedir($dir);
}
?>


			
		</ul>





		<nav>
			<span class="icon nav-prev"></span>
			<span class="icon nav-next"></span>
			<span class="icon nav-close"></span>
		</nav>
		<div class="info-keys icon">Navigate with arrow keys</div>
	</section><!-- // slideshow -->
</div><!-- // grid-gallery -->




<script>
	new CBPGridGallery( document.getElementById( 'grid-gallery' ) );
</script>




</section>


</body>

