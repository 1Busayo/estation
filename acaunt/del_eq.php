<?php
	include('../include/dbconn.php');
	$id=$_GET['id'];
	$result = mysql_query("DELETE FROM owners_prop WHERE own_id='$id' ");

?>