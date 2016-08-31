<?php
//error_reporting(E_ALL);
//ini_set('display_errors', 'on');

session_start();
//echo "ok";

include('Connections/cn.php');

//$db = mysql_select_db('forum');
$user = trim($_REQUEST['user']);
$pass = trim($_REQUEST['pass']);


$user = stripslashes($user);
$pass = stripslashes($pass);
 $user = mysqli_real_escape_string($cn,$user);
 $pass = mysqli_real_escape_string($cn,$pass);



$mdpass = md5($pass);



$sql_query = "select * from (SELECT email, password, 'doctor' as heading FROM doctor
UNION
SELECT email,password , 'hospital' as heading FROM hospital) as totalMember where email = '".trim($user)."' and password = '".trim($mdpass)."' ";

$check_account = mysqli_query($cn, $sql_query);

if(mysqli_num_rows($check_account) == 0){
		echo "Invalid Email or Password";
		exit;
		}
		else{

// Associative array
$row=mysqli_fetch_array($check_account,MYSQLI_ASSOC);
//printf ("%s (%s)\n",$row["Lastname"],$row["Age"]);

//echo $row["email"];
//echo $row["password"];


$login_type = $row["heading"];
	
	$who_logged_in_email = $row["email"];

	$_SESSION['login_email'] = $row["email"];

//echo $login_type;

if($login_type == "hospital"){

$sql_query_hospital = "select * from hospital where email ='".trim($who_logged_in_email)."' ";

$check_account_hospital = mysqli_query($cn, $sql_query_hospital);

if(mysqli_num_rows($check_account) == 0){
		echo "Invalid Email or Password";
		exit;
		}
		//else{

// Associative array
$row_hospital = mysqli_fetch_array($check_account_hospital,MYSQLI_ASSOC);


	
	if( $row_hospital['paid'] != "Yes"){
		echo "Account is not active. Please pay for the Subscription to continue";
		exit;
	}

	if( $row_hospital['completed'] != "Yes"){
		echo  "Account is not active. Please complete our Agreement form to continue";
		exit;
	}



	$_SESSION['login_type'] = "hospital";

 $_SESSION['hospital_email_login'] = $row_hospital['email'];
 $_SESSION['hospital_hefamaa_login'] = $row_hospital['hefamaa'];
 $_SESSION['hospital_id_login'] = $row_hospital['id'];
  $_SESSION['hospital_dname_login'] = $row_hospital['hospital_name'];


}else{
	


	$sql_query_doctor = "select * from doctor where email ='".trim($who_logged_in_email)."' ";

$check_account_doctor = mysqli_query($cn, $sql_query_doctor);

if(mysqli_num_rows($check_account) == 0){
		echo "Invalid Email or Password";
		exit;
		}
		//else{

// Associative array
$row_doctor = mysqli_fetch_array($check_account_doctor,MYSQLI_ASSOC);

	
	if( $row_doctor['paid'] != "Yes"){
		echo "Account is not active. Please pay for the Subscription to continue";
		exit;
	}

	if( $row_doctor['approved'] != "Yes"){
		echo "Account is not active. Your account needs to be verified before you can continue";
		exit;
	}


	if( $row_doctor['completed'] != "Yes"){
		echo  "Account is not active. Please complete our Agreement form to continue";
		exit;
	}



	 $_SESSION['login_type'] = "doctor";
	 $_SESSION['doctor_login_name'] = $row_doctor['surname'] ." " .$row_doctor['other_name'];
	 $_SESSION['doctor_login_id'] = $row_doctor['id'];
	 $_SESSION['doctor_login_mdcn'] = $row_doctor['mdcn_no'];
	 $_SESSION['doctor_login_email'] = $row_doctor['email'];
}

 // $_SESSION['email_login'] = $dname['email'];
 // $_SESSION['user_login'] = $dname['user'];
 // $_SESSION['dname_login'] = $dname['dname'];

echo $_SESSION['login_type'];
		}

?>