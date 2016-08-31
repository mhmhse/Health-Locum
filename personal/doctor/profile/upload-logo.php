<?php
session_start();

include('../../../Connections/cn.php');
include('../security/security.php');
include('../../../functions/utilityFunction.php');

$doctor_login_id = $_SESSION['doctor_login_id'];
$doctors_details = getDoctorsDetailsById($cn,$doctor_login_id);

$passport = $doctors_details['passport'];


if($doctor_login_id == ""){
  	echo "Session expired, please relogin to continue";
  	exit;
  }

//echo $logo;
 $fullpath = $passport.".jpg";
//exit;

	// Upload Picture for Question
if($_FILES['pic']['name'] != ""){

	$pic = date('YmjHIs');
	unlink('../passport/'.$fullpath);
	move_uploaded_file($_FILES["pic"]["tmp_name"],"../passport/".$pic.".jpg");
		}
					
		
$qu = mysqli_query($cn, "update doctor set passport = '".$pic."' where id = '".$doctor_login_id."' ");

if (!$qu)
  {
  echo("Error description: " . mysqli_error($cn));
  exit;
  }

echo "Success";

  ?>