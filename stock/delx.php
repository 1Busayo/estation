<?php
	include('../include/dbconn.php');
	
	if(!empty($id=$_GET['id'])){
		
		 $hx = mysql_query("select stock_code, stock_sold FROM stock_sales Where sal_id='$id' ") or die(mysql_error());
		  $hxz= mysql_fetch_array($hx);
		  
		  $v1 = $hxz['stock_code'];
		  $v2 = $hxz['stock_sold'];
		  
		  $hx2 = mysql_query("select stock_qty FROM e_stock Where stock_code='$v1' ") or die(mysql_error());
		  $hxz2= mysql_fetch_array($hx2);
		  
		  $v11 = $hxz2['stock_qty'];
		  $v12 = $v2 + $v11;
		  
		 
	 $query = mysql_query(" UPDATE e_stock SET  stock_qty='{$v12}'  WHERE  stock_code='$v1' ") or die(mysql_error());
	

	$result = mysql_query("DELETE FROM stock_sales WHERE sal_id='$id' ");
	}
	
	
	
?>