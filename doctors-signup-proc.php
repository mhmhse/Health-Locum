<?php
//error_reporting(E_ALL);
//ini_set('display_errors', 'on');

//session_start();
include('Connections/cn.php');


include('functions/utilityFunction.php');


//echo $response;

//return false;



$surname = trim($_REQUEST['surname']);
$othernames = trim($_REQUEST['othernames']);
$gender = trim($_REQUEST['gender']);
$date_of_birth  = trim($_REQUEST['date_of_birth']);
$telephone  = trim($_REQUEST['telephone']);
$email  = trim($_REQUEST['email']);


$availability_type  = trim($_REQUEST['availability_type']);


$selstateofresidence  = trim($_REQUEST['selstateofresidence']);
$contact_type  = trim($_REQUEST['contact_type']);

$specialist_type  = trim($_REQUEST['specialist_type']);

$address = trim($_REQUEST['address']);

$mdcn_no = trim($_REQUEST['mdcn_no']);


$nationality  = trim($_REQUEST['nationality']);
$state_of_origin = trim($_REQUEST['state_of_origin']);
$title = trim($_REQUEST['title']);
$educational_qualification = trim($_REQUEST['educational_qualification']);
$year_of_experience  = trim($_REQUEST['year_of_experience']);
$marital_status  = trim($_REQUEST['marital_status']);
$passcode  = trim($_REQUEST['passcode']);

$mdpass = md5($passcode);

//echo $admin_email;
//exit;

//$q1 = mysqli_query($cn,"select * from doctor where email = '".$email."' ");
$q1 = mysqli_query($cn,"select * from doctor where email = '".trim($email)."' ");

// Perform a query, check for error
if (!$q1)
  {
  echo("Error description: " . mysqli_error($cn));
  exit;
  }

if(mysqli_num_rows($q1) > 0){
		echo "Email Already Exist For Another member";
		exit;
		}
	
// Upload Picture for Question
if(@$_FILES['pic']['name'] != ""){

	$pic = date('YmjHIs');
	move_uploaded_file($_FILES["pic"]["tmp_name"],"personal/doctor/cv/".$pic.".jpg");
	
	}
	else{
		$pic = "";
		}
		
		$mydate = date('D j - m - Y');


	// Upload CV for Question
if(@$_FILES['cv']['name'] != ""){

	$cv = date('mjHIsY');
	move_uploaded_file($_FILES["cv"]["tmp_name"],"personal/doctor/cv/".$cv.".docx");
	
	}
	else{
		$cv = "";
		}
		
		$mydate = date('D j - m - Y');




//$qu = mysqli_query($cn, "insert into hospital(hospital_name,address,year_established,email,Website,phone,state,num_staff,logo,password,date_registered,approved) values('$hospital_name','$address','$year_established','$email','$website','$telephone','$state','$num_of_staff','$pic','$mdpass','$mydate','No')");

$qu = mysqli_query($cn, "insert into doctor(title,surname,other_name,date_of_birth,gender,address,field_type,specialist_type,nationality,state_of_origin,phone_number,email,availability_type,marital_status,state_of_residence,years_experience,educational_qualification,passport,resume,date_registered,approved,password,paid,completed,mdcn_no) 
	values('$title','$surname','$othernames','$date_of_birth','$gender','$address','$contact_type','$specialist_type','$nationality','$state_of_origin','$telephone','$email','$availability_type','$marital_status','$selstateofresidence','$year_of_experience','$educational_qualification','$pic','$cv','$mydate','No','$mdpass','No','No','$mdcn_no')");


if (!$qu)
  {
  echo("Error description: Contact the Administrator"); //mysqli_error($cn));
  exit;
  }



$fullname = $surname . " " .$othernames;

$mail_body = "Dear Dr. ". $fullname . "</br>,
<p style='height:10px;'></p>
<p>Thank you for registering with Medline Locum Agency.  You have now completed the first stage of the 3 stage process of getting on our data base.  Our staff will now start the credentialing process.  This may take a few days, because it is detailed and would include primary source verification of some of the documents submitted, and confidential reports from your referees.  Please inform your referees ahead that we may be contacting them, and that their prompt response will influence the speed of the credentialing process. Once the process is completed, you will be able to pick up any of the jobs on offer, and more!   Meanwhile, feel free to browse through the offers that are currently available for on the jobs board and read some of the exciting articles and frequently asked questions in other areas of the site.   The job board is updated daily and once the credentialing process is done with and an agreement signed, you will be free to pick up any of the offers.  Some assignments come on that are immediately matched to doctors on our data base, and may not come up on the job board.</p>
<p style='height:10px;'></p>
<p>Once again, welcome to the exciting world of Medline Locum Agency, Nigeria’s premier medical locum and permanent placement agency.  For any enquiries or clarifications, you can contact us by phone, text, WhatsApp, or email using the details on the CONTACT US link.</p><p></p>";

//$response = sendCustomMail($cn,$email,'Account Registration Successful',$mail_body);

//$response = sendCustomMail($cn,$admin_email,'New Doctor Registeration','Doctor ' . $fullname. ' Successfully registered on Medline Locum.');




echo "Success";
mysqli_close($cn);

?>