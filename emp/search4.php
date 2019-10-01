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
                <li  ><a href="../index.html"><i class="fa fa-circle-o"></i> Dashboard v1</a></li>
                <li><a href="../index2.html"><i class="fa fa-circle-o"></i> Dashboard v2</a></li>
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
                <li  ><a href="../sales/view_sal.php"><i class="fa fa-circle-o"></i> View Sales</a></li>
              </ul>
            </li>
 
      <li class=" treeview">
              <a href="#">
                <i class="fa fa-table"></i> <span>Invoice</span> <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="crea.php"><i class="fa fa-circle-o"></i> Create Invoice</a></li>
                <li><a href="crea2.php"><i class="fa fa-circle-o"></i> View Invoice</a></li>
              </ul>
            </li>
  <li class="treeview">
              <a href="#">
                <i class="fa fa-male"></i> <span>Employee</span> <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="index.php"><i class="fa fa-circle-o"></i> Create Invoice</a></li>
                <li><a href="addu.php"><i class="fa fa-circle-o"></i> View Invoice</a></li>
              </ul>
            </li>

             <li class="treeview">
              <a href="#">
                <i class="fa fa-list-alt"></i> <span>Debtors</span> <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="../debt/index.php"><i class="fa fa-circle-o"></i> Create Invoice</a></li>
                <li><a href="../debt/addu.php"><i class="fa fa-circle-o"></i> View Invoice</a></li>
              </ul>
            </li>
      <li>
              <a href="#">
                <i class="fa fa-university"></i> <span>Account</span> <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li ><a href="../acaunt/grp_acc1.php"><i class="fa fa-circle-o"></i> Create Ledger</a></li>
                <li><a href="../acaunt/sheet_acc1.php"><i class="fa fa-circle-o"></i> Create Account</a></li>
                <li><a href="../acaunt/sheet_pre1.php"><i class="fa fa-circle-o"></i> Prepare Account</a></li>
                <li><a href="../acaunt/view_acc1.php"><i class="fa fa-circle-o"></i> View Account</a></li>
              </ul>
            </li>

<li class="active treeview">
              <a href="#">
                <i class="fa fa-file-text"></i> <span>Report</span> <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="grp_acc1.php"><i class="fa fa-circle-o"></i> Create Ledger</a></li>
                <li><a href="sheet_acc1.php"><i class="fa fa-circle-o"></i> Create Account</a></li>
                <li ><a href="sheet_pre1.php"><i class="fa fa-circle-o"></i> Prepare Account</a></li>
              </ul>
            </li>

            <li class="treeview">

              <a href="#">
                <i class="fa fa-gear"></i> <span>Settings</span> <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="/grp_acc1.php"><i class="fa fa-circle-o"></i> Create Ledger</a></li>
                <li><a href="../acaunt/sheet_acc1.php"><i class="fa fa-circle-o"></i> Create Account</a></li>
                <li ><a href="../acaunt/sheet_pre1.php"><i class="fa fa-circle-o"></i> Prepare Account</a></li>
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
		     <small></small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="sheet_pre1.php">Select Account</a></li>
            <li>View Account</li>
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
               




	<table id="example1" class="table table-bordered table-hover">
	
<thead>
<tr>
            
        <th width="10%">Employee Name</th>
        <th width="10%">PS/Code</th>
    <th width="10%">Month & Year</th>
    
    <th width="10%">View</th>
      
        
   
      
      
      </tr> 
</thead>
<tbody>

<?php


$a= $_GET['a'];
$b= $_GET['b'];

$dat1 = $a;
$dat2 = $b;




//$id =$_GET['erp_id'];
       $h = mysql_query(" select e_id, e_name,sp_code,sp_my from pay_spe where sp_my='$dat1  $dat2' group by sp_code ") or die(mysql_error()); 
       
      while($tr = mysql_fetch_array($h))
      {
    ?>
    
    
        <tr class="record">
          
            <td><br><?php echo $tr['e_name']; ?></td>
             <td><br><?php echo $tr['sp_code']; ?></td>           
        <td><br><?php echo $tr['sp_my']; ?></td>           
        <td><br>
		&nbsp;&nbsp;&nbsp;&nbsp; <a  rel="facebox" href="viewps.php?erp_id=<?php echo $tr['e_id']; ?>&pi=<?php echo $tr['sp_code'];  ?>" class=" btn-sm">
          <span class="glyphicon glyphicon-file"></span> 
        </a> </td> 
    
      </tr>
      
      



		  <?php

    }
    
    
    ?>
  
	</tbody>	
    </table>

		</body>
    </html>
	

<br><br>


                </div><!-- /.box-body -->
              </div><!-- /.box -->

            </div><!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
	

	
	
	
		<?php  include '../include/footer.php';?>	