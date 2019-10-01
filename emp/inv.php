<?php  include '../include/header.php';?>


         <!-- /.search form -->
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
  <li class="active treeview">
              <a href="#">
                <i class="fa fa-male"></i> <span>Employee</span> <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li ><a href="../emp/add_stf.php"><i class="fa fa-circle-o"></i> Add Staff</a></li>
                <li><a href="../emp/view_stf.php"><i class="fa fa-circle-o"></i> View Staff</a></li>
                <li class="active"><a href="../emp/crea_pslip.php"><i class="fa fa-circle-o"></i> Create Payslip</a></li>
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
			<li class="treeview">
              <a href="#">
                <i class="fa fa-bank"></i> <span> Bank Reconcilation</span> <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="../ban/add_ban.php"><i class="fa fa-circle-o"></i> Add Bank</a></li>
                <li><a href="../ban/ban_pre1.php"><i class="fa fa-circle-o"></i> Record Bank Transactions</a></li>
                <li><a href="../ban/ban_acc1.php"><i class="fa fa-circle-o"></i> View Bank Reconcilation</a></li>
             
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
 <!-- sidebar menu: : style can be found in sidebar.less -->
          


      </section>
        <!-- /.sidebar -->
      </aside>
      <!-- =============================================== -->

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            PaySlip
            <small>Create PaySlip</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
         <li class="active">Create Pay Slip</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
             
                </div><!-- /.box-header -->
                <div class="box-body">
               
			   
			   <?php  
    
	$cop=$_GET['erp_id'];
	$ps=$_GET['pi'];
	
	$qy = "SELECT sp_code FROM pay_spe WHERE sp_code='$ps'";
  $qy_run = mysql_query($qy);

  $roy = mysql_fetch_array($qy_run);
   $ro = $roy['sp_code'];
  
  if ( $ro === $ps) 
{
 
  header("location: crea_pslip.php "); 
 exit();
}

  
   

	
 $query = "SELECT e_id FROM empinfo WHERE e_id='$cop'";
$query_run = mysql_query($query);

$rp = mysql_fetch_array($query_run);

if ( empty($rp['e_id'])|| empty($cop) || empty($ps) ) 
{
 
 
  header("location: ../home.php "); 
 exit();
}
	
	$cop1=$cop;
	
			 $hap = mysql_query("select e_name FROM empinfo where e_id='{$cop1}' ") or die(mysql_error()); 
			 
		$rap = mysql_fetch_array($hap);

		
