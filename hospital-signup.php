<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>..:: Medline | Signup ::..</title>

    <?php include('partials/css.php');?>

    
<link rel="stylesheet" href="js/datepicker/css/datepicker.css" />


    </head>
    <body>
    	<div id="wrapper"><!-- start main wrapper -->
    	<?php include('partials/header.php');?>


    	<div class="main-page-title"><!-- start main page title -->
			<div class="container">
				<div class="page-title">Hospital Registration</div>
			</div>
		</div><!-- end main page title -->


<!-- start container -->
        <div class="container">
        <div class="spacer-1">&nbsp;</div>

  
            <div class="row">

                <div class="col-md-8">

                    <form role="form" class="post-job-form">


                            <div class="form-group">
                                <label for="txthostpitalname">Hospital name</label>
                               <input type="text" placeholder="Hospital name" class="form-control input" id="txthostpitalname" />
                            </div>

                            <div class="form-group">
                                <label for="txtaddress">Address</label>
                               <input type="text" placeholder="Address" class="form-control input" id="txtaddress" />
                            </div>

                            <div class="form-group">
                                    <label for="txtaddress">HEFAMAA Number</label>
                               <input type="text" placeholder="Hefamaa Number" class="form-control input" id="txthefamaa" />
                            </div>

                         
                      <div class="row">
                            <div class="form-group col-md-6">
                            <label for="txtsurname">Email</label>
                            <input type="text" placeholder="Email" class="form-control input" id="txtemail" />
                            </div>

                            <div class="form-group col-md-6">
                                <label for="txtotherame">Website  <span> (optional) </span> </label>
                               <input type="text" placeholder="Website" class="form-control input" id="txtwebsite" />
                            </div>
                    </div>

                    
                        <div class="row">
                            

                            <div class="form-group col-md-4">
                                <label for="txttelephone">Telephone 1</label>
                                 <input type="text" placeholder="Telephone" class="form-control input" id="txttelephone" />
                            </div>

                             <div class="form-group col-md-4">
                                <label for="txttelephone">Office Number</label>
                                 <input type="text" placeholder="Telephone 2" class="form-control input" id="txttelephone2" />
                            </div>


                            <div class="form-group col-md-4">
                                <label for="selstateoforigin">State</label>
                                <select class="form-control" id="selstate">
                                <option value="">- Select State -</option>
                                    <!-- <option value="Abia">Abia</option>
                                    <option value="Akwa Ibom">Akwa Ibom</option>
                                    <option value="Adamawa">Adamawa</option>
                                    <option value="Anambra">Anambra</option>
                                    <option value="Bauchi">Bauchi</option>
                                    <option value="Bayelsa">Bayelsa</option>
                                    <option value="Benue">Benue</option>
                                    <option value="Borno">Borno</option>
                                    <option value="Cross River">Cross River</option>
                                    <option value="Delta">Delta</option>
                                    <option value="Ebonyi">Ebonyi</option>
                                    <option value="Edo">Edo</option>
                                    <option value="Ekiti">Ekiti</option>
                                    <option value="Enugu">Enugu</option>
                                    <option value="Gombe">Gombe</option>
                                    <option value="Imo">Imo</option>
                                    <option value="Jigawa">Jigawa</option>
                                    <option value="Kaduna">Kaduna</option>
                                    <option value="Kano">Kano</option>
                                    <option value="Katsina">Katsina</option>
                                    <option value="Kebbi">Kebbi</option>
                                    <option value="Kogi">Kogi</option>
                                    <option value="Kwara">Kwara</option> -->
                                    <option value="Lagos">Lagos</option><!-- 
                                    <option value="Nasarawa">Nasarawa</option>
                                    <option value="Niger">Niger</option>
                                    <option value="Ogun">Ogun</option>
                                    <option value="Ondo">Ondo</option>
                                    <option value="Osun">Osun</option>
                                    <option value="Oyo">Oyo</option>
                                    <option value="Plateau">Plateau</option>
                                    <option value="Rivers">Rivers</option>
                                    <option value="Sokoto">Sokoto</option>
                                    <option value="Taraba">Taraba</option>
                                    <option value="Yobe">Yobe</option>
                                    <option value="Zamfara">Zamfara</option>
                                    <option value="Abuja">Abuja</option>               -->                      
                                </select>
                                </div>
  

                    </div>

                      <div class="row">                            

                            <div class="form-group col-md-4">
                                <label for="txt_contact_name">Contact Name </label>
                                 <input type="text" placeholder="Contact Person" class="form-control input" id="txt_contact_name" />
                            </div>

                             <div class="form-group col-md-4">
                                <label for="txt_contact_phone">Contact Phone</label>
                                 <input type="text" placeholder="Contact Phone" class="form-control input" id="txt_contact_phone" />
                            </div>


                            <div class="form-group col-md-4">
                                <label for="contact_position">Position</label>
                                <select class="form-control" id="contact_position">
                                <option value="">- Select -</option>
                                    <option value="Medical Director">Medical Director</option>  
                                    <option value="Manager">Manager</option>  
                                    <option value="Matron">Matron</option>  
                                    <option value="Other">Other</option>  


                                </select>
                                </div>
  

                    </div>


            
                <div class="form-group">
                            <label for="file_upload_logo">Upload Hospital logo<small>Max. file size: 8 MB.</small></label>
                            <div class="upload">
                                <input type="file" id="file_upload_logo">
                            </div>
                        </div>


               

                <div class="row">
                     <div class="form-group col-md-6">
                                <label for="password">Password</label>
                                 <input type="password" placeholder="*********" class="form-control input" id="txtpassword" />
                    </div>

                     <div class="form-group col-md-6">
                                <label for="confirm_password">Confirm Password</label>
                                 <input type="password" placeholder="*********" class="form-control input" id="txtconfpassword" />
                    </div>

                    <div class="form-group">
                    <input id="terms" type="checkbox" /> <a href="terms-condition.php">By checking this box means you agree to our terms and condition.</a>
                     </div>

                     <div class="form-group">
                        <button class="btn btn-default btn-green" id="btn_register_hospital">Register</button>
                         <div id="animateDiv"></div>
                </div>

                </div>
                      
                    </form>
                    <div class="spacer-2">&nbsp;</div>
                </div>
                
                <div class="col-md-4">
                    <div class="job-side-wrap">
                        <h4>ALREADY HAVE AN ACCOUNT?</h4>
                        <p>
                            <!-- Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search. -->
                        </p>
                             <p class="centering"><a class="btn btn-default btn-green" href="login.php">LOG IN</a></p>
                    </div>

                   <!--  <div class="job-side-wrap">
                        <h4>Post Your Resume</h4>
                        <p>
                            At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti molestias
                        </p>
                        <p class="centering"><button class="btn btn-default btn-black">UPLOAD YOUR RESUME <i class="icon-upload white"></i></button></p>
                    </div>
 -->
                    <div class="job-side-wrap">
                        <h4>Post Jobs on Medline</h4>
                        <p>
                            <!-- At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti molestias -->
                        </p>
                        <p class="centering"><a class="btn btn-default btn-blue" href="faq-hospital.php">Hospital's Faq</a></p>
                    </div>
                </div>
            </div>
        </div>
<!-- End container -->


        <?php include('partials/hey-hospital.php');?>   
<?php include('partials/footer.php');?>


        </div><!-- end wrapper -->
         <script type="text/javascript" src="js/jq/jquery-min1.9.js"></script>
            <?php include('partials/scripts.php');?>
           
            <script type="text/javascript" src="js/datepicker/js/bootstrap-datepicker.js"></script>
            <script type="text/javascript" src="hospital-signup.js"></script>

        </body>

        </html>



