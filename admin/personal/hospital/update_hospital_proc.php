<?php

include('../../../Connections/cn.php');

$request_type = $_POST['request'];


// for payment
if($request_type == "paid"){

	$doctor_id = $_POST['doctor_id'];
	$value = $_POST['value'];

 $sql = "update hospital set paid='".$value."' where id='".$doctor_id."'";
 $result = mysqli_query($cn,$sql);

  if (!$result)
  {
  echo("Error description: " . mysqli_error($cn));
  exit;
  }
}





// for credential
if($request_type == "credentialed"){

	$doctor_id = $_POST['doctor_id'];
	$value = $_POST['value'];

 $sql = "update hospital set approved='".$value."' where id='".$doctor_id."'";
 $result = mysqli_query($cn,$sql);

  if (!$result)
  {
  echo("Error description: " . mysqli_error($cn));
  exit;
  }
}



// for agreement
if($request_type == "agreement"){

	$doctor_id = $_POST['doctor_id'];
	$value = $_POST['value'];

 $sql = "update hospital set completed='".$value."' where id='".$doctor_id."'";
 $result = mysqli_query($cn,$sql);

  if (!$result)
  {
  echo("Error description: " . mysqli_error($cn));
  exit;
  }
}





?>