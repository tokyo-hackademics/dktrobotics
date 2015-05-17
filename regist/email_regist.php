<?php


$email = $_POST["email"];


$error = array();


require_once("db.php");


if($email == "") { 	
  array_push($error, "メールアドレスを入力してください。"); 
} else {

  $pre_user_id = uniqid(rand(100,999));	
  $query = "insert into members(pre_userid,email) values('$pre_user_id','$email')";
	
  $result = mysql_query($query);
	

  if($result == false) {
    array_push($error,"データベースに登録できませんでした。");
  } else {
	

  mb_language("japanese");  
  mb_internal_encoding("utf-8");
	
  $to = $email;
  $subject = "会員登録URL送信メール";
  $message = "以下のURLより会員登録してください。\n".
  "http://dktmooc.php.xdomain.jp/regist/index.php?pre_userid=$pre_user_id";
  $header = "From:info@dktmooc.jp";
	
  if(!mb_send_mail($to, $subject, $message, $header)) {  //メール送信に失敗したら
    array_push($error,"メールが送信できませんでした。<br><a href='http://localhost:8888/members/regist/index.php?pre_userid=$pre_user_id'>遷移先</a>");
	}
  }
}


if(count($error) > 0) {  
  foreach($error as $value) {
?>
<table>
  <caption>メールアドレス登録エラー</caption>
  <tr>
    <td class="item">Error：</td>
    <td><?php print $value; ?></td>
  </tr>
</table>



<?php
  }  
} else { 
?>
<table>
  <caption>メール送信成功しました。</caption>
  <tr>
    <td class="item">送信先メールアドレス：</td>
    <td><?php print $email ?></td>
  </tr>
</table>
<?php
}
?>