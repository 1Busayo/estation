<?php  include '../include/dbconn.php';?>
<?php  include '../include/functions.php';?>
<?php  include '../include/session.php';

if (!logged_in()) {
			redirect_to("../index.php");
		}

?>
<script>
var bod = document.getElementById("bdy");
if (!bod){
	window.location.href="vat_set.php";
	
}

</script>
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

$h = mysql_query("select * FROM va_t where vat_id='{$c}' ") or die(mysql_error()); 
			 
			$tr = mysql_fetch_assoc($h);
			

?>


<?php 
 
$acd= $_GET['rp_id'];


	 if($acd==0){
		 
		 $pop= mysql_query("UPDATE va_t SET vat_status = '1' WHERE vat_id='{$c}' ") or die(mysql_error()); 
		 ?>
					<p>THE OF VAT HAS BEEN ENABLED</p>
                 <?php echo $tr['vat_code']; ?>      <p> CAN NOW APPEAR ON THE INVOICE OR RECIPT</p> 
					<?php }else{ 
					$pop= mysql_query("UPDATE va_t SET vat_status = '0' WHERE vat_id='{$c}' ") or die(mysql_error());
					
					?>
				 		<p>THE OF VAT HAS BEEN DISABLED </p>
				<?php echo $tr['vat_code']; ?>		<p> IT WILL NOT APPEAR ON ANY INVOICE OR RECIPT YOU CREATE</p>
					<?php }?> 
					<input type="submit" id="read" class="btn btn-primary" name="submit" value="close"/>
<script>

function leave() {
  window.location = "vat_set.php";
}
	
	$("#read").click(function() 
{
	
	leave();
});
</script>

     
			