<?php
	include('../include/dbconn.php');
	$id=$_GET['id'];
	$result = mysql_query("DELETE FROM sheet_acct WHERE sheet_acct_id='$id' ");

?>