$(document).ready(function(){

 var formdata = false;
        if (window.FormData) {
            formdata = new FormData();
        }

    
	function validateEmail($email) {
  var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
  if( !emailReg.test( $email ) ) {
    return false;
  } else {
    return true;
  }
}


  //disale button before page load
  $("#btn_register_admin").attr("disabled", "disabled");
  



// toggle enable/disable button while term is checked
$("#terms").click(function() {
    var checked_status = this.checked;
    if (checked_status == true) {
       $("#btn_register_admin").removeAttr("disabled");
    } else {
       $("#btn_register_admin").attr("disabled", "disabled");
    }
});




$("#btn_register_admin").click(function(){


			//name
			if($.trim($("#admin_name").val()) == ''){
			customError("Name is required");
			$("#admin_name").focus();
			return false;
			}


			//address
			if($.trim($("#admin_email").val()) == ''){
			customError("Email address is required");
			$("#admin_email").focus();
			return false;
			}



			var mail = $.trim($("#admin_email").val());

			if(!validateEmail(mail)) { 
				//alert("Supply a Valid E - Mail Address");
				customError("Supply a Valid E - Mail Address!");
				$("#admin_email").focus();
				return false;
				}


			if($.trim($("#admin_password").val()) == ''){
			customError("Password is required!");
			$("#admin_password").focus();
			return false;
			}


		var ans = $.trim($('#admin_password').val());

			
		if(ans.length < 6){
		customError("Password must be at least 6 Characters long");
		$("#admin_password").focus();
 		return false;
		}



var admin_name = $.trim($("#admin_name").val());
var admin_email = $.trim($("#admin_email").val());
var admin_password = $.trim($("#admin_password").val());


			
formdata.append("dname", admin_name.toString());
formdata.append("email", admin_email.toString());
formdata.append("password", admin_password.toString());


$.ajax({
		type: "POST",
		url:"register-proc.php",
        data: formdata,
        processData: false,
        contentType: false,
        success: function (html) {

 if(html == "Success"){
	
	alert('Account Successfully Created');
	window.location = "index.php";
	return false;
	
	}
else{

	alert(html);
	return false;

	}

},error: function(){
	
	alert('Cannot Continue This Operation');
	return false;
	
	}


});



event.preventDefault();


});


function customError(myerror){
	alert('Error : ' + myerror);
	//sweetAlert("Oops...", "Fullname is required!", "error");
}



});







