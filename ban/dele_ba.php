<?php
	include('../include/dbconn.php');
	$id=$_GET['id'];
	$result = mysql_query("DELETE FROM cb_banks WHERE cb_id='$id' ");

?>