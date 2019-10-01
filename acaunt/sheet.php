<?php  include '../include/dbconn.php';?>
<?php  include '../include/functions.php';?>
<?php  include '../include/session.php';

if (!logged_in()) {
			redirect_to("../index.php");
		}


$accname = trim(strtolower($_POST['accname']));
$accname = mysql_real_escape_string($accname);

$query = "SELECT sheet_acct_name FROM  sheet_acct WHERE sheet_acct_name='{$accname}' LIMIT 1";
$result = mysql_query($query);
$num = mysql_num_rows($result);

echo $num;


?>