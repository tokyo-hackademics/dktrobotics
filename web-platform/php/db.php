$server="157.112.147.24";
$user="dktmooc_root";
$password="root";
$dbname="dktmooc_01";

$conn = mysql_connect($server, $user, $password);
mysql_select_db($dbname);