$("document").ready(function(){


$('#txt_doctor_dob').datepicker({
  		viewMode: 'years',
  	  format: 'yyyy-mm-dd',
  	   startDate: '-3d'
  });



 var formdata = false;
        if (window.FormData) {
            formdata = new FormData();
        }

// update hospital profile
$("#btn_update_hospital_profile").click(function(){


if( $.trim($('#txt_surname').val()) == ""){
customError("Surname is required");
$("#txt_surname").focus();
return false;
}

if( $.trim($('#txt_other_name').val()) == ""){
customError("Othername(s) is Required");
$("#txt_other_name").focus();
return false;
}

if( $.trim($('#txt_doctor_address').val()) == ""){
customError("Address is Required");
$("#txt_doctor_address").focus();
return false;
}


if( $.trim($('#txt_mdcn_number').val()) == ""){
customError("MDCN Number is Required");
$("#txt_mdcn_number").focus();
return false;
}


if( $.trim($('#txt_doctor_dob').val()) == ""){
 customError("Date of Birth is Required");
 $("#txt_doctor_dob").focus();
return false;
 }


if( $.trim($('#doctor_specialization').val()) == ""){
customError("Specialization is Required");
$("#doctor_specialization").focus();
return false;
}



if( $.trim($('#txt_state_of_origin').val()) == ""){
customError("State of Origin is Required");
$("#txt_state_of_origin").focus();
return false;
}


if( $.trim($('#txt_phone').val()) == ""){
customError("Phone number is Required");
$("#txt_phone").focus();
return false;
}


if( $.trim($('#txt_email').val()) == ""){
customError("Email Address is Required");
$("#txt_email").focus();
return false;
}


if( $.trim($('#sel_marital_status').val()) == ""){
customError("Marital Status is Required");
$("#sel_marital_status").focus();
return false;
}


if( $.trim($('#sel_state_of_residence').val()) == ""){
customError("State of Residence is Required");
$("#sel_state_of_residence").focus();
return false;
}



if( $.trim($('#sel_year_experience').val()) == ""){
customError("Years of experience is Required");
$("#sel_year_experience").focus();
return false;
}


if( $.trim($('#sel_educational_qualification').val()) == ""){
customError("Educational Qualification is Required");
$("#sel_educational_qualification").focus();
return false;
}

if( $.trim($('#sel_availability_type').val()) == ""){
customError("Availability is Required");
$("#sel_availability_type").focus();
return false;
}



var surname = $.trim($("#txt_surname").val());
var other_name = $.trim($("#txt_other_name").val());
var doctor_address = $.trim($("#txt_doctor_address").val());
var mdcn_number = $.trim($("#txt_mdcn_number").val());
var doctor_dob = $.trim($("#txt_doctor_dob").val());
var doctor_specialization = $.trim($("#doctor_specialization").val());
var phone = $.trim($("#txt_phone").val());
var marital_status = $.trim($("#sel_marital_status").val());
var state_of_residence = $.trim($("#sel_state_of_residence").val());
var year_experience = $.trim($("#sel_year_experience").val());
var educational_qualification = $.trim($("#sel_educational_qualification").val());

var specialist_type = $.trim($("#selSpecialist_type").val());

var availability_type = $.trim($("#sel_availability_type").val());




formdata.append("surname", surname.toString());
formdata.append("other_name", other_name.toString());
formdata.append("doctor_address", doctor_address.toString());
formdata.append("mdcn_number", mdcn_number.toString());
formdata.append("doctor_dob", doctor_dob.toString());
formdata.append("doctor_specialization", doctor_specialization.toString());
formdata.append("phone", phone.toString());
formdata.append("marital_status", marital_status.toString());
formdata.append("state_of_residence", state_of_residence.toString());
formdata.append("year_experience", year_experience.toString());
formdata.append("educational_qualification", educational_qualification.toString());

formdata.append("specialist_type", specialist_type.toString());

formdata.append("availability_type", availability_type.toString());

 $("#animateDiv").show();


$.ajax({
		type: "POST",
		url:"update-profile-proc.php",
        data: formdata,
        processData: false,
        contentType: false,
        success: function (html) {

 if(html == "Success"){
	
 	 $("#animateDiv").hide();
	alert('Profile Successfully Updated');
	window.location.reload(true);
	return false;
	
	}
else{

	 $("#animateDiv").hide();
	alert(html);
	return false;

	}

},error: function(res){

	 $("#animateDiv").hide();

	 var text = res.responseText;
	  alert(text);	
	alert('Cannot Continue This Operation');
	return false;
	
	}
});



event.preventDefault();

});




//Update doctor passport
$("#btn_upload_logo").click(function(){

	//logo
			if($.trim($("#file_upload_logo").val()) == ''){
			customError("Passport is required");
			$("#file_upload_logo").focus();
			return false;
			}

			var pic = $('#file_upload_logo').get(0).files[0];		

			
 			if (pic.type != 'image/jpeg') { 
				customError('Error : Passport must be in Jpeg format');
					return false;
				}

	
					if ((pic.size /1024) > 2000){
					 customError('Error : Passport must not be Greater than 2 MB');
					return false;
					}

					formdata.append("pic", pic);


 $("#animateDiv").show();
$.ajax({
		type: "POST",
		url:"upload-logo.php",
        data: formdata,
        processData: false,
        contentType: false,
        success: function (html) {

 if(html == "Success"){
	
	 $("#animateDiv").hide();
	alert('Profile Passport Successfully Updated');
	window.location.reload(true);
	return false;
	
	}
else{

	 $("#animateDiv").hide();
	alert(html);
	return false;

	}

},error: function(){
	
	 $("#animateDiv").hide();
	alert('Cannot Continue This Operation');
	return false;
	
	}


});




});


//Start Upload Cv
$("#btn_upload_resume").click(function(){

	//logo//cv
			if($.trim($("#file_upload_cv").val()) == ''){
			customError("Curriculum vitae is required");
			$("#file_upload_cv").focus();
			return false;
			}


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

					formdata.append("cv", cv);


 $("#animateDiv").show();
$.ajax({
		type: "POST",
		url:"upload-resume.php",
        data: formdata,
        processData: false,
        contentType: false,
        success: function (html) {

 if(html == "Success"){
	
	 $("#animateDiv").hide();
	alert('Resume Successfully Updated');
	window.location.reload(true);
	return false;
	
	}
else{

	$("#animateDiv").hide();
	alert(html);
	return false;

	}

},error: function(){
	
	$("#animateDiv").hide();
	alert('Cannot Continue This Operation');
	return false;
	
	}


});




});



});



function customError(myerror){
	alert('Error : ' + myerror);
	//sweetAlert("Oops...", "Fullname is required!", "error");
}