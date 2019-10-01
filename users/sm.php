<?php  include '../include/header.php';?>
          


 <!-- /.search form -->
          <!-- sidebar menu: : style can be found in sidebar.less -->
<ul class="sidebar-menu">
          <li class="header">MAIN NAVIGATION</li>
            <li class="treeview">               <a href="../home.php">                 <i class="fa fa-dashboard"></i> <span>Dashboard</span> <i class="fa fa-angle-left pull-right"></i>               </a>             </li>  			<li class="treeview">               <a href="#">                 <i class="fa fa-bar-chart"></i> <span>Stock</span> <i class="fa fa-angle-left pull-right"></i>               </a> 			       <ul class=" treeview-menu">         <li><a href="../stock/sto.php"><i class="fa fa-circle-o"></i>Create Stock</a></li>         <li><a href="../stock/stoa.php"><i class="fa fa-circle-o"></i>Add Stock</a></li>         <li><a href="../stock/stoc.php"><i class="fa fa-circle-o"></i>Stock Sales</a></li>          </ul>             </li>
             <li class="treeview">
              <a href="#">
                <i class="fa fa-bell"></i> <span>Reminder</span> <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class=" treeview-menu">
        
        <li><a href="../rem/rem_stf.php"><i class="fa fa-circle-o"></i>Staff</a></li>
                <li><a href="../rem/rem_cu.php"><i class="fa fa-circle-o"></i> Customers</a></li>
                
              </ul>
            </li>
		  <li class="treeview">
              <a href="#">
                <i class="fa fa-users"></i> <span>Customers</span> <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class=" treeview-menu">
        
        <li><a href="../customers/add_cust.php"><i class="fa fa-circle-o"></i> Add Customers</a></li>
                <li><a href="../customers/view_cust.php"><i class="fa fa-circle-o"></i> Manage Customers</a></li>
                
              </ul>
            </li>
      <li class=" treeview">
              <a href="#">
                <i class="fa fa-money"></i>
 <span>Sales</span> <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li ><a href="../sales/crea.php"><i class="fa fa-circle-o"></i> Create Sales</a></li>
				<li><a href="../sales/crea2.php"><i class="fa fa-circle-o"></i> View Sales</a></li>
                <li><a href="../sales/view_sal.php"><i class="fa fa-circle-o"></i>Recipt</a></li>
              </ul>
            </li>
 
      <li class="treeview">
              <a href="#">
                <i class="fa fa-table"></i> <span>Invoice</span> <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="../invo/crea.php"><i class="fa fa-circle-o"></i> Create Invoice</a></li>
                <li><a href="../invo/crea2.php"><i class="fa fa-circle-o"></i> View Invoice</a></li>
              </ul>
            </li>
  <li class="treeview">
              <a href="#">
                <i class="fa fa-male"></i> <span>Employee</span> <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="../emp/add_stf.php"><i class="fa fa-circle-o"></i> Add Staff</a></li>
                <li><a href="../emp/view_stf.php"><i class="fa fa-circle-o"></i> View Staff</a></li>
                <li><a href="../emp/crea_pslip.php"><i class="fa fa-circle-o"></i> Create Payslip</a></li>
				<li><a href="../emp/view_payslip.php"><i class="fa fa-circle-o"></i> View Payslip</a></li>
				
              </ul>
            </li>
             <li class="treeview">
              <a href="#">
                <i class="fa fa-list-alt"></i> <span>Debtors</span> <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="../debt/deb_view.php"><i class="fa fa-circle-o"></i> View Debtors</a></li>
                <li><a href="../debt/pay_deb.php"><i class="fa fa-circle-o"></i> Debtors Payment</a></li>
              </ul>
            </li>
      <li class="treeview">
              <a href="#">
                <i class="fa fa-book"></i> <span>Account</span> <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="../acaunt/grp_acc1.php"><i class="fa fa-circle-o"></i> Create Ledger</a></li>
                <li><a href="../acaunt/sheet_acc1.php"><i class="fa fa-circle-o"></i> Create Account</a></li>
                <li><a href="../acaunt/sheet_pre1.php"><i class="fa fa-circle-o"></i> Prepare Account</a></li>
                <li><a href="../acaunt/view_acc1.php"><i class="fa fa-circle-o"></i> View Account</a></li>
				<li><a href="../acaunt/crea_eq.php"><i class="fa fa-circle-o"></i> Create Equity</a></li>
				<li><a href="../acaunt/eq_nam.php"><i class="fa fa-circle-o"></i> Prepare Equity</a></li>
				<li><a href="../acaunt/view_eq.php"><i class="fa fa-circle-o"></i> View Equity</a></li>
              </ul>
            </li>   
			<li class="treeview">
              <a href="#">
                <i class="fa fa-bank"></i> <span> Bank Reconcilation</span> <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="../ban/add_ban.php"><i class="fa fa-circle-o"></i> Add Bank</a></li>
                <li><a href="../ban/ban_pre1.php"><i class="fa fa-circle-o"></i> Record Bank Transactions</a></li>
                <li><a href="../ban/ban_acc1.php"><i class="fa fa-circle-o"></i> View Bank Reconcilation</a></li>
             
              </ul>
            </li>


