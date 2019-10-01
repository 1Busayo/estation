<?php  include '../include/header.php'; 


?>
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
      <li class="active treeview">
              <a href="#">
                <i class="fa fa-book"></i> <span>Account</span> <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="../acaunt/grp_acc1.php"><i class="fa fa-circle-o"></i> Create Ledger</a></li>
                <li class="active"><a href="../acaunt/sheet_acc1.php"><i class="fa fa-circle-o"></i> Create Account</a></li>
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
                <li ><a href="../report/sal_rp.php"><i class="fa fa-circle-o"></i> Salary Report</a></li>
              </ul>
            </li>

            <li class="treeview">

              <a href="#">
                <i class="fa fa-gear"></i> <span>Settings</span> <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="../users/index.php"><i class="fa fa-circle-o"></i>User Management</a></li>
                <li><a href="../users/ema.php"><i class="fa fa-circle-o"></i>Email Settings</a></li>
				<li><a href="../users/sm.php"><i class="fa fa-circle-o"></i>Sms Settings</a></li>
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
            Ledger/Group Account
            <small>Create</small>
          </h1>
        <!--  <ol class="breadcrumb">
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
                  <h3 class="box-title">Create Account </h3>
                </div><!-- /.box-header -->
                <div class="box-body">
               
				  
   <?php
 

   

   
if (isset($_POST['submit'])) {
	
  $txt1 = mysql_real_escape_string( $_POST["txt1"] );
  $txt2 = mysql_real_escape_string( $_POST["sid"] );
  $txt3 = mysql_real_escape_string( $_POST["txt3"] );
  
   
   $query = "SELECT sheet_acct_name FROM sheet_acct WHERE sheet_acct_name='{$txt2}'";
$query_run = mysql_query($query);

if (mysql_num_rows($query_run) >=1)  
{
 
?>
 
   <script> alert ("The Name Of This Account Exist.");
 
 window.location="sheet_acc1.php";
 
 
</script>
 <?
 // header("location:index "); 
 exit();
 

  }
 
  
  

if(empty($txt1)||empty($txt2)){
    //  header("location:reqatm ");
  
  //  echo"Please fill the form completely";
	?>
    <script> alert ("Please fill the form completely");</script>
	  
	<? 
	  header("location:sheet_acc1.php ");  
	
	  
	   } else{
	
	//  $cust_id=  $_SESSION['user_id'];
	
	 

	
	      $query = mysql_query(" INSERT INTO sheet_acct (grp_acct_name ,sheet_acct_type,sheet_acct_name) VALUES  ('{$txt1}','{$txt2}','{$txt3}')") or die(mysql_error());
	 
	  ?>
	
	   <script> //alert ("You Have Created an Account successfully."); </script>
	<?php 
	//header("location: sheet_acc1.php ");
	}
	  // echo "<div id='box'>$message</div>";
	} 

	?>




				
	<form action="sheet_acc1.php" method="POST">

<p><span>GroupAccount/Ledger</span>
<select id="statedd1" name="txt1"  class="form-control" data-validation="required"  style="width:200px;" data-validation-error-msg="Please Select The Type Of GroupAccount/Ledger You Want To Create"  ></select>
<p><span>Type</span>
<select name="sid" id="districtdd1"     class="form-control" data-validation="required"  style="width:200px;" data-validation-error-msg="Please Select The Type"  ></select>

		

<p><span>Account  Name</span> <input type="text" id="maid" name="txt3" class="form-control"  data-validation="custom"   data-validation-regexp="^([A-z\s]+)$" style="width:200px;" data-validation-error-msg="Please Enter The Name Of The Account You Want Create"  /><div id="stat"></div></p>		

	<br>
 <input   type="submit"  class="btn btn-primary" name="submit" value="submit"/>

 	</form>
	<script>
var input = document.getElementById("maid");
input.onkeyup = function() {
    input.value = input.value.replace(/equity|capital/i,"");
}
</script>

	<hr> 
	 <div class="box-header">
                  <h3 class="box-title">List Of Account </h3>
       
	</div>
	<br>
		<table id="example1" class="table table-bordered table-hover">
    	<thead>
    	<tr>
            
		<th width="10%">Account Name</th>	
        <th width="10%">Group Of Account / Ledger Accounts</th>
        <th width="10%">Type</th>
        
        
        
		
			<th width="5%">EDIT</th>
			<th width="5%">DELETE</th>
			
			</tr> 
        </thead>
	<tbody>

<?php
			 $h = mysql_query("select * FROM sheet_acct ORDER BY  'grp_acct_name' ") or die(mysql_error()); 
			 
			while($tr = mysql_fetch_array($h))
			{
		?>
		
		
        <tr class="record">
        	
            <td><br><?php echo $tr['sheet_acct_name']; ?></td>
		    <td><br><?php echo $tr['grp_acct_name']; ?></td>
		    <td><br><?php echo $tr['sheet_acct_type']; ?></td>
		  
           
         
		 
		  
          <!--  <td><br><?php //echo $tr['tricon_comment']; ?></td> --> 
			<td><br>
		&nbsp;&nbsp;&nbsp;&nbsp; <a  rel="facebox" href="sheet_acc1_edit.php?erp_id=<?php echo $tr['sheet_acct_id']; ?>" class=" btn-sm">
          <span class="glyphicon glyphicon-pencil"></span> 
        </a> </td> <td><br>
		&nbsp;&nbsp;&nbsp;&nbsp;    <a href="#" id="<?php echo $tr['sheet_acct_id']; ?>" class="delbutton" title="Click To Delete"><span class="glyphicon glyphicon-trash"></a></td>

	
		
		
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
<script src="location/js/selector.js"> </script>

		<script>
$(document).ready(function(){
$('#maid').keyup(username_check);
});
	
function username_check(){	
var username = $('#maid').val();
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
	
	$('#stat').html("Account Name "+ username+" Already Exist");
	$('#maid').val("");
	 
	}else{
	$('#stat').html("");
	$('#cross').hide();
	$('#tick').fadeIn();
	     }

}
});
}



}

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
   url: "del2.php",
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


 $.validate( );
 // setup datepicker
    $("#datepicker").datepicker();
 $("#datepicker2").datepicker();
 
// Restrict presentation length
$('#request').restrictLength( $('#pres-max-length') );
		</script>
	<?php  include '../include/footer.php';?>