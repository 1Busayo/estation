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
		    <li class="active treeview">
              <a href="#">
                <i class="fa fa-users"></i> <span>Customers</span> <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class=" treeview-menu">
        <li class="active" ><a href="add_cust.php"><i class="fa fa-circle-o"></i> Add Customers</a></li>
                <li><a href="view_cust.php"><i class="fa fa-circle-o"></i> Manage Customers</a></li>
                <li><a href="addpay.php"><i class="fa fa-circle-o"></i> Customer Deposit</a></li>
				 <li><a href="cbal.php"><i class="fa fa-circle-o"></i> Customer Balance</a></li>
        
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
 

<li class="treeview">               <a href="../report/e_report.php">                 <i class="fa fa-file-text"></i> <span>Report</span> <i class="fa fa-angle-left pull-right"></i>               </a>                           </li> 			 <li> <a href="#">                 <i class="fa fa-gear"></i> <span>Settings</span> <i class="fa fa-angle-left pull-right"></i>               </a>               <ul class="treeview-menu">                 <li><a href="../users/index.php"><i class="fa fa-circle-o"></i>User Management</a></li>                <li><a href="../users/cp_set.php"><i class="fa fa-circle-o"></i>Company Profile Settings</a></li> </ul>             </li>

       
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
            Customers
            <small>Add Customers</small>
          </h1>
        <!--<ol class="breadcrumb">
            <li><a href="home.php"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Add Customers</li>
          </ol>-->
        </section>

        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Add Customer</h3>
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
 
  
  

if(empty($txt1) || empty($txt3)){
    
	
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
				
	<form action="add_cust.php" method="POST">


<p><span>Customers Name</span> <input type="text" name="txt1" class="form-control" type="text" data-validation="custom"   data-validation-regexp="^([A-z\s]+)$"   style="width:200px;" data-validation-error-msg="Please Enter The Customers Name"  /></p>		

	
<p><span>Address(optional)</span> <textarea name="txt2" class="form-control" type="text" data-validation-optional="true" data-validation="alphanumeric" data-validation-allowing="-_, " data-validation-error-msg="Please Enter The Customers address"  style="width:290px;"></textarea></p>		

<p><span>Phonumber</span> <input   name="txt3" class="form-control"    data-validation-error-msg="Please Enter The Customers Phonumber"  data-validation="number length" data-validation-length="min11" type="text" maxlength="13"    style="width:200px;" type="text"/></p>

<p><span>Account Number(Optional)</span><input  name="txt4"  class="form-control" data-validation-optional="true" data-validation="number length" data-validation-length="min10"  maxlength="10"  data-validation-error-msg="Please Enter Your Account Number " type="text" style="width:200px;" /></p>		

<p><span>Email(Optional)</span> <input name="txt5" class="form-control" style="width:200px;" data-validation-optional="true" data-validation="email" data-validation-error-msg="E-mail is not valid" /></p>

		<br><br>
 <input   type="submit"  class="btn btn-primary" name="submit" value="submit"/>

		

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
	 <script src="js/jquery/jquery-ui.min.js"></script>
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