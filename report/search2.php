<?php  include '../include/header.php';?>
          <!-- /.search form -->
 
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
        <li class="active" ><a href="../customers/add_cust.php"><i class="fa fa-circle-o"></i> Add Customers</a></li>
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
                <li ><a href="../sales/crea.php"><i class="fa fa-circle-o"></i> Create Sales</a></li>
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
 

<li class="active treeview">
              <a href="e_report.php">
                <i class="fa fa-file-text"></i> <span>Report</span> <i class="fa fa-angle-left pull-right"></i>
              </a>
             
            </li>
  <li>
<a href="#">
                <i class="fa fa-gear"></i> <span>Settings</span> <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="../users/index.php"><i class="fa fa-circle-o"></i>User Management</a></li>
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
		  Sales Report
		     <small>Recipt</small>
          </h1>
         <!-- <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="sheet_pre1.php">Select Account</a></li>
            <li>View Account</li>
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
				
				
				
				<a href="#" id="test" onClick="javascript:fnExcelReport();" class="btn btn-success btn-sm" role="button"><i class="fa fa-file-excel-o fa-lg"></i>  Export To Excel</a>  <a href="#"  onclick="return print1('print2')" class="btn btn-primary btn-sm" role="button"> Print <i class="fa fa-print fa-lg"></i></a>
<div id="print2">


<?php


$a= $_GET['a'];
$b= $_GET['b'];

$dat1 = date('Y-m-d', strtotime($a)).'<br>';
$dat2 = date('Y-m-d', strtotime($b)).'<br>';

$k1 = mysql_query("Select * FROM comp_profile ") or die(mysql_error()); 
 $to1 = mysql_fetch_array($k1);
    echo '<center><p><img height="70" class="img-responsive" width="70" src="data:image;base64,'.$to1['profile_pic'].' "></p></center>';
	

?>

<style>

table {
	
    border-collapse: collapse;
}

table, th, td {
    border: 1px solid black;
}

</style>
	
<div id="myTable">
<?php

echo '<center><p><b>'. $to1['profile_name'].'</b></p></center>';
echo "<Center><p><b>Sales</b></p><b>". $d1 = date('d F Y ', strtotime($a)) ." - ".  $d2 = date('d F Y', strtotime($b))."</b></Center>";
		?>		
               
			   <table class="table table-bordered table-hover" >
	
<thead>
<tr>


        <th width="10%">Customers Name</th>
        <th width="10%">Date Of Sales</th>
		<th width="10%">Recipt Number</th>
    <th width="10%">Total Amount</th>
   <!-- <th width="10%">Amount Paid</th>-->
        <th width="10%">Date Paid</th>
        <th width="10%">Balance To Pay</th>
        
    
      <th width="5%">View Recipt</th>
      


</tr>
</thead>
<tbody>

