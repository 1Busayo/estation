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
	window.location.href="crea_eq.php";
	
}

</script>

<?php
if (isset($_POST['submit'])) {
	
  $txt1 = mysql_real_escape_string( $_POST["txt1"] );
  $txt2 = mysql_real_escape_string( $_POST["txt2"] );
  
  
 
if(empty($txt1) || empty($txt2)){
   //  echo"Please fill the form completely";
	?>
    <script> alert ("Please fill the form completely");</script>
	  
	<? 
	  header("location:crea_eq.php ");  
	
	  
	   } else{
	

	$c =$_GET['erp_id'];
	
	
	
	//  $cust_id=  $_SESSION['user_id'];
	
	$query = mysql_query(" UPDATE  owners_prop SET own_name ='{$txt1}',own_percent ='{$txt2}' WHERE  own_id='$c' ") or die(mysql_error());
	  header("location: crea_eq.php ");
	  
	 
	 }
	  // echo "<div id='box'>$message</div>";
	} 

	?>


<?php

$c =$_GET['erp_id'];

$h = mysql_query("select * FROM owners_prop where own_id='$c' ") or die(mysql_error()); 
			 
			$tr = mysql_fetch_array($h);
			

?>
		
	<form action="crea_eq_edit.php?erp_id=<?php echo $_GET['erp_id']; ?>" method="POST">

<h2 class="form-signin-heading">Update Owners Equity Details</h2><hr/>
        
        <div id="error">
        <!-- error will be showen here ! -->
        </div>
        
        <div class="form-group">
		<label>Equity Owners Name</label>
        <input type="text" class="form-control" value="<?php echo $tr['own_name'];?>" placeholder="Equity Owners Name" data-validation="custom length" data-validation-length="min3"  data-validation-regexp="^([a-z,A-Z, ]+)$" name="txt1" id="user_name" style="width:250px;" />
        </div>
        
        <div class="form-group">
		<label>Equity Owners Percentage(%)</label>
        <input type="text" class="form-control" value="<?php echo $tr['own_percent'];?>" data-validation="number" placeholder="Equity Owners Percentage" name="txt2"  style="width:250px;" />
        
        </div>
        
       
		<hr/>
        
		
        <div class="form-group">
            <button type="submit" class="btn btn-primary" name="submit" id="btn-submit">
    		<span class="glyphicon glyphicon-log-in"></span> &nbsp;Update 
			</button> 
        </div>  
   
      </form>		
<?php
		//	}
	
	?>
 	</form>
		
	<script>
	var input = document.getElementById("ain");
input.onkeyup = function() {
    input.value = input.value.replace(/equity|capital/i,"");
}
</script>