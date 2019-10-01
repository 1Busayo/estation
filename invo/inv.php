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
                <li class="treeview">
              <a href="#">
                <i class="fa fa-file"></i> <span>Sales</span> <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li ><a href="crea.php"><i class="fa fa-circle-o"></i> Create Sales</a></li>
                <li><a href="sales.php"><i class="fa fa-circle-o"></i> View Sales</a></li>
              </ul>
            </li>
              </ul>
            </li>
			<li class="active treeview">
              <a href="#">
                <i class="fa fa-file"></i> <span>Invoice</span> <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li class="active"><a href="crea.php"><i class="fa fa-circle-o"></i> Create Invoice</a></li>
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
            Invoice
            <small>Create Invoice</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="crea.php">Select Customer</a></li>
            <li class="active">Create Invoice</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">List of users</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
               
<?php
if (isset($_POST['submit'])) {
	
for($i=0; $i < count($_POST['productname']); $i++)
{
   mysql_query("INSERT INTO erp_inv
   	          SET  cust_id = '4', 
   	               product_name = '{$_POST['productname'][$i]}',
   	               quantity     = '{$_POST['quantity'][$i]}',
                   price        = '{$_POST['price'][$i]}',
                   discount     = '{$_POST['discount'][$i]}', 
                   amount       = '{$_POST['amount'][$i]}'

   	") or die(mysql_error());

echo "submitted";
}

}
?>


<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">

<script type="text/javascript" src="../js/jquery/jquery-2.1.3.min.js"></script>

<script type="text/javascript" src="../js/bootstrap.min.js"></script>




<form action="" method="POST">

<div class="box box-primary">
<h3 class="box-title">Invoice</h3>
</div> <!--/box header> -->
<!-- form start -->

<div class="box-body">
<div class="form-group">
<p> <span>Customer Name </span><input type="text" name="txt1" style="width:200px;" class="form-control"> </p>
</div>
<div class="form-group">
<p> <span>Location</span><input type="text" name="txt2" style="width:200px;" class="form-control"> </p>
</div>

</div>
<input type="submit" class="btn btn-primary" name="submit" value="Save Record">

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
 <td><input type="text" class="form-control productname" name="productname[]"></td>
 <td><input type="text" class="form-control quantity" name="quantity[]"></td>
 <td><input type="text" class="form-control price" name="price[]"></td>
 <td><input type="text" class="form-control discount" name="discount[]"></td>
 <td><input type="text" class="form-control amount" name="amount[]"></td>
<!--<td><a href="#" class="remove">Delete</td> -->
<td><a href="#"  id="remove" class="btn btn-danger glyphicon glyphicon-minus" role="button"></a></td>
</tr>
<form>
</tbody>

<tfoot>
	<th></th>
    <th></th>
    <th></th>
    <th></th>
    <th></th>
    <th style="text-align:center;" class="total">0</th>

  
</tfoot>
</table>
	
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
   	
	$('.detail').delegate('.quantity,.price,.discount','keyup',function(){
       var tr = $(this).parent().parent();
       var qty = tr.find('.quantity').val();
       var price = tr.find('.price').val();
       var dis = tr.find('.discount').val();
       var amt = (qty * price)-(qty * price * dis)/100;
       tr.find('.amount').val(amt);
       total();
		});
   	
   	});


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
 '<td><input type="text" class="form-control productname" name="productname[]"></td>'+
 '<td><input type="text" class="form-control quantity" name="quantity[]"></td>'+
 '<td><input type="text" class="form-control price" name="price[]"></td>'+
 '<td><input type="text" class="form-control discount" name="discount[]"></td>'+
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