<?php
error_reporting(E_ALL);
ini_set('display_errors', 'on');

session_start();
//echo "ok";

include('../Connections/cn.php');

//$db = mysql_select_db('forum');
$email = trim($_REQUEST['email']);
$pass = trim($_REQUEST['pass']);


$user = stripslashes($user);
$pass = stripslashes($pass);
 $user = mysqli_real_escape_string($cn,$user);
 $pass = mysqli_real_escape_string($cn,$pass);



$mdpass = md5($pass);



$sql_query = "SELECT * from admin_login where email = '".trim($user)."' and password = '".trim($mdpass)."' ";
$check_account = mysqli_query($cn, $sql_query);

if (!$check_account)
  {
  echo("Error description: " . mysqli_error($cn));
  exit;
  }


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



//$_SESSION['login_email'] = $row["email"];


$_SESSION['admin_login_email'] = $row["email"];
$_SESSION['admin_login_name'] = $row["dname"];
$_SESSION['admin_login_id'] = $row["id"];

echo "Success";
}
?>