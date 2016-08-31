<?php
session_start();

error_reporting(E_ALL);
ini_set('display_errors', 'on');

//session_start();
include('../../../Connections/cn.php');
include('../security/security.php');
include('../../../functions/utilityFunction.php');




 $doctor_login_id = $_SESSION['doctor_login_id'];
 


  if($doctor_login_id == ""){
  	echo "Session expired, please relogin to continue";
  	exit;
  }

$surname =  trim($_REQUEST['surname']);
$other_name = trim($_REQUEST['other_name']);
$doctor_address = trim($_REQUEST['doctor_address']);
//$mdcn_number = trim($_REQUEST['mdcn_number']);
$doctor_dob = trim($_REQUEST['doctor_dob']);
$doctor_specialization = trim($_REQUEST['doctor_specialization']);
$phone = trim($_REQUEST['phone']);
$marital_status = trim($_REQUEST['marital_status']);
$state_of_residence = trim($_REQUEST['state_of_residence']);
$year_experience = trim($_REQUEST['year_experience']);
$educational_qualification = trim($_REQUEST['educational_qualification']);

$specialist_type = trim($_REQUEST['specialist_type']);
$availability_type = trim($_REQUEST['availability_type']);

if ($phone == '') {
	echo "Data not supplied correctly";
	exit;
}

$query = mysqli_query($cn, "update doctor set surname = '".$surname."', other_name = '".$other_name."', address ='".$doctor_address."', date_of_birth='".$doctor_dob."', field_type='".$doctor_specialization."',phone_number='".$phone."',marital_status='".$marital_status."',state_of_residence='".$state_of_residence."',years_experience='".$year_experience."',educational_qualification = '".$educational_qualification."', specialist_type='".$specialist_type."', availability_type='".$availability_type."' where id = '".$doctor_login_id."' ");


if (!$query)
  {
  echo("Error description: " . mysqli_error($cn));
  exit;
  }


echo "Success";

?>