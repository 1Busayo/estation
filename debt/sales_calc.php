 <script type = "text/javascript">
    function changeHashOnLoad() {
        window.location.href += "#";
        setTimeout("changeHashAgain()", "50");
    }

    function changeHashAgain() 
    {          
        window.location.href += "1";
    }

    var storedHash = window.location.hash;
    window.setInterval(function () {
        if (window.location.hash != storedHash) {
            window.location.hash = storedHash;
        }
    }, 50);

	changeHashOnLoad();
	
    </script>



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
             <li class="active treeview">
              <a href="#">
                <i class="fa fa-list-alt"></i> <span>Debtors</span> <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="../debt/deb_view.php"><i class="fa fa-circle-o"></i> View Debtors</a></li>
                <li class="active"><a href="../debt/pay_deb.php"><i class="fa fa-circle-o"></i> Debtors Payment</a></li>
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
           Debtors
           <small>CUSTOMERS  DEBT PAYMENT</small> 
          </h1>
          <ol class="breadcrumb">
            <li><a href="../home.php"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="pay_deb.php"><i class="fa fa-list-alt"></i>Debtors Payment</a></li>
			<li class="active">Make Debt Payment </li>
          </ol>
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
			


$c =$_GET['erp_id'];

  
  
$d =$_GET['code'];




			

//$c =$_GET['erp_id'];


 $query = "SELECT * FROM  customerdetails WHERE c_name='$c'";
$query_run = mysql_query($query);

if (mysql_num_rows($query_run) ==0) 
{
 
  header("location:pay_deb.php "); 
 exit();
 

  }
  else{
	  
  }
  
$ca =$_GET['erp_id'];


 $cm = mysql_query("SELECT c_id FROM customerdetails where c_name='$ca'") or die(mysql_error()); 
              
			 $hp= mysql_fetch_array($cm);
        $cid= $hp['c_id'];

		
		$query = "SELECT c_id , sales_code FROM  cust_pay WHERE sales_code='$d'";
$query_run = mysql_query($query);

   $ck=mysql_fetch_array($query_run);

if ($ck['c_id'] !== $cid ||$ck['sales_code'] !==$d ) 
{
 
  header("location:pay_deb.php "); 
 exit();
 

  }
 
else{
	
	
	
}

		

 /*$query = "SELECT sales_code FROM  cust_pay WHERE sales_code='$'";
$query_run = mysql_query($query);

if (mysql_num_rows($query_run) !==1) 
{
 
  header("location:pay_deb.php "); 
 exit();
 

  }
 
else{
	
	
	
}*/


			if (isset($_POST['submit'])) {
	
  //$txt1 = mysql_real_escape_string( $_POST["txt1"] );
  //$txt2 = mysql_real_escape_string( $_POST["txt2"] );
  $txt3 = mysql_real_escape_string( $_POST["t2"] + $_POST["txt3"] );
  $txt4 = mysql_real_escape_string( $_POST["txt4"] );
  $da = mysql_real_escape_string( $_POST["txt5"] );
  
  $txt5 = date('Y-m-d', strtotime($da));
 
if(empty($txt3) || empty($txt5)){
   
  
    echo"Please fill the form completely";
	?>
    <script> alert("Please fill the form completely");</script>
	  

	<?php 
	  header("location:sales_calc.php?erp_id=".$c."&code=".$d );  
	
	
	   } else{
	

	$c =$_GET['erp_id'];
	
	
	$dc =$_GET['code'];
	
	 $query = mysql_query(" UPDATE cust_pay SET amount_paid ='{$txt3}' , balance_to_pay='{$txt4}' , date_paid='{$txt5}' WHERE  sales_code='$dc' ") or die(mysql_error());
	  

	   header("location:pay_deb.php");
	 
	 
	  // echo "<div id='box'>$message</div>";
	} 
			}
	?>

<?php

$ia = $_GET['erp_id'];

 $h = mysql_query("SELECT c_id FROM customerdetails where c_name='$ia'") or die(mysql_error()); 
			
			$r = mysql_fetch_array($h);
 

$id = $r['c_id'];

