<?php
	include('../include/dbconn.php');
	$id=$_GET['id'];
	$result = mysql_query("DELETE FROM acc_tran WHERE acc_tran_id='$id' ");

?>