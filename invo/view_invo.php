<?php  include '../include/header.php';?>
<?php



$c =$_GET['erp_id'];

  
  
$d =$_GET['cde'];





 $query = "SELECT c_id , sales_code FROM  cust_pay WHERE sales_code='$d'";
$query_run = mysql_query($query);

   $ck=mysql_fetch_array($query_run);

if ($ck['c_id'] !== $c ||$ck['sales_code'] !==$d ) 
{
 
  header("location:crea2.php "); 
 exit();
 

  }
 
else{
	
	
	
}

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
        
        <li class="active"><a href="../rem/rem_stf.php"><i class="fa fa-circle-o"></i>Staff</a></li>
                <li><a href="../rem/rem_cu.php"><i class="fa fa-circle-o"></i> Customers</a></li>
                
              </ul>
            </li>
		  <li class="treeview">
              <a href="#">
                <i class="fa fa-users"></i> <span>Customers</span> <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
        
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
 
      <li class="active treeview">
              <a href="#">
                <i class="fa fa-table"></i> <span>Invoice</span> <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="../invo/crea.php"><i class="fa fa-circle-o"></i> Create Invoice</a></li>
                <li class="active"><a href="../invo/crea2.php"><i class="fa fa-circle-o"></i> View Invoice</a></li>
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
      </aside>

          
      <!-- =============================================== -->

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Invoice
            <small>View Invoices</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="../home.php"><i class="fa fa-dashboard"></i> Home</a></li>
			<li><a href="crea2.php"><i class="fa fa-users"></i>Select Customers</a></li>
            <li class="active">Invoice</li>
          </ol
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
  <a href="#"  onclick="return print1('print2')" class="btn btn-primary btn-sm" role="button"> Print <i class="fa fa-print fa-lg"></i></a>
<div id="print2">

<?php
$k1 = mysql_query("Select * FROM comp_profile ") or die(mysql_error()); 
 $to1 = mysql_fetch_array($k1);
    echo '<center><p><img height="70" class="img-responsive" width="70" src="data:image;base64,'.$to1['profile_pic'].' "></p></center>';
	
	?>  						
<style>

table {
	
    border-collapse: collapse;
}

table, th, td {
    border: 1px solid black;
}

</style>
	
<style>

#infow{
	bottom-margin:150px;
	}
.left{
	
	float:left;
	
}
.right{
	float:right;
		
}

</style>

	
	
	<?php
echo '<center><p><h1><b>'. $to1['profile_name'].'</b></h1></p></center>';
echo '<center>'. $to1['comp_num'].'</center>';
echo '<center>'. $to1['comp_email'].'</center>';
echo '<center>'. $to1['comp_add'].'</center>';
echo "<Center><p><h2><b>Invoice</b></h2></p></Center>"; ?>

<?php
$c =$_GET['erp_id'];
$id =$_GET['erp_id'];
$id2 =$_GET['cde'];





 $h = mysql_query("select * FROM customerdetails WHERE c_id='$c' ") or die(mysql_error()); 
			 
			$tr = mysql_fetch_array($h)
		
		?>
<div id="infow">
<div class="left">
	 <h3><b><?php echo $tr['c_name']; ?></b></h3>
			<p><?php echo $tr['c_address']; ?></p>
		    <p><?php echo $tr['c_phonenumber']; ?></p>
			<p><?php echo $tr['c_email']; ?></p>
</div>



 <?php $h = mysql_query("SELECT * FROM   cust_pay WHERE cust_pay.sales_code = '$id2'  ") or die(mysql_error()); 
	
$tron = mysql_fetch_array($h) ;	?>


<div class="right">
 <p style="text-align:left;"><b>Invoice Number:</b>  <?php echo $tron['sales_code']; ?> </p>
 <p  style="text-align:left;"><b>Date Of Sales:</b> <?php $p12=$tron['date_sales'];   $da1 = date('d/m/Y', strtotime($p12)); if ($da1=="01/01/1970"){ echo"";}else{ echo $da1;}?></p>
   <p style="text-align:left;"><b>Amount To Pay:</b>  <?php echo $tron['total_amount']; ?> </p>
   <?php if($tron['vat_stat']=='1'){?>
  <p style="text-align:left;"><b>VAT :</b> <?php
  
                      $trh = mysql_query("select * FROM va_t ") or die(mysql_error()); 
                                   $tion = mysql_fetch_array($trh);
					  echo $tion['vat_code']; ?> </p>
                             <?php } ?> 
</div> 
</div> 
<br><br>
<br><br>
<br><br>
<br><br>
<br><br>
 <?php


			 $h = mysql_query("SELECT * FROM   erp_inv  WHERE erp_inv.sales_code = '$id2'  ") or die(mysql_error()); 
			 
			
?>
<table class="table table-bordered table-hover" style="text-align:center;" align="center">
	<thead>
    <tr>
		<th style="text-align:center;" width="20%">ProductName</th>
		<th style="text-align:center;" width="5%">Quantity</th>
		<th style="text-align:center;" width="5%">Price</th>

		<th style="text-align:center;" width="20%">Amount</th>
        </tr>
  </thead>
 <tbody>


<?php

while($tr = mysql_fetch_array($h)  )
			{
		?>
<tr>

     <td><br><?php echo $tr['product_name']; ?></td>
		    <td><br><?php echo $tr['quantity']; ?></td>
			
            <td><br><?php echo $tr['price']; ?></td>           
		 
           <td><br><?php echo $tr['amount']; ?></td>
          
</tr>


  <?php }	?>
</tbody>

	<?php
	
	 $h = mysql_query("SELECT * FROM   cust_pay WHERE cust_pay.sales_code = '$id2'  ") or die(mysql_error()); 
	
 $tr2 = mysql_fetch_array($h); 
			
	if($tr2['vat_stat']=='1'){
	?>
	<tfoot>
   <tr>
	
    <th></th>
	<th></th>
    
    <th><center>SUBTOTAL</center></th>
    <th style="text-align:center;"><?php echo $tr2['sub_total']; ?></th>
	</tr>
	
	
    <tr>
	<th></th>
	<th></th>
    <th><center><?php  $h = mysql_query("select * FROM va_t ") or die(mysql_error()); 
			 
			$tr = mysql_fetch_array($h);?>VAT(<?php  echo $tr['vat_value']; ?>%)</center></th>
    
   <th style="text-align:center;"><?php echo $tr2['cust_pay_vat']; ?></th>
</tr>
  <tr>
	<th></th>
	<th></th>
    <th><center>TOTAL</center></th>
    <th style="text-align:center;"><?php echo $tr2['total_amount']; ?></th>
  </tr>
</tfoot>
	<?php } else { ?>
<tfoot>
  
	

  <tr>
	<th></th>
	<th></th>
    <th><center>TOTAL</center></th>
    <th style="text-align:center;"><?php echo $tr2['total_amount']; ?></th>
  </tr>
</tfoot>
	<?php }?>
</table>
		</div>
                </div><!-- /.box-body -->
              </div><!-- /.box -->

            </div><!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
	  <script src="../js/jquery/jquery-2.1.3.min.js"></script>
<script type="text/javascript">
function print1(strid)
{
if(confirm("Do you want to print?"))
{
var values = document.getElementById(strid);
var printing =
//window.open('','','left=0,top=0,width=794,height=500,toolbar=0,scrollbars=0,sta­?tus=0');
window.open();
printing.document.write(values.innerHTML);
printing.document.close();
printing.focus();
printing.print();
printing.close();
}
}
</script>
	  <?php  include '../include/footer.php';?>	