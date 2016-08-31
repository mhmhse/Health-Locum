<?php

//$admin_email = "princesegzy01@gmail.com";

$admin_email = "akeredolujide@yahoo.com";

function limit_text($text, $limit) {
      if (str_word_count($text, 0) > $limit) {
          $words = str_word_count($text, 2);
          $pos = array_keys($words);
          $text = substr($text, 0, $pos[$limit]) . '...';
      }
      return $text;
    }

//echo limit_text('Hello here is a long sentence blah blah blah blah blah hahahaha haha haaaaaa', 5);


//GET hospital by Id
function getHospitalDetailsById($cn,$id){
$sql = "SELECT * FROM hospital where id = '$id' ";
$result = mysqli_query($cn,$sql);
$total_result = mysqli_fetch_array($result);
return $total_result;
}




//GET testimony_hospital by Id
function getTestimonialDetailsById($cn,$id){
$sql = "SELECT * FROM testimony_hospital where id = '$id' ";
$result = mysqli_query($cn,$sql);
$total_result = mysqli_fetch_array($result);
return $total_result;
}




//GET DOCTORS by ID
function getDoctorsDetailsById($cn,$id){
$sql = "SELECT * FROM doctor where id = '$id' ";
$result = mysqli_query($cn,$sql);
$total_result = mysqli_fetch_assoc($result);
return $total_result;
}

//get request by ID
function getRequestDetailsById($cn,$id){
$sql = "SELECT * FROM request where id = '$id' ";
$result = mysqli_query($cn,$sql);
$total_result = mysqli_fetch_assoc($result);
return $total_result;
}


//get request by ID
function getAssignmentDetailsById($cn,$id){
$sql = "SELECT * FROM assignment where id = '$id' ";
$result = mysqli_query($cn,$sql);
$total_result = mysqli_fetch_assoc($result);
return $total_result;
}


//get Payment Details by ID
function getPaymentDetailsById($cn,$id){
$sql = "SELECT * FROM payment where id = '$id' ";
$result = mysqli_query($cn,$sql);
$total_result = mysqli_fetch_assoc($result);
return $total_result;
}



//get all hospital
function getAllHospital($cn){
$sql = "SELECT * FROM hospital";
$result = mysqli_query($cn,$sql);
$total_result = mysqli_fetch_array($result);
return $total_result;
}




//get check doctor on request
function getCheckedApproveMatchDoctorById($cn,$request_id,$doctor_id){
$sql = "SELECT * FROM match_doctor where request_id = '".$request_id."' and doctor_id = '".$doctor_id."' ";
$result = mysqli_query($cn,$sql);
$total_result = mysqli_fetch_array($result);
return $total_result;
}


function sendCustomMail($cn,$user,$subject,$message){

$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type: text/html; charset=iso-8859-1" . "\r\n";
$headers .= "From: Mailer@medlinelocum.com" . "\r\n" .
"Reply-To: Mailer@medlinelocum.com" . "\r\n" .
"X-Mailer: PHP/" . phpversion();


// $activation_key = md5(uniqid('reset_password_',true));
// $message="You activation link is: http://medline.michaelsodium.com/reset-password.php?email=$user&activation_key=$activation_key&user_type=$user_type";
mail($user, $subject, $message , $headers);
}



function sendCustomMail2($cn,$user,$subject,$message){

		//include('../../function/utilityFunction.php');

		//require '../../PHPMailerAutoload.php';


		//include('../../function/utilityFunction.php');

	

		if(file_exists("PHPMailer/PHPMailerAutoload.php")){

			require_once('PHPMailer/PHPMailerAutoload.php');

		}elseif (file_exists("../../../PHPMailer/PHPMailerAutoload.php")) {
			# code...
			@require_once('../../../PHPMailer/PHPMailerAutoload.php');
		}
		

		

		

		$mail = new PHPMailer;

		//$mail->SMTPDebug = 3;                               // Enable verbose debug output

		$mail->isSMTP();                                      // Set mailer to use SMTP
		$mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
		$mail->SMTPAuth = true;                               // Enable SMTP authentication
		$mail->Username = 'princesegzy01@gmail.com';                 // SMTP username
		$mail->Password = 'sagamu2012';                           // SMTP password
		$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
		$mail->Port = 587;                                    // TCP port to connect to

		$mail->From = 'mailer@medlinelocum.com';
		$mail->FromName = 'Medline Locum Agency';
		
		$mail->addAddress($user);

		//$mail->addAddress('princesegzy01@yahoo.com', 'Sodimu Segun Michael');     // Add a recipient

		//$mail->addAddress('ellen@example.com');               // Name is optional
		
		$mail->addReplyTo('mailer@medlinelocum.com', 'Medline Locum Agency');

		//$mail->addCC('cc@example.com');
		//$mail->addBCC('bcc@example.com');

		//$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
		//$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
		$mail->isHTML(true);                                  // Set email format to HTML


		//$message = "I will be THere as soon as possible";

		$mail->Subject = $subject;
		

		//4, Craig Street, Ogudu G.R.A., Ojota, Lagos

		$mail_body = '<table cellpadding="5" cellspacing="5" width="100%">
						<tr bgcolor="lightseagreen"><td height="50"></td></tr>
						<tr><td><img src="http://medline.michaelsodium.com/images/medline-logo.png" width="100" /></td></tr>
						<tr><td><h3>Medline Locum Agency</h3></td></tr>
						<tr><td>'.$message.'</td></tr>
						<tr><td><p>Like us on our Facebook page <a href="https://www.facebook.com/MedlineLocumAgency">MedlineLocumAgency</a>, and follow us on our twitter handle <a href="https://www.twitter.com/MedlineLocumAgency">MedlineLocumAgency</a></p></td></tr>
						<tr><td><p>Medline Locum Team.</p></td></tr>
						<tr bgcolor="lightseagreen" height="50"><td></td></tr>
						<tr><td><a href="http://www.medline.michaelsodium.com">Logon to our website by clicking this Link.</a> </td></tr>
						<tr><td align="center"><p>This message was sent to you because you are a registered member of Medline Locum Agency.</p><p>Medline locume Agency, 4, Craig Street, Ogudu G.R.A., Ojota, Lagos.</p></td></tr>
						</table>';



		//$mail->Body    = 'This is the HTML message body <b>in bold!</b>';

		$mail->Body    =  $mail_body;

		$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

		if(!$mail->send()) {
		    echo 'Message could not be sent.';
		    echo 'Mailer Error: ' . $mail->ErrorInfo;
		} 

		//else {    echo 'Message has been sent';	}

}

?>