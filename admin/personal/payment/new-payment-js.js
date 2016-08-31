$("document").ready(function(){

$("#txt_month_paid").datepicker( {
   
   viewMode: 'years',
  	  format: 'mm-yyyy',
  	   startDate: '-3d'

    // format: "mm-yyyy",
    // startView: "months", 
    // minViewMode: "months"
});


// update hospital profile
$("#btn_pay_doctor_assignment").click(function(){

//doctor_id
if( $.trim($('#hid_doctor_id').val()) == ""){
		customError("Please try again");
		return false;
		}


		if( $.trim($('#txt_amount_paid').val()) == ""){
		customError("Please try again");
		return false;
		}




		if( $.trim($('#txt_month_paid').val()) == ""){
		customError("Month paid for is required");
		$("#txt_month_paid").focus();
		return false;
		}


//payment type
		if( $.trim($('#payment_type_hospital').val()) == ""){
		customError("Hospital's Payment type paid is required");
		$("#payment_type_hospital").focus();
		return false;
		}


		if( $.trim($('#txt_bank_name').val()) == ""){
		customError("Bank details is required");
		$("#txt_bank_name").focus();
		return false;
		}


		if( $.trim($('#txt_refrence_number').val()) == ""){
		customError("Reference number is required");
		$("#txt_refrence_number").focus();
		return false;
		}




		//additional information
		if( $.trim($('#additional_information_hospital').val()) == ""){
		customError("Hospital's additional Information is required");
		$("#additional_information_hospital").focus();
		return false;
		}

		if( $.trim($('#txt_amount_paid_doctor').val()) == ""){
		customError("Please try again");
		return false;
		}


			if( $.trim($('#payment_type_admin').val()) == ""){
		customError("Payment type paid is required");
		$("#payment_type_admin").focus();
		return false;
		}

		if( $.trim($('#additional_information_admin').val()) == ""){
		customError("Additional Info is required");
		$("#additional_information_admin").focus();
		return false;
		}



var hid_assignment_id = $.trim($('#hid_assignment_id').val());
var hid_doctor_id = $.trim($('#hid_doctor_id').val());
var hid_hospital_id = $.trim($('#hid_hospital_id').val());
var txt_amount_paid = $.trim($('#txt_amount_paid').val());
var txt_month_paid = $.trim($('#txt_month_paid').val());
var payment_type_hospital = $.trim($('#payment_type_hospital').val());
var txt_bank_name = $.trim($('#txt_bank_name').val());
var txt_refrence_number = $.trim($('#txt_refrence_number').val());
var additional_information_hospital = $.trim($('#additional_information_hospital').val());
var txt_amount_paid_doctor = $.trim($('#txt_amount_paid_doctor').val());
var payment_type_admin = $.trim($('#payment_type_admin').val());
var additional_information_admin = $.trim($('#additional_information_admin').val());

$("#animateDiv").show();
$.post("new-payment-proc.php",
    			{	
    				hid_assignment_id : hid_assignment_id,
			    	hid_doctor_id : hid_doctor_id,
			      	hid_hospital_id : hid_hospital_id,
					txt_amount_paid : txt_amount_paid,
					txt_month_paid : txt_month_paid,
			      	payment_type_hospital : payment_type_hospital,
					txt_bank_name : txt_bank_name,
					txt_refrence_number : txt_refrence_number,
			      	additional_information_hospital : additional_information_hospital,
					txt_amount_paid_doctor : txt_amount_paid_doctor,
					payment_type_admin : payment_type_admin,
					additional_information_admin : additional_information_admin


					
    			},
  				 function(data, status){
			        //alert("Data: " + data + "\nStatus: " + status);
			        console.log(data);

			        if(data == "Success"){
			        	$("#animateDiv").hide();
			        	alert("Doctor Successfully paid");
			        	window.location = "../payment/index.php"
			        	 return false;
			        }else{

			        	$("#animateDiv").hide();
			        	 alert(data);
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