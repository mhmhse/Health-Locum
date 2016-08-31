// JavaScript Document
$("document").ready(function(){
	
	
$(".info_link").click(function(){

    //alert($(this).attr('href'));

    var request_id = $(this).attr('href');

    $("#animateDiv").show();

    $.post("apply-job-proc.php", {
    	request_id: request_id
    }, function(result){
        
    	if(result == "Success"){

            $("#animateDiv").hide();
    		alert('Application Successfully sent');
    		window.location.reload(true);
    	}else{

            $("#animateDiv").hide();
    		alert(result);
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
