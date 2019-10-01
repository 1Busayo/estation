<?php
require("../dbconn.php"); 
$sql=mysql_query("select * from e_pump");
if(mysql_num_rows($sql)){
 $data = array();
 while($row=mysql_fetch_array($sql)) {
 $data[] = array (
    'id' => $row['p_id'],
	'pname' => $row['p_name'],
	'p_product' => $row['p_product'],
	'p_price' => $row['p_price']
 );
 }
  header('Content-type: application/json');
  echo json_encode($data);
}



?>