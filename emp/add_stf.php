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
  <li class="active treeview">
              <a href="#">
                <i class="fa fa-male"></i> <span>Employee</span> <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li class="active"><a href="../emp/add_stf.php"><i class="fa fa-circle-o"></i> Add Staff</a></li>
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
           Employee
            <small>Add Staff</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="../home.php"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Add Staff</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Add Staff</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
               
				  
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
  
  
   
   $query = "SELECT `e_name` FROM `empinfo` WHERE `e_name`='{$txt1}'";
$query_run = mysql_query($query);

if (mysql_num_rows($query_run) >=1)  
{
 
?>
 
   <script> alert ("Employee name already exist.");
 
 window.location="add_stf.php";
 
 
</script>
 <?
 // header("location:index "); 
 exit();
 

  }
 
  
  

if(empty($txt1) || empty($txt2) || empty($txt3)|| empty($txt4)|| empty($txt5)|| empty($txt6)|| empty($txt7)|| empty($txt8)|| empty($txt9)){
    //  header("location:reqatm ");
  
  //  echo"Please fill the form completely";
	?>
    <script> alert ("Please fill the form completely");</script>
	  
	<? 
	  header("location:add_stf.php ");  
	
	  
	   } else{
	
	//  $cust_id=  $_SESSION['user_id'];
	   	 
		//("UPDATE  cust_atm_request SET form_id='$cust_id', cust_atm_request_date='$txt1', cust_atm_request_states='$txt2', cust_atm_request_branch='$txt3', cust_atm_request_currency='$txt4', cust_atm_request_cardtype='$txt5', cust_atm_request_domiciliaryaccountnumber='$txt6', cust_atm_request_requesttype='$txt7', cust_atm_request_reasonforrequest='$txt8', cust_atm_request_accounttype='$txt9', cust_atm_request_accountname='$txt10', cust_atm_request_accountnumber='$txt11', cust_atm_request_cardpan1='$txt12', cust_atm_request_cardpan2='$txt13', cust_atm_request_account1='$txt14', cust_atm_request_account2='$txt15', cust_atm_request_fullname='$txt16', cust_atm_request_dob='$txt17', cust_atm_request_occupation='$txt18', cust_atm_request_mobilenumber='$txt19', cust_atm_request_email='$txt20', cust_atm_request_testquestion='$txt21', cust_atm_request_answer='$txt22' WHERE cust_id='$cust_id'
	   $query = mysql_query(" INSERT INTO empinfo ( `e_name`, `e_d.o.b`, `e_gender`,  `e_phonenumber`,`e_mail`, `e_address`, `e_banknam`, `e_accname`, `e_accnumber` ) VALUES  ('{$txt1}','{$txt2}','{$txt3}','{$txt4}','{$txt5}','{$txt6}','{$txt7}','{$txt8}','{$txt9}')") or die(mysql_error());
	 
	 header("location: add_stf.php ");
	  ?>
	
	   <script> alert ("You Have added an Employee successfully."); </script>
	<?php }
	  // echo "<div id='box'>$message</div>";
	} 

	?>





<!--<h1>Add Customers </h1>-->

				
	<form action="add_stf.php" method="POST">


<p><span>Employee Name</span> <input type="text" name="txt1" class="form-control" type="text" data-validation="custom"   data-validation-regexp="^([A-z\s]+)$"   style="width:200px;" data-validation-error-msg="Please Enter The Employee Name"  /></p>		
<p><span>Date Of Birth</span><input name="txt2" class="form-control"  data-validation="date required" data-validation-help="month/day/year" data-validation-format="mm/dd/yyyy" id="datepicker"  type="text" style="width:200px;" required/></p>
</p>
<p><span>Gender</span><select  name="txt3" class="form-control"  data-validation="required"  type="text" style="width:200px;" required>
<option value=""></option>
<option value="Male">Male</option>
<option value="Female">Female</option>
</select></p>

<p><span>Phonumber</span> <input   name="txt4" class="form-control"    data-validation-error-msg="Please Enter The Employee Phonumber"  data-validation="number length" data-validation-length="min11" type="text" maxlength="13"    style="width:200px;" type="text"/></p>

<p><span>Email</span> <input name="txt5" class="form-control" style="width:200px;"  data-validation="email" data-validation-error-msg="E-mail is not valid" /></p>

<p><span>Address</span> <textarea name="txt6" class="form-control" type="text"  data-validation="alphanumeric" data-validation-allowing="-_, " data-validation-error-msg="Please Enter The Employee address"  style="width:290px;"></textarea></p>		

<p><span>Bank Name</span> <input type="text" name="txt7" class="form-control" type="text" data-validation="custom"   data-validation-regexp="^([A-z\s]+)$"   style="width:200px;" data-validation-error-msg="Please Enter The Employee Bank Name"  /></p>		

<p><span>Account Name</span> <input type="text" name="txt8" class="form-control" type="text" data-validation="custom"   data-validation-regexp="^([A-z\s]+)$"   style="width:200px;" data-validation-error-msg="Please Enter The Employee Account Name"  /></p>		

<p><span>Account Number</span><input  name="txt9"  class="form-control" data-validation="required" data-validation="number length" data-validation-length="min10"  maxlength="10"  data-validation-error-msg="Please Enter Your Account Number " type="text" style="width:200px;" /></p>		


		<br><br>
 <input   type="submit"  class="btn btn-primary btn-lg" name="submit" value="Save"/>

		

 	</form>
		
		
	
		
                </div><!-- /.box-body -->
              </div><!-- /.box -->

            </div><!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
        
<link href="./css/jquery-ui.css" type="text/css" rel="stylesheet"/>
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
	<?php  include '../include/footer.php';?>