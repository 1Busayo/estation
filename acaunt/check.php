<?php  include '../include/dbconn.php';?>
<?php  include '../include/functions.php';?>
<?php  include '../include/session.php';

if (!logged_in()) {
			redirect_to("../index.php");
		}


$username = trim(strtolower($_POST['username']));
$username = mysql_real_escape_string($username);

$query = "SELECT grp_acct_name FROM  grp_acct WHERE grp_acct_name='{$username}' LIMIT 1";
$result = mysql_query($query);
$num = mysql_num_rows($result);

echo $num;


?>