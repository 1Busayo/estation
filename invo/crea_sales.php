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
            <li class="treeview">
              <a href="#">
                <i class="fa fa-dashboard"></i> <span>Dashboard</span> <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li ><a href="index.html"><i class="fa fa-circle-o"></i> Dashboard v1</a></li>
                <li><a href="index2.html"><i class="fa fa-circle-o"></i> Dashboard v2</a></li>
              </ul>
            </li>
            <li class=" treeview">
              <a href="#">
                <i class="fa fa-users"></i> <span>Customers</span> <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class=" treeview-menu">
			  
			  <li><a href="../customers/add_cust.php"><i class="fa fa-circle-o"></i> Add Customers</a></li>
                <li><a href="../customers/view_cust.php"><i class="fa fa-circle-o"></i> Manage Customers</a></li>
                
              </ul>
            </li>
			<li class="active treeview">
              <a href="#">
                <i class="fa fa-file"></i> <span>Sales</span> <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li ><a href="crea.php"><i class="fa fa-circle-o"></i> Create Sales</a></li>
                <li class="active" ><a href="sales.php"><i class="fa fa-circle-o"></i> View Sales</a></li>
              </ul>
            </li>
 
			<li class=" treeview">
              <a href="#">
                <i class="fa fa-file"></i> <span>Invoice</span> <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="crea.php"><i class="fa fa-circle-o"></i> Create Invoice</a></li>
                <li ><a href="addu.php"><i class="fa fa-circle-o"></i> View Invoice</a></li>
              </ul>
            </li>
  <li class="treeview">
              <a href="#">
                <i class="fa fa-file"></i> <span>Employee</span> <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="index.php"><i class="fa fa-circle-o"></i> Create Invoice</a></li>
                <li><a href="addu.php"><i class="fa fa-circle-o"></i> View Invoice</a></li>
              </ul>
            </li>
			<li class=" treeview">
              <a href="#">
                <i class="fa fa-file"></i> <span>Inventory</span> <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="index.php"><i class="fa fa-circle-o"></i> Create Invoice</a></li>
                <li><a href="addu.php"><i class="fa fa-circle-o"></i> View Invoice</a></li>
              </ul>
            </li>
			<li class=" treeview">
              <a href="#">
                <i class="fa fa-file"></i> <span>Asset</span> <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="index.php"><i class="fa fa-circle-o"></i> Create Invoice</a></li>
                <li><a href="addu.php"><i class="fa fa-circle-o"></i> View Invoice</a></li>
              </ul>
            </li>
			<li class="treeview">
              <a href="#">
                <i class="fa fa-file"></i> <span>Expenses</span> <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="index.php"><i class="fa fa-circle-o"></i> Create Invoice</a></li>
                <li><a href="addu.php"><i class="fa fa-circle-o"></i> View Invoice</a></li>
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

if (empty($query_run)) 
{
 
  header("location:crea.php "); 
 exit();
 

  }


 ?>
 
 <?php
 

if (isset($_POST['submit'])) {
	
	$total = mysql_real_escape_string( $_POST["total2"] );

$pin = $_GET['pin'];
 
	
	$date = mysql_real_escape_string( $_POST["txtdate"] );
	
$query = mysql_query(" INSERT INTO cust_pay ( c_id , date_sales, sales_code, total_amount ) VALUES  ('{$c}', '{$date}' , '{$pin}', '{$total}')") or die(mysql_error());
	
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
	exit();

}

}
?>


<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">

<script type="text/javascript" src="../js/jquery/jquery-2.1.3.min.js"></script>

<script type="text/javascript" src="../js/bootstrap.min.js"></script>




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
		<th>ProductName</th>
		<th>Quantity</th>
		<th>Price</th>
		<th>Discount</th>
		<th>Amount</th>
        <th><p> <button type="button"  id="add" class="btn btn-success glyphicon glyphicon-plus">   </button></p></th>
  </thead>
<tbody class="detail">
<tr>
 <td class="no">1</td>
 <td><input type="text"  data-validation-error-msg="Error"   data-validation="alphanumeric" data-validation-allowing="-,/ " class="form-control productname" name="productname[]"></td>
 <td><input type="text" data-validation-error-msg="Error"   data-validation="number" data-validation-allowing="-,/ " class="form-control quantity" name="quantity[]"></td>
 <td><input type="text" data-validation-error-msg="Error"   data-validation="number" data-validation-allowing=" " class="form-control price" name="price[]"></td>
 <td><input type="text" data-validation-error-msg="Error" data-validation-optional="true"   data-validation="number" data-validation-allowing="-,/ " class="form-control discount" name="discount[]"></td>
 <td><input type="text" data-validation-error-msg="Error"   data-validation="number" data-validation-allowing=" " class="form-control amount" name="amount[]"></td>
<!--<td><a href="#" class="remove">Delete</td> -->
<td><a href="#"  id="remove" class="btn btn-danger glyphicon glyphicon-minus" role="button"></a></td>
</tr>


</tbody>

<tfoot class="tfoot">

	<th></th>
    <th></th>
    <th></th>
    <th></th>
    <th><center>TOTAL AMOUNT</center></th>
    <th style="text-align:center;" name="total[]"  class="total">0</th>
	<th> <input type="text" name="total2" hidden  class="total2"  value="0"  ></th>
	<tr>
	
	
    <tr>
	<th></th>
    <th></th>
    <th></th>
    <th></th>
    <th></th>
	<th><input type="submit" class="btn btn-primary" name="submit" value="NEXT"></th>
  </tr>
</tfoot>
</table>
	
<form>
</body>
</html>

<script>

	$(function(){
		$('#add').click(function(){
addnewrow();
});

		$('body').delegate('#remove','click',function(){
         $(this).parent().parent() .remove();

		});
   	
	$('.detail').delegate('.quantity,.price,.discount,.total2','keyup',function(){
       var tr = $(this).parent().parent();
       var qty = tr.find('.quantity').val();
       var price = tr.find('.price').val();
       var dis = tr.find('.discount').val();
       var amt = (qty * price)-(qty * price * dis)/100;
       tr.find('.amount').val(amt);
	 //  tr.find('.total2').val(amt);
       total();
	   balance();
		
		});
   	
	
	
	$('.tfoot').delegate('.amountp,.total2','keyup',function(){
      
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
 '<td><input type="text" required title="letters numbers and space only" pattern="[a-zA-Z0-9\ ]+" class="form-control productname" name="productname[]"></td>'+
 '<td><input type="text" required title="numbers only" pattern="[0-9\]+" class="form-control quantity" name="quantity[]"></td>'+
 '<td><input type="text" required title="numbers only" pattern="[0-9\]+" class="form-control price" name="price[]"></td>'+
 '<td><input type="text"  title="numbers only" pattern="[0-9\]+" class="form-control discount" name="discount[]"></td>'+
 '<td><input type="text" class="form-control amount" name="amount[]"></td>'+
 '<td><a href="#"  id="remove" class="btn btn-danger glyphicon glyphicon-minus" role="button"></td>'+
'</tr>';
$('.detail').append(tr);

}
</script>



				 


	

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
 
// Restrict presentation length
$('#request').restrictLength( $('#pres-max-length') );
 
 </script>

	

	
		<?php  include '../include/footer.php';?>	