
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<link href="css/bootstrap.css" rel="stylesheet">

<script src="js/angular/angular.js"></script>


<script src="js/jquery-2.1.3.min.js"></script> 
<script src="js/bootstrap.min.js"></script> 

<link rel="stylesheet" href="css/common.css">

<link rel="stylesheet" href="css/scrollpath.css" /> 

<link rel="stylesheet" href="css/course.css">


<script src="js/main.js"></script>

<script src="js/jquery.scrollpath.js"></script>

<script src="js/course.js"></script>

<title>Welcome!</title>
</head>

<body>
<h1>Welcome!</h1>


<h2> Login or Resister to join us!</h2>

<a class="button_common button_done" href="login.php" style="text-decoration: none;"><h2>ログイン</h2></a>  <a class="button_common button_done cancel" href="regist/index.php" style="text-decoration: none;"><h2>新規登録</h2></a>


</body>
</html>




<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title>会員ページ</title>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">


<link href="css/bootstrap.css" rel="stylesheet">



<script src="js/angular/angular.js"></script>


<script src="js/jquery-2.1.3.min.js"></script> 
<script src="js/bootstrap.min.js"></script> 

<link rel="stylesheet" href="css/common.css">

<link rel="stylesheet" href="css/scrollpath.css" /> 

<link rel="stylesheet" href="css/course.css">


<script src="js/main.js"></script>

<script src="js/jquery.scrollpath.js"></script>

<script src="js/course.js"></script>


</head>



<body id="wrapper">

<section class="container-fluid bg">
	<h1 class="text-center">Welcome to DKT MOOC,<?php print $loginUser; ?>!</h1>

	<section>
<center>
<ul class="ch-grid">
	<li>
	<div class="ch-item ch-img-1">				
		<div class="ch-info-wrap">
			<div class="ch-info">
				<div class="ch-info-front ch-img-1"></div>
				<div class="ch-info-back">
					<h3>LEARN</h3>
					<p></p>
				</div>	
			</div>
		</div>
	</div>
</li>
	<li>
	<div class="ch-item ch-img-2">				
		<div class="ch-info-wrap">
			<div class="ch-info">
				<div class="ch-info-front ch-img-2"></div>
				<div class="ch-info-back">
					<h3>FILES</h3>
					<p></p>
				</div>	
			</div>
		</div>
	</div>
</li>
	<li>
	<div class="ch-item ch-img-3">				
		<div class="ch-info-wrap">
			<div class="ch-info">
				<div class="ch-info-front ch-img-3"></div>
				<div class="ch-info-back">
					<h3>MEETING</h3>
					<p></p>
				</div>	
			</div>
		</div>
	</div>
</li>

	<li>
	<div class="ch-item ch-img-4">				
		<div class="ch-info-wrap">
			<div class="ch-info">
				<div class="ch-info-front ch-img-4"></div>
				<div class="ch-info-back">
					<h3>CHAT</h3>
					<p></p>
				</div>	
			</div>
		</div>
	</div>
</li>
	<li>
	<div class="ch-item ch-img-5">				
		<div class="ch-info-wrap">
			<div class="ch-info">
				<div class="ch-info-front ch-img-5"></div>
				<div class="ch-info-back">
					<h3>BATTLE</h3>
					<p></p>
				</div>	
			</div>
		</div>
	</div>
</li>
	<li>
	<div class="ch-item ch-img-6">				
		<div class="ch-info-wrap">
			<div class="ch-info">
				<div class="ch-info-front ch-img-6"></div>
				<div class="ch-info-back">
					<h3>EVENT</h3>
					<p></p>
				</div>	
			</div>
		</div>
	</div>
</li>
</ul>
</center>


<script>
$(".ch-img-1").click(function() {
     window.location = "./course.html";
 });
$(".ch-img-2").click(function() {
     window.location = "./file.php";
 });
$(".ch-img-3").click(function() {
     window.location = "./meeting.html";
 });
$(".ch-img-4").click(function() {
     window.location = "./bullet.php";
 });
$(".ch-img-5").click(function() {
     window.location = "./battle.html";
 });
$(".ch-img-6").click(function() {
     window.location = "./calendar.html";
 });
</script>



	</section>

</section>



</body>

