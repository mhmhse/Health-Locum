<?php
session_start();

error_reporting(E_ALL);
ini_set('display_errors', 'on');

include('../../../Connections/cn.php');
include('../security/security.php');
include('../../../functions/utilityFunction.php');

//include('../../functions/utilityFunction.php');
$hospital_id = $_SESSION['hospital_id_login'];
$hospital_details = getHospitalDetailsById($cn,$hospital_id);


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
    	<?php include('../../partials/hospital-header.php');?>


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
                                    
                                   
                                    $doctor_details = getDoctorsDetailsById($cn,$details['doctor_id']);

                                   ?>

                        

                                    <table id="user" class="table table-bordered table-striped" style="clear: both">
                                        <tbody> 

                                           
                                            <tr>   
                                                <td>Name of Doctor </td>
                                                <td><?php echo $doctor_details['surname'] ." " .$doctor_details['other_name']; ?></td>
                                               
                                            </tr>  
                                            <tr>      
                                                <td>Request Link</td>
                                                <td><a href="../request/view-single-request.php?request_id=<?php echo base64_encode($details['request_id']); ?>">Link to request</a></td>
                                            </tr>  
                                           
                                           
                                            <tr>   
                                                <td>Salary</td>
                                                <td><?php echo $details['pay_from_hospital']; ?></td>
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
                                                <td>Start Date </td>
                                                <td><?php echo $details['date_started']; ?></td>
                                            </tr>  
                                            <tr>      
                                                <td>Payment Mode</td>
                                                <td><?php echo $details['payment_mode']; ?></td>
                                            </tr>  
                                            <tr>   
                                                <td>Additional Information</td>
                                                <td><?php echo $details['additional_info']; ?></td>
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
                                    <img src="../logo/<?php echo $hospital_details['logo'];?>.jpg" width="250" height="200">
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

