<?php

error_reporting(E_ALL);
ini_set('display_errors', 'on');

include('../../../Connections/cn.php');
include('../security/security.php');
include('../../../functions/utilityFunction.php');


$hospital_id =  $_SESSION['hospital_id_login'];
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>..:: Medline | Payments ::..</title>

    <?php include('../../partials/css.php');?>
        
        <link rel="stylesheet" href="//cdn.datatables.net/1.10.7/css/jquery.dataTables.min.css" type="text/css">
        
    </head>
    <body>
    	<div id="wrapper"><!-- start main wrapper -->
    	<?php include('../../partials/hospital-header.php');?>


    	<div class="main-page-title"><!-- start main page title -->
			<div class="container">
				<div class="page-title">View Payments</div>
			</div>
		</div><!-- end main page title -->


        <div id="page-content" class="content-about"><!-- start content -->
           
                

                <div class="container"> <!-- container -->
               			 <div class="col-md-12"> <!-- col-12-->
                			<div class="spacer-1">&nbsp;</div>
                   			<div class="row clearfix"></div>
               
                    </div> <!-- col md 12-->


                        <div class="row"><!-- class row -->

             
                        <div class="col-md-12">
                               

                               <table id="view_all_payment">
                              
                               <thead>
                                     <tr>
                                    
                                    <th>Doctor's Name</th>
                                    <th>Assignment link</th>
                                    <!-- <th>Amount expected</th> -->
                                    <th>Amount Paid</th>                                  
                                    <th>Transaction type</th>
                                    <th>Month paid for</th>
                                
                                    <th>Date Paid</th>
                                    <th></th>
                                </tr>     
                               </thead>    
                                
                                <tfoot>
                                
                                <tr>
                                   
                                    <th>Doctor's Name</th>
                                    <th>Assignment link</th>
                                    <!-- <th>Amount expected</th> -->
                                    <th>Amount Paid</th>                                  
                                    <th>Transaction type</th>
                                    <th>Month paid for</th>
                                    <th>Date Paid</th>
                                    
                                    <th></th>
                                </tr>
                                </tfoot>


                                <tbody>


                               <?php

                               $sql = "SELECT * FROM payment WHERE hospital_id = '".$hospital_id."' order by id desc";
                            $result = mysqli_query($cn,$sql);

                            

                            if(mysqli_num_rows($result) == 0){

                                echo "Empty result";
                            }
                            else{

                            while($payment = mysqli_fetch_assoc($result)){


//$response =  getHospitalDetailsById($cn,$assignment['hospital_id']);
//$hospital_name = $response['hospital_name'];

//$hospital_name = $response['hospital_name'];


$doctor_details = getDoctorsDetailsById($cn,$payment['doctor_id']);
$doctor_name = $doctor_details['surname'] . "  " . $doctor_details['other_name'];

                                ?>

                                    <tr>
                                        
                                        <td class=" dt-body-left"><?php echo $doctor_name; ?></td>
                                        <td class=" dt-body-left"><a href="../assignment/view-single-assignment.php?assignment_id=<?php echo $payment['assignment_id']; ?>">assignment page</a></td>
                                        <!-- <td class=" dt-body-left"><?php //echo $payment['amount_expected_hospital']; ?></td> -->
                                        <td class=" dt-body-left"><?php echo $payment['amount_paid_hospital']; ?></td>
                                        <td class=" dt-body-left"><?php echo $payment['transaction_type_hospital']; ?></td>
                                        <td class=" dt-body-left"><?php echo $payment['month_paid_for']; ?></td>
                                        <td class=" dt-body-left"><?php echo $payment['date_paid_hospital']; ?></td>
                                        
                                        <td>
                                        <a href="view-single-payment.php?payment_id=<?php echo $payment['id']; ?>" class="waves-effect waves-button"><span><i class="fa fa-info"></i></span><p></p><span class="arrow"></span></a>
                                        </td>
                                    </tr>

                                     <?php
                            }
                        }
                                ?>

                                </tbody>
                           


                               </table>




                        </div>
                        

                    </div><!-- Row -->





        		</div><!-- end container -->

</div><!-- end page content -->

    <?php include('../../partials/footer.php');?>
</div><!-- end wrapper -->
<?php include('../../partials/scripts.php');?>
<script type="text/javascript" src="//cdn.datatables.net/1.10.7/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript">
            $('#view_all_payment').DataTable();
        </script>

                </body>
            </html>

