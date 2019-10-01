<?php
	include('../include/dbconn.php');
	
	if(!empty($id=$_GET['id'])){
		
		 $hx = mysql_query("select tmw_open_stock, new_stock FROM e_tank Where tank_code='$id' ") or die(mysql_error());
		  $hxz= mysql_fetch_array($hx);
		  
		  $v1 = $hxz['tmw_open_stock'];
		  $v2 = $hxz['new_stock'];
		  
		
		  $v12 = $v1 - $v2;
		  
		 
	 $query = mysql_query(" UPDATE e_tank SET  tmw_open_stock='$v12', new_stock='' , date_add_stock='' WHERE  tank_code='$id' ") or die(mysql_error());
	 
	  mysql_query("DELETE FROM hist_tank WHERE tank_code='$id' ");
	

	}
	
	
	
?>