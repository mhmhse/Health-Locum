<?php

error_reporting(E_ALL);
ini_set('display_errors', 'on');

include('Connections/cn.php');
include('functions/utilityFunction.php');

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>..:: Medline | Welcome to Medline Locum  Agency ::..</title>

    <?php include('partials/css.php');?>


    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,700' rel='stylesheet' type='text/css'>

	<link rel="stylesheet" href="css/reset.css"> <!-- CSS reset -->
	<link rel="stylesheet" href="css/style.css"> <!-- Resource style -->
	<script src="js/modernizr.js"></script> <!-- Modernizr -->


    </head>
    <body>
    	<div id="wrapper"><!-- start main wrapper -->
    	<?php include('partials/header.php');?>
    	

    	<?php include('partials/back-up-slider.php');?>
    
    	<!-- Start Recent Job -->
    		<div class="recent-job">
				<div class="container">
					<div class="row">

						<div class="col-md-12 content-box">
							<div class="page-header">Welcome to Medline Locum Agency, Nigeria’s Premier Locum Tenens Agency.</div>

								<p>
									<strong>Medline Locum Agency</strong> is the nation’s premier medical locum tenens and permanent placement staffing agency.  We take care of the temporary medical staffing needs of hospitals and other medical establishments.   Before the end of 2015, we plan to include other areas of healthcare staffing, including nursing, laboratory, administrative, and all other areas in the healthcare industry. 
								</p>

								<P>
									<strong>What is Locum Tenens?</strong></br>
									The definition of locum tenens, roughly translated from Latin, means “to hold the place of” or “to substitute for”.  Locum tenens physicians fill in for other physicians on a temporary basis for a range of a few days to up to six months or more. When a healthcare employer faces temporary staffing shortages due to vacancies, illness, or other causes, they hire locum tenens physicians and other part-time clinicians to fill those vacancies and maintain patient care quality. 
								</P>

								<p>
									<strong>Why use Locum Tenens Physicians?</strong></br>
									Supplemental healthcare professionals are needed for a variety of reasons: 
		
									<ul style="style-list-4">
									  <li>To fill in for a staff member who is absent due to illness, casual leave, maternity leave, etc.</li>
									  <li>To cover while physicians attend training courses or exams.</li>
									  <li>To supplement regular staff during busy seasons.</li>
									  <li>To staff facilities while permanent doctors are being recruited.</li>
									  <li>As an integral part of your master staffing plan.</li>
									</ul>

								</p>

								<div class="page-header">The Medline Advantage!</div>

								<p style="text-align:justify;">
									Using some of the most innovative recruiting technology available in the industry, Medline Physician Resources unit offers clients hospitals access to the most qualified and talented physicians from across the nation. When you contact Medline Locum Agency, our Client Service Managers will take the valuable time necessary to learn about your practice or facility, and understand the specific staffing challenges that you face. Then, using our experience gained from helping countless practices and facilities in many different areas of specialization, we will work with you to customize a service plan that is designed to meet your physician staffing expectations and goals.
								</p>

								
								<P>
									Please read some of the articles on our website and register by clicking the "REGISTER” tab on the top right hand corner.  Registration takes less than five minutes, and we will contact you within 24 hours.  You can register as a hospital or as a doctor.  Either way, this opens the door to a world of new possibilities.
								</p>



							</div>

						</div>
					</div>
			</div>






		<!-- content -->
			<div class="content-about-center">
				<div class="container">
					<h2 class="big-title" style="font-weight: lighter;">3 SIMPLE STEPS TO GETTING ON THE MEDLINE LOCUM DATA BASE</h2>
					<hr/>
					<div class="spacer-2">&nbsp;</div>
					<div class="row clearfix">
						<div class="col-md-4">
							<p class="centering"><img src="images/step-icon-2.png" class="center-img" alt="icon-post-job" /></p>
							<h6>REGISTRATION</h6>
							<p style="font-weight: lighter;line-height: 1.5;text-align: justify;font-size:14px;">
								Register online on our website.  This is the easiest way to start the process. You may also contact us and give us your details and our staff will help you start the process.  We will then send you our full application form which you can return with copies of your documents. Most of the things in the application form should be found in a standard CV.  Additional information like periods of availability and Bank details will complete the application.  Medline staff will be able to help you if you have any difficulty.
							</p>
						</div>
							
						<div class="col-md-4">
							<p class="centering"><img src="images/step-icon-1.png" class="center-img" alt="icon-post-job" /></p>
							<h6>CREDENTIALING</h6>
							<p style="font-weight: lighter;line-height: 1.5;text-align: justify;font-size:14px;">
								We do a very rigorous cross checking of the information we receive from potential providers, including primary source verification of all certificates and licences, getting confidential reports from referees etc.    This is to make sure we meet the high standards required by our client hospitals.  
								We may also need to see your original documents in order to verify these against those documents we currently hold. This process will take no more than 30 minutes and enhances your chances of getting locum assignments. This requirement may be waived for certain well credentialed professionals. 
							</p>
						</div>

						<div class="col-md-4">
							<p class="centering"><img src="images/icon-about-page-3.png"  alt="icon-post-job" /></p>
							<h6>AGREEMENT</h6>
							<p style="font-weight: lighter;line-height: 1.5;text-align: justify;font-size:14px;">
								Providers who have gone through the credentialing process will have to sign an agreement with Medline, after reading and accepting the terms and conditions.  To be registered and undertake assignments with Medline, doctors are required to accept our Terms and Conditions and comply with our Code of Conduct.
							</p>								
						</div>
					</div>
				
				</div>
			</div>
			<!-- content -->



			<div class="job-status" id="recents-job">
				<div class="container">
						
					<div class="col-md-12"> 
						
						<h4 style="margin-bottom: 25px;margin-top: 25px;"><i class="glyphicon glyphicon-briefcase"></i> Recent Jobs</h4>
						

						 <?php

                             $sql = "SELECT * FROM request order by id desc limit 0,10";
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
   

							<div class="recent-job-list-home" style="background-color:white;">
								<div class="col-md-6 job-list-desc">
									<!-- <h6>Gynacologist </h6> -->
									<h6><?php echo $request['num_of_provider'] . " " . $request['specialization']; ?></h6>
								</div>
									
								<div class="col-md-5 full">
									<div class="row">
										<div class="job-list-location col-md-7 ">
											<h6><i class="fa fa-map-marker"></i><?php echo $request['state']; ?></h6>
										</div>
										<div class="job-list-type col-md-5 ">
											<h6>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a class="btn btn-success" href="login.php">Apply now</a></h6>
										</div>
									</div>
								</div>
								<div class="clearfix"></div>
							</div>
                  <?php
                            }
                        }
                                ?>





						<!--<div id="tab-container" class="tab-container" data-easytabs="true">
						
							<ul class="etabs clearfix">
								<li class="tab active"><a href="#all" class="active">Available Jobs on Medline</a></li>
							</ul>
							
						</div> -->
					</div> 

					</div>
			</div>


			</br>
			</br>
			</br>

			<!-- <p></p>
			<p></p>
			<p></p>
 -->
		<?php include('partials/footer.php');?>


		</div><!-- End main wrapper  -->

		<?php include('partials/scripts.php');?>
    </body>
    </html>
