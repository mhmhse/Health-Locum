<?php
session_start();
//error_reporting(E_ALL);
//ini_set('display_errors', 'on');

//session_start();
include('../../../Connections/cn.php');

//include('../../../PHPMailer/PHPMailerAutoload.php');
include('../../../functions/utilityFunction.php');



$hospital_id = $_SESSION['hospital_id_login'];
$num_of_provider = trim($_REQUEST['num_of_provider']);
$specialization = trim($_REQUEST['specialization']);
$state = trim($_REQUEST['state']);


$job_type = trim($_REQUEST['job_type']);

$shift_type = trim($_REQUEST['shift_type']);

// $year_of_experience = trim($_REQUEST['year_of_experience']);
// $split_year_of_experience = explode(";", $year_of_experience);

// $year_of_experience_min = $split_year_of_experience[0];
// $year_of_experience_max = $split_year_of_experience[1];


// $age_range_request = trim($_REQUEST['age_range_request']);

// $split_age_range = explode(";", $age_range_request);

// $age_range_request_min = $split_age_range[0];
// $age_range_request_max = $split_age_range[1];


 $request_type = trim($_REQUEST['request_type']);
//exit;

$duration_from = trim($_REQUEST['duration_from']);
$duration_to = trim($_REQUEST['duration_to']);


$addtional_information = trim($_REQUEST['addtional_information']);

$addtional_information = mysqli_real_escape_string ( $cn, $addtional_information);


if ($hospital_id == '') {
	# code...
	echo "Please relogin and try again";
	exit;
}


if ($num_of_provider == '') {
	# code...
	echo "Data not supplied correctly";
	exit;
}


$mydate = date('D j - m - Y');

//$query = mysqli_query($cn, "insert into request(hospital_id,num_of_provider,specialization,state,shift_type,year_of_experience,year_of_experience_min,year_of_experience_max,age_range,age_range_min,age_range_max,request_type,additional_information,date_posted,job_type,taken,duration_from,duration_to) 
//	values('$hospital_id','$num_of_provider','$specialization','$state','$shift_type','$year_of_experience','$year_of_experience_min','$year_of_experience_max','$age_range_request','$age_range_request_min','$age_range_request_max','$request_type','$addtional_information','$mydate','$job_type','No','".$duration_from."','".$duration_to."')");

$query = mysqli_query($cn, "insert into request(hospital_id,num_of_provider,specialization,state,shift_type,request_type,additional_information,date_posted,job_type,taken,duration_from,duration_to) 
values('$hospital_id','$num_of_provider','$specialization','$state','$shift_type','$request_type','$addtional_information','$mydate','$job_type','No','".$duration_from."','".$duration_to."')");




 $hospital_email = $_SESSION['hospital_email_login'];
  $hospital_name = $_SESSION['hospital_dname_login'];
  


$admin_message = "You have a new request from ". $hospital_name . " , Please login to fulfil the request.";
 //send admin message
 sendCustomMail($cn,$admin_email,'New request Received',$admin_message);




$hospital_message = "Thanks for your request. The order is being processed and our client Services Consultants will contact you shortly. To enquire about the state of the order, 080222222222, or 080333333333";
//send hospital message
sendCustomMail($cn,$hospital_email,'New request Sent to Medline Locum Agency',$hospital_message);




 if (!$query)
  {
   echo("Error description: " . mysqli_error($cn));
   exit;
   }


echo "Success";




?>