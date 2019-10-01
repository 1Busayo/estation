<?php  include '../include/header.php';?>

          <!-- /.search form -->
          <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
     <li class="header">MAIN NAVIGATION</li>
            <li class="treeview">               <a href="../home.php">                 <i class="fa fa-dashboard"></i> <span>Dashboard</span> <i class="fa fa-angle-left pull-right"></i>               </a>             </li>  			<li class="treeview">               <a href="#">                 <i class="fa fa-bar-chart"></i> <span>Stock</span> <i class="fa fa-angle-left pull-right"></i>               </a> 			       <ul class=" treeview-menu">         <li><a href="../stock/sto.php"><i class="fa fa-circle-o"></i>Create Stock</a></li>         <li><a href="../stock/stoa.php"><i class="fa fa-circle-o"></i>Add Stock</a></li>         <li><a href="../stock/stoc.php"><i class="fa fa-circle-o"></i>Stock Sales</a></li>          </ul>             </li>
             <li class="active treeview">
              <a href="prod.php">
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
            Product
            <small><i class='fa fa-star'></i></small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="../home.php"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Product</li>
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
 
  $dat=date('Y-m-d');
  
  
  			
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
  
  
   
  $query = "SELECT `prod_name` FROM `e_prod` WHERE `prod_name`='{$txt1}'";
$query_run = mysql_query($query);


if (mysql_num_rows($query_run) >=1)  
{
  $mngs='Product name '.$txt1.' already exist';
	
	   header("location:prod.php?msg2=".$mngs);
				 exit();

  }
 
  
  

if(empty($txt1) || empty($txt2) ){
    
	
	$mngs='Please fill the form completely';
	
	   header("location:prod.php?msg2=".$mngs);
				 exit();
	
	   } else{
	
	$query = mysql_query(" INSERT INTO e_prod ( `prod_name`, `prod_price`, `date`) VALUES  ('{$txt1}','{$txt2}','{$dat}')") or die(mysql_error());
	 
  	
	$mng='You Have Successfully added '.$txt1.'';
	
	   header("location:prod.php?msg=".$mng);
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

<?php  include '../include/location/selectbranch.php';?>



	<form  name='form__2' action="" method="POST">

<p><span>Product Name</span><input name="txt1" class="form-control"  data-validation="required"  type="text" style="width:200px;" required>
</p>
	
<p><span>Price</span><input  name="txt2" class="form-control"  data-validation="required"  type="text" style="width:200px;" required>
</p>

	
		<br><br>
 <input   type="submit"  class="btn btn-primary" name="submit" value="submit"/>

		

 	</form>
		
	
		
               <hr>
               
<table id="example1" class="table table-bordered table-hover">
    	<thead>
    	<tr>
            
        <th width="10%">Prdouct Name </th>
        <th width="10%">Price</th>
			<th width="5%">	Edit</th>
			<th width="5%">	Delete</th>
			
			
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

			 
$h = mysql_query("Select  * FROM e_prod ") or die(mysql_error()); 
			 
			
	 

		while($tr = mysql_fetch_array($h))
		{
		



		?>
		
		
		
        <tr class="record">
        	
            <td><br><?php echo $tr['prod_name']; ?></td>
		    <td><br><?php echo $tr['prod_price']; ?></td>
			<td>&nbsp;&nbsp;&nbsp;&nbsp; <a  rel="facebox" href="prod_edit.php?erp_id=<?php echo $tr['prod_id']; ?>" class=" btn-sm">
          <i class="fa fa-pencil"></i> 
        </a> 
	
		</td> 
	</td><td>&nbsp;&nbsp;&nbsp;&nbsp; <a href="#" id="<?php echo $tr['prod_id']; ?>" class="delbutton" title="Click To Delete"><span class="fa fa-trash"></a>
	
		</td> 
		
			 <?php } ?>
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
	
		<?php  include '../include/footer.php';?>	