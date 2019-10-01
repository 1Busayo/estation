<?php  include '../include/dbconn.php';?>
				  
   <?php
if (isset($_POST['submit'])) {
	
  $txt1 = mysql_real_escape_string( $_POST["txt1"] );
  $txt2 = mysql_real_escape_string( $_POST["txt2"] );
 // $txt3 = mysql_real_escape_string( $_POST["txt3"] );
 
  $dat=date('Y-m-d');
  
  
  			


  
   
  $query = "SELECT `stock_name` FROM `e_stock` WHERE `stock_name`='{$txt1}'";
$query_run = mysql_query($query);


/*if (mysql_num_rows($query_run) >=1)  
{
  $mngs='Stock name '.$txt1.' already exist';
	
	   header("location:sto.php?msg2=".$mngs);
				 exit();

  } */
 
  
  

if(empty($txt1) || empty($txt2) ){
    
	
	$mngs='Please fill the form completely';
	
	   header("location:sto.php?msg2=".$mngs);
				 exit();
	
	   } else{
		   $c=$_GET['sto_id'];
	
	$query = mysql_query("UPDATE e_stock SET stock_name='{$txt1}', stock_price='{$txt2}' where stock_code='$c' ") or die(mysql_error());
	 
  	$query = mysql_query("UPDATE stock_hist SET stock_name='{$txt1}' where stock_code='$c' ") or die(mysql_error());
	
	$query = mysql_query("UPDATE stock_sales SET stock_name='{$txt1}' where stock_code='$c' ") or die(mysql_error());
	 
  	
	$mng='You Have Successfully Edited '.$txt1.'';
	
	   header("location:sto.php?msg=".$mng);
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
$c=$_GET['sto_id'];

$h = mysql_query("Select * FROM e_stock where stock_code='$c' ") or die(mysql_error()); 
			 
			
	 

		$tr = mysql_fetch_array($h);

			?>
			
	<form  name='form__2' action="sto2.php?sto_id=<?php echo $c; ?>" method="POST">

<p><span>Stock Name</span><input name="txt1" class="form-control"  data-validation="required"  type="text" style="width:200px;" value="<?php echo $tr['stock_name']; ?>" required>
</p>
	


<p><span>Stock Price</span><input  name="txt2" class="form-control"  data-validation="required"  type="text" style="width:200px;" value="<?php echo $tr['stock_price']; ?>" required>
</p>

	
		<br><br>
 <input   type="submit"  class="btn btn-primary" name="submit" value="Edit Stock"/>

		

 	</form>
		
	
               