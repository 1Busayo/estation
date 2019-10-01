<?php
require("../dbconn.php"); 
$a= $_GET["sid"];

$sql=mysql_query("select * from e_prod WHERE prod_name='$a'");
if(mysql_num_rows($sql)){
 $data = array();
 while($row=mysql_fetch_array($sql)) {
 $data[] = array (
    'p_name' => $row['prod_name'],
	'p_price' => $row['prod_price'] 
	
 ); 
 }

  header('Content-type: application/json');
  echo json_encode($data);
// echo $data;
 }



?>