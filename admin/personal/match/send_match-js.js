$(document).ready(function(){

	//match doctors data tables
    $('#view_admin_match_doctor').DataTable();
    $('#view_admin_send_match_doctor').DataTable();

    


    	/////years of experience
		// $("#years_of_experience_match").slider({ 
		// 	from: 1, 
		// 	to: 30,  
		// 	scale: [1, 2, 3, 4, 5, 6, 7, 8, 9, 10,11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30], 
		// 	limits: false, 
		// 	step: 1, 
		// 	dimension: '', 
		// 	skin: "round",  
		// 	callback: function( value ){ console.dir( this ); }
		// });
	
		//match_age_range request
		// $("#age_range_match").slider({ 
		// 	from: 15, to: 70, 
		// 	step: 1, 
		// 	scale: [15, '|', 30, '|' , '45', '|', 60, '|', 75], 
	
		// 	limits: false, 
		// 	dimension: 'year(s) old', 
		// 	skin: "round", 
		// 	callback: function( value ){ console.dir( this ); }
		// });



function getUrlParameter(sParam)
{
    var sPageURL = window.location.search.substring(1);
    var sURLVariables = sPageURL.split('&');
    for (var i = 0; i < sURLVariables.length; i++) 
    {
        var sParameterName = sURLVariables[i].split('=');
        if (sParameterName[0] == sParam) 
        {
            return sParameterName[1];
        }
    }
}   


//get Auto match doctors

$('#btn_auto_match_doctor').click(function(){


	request_id = $.trim($('#dual_request_id').val());

	
	if(request_id == ""){
		customError("Select a request to continue");
		return false;
	}

   	//new or existing request
   	//alert(window.location.href);
   	
   	var url = window.location.protocol + "//" + window.location.hostname  + window.location.pathname;
   	var extended_url = url + "?match_type=auto&request_id="+request_id;
  	//alert(extended_url);

  	window.location = extended_url;

   	event.preventDefault();
   });

//end get auto match doctors



//get manual match doctors

$('#manual_auto_match_doctor').click(function(){


	request_id = $.trim($('#dual_request_id').val());

	
	if(request_id == ""){
		customError("Select a request to continue");
		return false;
	}


	var state = $.trim($('#manual_state').val());
	var specialty = $.trim($('#manual_specialty').val());
	var marital_status = $.trim($('#manual_marital_status').val());
	var gender = $.trim($('#manual_gender').val());
	var age_range = $.trim($('#age_range_match').val());
	var year_experience = $.trim($('#years_of_experience_match').val());


    var age_range_splitter = age_range.split(";");

    age_range_min = age_range_splitter[0];
    age_range_max = age_range_splitter[1];

    //alert(age_range_min + " - " + age_range_max);



    var year_experience_splitter = year_experience.split(";");

    year_experience_min = year_experience_splitter[0];
    year_experience_max = year_experience_splitter[1];

    //alert(year_experience_min + " - " + year_experience_max);


   	var url = window.location.protocol + "//" + window.location.hostname  + window.location.pathname;
   
     //var queryString = "?match_type=manual&request_id="+request_id+"&manual_specialty="+specialty+"&manual_state="+state+"&year_of_experience_min=" + year_experience_min +"&year_of_experience_max="+ year_experience_max + "&age_range_min="+ age_range_min+ "&age_range_max="+age_range_max;



    var queryString = "?match_type=manual&request_id="+request_id+"&manual_specialty="+specialty+"&manual_state="+state;
   	var absoluteURL = url + queryString;

  	window.location = absoluteURL;

   	event.preventDefault();
   });

//end get manual match doctors




//Send Match Doctors to HOspital
   $('#btn_send_match_doctor').click(function(){

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

    docator_id_array = [];
   
      $("#animateDiv").show();

    $(".select_check_box:checked").each(function(){
       // alert($(this).val());

         doctor_id = $(this).val();
    
         sendMatchDoctor(request_id,doctor_id);
         docator_id_array.push(doctor_id);
    });


    doctor_list = JSON.stringify(docator_id_array);
   
    $.post('send_match_proc.php', {
      doctor_list: doctor_list,
      func: 'send_bulk_request_mail',
      f_request_id: request_id
    })

    
    $("#animateDiv").hide();
    alert("Matched Doctor Successfully sent to Hospital");
    window.location = "index.php?request_id="+request_id;

	
   	event.preventDefault();
   });


//Send Match Doctor
function sendMatchDoctor(request_id,doctor_id){

 $.post("send_match_proc.php",
    {	
    	function_name: "send match",
        request_id:request_id,
        doctor_id: doctor_id,
    },
    function(data, status){
        //alert("Data: " + data + "\nStatus: " + status);
        console.log(data);

        if(data != "Success" && data != "Duplicate"){
        	 customError("Please try again");
        	 return false;
        }else{

        	//alert("Matched Doctor Successfully sent to Hospital");
        	//window.location = "index.php?request_id="+request_id;
        }



    });


}



//Approve Selected Doctor
 $('#btn_send_approv_doctor').click(function(){



  request_id = $.trim($('#dual_request_id').val());

  if(request_id == ""){
    alert("Select a request to continue");
    return false;
  }

  
    var total_selected_checkbox = $(".select_approve_checkbox:checked").length;

   if(total_selected_checkbox == 0){
    alert('Select at least one Doctor to continue');
    return false;
   }


    $("#animateDiv").show();

    $(".select_approve_checkbox:checked").each(function(){
       // alert($(this).val());

         doctor_id = $(this).val();
         sendApprovedDoctor(request_id,doctor_id)

    });

    $("#animateDiv").hide();
    alert("Matched Doctor Successfully Approved for Assignment");
    window.location = "index.php?request_id="+request_id;

    event.preventDefault();
   });



function sendApprovedDoctor(request_id,doctor_id){

 $.post("send_match_proc.php",
    { 
      function_name: "save approved match",
        request_id:request_id,
        doctor_id: doctor_id
    },
    function(data, status){
        //alert("Data: " + data + "\nStatus: " + status);
        console.log(data);

        if(data != "Success" && data != "Update"){
           customError("Please try again");
           return false;
        }else{

          // alert("Matched Doctor Successfully Approved for Assignment");
          // window.location = "index.php?request_id="+request_id;
        }



    });


}








function customError(myerror){
	alert('Error : ' + myerror);
	//sweetAlert("Oops...", "Fullname is required!", "error");
}


});
