<?php
include "configlocation.php";
$a= $_GET["sid"];

$sql=mysql_query("select * from grp_acct WHERE grp_acct_name='$a'");
if(mysql_num_rows($sql)){
 $data = array();
 while($row=mysql_fetch_array($sql)) {
 $data[] = array (
    'id' => $row['grp_acct_id'],
	'sid'=> $row['grp_acct_id'] ,
	'name' => $row['grp_acct_type'] ,
	
 ); 
 }

  header('Content-type: application/json');
  echo json_encode($data);
// echo $data;
 }



?>