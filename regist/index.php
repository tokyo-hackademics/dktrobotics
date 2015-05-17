


<?php


$mode = $_POST["mode"];


if($_GET['pre_userid'] !=""){
	$mode = "regist_form";
}

switch($mode) {
	case"email_regist":
		$module = "email_regist.php";
	break;
	
	case"regist_form":
		$module = "regist_form.php";
	break;
	case"regist_confirm":
		$module = "regist_confirm.php";
	break;
	
	case"user_regist":
		$module = "user_regist.php";
	break;
	
	default:
		$module = "email_form.php";
	break;
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">


<link rel="stylesheet" href="css/common.css">
<script src="js/main.js"></script>


<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="../css/style.css"/>
<title>会員登録フォーム</title>
</head>
<body>
<?php
  require_once($module);
?>
</body>
</html>
