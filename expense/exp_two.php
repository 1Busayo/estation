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
			
			<li class="active treeview">
              <a href="exp_two.php">
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
			Expenses
            <small><i class='fa fa-book'></i></small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="../home.php"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Expenses</li>
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
   
   $dat = date('Y-m-d', strtotime($txt4));

 // $dat=date('Y-m-d');
  
  
 
if(empty($txt1)  || empty($txt2) || empty($txt3)|| empty($txt4)){
  
  $mngs='Please fill the form completely';
	
	   header("location:exp_two.php?msg2=".$mngs);
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
$pin = 'DEB/'.''.generatePIN();
  
	
	//  $cust_id=  $_SESSION['user_id'];
	   	 
		//("UPDATE  cust_atm_request SET form_id='$cust_id', cust_atm_request_date='$txt1', cust_atm_request_states='$txt2', cust_atm_request_branch='$txt3', cust_atm_request_currency='$txt4', cust_atm_request_cardtype='$txt5', cust_atm_request_domiciliaryaccountnumber='$txt6', cust_atm_request_requesttype='$txt7', cust_atm_request_reasonforrequest='$txt8', cust_atm_request_accounttype='$txt9', cust_atm_request_accountname='$txt10', cust_atm_request_accountnumber='$txt11', cust_atm_request_cardpan1='$txt12', cust_atm_request_cardpan2='$txt13', cust_atm_request_account1='$txt14', cust_atm_request_account2='$txt15', cust_atm_request_fullname='$txt16', cust_atm_request_dob='$txt17', cust_atm_request_occupation='$txt18', cust_atm_request_mobilenumber='$txt19', cust_atm_request_email='$txt20', cust_atm_request_testquestion='$txt21', cust_atm_request_answer='$txt22' WHERE cust_id='$cust_id'
	   
	  // mysql_query("UPDATE  customerdetails  SET c_account_balance ='{$txt3bal}' where c_id='$c' ");
	   
	  $query = mysql_query("INSERT INTO exp_pay (cust_name , deb_amt, exp_purpose, deb_code , pay_dat) VALUES ('{$txt1}','{$txt2}','{$txt3}','{$pin}','$dat')") or die(mysql_error());
	 
	
	$mng=' Payment to '.$txt1.' has been recorded';
	
	   header("location:exp_two.php?msg=".$mng );
				 exit();


	 //header("location:exp_two.php ");
	  
	 
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



<h1>Expense</h1>


				
	<form action="exp_two.php" method="POST">

	
<p><span> Name</span> <input type="text" name="txt1" class="form-control" type="text" data-validation="required" value=''   style="width:200px;" data-validation-error-msg="Please Enter The Customers Name"  /></p>		


</select></p>
<p><span>Amount</span> <input   name="txt2" class="form-control"     data-validation-error-msg="Please Enter The Amount Paid by the customers"   type="text"    style="width:200px;" type="text"/></p>

<p><span>Purpose</span><textarea name="txt3" class="form-control"  style="width:200px;" data-validation-error-msg="Please Enter The Amount Paid by the customers"  col='50'></textarea> </p>
<p><span>Date</span><input name="txt4" class="form-control" data-validation="required" id="datepicker" autocomplete="off"  data-validation-error-msg="Input Date" value="" type="text" style="width:200px;" required/>


		<br><br>
 <input   type="submit"  class="btn btn-primary" name="submit" value="SUBMIT"/>

		

 	</form>
	<?php  
	
	 $datx =date('Y-m-d');
	
$k=mysql_query("SELECT sum(deb_amt) as tota   FROM  exp_pay where pay_dat = '$datx' "); 

$trk = mysql_fetch_array($k);

?>
	<h2>Total Expenses : <?php echo $trk['tota']; ?></h2>
		
               <hr>
			   
			   <table id="example1" class="table table-bordered table-hover">
    	<thead>
    	<tr>
            
        <th width="10%">Name</th>
		<th width="10%"> Amount</th>
        <th width="10%">Purpose</th>
	
		<th width="10%"> Date</th>
        <th width="5%">EDIT</th>
			<th width="5%">DELETE</th>
			
			</tr> 
        </thead>
	<tbody>

<?php
		 $h = mysql_query("select * FROM exp_pay where DATE(cur_date) = '$datx' ") or die(mysql_error()); 
			 
			while($tr = mysql_fetch_array($h))
			{
		?>
		
		
        <tr class="record">
        	
            <td><br><?php echo $tr['cust_name']; ?></td>
			<td><br><?php echo $tr['deb_amt']; ?></td>
			
           <td><br><?php echo $tr['exp_purpose']; ?></td> 
            <td><br><?php echo $tr['pay_dat']; ?></td>			
			<td>&nbsp;&nbsp;&nbsp;&nbsp; <a  rel="facebox" href="exp_edit.php?erp_id=<?php echo $tr['pay_id']; ?>&pin=<?php echo $tr['deb_code'];?>" class=" btn-sm">
          <i class="fa fa-pencil"></i> 
        </a> 
	
		</td> 
		
			</td> 
	</td><td>&nbsp;&nbsp;&nbsp;&nbsp; <a href="#" id="<?php echo $tr['pay_id']; ?>" class="delbutton" title="Click To Delete"><span class="fa fa-trash"></a>
	
		</td> 
		
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