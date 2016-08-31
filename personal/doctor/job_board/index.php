<?php
//error_reporting(E_ALL);
//ini_set('display_errors', 'on');

include('../../../Connections/cn.php');
include('../security/security.php');
include('../../../functions/utilityFunction.php');


$doctor_login_id = $_SESSION['doctor_login_id'];
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>..:: Medline | Job Listing ::..</title>

    <?php include('../../partials/css.php');?>
        
        <link rel="stylesheet" href="//cdn.datatables.net/1.10.7/css/jquery.dataTables.min.css" type="text/css">
        
    </head>
    <body>
    	<div id="wrapper"><!-- start main wrapper -->
    	<?php include('../../partials/doctor-header.php');?>


    	<div class="main-page-title"><!-- start main page title -->
			<div class="container">
				<div class="page-title">Job Listing</div>
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

                        <!-- Start -->
                               <?php

                             $sql = "SELECT * FROM request order by id desc limit 0,30";
                                 //$sql = "SELECT * FROM payment";
                            $result = mysqli_query($cn,$sql);

                            if(mysqli_num_rows($result) == 0){

                                echo "Empty result";
                            }
                            else{

                                   //echo '<h4 style="margin-bottom: 25px;margin-top: 25px;"><i class="glyphicon glyphicon-briefcase"></i> Recent Jobs</h4>';

                            while($request = mysqli_fetch_assoc($result)){


$response =  getHospitalDetailsById($cn,$request['hospital_id']);
$hospital_name = $response['hospital_name'];

                                ?>
   

                        <div class="recent-job-list"><!-- Tabs content -->
                               <!--  <div class="col-md-2 job-list-logo">
                                    <img src="images/upload/company-1.png" class="img-responsive" alt="company-logo">
                                </div>
 -->
                                <div class="col-md-3 job-list-desc">
                                    <h6><?php echo $request['num_of_provider'] . " " . $request['specialization']; ?></h6>
                                    <p><?php echo $request['additional_information']; ?></p>
                                </div>
                                
                                 <div class="col-md-1 job-list-location">
                                    <h6>
                                    <!-- <i class="fa fa-map-marker"></i> -->
                                    <?php echo $request['request_type']; ?></h6>
                                </div>

                                <div class="col-md-2 job-list-location">
                                    <h6><i class="fa fa-map-marker"></i><?php echo $request['state']; ?></h6>
                                </div>

                                  <div class="col-md-3 job-list-location">
                                    <h6><i class="fa fa-calendar"></i><?php echo $request['duration_from'] ."  -  " . $request['duration_to']; ?></h6>
                                </div>

                                <div class="col-md-3">
                                    <div class="row">
                                        <div class="col-md-7 job-list-type">
                                            <h6>
                                            <!-- <i class="fa fa-user"></i> -->
                                            <?php echo $request['shift_type']; ?> Shift</h6>
                                        </div>
                                        <div class="col-md-5 job-list-button">
                                            <a class="btn-view-job info_link" href="<?php echo $request['id']; ?>">Apply</a>
                                            <!-- <button class="btn-view-job">View Job</button> -->
                                        </div>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                            </div>



                        <!-- End -->
                          


                                     <?php
                            }
                        }
                                ?>


                        </div>
                        

                    </div><!-- Row -->

                    <div id="animateDiv"></div>



        		</div><!-- end container -->

</div><!-- end page content -->

    <?php include('../../partials/footer.php');?>
</div><!-- end wrapper -->
<?php include('../../partials/scripts.php');?>
<script type="text/javascript" src="apply-job.js"></script>

                </body>
            </html>

