// JavaScript Document
$("document").ready(function(){
	
	
$("#btnlogin").click(function(){

if( $.trim($('#txtemail').val()) == ""){
customError("Email is Required");
return false;}

if(  $.trim($('#txtpassword').val()) == ""){
customError("Password is Required");
return false;}


var user =  $.trim($('#txtemail').val());
var pass =  $.trim($('#txtpassword').val());
 

$("#animateDiv").show();
var data='user='+user+'&pass='+pass;


$.ajax({
type:"POST",
url:"loginproc.php",
data:data,

success:function(html) {
	
	
if(html != "doctor" && html != "hospital"){
	//$("#error").html(html);
	$("#animateDiv").hide();
	alert(html);

return false; 
}
else{
	//window.location = "personal/home.php";
	//alert("perfect");
	//alert(html);
	$("#animateDiv").hide();
	alert("Access Granted");

		window.location = "personal/"+html+"/index.php";

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


});

function customError(myerror){
	alert('Error : ' + myerror);
	//sweetAlert("Oops...", "Fullname is required!", "error");
}
