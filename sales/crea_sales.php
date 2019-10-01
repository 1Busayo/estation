 <script>
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
      </aside> <!-- =============================================== -->



      <!-- =============================================== -->

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Sales
           <small>SALES TRANSACTIONS WITH THE CUSTOMERS</small> 
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="crea.php">Select Customer</a></li>
            <li class="active">Create Sales</li>
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

 $d=$_GET['pin'];
  

 $query = "SELECT c_id FROM  customerdetails WHERE c_id='$c'";
$query_run = mysql_query($query);

$rp = mysql_fetch_array($query_run);

if (empty($rp['c_id']) || empty($d) ) 
{
 
  header("location:crea.php "); 
 exit();
 

  }


 ?>
 
 <?php
 

if (isset($_POST['submit'])) {
	
	$total = mysql_real_escape_string( $_POST["amount"] );

$pin = $_GET['pin'];
 
	
	$d = mysql_real_escape_string( $_POST["txtdate"] );
	
	$date = date('Y-m-d', strtotime($d));
	
$qry = mysql_query(" INSERT INTO cust_pay ( c_id , date_sales, sales_code, total_amount ) VALUES  ('{$c}', '{$date}', '{$pin}', '{$total}')") or die(mysql_error());
	
/*	
for($i=0; $i < count($_POST['productname']); $i++)
{
   mysql_query("INSERT INTO erp_inv
   	          SET  cust_id = '{$c}', 
			     date_sales = '{$date}',
				 sales_code = '{$pin}',
				 product_name = '{$_POST['productname'][$i]}',
   	               quantity     = '{$_POST['quantity'][$i]}',
                   price        = '{$_POST['price'][$i]}',
                   discount     = '{$_POST['discount'][$i]}', 
                   amount       = '{$_POST['amount'][$i]}'

   	") or die(mysql_error());

	
	$a=$_GET['erp_id'];
	$b=$_GET['pin'];
		
			
			header("location: sales_calc.php?erp_id=".$a."& code=".$b);
	

}
*/

for($i=0; $i < count($_POST['amount']); $i++)
{
   mysql_query("INSERT INTO erp_inv
   	          SET  cust_id = '{$c}', 
			     date_sales = '{$date}',
				 sales_code = '{$pin}',
				 product_name = '{$_POST['productname'][$i]}',
   	               quantity     = '{$_POST['quantity'][$i]}',
                   price        = '{$_POST['price'][$i]}',
                   discount     = '{$_POST['discount'][$i]}', 
                   amount       = '{$_POST['amount'][$i]}'

   	") or die(mysql_error());

	
	$a=$_GET['erp_id'];
	$b=$_GET['pin'];
		
			
			header("location: sales_calc.php?erp_id=".$a."& code=".$b);
	

}
exit();
}
?>



<form action="" method="POST">
 <!--/box header> -->
<!-- form start -->

<div class="box-body">
<div class="form-group">

<?php
$c =$_GET['erp_id'];

 $h = mysql_query("select * FROM customerdetails WHERE c_id='$c' ") or die(mysql_error()); 
			 
			$tr = mysql_fetch_array($h)
		
		?>
		
	
            <td><br><h2><b><?php echo $tr['c_name']; ?></b></h2></td>
			<td><p><?php echo $tr['c_address']; ?></p></td>
		    <td><p><?php echo $tr['c_phonenumber']; ?></p></td>
			<td><p><?php echo $tr['c_email']; ?></p></td>           
		  



</div>
<p>	<span>Date</span>
<input name="txtdate" class="form-control"  data-validation="date required" data-validation-help="month/day/year" data-validation-format="mm/dd/yyyy" id="datepicker"  type="text" style="width:200px;" required/></p></br>


<br><br>
<table class="table table-bordered table-hover">
	<thead>
		<th> No </th>
		<!--<th>ProductName</th>
		<th>Quantity</th>
		<th>Price</th> -->
		
		<th>Amount</th>
        <th><!--<p> <button type="button"  disabled id="add" class="btn btn-success glyphicon glyphicon-plus">   </button></p>--></th>
  </thead>
<tbody class="detail">
<tr>
 <td class="no">1</td>
 <!--<td><input type="text"  data-validation-error-msg="Error"   data-validation="alphanumeric" data-validation-allowing="-,/ " class="form-control productname" name="productname[]"></td>
 <td><input type="text" data-validation-error-msg="Error"   data-validation="number" data-validation-allowing="-,/ " class="form-control quantity" name="quantity[]"></td>
 <td><input type="text" data-validation-error-msg="Error"   data-validation="number" data-validation-allowing=" " class="form-control price" name="price[]" autocomplete="off" ></td>
--->
 <td><input type="text" data-validation-error-msg="Error"   data-validation="number" data-validation-allowing=" "  class="form-control amount" name="amount[]" ></td>

<!--<td><button id="remove" class="btn btn-danger glyphicon glyphicon-minus"></button></td>-->
</tr>


</tbody>

<tfoot class="tfoot">

	<th></th>
    <th></th>
    <th></th>
    
    <th><center>TOTAL AMOUNT</center></th>
    <th style="text-align:center;" name="total[]"  class="total">0</th>
	<th> <input type="text" name="total2" readonly hidden  class="total2"  value="0"  ></th>
	<tr>
	
	
    <tr>
	<th></th>
    <th></th>
    <th></th>
    <th></th>
    <th></th>
	<th><input type="submit" class="btn btn-primary" hidde id="btnnext" name="submit" value="NEXT"></th>
  </tr>
</tfoot>
</table>
	
<form>

	

                </div><!-- /.box-body --> 
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
 $("#datepicker2").datepicker();

 


	$(function(){
		$('#add').click(function(){
addnewrow();

});



		$('body').delegate('#remove','click',function(){
         $(this).parent().parent() .remove();
               total();
	   balance();
		});
   	
/*	$('.detail').delegate('.quantity,.price,.discount,.total2','keyup click onclick onchange',function(){
       var tr = $(this).parent().parent();
       var qty = tr.find('.quantity').val();
       var price = tr.find('.price').val();
       var dis = tr.find('.discount').val();
       var amt = (qty * price);
       tr.find('.amount').val(amt);
	 //  tr.find('.total2').val(amt);
       total();
	   balance();
		
		}); */
		
   	$('.detail').delegate('.amount,.quantity,.price,.discount,.total2','keyup click onclick onchange',function(){
       var tr = $(this).parent().parent();
       var qty = tr.find('.quantity').val();
       var price = tr.find('.price').val();
       var dis = tr.find('.discount').val();
	   var amount = tr.find('.amount').val();
       var quan = amount / price;
      // tr.find('.amount').val(amt);
	  // tr.find('.quantity').val(quan);
	   tr.find('.total2').val(amount);
      total();
	   balance();
		
		});
   	
	
	
	$('.tfoot').delegate('.amountp,.total2','keyup click onclick onchange',function(){
      
	 var tr = $(this).parent().parent();
	   var ttl= tr.find('.total').val()-0;
	   
	   var amp = tr.find('.amountp').val()-0;
		var cals = amp-ttl;
		var cat = total();
		$('.total2').val();
		tr.find('.total2').val('total()');
		balance();
		 total();
		});
   	});


	

function balance()
{


 var t2 =0;
 $('.amount').each(function(i,e)
{

 var amt = $(this).val()-0;
  t2 += amt;
});
   $('.total2').val(t2);
   

}

	
	
function total()
{
 var t =0;
 $('.amount').each(function(i,e)
{

 var amt = $(this).val()-0;
  t += amt;
});
   $('.total').html(t);
   
}

  
function addnewrow()
{

 var n = ($('.detail tr').length-0)+1;
 var tr = '<tr>'+
 '<td class="no">'+n+'</td>'+
 '<td><input type="text" data-validation-error-msg="Error"   data-validation="alphanumeric" data-validation-allowing="-,/ " class="form-control productname" name="productname[]   "></td>'+
 '<td><input type="text" data-validation-error-msg="Error"   data-validation="number" data-validation-allowing="-,/ " class="form-control quantity" name="quantity[]"></td>'+
 '<td><input type="text" data-validation-error-msg="Error"   data-validation="number" data-validation-allowing="-,/ " required title="numbers only" pattern="[0-9\]+" class="form-control price" name="price[]" autocomplete="off" ></td>'+
 
 '<td><input type="text" class="form-control amount" readonly name="amount[]"></td>'+
 '<td><button id="remove" class="btn btn-danger glyphicon glyphicon-minus"></button></td>'+
'</tr>';
$('.detail').append(tr);

}
</script>

	

	
		<?php  include '../include/footer.php';?>	