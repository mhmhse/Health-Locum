// JavaScript Document
$("document").ready(function(){
	
	
$("#btnlogin").click(function(){

if( $.trim($('#txtemail').val()) == ""){
customError("Email is Required");
$('#txtemail').focus();
return false;}


var email =  $.trim($('#txtemail').val());



	$.post("configure-assignment-proc.php",
    			{	
			    	email: email
			    },
  				 function(data, status){
			        //alert("Data: " + data + "\nStatus: " + status);
			        console.log(data);

			        if(data != "Success" && data != "Selected Doctor Previously assigned to this request"){
			        	 customError("Please try again ");
			        	 return false;
			        }else{

			        	 if(data == "Selected Doctor Previously assigned to this request"){
			        	 alert(data);
			        	}else{

			        	alert("Selected Doctor Successfully Assigned");
			        	window.location = "index.php";
			        		}


			        }
  				  });


 
 event.preventDefault();
});


});

function customError(myerror){
	alert('Error : ' + myerror);
	//sweetAlert("Oops...", "Fullname is required!", "error");
}
