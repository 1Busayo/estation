<?php  include '../include/header.php';?>
          <!-- /.search form -->
          <!-- sidebar menu: : style can be found in sidebar.less -->
     <ul class="sidebar-menu">
     <li class="header">MAIN NAVIGATION</li>
            <li class="treeview">               <a href="../home.php">                 <i class="fa fa-dashboard"></i> <span>Dashboard</span> <i class="fa fa-angle-left pull-right"></i>               </a>             </li>  			<li class="treeview">               <a href="#">                 <i class="fa fa-bar-chart"></i> <span>Stock</span> <i class="fa fa-angle-left pull-right"></i>               </a> 			       <ul class=" treeview-menu">         <li><a href="../stock/sto.php"><i class="fa fa-circle-o"></i>Create Stock</a></li>         <li><a href="../stock/stoa.php"><i class="fa fa-circle-o"></i>Add Stock</a></li>         <li><a href="../stock/stoc.php"><i class="fa fa-circle-o"></i>Stock Sales</a></li>          </ul>             </li>
             <li class="treeview">
              <a href="../prod/prod.php">
                <i class="fa fa-star"></i> <span>Product</span> <i class="fa fa-angle-left pull-right"></i>
              </a>
             
            </li>

	<li class="treeview">
              <a href="../tank/tan.php">
                <i class="fa fa-square"></i> <span>Tank</span> <i class="fa fa-angle-left pull-right"></i>
              </a>
              
            </li>
			
			<li class="treeview">
              <a href="../expense/exp_two.php">
                <i class="fa fa-book"></i> <span>Expense</span> <i class="fa fa-angle-left pull-right"></i>
              </a>
              
            </li>

	<li class="treeview">
              <a href="../pump/add_pmp.php">
                <i class="fa fa-plug"></i> <span>Pump</span> <i class="fa fa-angle-left pull-right"></i>
              </a>
            </li>
		    <li class="treeview">
              <a href="#">
                <i class="fa fa-users"></i> <span>Customers</span> <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class=" treeview-menu">
        <li class="active" ><a href="../customers/add_cust.php"><i class="fa fa-circle-o"></i> Add Customers</a></li>
                <li><a href="../customers/view_cust.php"><i class="fa fa-circle-o"></i> Manage Customers</a></li>
                <li><a href="../customers/addpay.php"><i class="fa fa-circle-o"></i> Customer Deposit</a></li>
				 <li><a href="../customers/cbal.php"><i class="fa fa-circle-o"></i> Customer Balance</a></li>
        
              </ul>
            </li>
       <li class="treeview">
              <a href="#">
                <i class="fa fa-money"></i>
 <span>Sales</span> <i class="fa fa-angle-left pull-right"></i>
              </a>
               <ul class="treeview-menu">
                <li ><a href="../sales/crea.php"><i class="fa fa-circle-o"></i> Create Sales</a></li>
				<li><a href="../sales/pump_sales.php"><i class="fa fa-circle-o"></i> Pump Sales</a></li>
				<li><a href="../sales/crea2.php"><i class="fa fa-circle-o"></i> View Sales</a></li>
                <li><a href="../sales/view_sal.php"><i class="fa fa-circle-o"></i>Recipt</a></li>
              </ul>
            </li>
 
  <!--    <li class="treeview">
              <a href="#">
                <i class="fa fa-table"></i> <span>Invoice</span> <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="invo/crea.php"><i class="fa fa-circle-o"></i> Create Invoice</a></li>
                <li><a href="invo/crea2.php"><i class="fa fa-circle-o"></i> View Invoice</a></li>
              </ul>
            </li> -->
 

<li class="active treeview">
              <a href="e_report.php">
                <i class="fa fa-file-text"></i> <span>Report</span> <i class="fa fa-angle-left pull-right"></i>
              </a>
             
            </li>
  <li>
<a href="#">
                <i class="fa fa-gear"></i> <span>Settings</span> <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="../users/index.php"><i class="fa fa-circle-o"></i>User Management</a></li>
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
       

	   
		  <h1>Report
		     <small>Tank Sales</small>
          </h1>
         <!-- <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="sheet_pre1.php">Select Account</a></li>
            <li>View Account</li>
          </ol> -->
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
	
	$a = mysql_real_escape_string( $_POST["txt1"] );
    $b = mysql_real_escape_string( $_POST["txt1a"] );

header("location: tank2.php?a=".$a.'&b='.$b); 
}
 
?>




<h1>Tank Sales</h1>
<form method="POST">

<p>	<span>From</span>
<input name="txt1" class="form-control" data-validation="date required" data-validation-format="mm/dd/yyyy" id="datepicker" autocomplete="off"  data-validation-error-msg="Input Date" value="" type="text" style="width:200px;" required/>

	<span>To</span>
<input name="txt1a" class="form-control" data-validation="date required" data-validation-format="mm/dd/yyyy" id="datepicker2" autocomplete="off"  data-validation-error-msg="Input Date"  value="" type="text" style="width:200px;" required/></p></br>

<input type="submit" class="btn btn-primary" name="submit" value="SEARCH">

</form>

<p><br><br></p>
<p><br><br></p>
<p><br><br></p>
<p><br><br></p>

	
	


                </div><!-- /.box-body -->
              </div><!-- /.box -->

            </div><!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
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