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
  $("#btn_register_hospital").attr("disabled", "disabled");
  



// toggle enable/disable button while term is checked
$("#terms").click(function() {
    var checked_status = this.checked;
    if (checked_status == true) {
       $("#btn_register_hospital").removeAttr("disabled");
    } else {
       $("#btn_register_hospital").attr("disabled", "disabled");
    }
});




$("#btn_register_hospital").click(function(){


			//name
			if($.trim($("#txthostpitalname").val()) == ''){
			customError("Hospital name is required");
			$("#txthostpitalname").focus();
			return false;
			}


			//address
			if($.trim($("#txtaddress").val()) == ''){
			customError("Hospital address is required");
			$("#txtaddress").focus();
			return false;
			}


			//hefamaa
			if($.trim($("#txthefamaa").val()) == ''){
			customError("hefamaa number is required");
			$("#txthefamaa").focus();
			return false;
			}


			


			// //establishment
			// if($.trim($("#selyear_of_establishment").val()) == ''){
			// customError("Year of establishment is required");
			// $("#selyear_of_establishment").focus();
			// return false;
			// }

			
			//email
			if($.trim($("#txtemail").val()) == ''){
			customError("Email address is required");
			$("#txtemail").focus();
			return false;
			}

			var mail = $.trim($("#txtemail").val());

			if(!validateEmail(mail)) { 
				//alert("Supply a Valid E - Mail Address");
				customError("Supply a Valid E - Mail Address!");
				$("#txtemail").focus();
				return false;
				}


			//Website
			/*
			if($.trim($("#txtwebsite").val()) == ''){
			customError("Website type is required");
			$("#txtwebsite").focus();
			return false;
			}
			*/
			
				//telephone
			if($.trim($("#txttelephone").val()) == ''){
			customError("telephone number is required");
			$("#txttelephone").focus();
			return false;
			}


			if(isNaN($.trim($('#txttelephone').val()))){
			 customError("Phone number must be in numeric format");
			 $("#txttelephone").focus();
			 return false;
			}



			if($.trim($("#txttelephone2").val()) == ''){
			customError("Secondary phone number is required");
			$("#txttelephone2").focus();
			return false;
			}


			if(isNaN($.trim($('#txttelephone2').val()))){
			 customError("Secondary Phone number must be in numeric format");
			 $("#txttelephone2").focus();
			 return false;
			}




			//state
			if($.trim($("#selstate").val()) == ''){
			customError("state is required");
			$("#selstate").focus();
			return false;
			}


			//contact name
			if($.trim($("#txt_contact_name").val()) == ''){
			customError("Contact name is required");
			$("#txt_contact_name").focus();
			return false;
			}

			//contact phone
			if($.trim($("#txt_contact_phone").val()) == ''){
			customError("Contact Phone number is required");
			$("#txt_contact_phone").focus();
			return false;
			}

			//contact position
			if($.trim($("#contact_position").val()) == ''){
			customError("Position is required");
			$("#contact_position").focus();
			return false;
			}



			//logo
			if($.trim($("#file_upload_logo").val()) == ''){
			//customError("Hospital logo is required");
			//$("#file_upload_logo").focus();
			//return false;
			console.log("no passport");
			}else{

			var pic = $('#file_upload_logo').get(0).files[0];		

			
 			if (pic.type != 'image/jpeg') { 
				customError('Error : Hospital logo must be in Jpeg format');
					return false;
				}

	
					if ((pic.size /1024) > 2000){
					 customError('Error : Hospital logo must not be Greater than 2 MB');
					return false;
					}

				}



			if($.trim($("#txtpassword").val()) == ''){
			customError("Password is required!");
			$("#txtpassword").focus();
			return false;
			}


		var ans = $.trim($('#txtpassword').val());

			
		if(ans.length < 6){
		customError("Password must be at least 6 Characters long");
		$("#txtpassword").focus();
 		return false;
		}



			if($.trim($("#txtconfpassword").val()) != $.trim($("#txtpassword").val())){
			customError("Password does not match");
			$("#txtconfpassword").focus();
			return false;
			}


var hospital_name = $.trim($("#txthostpitalname").val());
var address = $.trim($("#txtaddress").val());
var hefamaa = $.trim($("#txthefamaa").val());
var email = $.trim($("#txtemail").val());
var website = $.trim($("#txtwebsite").val());
var telephone = $.trim($("#txttelephone").val());
var telephone2 = $.trim($("#txttelephone2").val());
var state =  $.trim($("#selstate").val());


var contact_name = $.trim($("#txt_contact_name").val());
var contact_phone = $.trim($("#txt_contact_phone").val());
var contact_position =  $.trim($("#contact_position").val());

//var passcode  = $.trim($("#selstateoforigin").val());
var passcode  = $.trim($("#txtpassword").val());

var password  = $.trim($("#txtpassword").val());

$("#animateDiv").show();


//alert(passcode);
			
formdata.append("hospital_name", hospital_name.toString());
formdata.append("address", address.toString());
formdata.append("hefamaa", hefamaa.toString());
formdata.append("email", email.toString());
formdata.append("website", website.toString());
formdata.append("telephone", telephone.toString());
formdata.append("telephone2", telephone2.toString());
formdata.append("state", state.toString());

formdata.append("contact_name", contact_name.toString());
formdata.append("contact_phone", contact_phone.toString());
formdata.append("contact_position", contact_position.toString());

formdata.append("passcode", passcode.toString());

formdata.append("password", password.toString());


formdata.append("pic", pic);



$.ajax({
		type: "POST",
		url:"hospital-signup-proc.php",
        data: formdata,
        processData: false,
        contentType: false,
        success: function (html) {

 if(html == "Success"){
		$("#animateDiv").hide();
		alert('Account Successfully Created');
	//window.location = "login.php";
	window.location = "registration-success.php?regid=1";
	return false;
	
	}
else{

	$("#animateDiv").hide();
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







