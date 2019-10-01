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
				<li class="active"><a href="../acaunt/eq_nam.php"><i class="fa fa-circle-o"></i> Prepare Equity</a></li>
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
       

	   <?php
				$a1=$_GET['erp_id'];
			 $h = mysql_query("select own_name FROM owners_prop where own_code='{$a1}' ") or die(mysql_error()); 
			 
		$tr = mysql_fetch_array($h);
			
		?>
		  <h1>
		  
            <?php echo $tr['own_name'];?>
            <small>Transactions</small>
          </h1>
         <!--- <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="sheet_pre1.php">Select Account</a></li>
            <li class="active">Prepare Account</li>
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
	


$id=$_GET['erp_id'];



$h = mysql_query("select * FROM owners_prop WHERE own_code='{$id}'  ") or die(mysql_error()); 
			 
			$tr = mysql_fetch_array($h);
   

//$ledger = $tr['grp_acct_name']; 

 

$name =   $tr['own_name']; 

$eq_id =   $tr['own_id']; 

$eq_code =   $tr['own_code']; 

$eq_per =   $tr['own_percent']; 

  
   $query = "select * FROM equ_ity WHERE own_code='{$id}'";
$query_run = mysql_query($query);

if (mysql_num_rows($query_run) >=1)  
{
}else{

$query = mysql_query(" INSERT INTO equ_ity ( own_id , own_name, own_percent, own_code ) VALUES  ('{$eq_id}','{$name}','{$eq_per}' , '{$eq_code}')") or die(mysql_error());
}

//$query = mysql_query(" INSERT INTO cust_pay ( c_id , date_sales, sales_code, total_amount ) VALUES  ('{$c}', '{$date}' , '{$pin}', '{$total}')") or die(mysql_error());
$yope=$_GET['i'];

echo $yope;

if ($yope=='1'){

	
	for($i=0; $i < count( $_POST['txt1']); $i++)
{
	
$d = $_POST['txt1'][$i];
 echo $d.'<br>';

$dat = date('Y-m-d', strtotime($d)).'<br>';

   mysql_query("INSERT INTO acc_tran
   	          SET  acc_tran_date = '{$dat}',
			       acc_tran_name =   '{$name}',
				   acc_tran_ledger =   'Withdrawl',
				   acc_tran_debit =   '{$_POST['txt4'][$i]}',
				   acc_tran_mode     = '{$_POST['txt2'][$i]}',
                   acc_tran_type    = 'Debit',
				   own_code   = '{$eq_code}'
                  
   	") or die(mysql_error());

echo "submitted";
	
} } else {


for($j=0; $j < count( $_POST['txt1']); $j++)
{
	
	
	
$d = $_POST['txt1'][$j];
 echo $d.'<br>';

$dat = date('Y-m-d', strtotime($d)).'<br>';

   mysql_query("INSERT INTO acc_tran
   	          SET  acc_tran_date = '{$dat}',
			       acc_tran_name =   '{$name}',
				   acc_tran_ledger =   'Capital',
				   acc_tran_credit =   '{$_POST['txt4'][$j]}',
				   acc_tran_mode     = '{$_POST['txt2'][$j]}',
                   acc_tran_type    = 'Credit',
				   own_code   = '{$eq_code}'
                  
   	") or die(mysql_error());

echo "submitted";
	
}	

}
}
?>


<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">

<script type="text/javascript" src="../js/jquery/jquery-2.1.3.min.js"></script>

<script type="text/javascript" src="../js/bootstrap.min.js"></script>




<form action="" method="POST">

<div class="box box-primary">
<h3 class="box-title"><?php echo $tr['own_name'];?> <?php  

$aoi=$_GET['i'];

if($aoi==2)
{
echo "Capital";
}else
{
echo "Withdrawl";
}
?></h3>
<input type="text" hidden name="txt1" value="<?php //echo $tr['sheet_acct_name']; ?>">
</div> <!--/box header> -->
<!-- form start -->

<div class="box-body">

</div>


<br><br>
<table class="table table-bordered table-hover">
	<thead>
		<th> No </th>
		<th>Date <h6>(month/day/year e.g 09/21/2015 , 09/02/2015)</h6></th>
		<th>Mode Of Payment</th>
		<th><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p></th>
		<th style="width:150px;">Amount</th>
		<!--<th style="width:150px;">Credit(Cr)</th> -->
		<th><p> <button type="button"  id="add" class="btn btn-success glyphicon glyphicon-plus">   </button></p></th>
  </thead>
<tbody class="detail">
<tr>
 <td class="no">1</td>
 <td><p><input name="txt1[]" class="form-control"  data-validation="date required" data-validation-help="month/day/year" data-validation-format="mm/dd/yyyy" id="datepicker"  type="text" style="width:200px;" required/></p>
</p></td>
<td><p><select  name="txt2[]" class="form-control"  data-validation="required"  type="text" style="width:200px;" required>
<option value=""></option>
<option value="Cash">Cash</option>
<option value="Cheque">Cheque</option>
</select>
</p></td>
 
<td><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p></td>



 <td><input type="text" style="width:150px;" class="form-control amount" name="txt4[]"></td>
 
<td><a href="#"  id="remove" class="btn btn-danger glyphicon glyphicon-minus" role="button"></a></td>
</tr>


</tbody>

<tfoot>
	<th></th>
    <th><b>Balance</b></th>
    <th></th>
    <th></th>
   <th style="text-align:center;" class="amounttotal">0</th>
   
  
</tfoot>
</table>
<input type="submit" class="btn btn-primary" name="submit" value="Save Record">

	<form>
</body>
</html>

<script>

	$(function(){
		$('#add').click(function(){
addnewrow();
});

		$('body').delegate('#remove','click',function(){
         $(this).parent().parent() .remove();

		});
   	
	$('.detail').delegate('.amount','keyup',function(){
       var tr = $(this).parent().parent();
     
       total();
		
		});
   		});


function total()
{
 var t =0;
 $('.amount').each(function(i,e)
{

 var amt = $(this).val()-0;
  t += amt;
});
   $('.amounttotal').html(t);
}



   
function addnewrow()
{

 var n = ($('.detail tr').length-0)+1;
 var tr = '<tr>'+
 '<td class="no">'+n+'</td>'+
 '<td><input name="txt1[]" class="form-control"  title="mm/dd/yyyy e.g 09/21/2015" data-validation="date required"   data-validation-format="mm/dd/yyyy" id="datepicker"    type="text" style="width:200px;" required/></p></td>'+
 '<td><p><select class="form-control" name="txt2[]" data-validation="required"  type="text" style="width:200px;" required> <option vaue=""></option><option value="Cash">Cash</option><option value="Cheque">Cheque</option></select></p></td>'+
 '<td><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p></td>'+
 '<td><input type="text" style="width:150px;" class="form-control amount" name="txt4[]"></td>'+

 '<td><a href="#"  id="remove" class="btn btn-danger glyphicon glyphicon-minus" role="button"></td>'+
'</tr>';
$('.detail').append(tr);

}
</script>



				 


	

                </div><!-- /.box-body -->
              </div><!-- /.box -->

            </div><!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
    

<link href="../css/jquery-ui.css" type="text/css" rel="stylesheet"/>
	 <script src="../js/jquery/jquery-ui.min.js"></script>
<script src="../js/validator/jquery.form-validator.min.js"></script>
<script>

 $.validate( );
 // setup datepicker
    $("#datepicker").datepicker();
 $("#datepicker2").datepicker();
 
 </script>
	
	
	
		<?php  include '../include/footer.php';?>	