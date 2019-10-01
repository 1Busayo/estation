

<script src="../js/jquery/jquery.min.js"> </script>
<script type="text/javascript">
function state(){
 $('#statedd1').empty();
 $('#statedd1').append("<option>Loading.......</option>");
 $('#districtdd1').append("<option value='0'>----Select Price-----</option>");
 $.ajax({
      type:"POST",
	  url:"../include/location/prod_drop.php",
	  contentType:"application/json; charset=utf-8",
      dataType:"json",  
      success: function(data){
      $('#statedd3').empty();
      $('#statedd3').append("<option value='0'>----Select Product-----</option>");	  
	  $.each(data,function(i,item){
	  $('#statedd3').append('<option value="'+ data[i].p_name +'">'+ data[i].p_name+' </option>');
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
	  url:"../include/location/prod_dropdown.php?sid="+sid,
	  contentType:"application/json; charset=utf-8",
      dataType:"json",  
      success: function(data){
      $('#districtdd4').empty();
   //$('#districtdd4').append("<option value='0'>----Select Branch-----</option>");	  
	  $.each(data,function(i,item){
	// $('#districtdd4').append('<option value="'+ data[i].p_price +'selected">'+ data[i].p_price+'</option>');
	   $('#districtdd4').val(data[i].p_price);
	   $('#districtdd2').val(data[i].p_product);
	 
	   });
	  },
     complete: function(){
	 }
   });
}
$(document).ready(function(){
state();
$("#statedd3").change(function(){
 var stateid = $("#statedd3").val();
 District(stateid);
});
});
</script>


