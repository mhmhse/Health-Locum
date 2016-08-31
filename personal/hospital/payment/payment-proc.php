<?php
session_start();

error_reporting(E_ALL);
ini_set('display_errors', 'on');

//session_start();
include('../../../Connections/cn.php');
include('../security/security.php');
include('../../../functions/utilityFunction.php');



 $hospital_id_login = $_SESSION['hospital_id_login'];



  if($hospital_id_login == ""){
  	echo "Session expired, please relogin to continue";
  	exit;
  }

$assignment_id =  trim($_REQUEST['assignment_id']);
$amount_paid = trim($_REQUEST['amount_paid']);
$payment_type = trim($_REQUEST['payment_type']);
$bank_name = trim($_REQUEST['bank_name']);
$reference_number = trim($_REQUEST['reference_number']);
$additional_information = trim($_REQUEST['additional_information']);
$month_paid = trim($_REQUEST['month_paid']);




$details =  getAssignmentDetailsById($cn,$assignment_id);

$expected_amount = $details['pay_from_hospital'];


$db_hospital_id = $details['hospital_id'];
$db_doctor_id = $details['doctor_id'];


if ($amount_paid == '') {
	echo "Data not supplied correctly";
	exit;
}


$query = mysqli_query($cn, "insert into payment(assignment_id,doctor_id,hospital_id,amount_expected_hospital,amount_paid_hospital,refrence_number_hospital,bank_name_hospital,transaction_type_hospital,additional_info_hospital,date_paid_hospital,month_paid_for,admin_approved_status,doctor_approved_status) values('".$assignment_id."','".$db_doctor_id."','".$db_hospital_id."','".$expected_amount."','".$amount_paid."','".$reference_number."','".$bank_name."','".$payment_type."','".$additional_information."',NOW(),'".$month_paid."','Pending','Pending')");


if (!$query)
  {
  echo("Error description: " . mysqli_error($cn));
  exit;
  }


echo "Success";

?>