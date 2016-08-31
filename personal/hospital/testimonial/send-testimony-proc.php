<?php
session_start();
//error_reporting(E_ALL);
//ini_set('display_errors', 'on');

//session_start();
include('../../../Connections/cn.php');
include('../security/security.php');

$hospital_id = $_SESSION['hospital_id_login'];

$testimony = $_REQUEST['testimony'];

$testimony = mysqli_real_escape_string ( $cn, $testimony);

if($hospital_id == "" or $testimony == ""){
	echo "Invalid Data, Please try again";
	exit;
}

$query = mysqli_query($cn, "insert into testimony_hospital(hospital,testimony,admin_posted)values('".$hospital_id."','".$testimony."','No')");

if (!$query)
  {
  echo("Error description: " . mysqli_error($cn));
  exit;
  }


echo "Success";



?>