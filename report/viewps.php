<?php  include '../include/header.php';?>
   <?php  
    
	$cop=$_GET['erp_id'];
	$ps=$_GET['pi'];
	
	$qy = "SELECT sp_code,e_id FROM pay_spe WHERE sp_code='$ps'";
  $qy_run = mysql_query($qy);

  $roy = mysql_fetch_array($qy_run);
   $ro = $roy['sp_code'];
   $ro2 = $roy['e_id'];
  
  if ( $ro !== $ps ||  $ro2 !== $cop ) 
{
 
  header("location: sal_rp.php "); 
 exit();
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


<li class="active treeview">
              <a href="#">
                <i class="fa fa-file-text"></i> <span>Report</span> <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="../report/sales_rp.php"><i class="fa fa-circle-o"></i> Sales Report</a></li>
                <li><a href="../report/acct_rp.php"><i class="fa fa-circle-o"></i>Account Report</a></li>
                <li class="active"><a href="../report/sal_rp.php"><i class="fa fa-circle-o"></i> Salary Report</a></li>
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
            Salary Report
            <small>PaySlip</small>
          </h1>
          <!--<ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="crea.php">Select Customer</a></li>
            <li class="active">Create Pay Slip</li>
          </ol>-->
        </section>

        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
             
                </div><!-- /.box-header -->
                <div class="box-body">
               
			     <a href="#"  onclick="return print1('print2')" class="btn btn-primary btn-sm" role="button"> Print <i class="fa fa-print fa-lg"></i></a>
<div id="print2">
			   <?php  
    
	$cop=$_GET['erp_id'];
	$ps=$_GET['pi'];

	$cop1=$cop;
	
			 $hap = mysql_query("select e_name FROM empinfo where e_id='{$cop1}' ") or die(mysql_error()); 
			 
		$rap = mysql_fetch_array($hap);

		
if (isset($_POST['submit'])) {
	
		$ps2=$_GET['pi'];
	
	$qy2 = "SELECT sp_code FROM pay_spe WHERE sp_code='$ps2'";
  $qy_run2 = mysql_query($qy2);

  $roy2 = mysql_fetch_array($qy_run2);
   $ro2 = $roy2['sp_code'];
  
  if ( $ro2 === $ps2) 
{
 
  header("location: crea_pslip.php "); 
 exit();
}
	
	
	 $lp = $rap['e_name'];
	 
	

 header("location: crea_pslip.php "); 
 exit();
}
?>

<?php 

$sql = mysql_query("SELECT * FROM pay_spe WHERE sp_type='earnings' AND  e_id='{$cop1}' AND  sp_code='{$ps}'");
  
  $y2 = mysql_fetch_array($sql);


 
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
	<?php
echo '<center><p><h1><b>'. $to1['profile_name'].'</b></h1></p></center>';
echo '<center>'. $to1['comp_num'].'</center>';
echo '<center>'. $to1['comp_email'].'</center>';
echo '<center>'. $to1['comp_add'].'</center>';
echo "<Center><p><h2><b>PaySlip</b></h2></p></Center>";
  ?>


<div class="box-body">
<h2><?php  echo $rap['e_name']; ?></h2>
 <p><span><b>Date Of Payment :</b></span> <?php  echo $y2['sp_pay']; ?> </p>
</p>

<p><span><b>Mode Of Payment : </b></span><?php  echo $y2['sp_mode']; ?> </p>

<p><span><b>PaySlip Month And Year :</b></span>

<?php  echo $y2['sp_mth']." ".$y2['sp_yr']; ?>

</p>

</div>
<br><br>
<p><b>EARNINGS</b></p>
<table class="table table-bordered table-hover">
	<thead>
		<tr>
		<th width="264">Items</th>
		<th width="199" style="width:150px;">Amount</th>
		</tr>
		<tbody>
		
		<?php $sql1 = mysql_query("SELECT sp_name_e,sp_amount_e  FROM pay_spe WHERE sp_type='earnings' AND  e_id='{$cop1}' AND  sp_code='{$ps}'");
 
             while($tr = mysql_fetch_array($sql1))
			{

 ?>
		

<tr>
 <td><?php echo $tr['sp_name_e']; ?></td>
			<td><?php echo $tr['sp_amount_e']; }?> </td>
 
</tr>



<tfoot> 
	<tr>
    <td><b>Total Earnings</b></td>
   <? $sq1 = mysql_query("SELECT sum(sp_amount_e)  FROM pay_spe WHERE sp_type='earnings' AND  e_id='{$cop1}' AND  sp_code='{$ps}'");
 
            $t1 = mysql_fetch_array($sq1)
			?>
   <td><b><?php echo $earn=$t1['sum(sp_amount_e)'];  $GLOBALS['earn'];?></b></td>
  
  </tr>
</tfoot>
</tbody>
</table>
<b>DEDUCTIONS</b>
<table class="table table-bordered table-hover"  >
<thead>
<tr>
<th width="264">Items</th>
<th width="199" style="width:150px;">Amount</th>
</tr>				
			</thead>
<tbody>
<?php $sql2 = mysql_query("SELECT * FROM pay_spe WHERE sp_type='deductions' AND  e_id='{$cop1}' AND  sp_code='{$ps}'");
 
             while($tr2 = mysql_fetch_array($sql2))
			{

 ?>
  <tr>

 
 <td><?php	echo $tr2['sp_name_d']; ?></td>
 <td><?php echo $tr2['sp_amount_d']; } ?></td>
 

</tr>

</tbody>

<tfoot>
<tr>	
    
   <td><b>Total Deductions</b></td>
<?php   $sq2 = mysql_query("SELECT sum(sp_amount_d)  FROM pay_spe WHERE sp_type='deductions' AND  e_id='{$cop1}' AND  sp_code='{$ps}'");
 
            $t2 = mysql_fetch_array($sq2)
			?>
   
   <td><b><?php echo $deduct=$t2['sum(sp_amount_d)']; $GLOBALS['deduct']; ?></b></td>
   </tr>
  <tr>
  
   <td><b>Net Pay</b></td>
   
   <td><b><?php $net= $earn-$deduct; echo $net;?></b></td>
  </tr>
</tfoot>

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