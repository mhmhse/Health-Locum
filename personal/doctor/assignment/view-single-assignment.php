<?php
session_start();

error_reporting(E_ALL);
ini_set('display_errors', 'on');

include('../../../Connections/cn.php');
include('../security/security.php');
include('../../../functions/utilityFunction.php');

//include('../../functions/utilityFunction.php');
$doctor_login_id = $_SESSION['doctor_login_id'];
$doctor_details = getDoctorsDetailsById($cn,$doctor_login_id);


?>
<?php

$assignment_id = mysqli_real_escape_string($cn,trim($_REQUEST['assignment_id']));



if($assignment_id == ""){
    header("location: index.php");
    exit;
}


?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>..:: Medline | View SIngle Assignment ::..</title>

    <?php include('../../partials/css.php');?>

    </head>
    <body>
    	<div id="wrapper"><!-- start main wrapper -->
    	<?php include('../../partials/doctor-header.php');?>


    	<div class="main-page-title"><!-- start main page title -->
			<div class="container">
				<div class="page-title">Single Assignment</div>
			</div>
		</div><!-- end main page title -->


        <div id="page-content" class="content-about"><!-- start content -->
           
                

                <div class="container">
               
                <div class="spacer-1">&nbsp;</div>
                    <div class="row clearfix">
                          <div class="col-md-8" > 
                                    <p></p>
                                   
                                   <?php

                                   $details =  getAssignmentDetailsById($cn,$assignment_id);
                                    
                                   
                                    $hospital_details = getHospitalDetailsById($cn,$details['hospital_id']);

                                   ?>

                        

                                    <table id="user" class="table table-bordered table-striped" style="clear: both">
                                        <tbody> 

                                           
                                            <tr>   
                                                <td>Name of Hospital </td>
                                                <td><?php echo $hospital_details['hospital_name']; ?></td>
                                               
                                            </tr>  
                                            
                                            <tr>   
                                                <td>Salary</td>
                                                <td><?php echo $details['doctors_wages']; ?></td>
                                            </tr>    
                                              
                                            <tr>      
                                                <td>Duration From</td>
                                                <td><?php echo $details['date_from']; ?> </td>
                                            </tr>  
                                            <tr>   
                                                <td> Duration To</td>
                                                <td><?php echo $details['date_to']; ?></td>
                                            </tr>    

                                             <tr>   
                                                <td>Shift Type</td>
                                                <td><?php echo $details['shift_type']; ?></td>
                                            </tr>  

                                             <tr>   
                                                <td>Status</td>
                                                <td><?php echo $details['status']; ?></td>
                                            </tr>  


                                               <tr>   
                                                <td>Start Date </td>
                                                <td><?php echo $details['date_started']; ?></td>
                                            </tr>  
                                            <tr>      
                                                <td>Payment Mode</td>
                                                <td><?php echo $details['payment_mode']; ?></td>
                                            </tr>  
                                           
                                             <tr>   
                                                <td>Date Logged</td>
                                                <td><?php echo $details['date_logged']; ?></td>
                                            </tr>    

                                        </tbody>
                                    </table>





                                    </div>



                        <div class="col-md-4">
                        
                            <div class="row">
                                <div class="col-md-12">
                                    <img src="../passport/<?php echo $doctor_details['passport'];?>.jpg" width="250" height="200">
                                </div>
                            </div>

                                <p></p>
                               
                        
                        </div>


                </div><!-- end container -->

</div><!-- end page content -->

    <?php include('../../partials/footer.php');?>
</div><!-- end wrapper -->
<?php include('../../partials/scripts.php');?>

                </body>
            </html>

