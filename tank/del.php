<?php
	include('../include/dbconn.php');
	
	if(!empty($id=$_GET['id'])){
	$result = mysql_query("DELETE FROM e_tank WHERE tank_id='$id' ");
	}
	

	
?>