<?php  include '../include/header.php';?>
<?php



$c =$_GET['erp_id'];

  

			

//$c =$_GET['erp_id'];

/*

 $query = "SELECT * FROM  cust_pay WHERE c_id='$c'";
$query_run = mysql_query($query);

if (mysql_num_rows($query_run) ==0) 
{
 
  header("location:crea2.php "); 
 exit();
 

  }
  else{
	  
  }
  
//$d =$_GET['code'];
*/

?>

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
        <li><a href="../customers/add_cust.php"><i class="fa fa-circle-o"></i> Add Customers</a></li>
                <li><a href="../customers/view_cust.php"><i class="fa fa-circle-o"></i> Manage Customers</a></li>
                <li><a href="../customers/addpay.php"><i class="fa fa-circle-o"></i> Customer Deposit</a></li>
				 <li><a href="../customers/cbal.php"><i class="fa fa-circle-o"></i> Customer Balance</a></li>
        
              </ul>
            </li>
       <li class="active treeview">
              <a href="#">
                <i class="fa fa-money"></i>
 <span>Sales</span> <i class="fa fa-angle-left pull-right"></i>
              </a>
               <ul class="treeview-menu">
                <li><a href="crea.php"><i class="fa fa-circle-o"></i> Create Sales</a></li>
				<li><a href="pump_sales.php"><i class="fa fa-circle-o"></i> Pump Sales</a></li>
				<li class="active"><a href="crea2.php"><i class="fa fa-circle-o"></i> View Sales</a></li>
                <li><a href="view_sal.php"><i class="fa fa-circle-o"></i>Recipt</a></li>
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
            View Invoice
            <small>Customer</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
			<li><a href="crea2.php"><i class="fa fa-users"></i>View Sales</a></li>
            <li class="active">List Of Invoice</li>
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
               
				 

<table id="example1" class="table table-bordered table-hover">
    	<thead>
    	<tr>
            
        <th width="10%">Customers Name</th>
        <th width="10%">Date Of Sales</th>
		<th width="10%">Invoice Code</th>
		
		<th width="10%">Total Amount</th>
        
        
		
			<th width="5%">View Invoice</th>
			
			
			</tr> 
        </thead>
	<tbody>

<?php

$id =$_GET['erp_id'];
			 $h = mysql_query("SELECT * FROM  cust_pay, customerdetails  WHERE cust_pay.c_id=customerdetails.c_id and cust_pay.c_id= '$id' ORDER BY  cust_pay_id DESC ; ") or die(mysql_error()); 
			 
			while($tr = mysql_fetch_array($h))
			{
		?>
		
		
        <tr class="record">
        	
            <td><br><?php echo $tr['c_name']; ?></td>
		    <td><br><?php $pa=$tr['date_sales'];   $dat2 = date('d/m/Y', strtotime($pa)); if ($dat2=="01/01/1970"){ echo"";}else{ echo $dat2;}?></td>
			
             <td><br><?php echo $tr['sales_code']; ?></td>           
             <td><br><?php echo $tr['total_amount']; ?></td>           
		  
           
         
		 
		  
          <!--  <td><br><?php //echo $tr['tricon_comment']; ?></td> --> 
			<td><br>
		&nbsp;&nbsp;&nbsp;&nbsp; <a   href="view_invo.php?erp_id=<?php echo $tr['c_id']; ?>&cde=<?php echo $tr['sales_code']; ?>" class=" btn-sm">
          <span class="glyphicon glyphicon-file"></span> 
        </a> </td> 
		
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