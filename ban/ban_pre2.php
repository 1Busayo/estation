<?php  include '../include/header.php';



$cop=$_GET['erp_id'];
	
	$qy = "SELECT cb_id FROM cb_banks WHERE cb_id='$cop'";
  $qy_run = mysql_query($qy);

  $roy = mysql_fetch_array($qy_run);
 
   $ro2 = $roy['cb_id'];
  
  if (  $ro2 !== $cop ) 
{
 
  header("location: ban_pre1.php "); 
 exit();
}


?>
          <!-- /.search form -->
          <!-- sidebar menu: : style can be found in sidebar.less -->
<ul class="sidebar-menu">
          <li class="header">MAIN NAVIGATION</li>
            <li class="treeview">               <a href="../home.php">                 <i class="fa fa-dashboard"></i> <span>Dashboard</span> <i class="fa fa-angle-left pull-right"></i>               </a>             </li>  			<li class="treeview">               <a href="#">                 <i class="fa fa-bar-chart"></i> <span>Stock</span> <i class="fa fa-angle-left pull-right"></i>               </a> 			       <ul class=" treeview-menu">         <li><a href="../stock/sto.php"><i class="fa fa-circle-o"></i>Create Stock</a></li>         <li><a href="../stock/stoa.php"><i class="fa fa-circle-o"></i>Add Stock</a></li>         <li><a href="../stock/stoc.php"><i class="fa fa-circle-o"></i>Stock Sales</a></li>          </ul>             </li>
             <li class="treeview">
              <a href="#">
                <i class="fa fa-bell"></i> <span>Reminder</span> <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class=" treeview-menu">
        
        <li><a href="../rem/rem_stf.php"><i class="fa fa-circle-o"></i>Staff</a></li>
                <li><a href="../rem/rem_cu.php"><i class="fa fa-circle-o"></i> Customers</a></li>
                
              </ul>
            </li>
		  <li class="treeview">
              <a href="#">
                <i class="fa fa-users"></i> <span>Customers</span> <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class=" treeview-menu">
        
        <li><a href="../customers/add_cust.php"><i class="fa fa-circle-o"></i> Add Customers</a></li>
                <li><a href="../customers/view_cust.php"><i class="fa fa-circle-o"></i> Manage Customers</a></li>
                
              </ul>
            </li>
      <li class=" treeview">
              <a href="#">
                <i class="fa fa-money"></i>
 <span>Sales</span> <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li ><a href="../sales/crea.php"><i class="fa fa-circle-o"></i> Create Sales</a></li>
				<li><a href="../sales/crea2.php"><i class="fa fa-circle-o"></i> View Sales</a></li>
                <li><a href="../sales/view_sal.php"><i class="fa fa-circle-o"></i>Recipt</a></li>
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
				<li><a href="../emp/view_payslip.php"><i class="fa fa-circle-o"></i> View Payslip</a></li>
				
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
                <i class="fa fa-book"></i> <span>Account</span> <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="../acaunt/grp_acc1.php"><i class="fa fa-circle-o"></i> Create Ledger</a></li>
                <li><a href="../acaunt/sheet_acc1.php"><i class="fa fa-circle-o"></i> Create Account</a></li>
                <li><a href="../acaunt/sheet_pre1.php"><i class="fa fa-circle-o"></i> Prepare Account</a></li>
                <li><a href="../acaunt/view_acc1.php"><i class="fa fa-circle-o"></i> View Account</a></li>
				<li><a href="../acaunt/crea_eq.php"><i class="fa fa-circle-o"></i> Create Equity</a></li>
				<li><a href="../acaunt/eq_nam.php"><i class="fa fa-circle-o"></i> Prepare Equity</a></li>
				<li><a href="../acaunt/view_eq.php"><i class="fa fa-circle-o"></i> View Equity</a></li>
              </ul>
            </li>   
			<li class="active treeview">
              <a href="#">
                <i class="fa fa-bank"></i> <span> Bank Reconcilation</span> <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="../ban/add_ban.php"><i class="fa fa-circle-o"></i> Add Bank</a></li>
                <li><a href="../ban/ban_pre1.php"><i class="fa fa-circle-o"></i> Record Bank Transactions</a></li>
                <li class="active"><a href="../ban/ban_acc1.php"><i class="fa fa-circle-o"></i> View Bank Reconcilation</a></li>
             
              </ul>
            </li>


<li class="treeview">
              <a href="#">
                <i class="fa fa-file-text"></i> <span>Report</span> <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="../report/sales_rp.php"><i class="fa fa-circle-o"></i> Sales Report</a></li>
                <li><a href="../report/acct_rp.php"><i class="fa fa-circle-o"></i>Account Report</a></li>
                <li ><a href="../report/sal_rp.php"><i class="fa fa-circle-o"></i> Salary Report</a></li>
              </ul>
            </li>

            <li class="treeview">

              <a href="#">
                <i class="fa fa-gear"></i> <span>Settings</span> <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="../users/index.php"><i class="fa fa-circle-o"></i>User Management</a></li>
                <li><a href="../users/ema.php"><i class="fa fa-circle-o"></i>Email Settings</a></li>
				<li><a href="../users/sm.php"><i class="fa fa-circle-o"></i>Sms Settings</a></li>
				<li><a href="../users/vat_set.php"><i class="fa fa-circle-o"></i>VAT Settings</a></li>
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
       

	   <?php
				$a1=$_GET['erp_id'];
			 $h = mysql_query("Select *FROM cb_banks where cb_id='{$a1}' ") or die(mysql_error()); 
			 
		$tr = mysql_fetch_array($h);
			
		?>
		  <h1>
		  
            Record Bank Transactions
            <small><?php echo $tr['cb_name'];?></small>
          </h1>
          <!--<ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="sheet_pre1.php">Select Account</a></li>
            <li class="active">Prepare Account</li>
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
	


