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
 
      <li class="active treeview">
              <a href="#">
                <i class="fa fa-table"></i> <span>Invoice</span> <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li class="active"><a href="../invo/crea.php"><i class="fa fa-circle-o"></i> Create Invoice</a></li>
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
      </aside>
      <!-- =============================================== -->

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
           <h1>
           Invoice
           <small>Invoice Transactions With The Customers</small> 
          </h1>
          <ol class="breadcrumb">
            <li><a href="../home.php"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="crea.php">Create Invoice</a></li>
            <li class="active">Invoice Transactions With The Customers</li>
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
 $query = "SELECT c_id FROM  customerdetails WHERE c_id='$c'";
$query_run = mysql_query($query);

if (empty($query_run)) 
{
 
  header("location:crea.php "); 
 exit();
 

  }


 ?>
 
 <?php
 

if (isset($_POST['submit'])) {
	
	$total = mysql_real_escape_string( $_POST["total2"] );

$pin = $_GET['pi'];
 
	
	$dato1 = mysql_real_escape_string( $_POST["txtdate"] );
	
	$date = date('Y-m-d', strtotime($dato1));
	
$query = mysql_query(" INSERT INTO cust_pay ( c_id , date_sales, sales_code, total_amount ) VALUES  ('{$c}', '{$date}' , '{$pin}', '{$total}')") or die(mysql_error());
	
for($i=0; $i < count($_POST['productname']); $i++)
{
   mysql_query("INSERT INTO erp_inv
   	          SET  cust_id = '{$c}', 
			     date_sales = '{$date}',
				 sales_code = '{$pin}',
				 product_name = '{$_POST['productname'][$i]}',
   	               quantity     = '{$_POST['quantity'][$i]}',
                   price        = '{$_POST['price'][$i]}',
                   
                   amount       = '{$_POST['amount'][$i]}'

   	") or die(mysql_error());

	
	$a=$_GET['erp_id'];
	$b=$_GET['pi'];
		
			
			header("location: crea.php");
	

}
exit();
}
?>

<form action="" method="POST">



<?php
$c =$_GET['erp_id'];

 $h = mysql_query("select * FROM customerdetails WHERE c_id='$c' ") or die(mysql_error()); 
			 
			$tr = mysql_fetch_array($h)
		
		?>
		
	
            <br><h2><b><?php echo $tr['c_name']; ?></b></h2>
			<p><?php echo $tr['c_address']; ?></p>
		    <p><?php echo $tr['c_phonenumber']; ?></p>
			<p><?php echo $tr['c_email']; ?></p>           
		  



<p>	<span>Date</span>
<input name="txtdate" class="form-control"  data-validation="date required" data-validation-help="month/day/year" data-validation-format="mm/dd/yyyy" id="datepicker"  type="text" style="width:200px;" required/></p></br>
<br><br>
<table class="table table-bordered table-hover">
	<thead>
	<tr>
		<th> No </th>
		<th>ProductName</th>
		<th>Quantity</th>
		<th>Price</th>
		<!--<th>Discount</th>-->
		<th>Amount</th>
        <th><p> <button type="button"  id="add" class="btn btn-success glyphicon glyphicon-plus">   </button></p></th>
		</tr>
  </thead>
<tbody class="detail">
<tr>
 <td class="no">1</td>
 <td><input type="text"  data-validation-error-msg="Error"   data-validation="alphanumeric" data-validation-allowing="-,/ " class="form-control productname" name="productname[]"></td>
 <td><input type="text" data-validation-error-msg="Error"   data-validation="number" data-validation-allowing="-,/ " class="form-control quantity" name="quantity[]"></td>
 <td><input type="text" data-validation-error-msg="Error"   data-validation="number" data-validation-allowing=" " class="form-control price" name="price[]"></td>
 <td><input type="text" data-validation-error-msg="Error"   data-validation="number" data-validation-allowing=" " class="form-control amount" name="amount[]"></td>

<td><button id="remove" class="btn btn-danger glyphicon glyphicon-minus"></button></td>
</tr>


</tbody>

<tfoot class="tfoot">
<tr>
	<th></th>
    <th></th>
    <th></th>

    <th><center>TOTAL</center></th>
    <th style="text-align:center;" name="total[]"  class="total">0</th>
	<th> <input type="text" name="total2" hidden  class="total2"  value="0"  ></th>
	</tr>
	
	
    <tr>
	<th></th>
    <th></th>
    <th></th>
  
    <th></th>
	<th><input type="submit" class="btn btn-primary" name="submit" value="Save"></th>
  </tr>
</tfoot>
</table>
</form>
  </div><!-- /.box-body --> 
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
 $("#datepicker2").datepicker();
 
// Restrict presentation length
$('#request').restrictLength( $('#pres-max-length') );
 


	$(function(){
		$('#add').click(function(){
addnewrow();
});

		$('body').delegate('#remove','click',function(){
         $(this).parent().parent() .remove();
                   total();
	   balance();
		});
   	
	$('.detail').delegate('.quantity,.price,.discount,.total2','keyup',function(){
       var tr = $(this).parent().parent();
       var qty = tr.find('.quantity').val();
       var price = tr.find('.price').val();
      // var dis = tr.find('.discount').val();
       var amt = (qty * price);
       tr.find('.amount').val(amt);
	 //  tr.find('.total2').val(amt);
       total();
	   balance();
		
		});
   	
	
	
	$('.tfoot').delegate('.amountp,.total2','keyup',function(){
      
	 var tr = $(this).parent().parent();
	   var ttl= tr.find('.total').val()-0;
	   
	   var amp = tr.find('.amountp').val()-0;
		var cals = amp-ttl;
		var cat = total();
		$('.total2').val();
		tr.find('.total2').val('total()');
		balance();
		 total();
		});
   	});


	

function balance()
{


 var t2 =0;
 $('.amount').each(function(i,e)
{

 var amt = $(this).val()-0;
  t2 += amt;
});
   $('.total2').val(t2);
   

}

	
	
function total()
{
 var t =0;
 $('.amount').each(function(i,e)
{

 var amt = $(this).val()-0;
  t += amt;
});
   $('.total').html(t);
   
}

  
function addnewrow()
{

 var n = ($('.detail tr').length-0)+1;
 var tr = '<tr>'+
 '<td class="no">'+n+'</td>'+
 '<td><input type="text" required title="letters numbers and space only" pattern="[a-zA-Z0-9\ ]+" class="form-control productname" name="productname[]"></td>'+
 '<td><input type="text" required title="numbers only" pattern="[0-9\]+" class="form-control quantity" name="quantity[]"></td>'+
 '<td><input type="text" required title="numbers only" pattern="[0-9\]+" class="form-control price" name="price[]"></td>'+
// '<td><input type="text"  title="numbers only" pattern="[0-9\]+" class="form-control discount" name="discount[]"></td>'+
 '<td><input type="text" class="form-control amount" name="amount[]"></td>'+
 '<td><button id="remove" class="btn btn-danger glyphicon glyphicon-minus"></button></td>'+
'</tr>';
$('.detail').append(tr);

}
</script>
	
		<?php  include '../include/footer.php';?>	