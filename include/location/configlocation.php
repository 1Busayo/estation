 <?php
	

	 //1. create a database connenction
$con = mysql_connect("localhost","root","");
 if (!$con){
    die("Database connecton failed" . mysql_error());
}

 mysql_select_db("ocss");
?>

