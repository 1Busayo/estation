<?php
/*if(hour == 0)
	{
		ampm = " AM";
		hour = 12;
	} 
	else if(hour <= 11)
	{
		ampm = " AM";
	}
	else if(hour == 12)
	{
		ampm = " PM";
	}
	else if(hour >= 13)
	{
		ampm = " PM";
		hour -= 12;
	}

	if(min <= 9)
	{
		min = "0" + min;
	}

	if(sec <= 9)
	{
		sec = "0" + sec;
	}


*/

$i=date("h");$a=$i+1;  $man2 = ( date("$a:i:s "));
 
 echo $man2;

?>