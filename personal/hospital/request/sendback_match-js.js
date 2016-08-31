$(document).ready(function(){


//Send Match Doctors to HOspital
   $('#btn_send_checked_doctor').click(function(){


	request_id = $.trim($('#dual_request_id').val());

	if(request_id == ""){
		alert("Select a request to continue");
		return false;
	}

  
   	var total_selected_checkbox = $(".select_check_box:checked").length;

   if(total_selected_checkbox == 0){
   	alert('Select at least one Doctor to continue');
   	return false;
   }


    $(".select_check_box:checked").each(function(){
       // alert($(this).val());

         doctor_id = $(this).val();
    
         sendCheckedDoctor(request_id,doctor_id)

    });

	
   	event.preventDefault();
   });


//Send Match Doctor
function sendCheckedDoctor(request_id,doctor_id){

 $.post("sendback_match_proc.php",
    {	
    	function_name: "send checked match",
        request_id:request_id,
        doctor_id: doctor_id
    },
    function(data, status){
        //alert("Data: " + data + "\nStatus: " + status);
        console.log(data);

        if(data != "Success" && data != "Duplicate"){
        	 customError("Please try again");
        	 return false;
        }else{

        	alert("Checked Doctor Successfully Sent to Medline");
        	window.location = "index.php";
        }



    });


}




function customError(myerror){
	alert('Error : ' + myerror);
	//sweetAlert("Oops...", "Fullname is required!", "error");
}


});
