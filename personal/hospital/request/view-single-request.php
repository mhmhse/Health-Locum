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

$request_id = mysqli_real_escape_string($cn,trim($_REQUEST['request_id']));



if($request_id == ""){
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

                                   $details =  getRequestDetailsById($cn,$request_id);
                                    
                                    ?>

                                    <table id="user" class="table table-bordered table-striped" style="clear: both">
                                        <tbody> 

                                           
                                            <tr>   
                                                <td>Number of Doctor </td>
                                                <td><?php echo $details['num_of_provider']; ?></td>
                                               
                                            </tr>                                          
                                           
                                            <tr>   
                                                <td>Grade of Doctor</td>
                                                <td><?php echo $details['specialization']; ?></td>
                                            </tr>    
                                              
                                            <tr>      
                                                <td>State</td>
                                                <td><?php echo $details['state']; ?> </td>
                                            </tr>  
                                            <tr>   
                                                <td> Shift type </td>
                                                <td><?php echo $details['shift_type']; ?></td>
                                            </tr>    

                                             <!-- <tr>   
                                                <td>Years of Experience</td>
                                                <td>Between <?php echo $details['year_of_experience_min']; ?> to <?php echo $details['year_of_experience_max']; ?> Years</td>
                                            </tr>   -->



                                            <!--  <tr>   
                                                <td>Age Range</td>
                                                <td>Between <?php echo $details['age_range_min']; ?> to <?php echo $details['age_range_max']; ?> Years</td>
                                            </tr>   -->


                                               <tr>   
                                                <td>Request Type </td>
                                                <td><?php echo $details['request_type']; ?></td>
                                            </tr>  
                                            <tr>      
                                                <td>Duration From</td>
                                                <td><?php echo $details['duration_from']; ?></td>
                                            </tr>  

                                             <tr>      
                                                <td>Duration To</td>
                                                <td><?php echo $details['duration_to']; ?></td>
                                            </tr>  

                                             <tr>      
                                                <td>Specialization</td>
                                                <td><?php echo $details['job_type']; ?></td>
                                            </tr>  

                                             <tr>   
                                                <td>Date Posted</td>
                                                <td><?php echo $details['date_posted']; ?></td>
                                            </tr>    

                                             <tr>      
                                                <td>Additional Information</td>
                                                <td><?php echo $details['additional_information']; ?></td>
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

