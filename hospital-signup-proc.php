<?php
//error_reporting(E_ALL);
//ini_set('display_errors', 'on');


//session_start();
include('Connections/cn.php');
include('functions/utilityFunction.php');


$hospital_name = trim($_REQUEST['hospital_name']);
$address = trim($_REQUEST['address']);
$hefamaa = trim($_REQUEST['hefamaa']);
$email  = trim($_REQUEST['email']);
$website  = trim($_REQUEST['website']);
$telephone  = trim($_REQUEST['telephone']);
$telephone2  = trim($_REQUEST['telephone2']);
$state  = trim($_REQUEST['state']);

$contact_name  = trim($_REQUEST['contact_name']);
$contact_phone  = trim($_REQUEST['contact_phone']);
$contact_position  = trim($_REQUEST['contact_position']);

$password   = trim($_REQUEST['password']);

$passcode  = trim($_REQUEST['passcode']);


$mdpass = md5($passcode);

$mdpassword = md5($password);

//$mdpass = $passcode;


//echo "Password is : " . $mdpass;

//echo "Password is : " . $password;

//exit;








	$q1 = mysqli_query($cn,"select * from hospital where email = '".$email."' ");

	// Perform a query, check for error
if (!$q1)
  {
  echo("Error description: " . mysqli_error($cn));
  exit;
  }

if(mysqli_num_rows($q1) > 0){
		echo "Email Already Exist For Another Hospital";
		exit;
		}


	//$q1 = mysql_query("select * from hospital where email = '".$email."'", $cn) or die('Cannot Get Email '. mysql_error());
		//if(mysql_num_rows($q1) > 0){
		//echo "Email Already Exist For Another Hospital";
		//exit;
		//}
	
	// Upload Picture for Question
if(@$_FILES['pic']['name'] != ""){

	$pic = date('YmjHIs');
	move_uploaded_file($_FILES["pic"]["tmp_name"],"personal/hospital/logo/".$pic.".jpg");
	
	}
	else{
		$pic = "";
		}
		
		$mydate = date('D j - m - Y');

//$confirm_code=md5(uniqid(rand()));


//$qux = mysql_query("insert into activate(user,password,passkey) values('$user','$mdpass','$confirm_code') ") or die('Cannot Create Activation '.mysql_error());


		
//$qu = mysql_query("insert into hospital(hospital_name,address,year_established,email,Website,phone,state,num_staff,logo,password,date_registered) values('$hospital_name','$address','$year_established','$email','$website','$telephone','$state','$num_of_staff','$pic','$mdpass','$mydate','No')") or die('Cannot Create New User '.mysql_error());


$qu = mysqli_query($cn, "insert into hospital(hospital_name,address,hefamaa,email,Website,phone,phone2,state,contact_name,contact_phone,contact_position,logo,password,date_registered,paid,completed) values('$hospital_name','$address','$hefamaa','$email','$website','$telephone','$telephone2','$state','$contact_name','$contact_phone','$contact_position','$pic','$mdpassword','$mydate','No','No')");

if (!$qu)
  {
  echo("Error description: " . mysqli_error($cn));
  exit;
  }


$mail_body = "Dear ". $hospital_name . "</br>,
<p style='height:10px;'></p>
<p>Thank you for registering with Medline Locum Agency.  One of our Client Services Consultants will contact you shortly.  He will be able to discuss about your immediate and long term staffing needs, and other areas where we can be of help in moving your practice to the next level. For any enquiries or clarifications, please feel free to contact us by phone, text, WhatsApp, or email using any of the details on the CONTACT US link on the website.</p>
<p style='height:10px;'></p>
<p>We are available 24/7 to meet your staffing needs, either, routine, urgent, or emergency.  Feel free to browse through the exciting articles and answers to frequently asked questions on our website. 
<p style='height:10px;'></p>
<p>Once again, welcome to the exciting world of Medline Locum Agency, Nigeria’s premier online Locum Agency. 


";

$response = sendCustomMail($cn,$email,'Account Registration Successful',$mail_body);

$response = sendCustomMail($cn,$admin_email,'New Hospital Registeration',$hospital_name. ' Successfully registered on Medline Locum.');





echo "Success";
mysqli_close($cn);

?>