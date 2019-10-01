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
	window.location.href="view_stf.php";
	
}

</script>
   <?php
if (isset($_POST['submit'])) {
	
  $txt1 = mysql_real_escape_string( $_POST["txt1"] );
  $txt2 = mysql_real_escape_string( $_POST["txt2"] );
  $txt3 = mysql_real_escape_string( $_POST["txt3"] );
  $txt4 = mysql_real_escape_string( $_POST["txt4"] );
  $txt5 = mysql_real_escape_string( $_POST["txt5"] );
  $txt6 = mysql_real_escape_string( $_POST["txt6"] );
  $txt7 = mysql_real_escape_string( $_POST["txt7"] );
  $txt8 = mysql_real_escape_string( $_POST["txt8"] );
  $txt9 = mysql_real_escape_string( $_POST["txt9"] );
  

 
  
  

if(empty($txt1) || empty($txt2) || empty($txt3)|| empty($txt4)|| empty($txt5)|| empty($txt6)|| empty($txt7)|| empty($txt8)|| empty($txt9)){
    //  header("location:reqatm ");
  
  //  echo"Please fill the form completely";
	?>
   
	<? 
	 	  
	   } else{
	
	$b =$_GET['erp_id'];
	   $query = mysql_query("Update  empinfo SET e_name='{$txt1}', `e_d.o.b` = '{$txt2}' , e_gender ='{$txt3}', e_phonenumber='{$txt4}' , e_mail='{$txt5}' , e_address='{$txt6}', e_banknam ='{$txt7}', e_accname ='{$txt8}', e_accnumber ='{$txt9}' WHERE e_id='{$b}' ") or die(mysql_error());
	 
	 header("location: view_stf.php ");
	  ?>
	
	   <script> alert ("You Have Updated An Employee Details Successfully."); </script>
	<?php }
	  // echo "<div id='box'>$message</div>";
	} 

	?>
<?php
$c =$_GET['erp_id'];

$h = mysql_query("select * FROM empinfo where e_id='$c' ") or die(mysql_error()); 
			 
			$tr = mysql_fetch_array($h);
			

?>
				
	<form action="edit_stf.php?erp_id=<?php echo $_GET['erp_id']; ?>" method="POST">


<p><span>Employee Name</span> <input type="text" name="txt1" class="form-control" type="text" data-validation="custom"   data-validation-regexp="^([A-z\s]+)$"   style="width:200px;" data-validation-error-msg="Please Enter The Employee Name" value="<?php echo $tr['e_name']; ?>"  /></p>		
<p><span>Date Of Birth</span><input name="txt2" class="form-control"  data-validation="date required" data-validation-help="month/day/year" data-validation-format="mm/dd/yyyy" id="datepicker"  type="text" style="width:200px;" required  value="<?php echo $tr['e_d.o.b']; ?>" /></p>
</p>
<p><span>Gender</span><select  name="txt3" class="form-control"  data-validation="required"  type="text" style="width:200px;" required>
<option value="<?php echo $tr['e_gender']; ?>" selected> <?php echo $tr['e_gender']; ?></option>
<option value=""></option>
<option value="Male">Male</option>
<option value="Female">Female</option>
</select></p>

<p><span>Phonumber</span> <input   name="txt4" class="form-control"  value="<?php echo $tr['e_phonenumber']; ?>"  data-validation-error-msg="Please Enter The Employee Phonumber"  data-validation="number length" data-validation-length="min11" type="text" maxlength="13"    style="width:200px;" type="text"/></p>

<p><span>Email</span> <input name="txt5" class="form-control" style="width:200px;"  data-validation="email" data-validation-error-msg="E-mail is not valid" value="<?php echo $tr['e_mail']; ?>"  /></p>

<p><span>Address</span> <textarea name="txt6" class="form-control" type="text"  data-validation="alphanumeric" data-validation-allowing="-_, " data-validation-error-msg="Please Enter The Employee address"  style="width:290px;"><?php echo $tr['e_address']; ?></textarea></p>		

<p><span>Bank Name</span> <input type="text" name="txt7" class="form-control" type="text" data-validation="custom" value="<?php echo $tr['e_banknam']; ?>"  data-validation-regexp="^([A-z\s]+)$"   style="width:200px;" data-validation-error-msg="Please Enter The Employee Bank Name"  /></p>		

<p><span>Account Name</span> <input type="text" name="txt8" class="form-control" type="text" value="<?php echo $tr['e_accname']; ?>" data-validation="custom"   data-validation-regexp="^([A-z\s]+)$"   style="width:200px;" data-validation-error-msg="Please Enter The Employee Account Name"  /></p>		

<p><span>Account Number</span><input  name="txt9"  value="<?php echo $tr['e_accnumber']; ?>" class="form-control" data-validation="required" data-validation="number length" data-validation-length="min10"  maxlength="10"  data-validation-error-msg="Please Enter Your Account Number " type="text" style="width:200px;" /></p>		


		<br><br>
		
		
 <input   type="submit"  class="btn btn-primary btn-lg" name="submit" value="Save"/>

		

 	</form>
		
		
	
		
                </div><!-- /.box-body -->
              </div><!-- /.box -->

            </div><!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
        
<link href="../css/jquery-ui.css" type="text/css" rel="stylesheet"/>
	  <script src="../js/jquery/jquery-2.1.3.min.js"></script>
	 <script src="../js/jquery/jquery-ui.min.js"></script>
<script src="../js/validator/jquery.form-validator.min.js"></script>
<script>

 $.validate( );
 // setup datepicker
    $("#datepicker").datepicker();
 $("#datepicker2").datepicker();
 
// Restrict presentation length
$('#request').restrictLength( $('#pres-max-length') );
		</script>
	