<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
if(!isset($_SESSION['hospital_email_login'])){// || !isset($_SESSION['hospital_hefamaa_login']) || !isset($_SESSION['hospital_id_login']) || !isset($_SESSION['hospital_dname_login']){
	//echo "LOG OUT";
	header("location: ../../../logout.php");
	exit;
}
?>