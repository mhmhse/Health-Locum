<?php

if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

//var_dump($_SESSION['doctor_login_email']);

if(!isset($_SESSION['doctor_login_id'])){// || !isset($_SESSION['hospital_hefamaa_login']) || !isset($_SESSION['hospital_id_login']) || !isset($_SESSION['hospital_dname_login']){
	//echo "LOG OUT";
	header("location: ../../../logout.php");
	exit;
}


?>