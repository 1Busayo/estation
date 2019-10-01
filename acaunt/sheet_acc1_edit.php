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
	window.location.href="sheet_acc1.php";
	
}

</script>
<?php
if (isset($_POST['submit'])) {
	
  $txt1 = mysql_real_escape_string( $_POST["txt1"] );
  $txt2 = mysql_real_escape_string( $_POST["txt2"] );
  
  
 
if(empty($txt1) ){
   //  echo"Please fill the form completely";
	?>
    <script> alert ("Please fill the form completely");</script>
	  
	<? 
	  header("location:sheet_acc1.php ");  
	
	  
	   } else{
	

	$c =$_GET['erp_id'];
	
	
	
	//  $cust_id=  $_SESSION['user_id'];
	
	$query = mysql_query(" UPDATE sheet_acct SET grp_acct_name ='{$txt1}',sheet_acct_name ='{$txt2}' WHERE  sheet_acct_id='$c' ") or die(mysql_error());
	  header("location: sheet_acc1.php ");
	  
	 
	 }
	  // echo "<div id='box'>$message</div>";
	} 

	?>


<?php

$c =$_GET['erp_id'];

$h = mysql_query("select * FROM sheet_acct where sheet_acct_id='$c' ") or die(mysql_error()); 
			 
		$tr = mysql_fetch_array($h);
		
?>
<h3>Edit Account Sheet Name</h3>


				
	<form action="sheet_acc1_edit.php?erp_id=<?php echo $_GET['erp_id']; ?>" method="POST">

<p><span>GroupAccount/Ledger</span>
	 <select name="txt1" id="txt1"     class="form-control" data-validation="required"  style="width:200px;" data-validation-error-msg="Please Select The Type Of GroupAccount/Ledger You Want To Create" >
   <?php
 echo	"<option value=' "; echo $tr['grp_acct_name']; echo" '>"; echo $tr['grp_acct_name']; echo "</option>";?>
   <option value=" "></option>
	<?php
	include("include/dbconn.php");
	
	 $vsql = "SELECT   grp_acct_name FROM grp_acct";
$vresult = mysql_query($vsql);
	
	while($row = mysql_fetch_array($vresult)) {
		
   
 echo	"<option value=' "; echo $row['grp_acct_name']; echo" '>"; echo $row['grp_acct_name']; echo "</option>";
 
 }
 ?>
	</select>
   
	</p>		

<p><span>Account  Name</span> <input type="text" id="ain" name="txt2" class="form-control" value="<?php echo $tr['sheet_acct_name']; ?>"  data-validation="custom"   data-validation-regexp="^([A-z\s]+)$" style="width:200px;" data-validation-error-msg="Please Enter The Name Of The Account Sheet You Want Create"  /><div id="sta"></div></p>		

	
		<br><br>
 <input   type="submit"  class="btn btn-primary" name="submit" value="Save"/>


 	</form>
		
	<script>
	var input = document.getElementById("ain");
input.onkeyup = function() {
    input.value = input.value.replace(/equity|capital/i,"");
}
</script>
	<script>
$(document).ready(function(){
$('#ain').keyup(username_check);
});
	
function username_check(){	
var username = $('#ain').val();
if(username == "" || username.length < 4){
$('#username').css('border', '3px #CCC solid');
$('#tick').hide();
}else{

$.ajax({
   type: "POST",
  url: "sheet.php",
   data: 'accname='+ username,
   cache: false,
   success: function(response){
if(response == 1){
	
	$('#sta').html("Account Name "+ username+" Already Exist");
	$('#ain').val("");
	 
	}else{
	$('#username').css('border', '3px #090 solid');
	$('#sta').html("");
	$('#cross').hide();
	$('#tick').fadeIn();
	     }

}
});
}



}

</script>

