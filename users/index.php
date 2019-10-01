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
			
			
				<li class="treeview">
              <a href="#">
                <i class="fa fa-bar-chart"></i> <span>Stock</span> <i class="fa fa-angle-left pull-right"></i>
              </a>
			       <ul class=" treeview-menu">
        <li><a href="../stock/sto.php"><i class="fa fa-circle-o"></i>Create Stock</a></li>
        <li><a href="../stock/stoa.php"><i class="fa fa-circle-o"></i>Add Stock</a></li>
        <li><a href="../stock/stoc.php"><i class="fa fa-circle-o"></i>Stock Sales</a></li>
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
 

<li class="treeview">
              <a href="../report/e_report.php">
                <i class="fa fa-file-text"></i> <span>Report</span> <i class="fa fa-angle-left pull-right"></i>
              </a>
             
            </li>

       
      
	 
	
            <li class="active treeview">

              <a href="#">
                <i class="fa fa-gear"></i> <span>Settings</span> <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li class="active"><a href="../users/index.php"><i class="fa fa-circle-o"></i>User Management</a></li>
               <li><a href="../users/cp_set.php"><i class="fa fa-circle-o"></i>Company Profile Settings</a></li>
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
            User Management
            <small>Create</small>
          </h1>
         <!-- <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Tables</a></li>
            <li class="active">Data tables</li>
          </ol>-->
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
  $txt3 = md5( mysql_real_escape_string( $_POST["txt3"] ));
  $txt4 = mysql_real_escape_string( $_POST["txt4"] );
 
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
 
//If I want a 4-digit PIN code.
$account = 'ACCT/'.''.generatePIN();

  
   
   $query = "SELECT mac_name FROM  usamacc WHERE mac_name='{$txt1}'";
$query_run = mysql_query($query);

if (mysql_num_rows($query_run) >=1)  
{
 
?>
 
   <script> alert ("The Name of The User  Exist.");
 
 window.location="index.php";
 
 
</script>
 <?php
 // header("location:index "); 
 exit();
 

  }
 
  
  

if(empty($txt1) || empty($txt2)|| empty($txt3)|| empty($txt4)){
    //  header("location:reqatm ");
  
  //  echo"Please fill the form completely";
	?>
    <script> alert ("Please fill the form completely");</script>
	  
	<?php 
	  header("location:index.php ");  
	
	  
	   } else{
	
	//  $cust_id=  $_SESSION['user_id'];
	      $query = mysql_query("INSERT INTO usamacc (mac_name, mac_email,mac_passhash, mac_level) VALUES  ('{$txt1}','{$txt2}','{$txt3}','{$txt4}')") or die(mysql_error());
	 
	 header("location: index.php");
	  ?>
	
	   <script> alert ("User Account Created Succesfully."); </script>
	<?php }
	  // echo "<div id='box'>$message</div>";
	} //exit();

	?>


<form class="form-signin" method="POST" id="">
      
        <h2 class="form-signin-heading">Create User Account</h2><hr/>
        
        <div id="error">
        <!-- error will be showen here ! -->
        </div>
        
        <div class="form-group">
        <input type="text" class="form-control" placeholder="Username" data-validation="custom length" data-validation-length="min3"  data-validation-regexp="^([a-z,A-Z, ]+)$" name="txt1" id="user_name" style="width:250px;" />
        </div>
        
        <div class="form-group">
        <input type="email" class="form-control" data-validation="email" placeholder="Email address" name="txt2" id="user_email" style="width:250px;" />
        <span id="check-e"></span>
        </div>
        
        <div class="form-group">
        <input type="password"   class="form-control"  data-validation="required length"  data-validation-length="min4"  placeholder="Password" name="txt3" id="pass1" style="width:250px;" />
        </div>
        
        <div class="form-group">
        <input type="password" class="form-control" data-validation="required" placeholder="Retype Password" onkeyup="checkPass(); return false;" name="cpassword" id="pass2" style="width:250px;" />
        <span id="confirmMessage" class="confirmMessage"></span>
		</div>
     	    <div class="form-group">
<p><select class="form-control" name="txt4"  data-validation="required"   style="width:250px;" >
 <option value="" disabled selected>Select User Level</option>
