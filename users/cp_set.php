<?php  include '../include/header.php';?>
          


 <!-- /.search form -->
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu">
     <li class="header">MAIN NAVIGATION</li>
            <li class="treeview">
              <a href="../home.php">
                <i class="fa fa-dashboard"></i> <span>Dashboard</span> <i class="fa fa-angle-left pull-right"></i>
              </a>
            </li>
			
			
				<li class="treeview">
              <a href="#">
                <i class="fa fa-bar-chart"></i> <span>Stock</span> <i class="fa fa-angle-left pull-right"></i>
              </a>
			       <ul class=" treeview-menu">
        <li><a href="../stock/sto.php"><i class="fa fa-circle-o"></i>Create Stock</a></li>
        <li><a href="../stock/stoa.php"><i class="fa fa-circle-o"></i>Add Stock</a></li>
        <li><a href="../stock/stoc.php"><i class="fa fa-circle-o"></i>Stock Sales</a></li>
         </ul>
            </li>

             <li class="treeview">
              <a href="../prod/prod.php">
                <i class="fa fa-star"></i> <span>Product</span> <i class="fa fa-angle-left pull-right"></i>
              </a>
             
            </li>

	<li class="treeview">
              <a href="../tank/tan.php">
                <i class="fa fa-square"></i> <span>Tank</span> <i class="fa fa-angle-left pull-right"></i>
              </a>
              
            </li>
			
			<li class="treeview">
              <a href="../expense/exp_two.php">
                <i class="fa fa-book"></i> <span>Expense</span> <i class="fa fa-angle-left pull-right"></i>
              </a>
              
            </li>

	<li class="treeview">
              <a href="../pump/add_pmp.php">
                <i class="fa fa-plug"></i> <span>Pump</span> <i class="fa fa-angle-left pull-right"></i>
              </a>
            </li>
		    <li class="treeview">
              <a href="#">
                <i class="fa fa-users"></i> <span>Customers</span> <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class=" treeview-menu">
        <li><a href="../customers/add_cust.php"><i class="fa fa-circle-o"></i> Add Customers</a></li>
                <li><a href="../customers/view_cust.php"><i class="fa fa-circle-o"></i> Manage Customers</a></li>
                <li><a href="../customers/addpay.php"><i class="fa fa-circle-o"></i> Customer Deposit</a></li>
				 <li><a href="../customers/cbal.php"><i class="fa fa-circle-o"></i> Customer Balance</a></li>
        
              </ul>
            </li>
       <li class="treeview">
              <a href="#">
                <i class="fa fa-money"></i>
 <span>Sales</span> <i class="fa fa-angle-left pull-right"></i>
              </a>
               <ul class="treeview-menu">
                <li class="active"><a href="crea.php"><i class="fa fa-circle-o"></i> Create Sales</a></li>
				<li><a href="pump_sales.php"><i class="fa fa-circle-o"></i> Pump Sales</a></li>
				<li><a href="crea2.php"><i class="fa fa-circle-o"></i> View Sales</a></li>
                <li><a href="view_sal.php"><i class="fa fa-circle-o"></i>Recipt</a></li>
              </ul>
            </li>
 
  <!--    <li class="treeview">
              <a href="#">
                <i class="fa fa-table"></i> <span>Invoice</span> <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="invo/crea.php"><i class="fa fa-circle-o"></i> Create Invoice</a></li>
                <li><a href="invo/crea2.php"><i class="fa fa-circle-o"></i> View Invoice</a></li>
              </ul>
            </li> -->
 

<li class="treeview">
              <a href="../report/e_report.php">
                <i class="fa fa-file-text"></i> <span>Report</span> <i class="fa fa-angle-left pull-right"></i>
              </a>
             
            </li>

       
      
	 
	
            <li class="active treeview">

              <a href="#">
                <i class="fa fa-gear"></i> <span>Settings</span> <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="../users/index.php"><i class="fa fa-circle-o"></i>User Management</a></li>
               <li class="active"><a href="../users/cp_set.php"><i class="fa fa-circle-o"></i>Company Profile Settings</a></li>
</ul>
            </li>
      
      </ul> 
 
 </section>
        <!-- /.sidebar -->
      </aside>

      <!-- =============================================== -->

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Settings
            <small>Company Profile Settings</small>
          </h1>
          <!--<ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Tables</a></li>
            <li class="active">Data tables</li>
          </ol>-->
        </section>

        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title"></h3>
                </div><!-- /.box-header -->
                <div class="box-body">
               
				  
   <?php
if (isset($_POST['submit'])) {
	
  $txt1 = mysql_real_escape_string( $_POST["txt1"] );
  $txt2 = mysql_real_escape_string( $_POST["txt2"] );
  $txt3 = mysql_real_escape_string( $_POST["txt3"] );
  $txt4 = mysql_real_escape_string( $_POST["txt4"] );
 // $txt5 = mysql_real_escape_string( $_POST["txt5"] );
 
 if(!empty($_FILES['image']['tmp_name'])){
 
 $image= addslashes($_FILES['image']['tmp_name']);
                    $name= addslashes($_FILES['image']['name']);
                    $image= file_get_contents($image);
                    
					 $image= base64_encode($image);
	
	mysql_query("UPDATE  comp_profile  SET profile_pic='$image' WHERE  profile_id='1' ") or die(mysql_error());
					
 }
  
  

if(empty($txt1) || empty($txt2)|| empty($txt3)|| empty($txt4)){
    //  header("location:reqatm ");
  
  //  echo"Please fill the form completely";
	?>
    <script> alert ("Please fill the form completely");</script>
	  
	<?php 
	  header("location:cp_set.php?emp");  
	
	  
	   } else{
	
	
	 
 $query = mysql_query("UPDATE  comp_profile  SET profile_name='{$txt1}' , comp_email='{$txt2}' , comp_add='{$txt3}',comp_num='{$txt4}' WHERE  profile_id='1' ") or die(mysql_error());
	 
	 header("location: cp_set.php");
	  ?>
	
	   <script> alert ("Company Profile  Created Succesfully."); </script>
	<?php }
	  // echo "<div id='box'>$message</div>";
	} //exit();

	?>
	
	<?php  
	
	 $h = mysql_query("select * FROM comp_profile") or die(mysql_error()); 
			 
			$trx = mysql_fetch_array($h);
			
	
	
	?>


