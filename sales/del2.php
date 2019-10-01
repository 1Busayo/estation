<?php
	include('../include/dbconn.php');
	$id=$_GET['id'];
	$result = mysql_query("DELETE FROM cust_pay WHERE sales_code='$id' ");
    $result = mysql_query("DELETE FROM erp_inv WHERE sales_code='$id' ");

?>