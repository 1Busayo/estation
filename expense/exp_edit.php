<?php  include '../include/dbconn.php';?>
				  
   <?php
if (isset($_POST['submit'])) {
	
  $txt1 = mysql_real_escape_string( $_POST["txt1"] );
  $txt2 = mysql_real_escape_string( $_POST["txt2"] );
  $txt3 = mysql_real_escape_string( $_POST["txt3"] );
 
  $dat=date('Y-m-d');
  
  
  			


  
   
  $query = "SELECT `stock_name` FROM `e_stock` WHERE `stock_name`='{$txt1}'";
$query_run = mysql_query($query);


/*if (mysql_num_rows($query_run) >=1)  
{
  $mngs='Stock name '.$txt1.' already exist';
	
	   header("location:exp_two.php?msg2=".$mngs);
				 exit();

  } */
 
  
  

if(empty($txt1) || empty($txt2)|| empty($txt3) ){
    
	
	$mngs='Please fill the form completely';
	
	   header("location:exp_two.php?msg2=".$mngs);
				 exit();
	
	   } else{
		   $c=$_GET['sto_id'];
	
	
	$query = mysql_query("UPDATE exp_pay SET cust_name='{$txt1}', deb_amt ='{$txt2}', exp_purpose ='{$txt3}' where pay_id='$c' ") or die(mysql_error());
	 
  	
	$mng='You Have Successfully Edited '.$txt1.'';
	
	   header("location:exp_two.php?msg=".$mng);
				 exit();

	   }
	} 

	?>




<?php
		  	if(empty($_GET['msg'])){
				
			}else{
				
				$a= preg_replace('/[^-a-zA-Z0-9_]/', ' ', $_GET['msg']); ?>
				
				  <div class="alert alert-success" >
 <strong><i class="fa fa-check-circle fa-2x"></i>  Success!</strong>         <?php echo $a;?> 
</div>
			<?php
			}
 ?>
 <?php
		  	if(empty($_GET['msg2'])){
				
			}else{
				
				$ab= preg_replace('/[^-a-zA-Z0-9_]/', ' ', $_GET['msg2']); ?>
				
				  <div class="alert alert-danger" >
 <strong><i class="fa fa-times-circle fa-2x"></i>  Error!</strong>       <?php echo $ab;?> .
</div>
			<?php
			}
 ?>

			 
<?php 
$a=$_GET['erp_id'];
$b=$_GET['pin'];

$h = mysql_query("Select  * FROM exp_pay where pay_id='$a' and deb_code='$b' ") or die(mysql_error()); 
			 
			
	 

		$tr = mysql_fetch_array($h);

			?> 
			
	<form  name='form__2' action="exp_edit.php?sto_id=<?php echo $a; ?>" method="POST">

<p><span>Name</span><input name="txt1" class="form-control"  data-validation="required"  type="text" style="width:200px;" value="<?php echo $tr['cust_name']; ?>" required>
</p>
	


<p><span>Amount</span><input  name="txt2" class="form-control"  data-validation="required"  type="text" style="width:200px;" value="<?php echo $tr['deb_amt']; ?>" required>
</p>

<p><span>Purpose</span><input  name="txt3" class="form-control"  data-validation="required"  type="text" style="width:200px;" value="<?php echo $tr['exp_purpose']; ?>" required>
</p>

	
		<br><br>
 <input   type="submit"  class="btn btn-primary" name="submit" value="Edit"/>

		

 	</form>
		
	
               