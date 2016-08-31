<?php
session_start();

include('../../../Connections/cn.php');
include('../security/security.php');
include('../../../functions/utilityFunction.php');

$hospital_id = $_SESSION['hospital_id_login'];
$hospital_details = getHospitalDetailsById($cn,$hospital_id);

$logo = $hospital_details['logo'];


if($hospital_id == ""){
  	echo "Session expired, please relogin to continue";
  	exit;
  }

//echo $logo;
 $fullpath = $logo.".jpg";
//exit;

	// Upload Picture for Question
if($_FILES['pic']['name'] != ""){

	$pic = date('YmjHIs');
	unlink('../logo/'.$fullpath);
	move_uploaded_file($_FILES["pic"]["tmp_name"],"../logo/".$pic.".jpg");
		}
					
		
$qu = mysqli_query($cn, "update hospital set logo = '".$pic."' where id = '".$hospital_id."' ");

if (!$qu)
  {
  echo("Error description: " . mysqli_error($cn));
  exit;
  }

echo "Success";

  ?>