$id=$_GET['erp_id'];

$h = mysql_query("Select *  FROM cb_banks WHERE cb_id='{$id}'  ") or die(mysql_error()); 
			 
			$tr = mysql_fetch_array($h);
   
 $a1= $tr['cb_id']; 
 $a2= $tr['cb_name']; 
 $a3= $tr['cb_accnam'];
 $a4= $tr['cb_accnum'];
 $a5= $tr['cb_type']; 



	for($i=0; $i < count( $_POST['txt1']); $i++)
{
	
$d = $_POST['txt1'][$i];
 echo $d.'<br>';

$dat = date('Y-m-d', strtotime($d)).'<br>';

   mysql_query("INSERT INTO ban_transac
   	          SET  ban_dat =   '{$dat}',
                   cb_id = '{$a1}',
			       cb_name = '{$a2}',
				   cb_accnam =   '{$a3}',
				   cb_accnum =   '{$a4}',
				   cb_type =   '{$a5}',
				   ban_stat =  '{$_POST['txt2'][$i]}',
				   ban_deb =   '{$_POST['txt4'][$i]}',
                   ban_cred =  '{$_POST['txt5'][$i]}'
                   
   	") or die(mysql_error());

echo "submitted";
	
} 
}
?>

<h1><center>Banking Transactions</center></h1>
<p><b>Bank Name:</b> <?php echo $tr['cb_name']; ?></p>
<p><b>Account Name:</b> <?php echo $tr['cb_accnam']; ?></p>
<p><b>Account Number:</b><?php echo $tr['cb_accnum']; ?></p>
<p><b>Account Type: </b><?php echo $tr['cb_type']; ?></p>


<form action="" method="POST">

<br><br>
<table class="table table-bordered table-hover">
	<thead>
		<th> No </th>
		<th style="width:158px;">Date <h6>(month/day/year e.g 09/21/2015 , 09/02/2015)</h6></th>
		<th>Statement</th>
		
		<th style="width:140px;">Debit(Dr)</th>
		<th style="width:140px;">Credit(Cr)</th>
		<th><p> <button type="button"  id="add" class="btn btn-success glyphicon glyphicon-plus">   </button></p></th>
  </thead>
<tbody class="detail">
<tr>
 <td class="no">1</td>
 <td><p><input name="txt1[]" class="form-control"  data-validation="date required" data-validation-help="month/day/year" data-validation-format="mm/dd/yyyy" id="datepicker"  type="text" style="width:158px;" required/></p>
</p></td>
<td><input type="text" data-validation="required" style="width:200px;" class="form-control" name="txt2[]"></td>

 <td><input type="text" data-validation-optional="true" data-validation="number" style="width:140px;" class="form-control amount" name="txt4[]"></td>
 <td><input type="text" data-validation-optional="true" data-validation="number" style="width:140px;" class="form-control amount2" name="txt5[]"></td>
<td><button id="remove" class="btn btn-danger glyphicon glyphicon-minus"></button></td>
</tr>


</tbody>

<tfoot>
	<th></th>
    <th><b>Balance</b></th>
    <th></th>
    
   <th style="text-align:center;" class="amounttotal">0</th>
   <th style="text-align:center;" class="amounttotal2">0</th>
   
  
</tfoot>
</table>
<input type="submit" class="btn btn-primary" name="submit" value="Save Record">

	<form>


<script>

	$(function(){
		$('#add').click(function(){
addnewrow();
});

		$('body').delegate('#remove','click',function(){
         $(this).parent().parent() .remove();
           total();
	   total2()
		});
   	
	$('.detail').delegate('.amount , .amount2','keyup',function(){
       var tr = $(this).parent().parent();
     
       total();
	   total2();
		
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
   $('.amounttotal').html(t);
}

function total2()
{
 var t2 =0;
 $('.amount2').each(function(i,e)
{

 var amt2 = $(this).val()-0;
  t2 += amt2;
});
   $('.amounttotal2').html(t2);
}


   
function addnewrow()
{

 var n = ($('.detail tr').length-0)+1;
 var tr = '<tr>'+
 '<td class="no">'+n+'</td>'+
 '<td><input name="txt1[]" class="form-control"  title="mm/dd/yyyy e.g 09/21/2015" data-validation="date required"   data-validation-format="mm/dd/yyyy" id="datepicker"    type="text" style="width:158px;" required/></p></td>'+
 '<td><input type="text" data-validation="required" style="width:200px;" class="form-control " name="txt2[]"></td>'+
 '<td><input type="text" style="width:140px;" data-validation-optional="true" data-validation="number" class="form-control amount" name="txt4[]"></td>'+
'<td><input type="text" style="width:140px;"  data-validation-optional="true" data-validation="number" class="form-control amount2" name="txt5[]"></td>'+

 '<td><button id="remove" class="btn btn-danger glyphicon glyphicon-minus"></i></button></td>'+
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