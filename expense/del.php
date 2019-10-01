<?php
	include('../include/dbconn.php');
	
	if(!empty($id=$_GET['id'])){
	$result = mysql_query("DELETE FROM exp_pay WHERE pay_id='$id' ");
	}
	

	
?>