<li class="treeview">
              <a href="#">
                <i class="fa fa-file-text"></i> <span>Report</span> <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="../report/sales_rp.php"><i class="fa fa-circle-o"></i> Sales Report</a></li>
                <li><a href="../report/acct_rp.php"><i class="fa fa-circle-o"></i>Account Report</a></li>
                <li><a href="../report/sal_rp.php"><i class="fa fa-circle-o"></i> Salary Report</a></li>
              </ul>
            </li>

            <li class="active treeview">

              <a href="#">
                <i class="fa fa-gear"></i> <span>Settings</span> <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="../users/index.php"><i class="fa fa-circle-o"></i>User Management</a></li>
                <li><a href="../users/ema.php"><i class="fa fa-circle-o"></i>Email Settings</a></li>
				<li class="active"><a href="../users/sm.php"><i class="fa fa-circle-o"></i>Sms Settings</a></li>
				<li><a href="../users/vat_set.php"><i class="fa fa-circle-o"></i>VAT Settings</a></li>
				<li><a href="../users/cp_set.php"><i class="fa fa-circle-o"></i>Company Profile Settings</a></li>

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
            <small>Sms Settins</small>
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
  $txt3 = md5( mysql_real_escape_string( $_POST["txt3"] ));
  $txt4 = mysql_real_escape_string( $_POST["txt4"] );
 // $txt5 = mysql_real_escape_string( $_POST["txt5"] );
 
 
 $image= addslashes($_FILES['image']['tmp_name']);
                    $name= addslashes($_FILES['image']['name']);
                    $image= file_get_contents($image);
                    
					$image= base64_encode($image);
 
 function generatePIN($digits = 4){
    $i = 0; //counter
    $pin = ""; //our default pin is blank.
    while($i < $digits){
        //generate a random number between 0 and 9.
        $pin .= mt_rand(0, 9);
        $i++;
    }
    return $pin;
}
 
//If I want a 4-digit PIN code.
$account = 'ACCT/'.''.generatePIN();

  
   
   $query = "SELECT mac_name FROM  usamacc WHERE mac_name='{$txt1}'";
$query_run = mysql_query($query);

if (mysql_num_rows($query_run) >=1)  
{
 
?>
 
   <script> alert ("The Name of The User  Exist.");
 
 window.location="index.php";
 
 
</script>
 <?
 // header("location:index "); 
 exit();
 

  }
 
  
  

if(empty($txt1) || empty($txt2)|| empty($txt3)|| empty($txt4)){
    //  header("location:reqatm ");
  
  //  echo"Please fill the form completely";
	?>
    <script> alert ("Please fill the form completely");</script>
	  
	<? 
	  header("location:index.php ");  
	
	  
	   } else{
	
	//  $cust_id=  $_SESSION['user_id'];
	      $query = mysql_query("INSERT INTO comp_profile (profile_name,comp_email,comp_add,comp_num,profile_pic) VALUES  ('{$txt1}','{$txt2}','{$txt3}','{$txt4}','$image')") or die(mysql_error());
	 
	 header("location: cp_set.php");
	  ?>
	
	   <script> alert ("Company Profile  Created Succesfully."); </script>
	<?php }
	  // echo "<div id='box'>$message</div>";
	} //exit();

	?>


