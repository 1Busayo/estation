<?php
include "configlocation.php";
$sql=mysql_query("select * from grp_acct");
if(mysql_num_rows($sql)){
 $data = array();
 while($row=mysql_fetch_array($sql)) {
 $data[] = array (
    'id' => $row['grp_acct_id'],
	'name' => $row['grp_acct_name']
 );
 }
  header('Content-type: application/json');
  echo json_encode($data);
}



?>