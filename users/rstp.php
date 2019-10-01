<?php  include '../include/dbconn.php';?>
<?php  include '../include/functions.php';?>
<?php  include '../include/session.php';

if (!logged_in()) {
			redirect_to("../index.php");
		}

?>
<script>
var bod = document.getElementById("bdy");
if (!bod){
	window.location.href="index.php";
	
}

</script>


<?php

$c =$_GET['erp_id'];

$h = mysql_query("select * FROM usamacc where macuser_id='{$c}' ") or die(mysql_error()); 
			 
			$tr = mysql_fetch_array($h);
			

?>

<form class="form-signin" method="POST" action="index.php?erp_id=<?php echo $_GET['erp_id']; ?>">
      
       
		<h2  class="form-signin-heading"><?php echo $tr['mac_name']; ?></h2>
        <small>Password Has Been Changed</small><hr/>
        <div id="error">
        <!-- error will be showen here ! -->
        </div>
<?php function generatePIN($digits = 7){
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
$pin = 'E'.''.generatePIN().''.'P';

?> 
 <h2>New Password</h2>
<h2><?php echo $pin;  ?></h2>
 
        
        	<?php 

 $up= mysql_query("UPDATE usamacc SET mac_passhash= md5('".$pin."') WHERE macuser_id='{$c}' ") or die(mysql_error()); 
			 
			

			?>
			