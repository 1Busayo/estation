<?php  include '../include/header.php';?>
        <!-- /.search form -->
          <!-- sidebar menu: : style can be found in sidebar.less -->
  

    <ul class="sidebar-menu">
     <li class="header">MAIN NAVIGATION</li>
            <li class="treeview">
              <a href="../home.php">
                <i class="fa fa-dashboard"></i> <span>Dashboard</span> <i class="fa fa-angle-left pull-right"></i>
              </a>
            </li>
			
			
				<li class="active treeview">
              <a href="#">
                <i class="fa fa-bar-chart"></i> <span>Stock</span> <i class="fa fa-angle-left pull-right"></i>
              </a>
			       <ul class=" treeview-menu">
        <li><a href="sto.php"><i class="fa fa-circle-o"></i>Create Stock</a></li>
        <li><a href="stoa.php"><i class="fa fa-circle-o"></i>Add Stock</a></li>
        <li class="active"><a href="stoc.php"><i class="fa fa-circle-o"></i>Stock Sales</a></li>
         </ul>
            </li>

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
       <li class="treeview">
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
           Stock Sales
            <small><i class='fa fa-bar-chart'></i></small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="../home.php"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Stock Sales</li>
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
			


//$c =$_GET['erp_id'];

  
  
//$d =$_GET['code'];




			

$c =$_GET['sto_id'];


 $query = "SELECT * FROM  e_stock WHERE stock_code='$c'";
$query_run = mysql_query($query);

if (mysql_num_rows($query_run) !==1) 
{
 
  header("location:stoc.php "); 
 exit();
 

  }
  else{
	  
  }
  
  

 /* $d =$_GET['pin'];

 




		
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
  $txt2 = mysql_real_escape_string( $_POST["txt2"] );
  $txt3 = mysql_real_escape_string( $_POST["txt3"] );
  $txt4 = mysql_real_escape_string( $_POST["txt4"] );
  $txt5= mysql_real_escape_string( $_POST["txt5"] );
  $txt6= mysql_real_escape_string( $_POST["txt6"] );
  $txt7= mysql_real_escape_string( $_POST["txt7"] );
  
 $dat = date('Y-m-d', strtotime($txt7));
 
if( empty($txt5)){
    //  header("location:reqatm ");
  
    echo"Please fill the form completely";
	?>
    <script> alert("Please fill the form completely");</script>
	  

	<?php 
	  header("location:sales_calc.php?sto_id=".$c);  
	
	
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
	
	$cd = $_GET['sto_id'];
	
	
	 $query = mysql_query(" UPDATE e_stock SET  stock_qty='{$txt6}' , last_qty_upd='{$dat}' WHERE  stock_code='$cd' ") or die(mysql_error());
	

	   
	  $query = mysql_query("INSERT INTO stock_sales( stock_name, stock_code,  open_stock,stock_sold, stock_price,tot_sale,closing_stock,date_stock) VALUES ('{$txt1}','{$cd}','{$txt3}','{$txt4}','{$txt2}','{$txt5}','{$txt6}','{$dat}')") or die(mysql_error());
	 
 
	   header("location:stoc.php");
	     exit();
	 
	  // echo "<div id='box'>$message</div>";
	} 
			}
	?>

<?php





$cd = $_GET['sto_id'];

//$code = $_GET['code'];

			 $h = mysql_query("select * FROM e_stock Where stock_code='$cd' ") or die(mysql_error()); 
			 
		//	 $h = mysql_query("SELECT * FROM  cust_pay, customerdetails , adv_pay WHERE cust_pay.c_id=customerdetails.c_id and cust_pay.c_id= '$id'   AND cust_pay.c_id=adv_pay.c_id and pay_amt!='0'  ") or die(mysql_error()); 
			 
			$tr = mysql_fetch_array($h);
			

 			
?><script>
function updatesum() {
document.form__2.txt6.value = (document.form__2.txt3.value)-(document.form__2.txt4.value);

document.form__2.txt5.value = (document.form__2.txt4.value)*(document.form__2.txt2.value);

if( document.form__2.txt6.value <= 0 ){ document.form__2.txt6.value = 0 }

}
updatesum();
</script>



<form  name='form__2' method="POST">


<p><span>Stock Name</span> <input type="text" name="txt1" class="form-control" readonly value=" <?php echo $tr['stock_name'];?>"     style="width:200px;"  /></p>		

<p><span>Stock Price</span> <input type="text" name="txt2" class="form-control" readonly value=" <?php echo $tr['stock_price'];?>"     style="width:200px;"  /></p>		

<p><span>Opening Stock</span> <input type="text" name="txt3"  class="form-control" readonly  value="<?php echo $tr['stock_qty'];?>"   style="width:200px;" /></p>		

<p><span>Total Stock Sold</span> <input type="text" name="txt4"  onkeyup="updatesum()" class="form-control"   value=""   style="width:200px;" /></p>		

<p><span>Total Price</span> <input type="text" name="txt5"  onkeyup="updatesum()" class="form-control"   value=""   style="width:200px;" /></p>		

<p><span>Stock Remaning</span> <input type="text" name="txt6"  class="form-control"  readonly  value="0"   style="width:200px;" /></p>		

<p>	<span>Sales Date (MM/DD/YYYY e.g     <?php echo date('m/d/Y'); ?>  )</span><input name="txt7" class="form-control"  data-validation="date required" data-validation-format="mm/dd/yyyy" id="datepicker" value="<?php echo date('m/d/Y'); ?>"  type="text" style="width:200px;" required/></p></br>

		<br><br>
	
 <input   type="submit"  class="btn btn-primary" name="submit" value="submit"/>
 
		

 	</form>
		
	<hr>
	
	
	               
<table id="example1" class="table table-bordered table-hover">
    	<thead>
    	<tr>
            
        <th width="10%">Stock Name  </th>
        <th width="10%">Opening Stock</th>
		<th width="10%">Closing Stock</th>
		<th width="10%">Stock Sold</th>
		<th width="10%">Stock Price</th>
		<th width="10%">Total Sales</th>
		<th width="10%">Date Stock</th>
	<!--<th width="5%">	Edit</th>-->
		<th width="10%">Delete</th>
			
			
			</tr> 
        </thead>
	<tbody>

<?php

 $datx=date('Y-m-d');

			 
$h = mysql_query("Select * FROM stock_sales where date_stock='$datx' ") or die(mysql_error()); 
			 
			
	 

		while($tr = mysql_fetch_array($h))
		{
		



		?>
		
		
		
        <tr class="record">
        	
            <td><br><?php echo $tr['stock_name']; ?></td>
			<td><br><?php echo $tr['open_stock']; ?></td>
			<td><br><?php echo $tr['closing_stock']; ?></td>
			<td><br><?php echo $tr['stock_sold']; ?></td>
			 <td><br><?php echo $tr['stock_price']; ?></td>
			<td><br><?php echo $tr['tot_sale']; ?></td>
			<td><br><?php echo $tr['date_stock']; ?></td>
		<!--<td>&nbsp;&nbsp;&nbsp;&nbsp; <a  rel="facebox" href="stock_calc3.php?sto_id=<?php //echo $tr['sal_id']; ?>" class=" btn-sm">
          <i class="fa fa-pencil"></i> 
        </a> 
	
		</td>-->
		<td>&nbsp;&nbsp;&nbsp;&nbsp; <a href="#" id="<?php echo $tr['sal_id']; ?>" class="delbutton" title="Click To Delete"><span class="fa fa-trash"></a>
	
		</td> 
		
			 <?php } ?>
	</tbody>	
    </table>
			


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
   url: "delx.php",
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