<?php


			 $h = mysql_query("SELECT * FROM  cust_pay, customerdetails  WHERE cust_pay.c_id=customerdetails.c_id  AND amount_paid!='' AND  date_sales BETWEEN '$dat1' AND '$dat2' ORDER BY cust_pay_id DESC ; ") or die(mysql_error()); 
			 
			while($tr = mysql_fetch_array($h))
      {
    ?>
    
    
        <tr class="record">
          
            <td><br><?php echo $tr['c_name']; ?></td>
       
       <td><br><?php $pa=$tr['date_sales'];   $daa = date('d/m/Y', strtotime($pa)); echo $daa;?></td>
        <td><br><?php echo $tr['sales_code']; ?></td>     
            <td><br><?php echo $tr['total_amount']; ?></td>           
       <!--<td><br><?php //echo $tr['amount_paid']; ?></td>-->
            <td><br><?php $pa2=$tr['date_paid'];   $dt2 = date('d/m/Y', strtotime($pa2)); echo $dt2;?></td>
       
          <td><br><?php echo $tr['balance_to_pay']; ?></td>
     
      
          <!--  <td><br><?php //echo $tr['tricon_comment']; ?></td> --> 
      <td><br>
    &nbsp;&nbsp;&nbsp;&nbsp; <a   href="view.php?erp_id=<?php echo $tr['c_id']; ?>&i_2=<?php echo $tr['sales_code']; ?>" class=" btn-sm">
          <span class="glyphicon glyphicon-file"></span> 
        </a> </td> 
    
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
	 <script src="../js/jquery/jquery-ui.min.js"></script>

	 
<script type="text/javascript" src="jquery.min.js"></script>
<script type="text/javascript">
function print1(strid)
{
if(confirm("Do you want to print?"))
{
var values = document.getElementById(strid);
var printing =
//window.open('','','left=0,top=0,width=794,height=500,toolbar=0,scrollbars=0,sta­?tus=0');
window.open();
printing.document.write(values.innerHTML);
printing.document.close();
printing.focus();
printing.print();
printing.close();
}
}
</script>
</div>

	  
    
 <script>
	 
	  var dat = new Date();
  var dd = dat.getDate();
  var mm = dat.getMonth() + 1; //January is 0!
  var yyyy = dat.getFullYear();
  var hh = dat.getHours();
  var min = dat.getMinutes();
  var ss = dat.getSeconds();

  if (dd < 10) {
    dd = '0' + dd;
  }

  if (mm < 10) {
    mm = '0' + mm;
  }

  let trandate = yyyy + '' + mm + '' + dd + '' + hh + '' + min + '' + ss;
	 
function fnExcelReport() {
    var tab_text = '<html xmlns:x="urn:schemas-microsoft-com:office:excel">';
    tab_text = tab_text + '<head><xml><x:ExcelWorkbook><x:ExcelWorksheets><x:ExcelWorksheet>';

    tab_text = tab_text + '<x:Name>Test Sheet</x:Name>';

    tab_text = tab_text + '<x:WorksheetOptions><x:Panes></x:Panes></x:WorksheetOptions></x:ExcelWorksheet>';
    tab_text = tab_text + '</x:ExcelWorksheets></x:ExcelWorkbook></xml></head><body>';

    tab_text = tab_text + "<table border='1px'>";
    tab_text = tab_text + $('#myTable').html();
    tab_text = tab_text + '</table></body></html>';

    //var data_type = 'data:application/vnd.ms-excel';
    var data_type = 'data:application/vnd.ms-excel;charset=utf-8';
    
    var ua = window.navigator.userAgent;
    var msie = ua.indexOf("MSIE ");
    var edge = ua.indexOf("Edge ");
    
    if (msie > 0 || !!navigator.userAgent.match(/Trident.*rv\:11\./)) {
        if (window.navigator.msSaveBlob) {
            var blob = new Blob([tab_text], {
                type: "application/csv;charset=utf-8;"
            });
            navigator.msSaveBlob(blob, 'Sales-Report-'+trandate+'.xls');
        }
    } else {
		//window.open( data_type + ',' + encodeURIComponent(tab_text));
        $('#test').attr('href', data_type + ', ' + encodeURIComponent(tab_text));
        $('#test').attr('download', 'Sales-Report-'+trandate+'.xls');
    }


 var ua = window.navigator.userAgent;
    
    var edge = ua.indexOf("Edge ");

if (edge || !!navigator.userAgent.match(/Trident.*rv\:11\./)) {
        if (window.navigator.msSaveBlob) {
            var blob = new Blob([tab_text], {
                type: "application/csv;charset=utf-8;"
            });
            navigator.msSaveBlob(blob,'Sales-Report-'+trandate+'.xls');
        }
    } else {
		//window.open( data_type + ',' + encodeURIComponent(tab_text));
        $('#test').attr('href', data_type + ', ' + encodeURIComponent(tab_text));
        $('#test').attr('download', 'Sales-Report-'+trandate+'.xls');
    }

}

 </script>
	
	
	
		<?php  include '../include/footer.php';?>	