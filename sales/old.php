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
        
        <li class="active"><a href="../rem/rem_stf.php"><i class="fa fa-circle-o"></i>Staff</a></li>
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
      <li class="active treeview">
              <a href="#">
                <i class="fa fa-money"></i>
 <span>Sales</span> <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li class="active"><a href="../sales/crea.php"><i class="fa fa-circle-o"></i> Create Sales</a></li>
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
      </aside><!--- =============================================== -->

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Sales
            <small>Create Sales</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="../home.php"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Select Customers</li>
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
if (isset($_POST['submit'])) {
	
  $txt1 = mysql_real_escape_string( $_POST["txt1"] );
  $txt2 = mysql_real_escape_string( $_POST["txt2"] );
  $txt3 = mysql_real_escape_string( $_POST["txt3"] );
  $txt4 = mysql_real_escape_string( $_POST["txt4"] );
  $txt5 = mysql_real_escape_string( $_POST["txt5"] );
  
  
   
   $query = "SELECT `c_name` FROM `customerdetails` WHERE `c_name`='{$txt1}'";
$query_run = mysql_query($query);


if (mysql_num_rows($query_run) >=1)  
{
  $mngs='Customer name '.$txt1.' already exist';
	
	   header("location:add_cust.php?msg2=".$mngs);
				 exit();

  }
 
  
  

if(empty($txt1) || empty($txt2) || empty($txt3)|| empty($txt5)){
    
	
	$mngs='Please fill the form completely';
	
	   header("location:add_cust.php?msg2=".$mngs);
				 exit();
	
	   } else{
	
	$query = mysql_query(" INSERT INTO customerdetails ( `c_name`, `c_address`, `c_phonenumber`, `c_accountnumber` , `c_email` ) VALUES  ('{$txt1}','{$txt2}','{$txt3}','{$txt4}','{$txt5}')") or die(mysql_error());
	 
  	
	$mng='You Have added '.$txt1.' as a customer successfully';
	
	   header("location:add_cust.php?msg=".$mng);
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
				<script>
function updatesum() {
document.form__2.txt3.value = (document.form__2.txt2.value-0)-(document.form__2.txt2b.value-0);

document.form__2.txt4.value = (document.form__2.txt3.value-0)*145;
}
</script>

<?php  include '../include/location/selectbranch.php';?>
<span>States</span>
<select ></select>
<span>Branch</span>
<select name="sid" id="districtdd1"></select>



	<form  name='form__2' action="add_cust.php" method="POST">

<p><span>Pump Name</span><select  name="txt1" class="form-control"  data-validation="required"  type="text" style="width:200px;" required>
<option value=""></option>
<?php $h = "select * FROM e_pump "  or die(mysql_error()); 
			 $h2= mysql_query($h);
			 while($tr = mysql_fetch_array($h2)){ ?>

<option value="<?php echo $tr['p_name']; ?>"><?php echo $tr['p_name']; ?> (<?php echo $tr['p_product']; ?>)</option>

			 <?php } ?>
</select></p>
	<h4>Meter Reading</h4>
<p><span>Closing Meter</span><input  name="txt2" onKeyup="updatesum()" value="0"  class="form-control" data-validation-optional="required"  data-validation-error-msg="Please Enter Closing Meter" type="text" style="width:200px;" /></p>		

<p><span>Opening Meter</span><input  name="txt2b"  onKeyup="updatesum()" value="0" class="form-control" data-validation="required"   data-validation-error-msg="Please Enter Opening Meter" type="text" style="width:200px;" /></p>		


<p><span>Volume Sold X (145)</span><input  name="txt3"  onChange="updatesum()" value="0" class="form-control" data-validation="required"   data-validation-error-msg="Please Enter Volume" type="text" style="width:200px;" /></p>		

<p><span>Price</span><input  name="price"  onChange="updatesum()" value="0" class="form-control" data-validation="required"   data-validation-error-msg="Please Enter Volume" type="text" style="width:200px;" /></p>		

<p><span>Amount</span><input  name="txt4"  class="form-control" data-validation="required"   data-validation-error-msg="Please Enter Amount" type="text" style="width:200px;" /></p>		


	
		<br><br>
 <input   type="submit"  class="btn btn-primary" name="submit" value="submit"/>

		

 	</form>
		
	
		
               <hr>
               
				 <h1>Today Sales</h1>

<table id="example1" class="table table-bordered table-hover">
    	<thead>
    	<tr>
            
        <th width="10%">Date</th>
        <th width="10%">Pump Name</th>
		<th width="10%">Volume Sold</th>
		<th width="10%">Amount</th>
        
        
		
			<th width="5%">	Edit</th>
			
			
			</tr> 
        </thead>
	<tbody>

<?php
			
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
$pin = 'INV/'.''.generatePIN();



			 $h = mysql_query("Select * FROM customerdetails ORDER BY c_id DESC ; ") or die(mysql_error()); 
			 
			 
			 
			while($tr = mysql_fetch_array($h))
			{
		?>
		
		
        <tr>
        	
            <td><br><?php echo $tr['c_name']; ?></td>
		    <td><br><?php echo $tr['c_phonenumber']; ?></td>
			<td><br><?php echo $tr['c_accountnumber']; ?></td>
            <td><br><?php echo $tr['c_email']; ?></td>           
		    			<td> <br>
			
			
			<?php
			
			$id=$tr['c_id'];
			
			$h2 = mysql_query("select * FROM va_t  ") or die(mysql_error()); 
			 
			$tr2 = mysql_fetch_array($h2);
			
 
$acd= $tr2['vat_status'];
	 if($acd==1){ ?>
		 
		 &nbsp;&nbsp;&nbsp;&nbsp; <a  href="crea_sales_vat.php?erp_id=<?php echo $id; ?>&pin=<?php echo $pin ;?>" class=" btn-sm">
          <i class="fa fa-pencil"></i> 
        </a>
		 <?php }else{ ?>
			&nbsp;&nbsp;&nbsp;&nbsp; <a   href="crea_sales.php?erp_id=<?php echo $id; ?>&pin=<?php echo $pin ;?>" class=" btn-sm">
          <i class="fa fa-pencil"></i> 
        </a> 
		 <?php } ?>
		</td> 
		
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
    
	

	
		<?php  include '../include/footer.php';?>	