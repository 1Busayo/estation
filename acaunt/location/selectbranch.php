<?php
include "configlocation.php";
?>
<html>
<head>
<title> Branch Selection</title>
<script src="js/jquery/jquery.min.js"> </script>
<script type="text/javascript">
function state(){
 $('#statedd1').empty();
 $('#statedd1').append("<option>Loading.......</option>");
 $('#districtdd1').append("<option value='0'>----Select Branch-----</option>");
 $.ajax({
      type:"POST",
	  url:"state_dropdown.php",
	  contentType:"application/json; charset=utf-8",
      dataType:"json",  
      success: function(data){
      $('#statedd1').empty();
      $('#statedd1').append("<option value='0'>----Select State-----</option>");	  
	  $.each(data,function(i,item){
	  $('#statedd1').append('<option value="'+ data[i].id +'">'+ data[i].name+'</option>');
	   });
	  },
	  complete:function(){}
    });
}

function District(sid){
$('#districtdd1').empty();
$('#districtdd1').append("<option>Loading.......</option>");
   $.ajax({
   type:"POST",
	  url:"districts_dropdown.php?sid="+sid,
	  contentType:"application/json; charset=utf-8",
      dataType:"json",  
      success: function(data){
      $('#districtdd1').empty();
     // $('#districtdd1').append("<option value='0'>----Select Branch-----</option>");	  
	  $.each(data,function(i,item){
	  $('#districtdd1').append('<option value="'+ data[i].id +'">'+ data[i].name+'</option>');
	   });
	  },
     complete: function(){
	 }
   });
}
$(document).ready(function(){
state();
$("#statedd1").change(function(){
 var stateid = $("#statedd1").val();
 District(stateid);
});
});
</script>
</head>
<body>
<span>States</span>
<select id="statedd1"></select>
<span>Branch</span>
<select name="sid" id="districtdd1"></select>
</body>
</html>