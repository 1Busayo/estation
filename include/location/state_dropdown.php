<?php
include "configlocation.php";
$sql=mysql_query("select * from banstate");
if(mysql_num_rows($sql)){
 $data = array();
 while($row=mysql_fetch_array($sql)) {
 $data[] = array (
    'id' => $row['banstate_id'],
	'name' => $row['banstate_name']
 );
 }
  header('Content-type: application/json');
  echo json_encode($data);
}



?>