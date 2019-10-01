<?php?>
<script type="text/javascript">

weekdayname = new Array("Sunday","Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday");
monthname = new Array("January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December");

function Run()
{
	d = new Date();
	day = d.getDay();
	month = d.getMonth();
	date = d.getDate();
	year = d.getYear();
	hour = d.getHours();
	min = d.getMinutes();
	sec = d.getSeconds();

	if(year < 1000)
		year = year + 1900;

	if(hour == 0)
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

	document.getElementById("myclock").innerHTML=hour + ":" + min + ":" + sec + ampm;
	//document.getElementById("myclock").style.left = 32 + Math.floor(Math.random() * Math.max(0, window.innerWidth - 480 - 32 * 2));
	document.getElementById("myclock").style.top = 32 + Math.floor(Math.random() * Math.max(0, window.innerHeight - 48 - 32 * 2));

	//setTimeout("Run()", 1000);
}

window.onload=Run;

</script>

<?php echo" <div id="myclock"></div>"
<div id="myclock" style="position:absolute;top:1280;left:960; color:#000000;">.</div>
