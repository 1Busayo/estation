<?php

//$h = mysql_query("Select  IFNULL(acc_tran_name,'Total') as acc_tran_name , sum(acc_tran_debit) , sum(acc_tran_credit) FROM acc_tran GROUP BY acc_tran_name with ROLLUP") or die(mysql_error()); 
			 
$h = mysql_query("Select   acc_tran_name ,  sum(acc_tran_credit) FROM acc_tran WHERE acc_tran_ledger LIKE '%REVENUE%'   GROUP BY acc_tran_name  ") or die(mysql_error()); 
	
			 $su=0;
		while($tr = mysql_fetch_array($h))
		{
		?>
		      
           

	
   <?php $tr['sum(acc_tran_credit)'];   $rev=$su+=$tr['sum(acc_tran_credit)'];$GLOBALS['rev'];   } ?> 



<?php

			 
$h = mysql_query("Select    acc_tran_name ,  sum(acc_tran_debit) FROM acc_tran WHERE acc_tran_ledger LIKE '%EXPENSES%'   GROUP BY acc_tran_name ") or die(mysql_error()); 
			 
			
		$sum=0;	 
		while($tr = mysql_fetch_array($h))
		{
		?>




      <?php $tr['sum(acc_tran_debit)']; $exp=$sum+=$tr['sum(acc_tran_debit)'];$GLOBALS['exp'];   }  ?> 

		
        <!--<b>Net Income</b>-->

		<?php $net= $rev-$exp; /* echo $net; */ ?>