<?php
	include('../include/dbconn.php');
	
	if(!empty($id=$_GET['id'])){
	$result = mysql_query("DELETE FROM e_stock WHERE stock_id='$id' ");
	}
	
	if(!empty($id=$_GET['id1'])){
	$result = mysql_query("DELETE FROM stock_hist WHERE hist_id='$id' ");
	}
	
?>