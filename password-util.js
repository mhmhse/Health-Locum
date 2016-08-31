// JavaScript Document
$("document").ready(function(){
	
//btn reset password	
$("#btn_reset_password").click(function(){

if( $.trim($('#txtemail').val()) == ""){
customError("Email is Required");
$('#txtemail').focus();
return false;
}

if(  $.trim($('#registration_type').val()) == ""){
customError("Registration type is Required");
$('#registration_type').focus();
return false;}

	$("#animateDiv").show();

var user =  $.trim($('#txtemail').val());
var regtype =  $.trim($('#registration_type').val());
 
var data='user='+user+'&regtype='+regtype+'&action=forgot_password';

$.ajax({
type:"POST",
url:"password-util-proc.php",
data:data,

success:function(html) {
	
if(html != "Success"){

$("#animateDiv").hide();
alert(html);
return false; 
}
else{
	
	$("#animateDiv").hide();
	alert("Forgot Password link sent to your mail");
	window.location.reload(true);

	}
}, error: function(res){

			$("#animateDiv").hide();

	  var text = res.responseText;
	  alert(text);
		alert('Error Type Occoured  : Cannot Complete this Operation');
	
	
}

});
 
 event.preventDefault();
});


//btn change password
$("#btn_change_password").click(function(){

if( $.trim($('#txt_password').val()) == ""){
customError("Password is Required");
$('#txt_password').focus();
return false;
}

if($.trim($('#txt_conf_password').val()) != $.trim($('#txt_password').val()) ){
customError("Password does not match");
$('#txt_conf_password').focus();
return false;}


if( $.trim($('#hid_email').val()) == ""){
customError("Please try again");
return false;
}


if( $.trim($('#hid_activation').val()) == ""){
customError("Please try again");
return false;
}


if( $.trim($('#hid_user_type').val()) == ""){
customError("Please try again");
return false;
}



	$("#animateDiv").show();

var password =  $.trim($('#txt_password').val());
var email =  $.trim($('#hid_email').val());
var activation_key =  $.trim($('#hid_activation').val());
var user_type =  $.trim($('#hid_user_type').val());

 
var data='password='+password+'&email='+email+'&action=change_password'+'&activation_key='+activation_key+'&user_type='+user_type;

$.ajax({
type:"POST",
url:"password-util-proc.php",
data:data,

success:function(html) {
	
if(html != "Success"){

$("#animateDiv").hide();
alert(html);
return false; 
}
else{
	
		$("#animateDiv").hide();	
	alert("Password Successfuly Changed");
	window.location = "login.php";

	}
}, error: function(res){

			$("#animateDiv").hide();
			
	  var text = res.responseText;
	  alert(text);
		alert('Error Type Occoured  : Cannot Complete this Operation');
	
	
}

});
 
 event.preventDefault();
});
// end change password




});

function customError(myerror){
	alert('Error : ' + myerror);
	//sweetAlert("Oops...", "Fullname is required!", "error");
}
