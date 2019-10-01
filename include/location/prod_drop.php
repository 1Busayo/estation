<?php
require("../dbconn.php"); 

$sql=mysql_query("select * from e_prod ");
if(mysql_num_rows($sql)){
 $data = array();
 while($row=mysql_fetch_array($sql)) {
 $data[] = array (
    'p_name' => $row['prod_name'],
	'p_price'=> $row['prod_price'] ,
	'date' => $row['date'] ,
	
 ); 
 }

  header('Content-type: application/json');
  echo json_encode($data);
// echo $data;
 }



?>