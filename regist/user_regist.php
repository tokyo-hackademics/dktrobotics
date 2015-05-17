
<head><link href="css/bootstrap.css" rel="stylesheet">


<script src="js/angular/angular.js"></script>

<script src="js/jquery-2.1.3.min.js"></script> 
<script src="js/bootstrap.min.js"></script> 

<link rel="stylesheet" href="css/common.css">
<script src="js/main.js"></script>

<script src="js/fastclick.js"></script>

<title>Resister</title>
</head>


<?php

$formList = array('mode', 'input_userid', 'input_password', 'input_name', 'input_email');

foreach($formList as $value) {
  $$value = $_POST[$value];
}
$error = array();

require_once('db.php');

$query = "select userid from members where userid = '$input_userid'"; 
$resultId = mysql_query($query);
	
if(mysql_num_rows($resultId) > 0 ) { 
  array_push($error,"このユーザーIDはすでに登録されています。");
}
	
if(count($error) == 0) {
  
  mysql_query("begin");
  
  $query = "insert into members(userid, password, name, email) values('$input_userid','$input_password','$input_name','$input_email')";
  $result = mysql_query($query);
  
  if($result){  
	
    mysql_query("commit");
  
    mb_language("japanese"); 
    mb_internal_encoding("utf-8");
  
    $to = $input_email;
    $subject = "会員登録URL送信メール";
    $message = "会員登録ありがとうございました。\n"."登録いただいたユーザーIDは[$input_userid]です。";
    $header = "From:info@dktmooc.jp";
  
    if(!mb_send_mail($to, $subject, $message, $header)) { 
      array_push($error,"メールが送信できませんでした。<br>ただしデータベースへの登録は完了しています。");
    }
  } else {

    mysql_query("rollback");	
    array_push($error, "データベースに登録できませんでした。");
  }
}
	
if(count($error) == 0) {	
?>
<table>
  <caption>データベース登録完了</caption>
  <tr>
    <td class="item">Thanks：</td>
    <td>登録ありがとうございます。<br>登録完了のお知らせをメールで送信しましたので、ご確認ください。</td>
  </tr>
</table>

<center><a class="button_common button_done" href="purchase.html" style="text-decoration: none;"><h2>TOP</h2></a> </center>



<?php

} else {
?>
<table>
  <caption>データベース登録エラー</caption>
  <tr>
    <td class="item">Error：</td>
    <td>
  <?php
  foreach($error as $value) {
    print $value;
  ?>
    </td>
  </tr>
</table>

<center><a class="button_common button_done" href="purchase.html" style="text-decoration: none;"><h2>TOP</h2></a></center>


<?php
  }
}
?>
