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
				<li class="active"><a href="../acaunt/crea_eq.php"><i class="fa fa-circle-o"></i> Create Equity</a></li>
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
            Create Equity Owners
            <small>Create</small>
          </h1>
       <!--   <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Tables</a></li>
            <li class="active">Data tables</li>
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
	
  $txt1 = mysql_real_escape_string( $_POST["txt1"] );
  $txt2 = mysql_real_escape_string( $_POST["txt2"] );
  
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
$eqcode = 'EQ/'.''.generatePIN();

     
   $query = "SELECT own_name FROM  owners_prop WHERE own_name='{$txt1}'";
$query_run = mysql_query($query);



 $quer = "SELECT sum(own_percent) as tot FROM  owners_prop ";
$query_ru = mysql_query($quer);
  
  $t1 = mysql_fetch_array($query_run);

$t2 = mysql_fetch_array($query_ru);


if ($t1>=1)  
{
 
?>
           
		   <div class="alert alert-info" >
 <strong><i class="fa fa-info-circle"></i> Info</strong>          The Equity Owner Name <b><?php echo $txt1;?></b> Exist
</div>
		 
       
    
 <?php
   }

elseif($txt2+$t2['tot']>100)  
{
  		?>
		<div class="alert alert-danger" >
 <strong><i class=" fa fa-times-circle"></i> Danger !</strong>  You can not give <b> <?php echo $txt1;?> <?php echo $txt2;?>% </b>Because The Total Maximum Equity Percentage Is <b>100%</b> and you have <b><?php echo 100 - $t2['tot'];?>% Left out of 100%</b>
</div>
   
 <?php
  }

elseif(empty($txt1) || empty($txt2)){
    //  header("location:reqatm ");
  
  //  echo"Please fill the form completely";
	?>
    <div class="alert alert-warning" >
 <strong><i class=" fa fa-warning"></i> Warning !</strong> Please Fill The Form Completely </div>  
	<?php 
	   } else{
	
	//  $cust_id=  $_SESSION['user_id'];
	      $query = mysql_query("INSERT INTO owners_prop (own_name,own_percent,own_code) VALUES  ('{$txt1}','{$txt2}','{$eqcode}')") or die(mysql_error());
	 
	// header("location: crea_eq.php");
	  ?>
	    
		   <div class="alert alert-success" >
 <strong><i class="fa fa-check-circle"></i>  Success!</strong>          The Owner Equity  Name <?php echo $txt1;?> Has Been Created
</div>
		 
	<?php }
	  // echo "<div id='box'>$message</div>";
	} //exit();

	?>


<form class="form-signin" method="POST" id="">
      
        <h2 class="form-signin-heading">Create Owners Equity</h2><hr/>
        
        <div id="error">
        <!-- error will be showen here ! -->
        </div>
        
        <div class="form-group">
		<label>Equity Owners Name</label>
        <input type="text" class="form-control" placeholder="Equity Owners Name" data-validation="custom length" data-validation-length="min3"  data-validation-regexp="^([a-z,A-Z, ]+)$" name="txt1" id="user_name" style="width:250px;" />
        </div>
        
        <div class="form-group">
		<label>Equity Owners Percentage(%)</label>
        <input type="text" class="form-control" data-validation="number" placeholder="Equity Owners Percentage" name="txt2"  style="width:250px;" />
        
        </div>
        
       
		<hr/>
        
		
        <div class="form-group">
            <button type="submit" class="btn btn-primary" name="submit" id="btn-submit">
    		<span class="glyphicon glyphicon-log-in"></span> &nbsp;Create 
			</button> 
        </div>  
   
      </form>


				

	<hr> 
	 <div class="box-header">
                 <h2 class="form-signin-heading">List Of Equity Owners</h2>
       
	</div>
	<br>
	<div id="container">
		<table id="example2" cellspacing="0" width="100%" class="table table-bordered table-hover">
    	<thead>
    	<tr>
            
        <th width="9%"> Equtiy Owners Name</th>
        <th width="5%">Percent</th>
        
			<th width="5%">EDIT</th>
			<th width="5%">DELETE</th>
			
			</tr> 
        </thead>
	<tbody>

<?php
			 $h = mysql_query("select * FROM owners_prop ORDER BY  '{own_name}' ") or die(mysql_error()); 
			 
			while($tr = mysql_fetch_array($h))
			{
		?>
		
		
        <tr class="record">
        	
             <td><br><?php echo htmlentities( $tr['own_name']); ?></td>
		     <td><br><?php echo htmlentities($tr['own_percent']); ?>%</td>
			 
           
	   		
		<td><br>
		&nbsp;&nbsp;&nbsp;&nbsp; <a  rel="facebox" href="crea_eq_edit.php?erp_id=<?php echo $tr['own_id']; ?>" class=" btn-sm">
          <span class="fa fa-pencil"></span> 
        </a> </td> <td><br>
		&nbsp;&nbsp;&nbsp;&nbsp;    <a href="#" id="<?php echo $tr['own_id']; ?>" class="delbutton" title="Click To Delete"><span class="fa fa-trash"></a></td>

	
		
		
			</tr>
			
        <?php

		}
		
		
		?>
	
	</tbody>	
    </table>

		</div>
	
		
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
   url: "del_eq.php",
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
        $.validate();
			</script>




	<?php  include '../include/footer.php';?>