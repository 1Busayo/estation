<?php
	include('../include/dbconn.php');
	$id=$_GET['id'];
	$result = mysql_query("DELETE FROM usamacc WHERE macuser_id='$id' ");

?>