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
            Report
            <small>Pump Sales</small>
          </h1>
       <!--   <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="crea.php">Select Customer</a></li>
            <li class="active">Create Invoice</li>
          </ol>-->
        </section>

        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Pump Sales</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
				
				<a href="#" id="test" onClick="javascript:fnExcelReport();" class="btn btn-success btn-sm" role="button"><i class="fa fa-file-excel-o fa-lg"></i>  Export To Excel</a>  <a href="#"  onclick="return print1('print2')" class="btn btn-primary btn-sm" role="button"> Print <i class="fa fa-print fa-lg"></i></a>
<div id="print2">

				
<?php

$a= $_GET['a'];
$b= $_GET['b'];

$da = date('Y-m-d', strtotime($a));
$da2 = date('Y-m-d', strtotime($b));


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
echo "<Center><p><b>Pump Sales</b></p><b>". $d1 = date('d F Y ', strtotime($a)) ." - ".  $d2 = date('d F Y', strtotime($b))."</b></Center>";


$kool = mysql_query("Select   `e_code`, `p_name`, `e_cm`, `e_om`, `vol_sold`, `price` ,e_date,p_prod,amount FROM e_sales WHERE  c_prod ='Petrol' and e_date Between '$da' AND '$da2' ") or die(mysql_error()); 
$toor = mysql_fetch_array($kool);

	       if($toor==NULL){
			   
			   Echo "<p>No Records For Petrol Found </p>";
			   
		   }else{


 ?>

<br>


				   <h1>Petrol</h1>

<table id="" class="table table-bordered table-hover">
    	<thead>
    	<tr>
            
        <th width="10%">Date</th>
        <th width="10%">Pump Name</th>
		<th width="19%">Meter Reading</th>
		<th width="10%">Volume Sold</th>
		<th width="10%">Amount</th>
        
        
			
			</tr> 
        </thead>
	<tbody>

<?php



 $dat=date('Y-m-d');

			 
$h = mysql_query("Select   `e_code`, `p_name`, `e_cm`, `e_om`, `vol_sold`, `price` ,e_date,p_prod,amount FROM e_sales WHERE  c_prod ='Petrol' and e_date Between '$da' AND '$da2' ") or die(mysql_error()); 
			 
			
		$sum=0;	 

		while($tr = mysql_fetch_array($h))
		{
		



		?>
		
		
		
        <tr>
        	
            <td><br><?php echo $tr['e_date']; ?></td>
		    <td><br><?php echo $tr['p_name'] .' '. $tr['p_prod']; ?></td>
			<td><br><p><label>Closing Meter :</label><?php echo $tr['e_cm'];?></p>
			<p><label>Opening Meter :</label><?php echo $tr['e_om']; ?></p>
			</td>
            <td><br><?php echo $volume = round( $tr['vol_sold'], 1); ?></td>           
		    <td><br><?php echo $amount = (int) $tr['amount']; ?></td>      
			

			<br>
  
			</tr>
		<?php } ?>
	
	 <tfoot>
			<tr><br>
			
			
			<td></td>
			<td></td>
			<td>Total Sales</td>
			
			<?php
			$xxh2 = mysql_query("Select sum(vol_sold) as volumex , sum(amount) as amountx FROM e_sales WHERE e_date Between '$da' AND '$da2' and c_prod ='Petrol' ");
			$xtr2 = mysql_fetch_array($xxh2);
			?>
			
			<td> <?php echo   round ($xtr2['volumex'],1) ?></td>
			<td><?php   echo   (int)$xtr2['amountx']; ?></td>
			
			
			</tr>           
		 </tfoot> 
		
	</tbody>	
    </table>
		   <?php } 
		   
		   $koolx = mysql_query("Select   `e_code`, `p_name`, `e_cm`, `e_om`, `vol_sold`, `price` ,e_date,p_prod,amount FROM e_sales WHERE   c_prod ='Diesel' and  e_date Between '$da' AND '$da2' ") or die(mysql_error()); 
$toorx = mysql_fetch_array($koolx);

	       if($toorx==NULL){
			   
			   Echo "<p>No Records For Diesel Found </p>";
			   
		   }else{
  ?>

	<h1>Diesel</h1>
	<table id="" class="table table-bordered table-hover">
    	<thead>
    	<tr>
            
        <th width="10%">Date</th>
        <th width="10%">Pump Name</th>
		<th width="10%">Meter Reading</th>
		<th width="10%">Volume Sold</th>
		<th width="10%">Amount</th>
        
        
			</tr> 
        </thead>
	<tbody>

<?php



 $dat=date('Y-m-d');

			 
$h = mysql_query("Select   `e_code`, `p_name`, `e_cm`, `e_om`, `vol_sold`, `price` ,e_date,p_prod,amount FROM e_sales WHERE   c_prod ='Diesel' and  e_date Between '$da' AND '$da2' ") or die(mysql_error()); 
			 
			
			 
			$sum=0;	 

		while($tr = mysql_fetch_array($h))
		{
		



		?>
		
		
		
        <tr>
        	
            <td><br><?php echo $tr['e_date']; ?></td>
		    <td><br><?php echo $tr['p_name'] .' '. $tr['p_prod']; ?></td>
			<td><br><p><label>Closing Meter :</label><?php echo $tr['e_cm'];?></p>
			<p><label>Opening Meter :</label><?php echo $tr['e_om']; ?></p>
			</td>
            <td><br><?php echo $volume = round( $tr['vol_sold'], 1); ?></td>           
		    <td><br><?php echo $amount = (int) $tr['amount']; ?></td>      
			

			<br>
  
			</tr>
		<?php } ?>
	
	 <tfoot>
			<tr><br>
			
			
			<td></td>
			<td></td>
			<td>Total Sales</td>
			
			<?php
			$xxh2 = mysql_query("Select sum(vol_sold) as volumex , sum(amount) as amountx FROM e_sales WHERE e_date Between '$da' AND '$da2' and c_prod ='Diesel' ");
			$xtr2 = mysql_fetch_array($xxh2);
			?>
			
			<td> <?php echo   round ($xtr2['volumex'],1) ?></td>
			<td><?php   echo   (int)$xtr2['amountx']; ?></td>
			
			
			</tr>           
		 </tfoot> 
		
	</tbody>	
    </table>

	




   <?php }?>

	</div>

                </div><!-- /.box-body -->
              </div><!-- /.box -->

            </div><!-- /.col -->
          </div><!-- /.row -->
      
      </div><!-- /.content-wrapper -->
      </section><!-- /.content -->
	
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
            navigator.msSaveBlob(blob, 'Pump-sales-'+trandate+'.xls');
        }
    } else {
		//window.open( data_type + ',' + encodeURIComponent(tab_text));
        $('#test').attr('href', data_type + ', ' + encodeURIComponent(tab_text));
        $('#test').attr('download', 'Pump-sales-'+trandate+'.xls');
    }


 var ua = window.navigator.userAgent;
    
    var edge = ua.indexOf("Edge ");

if (edge || !!navigator.userAgent.match(/Trident.*rv\:11\./)) {
        if (window.navigator.msSaveBlob) {
            var blob = new Blob([tab_text], {
                type: "application/csv;charset=utf-8;"
            });
            navigator.msSaveBlob(blob, 'Pump-sales-'+trandate+'.xls');
        }
    } else {
		//window.open( data_type + ',' + encodeURIComponent(tab_text));
        $('#test').attr('href', data_type + ', ' + encodeURIComponent(tab_text));
        $('#test').attr('download', 'Pump-sales-'+trandate+'.xls');
    }

}

 </script>
		<?php  include '../include/footer.php';?>	