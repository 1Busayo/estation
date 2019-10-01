<?php
	include('../include/dbconn.php');
	$id=$_GET['id'];
	$result = mysql_query("DELETE FROM pay_spe WHERE sp_id='$id' ");

?>