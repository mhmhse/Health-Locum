$(document).ready(function(){


 // //update status
 $('#btn_update').click(function(){
	
	if ($('#sel_status').val() == "") {
 alert('Select a status to continue');
 $('#sel_status').focus();
 return false;
 }

 var assignment_id = $('#assignment_id').val();
 var sel_status  = $('#sel_status').val();
 var request_type = 'update status';

 var data='assignment_id='+assignment_id+'&sel_status='+sel_status+'&request_type='+request_type;

$("#animateDiv").show();

 $.ajax({
 type:"POST",
 url:"update-single-assignment.php",
 data:data,

 success:function(html) {

 	if(html == "Success"){

 		$("#animateDiv").hide();
 		alert('status Successfully Updated');
 		window.location.reload(true);
 	}

 }, error: function(res){
 	$("#animateDiv").hide();
 	  var text = res.responseText;
 	  alert(text);
 		alert('Error Type Occoured  : Cannot Complete this Operation');	
 }
});


 	});

});

