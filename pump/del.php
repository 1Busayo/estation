<?php
	include('../include/dbconn.php');
	
	if(!empty($id=$_GET['id'])){
	$result = mysql_query("DELETE FROM e_pump WHERE p_id='$id' ");
	}
	

	
?>