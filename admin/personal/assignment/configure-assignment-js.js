$(document).ready(function(){


$('#date_from').datepicker({
  		viewMode: 'years',
  	  format: 'yyyy-mm-dd',
  	   startDate: '-3d'
  });

$('#date_to').datepicker({
  		viewMode: 'years',
  	  format: 'yyyy-mm-dd',
  	   startDate: '-3d'
  });


$('#start_date').datepicker({
  		viewMode: 'years',
  	  format: 'yyyy-mm-dd',
  	   startDate: '-3d'
  });


$('#btn_configure_assignment').click(function(){

	
			//hospital name
			if($.trim($("#hospital_name").val()) == ''){
			customError("Hospital's name is required");
			$("#hospital_name").focus();
			return false;
			}


			//doctors name
			if($.trim($("#doctor_name").val()) == ''){
			customError("Doctor's is required");
			$("#doctor_name").focus();
			return false;
			}


			//Request Date
			if($.trim($("#request_name").val()) == ''){
			customError("Request is required");
			$("#request_name").focus();
			return false;
			}


			//status
			if($.trim($("#assignment_status").val()) == ''){
			customError("status is required");
			$("#assignment_status").focus();
			return false;
			}


			//innitial_salary
			if($.trim($("#innitial_salary").val()) == ''){
			customError("Initial Salary is required");
			$("#innitial_salary").focus();
			return false;
			}



			if(isNaN($.trim($('#innitial_salary').val()))){
			 customError("Initial Salary must be in numeric format");
			 $("#innitial_salary").focus();
			 return false;
			}


			//doctor_salary
			if($.trim($("#doctor_salary").val()) == ''){
			customError("Doctor's Salary is required");
			$("#doctor_salary").focus();
			return false;
			}



			if(isNaN($.trim($('#txt_add_user_phone').val()))){
			 customError("Doctor's Salary must be in numeric format");
			 $("#txt_add_user_phone").focus();
			 return false;
			}



			//date_from
			if($.trim($("#date_from").val()) == ''){
			customError("Duration from is required");
			$("#date_from").focus();
			return false;
			}


			//date_to
			if($.trim($("#date_to").val()) == ''){
			customError("Duration to is required");
			$("#date_to").focus();
			return false;
			}



			//shift_type
			if($.trim($("#shift_type").val()) == ''){
			customError("Shift type is required");
			$("#shift_type").focus();
			return false;
			}


			//start_date
			if($.trim($("#start_date").val()) == ''){
			customError("Start Date is required");
			$("#start_date").focus();
			return false;
			}



			//payment_mode
			if($.trim($("#payment_mode").val()) == ''){
			customError("Payment Mode is required");
			$("#payment_mode").focus();
			return false;
			}


			//additional_information
			if($.trim($("#additional_information").val()) == ''){
			customError("Additional Information is required");
			$("#additional_information").focus();
			return false;
			}


			$("#animateDiv").show();
			$.post("configure-assignment-proc.php",
    			{	
			    	function_name: "save new assignment",
			        doctor_id : $.trim($("#hid_doctor_id").val()),
					hospital_id : $.trim($("#hid_hospital_id").val()),
					request_id : $.trim($("#hid_request_id").val()),
					status : $.trim($("#assignment_status").val()),
					initial_salary : $.trim($("#innitial_salary").val()),
					doctor_salary : $.trim($("#doctor_salary").val()),
					date_from : $.trim($("#date_from").val()),
					date_to : $.trim($("#date_to").val()),
					shift_type : $.trim($("#shift_type").val()),
					start_date : $.trim($("#start_date").val()),
					payment_mode : $.trim($("#payment_mode").val()),
					additional_information : $.trim($("#additional_information").val())

    			},
  				 function(data, status){
			        //alert("Data: " + data + "\nStatus: " + status);
			        console.log(data);

			        if(data != "Success" && data != "Selected Doctor Previously assigned to this request"){
			        	$("#animateDiv").hide();
			        	 customError("Please try again ");
			        	 return false;
			        }else{

			        	 if(data == "Selected Doctor Previously assigned to this request"){
			        	 	$("#animateDiv").hide();
			        	 alert(data);
			        	}else{

			        		$("#animateDiv").hide();
			        	alert("Selected Doctor Successfully Assigned");
			        	window.location = "index.php";
			        		}


			        }
  				  });



			//surname
			// if($.trim($("#txtsurname").val()) == ''){
			// customError("surname is required");
			// $("#txtsurname").focus();
			// return false;
			// }


});



function customError(myerror){
	alert('Error : ' + myerror);
	//sweetAlert("Oops...", "Fullname is required!", "error");
}


});


