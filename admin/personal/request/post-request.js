$(function() {
		$("#age_range_request_admin").slider({ 
			from: 15, to: 70, 
			step: 1, 
			scale: [15, '|', 30, '|' , '45', '|', 60, '|', 75], 
			//heterogeneity: ['15/35', '30/75'], 
			limits: false, 
			dimension: 'year(s) old', 
			skin: "round", 
			callback: function( value ){ console.dir( this ); }
		});


		

	});



// JavaScript Document
$("document").ready(function(){

$("#years_of_experience_request_admin").slider({ 
			from: 1, 
			to: 30,  
			//scale: [0, '|', 5, '|' , '10', '|', 15, '|', 20, '|', 25, '|', 30, '|', 35, '|', 40, '|', 45, '|', 50, '|', 55, '|', 60, '|', 65, '|', 70], 
			scale: [1, 2, 3, 4, 5, 6, 7, 8, 9, 10,11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30], 
			limits: false, 
			step: 1, 
			dimension: '', 
			skin: "round",  
			callback: function( value ){ console.dir( this ); }
		});



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






 var formdata = false;
        if (window.FormData) {
            formdata = new FormData();
        }

	
	
$("#btn_send_request").click(function(){


if( $.trim($('#name_of_hospital').val()) == ""){
customError("Hospital name is required");
$("#name_of_hospital").focus();
return false;
}

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
$("#state").focus();
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




// if( $.trim($('#years_of_experience_request_admin').val()) == ""){
// customError("Years of experience is Required");
// $("#years_of_experience_request_admin").focus();
// return false;
// }


// if( $.trim($('#age_range_request_admin').val()) == ""){
// customError("Age range is Required");
// $("#age_range_request").focus();
// return false;
// }


if( $.trim($('#addtional_information').val()) == ""){
customError("Addtional Information is Required");
$("#addtional_information").focus();
return false;
}

request_type = $("input[type='radio']:checked").val();


if( $.trim($('#addtional_information').val()) == ""){
customError("Addtional Information is Required");
$("#addtional_information").focus();
return false;
}



var name_of_hospital = $.trim($("#name_of_hospital").val());
var num_of_provider = $.trim($("#num_of_provider").val());
var specialization = $.trim($("#specialization").val());
var state = $.trim($("#state").val());
var job_type = $.trim($("#job_type").val());
var shift_type = $.trim($("#shift_type").val());
var duration_from = $.trim($("#duration_from").val());
var duration_to = $.trim($("#duration_to").val());
// var year_of_experience = $.trim($("#years_of_experience_request_admin").val());
// var age_range_request = $.trim($("#age_range_request_admin").val());
var request_type = request_type;
var addtional_information = $.trim($("#addtional_information").val());











//alert(age_range_request);


formdata.append("name_of_hospital", name_of_hospital.toString());
formdata.append("num_of_provider", num_of_provider.toString());
formdata.append("specialization", specialization.toString());
formdata.append("state", state.toString());

formdata.append("job_type", job_type.toString());
formdata.append("shift_type", shift_type.toString());
// formdata.append("year_of_experience", year_of_experience.toString());
// formdata.append("age_range_request", age_range_request.toString());
formdata.append("addtional_information", addtional_information.toString());
formdata.append("duration_from", duration_from.toString());
formdata.append("duration_to", duration_to.toString());
formdata.append("request_type", request_type.toString());

$("#animateDiv").show();

$.ajax({
		type: "POST",
		url:"post-request-proc.php",
        data: formdata,
        processData: false,
        contentType: false,
        success: function (html) {

 if(html == "Success"){
	
	$("#animateDiv").hide();
	alert('Request Successfully Posted');
	window.location = "view-request.php";
	
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


