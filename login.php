<?php

session_start();

if(!isset($_POST['login'])) {

  inputForm();
} else {


  $formUserId = $_POST['formUserid'];
  $formPassword = $_POST['formPassword'];
	

  if(($formUserId == "") || ($formPassword == "")) {
	

  error(1);
		
  } else { 

  require_once('regist/db.php');


  $query = "select * from members";
  $result = mysql_query($query);
		

  while($data = mysql_fetch_array($result)) {
    if($data['userid'] == $formUserId) {  
	  $dbPassword = $data['password'];
	  break;
	}
  }
	

  mysql_close($conn);
  

  if(!isset($dbPassword)) {
    error(2);
  } else {

    if($dbPassword != $formPassword){
	  error(3);
	} else {

	  $_SESSION['loginUser'] = $formUserId;
	  header("Location:top.php");
	  }
	}
  }
}
?>
<?php
  function inputForm() {
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>ログイン</title>
</head>
<body>
  <h1>ログインページ</h1>
  <form action="login.php" method="post">
  <label for="userid">ユーザーID</label>：
  <input type="text" name="formUserid" id="userid"/>
  <br />
  <label for="password">パスワード</label>：
  <input type="text" name="formPassword" id="password"/>
  <br />
  <input type="submit" name="login" value="ログイン" />
</form>
</body>
</html>
<?php
}

function error($errorType) {
  
  switch($errorType) {	
    
    case 1:
    $errorMsg = "IDとパスワードを入力してください。";
    break;
    
    case 2:
    $errorMsg = "IDが違います";
    break;
    
    case 3:
    $errorMsg = "パスワードが違います";
    break;
}
?>	
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>ログイン</title>
</head>
<body>
<h1>エラーページ</h1>
<?php
  print $errorMsg;
?>
</body>
</html> 
<?php
}
?>
	
