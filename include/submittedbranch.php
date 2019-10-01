<?php    $branch_id=  $_SESSION['user_id'];  
$qry = mysql_query("SELECT cust_atm_request_branch FROM cust_atm_request WHERE cust_id='$branch_id'");
$result = mysql_fetch_array($qry); 
$submittedbranch = $result['cust_atm_request_branch']; 

		?>