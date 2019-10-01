<?php
include '../include/dbconn.php';
/*
$date='18/09/2015';
 $txt1= date_format($date,'yyy-mm-dd');*/
 
 $var = '09/27/2015';
//$date = str_replace('/', '-', $var);
echo date('Y-m-d', strtotime($var)).'<br>';


 $var = '09/11/2015';
//$date = str_replace('/', '-', $var);
echo date('d/m/Y', strtotime($var)).'<br>';



$var = '2015-09-11'; 
$date = str_replace('-', '/', $var);
echo date('m/d/y', strtotime($date));

/*
echo $txt1;
 $query = mysql_query(" INSERT INTO tag ( `datefor` ) VALUES  ('{$txt1}') ") or die(mysql_error());
*/	 

?>