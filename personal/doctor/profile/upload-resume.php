<?php
session_start();

include('../../../Connections/cn.php');
include('../security/security.php');
include('../../../functions/utilityFunction.php');

$doctor_login_id = $_SESSION['doctor_login_id'];
$doctors_details = getDoctorsDetailsById($cn,$doctor_login_id);

$resume = $doctors_details['resume'];


if($doctor_login_id == ""){
  	echo "Session expired, please relogin to continue";
  	exit;
  }

//echo $logo;
 $fullpath = $resume.".docx";
//exit;

	// Upload Picture for Question
if($_FILES['cv']['name'] != ""){

	$cv = date('YmjHIs');
	unlink('../cv/'.$fullpath);

	move_uploaded_file($_FILES["cv"]["tmp_name"],"../cv/".$cv.".docx");
		}
					
		
$qu = mysqli_query($cn, "update doctor set resume = '".$cv."' where id = '".$doctor_login_id."' ");

if (!$qu)
  {
  echo("Error description: " . mysqli_error($cn));
  exit;
  }

echo "Success";

  ?>