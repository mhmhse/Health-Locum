<?php
session_start();

error_reporting(E_ALL);
ini_set('display_errors', 'on');

//session_start();
include('../../../Connections/cn.php');
include('../security/security.php');
include('../../../functions/utilityFunction.php');



 $admin_login_email = $_SESSION['admin_login_email'];



  if($admin_login_email == ""){
  	echo "Session expired, please relogin to continue";
  	exit;
  }

 $payment_id =  trim($_REQUEST['payment_id']);
$payment_type = trim($_REQUEST['payment_type']);
$additional_information = trim($_REQUEST['additional_information']);


$payment_details =  getPaymentDetailsById($cn,$payment_id);



$assignment_details =  getAssignmentDetailsById($cn,$payment_details['assignment_id']);


$expected_amount_doctor = $assignment_details['doctors_wages'];

if ($expected_amount_doctor == '') {
	echo "Data not supplied correctly";
	exit;
}


$query = mysqli_query($cn, "UPDATE payment set amount_expected_doctor = '".$expected_amount_doctor."',amount_paid_doctor='".$expected_amount_doctor."',transaction_type_doctor='".$payment_type."', additional_information_doctor='".$additional_information."',date_paid_doctor=NOW(),doctor_approved_status = 'Completed' where id = '".$payment_id."' ");


if (!$query)
  {
  echo("Error description: " . mysqli_error($cn));
  exit;
  }


echo "Success";

?>