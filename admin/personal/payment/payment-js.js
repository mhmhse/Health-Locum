$("document").ready(function(){



// update hospital profile
$("#btn_pay_doctor_assignment").click(function(){




//payment type
		if( $.trim($('#payment_type').val()) == ""){
		customError("Payment type paid is required");
		$("#payment_type").focus();
		return false;
		}

		//additional information
		if( $.trim($('#additional_information').val()) == ""){
		customError("Additional Information is required");
		$("#additional_information").focus();
		return false;
		}



var payment_id = $.trim($('#hid_payment_id').val());
var payment_type = $.trim($('#payment_type').val());
var additional_information = $.trim($('#additional_information').val());

$.post("payment-proc.php",
    			{	
			    	payment_id : payment_id,
			      	payment_type : payment_type,
					additional_information : additional_information

					
    			},
  				 function(data, status){
			        //alert("Data: " + data + "\nStatus: " + status);
			        console.log(data);

			        if(data == "Success"){
			        	alert("Doctor Successfully paid");
			        	window.location = "../payment/index.php"
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