<?php
	include('../include/dbconn.php');
	
	if(!empty($id=$_GET['id'])){
	$result = mysql_query("DELETE FROM e_prod WHERE prod_id='$id' ");
	}
	

	
?>