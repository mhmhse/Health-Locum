<?php
session_start();
error_reporting(E_ALL);
ini_set('display_errors', 'on');


include('../../../Connections/cn.php');
include('../security/security.php');
include('../../../functions/utilityFunction.php');

 $hospital_id_login = $_SESSION['hospital_id_login'];

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>..:: Medline | Request ::..</title>

    <?php include('../../partials/css.php');?>
        
        <link rel="stylesheet" href="//cdn.datatables.net/1.10.7/css/jquery.dataTables.min.css" type="text/css">
        
    </head>
    <body>
    	<div id="wrapper"><!-- start main wrapper -->
    	<?php include('../../partials/hospital-header.php');?>


    	<div class="main-page-title"><!-- start main page title -->
			<div class="container">
				<div class="page-title">View Request</div>
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
                               

                               <table id="view_all_request">
                              
                               <thead>
                                     <tr>
                                    
                                    <th>Req. num.</th>
                                    <th>Specialty Needed</th>
                                    <th>State</th>
                                    <th>Shift type</th>                                  
                                    <th>Request type</th>
                                    <th>Area of specialisation</th>
                                    <th>Date Posted</th>
                                    <th></th>
                                    <th></th>
                                </tr>     
                               </thead>    
                                
                                <tfoot>
                                
                                <tr>
                                   
                                     <th>Req. num.</th>
                                    <th>Specialty Needed</th>
                                    <th>State</th>
                                    <th>Shift type</th>                                  
                                    <th>Request type</th>
                                    <th>Area of specialisation</th>
                                    <th>Date Posted</th>
                                    <th></th>
                                    <th></th>
                                </tr>
                                </tfoot>


                                <tbody>


                               <?php

                               $sql = "SELECT * FROM request where hospital_id='".$hospital_id_login."' order by id desc";
                            $result = mysqli_query($cn,$sql);

                            
                            if(mysqli_num_rows($result) == 0){

                                echo "Empty result";
                            }
                            else{

                            while($request = mysqli_fetch_assoc($result)){


//$response =  getHospitalDetailsById($cn,$assignment['hospital_id']);
//$hospital_name = $response['hospital_name'];

//$hospital_name = $response['hospital_name'];


//$doctor_details = getDoctorsDetailsById($cn,$request['id']);
//$doctor_name = $doctor_details['surname'] . "  " . $doctor_details['other_name'];

                                ?>

                                    <tr>
                                        
                                        <td class=" dt-body-left"><?php echo $request['num_of_provider']; ?></td>
                                       <td class=" dt-body-left"><?php echo $request['specialization']; ?></td>
                                        <td class=" dt-body-left"><?php echo $request['state']; ?></td>
                                        <td class=" dt-body-left"><?php echo $request['shift_type']; ?></td>           
                                         <td class=" dt-body-left"><?php echo $request['request_type']; ?></td>
                                          <td class=" dt-body-left"><?php echo $request['job_type']; ?></td>
                                          <td class=" dt-body-left"><?php echo $request['date_posted']; ?></td>
                                        <td>
                                        <a href="view-single-request.php?request_id=<?php echo $request['id']; ?>" class="waves-effect waves-button"><span><i class="fa fa-info"></i></span><p></p><span class="arrow"></span></a>
                                        </td>

                                        <td>
                                        <a href="view-admin-sendback-request.php?request_id=<?php echo $request['id']; ?>" class="waves-effect waves-button"><span><i class="fa fa-reply-all"></i></span><p></p><span class="arrow"></span></a>
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
            $('#view_all_request').DataTable();
        </script>

                </body>
            </html>

