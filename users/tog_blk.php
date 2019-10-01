 <?php //require_once("../include/session.php"); ?>
 <?php require_once "../include/dbconn.php" ;?>
 <?php require_once("../include/functions.php"); ?>
<?php //confirm_logged_in() ;?>
			
<style>

.form_style #contentText {
	border: 1px solid #CCCCCC;
	border-radius: 5px;
}
.form_style #FormSubmit {
	display: block;
	background: #6C93AD;
	border: 1px solid #4B6170;
	color: #FFFFFF;
	margin-top: 5px;
	padding: 6px 9px 6px 9px;
	border-radius: 5px;
}
#responds{
	margin: 0px;
	padding: 0px;
	list-style: none;
}
#responds li {
	list-style: none;
	padding: 15px;
	background: rgb(221, 240, 255);
	margin-bottom: 5px;
	border-radius: 5px;
	max-width: 400px;
	font-family: Georgia, "Times New Roman", Times, serif;
	font-size: 13px;
}
#responds li.sel {
	background: rgb(255, 221, 221);
}
.del_wrapper{float:right;}
.content_wrapper {
	max-width: 400px;
	margin-right: auto;
	margin-left: auto;
}
</style>



<?php

$c =$_GET['erp_id'];

$h = mysql_query("select * FROM usamacc where macuser_id='{$c}' ") or die(mysql_error()); 
			 
			$tr = mysql_fetch_array($h);
			

?>


<?php 
 
$acd= $_GET['rp_id'];


			
 $pop= mysql_query("UPDATE usamacc SET mac_stat = '$acd' WHERE macuser_id='{$c}' ") or die(mysql_error()); 
			 
	 if($acd==0){
		 
		 $pop= mysql_query("UPDATE usamacc SET mac_stat = '1' WHERE macuser_id='{$c}' ") or die(mysql_error()); 
		 ?>
				<?php echo $tr['mac_name']; ?>	<p>Account Has Been Blocked</p>
                 <?php echo $tr['mac_name']; ?>      <p> Can Not Login</p> 
					<?php }else{ 
					$pop= mysql_query("UPDATE usamacc SET mac_stat = '0' WHERE macuser_id='{$c}' ") or die(mysql_error());
					
					?>
				<?php echo $tr['mac_name']; ?>		<p>Account Is Now Opened </p>
				<?php echo $tr['mac_name']; ?>		<p> Can Now Login</p>
					<?php }?> 
					<input type="submit" id="read" class="btn btn-primary" name="submit" value="close"/>
<script>

function leave() {
  window.location = "index.php";
}
	
	$("#read").click(function() 
{
	
	leave();
});
</script>

     
			