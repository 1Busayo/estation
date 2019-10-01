<?php
	include('../include/dbconn.php');
	$id=$_GET['id'];
	$result = mysql_query("DELETE FROM grp_acct WHERE grp_acct_id='$id' ");

?>