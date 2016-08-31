<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>..:: Medline | Login ::..</title>

    <?php include('partials/css.php');?>

    </head>
    <body>
    	<div id="wrapper"><!-- start main wrapper -->
    	<?php include('partials/header.php');?>


    	<div class="main-page-title"><!-- start main page title -->
			<div class="container">
				<div class="page-title"  style="font-weight: normal;">Login.</div>
			</div>
		</div><!-- end main page title -->


        <div class="main-page-title"><!-- start main page title -->
            <div class="container">
                
                <div class="row">
                    <div class="col-md-5">
                        <div class="form-singin-container">
                            <form role="form">
                                <div class="form-group">
                                    <input type="email" class="form-control input-form" placeholder="Email" id="txtemail">
                                    <div class="singin-aksen"></div>
                                </div>
                                <div class="form-group">
                                <input type="password" class="form-control input-form" placeholder="Password" id="txtpassword">
                                <div class="singin-aksen"></div>
                                
                                </div>

                                <div class="form-group">
                             <!--    <select>
                                    <option value="" class="form-control input-form"> - Select Login type - </option>
                                    <option value="Doctor">Doctor</option>
                                    <option value="Hospital">Hospital</option>

                                </select>
                                    
                                    <div class="singin-aksen"></div> -->
                                <button class="btn btn-default btn-green" id="btnlogin">LOGIN</button> 
                                <div id="animateDiv"></div>
                                
                                </br>
                                </br>
                                <a href="forgot-password.php" class="btn btn-primary">forgot password</a>
                                </div>

                            </form>
                        </div>
                    </div>

                    <div class="col-md-7 singin-page">
                        <h5>Not A Member? Register Now</h5>
                        <p>Register on our site and get the latest jobs on our platform.</p>
                       <!--  <button class="btn btn-default btn-blue">REGISTER</button> -->
                        <div class="row">
                            <div class="col-md-6">
                            <h3>Hospital.</h3>
                                <ul class="style-list-2">
                                <!--     <li>On the other hand, we denounce with </li>
                                    <li>Dislike men who are so beguiled and</li>
                                    <li>Charms of pleasure of the moment</li>
                                    <li>Duty through weakness of will, which is</li>
                                </ul> -->

                               <!-- <button class="btn btn-default btn-blue">REGISTER</button> -->
                            <a href="hospital-signup.php" class="btn btn-default btn-green btn-sm">Hospital signup</a>

                            </div>

                            <div class="col-md-6">
                             <h3>Provider.</h3>
                              <!--   <ul class="style-list-2">
                                    <li>On the other hand, we denounce with </li>
                                    <li>Dislike men who are so beguiled and</li>
                                    <li>Charms of pleasure of the moment</li>
                                    <li>Duty through weakness of will, which is</li>
                                </ul> -->
                           <!-- <button class="btn btn-default btn-blue">REGISTER</button>-->
                            <a href="doctors-signup.php" class="btn btn-default btn-green btn-sm">Doctor signup</a>
                            </div>

<!-- <li><a href="" class="btn btn-default btn-blue btn-sm">REGISTER</a></li> -->



                        </div>
                    </div>
                </div>
            </div>
        </div><!-- end main page title -->




    <?php include('partials/any-query.php');?>  

<?php include('partials/footer.php');?>

</div> <!-- end main wrapper -->
     <script type="text/javascript" src="js/jq/jquery-min1.9.js"></script>
    <?php include('partials/scripts.php');?>
    <script type="text/javascript" src="login-no-captcha.js"></script>
</body>
</html>
