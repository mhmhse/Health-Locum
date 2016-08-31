// JavaScript Document
$("document").ready(function(){
	
	
$("#btnlogin").click(function(){

if( $.trim($('#txtemail').val()) == ""){
customError("Email is Required");
$('#txtemail').focus();
return false;}

if(  $.trim($('#txtpassword').val()) == ""){
customError("Password is Required");
$('#txtpassword').focus();
return false;}


var user =  $.trim($('#txtemail').val());
var pass =  $.trim($('#txtpassword').val());
 


var data='user='+user+'&pass='+pass;


$.ajax({
type:"POST",
url:"loginproc.php",
data:data,

success:function(html) {
	
	
if(html == "Success"){
	//$("#error").html(html);
	alert('Access Granted');
	window.location = "personal/dashboard/index.php";
return false; 
}
else{
	//window.location = "personal/home.php";
	//alert("perfect");
	alert(html);

	}
}, error: function(res){
	  var text = res.responseText;
	  alert(text);
		alert('Error Type Occoured  : Cannot Complete this Operation');
	
	
}

});
 
 event.preventDefault();
});


});

function customError(myerror){
	alert('Error : ' + myerror);
	//sweetAlert("Oops...", "Fullname is required!", "error");
}
