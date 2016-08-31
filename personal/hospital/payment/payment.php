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
    header("location: ../assignment/index.php");
    exit;
}


?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>..:: Medline | Payment ::..</title>

    <?php include('../../partials/css.php');?>
    <link rel="stylesheet" href="../../../js/datepicker/css/datepicker.css" />
   
<style type="text/css">
    .pheight{
        height:70px;
    }
</style>


    </head>
    <body>
    	<div id="wrapper"><!-- start main wrapper -->
    	<?php include('../../partials/hospital-header.php');?>


    	<div class="main-page-title"><!-- start main page title -->
			<div class="container">
				<div class="page-title">Payment</div>
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

                                    <!-- <form role="form"> -->
                                        
                                        <div class="row">
                                            <div class="col-md-12">
                                                <label>Doctor's Name</label>
                                                <label class="form-control"><?php echo $doctor_details['surname'] ." " .$doctor_details['other_name']; ?></label>

                                                <input type="hidden" id="hid_assignment_id" value="<?php echo $assignment_id; ?>">
                                            </div>
                                         
                                            <!-- <p class="pheight"></p>

                                             <div class="col-md-12" style="display:none;">
                                                <label>Salary</label>
                                                <label class="form-control"><?php //echo $details['pay_from_hospital']; ?></label>
                                            </div>
 -->
                                               <p class="pheight"></p>

                                            <div class="col-md-12">
                                                <label>Amount Paid</label>
                                               <input type="text" class="form-control" readonly="readonly" value="<?php echo $details['pay_from_hospital']; ?>" placeholder="Amount Paid" id="txt_amount_paid">
                                            </div>
                                           

                                             <p class="pheight"></p>

                                        <div class="col-md-12">
                                            <label>Month Paid for</label>
                                            <input type="text" class="form-control" placeholder="Month Paid for" id="txt_month_paid">
                                            </div>





                                            <p class="pheight"></p>
                                            
                                             <div class="col-md-12">
                                                <label>Payment Type</label>
                                                <select id="payment_type" class="form-control">
                                                    <option value="">- Select payment type -</option>
                                                    <option value="Bank Transfer">Bank Transfer</option>
                                                    <option value="Cash">Cash</option>                                                 
                                                </select>
                                            </div>

                                          <p class="pheight"></p>

                                            <div class="col-md-12" id="div_name_account">
                                                <label>Bank Name, Account Name & Account Number</label>
                                               <input type="text" class="form-control" placeholder="Bank name" id="txt_bank_name">
                                            </div>

                                          
                                             <p class="pheight"></p>

                                         
                                             <div class="col-md-12" id="div_reference_number">
                                                <label id="lbl_reference_number">Reference number</label>
                                                 <input type="text" class="form-control" placeholder="Reference Number" id="txt_refrence_number">
                                            </div>

                                                <p class="pheight"></p>

                                            <div class="col-md-12" id="div_additional_info">
                                                <label>Additional Information</label>
                                                <textarea  rows="7" class="form-control" id="additional_information"></textarea>
                                            </div>

                                            <p class="pheight"></p>

                               
                                             <div class="col-md-12">
                                             </br>
                                                <button id="btn_pay_doctor_assignment" class="btn btn-large btn-primary">Pay Now</button>
                                            </div>
                                            
                                        </div>

                                        <p class="pheight"></p>
                                        <p class="pheight"></p>

                                    <!-- </form> -->

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
<script type="text/javascript" src="../../../js/datepicker/js/bootstrap-datepicker.js"></script>
<script type="text/javascript" src="payment-js.js"></script>

                </body>
            </html>