<form class="form-signin" method="POST" enctype="multipart/form-data" >
      
        <h2 class="form-signin-heading">Company Profile Settings</h2><hr/>
        
        <div id="error">
        <!-- error will be showen here ! -->
        </div>
        
        <div class="form-group">
        <input type="text" class="form-control" placeholder="Company Name" data-validation="custom length" data-validation-length="min3"  data-validation-regexp="^([a-z,A-Z, ]+)$" name="txt1" id="user_name" style="width:250px;" />
        </div>
        
        <div class="form-group">
        <input type="email" class="form-control" data-validation="email" placeholder="Company Email Address" name="txt2" id="user_email" style="width:250px;" />
        <span id="check-e"></span>
        </div>
        
		<div class="form-group">
      <textarea class="form-control"  placeholder="Company Address" style="width:200px;" data-validation="alphanumeric" data-validation-regexp="^([A-z\s]+)$" data-validation-allowing=" .,;" name="txt3"></textarea>    

	   </div>
        
        
     	    <div class="form-group">
 <input   name="txt4" class="form-control"  placeholder="Company Phone Number"   data-validation-error-msg="Please Enter The Company Phonumber"  data-validation="number length" data-validation-length="min11" type="text" maxlength="13"    style="width:200px;" type="text"/></p>

</div>
		
		<div class="form-group">
<p>Upload Company Logo</p>
 <div hidden >
     
    <input type="file" name="image"   id="capture2" accept="image/*" capture="camera"  >
</div>

<img src="" id="myImage" height="200px" width="200px"/>

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
	 <div class="box-header">
                 <h2 class="form-signin-heading">View Company Profile</h2>
       
	</div>
	<br>
		<table id="example1" class="table table-bordered table-hover">
    	<thead>
    	<tr>
            
        <th width="10%"> User Name</th>
        <th width="7%">Email</th>
        <th width="5%">Type</th>
		<th width="5%">Reset Password</th>
		<th width="5%">Block Account</th>
        
		
			<th width="5%">EDIT</th>
			<th width="5%">DELETE</th>
			
			</tr> 
        </thead>
	<tbody>

<?php
			 $h = mysql_query("select * FROM usamacc ORDER BY  '{mac_name}' ") or die(mysql_error()); 
			 
			while($tr = mysql_fetch_array($h))
			{
		?>
		
		
        <tr class="record">
        	
             <td><br><?php echo htmlentities( $tr['mac_name']); ?></td>
		     <td><br><?php echo htmlentities($tr['mac_email']); ?></td>
			 <td><br><?php echo htmlentities($tr['mac_level']); ?></td>
		  
           
	<td><br>
		&nbsp;&nbsp;&nbsp;&nbsp; <a  rel="facebox" href="grp_acc1_edit.php?erp_id=<?php echo $tr['macuser_id']; ?>" class=" btn-sm">
          <span class="fa fa-key"></span> 
        </a> </td>
             		<td><br>
		&nbsp;&nbsp;&nbsp;&nbsp; <a  rel="facebox" href="grp_acc1_edit.php?erp_id=<?php echo $tr['macuser_id']; ?>" class=" btn-sm">
          <span class="fa fa-toggle-off"></span> 
        </a> </td>
             		
		<td><br>
		&nbsp;&nbsp;&nbsp;&nbsp; <a  rel="facebox" href="acc1_edit.php?erp_id=<?php echo $tr['macuser_id']; ?>" class=" btn-sm">
          <span class="fa fa-pencil"></span> 
        </a> </td> <td><br>
		&nbsp;&nbsp;&nbsp;&nbsp;    <a href="#" id="<?php echo $tr['macuser_id']; ?>" class="delbutton" title="Click To Delete"><span class="fa fa-trash"></a></td>

	
		
		
			</tr>
			
        <?php

		}
		
		
		?>
	
	</tbody>	
    </table>

		
	
		
                </div><!-- /.box-body -->
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