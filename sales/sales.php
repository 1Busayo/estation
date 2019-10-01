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
            Recipt
            <small>Create Invoice</small>
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
                  <h3 class="box-title">List of users</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
               
<?php
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
        
  </thead>
  
  <?php

$id =$_GET['erp_id'];
$id2 =$_GET['i_2'];
			 $h = mysql_query("SELECT count(sales_code),product_name,quantity,price,discount,amount FROM   erp_inv  WHERE erp_inv.sales_code = '$id2'  ") or die(mysql_error()); 
			 
			
?>
  
<tbody class="detail">

<tr>
<?php

while($tr = mysql_fetch_array($h)  )
			{
		?>

 <td class="no"><?php $a= $tr['count(sales_code)'];
$i=0;
while ($i <= $a) {
echo $i++;  }
 ?></td>
     <td><br><?php echo $tr['product_name']; ?></td>
		    <td><br><?php echo $tr['quantity']; ?></td>
			
            <td><br><?php echo $tr['price']; ?></td>           
		   <td><br><?php echo $tr['discount']; ?></td>
           <td><br><?php echo $tr['amount']; ?></td>
          <td><br><?php //echo $tr['balance_to_pay']; ?></td>
</tr>
  <?php }	?>
</tbody>

<tfoot>
	<th></th>
    <th></th>
    <th></th>
    <th></th>
    <th></th>
    <th style="text-align:center;"><td><br><?php //echo $tr['total_amount']; ?></td> </th>


</tfoot>
</table>
			
</body>
</html>

<script>

	$(function(){
		$('.no').onload(function(){
addnewrow();
});

	
   	
   	});



   
function addnewrow()
{

 var n = ($('.detail tr').length-0)+1;

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