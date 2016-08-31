<?php
session_start();

//error_reporting(E_ALL);
//ini_set('display_errors', 'on');

//session_start();
include('../../../Connections/cn.php');
include('../security/security.php');
include('../../../functions/utilityFunction.php');



 $admin_login_email = $_SESSION['admin_login_email'];



  if($admin_login_email == ""){
  	echo "Session expired, please relogin to continue";
  	exit;
  }



$hid_assignment_id =  trim($_REQUEST['hid_assignment_id']);
$hid_doctor_id =  trim($_REQUEST['hid_doctor_id']);
$hid_hospital_id = trim($_REQUEST['hid_hospital_id']);
$txt_amount_paid = trim($_REQUEST['txt_amount_paid']);
$txt_month_paid =  trim($_REQUEST['txt_month_paid']);
$payment_type_hospital = trim($_REQUEST['payment_type_hospital']);
$txt_bank_name = trim($_REQUEST['txt_bank_name']);
$txt_refrence_number =  trim($_REQUEST['txt_refrence_number']);
$additional_information_hospital = trim($_REQUEST['additional_information_hospital']);
$txt_amount_paid_doctor = trim($_REQUEST['txt_amount_paid_doctor']);
$payment_type_admin =  trim($_REQUEST['payment_type_admin']);
$additional_information_admin = trim($_REQUEST['additional_information_admin']);



$additional_information_hospital = mysqli_real_escape_string ( $cn, $additional_information_hospital);
$additional_information_admin = mysqli_real_escape_string ( $cn, $additional_information_admin);


if ($hid_doctor_id == '') {
	echo "Data not supplied correctly";
	exit;
}

$query = mysqli_query($cn,  "INSERT INTO payment(assignment_id,doctor_id,hospital_id,amount_expected_hospital,amount_paid_hospital,refrence_number_hospital,bank_name_hospital,transaction_type_hospital,additional_info_hospital,month_paid_for,admin_approved_status,date_paid_hospital,amount_expected_doctor,amount_paid_doctor,transaction_type_doctor,date_paid_doctor,additional_information_doctor,doctor_approved_status,date_logged)   VALUES('".$hid_assignment_id."','".$hid_doctor_id."', '".$hid_hospital_id."','".$txt_amount_paid."','".$txt_amount_paid."','".$txt_refrence_number."','".$txt_bank_name."','".$payment_type_hospital."', '".$additional_information_hospital."', '".$txt_month_paid."','Completed',NOW(),'".$txt_amount_paid_doctor."','".$txt_amount_paid_doctor."','".$payment_type_admin."',NOW() , '".$additional_information_admin."','Completed',NOW() )");


if (!$query)
  {
  echo("Error description: " . mysqli_error($cn));
  exit;
  }


echo "Success";

?>