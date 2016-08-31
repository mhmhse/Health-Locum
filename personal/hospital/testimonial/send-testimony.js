$(document).ready(function(){


$("#btn_send_testimonial").click(function(){


	if( $.trim($('#hospital_testimony').val()) == ""){
	customError("Hospital's testimony is Required");
	$("#hospital_testimony").focus();
	return false;
	}


$("#animateDiv").show();
hospital_testimony =  $.trim($('#hospital_testimony').val());
$.post("send-testimony-proc.php",
    {	
    	testimony:hospital_testimony
    },
    function(data, status){
      
        if(data != "Success"){
            $("#animateDiv").hide();
        	 customError("Please Contact The Administrator");
        	 return false;
        }else{

            $("#animateDiv").hide();
        	alert("Testimony Successfully Posted");
        	window.location = "../profile/index.php";
        }



    });



	});	

});


function customError(myerror){
	alert('Error : ' + myerror);
}
