<?php  

include('Connections/cn.php');
include('functions/utilityFunction.php');


?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>..:: Medline | Testimonials ::..</title>

    <?php include('partials/css.php');?>


    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,700' rel='stylesheet' type='text/css'>

	<link rel="stylesheet" href="css/reset.css"> <!-- CSS reset -->
	<link rel="stylesheet" href="css/style.css"> <!-- Resource style -->
	<script src="js/modernizr.js"></script> <!-- Modernizr -->


    </head>
    <body>
    	<div id="wrapper"><!-- start main wrapper -->
    	<?php include('partials/header.php');?>
    	
    
    	<div class="main-page-title" ><!-- start main page title -->
			<div class="container">
				<div class="page-title" style="font-weight: normal;">TESTIMONIALS</div>
			</div>
		</div><!-- end main page title -->
<!-- 
			<div class="fixed-header-image">
				<img src="images/upload/doctors.jpg">
			</div>
 -->



		<div class="recent-job" style="min-height: 290px;"><!-- Start Recent Job -->
			<div class="container">
				<div class="row">
					<div class="col-md-8 content-box">
					<p></p>
					<p></p>
					<p></p>

					<?php 

                               $sql = "SELECT * FROM testimony_hospital where admin_posted='Yes'order by id desc limit 0, 10";
                            $result = mysqli_query($cn,$sql);

                            
                            if(mysqli_num_rows($result) == 0){

                                echo "Empty result";
                            }
                            else{

                                $sn = 0;
                            while($request = mysqli_fetch_assoc($result)){
                                
                                $sn++;

$response =  getHospitalDetailsById($cn,$request['hospital']);
$hospital_name = $response['hospital_name'];


$testimony = $request['updated_testimony'];

                                ?>
 
                           			


                                <div class="panel panel-success">
									  <div class="panel-heading">
									    <h3 class="panel-title"><?php echo $hospital_name; ?></h3>
									  </div>
									  <div class="panel-body">
									   <?php echo $testimony; ?>
									  </div>
									   <div class="panel-footer"></div>
								</div>

                                     <?php
                            }
                        }
                                ?>

                                </div>


					 <div class="col-md-4">	
					 


					 </div>

				</div>
			</div>
		</div>

		
		




		<?php include('partials/any-query.php');?>
    
		<?php include('partials/footer.php');?>










		</div><!-- End main wrapper  -->

		<?php include('partials/scripts.php');?>
    </body>
    </html>
