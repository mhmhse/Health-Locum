<?php

error_reporting(E_ALL);
ini_set('display_errors', 'on');

include('../../../Connections/cn.php');
include('../security/security.php');
include('../../../functions/utilityFunction.php');

$doctor_login_id = $_SESSION['doctor_login_id'];
$doctors_details = getDoctorsDetailsById($cn,$doctor_login_id);

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>..:: Medline | Assignment ::..</title>

    <?php include('../../partials/css.php');?>
        
        <link rel="stylesheet" href="//cdn.datatables.net/1.10.7/css/jquery.dataTables.min.css" type="text/css">
        
    </head>
    <body>
    	<div id="wrapper"><!-- start main wrapper -->
    	<?php include('../../partials/doctor-header.php');?>


    	<div class="main-page-title"><!-- start main page title -->
			<div class="container">
				<div class="page-title">View Assignment</div>
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
                               

                               <table id="view_all_assignment">
                              
                               <thead>
                                     <tr>
                                    
                                    <th>Hospital's Name</th>
                                   
                                    <th>Status</th>
                                    <th>Direct Payment</th>
                                  
                                    <th>From</th>
                                    <th>To</th>
                                    <th></th>
                                    
                                </tr>     
                               </thead>    
                                
                                <tfoot>
                                
                                <tr>
                                   
                                    <th>Hospital's Name</th>
                                    <th>Status</th>
                                    <th>Direct Payment</th>
                                    
                                    <th>From</th>
                                    <th>To</th>
                                    <th></th>
                                    
                                </tr>
                                </tfoot>


                                <tbody>


                               <?php

                               $sql = "SELECT * FROM assignment where doctor_id='".$doctor_login_id."' order by id desc";
                                 //$sql = "SELECT * FROM assignment";
                            $result = mysqli_query($cn,$sql);
                            while($assignment = mysqli_fetch_assoc($result)){


$response =  getHospitalDetailsById($cn,$assignment['hospital_id']);
$hospital_name = $response['hospital_name'];


//$doctor_details = getDoctorsDetailsById($cn,$assignment['doctor_id']);
//$doctor_name = $doctor_details['surname'] . "  " . $doctor_details['other_name'];

                                ?>

                                    <tr>
                                        
                                        <td class=" dt-body-left"><?php echo $hospital_name; ?></td>
                                      
                                        <td class=" dt-body-left"><?php echo $assignment['status']; ?></td>
                                        <td class=" dt-body-left"><?php echo $assignment['doctors_wages']; ?></td>
                                       
                                         <td class=" dt-body-left"><?php echo $assignment['date_from']; ?></td>
                                          <td class=" dt-body-left"><?php echo $assignment['date_to']; ?></td>
                                        <td>
                                        <a href="view-single-assignment.php?assignment_id=<?php echo $assignment['id']; ?>" class="waves-effect waves-button"><span><i class="fa fa-info"></i></span><p></p><span class="arrow"></span></a>
                                        </td>


                                    </tr>

                                     <?php
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
            $('#view_all_assignment').DataTable();
        </script>

                </body>
            </html>

