<?php
	include('../include/dbconn.php');
	$id=$_GET['id'];
	$result = mysql_query("DELETE FROM customerdetails WHERE c_id='$id' ");

?>