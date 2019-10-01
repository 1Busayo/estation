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
	window.location.href="index.php";
	
}

</script>
<?php
if (isset($_POST['submit'])) {
	
  $txt1 = mysql_real_escape_string( $_POST["txt1"] );
  $txt2 = mysql_real_escape_string( $_POST["txt2"] );
  $txt3 = mysql_real_escape_string( $_POST["txt3"] );
  
  
 
if(empty($txt1) || empty($txt2) || empty($txt3) ){
   //  echo"Please fill the form completely";
	?>
    <script> alert ("Please fill the form completely");</script>
	  
	<?php 
	  header("location:index.php");  
	
	  
	   } else{
	

	$c =$_GET['erp_id'];
	
	
	
	//  $cust_id=  $_SESSION['user_id'];
	
	$query = mysql_query(" UPDATE usamacc SET mac_name ='{$txt1}', mac_email ='{$txt2}', mac_level ='{$txt3}' WHERE  macuser_id='{$c}' ") or die(mysql_error());
	  header("location: index.php ");
	  
	 
	 }
	  // echo "<div id='box'>$message</div>";
	} 

	?>


<?php

$c =$_GET['erp_id'];

$h = mysql_query("select * FROM usamacc where macuser_id='{$c}' ") or die(mysql_error()); 
			 
			$tr = mysql_fetch_array($h);
			

?>

<form class="form-signin" method="POST" action="acc1_edit.php?erp_id=<?php echo $_GET['erp_id']; ?>">
      
        <h2 class="form-signin-heading">Edit User Account</h2><hr/>
        
        <div id="error">
        <!-- error will be showen here ! -->
        </div>
        
        <div class="form-group">
        <input type="text" class="form-control" placeholder="Username" data-validation="custom length" data-validation-length="min3"  data-validation-regexp="^([a-z,A-Z, ]+)$" name="txt1" value="<?php echo $tr['mac_name']; ?>" style="width:250px;" />
        </div>
        
        <div class="form-group">
        <input type="email" class="form-control" data-validation="email" placeholder="Email address" name="txt2" value="<?php echo $tr['mac_email']; ?>" style="width:250px;" />
        <span id="check-e"></span>
        </div>
        
          	    <div class="form-group">
<p><select class="form-control" name="txt3"  data-validation="required"   style="width:250px;" >
 <?php

 echo	"<option value=' ".htmlentities( $tr['mac_level'])." selected'>".htmlentities( $tr['mac_level'])."</option>";
			
?>
<option value="Admin">Admin</option>
<option value="User">User</option>
</select>
</div>
		<hr/>
        
		
        <div class="form-group">
            <button type="submit" class="btn btn-primary" name="submit" id="btn-submit">
    		<span class="glyphicon glyphicon-log-in"></span> &nbsp; Update Account
			</button> 
        </div>  
   
      </form>
			