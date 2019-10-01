<?php
require("../dbconn.php"); 
$a= $_GET["sid"];

$sql=mysql_query("select * from e_pump WHERE p_name='$a'");
if(mysql_num_rows($sql)){
 $data = array();
 while($row=mysql_fetch_array($sql)) {
 $data[] = array (
    'p_name' => $row['p_name'],
	'p_product'=> $row['p_product'] ,
	'p_price' => $row['p_price'] ,
	'tmw_open_m' => $row['tmw_open_m'] 
	
 ); 
 }

  header('Content-type: application/json');
  echo json_encode($data);
// echo $data;
 }



?>