<option value="Admin">Admin</option>
<option value="User">User</option>
</select>
</div>
		<hr/>
        
		
        <div class="form-group">
            <button type="submit" class="btn btn-primary" name="submit" id="btn-submit">
    		<span class="glyphicon glyphicon-log-in"></span> &nbsp; Create Account
			</button> 
        </div>  
   
      </form>


				

	<hr> 
	 <div class="box-header">
                 <h2 class="form-signin-heading">List Of User Account</h2>
       
	</div>
	<br>
	<div id="container">
		<table id="example2" cellspacing="0" width="100%" class="table table-bordered table-hover">
    	<thead>
    	<tr>
            
        <th width="9%"> User Name</th>
        <th width="5%">Email</th>
        <th width="5%">Type</th>
		<th width="5%">Reset Password</th>
		<!--<th width="5%">Block Account</th>
		<th width="5%">Status</th> -->
        
		
			<th width="5%">EDIT</th>
			<th width="5%">DELETE</th>
			
			</tr> 
        </thead>
	<tbody>

<?php
			 $h = mysql_query("select * FROM usamacc ORDER BY  '{mac_name}' ") or die(mysql_error()); 
			 
			while($tr = mysql_fetch_array($h))
			{
		?>
		
		
        <tr class="record">
        	
             <td><br><?php echo htmlentities( $tr['mac_name']); ?></td>
		     <td><br><?php echo htmlentities($tr['mac_email']); ?></td>
			 <td><br><?php echo htmlentities($tr['mac_level']); ?></td>
		  
           
	<td><br>
		&nbsp;&nbsp;&nbsp;&nbsp; <a  rel="facebox" href="rstp.php?erp_id=<?php echo $tr['macuser_id']; ?>" class=" btn-sm">
          <span class="fa fa-key"></span> 
        </a> </td>
             		<!--<td><br>
					<?php if($tr['mac_stat']==1){ ?>
		&nbsp;&nbsp;&nbsp;&nbsp; <a  rel="facebox" href="tog_blk.php?rp_id=<?php echo $tr['mac_stat']; ?>&erp_id=<?php echo $tr['macuser_id']; ?>" class=" btn-sm">
          <span class="fa fa-toggle-on"></span> 
					</a> <?php } else { ?>
						
						&nbsp;&nbsp;&nbsp;&nbsp; <a  rel="facebox" href="tog_blk.php?rp_id=<?php echo $tr['mac_stat']; ?>&erp_id=<?php echo $tr['macuser_id']; ?>" class=" btn-sm">
          <span class="fa fa-toggle-off"></span> 
					</a>
					<?php } ?> </td> 
          <td><br>
		&nbsp;&nbsp;&nbsp;&nbsp; <a  rel="facebox" href="acc1_edit.php?erp_id=<?php echo $tr['macuser_id']; ?>" class=" btn-sm">
          <span class="fa fa-pencil"></span> 
        </a> </td> -->   		
		<td><br>
		&nbsp;&nbsp;&nbsp;&nbsp; <a  rel="facebox" href="acc1_edit.php?erp_id=<?php echo $tr['macuser_id']; ?>" class=" btn-sm">
          <span class="fa fa-pencil"></span> 
        </a> </td> <td><br>
		&nbsp;&nbsp;&nbsp;&nbsp;    <a href="#" id="<?php echo $tr['macuser_id']; ?>" class="delbutton" title="Click To Delete"><span class="fa fa-trash"></a></td>

	
		
		
			</tr>
			
        <?php

		}
		
		
		?>
	
	</tbody>	
    </table>

		</div>
	
		
                </div><!-- /.box-body -->
              </div><!-- /.box -->

            </div><!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
        
		
		
	

		
			
<link href="../css/bootstrap.min.css" type="text/css" rel="stylesheet"/>
<link href="../css/jquery-ui.css" type="text/css" rel="stylesheet"/>
  <script src="../js/jquery/jquery-2.1.3.min.js"></script>
	 <script src="js/jquery/jquery-ui.min.js"></script>
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
	<script>

        $.validate();
			</script>



<script>
function checkPass()
{
    //Store the password field objects into variables ...
    var pass1 = document.getElementById('pass1');
    var pass2 = document.getElementById('pass2');
    //Store the Confimation Message Object ...
    var message = document.getElementById('confirmMessage');
    //Set the colors we will be using ...
    var goodColor = "";
    var badColor = "red";
    //Compare the values in the password field 
    //and the confirmation field
    if(pass1.value == pass2.value){
        //The passwords match. 
        //Set the color to the good color and inform
        //the user that they have entered the correct password 
        pass2.style.backgroundColor = goodColor;
        message.style.color = goodColor;
        message.innerHTML = "Passwords Match!"
    }else{
        //The passwords do not match.
        //Set the color to the bad color and
        //notify the user.
        pass2.style.backgroundColor = badColor;
        message.style.color = badColor;
		
		
        message.innerHTML = "Passwords Do Not Match! Make Sure The First Password You Typed Matches With The Second Password " 
    }
}  
   
</script> 

	<?php  include '../include/footer.php';?>