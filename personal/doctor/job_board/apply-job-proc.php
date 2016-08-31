<?php
session_start();
//error_reporting(E_ALL);
//ini_set('display_errors', 'on');

//session_start();
include('../../../Connections/cn.php');


include('../../../functions/utilityFunction.php');


//echo $response;

//return false;



$doctor_id =  $_SESSION['doctor_login_id'];
$request_id = trim($_REQUEST['request_id']);

if($doctor_id == "" or $request_id == ""){
	echo "Invalid Data Supplied";
	exit;
}



$q1 = mysqli_query($cn,"select * from doctor_application where doctor_id = '".$doctor_id."' and request_id = '".$request_id."' ");

// Perform a query, check for error
if (!$q1)
  {
  echo("Error description: " . mysqli_error($cn));
  exit;
  }

if(mysqli_num_rows($q1) > 0){
		echo "Application previously posted to Medline Locum Agency";
		exit;
		}
	
		
		$mydate = date('D j - m - Y');


$qu = mysqli_query($cn, "insert into doctor_application(request_id,doctor_id,date_apply) values('$request_id','$doctor_id','$mydate')");


if (!$qu)
  {
  echo("Error description: " . mysqli_error($cn));
  exit;
  }


$email =  $_SESSION['doctor_login_email'];

 
$response = sendCustomMail($cn,$email,'Job Application Sent','Your Application was successfully sent, We will get back to you as soon as possible.');

$response = sendCustomMail($cn,$admin_email,'New Doctor Application','A Doctor Successfully Placed a job Application on Medline Locum.');




echo "Success";
mysqli_close($cn);

?>