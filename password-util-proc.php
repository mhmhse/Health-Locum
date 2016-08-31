<?php
//error_reporting(E_ALL);
//ini_set('display_errors', 'on');

session_start();
//echo "ok";

include('Connections/cn.php');

$action = trim($_REQUEST['action']);



//send activation link
if($action == "forgot_password"){

	$user = trim($_REQUEST['user']);
$regtype = trim($_REQUEST['regtype']);
$action = trim($_REQUEST['action']);

$user = stripslashes($user);
$regtype = stripslashes($regtype);
 $user = mysqli_real_escape_string($cn,$user);
 $regtype = mysqli_real_escape_string($cn,$regtype);




$user_type = strtolower($regtype);

$query = mysqli_query($cn,"select * from {$user_type} where email ='".$user."' ")
or die(mysqli_error($cn)); 

//$numrows = $query->num_rows(); 

$numrows = mysqli_num_rows($query); 


if ($numrows == 1)
{  

//$code=rand(100,999);


 // $header = 'MIME-Version: 1.0' . "\r\n";
 //  $header .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
 //  $header .= "From: Name <noreply@michaelsodium.com>" . "\r\n";
 //  $fifthp = '-f noreply@michaelsodium.com';


$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type: text/html; charset=iso-8859-1" . "\r\n";
$headers .= "From: mailer@medlinelocum.com" . "\r\n" .
"Reply-To: mailer@medlinelocum.com" . "\r\n" .
"X-Mailer: PHP/" . phpversion();


$activation_key = md5(uniqid('Reset_password_',true));
$message="You activation link is: <a hfref='http://medline.michaelsodium.com/reset-password.php?email=$user&activation_key=$activation_key&user_type=$user_type'>Click this link to Change your Password</a>";
mysqli_query($cn,"update {$user_type} set activation_code='".$activation_key."' where email='$user'");
mail($user, "Forgot Password Link", $message , $headers);

echo "Success";

}
else
{
echo 'No user exist with this email';
exit;
}

}




//change password
if($action == "change_password"){

$password = trim($_REQUEST['password']);
$email = trim($_REQUEST['email']);
$activation_key = trim($_REQUEST['activation_key']);
$user_type = trim($_REQUEST['user_type']);


$password = stripslashes($password);
$email = stripslashes($email);
$activation_key = stripslashes($activation_key);
$user_type = stripslashes($user_type);


 $password = mysqli_real_escape_string($cn,$password);
 $email = mysqli_real_escape_string($cn,$email);
 $activation_key = mysqli_real_escape_string($cn,$activation_key);
 $user_type = mysqli_real_escape_string($cn,$user_type);




$user_type = strtolower($user_type);


$query = mysqli_query($cn,"select * from {$user_type} where email = '$email' and activation_code = '$activation_key' ")
or die(mysqli_error($cn)); 

$numrows = mysqli_num_rows($query); 

if ($numrows == 1)
{  


 $headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type: text/html; charset=iso-8859-1" . "\r\n";
$headers .= "From: successive.testing@gmail.com" . "\r\n" .
"Reply-To: successive.testing@gmail.com" . "\r\n" .
"X-Mailer: PHP/" . phpversion();


$message='Password Successfully Changed';
mysqli_query($cn,"update {$user_type} set password = '".md5($password)."', activation_code = '' where email='".$email."' ");
mail($email, "Password Changed", $message , $headers);

echo "Success";

}
else
{
echo 'Invalid Activation Key, Please try again';
exit;
}

}
?>