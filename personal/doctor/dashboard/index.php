<?php
header("Location: ../profile/index.php");

session_start();
error_reporting(E_ALL);
ini_set('display_errors', 'on');

include('../../../Connections/cn.php');
include('../security/security.php');
include('../../../functions/utilityFunction.php');

$doctor_login_id = $_SESSION['doctor_login_id'];

//var_dump($_SESSION);

 // $_SESSION['doctor_login_email'] = $row_doctor['email'];
 //     $_SESSION['doctor_login_name'] = $row_doctor['surname'] ." " .$row_doctor['other_name'];
 //     $_SESSION['doctor_login_id_'] = $row_doctor['id'];
 //     $_SESSION['doctor_login_mdcn'] = $row_doctor['mdcn_no'];



?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>..:: Medline |  Dashboard ::..</title>

    <?php include('../../partials/css.php');?>

    </head>
    <body>
    	<div id="wrapper"><!-- start main wrapper -->
    	<?php include('../../partials/doctor-header.php');?>


    	<div class="main-page-title"><!-- start main page title -->
			<div class="container">
				<div class="page-title">Dashboard</div>
			</div>
		</div><!-- end main page title -->


        <div id="page-content" class="content-about"><!-- start content -->
           
                

                <div class="container">
               			 <div class="col-md-12">
                			<div class="spacer-1">&nbsp;</div>
                   			<div class="row clearfix"></div>
               
                        <h6>Doctor Dashboard</h6>


						</div>


        		</div><!-- end container -->

</div><!-- end page content -->

    <?php include('../../partials/footer.php');?>
</div><!-- end wrapper -->
<?php include('../../partials/scripts.php');?>

                </body>
            </html>

