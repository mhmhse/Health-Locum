<?php
session_start();
error_reporting(E_ALL);
ini_set('display_errors', 'on');

//session_start();
include('../../../Connections/cn.php');
include('../security/security.php');

$testimony_id = $_REQUEST['testimony_id'];
$testimony = $_REQUEST['testimony'];


if($testimony_id == "" or $testimony == ""){
	echo "Invalid Data, Please try again";
	exit;
}


$testimony = mysqli_real_escape_string ( $cn, $testimony);

$query = mysqli_query($cn, "update testimony_hospital  set updated_testimony  = '".$testimony."', admin_posted = 'Yes' where id = '".$testimony_id."' ");

if (!$query)
  {
  echo("Error description: " . mysqli_error($cn));
  exit;
  }


echo "Success";



?>