$(document).ready(function(e){

var doctor_id = $('#doctor_id').val();

$('#btn_paid').click(function(){

if ($('#sel_paid').val() == "") {
alert('Select a value to continue');
return false;
};

var request =  'paid';
var value =  $.trim($('#sel_paid').val());
var data='request='+request+'&value='+value+'&doctor_id='+doctor_id;

$("#animateDiv").show();

$.ajax({
type:"POST",
url:"update_doctor_proc.php",
data:data,

success:function(html) {
window.location.reload(true);
}, error: function(res){

		$("#animateDiv").hide();

	  var text = res.responseText;
	  alert(text);
		alert('Error Type Occoured  : Cannot Complete this Operation');	
}

});
 




});


$('#btn_credentialed').click(function(){

	
	if ($('#sel_credentialed').val() == "") {
alert('Select a value to continue');
return false;
};

var request =  'credentialed';
var value =  $.trim($('#sel_credentialed').val());
var data='request='+request+'&value='+value+'&doctor_id='+doctor_id;

$("#animateDiv").show();
$.ajax({
type:"POST",
url:"update_doctor_proc.php",
data:data,

success:function(html) {
window.location.reload(true);
}, error: function(res){

	$("#animateDiv").hide();
	  var text = res.responseText;
	  alert(text);
		alert('Error Type Occoured  : Cannot Complete this Operation');	
}


});
});


$('#btn_agreed').click(function(){

	//alert('agreed')
if ($('#sel_agreed').val() == "") {
alert('Select a value to continue');
return false;
};

var request =  'agreement';
var value =  $.trim($('#sel_agreed').val());
var data='request='+request+'&value='+value+'&doctor_id='+doctor_id;

$("#animateDiv").show();
$.ajax({
type:"POST",
url:"update_doctor_proc.php",
data:data,

success:function(html) {
window.location.reload(true);
}, error: function(res){

		$("#animateDiv").hide();
	  var text = res.responseText;
	  alert(text);
		alert('Error Type Occoured  : Cannot Complete this Operation');	
}


});

});

});

