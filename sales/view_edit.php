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
                <li><a href="../index.html"><i class="fa fa-circle-o"></i> Dashboard v1</a></li>
                <li><a href="../index2.html"><i class="fa fa-circle-o"></i> Dashboard v2</a></li>
              </ul>
            </li>
             <li class=" treeview">
              <a href="#">
                <i class="fa fa-envelope"></i> <span>Messages</span> <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class=" treeview-menu">
        
        <li><a href="../customers/add_cust.php"><i class="fa fa-circle-o"></i> Sms</a></li>
                <li><a href="../customers/view_cust.php"><i class="fa fa-circle-o"></i> Email</a></li>
                
              </ul>
            </li>
		  <li class="treeview">
              <a href="#">
                <i class="fa fa-users"></i> <span>Customers</span> <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="../customers/add_cust.php"><i class="fa fa-circle-o"></i> Add Customers</a></li>
                <li><a href="../customers/view_cust.php"><i class="fa fa-circle-o"></i> Manage Customers</a></li>
                </ul>
            </li>
      <li class="active treeview">
              <a href="#">
                <i class="fa fa-money"></i>
 <span>Sales</span> <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="crea.php"><i class="fa fa-circle-o"></i> Create Sales</a></li>
                <li class="active" ><a href="view_sal.php"><i class="fa fa-circle-o"></i> View Sales</a></li>
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
      <li class="treeview">
              <a href="#">
                <i class="fa fa-university"></i> <span>Account</span> <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="../acaunt/grp_acc1.php"><i class="fa fa-circle-o"></i> Create Ledger</a></li>
                <li><a href="../acaunt/sheet_acc1.php"><i class="fa fa-circle-o"></i> Create Account</a></li>
                <li><a href="../acaunt/sheet_pre1.php"><i class="fa fa-circle-o"></i> Prepare Account</a></li>
                <li><a href="../acaunt/view_acc1.php"><i class="fa fa-circle-o"></i> View Account</a></li>
				<li><a href="../acaunt/eq_nam.php"><i class="fa fa-circle-o"></i> Prepare Equity</a></li>
				<li><a href="../acaunt/view_eq.php"><i class="fa fa-circle-o"></i> View Equity</a></li>
              </ul>
            </li>


