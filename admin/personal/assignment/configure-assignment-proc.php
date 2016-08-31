<?php
//error_reporting(E_ALL);
//ini_set('display_errors', 'on');




if(isset($_REQUEST['function_name']) && $_REQUEST['function_name'] == "save new assignment"){

	
			        $doctor_id = $_REQUEST['doctor_id'];
					$hospital_id = $_REQUEST['hospital_id'];
					$request_id = $_REQUEST['request_id'];
					$status = $_REQUEST['status'];
					$initial_salary = $_REQUEST['initial_salary'];
					$doctor_salary = $_REQUEST['doctor_salary']; 
					$date_from = $_REQUEST['date_from']; 
					$date_to = $_REQUEST['date_to']; 
					$shift_type = $_REQUEST['shift_type']; 
					$start_date = $_REQUEST['start_date'];
					$payment_mode = $_REQUEST['payment_mode'];
					$additional_information = $_REQUEST['additional_information'];






	save_new_assignment($doctor_id,$hospital_id,$request_id,$status,$initial_salary,$doctor_salary,$date_from,$date_to,$shift_type,$start_date,$payment_mode,$additional_information);
	
}

function save_new_assignment($doctor_id,$hospital_id,$request_id,$status,$initial_salary,$doctor_salary,$date_from,$date_to,$shift_type,$start_date,$payment_mode,$additional_information){

include('../../../Connections/cn.php');


$additional_information = mysqli_real_escape_string ( $cn, $additional_information);

//echo "Request ID : ". $request_id . "Doctor ID " . $doctor_id;

	$q1 = mysqli_query($cn,"SELECT * FROM `assignment` WHERE doctor_id = '".$doctor_id."' and request_id = '".$request_id."' and hospital_id= '".$hospital_id."' ");

	// Perform a query, check for error
if (!$q1)
  {
  echo("Error description check : " . mysqli_error($cn));
  exit;
  }

if(mysqli_num_rows($q1) > 0){
		echo "Selected Doctor Previously assigned to this request";
		exit;
		}



$qu = mysqli_query($cn,"INSERT into `assignment`(hospital_id,doctor_id,request_id,status,pay_from_hospital,doctors_wages,date_from,date_to,shift_type,date_started,payment_mode,additional_info) values('".$hospital_id."','".$doctor_id."','".$request_id."','".$status."','".$initial_salary."','".$doctor_salary."','".$date_from."','".$date_to."','".$shift_type."','".$start_date."','".$payment_mode."','".$additional_information."') ");

if (!$qu)
  {
  echo("Error description put: " . mysqli_error($cn));
  exit;
  }else{
  	# code...
	echo "Success";  
  }

$quUpdateTakenRequest = mysqli_query($cn,"UPDATE request set taken = 'yes' where id = '".$request_id."' ");
if (!$quUpdateTakenRequest)
  {
  echo("Error description update: " . mysqli_error($cn));
  exit;
  }







}



?>