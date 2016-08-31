<?php
error_reporting(E_ALL);
ini_set('display_errors', 'on');


//session_start();
include('../Connections/cn.php');



$dname = trim($_REQUEST['dname']);
$email = trim($_REQUEST['email']);
$password = trim($_REQUEST['password']);

$mdpass = md5($password);








	$q1 = mysqli_query($cn,"select * from admin_login where email = '".$email."' ");

	// Perform a query, check for error
if (!$q1)
  {
  echo("Error description: " . mysqli_error($cn));
  exit;
  }

if(mysqli_num_rows($q1) > 0){
		echo "Email Exist For Another Administrator";
		exit;
		}


//$confirm_code=md5(uniqid(rand()));


$qu = mysqli_query($cn,"insert into admin_login(dname,email,password) values('".$dname."','".$email."','".$mdpass."') ");

//$qu = mysqli_query($cn, "insert into hospital(hospital_name,address,hefamaa,email,Website,phone,phone2,state,contact_name,contact_phone,contact_position,logo,password,date_registered,approved,paid,completed) values('$hospital_name','$address','$hefamaa','$email','$website','$telephone','$telephone2','$state','$contact_name','$contact_phone','$contact_position','$pic','$mdpass','$mydate','No','No','No')");

if (!$qu)
  {
  echo("Error description: " . mysqli_error($cn));
  exit;
  }

echo "Success";
mysqli_close($cn);

?>