<li class="treeview">
              <a href="#">
                <i class="fa fa-file-text"></i> <span>Report</span> <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="rep/grp_acc1.php"><i class="fa fa-circle-o"></i> Create Ledger</a></li>
                <li><a href="acaunt/sheet_acc1.php"><i class="fa fa-circle-o"></i> Create Account</a></li>
                <li ><a href="acaunt/sheet_pre1.php"><i class="fa fa-circle-o"></i> Prepare Account</a></li>
              </ul>
            </li>

            <li class="treeview">

              <a href="#">
                <i class="fa fa-gear"></i> <span>Settings</span> <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="../index.php"><i class="fa fa-circle-o"></i>User Management</a></li>
                <li><a href="../users/index.php"><i class="fa fa-circle-o"></i>Email Settings</a></li>
				<li><a href="../users/index.php"><i class="fa fa-circle-o"></i>Sms Settings</a></li>
				<li><a href="../users/index.php"><i class="fa fa-circle-o"></i>Company Profile Settings</a></li>
                

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
            Recipt
            <small>Customers Recipt</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="crea.php">Select Sales Transaction</a></li>
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
if (isset($_POST['submit'])) {

$id=$_GET['erp_id'];

$total = mysql_real_escape_string( $_POST["total2"] );

$pin = $_GET['i_2'];
 
	
	$d = mysql_real_escape_string( $_POST["txtdate"] );
	
	$date = date('Y-m-d', strtotime($d));
	
	
$qry = mysql_query(" Update  cust_pay  SET  date_sales='{$date}' , total_amount='{$total}' WHERE sales_code='{$pin}' ") or die(mysql_error());



	
	
	for($i=0; $i < count($_POST['productname']); $i++)
{
	
	$d1 =  $_POST["txtdate"] ;
	
	$d2= date('Y-m-d', strtotime($d1));
	echo $d2;
	
   mysql_query(" Update erp_inv
   	          SET  product_name = '{$_POST['productname'][$i]}',
			       date_sales = '{$d2}',
			       quantity =  '{$_POST['quantity'][$i]}',
				   price = '{$_POST['price'][$i]}'
                   WHERE sales_code = '{$_POST['idin'][$i]}'	
				 ") or die(mysql_error());

//echo "submitted";
	
} 

}

?>
				

<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">

<script type="text/javascript" src="../js/jquery/jquery-2.1.3.min.js"></script>

<script type="text/javascript" src="../js/bootstrap.min.js"></script>




<form action="" method="POST">

<div class="box box-primary">
<h3 class="box-title">Recipt</h3>
</div> <!--/box header> -->
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
		  
  <?php

$id =$_GET['erp_id'];
$id2 =$_GET['i_2'];
			 $bl = mysql_query("SELECT * FROM erp_inv WHERE erp_inv.sales_code='$id2'");
		$t = mysql_fetch_array($bl) ; 	 
		
?>
  


<p>	<span>Date</span>
<input name="txtdate" class="form-control"  data-validation="date required" data-validation-help="month/day/year" data-validation-format="mm/dd/yyyy" id="datepicker"  type="text" style="width:200px;" value="<?php $pa=$t['date_sales'];   $dat2 = date('m/d/Y', strtotime($pa));  if ($dat2=="01/01/1970"){ echo"";}else{ echo $dat2;}  ?>" required/></p></br>


<br><br>
<table class="table table-bordered table-hover">
	<thead>
		
		<th>ProductName</th>
		<th>Quantity</th>
		<th>Price</th>
		<th>Amount</th>
        <th><p> <button type="button"  id="add" class="btn btn-success glyphicon glyphicon-plus">   </button></p></th>
  </thead>
  

<tbody class="detail">

<tr>
<?php
$h = mysql_query("SELECT * FROM erp_inv WHERE erp_inv.sales_code='$id2'");
while($tr=mysql_fetch_array($h))
			{
		
		 
		?>
       <td hidden ><input type="text"  readonly  name="idin[]"  value="<?php echo $tr['inv_id']; ?>"/></td> 
	   <td><input type="text"  data-validation-error-msg="Error"   data-validation="alphanumeric" data-validation-allowing="-,/ " class="form-control productname" name="productname[]"  value="<?php echo $tr['product_name']; ?>" ></td>
		<td><input type="text" data-validation-error-msg="Error"   data-validation="number" data-validation-allowing="-,/ " class="form-control quantity" name="quantity[]" value="<?php echo $tr['quantity']; ?>" > </td>
		<td><input type="text" data-validation-error-msg="Error"   data-validation="number" data-validation-allowing=" " class="form-control price" name="price[]" value="<?php echo $tr['price']; ?>"></td>  
        <td><input type="text" data-validation-error-msg="Error"   data-validation="number" data-validation-allowing=" " class="form-control amount" name="amount[]" value="<?php echo $tr['amount']; ?>"></td>

		<td><a href="#"  id="remove" class="btn btn-danger glyphicon glyphicon-minus" role="button"></a></td>


  <?php }	?></tr>
</tbody>
			

<tfoot class="tfoot">

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
	<th><button type="submit"  class="btn btn-primary" name="submit"><i class="fa fa-floppy-o"></i> &nbsp;&nbsp;&nbsp;Save</button></th>
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
       var amt = (qty * price);
       tr.find('.amount').val(amt);
	 //  tr.find('.total2').val(amt);
       total();
	   balance();
		
		});
   	
	
	
	$('.amountp,.total2',function(){
      
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
 
 '<td><input type="text" data-validation-error-msg="Error"   data-validation="alphanumeric" data-validation-allowing="-,/ " class="form-control productname" name="productname[]   "></td>'+
 '<td><input type="text" data-validation-error-msg="Error"   data-validation="number" data-validation-allowing="-,/ " class="form-control quantity" name="quantity[]"></td>'+
 '<td><input type="text" data-validation-error-msg="Error"   data-validation="number" data-validation-allowing="-,/ " required title="numbers only" pattern="[0-9\]+" class="form-control price" name="price[]"></td>'+
 
 '<td><input type="text" class="form-control amount" name="amount[]"></td>'+
 '<td><a href="#"  id="remove" class="btn btn-danger glyphicon glyphicon-minus" role="button"></td>'+
'</tr>';
$('.detail').append(tr);

}
</script>
	
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
 // setup datepicker validation
    $("#datepicker").datepicker();
  
  </script>	

<script>

$(document).ready(function () {
   
    $('#txtDate').datepicker({
        changeMonth: true,
        changeYear: true,
        dateFormat: 'MM yy',

        onClose: function () {
            var iMonth = $("#ui-datepicker-div .ui-datepicker-month :selected").val();
            var iYear = $("#ui-datepicker-div .ui-datepicker-year :selected").val();
            $(this).datepicker('setDate', new Date(iYear, iMonth, 1));
            $(this).datepicker('refresh');
        },

        beforeShow: function () {
            if ((selDate = $(this).val()).length > 0) {
                iYear = selDate.substring(selDate.length - 4, selDate.length);
                iMonth = jQuery.inArray(selDate.substring(0, selDate.length - 5), $(this).datepicker('option', 'monthNames'));
                $(this).datepicker('option', 'defaultDate', new Date(iYear, iMonth, 1));
                $(this).datepicker('setDate', new Date(iYear, iMonth, 1));
            }
        }
    });

    $("#txtDate").focus(function () {
        $(".ui-datepicker-calendar").hide();
        $("#ui-datepicker-div").position({
            my: "center top",
            at: "center bottom",
            of: $(this)
        });
    });

    $("#txtDate").blur(function () {
        $(".ui-datepicker-calendar").hide();
    });
});
	
</script>	
	
		<?php  include '../include/footer.php';?>	