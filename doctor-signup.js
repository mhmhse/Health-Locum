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
  $("#btn_register_doctor").attr("disabled", "disabled");
  
  $('#txtdateofbirth').datepicker({
  		viewMode: 'years',
  	  format: 'yyyy-mm-dd',
  	   startDate: '-3d'
  });


// toggle enable/disable button while term is checked
$("#terms").click(function() {
    var checked_status = this.checked;
    if (checked_status == true) {
       $("#btn_register_doctor").removeAttr("disabled");
    } else {
       $("#btn_register_doctor").attr("disabled", "disabled");
    }
});




$("#btn_register_doctor").click(function(){





			//Title
			if($.trim($("#seltitle").val()) == ''){
			customError("Title is required");
			$("#seltitle").focus();
			return false;
			}


			//surname
			if($.trim($("#txtsurname").val()) == ''){
			customError("surname is required");
			$("#txtsurname").focus();
			return false;
			}


			//othername
			if($.trim($("#txtotherame").val()) == ''){
			customError("other names is required");
			$("#txtotherame").focus();
			return false;
			}


			//gender
			if($.trim($("#selgender").val()) == ''){
			customError("Gender is required");
			$("#selgender").focus();
			return false;
			}

			//date of birth
			if($.trim($("#txtdateofbirth").val()) == ''){
			customError("Date of Birth is required");
			$("#txtdateofbirth").focus();
			return false;
			}

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


			//State of residence
			if($.trim($("#selstateofresidence").val()) == ''){
			customError("State of residence is required");
			$("#selstateofresidence").focus();
			return false;
			}


			//address
			if($.trim($("#txtaddress").val()) == ''){
			customError("Address is required");
			$("#txtaddress").focus();
			return false;
			}

			//nationality
			if($.trim($("#selnationality").val()) == ''){
			customError("nationality is required");
			$("#selnationality").focus();
			return false;
			}


			//state of origin
			if($.trim($("#selstateoforigin").val()) == ''){
			customError("state of origin is required");
			$("#selstateoforigin").focus();
			return false;
			}


			//Educational Qualification
			if($.trim($("#educational_qualification").val()) == ''){
			customError("Educational qualification is required");
			$("#educational_qualification").focus();
			return false;
			}


			//Marital Status
			if($.trim($("#marital_status").val()) == ''){
			customError("Marital status is required");
			$("#marital_status").focus();
			return false;
			}



			//availability
			if($.trim($("#sel_availability_type").val()) == ''){
			customError("Period of availability is required");
			$("#sel_availability_type").focus();
			return false;
			}
				


			//Contact type
			if($.trim($("#selcontact_type").val()) == ''){
			customError("Contact type is required");
			$("#selcontact_type").focus();
			return false;
			}


			//mdcn_no
			if($.trim($("#mdcn_no").val()) == ''){
			customError("MDCN Registration number is required");
			$("#mdcn_no").focus();
			return false;
			}


			//Year of experience
			if($.trim($("#year_of_experience").val()) == ''){
			customError("Year of experience is required");
			$("#year_of_experience").focus();
			return false;
			}

			

			//passport
			if($.trim($("#file_upload_passport").val()) == ''){
			//customError("Passport is required");
			//$("#file_upload_passport").focus();
			console.log("no passport");
			//return false;
			}
			else{


			var pic = $('#file_upload_passport').get(0).files[0];		

			
 			if (pic.type != 'image/jpeg') { 
				customError('Error : Passport photograph must be in Jpeg format');
					return false;
				}

	
					if ((pic.size /1024) > 2000){
					 customError('Error : Passport must not be Greater than 2 MB');
					return false;
					}
				}


			//cv
			if($.trim($("#file_upload_cv").val()) == ''){
				console.log("no cv");
			//customError("Curriculum vitae is required");
			//$("#file_upload_cv").focus();
			//return false;
			}else{


			var cv = $('#file_upload_cv').get(0).files[0];		

			//alert('File format is : ' + cv.type);
			
 			if (cv.type != 'application/vnd.openxmlformats-officedocument.wordprocessingml.document') { 
				customError('Error : Curriculum vitae must be in Microsoft word document format');
					return false;
				}

				// if ((cv.size /1024) > 2000){
				//  customError('Error : Hospital logo must not be Greater than 2 MB');
				// return false;
				// }

				}



			if($.trim($("#txtpassword").val()) == ''){
			//alert('Address is required');
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



			$("#animateDiv").show();



var surname = $.trim($("#txtsurname").val());
var othernames = $.trim($("#txtotherame").val());
var gender = $.trim($("#selgender").val());
var date_of_birth = $.trim($("#txtdateofbirth").val());
var telephone = $.trim($("#txttelephone").val());
var email = $.trim($("#txtemail").val());

var availability_type = $.trim($("#sel_availability_type").val());




var selstateofresidence = $.trim($("#selstateofresidence").val());
var contact_type =  $.trim($("#selcontact_type").val());

var specialist_type =  $.trim($("#selSpecialist_type").val());


var address = $.trim($("#txtaddress").val());
var mdcn_no = $.trim($("#mdcn_no").val());

var nationality = $.trim($("#selnationality").val());
var state_of_origin  = $.trim($("#selstateoforigin").val());
var title  = $.trim($("#seltitle").val());
var educational_qualification  = $.trim($("#educational_qualification").val());
var year_of_experience  = $.trim($("#year_of_experience").val());
var marital_status  = $.trim($("#marital_status").val());
//var passport  = $.trim($("#file_upload_passport").val());
//var cv  = $.trim($("#file_upload_cv").val());
var passcode  = $.trim($("#txtpassword").val());



		
formdata.append("surname", surname.toString());
formdata.append("othernames", othernames.toString());
formdata.append("gender", gender.toString());
formdata.append("date_of_birth", date_of_birth.toString());
formdata.append("telephone", telephone.toString());
formdata.append("email", email.toString());


formdata.append("availability_type", availability_type.toString());


formdata.append("selstateofresidence", selstateofresidence.toString());
formdata.append("contact_type", contact_type.toString());

formdata.append("specialist_type", specialist_type.toString());

formdata.append("address", address.toString());
formdata.append("mdcn_no", mdcn_no.toString());
formdata.append("nationality", nationality.toString());
formdata.append("state_of_origin", state_of_origin.toString());
formdata.append("title", title.toString());
formdata.append("educational_qualification", educational_qualification.toString());
formdata.append("year_of_experience", year_of_experience.toString());
formdata.append("marital_status", marital_status.toString());
formdata.append("passcode", passcode.toString());
formdata.append("pic", pic);
formdata.append("cv", cv);



//alert('success 1');

$.ajax({
		type: "POST",
		url:"doctors-signup-proc.php",
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







