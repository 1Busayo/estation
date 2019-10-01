<?php
  
	error_reporting(E_ALL ^ E_DEPRECATED);
	date_default_timezone_set("Africa/Lagos");
 // error_reporting(0);
	 //1. create a database connenction
$connection = mysql_connect("localhost","root","");
 if (!$connection){
    die("Database connecton failed" . mysql_error());
}
//2. Select a database to use
$db_select = mysql_select_db("e_station");
 if (!$db_select){
  die ("Database selection failed:" . mysql_error());
 } ?>
