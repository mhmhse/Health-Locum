<?php
//error_reporting(E_ALL);
//ini_set('display_errors', 'on');

if(isset($_REQUEST['function_name']) && $_REQUEST['function_name'] == "send match"){

	$request_id = $_REQUEST['request_id'];
	$doctor_id = $_REQUEST['doctor_id'];

	send_match_to_db($doctor_id,$request_id);
	//echo "Kapish";
}

function send_match_to_db($doctor_id,$request_id){

include('../../../Connections/cn.php');

//echo "Request ID : ". $request_id . "Doctor ID " . $doctor_id;

	$q1 = mysqli_query($cn,"SELECT * FROM `match_doctor` WHERE doctor_id = '".$doctor_id."' and request_id = '".$request_id."' ");

	// Perform a query, check for error
if (!$q1)
  {
  echo("Error description check : " . mysqli_error($cn));
  exit;
  }

if(mysqli_num_rows($q1) > 0){
		echo "Duplicate";
		exit;
		}

$qu = mysqli_query($cn,"INSERT into `match_doctor`(doctor_id,request_id) values('".$doctor_id."','".$request_id."') ");

if (!$qu)
  {
  echo("Error description put: " . mysqli_error($cn));
  exit;
  }else{
  	# code...
	echo "Success";  
  }


}





//Save Approve doctors to database
if(isset($_REQUEST['function_name']) && $_REQUEST['function_name'] == "save approved match"){

	$request_id = $_REQUEST['request_id'];
	$doctor_id = $_REQUEST['doctor_id'];

	send_approved_doctors_to_db($doctor_id,$request_id);
	//echo "Kapish";
}

function send_approved_doctors_to_db($doctor_id,$request_id){

include('../../../Connections/cn.php');

//echo "Request ID : ". $request_id . "Doctor ID " . $doctor_id;

	$q1 = mysqli_query($cn,"SELECT * FROM `match_doctor` WHERE doctor_id = '".$doctor_id."' and request_id = '".$request_id."' ");

	// Perform a query, check for error
if (!$q1)
  {
  echo("Error description check : " . mysqli_error($cn));
  exit;
  }

if(mysqli_num_rows($q1) > 0){
		$query_update = mysqli_query($cn,"UPDATE `match_doctor` set admin_approved = 'yes' where doctor_id = '".$doctor_id."' and request_id = '".$request_id."' ");

		if (!$query_update)
			  {
			  echo("Error description Update : " . mysqli_error($cn));
			  exit;
			  }

		echo "Update";
		exit;
		}

$qu = mysqli_query($cn,"INSERT into `match_doctor`(doctor_id,request_id,admin_approved) values('".$doctor_id."','".$request_id."','yes') ");

if (!$qu)
  {
  echo("Error description put: " . mysqli_error($cn));
  exit;
  }else{
  	# code...
	echo "Success";  
  }


}



//Send Request doctors to HOspitals
if(isset($_REQUEST['func']) && $_REQUEST['func'] == "send_bulk_request_mail"){


	$doctor_list = $_REQUEST['doctor_list'];
	
	$request_id = $_REQUEST['f_request_id'];

	send_bulk_request_mail($doctor_list, $request_id);
	
}

//send bulk mail to hospitak
function send_bulk_request_mail($doctor_list, $request_id){

	include('../../../Connections/cn.php');
	include('../../../functions/utilityFunction.php');


$doctor_array = json_decode($doctor_list);



$request_details = getRequestDetailsById($cn,$request_id);
$hospital_id = $request_details['hospital_id'];

$hospital_details = getHospitalDetailsById($cn,$hospital_id);
$hospital_email = $hospital_details['email'];


$mail_body_table = "Dear ". $hospital_details['hospital_name'] . ", </br>";
$mail_body_table .= "We are pleased to inform you that we have a doctor matching the requirements in your request.  The details are below: ";
$mail_body_table .= "<p>Please select your Preferred Doctor(s) for assignment</p></br>";

$mail_body_table .= "<p style='height:10px;'></p>";

$mail_body_table .=  "<table width='500px' cellpadding='5' cellspacing='5'>";


$sn = 0;

 foreach($doctor_array as $doctor) { 

 		$sn = $sn + 1;

    $doctor_details = getDoctorsDetailsById($cn,$doctor);

      $doc_surname = $doctor_details['surname'];
      $doc_othername = $doctor_details['other_name'];

      $doc_innitial =  substr($doc_surname, 0,1) . " . " . substr($doc_othername, 0,1);




      $mail_body_table .= "<tr><td>&nbsp;&nbsp;&nbsp;". $sn ."</td><td>&nbsp;&nbsp;&nbsp; Dr. &nbsp;&nbsp;&nbsp; ".$doc_innitial.".</td></tr>";

   }


$mail_body_table .= "</table>";

$mail_body_table .= "<p style='height:10px;'></p>";

$mail_body_table .= "<p>Please indicate in your reply if the doctor is suitable, so that a proper contract can be forwarded to you. Just write ACCEPTED or NOT ACCEPTED.  Further matching candidates can be forwarded if the first candidate is not acceptable.</p>";
$mail_body_table .= "<p style='height:10px;'></p>";

$mail_body_table .= "<p>Yours sincerely.</p>";
$mail_body_table .= "<p style='height:10px;'></p>";

$mail_body_table .= "<p style='height:10px;'></p>";

$mail_body_table .= "<p><a href='http://medline.michaelsodium.com/login.php'>Click Here to Activate your Preferred Doctors from the list</a></p>";

sendCustomMail($cn,$hospital_email,'New Matches from Medline Locum',$mail_body_table);


}

?>