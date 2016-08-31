<?php
session_start();
error_reporting(E_ALL);
ini_set('display_errors', 'on');




if(isset($_REQUEST['function_name']) && $_REQUEST['function_name'] == "send checked match"){

	$request_id = $_REQUEST['request_id'];
	$doctor_id = $_REQUEST['doctor_id'];

	send_checked_match_to_db($doctor_id,$request_id);
	//echo "Kapish";
}

function send_checked_match_to_db($doctor_id,$request_id){

include('../../../Connections/cn.php');
include('../../../functions/utilityFunction.php');

//echo "Request ID : ". $request_id . "Doctor ID " . $doctor_id;
//exit;

$q1 = mysqli_query($cn,"SELECT *  FROM `match_doctor` WHERE `request_id` = '".trim($request_id)."' AND `doctor_id` = '".trim($doctor_id)."' ");


	//var_dump($q1);
	// Perform a query, check for error
if (!$q1)
  {
  echo("Error description check : " . mysqli_error($cn));
  exit;
  }

//mysqli_num_rows($q1);



// if(mysqli_num_rows($q1) > 0){
// 		echo "Duplicate";
// 		exit;
// 		}


		if(mysqli_num_rows($q1) == 0){
		echo "Invalid Operation";
		exit;
		}

$qu = mysqli_query($cn,"UPDATE `match_doctor` SET client_check = 'yes' where doctor_id = '".trim($doctor_id)."' and request_id = '".trim($request_id)."' ");


$hospital_name = $_SESSION['hospital_dname_login'];
$message = "<p>Hi Administrator,</p>You Have a new request Feedback from ".$hospital_name. "<p>Medline Team.</p>";

sendCustomMail($cn,'info@medlinelocum.com','New Request Feedback from Hospital',$message);


if (!$qu)
  {
  echo("Error description put: " . mysqli_error($cn));
  exit;
  }else{
	echo "Success";  
  }


}


?>