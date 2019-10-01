 <script type = "text/javascript">
    function changeHashOnLoad() {
        window.location.href += "#";
        setTimeout("changeHashAgain()", "50");
    }

    function changeHashAgain() 
    {          
        window.location.href += "1";
    }

    var storedHash = window.location.hash;
    window.setInterval(function () {
        if (window.location.hash != storedHash) {
            window.location.hash = storedHash;
        }
    }, 50);

	changeHashOnLoad();
	
    </script>



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
                <li class="active"><a href="crea.php"><i class="fa fa-circle-o"></i> Create Sales</a></li>
				<li><a href="pump_sales.php"><i class="fa fa-circle-o"></i> Pump Sales</a></li>
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
      </aside>
      <!-- =============================================== -->

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Sales
           <small>Make Payment</small> 
          </h1>
          <ol class="breadcrumb">
            <li><a href="../home.php"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="crea.php"><i class="fa fa-users"></i>Select Customer</a></li>
			<li class="active">Make payment</li>
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

  
  
//$d =$_GET['code'];




			

//$c =$_GET['erp_id'];


 $query = "SELECT * FROM  customerdetails WHERE c_id='$c'";
$query_run = mysql_query($query);

if (mysql_num_rows($query_run) !==1) 
{
 
  header("location:crea.php "); 
 exit();
 

  }
  else{
	  
  }
  
  

$d =$_GET['pin'];

  /*




		
		$query = "SELECT c_id , sales_code,amount_paid FROM  cust_pay WHERE sales_code='$d'";
$query_run = mysql_query($query);

   $ck=mysql_fetch_array($query_run);

if ($ck['c_id'] !== $c ||$ck['sales_code'] !==$d  ) 
{
 
  header("location:crea.php "); 
 exit();
 

  }
 
else{
	
	
	
}
*/



			if (isset($_POST['submit'])) {
	
  $txt1 = mysql_real_escape_string( $_POST["txt1"] );
  //$txt2 = mysql_real_escape_string( $_POST["txt2"] );
  $txt2b = mysql_real_escape_string( $_POST["txt2b"] );
  $txt3 = mysql_real_escape_string( $_POST["txt3"] );
  $txt4 = mysql_real_escape_string( $_POST["txt4"] );
  $da = mysql_real_escape_string( $_POST["txt5"] );
  
 $txt5 = date('Y-m-d', strtotime($da));
 
if( empty($txt5)){
    //  header("location:reqatm ");
  
    echo"Please fill the form completely";
	?>
    <script> alert("Please fill the form completely");</script>
	  

	<?php 
	  header("location:sales_calc.php?erp_id=".$c."&pin=".$d );  
	
	
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
$pinxz = 'DB/'.''.generatePIN();

	$pint =$_GET['pin'];
	
	$qry = mysql_query(" INSERT INTO cust_pay ( c_id , date_sales, sales_code, total_amount ) VALUES  ('{$c}', '{$txt5}', '{$pint}', '{$txt2b}')") or die(mysql_error());

	  mysql_query("INSERT INTO erp_inv (cust_id , date_sales,sales_code ,amount) VALUES ('{$c}','{$txt5}' ,'{$pint}', '{$txt2b}') ")or die(mysql_error() );

	
	
	 $query = mysql_query(" UPDATE cust_pay SET  balance_to_pay='{$txt4}' , date_paid='{$txt5}' WHERE  sales_code='$pint' ") or die(mysql_error());
	

	 $query = mysql_query(" UPDATE customerdetails SET c_account_balance='{$txt3}' WHERE  c_id='$c' ") or die(mysql_error());
	  
	  $query = mysql_query("INSERT INTO `adv_pay`( `cust_name`, `deb_code`,  `deb_amt`,`pay_balance`, `pay_dat`,c_id) VALUES ('{$txt1}','{$pinxz}','{$txt2b}','{$txt3}','{$txt5}','{$c}')") or die(mysql_error());
	 
 
	   header("location:crea.php");
	     exit();
	 
	  // echo "<div id='box'>$message</div>";
	} 
			}
	?>

<?php





$id = $_GET['erp_id'];

//$code = $_GET['code'];

			 $h = mysql_query("select * FROM customerdetails Where c_id='$id' ") or die(mysql_error()); 
			 
		//	 $h = mysql_query("SELECT * FROM  cust_pay, customerdetails , adv_pay WHERE cust_pay.c_id=customerdetails.c_id and cust_pay.c_id= '$id'   AND cust_pay.c_id=adv_pay.c_id and pay_amt!='0'  ") or die(mysql_error()); 
			 
			$tr = mysql_fetch_array($h);
			

 			
?>
<script>
function updatesum() {
document.form__2.txt3.value = (document.form__2.txt2a.value)-(document.form__2.txt2b.value);

document.form__2.txt4.value = (document.form__2.txt2b.value)-(document.form__2.txt2a.value);

if( document.form__2.txt3.value <= 0 ){ document.form__2.txt3.value = 0 }

if(document.form__2.txt4.value <= 0 ){ document.form__2.txt4.value = 0 }
}
updatesum();
</script>



<form  name='form__2' method="POST">


<p><span>Customers Name</span> <input type="text" name="txt1" class="form-control" readonly value=" <?php echo $tr['c_name'];?>"     style="width:200px;"  /></p>		

<p><span>Current Balance</span> <input type="text" name="txt2a"  class="form-control" readonly  value="<?php echo $tr['c_account_balance'];?>"   style="width:200px;" /></p>		

<p><span>Amount To Pay</span> <input type="text" name="txt2b" autocomplete='off'  onkeyup="updatesum()" class="form-control"   value=""   style="width:200px;" /></p>		

<p><span>New Account Balance</span> <input type="text" name="txt3"  class="form-control"  readonly  value="0"   style="width:200px;" /></p>		

<p><span>Balance To Pay</span> <input type="text"  name="txt4" class="form-control"  readonly  value="0"  style="width:200px;" /></p>

<p>	<span>Sales Date</span><input name="txt5" class="form-control"  data-validation="date required" data-validation-format="mm/dd/yyyy" id="datepicker"  type="text" style="width:200px;" required/></p></br>

		<br><br>
	
 <input   type="submit"  class="btn btn-primary" name="submit" value="submit"/>
 
		

 	</form>
		
	
			<?php  
			
			

			
			
			?>


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

 
// Restrict presentation length
 
 </script>

	

	
		<?php  include '../include/footer.php';?>	