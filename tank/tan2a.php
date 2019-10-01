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

	<li class="active treeview">
              <a href="tan.php">
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
       <li class="treeview">
              <a href="#">
                <i class="fa fa-money"></i>
 <span>Sales</span> <i class="fa fa-angle-left pull-right"></i>
              </a>
               <ul class="treeview-menu">
                <li><a href="../sales/crea.php"><i class="fa fa-circle-o"></i> Create Sales</a></li>
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
      </aside><!--- =============================================== -->

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
           Tank
            <small><i class='fa fa-square'></i></small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="../home.php"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Tank</li>
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
if (isset($_POST['submit'])) {
	
  $txt1 = mysql_real_escape_string( $_POST["txt1"] );
  $txt2 = mysql_real_escape_string( $_POST["txt2"] );
  $txt3 = mysql_real_escape_string( $_POST["txt3"] );
  $txt4 = mysql_real_escape_string( $_POST["txt4"] );
  $txt5 = mysql_real_escape_string( $_POST["txt5"] );
  $txt6 = mysql_real_escape_string( $_POST["txt6"] );
 
 $op_stock= $txt5;
 
  
  $dat = date('Y-m-d', strtotime($txt6));
  //$dat=date('Y-m-d');
  
$roxi =$_GET['tp'];
  			
   
  $query = "SELECT `prod_name` FROM `e_prod` WHERE `prod_name`='{$txt1}'";
$query_run = mysql_query($query);


if (mysql_num_rows($query_run) >=1)  
{
  $mngs='Product name '.$txt1.' already exist';
	
	   header("location:tan2a.php?tp=".$roxi."&msg2=".$mngs);
				 exit();

  }
 
  
  

if(empty($txt1) || empty($txt2)|| empty($txt3) || empty($txt4)|| empty($txt6) ){
    
	
	$mngs='Please fill the form completely';
	
	   header("location:tan2a.php?tp=".$roxi."&msg2=".$mngs);
				 exit();
	
	   } else{
	
	      mysql_query("Update e_tank SET tmw_open_stock ='$op_stock' , date_stock='$dat' where tank_code='$roxi' ");
	
	$query = mysql_query(" INSERT INTO tank_stock ( `tank_name`, `tank_prod`, `tank_liters`,op_stock,cl_stock,tank_code,date_stock) VALUES  ('{$txt1}','{$txt2}','{$txt3}','{$txt4}','{$txt5}','{$roxi}','$dat')") or die(mysql_error());
	 
  	
	$mng='Successfully submitted';
	
	   header("location:tan2a.php?tp=".$roxi."&msg=".$mng);
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

<?php  include '../include/location/selectbranch.php';?>



<?php 

$rox =$_GET['tp'];

$h = "select * FROM e_tank where tank_code='$rox' "  or die(mysql_error()); 
			 $h2= mysql_query($h);
			 
			 $tr = mysql_fetch_array($h2); 
			 
			 
			 
			 ?>

			  <h2>Tank Sales</h2>

	<form  name='form__2' action="" method="POST">

<p><span>Tank Name</span><input name="txt1" class="form-control"  data-validation="required" readonly type="text" style="width:200px;" value="<?php echo $tr['tank_name']; ?>" required>
</p>

<p><span>Tank Product</span><input name="txt2" class="form-control"  data-validation="required" readonly  type="text" style="width:200px;" value="<?php echo $tr['tank_prod']; ?>" required>
</p>

<p><span>Tank Liters</span><input name="txt3" class="form-control"  data-validation="required" readonly  type="text" style="width:200px;" value="<?php echo $tr['tank_liters']; ?>" required>
</p>
	
<?php $hxi = "select tmw_open_stock , date_stock , tank_name FROM e_tank where tank_code='$rox' "  or die(mysql_error()); 
			 $hx2= mysql_query($hxi);
			 
			 $trx = mysql_fetch_array($hx2); 
			 
			 
			 
			 if(empty($trx['tmw_open_stock'])){
			 
			 
			 ?>
			 
			 

<p><span>Opening Stock</span><input name="txt4" class="form-control" placeholder="0" data-validation="required"  type="text" style="width:200px;"  required>
</p>
	
			 <?php }else{
				 
	?>		
<p><span>Opening Stock</span><input name="txt4" class="form-control"  data-validation="required"  type="text" style="width:200px;" value="<?php echo $trx['tmw_open_stock']?>" readonly required>
</p>
		 
				 
		  <?php  }?>
	

<p><span>Closing Stock</span><input  name="txt5" class="form-control"  data-validation="required"  type="text" style="width:200px;" required>
</p>

<p><span>Date</span><input name="txt6" class="form-control" data-validation="required" id="datepicker" autocomplete="off"  data-validation-error-msg="Input Date" value="" type="text" style="width:200px;" required/>


	
		<br><br>
		<?php   $dt=date('Y-m-d');    if($trx['date_stock'] == $dt ){  ?>
		
			  <div class="alert alert-info" >
 <strong><i class="fa fa-warning-circle fa-2x"></i></strong>Tank <?php echo $trx['tank_name'] ?> Opening Stock and Closing Stock  Has Been Recorded For Today.
</div>
		
		
		<?php }else{ ?>
 <input   type="submit"  class="btn btn-primary" name="submit" value="submit"/>

		<?php } ?>

 	</form>
		
	
		
               <hr>
               
<table id="example1" class="table table-bordered table-hover">
    	<thead>
    	<tr>
            
        <th width="10%">Tank  </th>
        <th width="10%">Opening Stock</th>
		<th width="10%">Closing Stock</th>
		<th width="10%">Date</th>
		<th width="10%">Delete</th>
			<!--<th width="5%">	Edit</th> -->
			
			
			</tr> 
        </thead>
	<tbody>

<?php
/*			
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
*/ 
//If I want a 4-digit PIN code.
//$pin = 'INV/'.''.generatePIN();


 $dat=date('Y-m-d');

			 
$h = mysql_query("Select * FROM tank_stock where DATE(cur_date) = '$dat' ") or die(mysql_error()); 
			 
			
	 

		while($tr = mysql_fetch_array($h))
		{
		



		?>
		
		
		
        <tr class="record">
        	
            <td><br><label>	Tank Name : </label><?php echo $tr['tank_name']; ?> <br><label>	Tank Product : </label> <?php echo $tr['tank_prod']; ?> <br><label>	Liters : </label> <?php echo $tr['tank_liters']; ?></td>
		    <td><br><?php echo $tr['op_stock']; ?></td>
			<td><br><?php echo $tr['cl_stock']; ?></td>
			<td><br><?php echo $tr['date_stock']; ?></td>
			  <td>&nbsp;&nbsp;&nbsp;&nbsp; <a href="#" id="<?php echo $tr['tan_stock_id']; ?>" class="delbutton" title="Click To Delete"><span class="fa fa-trash"></a>
	
		</td>
	<!--	<td>&nbsp;&nbsp;&nbsp;&nbsp; <a   href="crea_sales.php?erp_id=<?php //echo $id; ?>&pin=<?php //echo $pin ;?>" class=" btn-sm">
          <i class="fa fa-pencil"></i> 
        </a> 
	
		</td> -->
		
			 <?php } ?>
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
   url: "delxx.php",
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