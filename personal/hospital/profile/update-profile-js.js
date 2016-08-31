$("document").ready(function(){


 var formdata = false;
        if (window.FormData) {
            formdata = new FormData();
        }

// update hospital profile
$("#btn_update_hospital_profile").click(function(){


if( $.trim($('#txt_hospital_name').val()) == ""){
customError("Hospital name is required");
$("#txt_hospital_name").focus();
return false;
}

if( $.trim($('#txt_hospital_address').val()) == ""){
customError("Address is Required");
$("#txt_hospital_address").focus();
return false;
}

if( $.trim($('#txt_hefamaa_number').val()) == ""){
customError("Hefamaa number is Required");
$("#txt_hefamaa_number").focus();
return false;
}


if( $.trim($('#txt_hospital_email').val()) == ""){
customError("Email is Required");
$("#txt_hospital_email").focus();
return false;
}


// if( $.trim($('#txt_hospital_website').val()) == ""){
// customError("Website is Required");
// $("#txt_hospital_website").focus();
// return false;
// }


if( $.trim($('#txt_hospital_phone').val()) == ""){
customError("Phone Number is Required");
$("#txt_hospital_phone").focus();
return false;
}




// if( $.trim($('#txt_hospital_phone2').val()) == ""){
// customError("Secondary Phone Number is Required");
// $("#txt_hospital_phone2").focus();
// return false;
// }



if( $.trim($('#sel_hospital_state').val()) == ""){
customError("State is Required");
$("#sel_hospital_state").focus();
return false;
}


if( $.trim($('#txt_contact_name').val()) == ""){
customError("Contact name is Required");
$("#txt_contact_name").focus();
return false;
}


if( $.trim($('#txt_contact_phone').val()) == ""){
customError("Contact phone is Required");
$("#txt_contact_phone").focus();
return false;
}


if( $.trim($('#sel_contact_position').val()) == ""){
customError("Contact position is Required");
$("#sel_contact_position").focus();
return false;
}


var hospital_name = $.trim($("#txt_hospital_name").val());
var hospital_address = $.trim($("#txt_hospital_address").val());
var hefamaa_number = $.trim($("#txt_hefamaa_number").val());
var hospital_email = $.trim($("#txt_hospital_email").val());
var hospital_website = $.trim($("#txt_hospital_website").val());
var hospital_phone = $.trim($("#txt_hospital_phone").val());
var hospital_phone2 = $.trim($("#txt_hospital_phone2").val());
var hospital_state = $.trim($("#sel_hospital_state").val());
var contact_name = $.trim($("#txt_contact_name").val());
var contact_phone = $.trim($("#txt_contact_phone").val());
var contact_position = $.trim($("#sel_contact_position").val());


	

	$("#animateDiv").show();

formdata.append("hospital_name", hospital_name.toString());
formdata.append("hospital_address", hospital_address.toString());
formdata.append("hefamaa_number", hefamaa_number.toString());
formdata.append("hospital_email", hospital_email.toString());
formdata.append("hospital_website", hospital_website.toString());
formdata.append("hospital_phone", hospital_phone.toString());
formdata.append("hospital_phone2", hospital_phone2.toString());
formdata.append("hospital_state", hospital_state.toString());
formdata.append("contact_name", contact_name.toString());
formdata.append("contact_phone", contact_phone.toString());
formdata.append("contact_position", contact_position.toString());


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




//Update hospital logo
$("#btn_upload_logo").click(function(){

	//logo
			if($.trim($("#file_upload_logo").val()) == ''){
			customError("Hospital logo is required");
			$("#file_upload_logo").focus();
			return false;
			}

			var pic = $('#file_upload_logo').get(0).files[0];		

			
 			if (pic.type != 'image/jpeg') { 
				customError('Error : Hospital logo must be in Jpeg format');
					return false;
				}

	
					if ((pic.size /1024) > 2000){
					 customError('Error : Hospital logo must not be Greater than 2 MB');
					return false;
					}

					formdata.append("pic", pic);



$.ajax({
		type: "POST",
		url:"upload-logo.php",
        data: formdata,
        processData: false,
        contentType: false,
        success: function (html) {

 if(html == "Success"){
	
	alert('Profile Logo Successfully Updated');
	window.location.reload(true);
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




});


});



function customError(myerror){
	alert('Error : ' + myerror);
	//sweetAlert("Oops...", "Fullname is required!", "error");
}