$code = $_GET['code'];

			// $h = mysql_query("select * FROM cust_pay Where c_id='$id' ") or die(mysql_error()); 
			 
			 $h = mysql_query("SELECT * FROM  cust_pay, customerdetails  WHERE cust_pay.c_id=customerdetails.c_id and cust_pay.c_id= '$id' AND cust_pay.sales_code = '$code' ;  ") or die(mysql_error()); 
			 
		$tr = mysql_fetch_array($h);
		
		if ($tr['balance_to_pay']!=0)
		
		{
 			
?>
<script>
function updatesum() {
document.form__2.txt4.value = (document.form__2.txt2.value-0)-(document.form__2.txt3.value-0);
}
</script>



<form  name="form__2" action="sales_calc.php?erp_id=<?php echo $tr['c_name']; ?>&code=<?php echo $tr['sales_code'] ;?>" method="POST">


<p><span>Customers Name</span> <input type="text" name="txt1" class="form-control" readonly value=" <?php echo $tr['c_name'];?>"  data-validation="required"   style="width:200px;" data-validation-error-msg="Please Enter The Customers Name"  /></p>		

<p><span>Amount To Pay</span> <input type="text" name="txt2"  class="form-control" onChange="updatesum()" readonly  value="<?php echo $tr['balance_to_pay'];?>"   style="width:200px;" /></p>		

<input type="hidden" name="t2"  readonly   value="<?php echo $tr['amount_paid'];?>" />
<p><span>Amount Paid</span> <input  type="text"  name="txt3" class="form-control" onKeyup="updatesum()" value="0"    style="width:200px;" /></p>

<p><span>Balance To Pay</span> <input type="text"  name="txt4" class="form-control" onKeyup="updatesum()" readonly  value=""  style="width:200px;" /></p>
<p>	<span>Date Paid</span>
<input name="txt5" class="form-control"  data-validation="date required" data-validation-format="mm/dd/yyyy" id="datepicker"  type="text" style="width:200px;" required/></p></br>

		<br><br>
 <input   type="submit"  class="btn btn-primary" name="submit" value="submit"/>

		

 	</form>
		
	
			<?php 
			
		}else {			
			
?>
<script>
function updatesum() {
document.form__2.txt4.value = (document.form__2.txt2.value-0)-(document.form__2.txt3.value-0);
}
</script>
<form  name="form__2" action="" method="POST">


<p><span>Customers Name</span> <input type="text" name="txt1" class="form-control" readonly value=" <?php echo $tr['c_name'];?>"  data-validation="required"   style="width:200px;" data-validation-error-msg="Please Enter The Customers Name"  /></p>		

<p><span>Amount To Pay</span> <input type="text" name="txt2"  class="form-control" onChange="updatesum()" readonly  value="<?php echo $tr['total_amount'];?>"   style="width:200px;" /></p>		

<p><span>Amount Paid</span> <input  type="text"  name="txt3" class="form-control" onKeyup="updatesum()" value="0"    style="width:200px;" /></p>

<p><span>Balance To Pay</span> <input type="text"  name="txt4" class="form-control" onKeyup="updatesum()" readonly  value=""  style="width:200px;" /></p>
<p>	<span>Date Paid</span>
<input name="txt5" class="form-control"  data-validation="date required" data-validation-format="mm/dd/yyyy" id="datepicker"  type="text" style="width:200px;" required/></p></br>

		<br><br>
 <input   type="submit"  class="btn btn-primary" name="submit" value="submit"/>

		

 	</form>
		
	



	<?php		
			
			
			
			}
			
			

			
			
			?>


  </div><!-- /.box -->

            </div><!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
    
<link href="../css/bootstrap.min.css" type="text/css" rel="stylesheet"/>
<link href="../css/jquery-ui.css" type="text/css" rel="stylesheet"/>
	  <script src="../js/jquery/jquery-2.1.3.min.js"></script>
	 <script src="../js/jquery/jquery-ui.min.js"></script>
<script src="../js/validator/jquery.form-validator.min.js"></script>
<script>

 $.validate( );
 // setup datepicker
    $("#datepicker").datepicker();

 
// Restrict presentation length
 
 </script>

	

	
		<?php  include '../include/footer.php';?>	