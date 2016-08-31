<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>..:: Medline | Contact Medline ::..</title>

    <?php include('partials/css.php');?>

    </head>
    <body>
    	<div id="wrapper"><!-- start main wrapper -->
    	<?php include('partials/header.php');?>


    	<div class="main-page-title"><!-- start main page title -->
			<div class="container">
				<div class="page-title">Contact Medline</div>
			</div>
		</div><!-- end main page title -->


        <div id="page-content"><!-- start content -->
            <div class="content-about">
                <div class="container-fluid full">
                    <div id="page">
                        <div class="location"></div>
                    </div>
                </div>
                

                <div class="container">
<!-- start simple hack -->
                <div class="row" style="margin-top:15px;"> 
                <div class="col-md-8">

                <p></p>
                    <p></p>
                    </br>


                    <!-- <h1>Contact Form.</h1> -->
                      <form role="form" class="" id="contact_form" method="post" name="contact_form" action="contact-send.php">
                        <div class="form-group col-md-4">
                            <label>Name</label>
                            <input type="text" class="form-control name" name="name" id="name">
                        </div>

                        <div class="form-group col-md-4">
                            <label>Email</label>
                            <input type="text" class="form-control email" name="email" id="email" >
                        </div>

                        <div class="form-group col-md-4">
                            <label>Tel</label>
                            <input type="text" class="form-control phone" name="phone" id="phone">
                        </div>

                        <!--
                        <div class="form-group col-md-4">
                            <label>Website</label>
                            <input type="text" class="form-control website" name="web" id="web">
                        </div>
                        -->
                        <div class="form-group col-md-12">
                            <label>Subject</label>
                            <input type="text" class="form-control subject" name="subject" id="subject">
                        </div>

                        <div class="form-group col-md-12">
                            <label>Message</label>
                            <textarea class="form-control message" rows="8" id="message" name="message"></textarea>

                            <button class="btn btn-default btn-green" type="submit" name="submit" id="submit">SEND MESSAGE</button>
                            
                        </div>
                        <div class="clearfix"></div>
                    </form>

                     </div>


                  <div class="col-md-4" style="font-size:14px; ">

                      <p></p>
                        <p></p>
                        </br>

                    <h3>Contact details.</h3>

                    <li style="list-style:none;"><i class="fa fa-home"></i>&nbsp;&nbsp;4, Craig street, Ogudu G.R.A., Lagos, Nigeria.</li>
                    </br>
                    <li style="list-style:none;"><i class="fa fa-phone-square"></i> &nbsp;&nbsp; 08028811242, 08028811240</li>
                     </br>
                    <li style="list-style:none;"><i class="fa fa-envelope"></i> &nbsp;&nbsp; enquiries@medlinelocum.com</li>

                            
                </div>
                </div>
                <!-- End simple hack-->





                    <div class="spacer-2">&nbsp;</div>
                    <div class="row clearfix">
                        <div class="col-md-6 about-post-resume">
                            <h4>Post Your Resume</h4>
                            <!-- <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias</p> -->
                            <!-- <p><button class="btn btn-default btn-black">UPLOAD YOUR RESUME <i class="icon-upload white"></i></button></p> -->
                            <p><a href="login.php" class="btn btn-default btn-black">UPLOAD YOUR RESUME <i class="icon-upload white"></i></a></p>
                        </div>
                        <div class="col-md-6 about-post-job">
                            <h4>Post Job Now</h4>
                            <!-- <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias</p> -->
                            <!-- <p><button class="btn btn-default btn-green">POST A JOB NOW</button></p> -->
                            <p><a href="login.php" class="btn btn-default btn-green">POST A JOB NOW</a></p>
                        </div>
                    </div>
                    <div class="spacer-2">&nbsp;</div>
                </div>
                
             

                <?php include('partials/any-query.php');?>


            </div><!-- end content -->
        </div><!-- end page content -->









<?php include('partials/footer.php');?>

        </div><!-- end wrapper -->
        <script src="http://maps.googleapis.com/maps/api/js"></script>
            <?php include('partials/scripts.php');?>

</body>
</html>
