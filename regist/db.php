<?php

  $server = "sv3.php.xdomain.ne.jp";
  $user = "dktmooc_root";
  $password = "root";
  $dbname = "dktmooc_01";
  

  $conn = mysql_connect($server, $user, $password);

  mysql_select_db($dbname);
?>