<form class="form-signin" method="POST" action='cp_set.php' enctype="multipart/form-data" >
      
        <h2 class="form-signin-heading">Company Profile Settings</h2><hr/>
        
        <div id="error">
        <!-- error will be showen here ! -->
        </div>
        
        <div class="form-group">
        <input type="text" class="form-control" placeholder="Company Name" data-validation="custom length" data-validation-length="min3"  data-validation-regexp="^([a-z,A-Z, ]+)$" name="txt1" id="user_name" style="width:250px;" value="<?php echo  $trx['profile_name']; ?>" />
        </div>
        
        <div class="form-group">
        <input type="email" class="form-control" data-validation="email" placeholder="Company Email Address" name="txt2" value="<?php echo  $trx['comp_email']; ?>" id="user_email" style="width:250px;" />
        <span id="check-e"></span>
        </div>
        
		<div class="form-group">
      <textarea class="form-control"  placeholder="Company Address" style="width:200px;" data-validation="alphanumeric" data-validation-regexp="^([A-z\s]+)$" data-validation-allowing=" .,;" name="txt3"><?php echo  $trx['comp_add']; ?></textarea>    

	   </div>
        
        
     	    <div class="form-group">
 <input   name="txt4" class="form-control"  placeholder="Company Phone Number"   data-validation-error-msg="Please Enter The Company Phonumber"  data-validation="number length" data-validation-length="min11" type="text" maxlength="13"  value="<?php echo  $trx['comp_num']; ?>"  style="width:200px;" type="text"/></p>

</div>
		
		<div class="form-group">
<p>Upload Company Logo</p>
 <div hidden >
     
    <input type="file" name="image" value="data:image/gif;base64,<?php echo  $trx['profile_pic']; ?>"  id="capture2" accept="image/*" capture="camera"  >
</div>

<img src="data:image/gif;base64,<?php echo  $trx['profile_pic']; ?>" id="myImage" height="200px" width="200px"/>

<br>
  <button id="btn-camera-upload2" type="button" class="btn btn-primary btn-lg">
    <span class="glyphicon glyphicon-camera">Upload</span>
  </button> 


		
		<hr/>
        
		
        <div class="form-group">
            <button type="submit" class="btn btn-primary" name="submit" id="btn-submit">
    		<span class="fa fa-bullseye"></span> &nbsp; Submit
			</button> 
        </div>  
   
      </form>


				

	<hr> 
	
            </div><!-- /.box -->

            </div><!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
        
		
		
	

		
			
<link href="../css/bootstrap.min.css" type="text/css" rel="stylesheet"/>
<link href="../css/jquery-ui.css" type="text/css" rel="stylesheet"/>
  <script src="../js/jquery/jquery-2.1.3.min.js"></script>
	 <script src="js/jquery/jquery-ui.min.js"></script>
<script src="../js/validator/jquery.form-validator.min.js"></script>


<script>

function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            
            reader.onload = function (e) {
                $('#myImage').attr('src', e.target.result);
            }
            
            reader.readAsDataURL(input.files[0]);
        }
    }
    
    $("#capture2").change(function(){
        readURL(this);
    });


$("#btn-camera-upload2").click(function(e) {
    $("#capture2").trigger('click');    
});
</script>

	<script type="text/javascript">
$(function() {


$(".delbutton").click(function(){

//Save the link in a variable called element
var element = $(this);

//Find the id of the link that was clicked
var del_id = element.attr("id");

//Built a url to send
var info = 'id=' + del_id;
 if(confirm("Sure you want to delete it There is NO undo!"))
		  {

 $.ajax({
   type: "GET",
   url: "del.php",
   data: info,
   success: function(){
   
   }
 });
         $(this).parents(".record").animate({ backgroundColor: "#fbc7c7" }, "fast")
		.animate({ opacity: "hide" }, "slow");

 }

return false;

});

});
</script>
	<script>

        $.validate();
			</script>



<script>
function checkPass()
{
    //Store the password field objects into variables ...
    var pass1 = document.getElementById('pass1');
    var pass2 = document.getElementById('pass2');
    //Store the Confimation Message Object ...
    var message = document.getElementById('confirmMessage');
    //Set the colors we will be using ...
    var goodColor = "";
    var badColor = "red";
    //Compare the values in the password field 
    //and the confirmation field
    if(pass1.value == pass2.value){
        //The passwords match. 
        //Set the color to the good color and inform
        //the user that they have entered the correct password 
        pass2.style.backgroundColor = goodColor;
        message.style.color = goodColor;
        message.innerHTML = "Passwords Match!"
    }else{
        //The passwords do not match.
        //Set the color to the bad color and
        //notify the user.
        pass2.style.backgroundColor = badColor;
        message.style.color = badColor;
		
		
        message.innerHTML = "Passwords Do Not Match! Make Sure The First Password You Typed Matches With The Second Password " 
    }
}  
   
</script> 

	<?php  include '../include/footer.php';?>