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
	window.location.href="add_ban.php";
	
}

</script>
<?php
if (isset($_POST['submit'])) {
	
  $txt1 = mysql_real_escape_string( $_POST["txt1"] );
  $txt2 = mysql_real_escape_string( $_POST["txt2"] );
  $txt3 = mysql_real_escape_string( $_POST["txt3"] );
  $txt4 = mysql_real_escape_string( $_POST["txt4"] );
  
  
 
if(empty($txt1) || empty($txt2) || empty($txt3)|| empty($txt4)){
   //  echo"Please fill the form completely";
	?>
    <script> alert ("Please fill the form completely");</script>
	  
	<? 
	  header("location:add_ban.php ");  
	
	  
	   } else{
	

	$c =$_GET['erp_id'];
	
	
	
	//  $cust_id=  $_SESSION['user_id'];
	
	$query = mysql_query(" UPDATE cb_banks SET cb_name ='{$txt1}', cb_accnam ='{$txt2}' , cb_accnum ='{$txt3}', cb_type ='{$txt4}' WHERE  cb_id='{$c}' ") or die(mysql_error());
	  header("location: add_ban.php ");
	  
	 
	 }
	  // echo "<div id='box'>$message</div>";
	} 

	?>


<?php

$c =$_GET['erp_id'];

$h = mysql_query("select * FROM cb_banks where cb_id='{$c}' ") or die(mysql_error()); 
			 
			$tr = mysql_fetch_array($h);
			
?>
<h3>Edit Bank Account Details</h3>


				
	<form action="add_ban_edit.php?erp_id=<?php echo $_GET['erp_id']; ?>" method="POST">


<p><span>Bank Name</span> <input type="text"  name="txt1" class="form-control" type="text" data-validation="custom"   data-validation-regexp="^([A-z\s]+)$" value='<?php echo $tr['cb_name']; ?>'   style="width:200px;" data-validation-error-msg="Please Enter The Bank Name"  /></p>		

<p><span>Account Name</span> <input type="text"  name="txt2" class="form-control" type="text" data-validation="custom"   data-validation-regexp="^([A-z\s]+)$" value='<?php echo $tr['cb_accnam']; ?>'   style="width:200px;" data-validation-error-msg="Please Enter The Account Name"  /></p>		

<p><span>Account Number</span> <input type="text"  name="txt3" class="form-control" type="text" data-validation="number"    value='<?php echo $tr['cb_accnum']; ?>'   style="width:200px;" data-validation-error-msg="Please Enter The Account Number"  /></p>		

<p><span>Account type</span> <input type="text"  name="txt4" class="form-control" type="text" data-validation="custom"   data-validation-regexp="^([A-z\s]+)$" value='<?php echo $tr['cb_type']; ?>'   style="width:200px;" data-validation-error-msg="Please Enter The Account Type"  /></p>		


		<br><br>
 <input   type="submit"  class="btn btn-primary" name="submit" value="SAVE"/>

		

 	</form>
	
<link href="../css/jquery-ui.css" type="text/css" rel="stylesheet"/>
	  <script src="../js/jquery/jquery-2.1.3.min.js"></script>
	 <script src="../js/jquery/jquery-ui.min.js"></script>
<script src="../js/validator/jquery.form-validator.min.js"></script>
<script>

 $.validate( );
 // setup datepicker
    $("#datepicker").datepicker();
 	</script>
	