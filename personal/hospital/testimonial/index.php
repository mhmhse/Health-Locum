 <?php
session_start();
//error_reporting(E_ALL);
//ini_set('display_errors', 'on');

include('../../../Connections/cn.php');
include('../security/security.php');
include('../../../functions/utilityFunction.php');

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>..:: Medline | Testimonials ::..</title>

    <?php include('../../partials/css.php');?>
      
    </head>
    <body>
    	<div id="wrapper"><!-- start main wrapper -->
    	<?php include('../../partials/hospital-header.php');?>


    	<div class="main-page-title"><!-- start main page title -->
			<div class="container">
				<div class="page-title">Submit Testimonial</div>
			</div>
		</div><!-- end main page title -->


        <div id="page-content" class="content-about"><!-- start content -->
           
                

                <div class="container">
               
                <div class="spacer-1">&nbsp;</div>
                    <div class="row clearfix">
                        <div class="col-md-8">
                                <h6>Fill the form below to send us your feedback. </h6>

                                <div class="row">
                                        <div class="form-group col-md-12">
                                            <label for="txtsurname">Your Comments</label>
                                            <textarea class="form-control" id="hospital_testimony" rows="10"></textarea>
                                        </div>


                                        <div class="form-group col-md-12">
                                            <button class="btn btn-default btn-green" id="btn_send_testimonial">Send Testimonial</button>
                                            <div id="animateDiv"></div>
                                        </div>


                                </div>



                               
                        </div>

                        <div class="col-md-4">
                        <h6></h6>

                        </div>


                </div><!-- end container -->

</div><!-- end page content -->

    <?php include('../../partials/footer.php');?>
</div><!-- end wrapper -->
<?php include('../../partials/scripts.php');?>
<script type="text/javascript" src="send-testimony.js"></script>
 </body>
            </html>

