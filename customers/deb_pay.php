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
	window.location.href="addpay.php";
	
}

</script>
<?php /*
if (isset($_POST['submit'])) {
	
  $txt1 = mysql_real_escape_string( $_POST["txt1"] );
  $txt2 = mysql_real_escape_string( $_POST["txt2"] );
  $txt3 = mysql_real_escape_string( $_POST["txt3"] );
  $txt4 = mysql_real_escape_string( $_POST["txt4"] );
  $txt5 = mysql_real_escape_string( $_POST["txt5"] );
  
  
 
if(empty($txt1) || empty($txt2) || empty($txt3) || empty($txt5)){
  
  $mngs='Please fill the form completely';
	
	   header("location:view_cust.php?msg2=".$mngs);
				 exit();
	  
	   } else{
	

	$c =$_GET['erp_id'];
	
	
	
	//  $cust_id=  $_SESSION['user_id'];
	   	 
		//("UPDATE  cust_atm_request SET form_id='$cust_id', cust_atm_request_date='$txt1', cust_atm_request_states='$txt2', cust_atm_request_branch='$txt3', cust_atm_request_currency='$txt4', cust_atm_request_cardtype='$txt5', cust_atm_request_domiciliaryaccountnumber='$txt6', cust_atm_request_requesttype='$txt7', cust_atm_request_reasonforrequest='$txt8', cust_atm_request_accounttype='$txt9', cust_atm_request_accountname='$txt10', cust_atm_request_accountnumber='$txt11', cust_atm_request_cardpan1='$txt12', cust_atm_request_cardpan2='$txt13', cust_atm_request_account1='$txt14', cust_atm_request_account2='$txt15', cust_atm_request_fullname='$txt16', cust_atm_request_dob='$txt17', cust_atm_request_occupation='$txt18', cust_atm_request_mobilenumber='$txt19', cust_atm_request_email='$txt20', cust_atm_request_testquestion='$txt21', cust_atm_request_answer='$txt22' WHERE cust_id='$cust_id'
	   $query = mysql_query(" UPDATE customerdetails SET c_name ='{$txt1}' , c_address='{$txt2}' , c_phonenumber='{$txt3}' , c_accountnumber='{$txt4}' ,c_email='{$txt5}' WHERE  c_id='$c' ") or die(mysql_error());
	 
	
	$mng='You Have Updated  Customer '.$txt1.' Details successfully';
	
	   header("location:view_cust.php?msg=".$mng);
				 exit();


	 header("location: addpay.php ");
	  
	 
	 }
	  // echo "<div id='box'>$message</div>";
	} 

	*/?>


<?php

$c =$_GET['erp_id'];

$h = mysql_query("select * FROM customerdetails where c_id='$c' ") or die(mysql_error()); 
			 
		$tr = mysql_fetch_array($h);
		
		
?>
<h1>Pay Debt </h1>


	<form action="addpay_two.php?erp_id=<?php echo $_GET['erp_id']; ?>" method="POST">

	
<p><span>Customers Name</span> <input type="text" readonly name="txt1" class="form-control" type="text" data-validation="required" value='<?php echo $tr['c_name']; ?>'   style="width:200px;" data-validation-error-msg="Please Enter The Customers Name"  /></p>		




</select></p>
<p><span>Amount</span> <input   name="txt3" class="form-control"     data-validation-error-msg="Please Enter The Amount Paid by the customers"   type="text"    style="width:200px;" type="text"/></p>

		<br><br>
 <input   type="submit"  class="btn btn-primary" name="submit" value="SAVE"/>

		

 	</form>
	
			
		<br><br>	

</div>
		</div>
				</div>
		
		
		<div class="wrapper">
		</div>
		<!--======================== footer ============================-->
	
	
	
<link href="../css/bootstrap.min.css" type="text/css" rel="stylesheet"/>
<link href="../css/jquery-ui.css" type="text/css" rel="stylesheet"/>
	  <script src="../js/jquery/jquery-2.1.3.min.js"></script>
	 <script src="js/jquery/jquery-ui.min.js"></script>
<script src="../js/validator/jquery.form-validator.min.js"></script>
<script>

 $.validate( );
 // setup datepicker
    $("#datepicker").datepicker();
 $("#datepicker2").datepicker();
 
// Restrict presentation length
$('#request').restrictLength( $('#pres-max-length') );
 
 </script>
 <br><br>