if (isset($_POST['submit'])) {
	
		$ps2=$_GET['pi'];
	
	$qy2 = "SELECT sp_code FROM pay_spe WHERE sp_code='$ps2'";
  $qy_run2 = mysql_query($qy2);

  $roy2 = mysql_fetch_array($qy_run2);
   $ro2 = $roy2['sp_code'];
  
  if ( $ro2 === $ps2) 
{
 
  header("location: crea_pslip.php "); 
 exit();
}
	
	
	 $lp = $rap['e_name'];
	 
	
for($i=0;  $i < count($_POST['productname']);  $i++)
{
   mysql_query("INSERT INTO pay_spe
   	          SET  e_id = '{$cop1}',
			       e_name= '{$lp}',
				   sp_code= '{$ps}',
				   sp_pay = '{$_POST['txt1']}',
				   sp_mode = '{$_POST['txt2']}',
				   sp_mth = '{$_POST['txt3']}',
                  sp_yr = '{$_POST['txt3b']}',
                 sp_name_e = '{$_POST['productname'][$i]}',
   	               sp_amount_e  = '{$_POST['debit'][$i]}',
                   sp_type  = 'earnings'
   	") or die(mysql_error());


}


for($j=0;  $j < count($_POST['productnam']);  $j++)
{
   mysql_query("INSERT INTO pay_spe
   	          SET  e_id = '{$cop1}',
			       e_name= '{$lp}',
				   sp_code= '{$ps}',
                   sp_name_d = '{$_POST['productnam'][$j]}',
   	               sp_amount_d = '{$_POST['credit'][$j]}',
				   sp_mth = '{$_POST['txt3']}',
                   sp_yr = '{$_POST['txt3b']}',
                   sp_type  = 'deductions'
   	") or die(mysql_error());

}

 header("location: crea_pslip.php "); 
 exit();
}
?>



<script type="text/javascript" src="../js/jquery/jquery-2.1.3.min.js"></script>





<form action="" method="POST">

<div class="box box-primary">
<h3 class="box-title"><center>Pay Slip - <?php  echo $rap['e_name']; ?></center> </h3>
</div> <!--/box header> -->
<!-- form start -->

<div class="box-body">
 <p><span><b>Date Of Payment</b></span><input name="txt1" class="form-control"  data-validation="date required" data-validation-help="month/day/year" data-validation-format="mm/dd/yyyy" id="datepicker"  type="text" style="width:200px;" required/></p>
</p>

<p><span><b>Mode Of Payment</b></span><select  name="txt2" class="form-control"  data-validation="required"  type="text" style="width:200px;" required>
<option value=""></option>
<option value="Cash">Cash</option>
<option value="Cheque">Cheque</option>
<option value="Bank Deposit">Bank Deposit</option>
</select></p>

<p><span><b>PaySlip Month And Year</b></span>
<select  name="txt3" class="form-control"  data-validation="required"  type="text" style="width:108px;" required>
<option value=""></option>
<option value="January">January</option>
<option value="Febuary">Febuary</option>
<option value="March">March</option>
<option value="April">April</option>
<option value="May">May</option>
<option value="June">June</option>
<option value="July">July</option>
<option value="August">August</option>
<option value="September">September</option>
<option value="October">October</option>
<option value="November">November</option>
<option value="December">December</option> </select>



<select  name="txt3b" class="form-control"  data-validation="required"  type="text" style="width:80px;" required>
<option value=""></option>
<option value="2015">2015</option>
<option value="2016">2016</option>
<option value="2017">2017</option>
<option value="2018">2018</option>
<option value="2019">2019</option>
<option value="2020">2020</option>
<option value="2021">2021</option>
<option value="2022">2022</option>
<option value="2023">2023</option>
<option value="2024">2024</option>
<option value="2025">2025</option>
<option value="2026">2026</option>
<option value="2027">2027</option>
<option value="2028">2028</option>
<option value="2029">2029</option>
<option value="2030">2030</option> 
</select>
</p>

</div>


<br><br>
<p><b>EARNINGS</b></p>
<table class="table table-bordered table-hover">
	<thead>
		<th width="24"> No </th>
		
		<th width="264">Name</th>
		<th width="199" style="width:150px;">Amount</th>
				<th width="481"><p> <button type="button"  id="add" class="btn btn-success glyphicon glyphicon-plus">   </button></p></th>
</thead>
<tbody class="detail">
<tr>
  <td class="no">1</td>
 <td><input type="text" style="width:200px;" class="form-control productname" data-validation-error-msg="Error"   data-validation="required" data-validation-allowing="-,/ " name="productname[]"></td>
 <td><input type="text" style="width:150px;" class="form-control debit" name="debit[]"></td>
 
 
<!--<td><a href="#" class="remove">Delete</td> -->
<td><a rel="facebox"  id="remove" class="btn btn-danger glyphicon glyphicon-minus" role="button"></a></td>
</tr>



<tfoot>
	<th></th>
    <th>Total Earnings</th>
    
   <th style="text-align:center; width:200px;" class="debittotal">0</th>
  
  
</tfoot>
</tbody>
</table>
<p><b>DEDUCTIONS</b></p>
<table class="table table-bordered table-hover">
<thead>
		<th width="24"> No </th>
		
		<th width="264"></th>
	<th width="199" style="width:150px;"></th>
				<th width="481"><p> <button type="button"  id="add2" class="btn btn-success glyphicon glyphicon-plus">   </button></p></th>
  </thead>
<tbody class="detail2">

  <tr>
 <td class="num">1</td>
 
 <td><input type="text" style="width:200px;" class="form-control productnam" data-validation-error-msg="Error"   data-validation="required" data-validation-allowing="-,/ " name="productnam[]"></td>
 <td><input type="text" style="width:150px;" class="form-control credit" name="credit[]"></td>
 

<td><a rel="facebox"  id="remove2" class="btn btn-danger glyphicon glyphicon-minus" role="button"></a></td>
</tr>

</tbody>

<tfoot>
	
    <th></th>
   <th>Total Deductions</th>
   
   <th class="credittotal" style="text-align:center; width:200px; ">0</th>
  <tr>
  
    <th></th>
   <th>Net Pay</th>
   
   <th class="np" style="text-align:center; width:200px; ">0</th>
  </tr>
</tfoot>

</table>
	<input type="submit" class="btn btn-primary" name="submit" value="Save">
	</form>

<script>

	$(function(){
		$('#add').click(function(){
addnewrow();
});

		$('body').delegate('#remove','click',function(){
         $(this).parent().parent() .remove();

		});
   	
	$('.detail').delegate('.debit','keyup',function(){
       var tr = $(this).parent().parent();
       var dr = tr.find('.debit').val();
      
     
      // var drt=dr+dr;
      // tr.find('.amount').val(drt);
       total();
		tot();
		});
   	
   	});


function total()
{
 var t =0;
 $('.debit').each(function(i,e)
{

 var amt = $(this).val()-0;
  t += amt;
});
   $('.debittotal').html(t);
}





   
function addnewrow()
{

 var n = ($('.detail tr').length-0)+1;
 var tr = '<tr>'+
 '<td class="no">'+n+'</td>'+
 '<td><input type="text" style="width:200px;" data-validation-error-msg="Error"   data-validation="required" data-validation-allowing="-,/ " class="form-control productname"  title="letters numbers and space only" pattern="[a-zA-Z0-9\ ]+" name="productname[]"></td>'+
 '<td><input type="text" style="width:150px;" class="form-control debit" name="debit[]"></td>'+
 '<td><a rel="facebox"  id="remove" class="btn btn-danger glyphicon glyphicon-minus" role="button"></td>'+
'</tr>';
$('.detail').append(tr);

}
</script>

<script>

	$(function(){
		$('#add2').click(function(){
addnewrow2();
});

		$('body').delegate('#remove2','click',function(){
         $(this).parent().parent() .remove();

		});
   	
	$('.detail2').delegate('.credit,.crd1','keyup',function(){
       var tr = $(this).parent().parent();
       
       var cr = tr.find('.credit').val();
     
      // var drt=dr+dr;
      // tr.find('.amount').val(drt);
      
	 total2();
	 var b = total2();
	 
		tr.find('.crd1').val('b');  
		tot();
		});
   	
   	});




function total2()
{
 var t2 =0;
 $('.credit').each(function(i,e)
{

 var amt2 = $(this).val()-0;
  t2 += amt2;
});
   $('.credittotal').html(t2); 
   }

   
   
   function total3()
{
 var tt2 =0;
 $('.credit').each(function(i,e)
{

 var amtt2 = $(this).val()-0;
  tt2 += amtt2;
});
   $('.crd1').html(tt2); 
   }
   
   
function tot()
{

 var vox2 =0;

 $('.debit').each(function(i,e)
{

 var amte2 = $(this).val()-0;
  vox2 += amte2;
});

 var vox =0;

 $('.credit').each(function(i,e)
{

 var amte = $(this).val()-0;
  vox += amte;
});


var vox3;
vox3= vox2-vox;
   $('.np').html(vox3);



}

   
function addnewrow2()
{

 var nn = ($('.detail2 tr').length-0)+1;
 var tr = '<tr>'+
 '<td class="num">'+nn+'</td>'+
 '<td><input type="text" style="width:200px;" data-validation-error-msg="Error"   data-validation="required" data-validation-allowing="-,/ " class="form-control productnam"  title="letters numbers and space only" pattern="[a-zA-Z0-9\ ]+" name="productnam[]"></td>'+
 '<td><input type="text" style="width:150px;" class="form-control credit" name="credit[]"></td>'+
 '<td><a rel="facebox"  id="remove2" class="btn btn-danger glyphicon glyphicon-minus" role="button"></td>'+
'</tr>';
$('.detail2').append(tr);

}



</script>



				 


	

                </div><!-- /.box-body -->
              </div><!-- /.box -->

            </div><!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
	  
	   <script src="../js/jquery/jquery-ui.min.js"></script>	
	<script src="../js/validator/jquery.form-validator.min.js"></script>


<script>

 $.validate( );
 // setup datepicker
    $("#datepicker").datepicker();
 $("#datepicker2").datepicker();
 
 </script>

    
<script type="text/javascript">
$(function() {


$("#remov").click(function(){

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