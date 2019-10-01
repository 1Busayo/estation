<?php
include "configlocation.php";
$a= $_GET["sid"];

$sql=mysql_query("select * from banbranch WHERE state_id='$a'");
if(mysql_num_rows($sql)){
 $data = array();
 while($row=mysql_fetch_array($sql)) {
 $data[] = array (
    'id' => $row['banbranch_id'],
	'sid'=> $row['state_id'] ,
	'name' => $row['banbranch_name'] ,
	
 ); 
 }

  header('Content-type: application/json');
  echo json_encode($data);
// echo $data;
 }



?>