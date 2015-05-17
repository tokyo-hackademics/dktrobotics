<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title></title>

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

<?php

$q1 = htmlspecialchars($_POST["q1"], ENT_QUOTES);
$q2 = htmlspecialchars($_POST["q2"], ENT_QUOTES);
$q3 = htmlspecialchars($_POST["q3"], ENT_QUOTES);
$q4 = htmlspecialchars($_POST["understand"], ENT_QUOTES);
$q5 = htmlspecialchars($_POST["fun"], ENT_QUOTES);

?>

<h1>レッスンの体験は以上です！ありがとうございました！<br>フィードバックにご協力ください！</h1>
<iframe src="https://docs.google.com/forms/d/1fRLd3qIx2rzZhreyEyHcbtq_szske-6OvGcA_amBZGw/viewform?embedded=true" width="760" height="500" frameborder="0" marginheight="0" marginwidth="0">Loading...</iframe>



</section>



</body>
