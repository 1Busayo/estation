<?php  include '../include/header.php';?>
          <!-- /.search form -->
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu">
          <li class="header">MAIN NAVIGATION</li>
             <li class="treeview">
              <a href="#">
                <i class="fa fa-dashboard"></i> <span>Dashboard</span> <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="../index.html"><i class="fa fa-circle-o"></i> Dashboard v1</a></li>
                <li><a href="../index2.html"><i class="fa fa-circle-o"></i> Dashboard v2</a></li>
              </ul>
            </li>
             <li class=" treeview">
              <a href="#">
                <i class="fa fa-envelope"></i> <span>Messages</span> <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class=" treeview-menu">
        
        <li><a href="../customers/add_cust.php"><i class="fa fa-circle-o"></i> Sms</a></li>
                <li><a href="../customers/view_cust.php"><i class="fa fa-circle-o"></i> Email</a></li>
                
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
      <li class="active treeview">
              <a href="#">
                <i class="fa fa-money"></i>
 <span>Sales</span> <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="crea.php"><i class="fa fa-circle-o"></i> Create Sales</a></li>
                <li class="active" ><a href="view_sal.php"><i class="fa fa-circle-o"></i> View Sales</a></li>
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
                <i class="fa fa-university"></i> <span>Account</span> <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="../acaunt/grp_acc1.php"><i class="fa fa-circle-o"></i> Create Ledger</a></li>
                <li><a href="../acaunt/sheet_acc1.php"><i class="fa fa-circle-o"></i> Create Account</a></li>
                <li><a href="../acaunt/sheet_pre1.php"><i class="fa fa-circle-o"></i> Prepare Account</a></li>
                <li><a href="../acaunt/view_acc1.php"><i class="fa fa-circle-o"></i> View Account</a></li>
				<li><a href="../acaunt/eq_nam.php"><i class="fa fa-circle-o"></i> Prepare Equity</a></li>
				<li><a href="../acaunt/view_eq.php"><i class="fa fa-circle-o"></i> View Equity</a></li>
              </ul>
            </li>


<li class="treeview">
              <a href="#">
                <i class="fa fa-file-text"></i> <span>Report</span> <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="rep/grp_acc1.php"><i class="fa fa-circle-o"></i> Create Ledger</a></li>
                <li><a href="acaunt/sheet_acc1.php"><i class="fa fa-circle-o"></i> Create Account</a></li>
                <li ><a href="acaunt/sheet_pre1.php"><i class="fa fa-circle-o"></i> Prepare Account</a></li>
              </ul>
            </li>

            <li class="treeview">

              <a href="#">
                <i class="fa fa-gear"></i> <span>Settings</span> <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="../index.php"><i class="fa fa-circle-o"></i>User Management</a></li>
                <li><a href="../users/index.php"><i class="fa fa-circle-o"></i>Email Settings</a></li>
				<li><a href="../users/index.php"><i class="fa fa-circle-o"></i>Sms Settings</a></li>
				<li><a href="../users/index.php"><i class="fa fa-circle-o"></i>Company Profile Settings</a></li>
                

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
            Recipt
            <small>Customers Recipt</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="crea.php">Select Sales Transaction</a></li>
            <li class="active">Create Sales</li>
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
?>


<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">

<script type="text/javascript" src="../js/jquery/jquery-2.1.3.min.js"></script>

<script type="text/javascript" src="../js/bootstrap.min.js"></script>




<form action="" method="POST">

<div class="box box-primary">
<h3 class="box-title">Recipt</h3>
</div> <!--/box header> -->
<!-- form start -->

<div class="box-body">
<div class="form-group">
<?php
$c =$_GET['erp_id'];

 $h = mysql_query("select * FROM customerdetails WHERE c_id='$c' ") or die(mysql_error()); 
			 
			$tr = mysql_fetch_array($h)
		
		?>
		
	
            <td><br><h2><b><?php echo $tr['c_name']; ?></b></h2></td>
			<td><p><?php echo $tr['c_address']; ?></p></td>
		    <td><p><?php echo $tr['c_phonenumber']; ?></p></td>
			<td><p><?php echo $tr['c_email']; ?></p></td>           
		  



</div>
<br><br>
<table class="table table-bordered table-hover">
	<thead>
	<!--	<th> No </th> -->
		<th >ProductName</th>
		<th width="5%">Quantity</th>
		<th width="20%">Price</th>
	<!--	<th>Discount</th>-->
		<th width="20%">Amount</th>
        
  </thead>
  
  <?php

$id =$_GET['erp_id'];
$id2 =$_GET['i_2'];
			 $h = mysql_query("SELECT * FROM   erp_inv  WHERE erp_inv.sales_code = '$id2'  ") or die(mysql_error()); 
			 
			
?>
  
<tbody class="detail">

<tr>
<?php

while($tr = mysql_fetch_array($h)  )
			{
		?>

<!-- <td class="no">1</td>-->
     <td><br><?php echo $tr['product_name']; ?></td>
		    <td><br><?php echo $tr['quantity']; ?></td>
			
            <td><br><?php echo $tr['price']; ?></td>           
		  <!-- <td><br><?php// echo $tr['discount']; ?></td>-->
           <td><br><?php echo $tr['amount']; ?></td>
          
</tr>

<br><br>

  <?php }	?>
</tbody>
	<?php
	
	 $h = mysql_query("SELECT * FROM   cust_pay WHERE cust_pay.sales_code = '$id2'  ") or die(mysql_error()); 
	
while($tr2 = mysql_fetch_array($h)  )
			{
	
	?>

<tfoot>
<tr>
	<th></th>
    <th></th>
	<th></th>
	
	<th><br><br></th>
	</tr>
	<tr>
	<th></th>
    <th></th>
	<th></th>
    <th><b>Total<input type="text" readonly style="width:150px;" class="form-control" value="<?php echo $tr2['total_amount']; ?>"></b></th>
	
	</tr>
		<tr>
    <th></th>
    <th></th>
  <th>Date Of Sales<input type="text" readonly  style="width:150px;" class="form-control" value="<?php echo $tr2['date_sales']; ?>"></th>
  

    <th>Amount Paid<input type="text"  readonly style="width:150px;" class="form-control" value="<?php echo $tr2['amount_paid']; ?>"> </th>
			

</tr>
	<tr>
    <th></th>
    <th></th>
  <th>Date Of Payment<input type="text"  style="width:150px;" readonly class="form-control" value="<?php echo $tr2['date_paid']; ?>"></th>
  

    <th>Balance To Pay<input type="text"  style="width:150px;" readonly class="form-control" value="<?php echo $tr2['balance_to_pay']; ?>"> </th>
			<?php }?>

</tr>
</tfoot>
</table>
			
</body>
</html>

<!--<script>

	$(function(){
		$().onload(function(){
addnewrow();
});

	
   	
   	});



   
function addnewrow()
{

 var n = ($('.no tr').length-0)+1;

}
</script>

--->

				 


	

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
	

	
		<?php  include '../include/footer.php';?>	