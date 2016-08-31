$(document).ready(function(){


$("#btn_send_testimonial").click(function(){


	if( $.trim($('#hid_testimony_id').val()) == ""){
	customError("Please Try Again");
	return false;
	}



	if( $.trim($('#hospital_testimony').val()) == ""){
	customError("Hospital's testimony is Required");
	$("#hospital_testimony").focus();
	return false;
	}


hospital_testimony =  $.trim($('#hospital_testimony').val());
testimony_id =  $.trim($('#hid_testimony_id').val());

$("#animateDiv").show();
$.post("repost-testimony-proc.php",
    {	
    	testimony: hospital_testimony,
    	testimony_id: testimony_id
    },
    function(data, status){
      
        if(data != "Success"){
            $("#animateDiv").hide();
        	 customError("Please Contact The Administrator");
        	 return false;
        }else{
            $("#animateDiv").hide();
        	alert("Testimony Successfully Posted");
        	window.location = "../dashboard/index.php";
        }



    });



	});	

});


function customError(myerror){
	alert('Error : ' + myerror);
}
