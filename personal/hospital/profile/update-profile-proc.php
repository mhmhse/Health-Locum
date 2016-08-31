<?php
session_start();

//error_reporting(E_ALL);
//ini_set('display_errors', 'on');

//session_start();
include('../../../Connections/cn.php');
include('../security/security.php');
include('../../../functions/utilityFunction.php');



 $hospital_email_login = $_SESSION['hospital_email_login'];
 $hospital_hefamaa_login = $_SESSION['hospital_hefamaa_login'];
 $hospital_id_login = $_SESSION['hospital_id_login'];
 $hospital_dname_logine = $_SESSION['hospital_dname_login'];


  if($hospital_id_login == ""){
  	echo "Session expired, please relogin to continue";
  	exit;
  }

$hospital_name =  trim($_REQUEST['hospital_name']);
$hospital_address = trim($_REQUEST['hospital_address']);
$hefamaa_number = trim($_REQUEST['hefamaa_number']);
$hospital_email = trim($_REQUEST['hospital_email']);
$hospital_website = trim($_REQUEST['hospital_website']);
$hospital_phone = trim($_REQUEST['hospital_phone']);
$hospital_phone2 = trim($_REQUEST['hospital_phone2']);
$hospital_state = trim($_REQUEST['hospital_state']);
$contact_name = trim($_REQUEST['contact_name']);
$contact_phone = trim($_REQUEST['contact_phone']);
$contact_position = trim($_REQUEST['contact_position']);


if ($hospital_phone == '') {
	echo "Data not supplied correctly";
	exit;
}

$query = mysqli_query($cn, "update hospital set hospital_name = '".$hospital_name."', address ='".$hospital_address."', website='".$hospital_website."', phone='".$hospital_phone."',phone2='".$hospital_phone2."',state='".$hospital_state."',contact_name='".$contact_name."',contact_phone='".$contact_phone."',contact_position = '".$contact_position."' where id= '".$hospital_id_login."' ");


if (!$query)
  {
  echo("Error description: " . mysqli_error($cn));
  exit;
  }


echo "Success";

?>