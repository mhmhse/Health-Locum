$("document").ready(function(){







	



//onnchange payment type
$('#payment_type').on('change', function() {
  // alert( this.value ); // or $(this).val()

  selected_value = this.value;

  if(selected_value == "Cash"){
  		$('#div_name_account').hide();

  		$('#lbl_reference_number').text('Receipt Number');
  		
  		$('#div_reference_number').css("margin-top", "-80px");

  		$('#div_additional_info').css("margin-top", "-80px");


		// $('#div_reference_number').show();
  		// $('#div_additional_info').css("margin-top", "-145px");//.css({margin-top: "-145px"});
  
    }
    else{

    	$('#div_reference_number').css("margin-top", "");
    	$('#div_additional_info').css("margin-top", "");
    	$('#lbl_reference_number').text('Reference Number');
    	$('#div_name_account').show();
  		//$('#div_reference_number').show();
  		
    }




});



// update hospital profile
$("#btn_pay_doctor_assignment").click(function(){


if( $.trim($('#hid_assignment_id').val()) == ""){
alert('Select an Assignment to continue');
window.location = "../assignment/index.php";
return false;
}


if( $.trim($('#txt_amount_paid').val()) == ""){
customError("Amount paid is required");
$("#txt_amount_paid").focus();
return false;
}



var amount = $.trim($('#txt_amount_paid').val());
if(isNaN(amount)){
customError("Amount paid must be in numeric format");
$("#txt_amount_paid").focus();
return false;
}

if( $.trim($('#txt_month_paid').val()) == ""){
customError("Month paid is required");
$("#txt_month_paid").focus();
return false;
}



//payment type
		if( $.trim($('#payment_type').val()) == ""){
		customError("Payment type paid is required");
		$("#payment_type").focus();
		return false;
		}


// refrence name
		if( $.trim($('#txt_refrence_number').val()) == ""){
		customError("Reference / Receipt number is required");
		$("#txt_refrence_number").focus();
		return false;
		}





var assignment_id = $.trim($('#hid_assignment_id').val());
var amount_paid = $.trim($('#txt_amount_paid').val());
var payment_type = $.trim($('#payment_type').val());
var month_paid = $.trim($('#txt_month_paid').val());
var bank_name = "";
var reference_number = $.trim($('#txt_refrence_number').val());
//check payment
if($.trim($('#payment_type').val()) != "Cash"){

		

		//bank name
		if( $.trim($('#txt_bank_name').val()) == ""){
		customError("Bank name is required");
		$("#txt_bank_name").focus();
		return false;
		}



		
		var bank_name = $.trim($('#txt_bank_name').val());
		
}

if( $.trim($('#additional_information').val()) == ""){
		customError("Additional Information is required");
		$("#additional_information").focus();
		return false;
		}


var additional_information = $.trim($('#additional_information').val());

$.post("payment-proc.php",
    			{	
			    	assignment_id : assignment_id,
			        amount_paid : amount_paid,
					payment_type : payment_type,
					month_paid : month_paid,
					bank_name : bank_name,
					reference_number : reference_number,
					additional_information : additional_information

					
    			},
  				 function(data, status){
			        //alert("Data: " + data + "\nStatus: " + status);
			        console.log(data);

			        if(data == "Success"){
			        	alert("Payment Request Sent \n You will be contacted if there are any issues");
			        	window.location = "../assignment/index.php"
			        	 return false;
			        }else{

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