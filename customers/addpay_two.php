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
        <li ><a href="add_cust.php"><i class="fa fa-circle-o"></i> Add Customers</a></li>
                <li><a href="view_cust.php"><i class="fa fa-circle-o"></i> Manage Customers</a></li>
                <li class="active" ><a href="addpay.php"><i class="fa fa-circle-o"></i> Customer Deposit</a></li>
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
      </aside><!--- =============================================== -->

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
			Advance Payment
            <small><i class='fa fa-plug'></i></small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="../home.php"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Advance Payment</li>
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
 // $txt2 = mysql_real_escape_string( $_POST["txt2"] );
  $txt3 = mysql_real_escape_string( $_POST["txt3"] );
  
//$kuz=mysql_query("SELECT sum(pay_amt) as totp  FROM adv_pay where c_id = '".$_GET['erp_id']."' ORDER BY c_id  DESC LIMIT 1"); 

$kuz=mysql_query(" select c_account_balance   FROM customerdetails where c_id =  '".$_GET['erp_id']."'    LIMIT 1"); 

$took = mysql_fetch_array($kuz);
echo $totz = $took['c_account_balance'];

 $txt3a = $totz + $txt3;

 $txt3bal = $totz + $txt3;
  $dat=date('Y-m-d');
  
  
 
if(empty($txt1)  || empty($txt3)){
  
  $mngs='Please fill the form completely';
	
	   header("location:addpay_two.php?msg2=".$mngs);
				 exit();
	  
	   } else{
	

	$c =$_GET['erp_id'];
	
	
	
  			
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
$pin = 'PY/'.''.generatePIN();
  
	
	//  $cust_id=  $_SESSION['user_id'];
	   	 
		//("UPDATE  cust_atm_request SET form_id='$cust_id', cust_atm_request_date='$txt1', cust_atm_request_states='$txt2', cust_atm_request_branch='$txt3', cust_atm_request_currency='$txt4', cust_atm_request_cardtype='$txt5', cust_atm_request_domiciliaryaccountnumber='$txt6', cust_atm_request_requesttype='$txt7', cust_atm_request_reasonforrequest='$txt8', cust_atm_request_accounttype='$txt9', cust_atm_request_accountname='$txt10', cust_atm_request_accountnumber='$txt11', cust_atm_request_cardpan1='$txt12', cust_atm_request_cardpan2='$txt13', cust_atm_request_account1='$txt14', cust_atm_request_account2='$txt15', cust_atm_request_fullname='$txt16', cust_atm_request_dob='$txt17', cust_atm_request_occupation='$txt18', cust_atm_request_mobilenumber='$txt19', cust_atm_request_email='$txt20', cust_atm_request_testquestion='$txt21', cust_atm_request_answer='$txt22' WHERE cust_id='$cust_id'
	   
	   mysql_query("UPDATE  customerdetails  SET c_account_balance ='{$txt3bal}' where c_id='$c' ");
	   
	  $query = mysql_query("INSERT INTO `adv_pay`( `cust_name`, `pay_code`,  `pay_amt`, `pay_amt_t`,pre_balance,`pay_balance`, `pay_dat`,c_id) VALUES ('{$txt1}','{$pin}','{$txt3}','{$txt3a}','{$totz}','{$txt3bal}','{$dat}','{$c}')") or die(mysql_error());
	 
	
	$mng=' Customer '.$txt1.' Advance Payment added';
	
	   header("location:addpay_two.php?msg=".$mng."&erp_id=".$_GET['erp_id'] );
				 exit();


	 //header("location:addpay_two.php ");
	  
	 
	 }
	  // echo "<div id='box'>$message</div>";
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

<?php  include '../include/location/selectb.php';?>

<?php

$c =$_GET['erp_id'];

$h = mysql_query("select * FROM customerdetails where c_id='$c' ") or die(mysql_error()); 
			 
		$tr = mysql_fetch_array($h);
		
		



?>

<h1>Advance Payment</h1>


<?php  include '../include/location/selectbranch.php';?>

				
	<form action="addpay_two.php?erp_id=<?php echo $_GET['erp_id']; ?>" method="POST">

	
