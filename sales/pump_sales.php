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
				<li class="active"><a href="pump_sales.php"><i class="fa fa-circle-o"></i> Pump Sales</a></li>
				<li><a href="crea2.php"><i class="fa fa-circle-o"></i> View Sales</a></li>
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
      </aside><!--- =============================================== -->

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Sales
            <small>Create Sales</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="../home.php"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Select Customers</li>
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
  $txt2b = mysql_real_escape_string( $_POST["txt2b"] );
  $txt3 = mysql_real_escape_string( $_POST["txt3"] );
  $txt3b = mysql_real_escape_string( $_POST["txt3b"] );
  $txt3c = mysql_real_escape_string( $_POST["txt3c"] );
  $txt4 = mysql_real_escape_string( $_POST["txt4"] );
  $txt5 = mysql_real_escape_string( $_POST["txt5"] );
  
     $dat = date('Y-m-d', strtotime($txt5));
  //$dat=date('Y-m-d');
  
  
  			
function generatePIN($digits = 5){
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
$pin = 'SAL/'.''.generatePIN();
  
  
   
/*   $query = "SELECT `c_name` FROM `customerdetails` WHERE `c_name`='{$txt1}'";
$query_run = mysql_query($query);


if (mysql_num_rows($query_run) >=1)  
{
  $mngs='Customer name '.$txt1.' already exist';
	
	   header("location:add_cust.php?msg2=".$mngs);
				 exit();

  }
 */
  
  

if(empty($txt1) || empty($txt2) || empty($txt2b) || empty($txt3)|| empty($txt3b)|| empty($txt4)){
    
	
	$mngs='Please fill the form completely';
	
	   header("location:pump_sales.php?msg2=".$mngs);
				 exit();
	
	   } else{
	
	$query = mysql_query(" UPDATE e_pump SET tmw_open_m='{$txt2}'  WHERE p_name='{$txt1}'") or die(mysql_error());
	 
	
	$query = mysql_query(" INSERT INTO e_sales ( `e_code`, `p_name`, `e_cm`, `e_om`, `vol_sold`, `price`, `amount` ,e_date,p_prod,c_prod) VALUES  ('{$pin}','{$txt1}','{$txt2}','{$txt2b}','{$txt3}','{$txt3b}','{$txt4}','$dat','$txt3c','$txt3c')") or die(mysql_error());
	 
  	
	$mng='You Have Entered today sales for '.$txt1.'';
	
	   header("location:pump_sales.php?msg=".$mng);
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
				<script>
function updatesum() {
document.form__2.txt3.value = (document.form__2.txt2.value-0)-(document.form__2.txt2b.value-0);

document.form__2.txt4.value = (document.form__2.txt3.value-0)*(document.form__2.txt3b.value-0);
}
</script>

<?php  include '../include/location/selectbranch.php';?>



	<form  name='form__2' action="" method="POST">

<p><span>Pump Name</span><select id="statedd1" name="txt1" class="form-control"  data-validation="required"  type="text" style="width:200px;" required>
</select></p>
	<h4>Meter Reading</h4>
<p><span>Closing Meter</span><input  name="txt2" onKeyup="updatesum()" value="0"  class="form-control" data-validation-optional="required"  data-validation-error-msg="Please Enter Closing Meter" type="text" style="width:200px;" /></p>		

<p><span>Opening Meter</span><input id="dd2" name="txt2b"   onKeyup="updatesum()" value="0" class="form-control" data-validation="required"   data-validation-error-msg="Please Enter Opening Meter" type="text" style="width:200px;" /></p>		


<p><span>Volume Sold</span><input  name="txt3"  onChange="updatesum()" value="0" class="form-control" data-validation="required"   data-validation-error-msg="Please Enter Volume" type="text" style="width:200px;" /></p>		

<p><span>Price</span><input id="districtdd1" readonly name="txt3b" class="form-control"  data-validation="required"  type="text" style="width:200px;" required>
</p>
<p><span>Product</span><input id="districtdd2" readonly name="txt3c" class="form-control"  data-validation="required"  type="text" style="width:200px;" required>
</p>
<p><span>Amount </span><input  name="txt4"  class="form-control" data-validation="required"   data-validation-error-msg="Please Enter Amount" type="text" style="width:200px;" /></p>		

<p><span>Date</span><input name="txt5" class="form-control" data-validation="required" id="datepicker" autocomplete="off"  data-validation-error-msg="Input Date" value="" type="text" style="width:200px;" required/>


	
		<br><br>
 <input   type="submit"  class="btn btn-primary" name="submit" value="submit"/>

		

 	</form>
		
	
		
               <hr>
               
				 <h1>Today Sales</h1>

				   <h1>Petrol</h1>

<table id="example1" class="table table-bordered table-hover">
    	<thead>
    	<tr>
            
        <th width="10%">Date</th>
        <th width="10%">Pump Name</th>
		<th width="19%">Meter Reading</th>
		<th width="10%">Volume Sold</th>
		<th width="10%">Amount</th>
        
        
		
			
			
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

			 
$h = mysql_query("Select   `e_code`, `p_name`, `e_cm`, `e_om`, `vol_sold`, `price` ,e_date,p_prod,amount FROM e_sales WHERE  DATE(cur_date) ='$dat' and c_prod ='Petrol' ") or die(mysql_error()); 
			 
			
		$sum=0;	 

		while($tr = mysql_fetch_array($h))
		{
		



		?>
		
		
		
        <tr>
        	
            <td><br><?php echo $tr['e_date']; ?></td>
		    <td><br><?php echo $tr['p_name'] .' '. $tr['p_prod']; ?></td>
			<td><br><p><label>Closing Meter :</label><?php echo $tr['e_cm'];?></p>
			<p><label>Opening Meter :</label><?php echo $tr['e_om']; ?></p>
			</td>
            <td><br><?php echo $volume = round( $tr['vol_sold'], 1); ?></td>           
		    <td><br><?php echo $amount = (int) $tr['amount']; ?></td>      
			

			<br>
  
			</tr>
		<?php } ?>
	
	 <tfoot>
			<tr><br>
			
			
			<td></td>
			<td></td>
			<td>Total Sales</td>
			
			<?php
			$xxh2 = mysql_query("Select sum(vol_sold) as volumex , sum(amount) as amountx FROM e_sales WHERE  DATE(cur_date) ='$dat' and c_prod ='Petrol' ");
			$xtr2 = mysql_fetch_array($xxh2);
			?>
			
			<td> <?php echo   round ($xtr2['volumex'],1) ?></td>
			<td><?php   echo   (int)$xtr2['amountx']; ?></td>
			
			
			</tr>           
		 </tfoot> 
		
	</tbody>	
    </table>

	<h1>Diesel</h1>
	<table id="example1" class="table table-bordered table-hover">
    	<thead>
    	<tr>
            
        <th width="10%">Date</th>
        <th width="10%">Pump Name</th>
		<th width="10%">Meter Reading</th>
		<th width="10%">Volume Sold</th>
		<th width="10%">Amount</th>
        
        
		
			
			
			
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


 $datx=date('Y-m-d');

			 
$h = mysql_query("Select   `e_code`, `p_name`, `e_cm`, `e_om`, `vol_sold`, `price` ,e_date,p_prod,amount FROM e_sales WHERE c_prod ='Diesel' || c_prod ='Ago' and DATE(cur_date)  ='$datx' ") or die(mysql_error()); 
			 
			$sum=0;	 

		while($tr = mysql_fetch_array($h))
		{
		



		?>
		
		
		
        <tr>
        	
            <td><br><?php echo $tr['e_date']; ?></td>
		    <td><br><?php echo $tr['p_name'] .' '. $tr['p_prod']; ?></td>
			<td><br><p><label>Closing Meter :</label><?php echo $tr['e_cm'];?></p>
			<p><label>Opening Meter :</label><?php echo $tr['e_om']; ?></p>
			</td>
            <td><br><?php echo $volume = round( $tr['vol_sold'], 1); ?></td>           
		    <td><br><?php echo $amount = (int) $tr['amount']; ?></td>      
			

			<br>
  
			</tr>
		<?php } ?>
	
	 <tfoot>
			<tr><br>
			
			
			<td></td>
			<td></td>
			<td>Total Sales</td>
			
			<?php
			$xxh2 = mysql_query("Select sum(vol_sold) as volumex , sum(amount) as amountx FROM e_sales WHERE  c_prod ='Diesel' || c_prod='Ago' and  DATE(cur_date)  ='$datx' ");
			$xtr2 = mysql_fetch_array($xxh2);
			?>
			
			<td> <?php echo   round ($xtr2['volumex'],1) ?></td>
			<td><?php   echo   (int)$xtr2['amountx']; ?></td>
			
			
			</tr>           
		 </tfoot> 
		
	</tbody>	
    </table>

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