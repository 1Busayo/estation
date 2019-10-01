<?php
//require("../dbconn.php"); 
?>

<script src="js/jquery/jquery.min.js"> </script>
<script type="text/javascript">
function state(){
 $('#statedd1').empty();
 $('#statedd1').append("<option>Loading.......</option>");
 $('#districtdd1').append("<option value='0'>----Select Price-----</option>");
 $.ajax({
      type:"POST",
	  url:"pump_dropdown.php",
	  contentType:"application/json; charset=utf-8",
      dataType:"json",  
      success: function(data){
      $('#statedd1').empty();
      $('#statedd1').append("<option value='0'>----Select Pump-----</option>");	  
	  $.each(data,function(i,item){
	  $('#statedd1').append('<option value="'+ data[i].pname +'">'+ data[i].pname+'</option>');
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
	  url:"price_dropdown.php?sid="+sid,
	  contentType:"application/json; charset=utf-8",
      dataType:"json",  
      success: function(data){
      $('#districtdd1').empty();
   //$('#districtdd1').append("<option value='0'>----Select Branch-----</option>");	  
	  $.each(data,function(i,item){
	  $('#districtdd1').append('<option value="'+ data[i].p_price +'selected">'+ data[i].p_price+'</option>');
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