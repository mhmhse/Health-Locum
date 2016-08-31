<?php
session_start();

error_reporting(E_ALL);
ini_set('display_errors', 'on');

include('../../../Connections/cn.php');
include('../security/security.php');
include('../../../functions/utilityFunction.php');

//include('../../functions/utilityFunction.php');

$hospital_id =  $_SESSION['hospital_id_login'];


$hospital_details = getHospitalDetailsById($cn,$hospital_id);


?>
<?php

$payment_id = mysqli_real_escape_string($cn,trim($_REQUEST['payment_id']));



if($payment_id == ""){
    header("location: index.php");
    exit;
}


?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>..:: Medline | View Single Payment ::..</title>

    <?php include('../../partials/css.php');?>

    </head>
    <body>
    	<div id="wrapper"><!-- start main wrapper -->
    	<?php include('../../partials/hospital-header.php');?>


    	<div class="main-page-title"><!-- start main page title -->
			<div class="container">
				<div class="page-title">Single Payment</div>
			</div>
		</div><!-- end main page title -->


        <div id="page-content" class="content-about"><!-- start content -->
           
                

                <div class="container">
               
                <div class="spacer-1">&nbsp;</div>
                    <div class="row clearfix">
                          <div class="col-md-8" > 
                                    <p></p>
                                   
                                   <?php

                                   $details =  getPaymentDetailsById($cn,$payment_id);
                                    
                                   
                                   $doctor_details = getDoctorsDetailsById($cn,$details['doctor_id']);

                                   ?>

                        

                                    <table id="user" class="table table-bordered table-striped" style="clear: both">
                                        <tbody> 

                                           
                                            <tr>   
                                                <td>Name of Doctor </td>
                                                <td><?php echo $doctor_details['surname'] . "  " . $doctor_details['other_name']; ?></td>
                                               
                                            </tr>  
                                            
                                            <tr>   
                                                <td>Salary</td>
                                                <td><?php echo $details['amount_expected_hospital']; ?></td>
                                            </tr>    

                                            <tr>   
                                                <td>Amount paid</td>
                                                <td><?php echo $details['amount_paid_hospital']; ?></td>
                                            </tr>    
                                              
                                            <tr>      
                                                <td>Month Paid For</td>
                                                <td><?php echo $details['month_paid_for']; ?> </td>
                                            </tr>  


                                             <tr>      
                                                <td>Payment type</td>
                                                <td><?php echo $details['transaction_type_hospital']; ?> </td>
                                            </tr>  

                                             <tr>      
                                                <td>Bank details</td>
                                                <td><?php echo $details['bank_name_hospital']; ?> </td>
                                            </tr>  

                                             <tr>      
                                                <td>Reference Number</td>
                                                <td><?php echo $details['refrence_number_hospital']; ?> </td>
                                            </tr>  



                                            <tr>   
                                                <td> Date of Payment</td>
                                                <td><?php echo $details['date_paid_hospital']; ?></td>
                                            </tr>    

                                             <tr>   
                                                <td>Additional Information</td>
                                                <td><?php echo $details['additional_info_hospital']; ?></td>
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

