// JavaScript Document
$("document").ready(function(){


 var formdata = false;
        if (window.FormData) {
            formdata = new FormData();
        }



 $('#duration_from').datepicker({
  		viewMode: 'years',
  	  //format: 'yyyy-mm-dd',
  	   format: 'dd-mm-yyyy',
  	   startDate: '-3d'
  });


 $('#duration_to').datepicker({
  		viewMode: 'years',
  	    format: 'dd-mm-yyyy',
  	   startDate: '-3d'
  });

	
	
$("#btn_send_request").click(function(){

if( $.trim($('#num_of_provider').val()) == ""){
customError("Number of provider needed is Required");
$("#num_of_provider").focus();
return false;
}

if( $.trim($('#specialization').val()) == ""){
customError("Field of Specialization is Required");
$("#specialization").focus();
return false;
}


if( $.trim($('#state').val()) == ""){
customError("State of request is Required");
$("#State").focus();
return false;
}



if( $.trim($('#job_type').val()) == ""){
customError("Job type is Required");
$("#job_type").focus();
return false;
}


if( $.trim($('#shift_type').val()) == ""){
customError("Shift type is Required");
$("#shift_type").focus();
return false;
}


if( $.trim($('#duration_from').val()) == ""){
customError("Duration from is Required");
$("#duration_from").focus();
return false;
}


if( $.trim($('#duration_to').val()) == ""){
customError("Duration to is Required");
$("#duration_to").focus();
return false;
}





// if( $.trim($('#years_of_experience_request').val()) == ""){
// customError("Year of experience is Required");
// $("#years_of_experience_request").focus();
// return false;
// }


// if( $.trim($('#age_range_request').val()) == ""){
// customError("Age range is Required");
// $("#age_range_request").focus();
// return false;
// }

request_type = $("input[type='radio']:checked").val();

//alert(request_type);
//return false;


if( $.trim($('#addtional_information').val()) == ""){
customError("Addtional Information is Required");
$("#addtional_information").focus();
return false;
}


var num_of_provider = $.trim($("#num_of_provider").val());
var specialization = $.trim($("#specialization").val());
var state = $.trim($("#state").val());
var job_type = $.trim($("#job_type").val());
var shift_type = $.trim($("#shift_type").val());

var duration_from = $.trim($("#duration_from").val());
var duration_to = $.trim($("#duration_to").val());


// var year_of_experience = $.trim($("#years_of_experience_request").val());
// var age_range_request = $.trim($("#age_range_request").val());
var request_type = request_type;
var addtional_information = $.trim($("#addtional_information").val());



$("#animateDiv").show();


//alert(age_range_request);


formdata.append("num_of_provider", num_of_provider.toString());
formdata.append("specialization", specialization.toString());
formdata.append("state", state.toString());
formdata.append("job_type", job_type.toString());
formdata.append("shift_type", shift_type.toString());

formdata.append("shift_type", shift_type.toString());

formdata.append("duration_from", duration_from.toString());
formdata.append("duration_to", duration_to.toString());

// formdata.append("year_of_experience", year_of_experience.toString());

// formdata.append("age_range_request", age_range_request.toString());


formdata.append("request_type", request_type.toString());

formdata.append("addtional_information", addtional_information.toString());



$.ajax({
		type: "POST",
		url:"request-proc.php",
        data: formdata,
        processData: false,
        contentType: false,
        success: function (html) {

 if(html == "Success"){
	
	$("#animateDiv").hide();	
	alert('Request Successfully posted');
	window.location = "index.php";
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




});



function customError(myerror){
	alert('Error : ' + myerror);
	//sweetAlert("Oops...", "Fullname is required!", "error");
}


