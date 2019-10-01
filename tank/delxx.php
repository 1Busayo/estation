<?php
	include('../include/dbconn.php');
	
	if(!empty($id=$_GET['id'])){
		
		 $hx = mysql_query("select cl_stock , tank_code FROM tank_stock Where tan_stock_id='$id' ") or die(mysql_error());
		  $hxz= mysql_fetch_array($hx);
		  
		  $v1 = $hxz['cl_stock'];
		  $v2 = $hxz['tank_code'];
		  
		  $hx2 = mysql_query("select tmw_open_stock FROM e_tank Where tank_code='$v2' ") or die(mysql_error());
		  $hxz2= mysql_fetch_array($hx2);
		  
		  $v11 = $hxz2['tmw_open_stock'];
		  $v12 = $v1 + $v11;
		  
		 
	 $query = mysql_query(" UPDATE e_tank SET  tmw_open_stock='0' ,date_stock=''  WHERE  tank_code='$v2' ") or die(mysql_error());
	
         mysql_query("DELETE FROM e_tank WHERE tan_stock_id='$id' ");
	    
	$result = mysql_query("DELETE FROM tank_stock WHERE tan_stock_id='$id' ");
	}
	
	
	
?>