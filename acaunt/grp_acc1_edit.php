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
	window.location.href="grp_acc1.php";
	
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
	  header("location:grp_acc1.php ");  
	
	  
	   } else{
	

	$c =$_GET['erp_id'];
	
	
	
	//  $cust_id=  $_SESSION['user_id'];
	
	$query = mysql_query(" UPDATE grp_acct SET grp_acct_name ='{$txt1}', grp_acct_type ='{$txt2}' WHERE  grp_acct_id='{$c}' ") or die(mysql_error());
	  header("location: grp_acc1.php ");
	  
	 
	 }
	  // echo "<div id='box'>$message</div>";
	} 

	?>


<?php

$c =$_GET['erp_id'];

$h = mysql_query("select * FROM grp_acct where grp_acct_id='{$c}' ") or die(mysql_error()); 
			 
			$tr = mysql_fetch_array($h);
			

?>
<h3>Edit Group Of Account / Ledger Account Name</h3>


				
	<form action="grp_acc1_edit.php?erp_id=<?php echo $_GET['erp_id']; ?>" method="POST">


<p><span>Ledger Name</span> <input type="text" id="acnam" name="txt1" class="form-control" type="text" data-validation="custom"   data-validation-regexp="^([A-z\s]+)$" value='<?php echo $tr['grp_acct_name']; ?>'   style="width:200px;" data-validation-error-msg="Please Enter The Customers Name"  /></p><div id="stat"></div>		
<p><span>Type</span><select class="form-control" name="txt2"  data-validation="custom"  data-validation-regexp="^([A-z\s]+)$"  type="text" style="width:200px;" required>
<?php

 echo	"<option value=' "; echo htmlentities( $tr['grp_acct_type']); echo" '>"; echo htmlentities( $tr['grp_acct_type']); echo "</option>";
			
 ?>
<option value="Debit">Debit</option>
<option value="Credit">Credit</option>
</select>
<script>

var input = document.getElementById("acnam");
input.onkeyup = function() {
    input.value = input.value.replace(/equity|capital/i,"");
}
</script>



		<br><br>
 <input   type="submit"  class="btn btn-primary" name="submit" value="SAVE"/>

		

 	</form>
		<script>
$(document).ready(function(){
$('#acnam').keyup(username_check);
});
	
function username_check(){	
var username = $('#acnam').val();
if(username == "" || username.length < 4){
$('#username').css('border', '3px #CCC solid');
$('#tick').hide();
}else{

$.ajax({
   type: "POST",
  url: "check.php",
   data: 'username='+ username,
   cache: false,
   success: function(response){
if(response == 1){
	
	$('#stat').html("Ledger Name "+ username+" Already Exist");
	$('#acnam').val("");
	 
	}else{
	$('#username').css('border', '3px #090 solid');
	$('#stat').html("");
	$('#cross').hide();
	$('#tick').fadeIn();
	     }

}
});
}



}

</script>

	
