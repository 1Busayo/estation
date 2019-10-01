<?php  include '../include/dbconn.php';


if (isset($_POST['submit'])) {
	
  $txt1 = mysql_real_escape_string( $_POST["txt1"] );
  $txt2 = mysql_real_escape_string( $_POST["txt2"] );
  $txt3 = mysql_real_escape_string( $_POST["txt3"] );
 
  $dat=date('Y-m-d');
  
  

  

if(empty($txt2) || empty($txt3) ){
    
	
	$mngs='Please fill the form completely';
	
	   header("location:stoa.php?msg2=".$mngs);
				 exit();
	
	   } else{
		   $c=$_GET['sto_id'];
	
	 
  	$query = mysql_query("UPDATE stock_hist SET stock_qty='{$txt2}' , stock_date='{$txt3}' where hist_id='$c' ") or die(mysql_error());
	
	 
  	
	$mng='You Have Successfully Edited '.$txt1.'';
	
	   header("location:stoa.php?msg=".$mng);
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

$h = mysql_query("Select * FROM stock_sales where sal_id='$c' ") or die(mysql_error()); 
			 
			
	 

		$tr = mysql_fetch_array($h);

			?>
			
	<form  name='form__2' action="stoa2.php?sto_id=<?php echo $c; ?>" method="POST" >

<p><span>Stock Name</span><input name="txt1" class="form-control" readonly data-validation="required"  type="text" style="width:200px;" value="<?php echo $tr['stock_name']; ?>" required>
</p>
	


<p><span>Stock Quantity</span><input  name="txt2" class="form-control"  data-validation="required"  type="text" style="width:200px;" value="<?php echo $tr['stock_qty']; ?>" required>
</p>

<p><span>Date</span><input  name="txt3" type="text" class="form-control"  value="<?php echo $tr['stock_date']; ?>"data-validation="required" data-validation-format="mm/dd/yyyy" id="datepicker " style="width:200px;" required>
</p>
	
		<br><br>
 <input   type="submit"  class="btn btn-primary" name="submit" value="Edit"/>

		

 	</form>
			<link href="../css/bootstrap.min.css" type="text/css" rel="stylesheet"/>
<link href="../css/jquery-ui.css" type="text/css" rel="stylesheet"/>
	  <script src="../js/jquery/jquery-2.1.3.min.js"></script>
	 <script src="../js/jquery/jquery-ui.min.js"></script>
<script src="../js/validator/jquery.form-validator.min.js"></script>
<script>

 $.validate( );
 // setup datepicker
    $("#datepicker").datepicker();
 $("#datepicker2").datepicker();

	</script>
	
               