<p><span>Customers Name</span> <input type="text" readonly name="txt1" class="form-control" type="text" data-validation="required" value='<?php echo $tr['c_name']; ?>'   style="width:200px;" data-validation-error-msg="Please Enter The Customers Name"  /></p>		

<!--<p><span>Product Name</span><select  name="txt2" class="form-control"  data-validation="required"  type="text" style="width:200px;" required>
<option value=""></option>
<?php /*$h = "select * FROM e_prod "  or die(mysql_error()); 
			 $h2= mysql_query($h);
			 while($tr = mysql_fetch_array($h2)){ ?>

<option value="<?php echo $tr['prod_name']; ?>"><?php echo $tr['prod_name']; ?></option>

			 <?php } */?>
</select></p> -->


</select></p>
<p><span>Amount</span> <input   name="txt3" class="form-control"     data-validation-error-msg="Please Enter The Amount Paid by the customers"   type="text"    style="width:200px;" type="text"/></p>

		<br><br>
 <input   type="submit"  class="btn btn-primary" name="submit" value="SAVE"/>

		

 	</form>
	<?php  
	
	
	
	
$k=mysql_query("SELECT c_account_balance   FROM customerdetails where c_id = '$c'  LIMIT 1"); 

$trk = mysql_fetch_array($k);

?>
	<h2>Current Balance : <?php echo $trk['c_account_balance']; ?></h2>
		
               <hr>
			   
			   <table id="example" class="table table-bordered table-hover">
    	<thead>
    	<tr>
            
        <th width="10%">Customers Name</th>
		<th width="10%">Amount Deposited</th>
        <th width="10%">Amount Debited</th>
		
		
		<!--<th width="10%">Product Name</th>
		<th width="10%">Amount Spent</th>-->
		<th width="10%">Balance</th>
		<th width="10%">Payment Date</th>
        
        
		
			<!--<th width="5%">EDIT</th>
			<th width="5%">DELETE</th>-->
			
			</tr> 
        </thead>
	<tbody>

<?php
			 $h = mysql_query("select * FROM adv_pay where c_id='$c' order by pay_dat") or die(mysql_error()); 
			 
			while($tr = mysql_fetch_array($h))
			{
		?>
		
		
        <tr class="record">
        	
            <td><br><?php echo $tr['cust_name']; ?></td>
			<td><br><?php echo $tr['pay_amt']; ?></td>
			<td><br><?php echo $tr['deb_amt']; ?></td>
			
           <!--<td><br><?php echo $tr['pay_prod']; ?></td>-->
			<!--<td><br><?php// echo $tr['pay_amt'] - $tr['pay_balance']; ?></td>-->
            <td><br><?php echo $tr['pay_balance']; ?></td> 
            <td><br><?php echo $tr['pay_dat']; ?></td>			
		
		
			</tr>
			
        <?php

		}
		
		
		?>
	 <tr class="record2">
        	<?php   
			 $xh = mysql_query("select sum(pay_amt)as amt , sum(deb_amt) as debtx  FROM adv_pay where c_id='$c'") or die(mysql_error()); 
			 
			$xtr = mysql_fetch_array($xh);
			
			?>
            <td><br>Total</td>
			<td><br><?php echo $xtr['amt'];?></td>
			<td><br><?php echo $xtr['debtx'];?></td>
	
			<td><br> <b>Debt :<?php  $vlx = $xtr['debtx'] - $xtr['amt'];  if ( $vlx >= 0) { echo $vlx;?>    <a   rel="facebox" href="deb_pay.php?erp_id=<?php echo $c; ?>" class="btn btn-primary">
         PAY  <i class="fa fa-money"></i> 
        </a> </td> 
		<?php }else{ echo '0'; }?> </b> </td>
					<td><br></td>
           
		
		
			</tr>
	</tbody>	
    </table>

			   
			   
        </div><!-- /.box-body -->
              </div><!-- /.box -->

            </div><!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
    
	

	
		<?php  include '../include/footer.php';?>	