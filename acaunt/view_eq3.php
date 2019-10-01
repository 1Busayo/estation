<?php  include '../include/header.php';?>
<?php  
    
	$cop=$_GET['erp_id'];
	$cop1=$_GET['pes'];
	$cop2=$_GET['typ'];
	
	$qy = mysql_query("select * FROM owners_prop where own_code='{$cop}' ") or die(mysql_error()); 
	
	
	
  

  $roy = mysql_fetch_array($qy);
   $ro2 = $roy['own_code'];
  
  if (  $ro2 !== $cop || empty($cop1)|| empty($cop2) ) 
{
 
  header("location: view_eq.php "); 
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
      <li class="active treeview">
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
				<li class="active"><a href="../acaunt/view_eq.php"><i class="fa fa-circle-o"></i> View Equity</a></li>
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
       

	   <?php
				$a1=$_GET['erp_id'];
			 $h = mysql_query("select * FROM owners_prop where own_code='{$a1}' ") or die(mysql_error()); 
			 
		$tr = mysql_fetch_array($h);
			
		?>
		  <h1>
		  
            <?php echo $tr['own_name'];?>
            <small></small>
          </h1>
        <!--  <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="sheet_pre1.php">Select Account</a></li>
            <li class="active">View Account</li>
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
               


<div class="box box-primary">
<h3 class="box-title"><?php echo $tr['own_name']; echo'&nbsp;&nbsp;&nbsp;&nbsp; '.$ty=mysql_real_escape_string($_GET['typ']); echo'&nbsp;&nbsp;&nbsp;&nbsp; '.$pe=mysql_real_escape_string($_GET['pes']);?></h3>

</div> <!--/box header> -->
<!-- form start -->

<div class="box-body">

</div>
<br>
		<table id="example1" class="table table-bordered table-hover">
    	<thead>
    	<tr>
            
		<th width="10%">Account Name</th>	
		<th width="10%">Payment Mode</th>	
		<th width="10%">Account Type</th>	
		<th width="10%">Amount</th>
        <th width="10%">Date</th>
        
       	</tr> 
        </thead>
	<tbody>

<?php
          

$id=$_GET['erp_id'];

$p=$_GET['pes'];

$h = mysql_query("select grp_acct_name , sheet_acct_type , sheet_acct_name FROM sheet_acct WHERE sheet_acct_id='{$id}'  ") or die(mysql_error()); 
			 
			$tr5 = mysql_fetch_array($h);
   
$type =mysql_real_escape_string($_GET['typ']); 
 



		?>
		<?php 
		if ($type=='Capital'){
			
			
			
			 $h = mysql_query("select acc_tran_name, acc_tran_mode,acc_tran_type, acc_tran_credit, acc_tran_date FROM acc_tran WHERE acc_tran_ledger='Capital' AND DATE_FORMAT(acc_tran_date,'%M %Y')='$p'  ") or die(mysql_error()); 
			 
			 //$trk = mysql_fetch_array($h);
			 
			while($tr = mysql_fetch_array($h))
			{
			
			
		?>
        <tr class="record">
        	<td><br><?php echo $tr['acc_tran_name']; ?></td>
            <td><br><?php echo $tr['acc_tran_mode']; ?></td>
			<td><br><?php echo $tr['acc_tran_type']; ?></td>
			<td><br><?php echo $tr['acc_tran_credit']; ?></td>
		    <td><br>
			
			<?php $d1 =  $tr['acc_tran_date'];

$dat1 = date('d/m/Y', strtotime($d1)); echo $dat1;  ?>
			
			
			
			</td>
		  
          
		
			</tr>
			
		<?php	
			}   
			?>  <tfoot>
	            <th></th>
				<th></th>
				<th></th>
    <th><b>Total =</b>
   
	<?php 

$p2=$_GET['pes'];
	$k2 = mysql_query("SELECT sum(acc_tran_credit)  FROM acc_tran WHERE acc_tran_ledger='Capital' AND DATE_FORMAT(acc_tran_date,'%M %Y')='$p2'  ") or die(mysql_error()); 
			 
			 $trk = mysql_fetch_array($k2);
			    ?>
   <?php  echo $trk['sum(acc_tran_credit)'];  ?></th>
   
  
</tfoot>
	
 <?php
			
			
			
			} else { 
			
			
			
			 $k = mysql_query("select acc_tran_name,acc_tran_mode, acc_tran_type, acc_tran_debit, acc_tran_date FROM acc_tran WHERE acc_tran_ledger='Withdrawl' AND DATE_FORMAT(acc_tran_date,'%M %Y')='$p'  ") or die(mysql_error()); 
			 
			 //$trk = mysql_fetch_array($k);
			 
			while($tor = mysql_fetch_array($k))
			{
			
			?>
			
			<tr class="record">
        	<td><br><?php echo $tor['acc_tran_name']; ?></td>
            <td><br><?php echo $tor['acc_tran_mode']; ?></td>
			<td><br><?php echo $tor['acc_tran_type']; ?></td>
		    <td><br><?php echo $tor['acc_tran_debit']; ?></td>
		    <td><br> 
			
			<?php $d2 =  $tor['acc_tran_date'];

$dat2 = date('d/m/Y', strtotime($d2)); echo $dat2;  ?>
			
			</td>
		 
		
			</tr>
			
			
		
        <?php
			}
			?> 
			
				<tfoot>
				<th></th>
				<th></th>
				<th></th>
	<th><b>Total</b></th>
	<?php 

$p3=$_GET['pes'];
	$k3 = mysql_query("SELECT sum(acc_tran_debit) FROM acc_tran WHERE acc_tran_ledger='Withdrawl' AND DATE_FORMAT(acc_tran_date,'%M %Y')='$p3'  ") or die(mysql_error()); 
			 
			 $trk3 = mysql_fetch_array($k3);
			    ?>
   <th><?php  echo $trk3['sum(acc_tran_debit)'];?></th>
  
  
</tfoot>
			
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
	
	
	
		<?php  include '../include/footer.php';?>	