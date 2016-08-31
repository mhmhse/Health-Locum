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
				<div class="page-title"  style="font-weight: normal;">Provider's Registration Page</div>
			</div>
		</div><!-- end main page title -->


<!-- start container -->
        <div class="container">
        <div class="spacer-1">&nbsp;</div>

  
            <div class="row">

                <div class="col-md-8">

                    <form role="form" class="post-job-form">




                      <div class="row">

                              <div class="form-group col-md-4">
                                <label for="seltitle">Title</label>
                                <select class="form-control" id="seltitle">
                                <option value="">- Select Title -</option>
                                    <option value="Mr">Mr</option>
                                    <option value="Mrs">Mrs</option>
                                    <option value="Mrs">Mrs</option>
                                    <option value="Dr">Dr</option>
                                    
                                </select>
                            </div>


                            <div class="form-group col-md-4">
                            <label for="txtsurname">Surname</label>
                            <input type="text" placeholder="Surname" class="form-control input" id="txtsurname" />
                            </div>

                            <div class="form-group col-md-4">
                                <label for="txtotherame">Other names</label>
                               <input type="text" placeholder="Other names" class="form-control input" id="txtotherame" />
                            </div>
            </div>

            <div class="row">
                            <div class="form-group col-md-4">
                                <label for="selgender">Gender </label>
                                <select class="form-control" id="selgender">
                                    <option value=""> - Select your gender - </option>
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                </select>
                            </div>

                            <div class="form-group col-md-4">
                                <label for="txtdateofbirth">Date of Birth</label>
                                <input type="text" placeholder="Date of birth" class="form-control input" id="txtdateofbirth" />
                            </div>

                            <div class="form-group col-md-4">
                                <label for="txttelephone">Telephone</label>
                                 <input type="text" placeholder="Telephone" class="form-control input" id="txttelephone" />
                            </div>
                    </div>


                      <div class="row">
                            <div class="form-group col-md-8">
                                <label for="txtemail">Email</label>
                                <input type="email" placeholder="Email address" class="form-control input" id="txtemail" />
                            </div>

                            
                             <div class="form-group col-md-4">
                                <label for="selstateofresidence">State of residence</label>
                               <select class="form-control" id="selstateofresidence">
                                <option value="">- Select State -</option>
                                  
                                    <option value="Lagos">Lagos</option>                                                   
                                </select>
                            </div>

                    </div>

                     <div class="form-group">
                            <label for="txtaddress">Address</label>
                            <input class="form-control input" placeholder="Address" id="txtaddress" />
                    </div>



                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="selnationality">Nationality </label>
                                <select class="form-control" id="selnationality">
                                    <option value="">- Select Nationality -</option>
                                    <option value="Nigeria">Nigeria</option>
                                </select>
                            </div>

                            <div class="form-group col-md-6">
                                <label for="selstateoforigin">State of Origin</label>
                                <select class="form-control" id="selstateoforigin">
                                <option value="">- Select State -</option>
                                    <option value="Abia">Abia</option>
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
                                    <option value="Lagos">Lagos</option>
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
                                    <option value="Abuja">Abuja</option>                                   
                                </select>
                                </div>
  
                          
            </div>


                         <div class="row">
                            <div class="form-group col-md-6">
                                <label for="educational_qualification">Educational qualification</label>
                                <select class="form-control" id="educational_qualification">
                                  <option value="">- Select -</option>
                                    <option value="MBBS">MBBS</option>
                                    <option value="Fellowship">Fellowship</option>
                                    <option value="Diploma">Diploma</option>
                                </select>
                            </div>


                            

                         <div class="form-group col-md-6">
                                <label for="">Marital Status</label>
                                <select class="form-control" id="marital_status">
                                  <option value="">- Select Marital Status -</option>
                                    <option value="Single">Single</option>
                                    <option value="Married">Married</option>
                                    <option value="Divorced">Divorced</option>
                                </select>
                            </div>

                </div>



                         <div class="row">
                           
                            <div class="form-group col-md-4">
                 
                                <label for="sel_availability_type">Availability </label>
                                <select class="form-control" id="sel_availability_type">
                                    <option value=""> - Select - </option>
                                    <option value="All Day">All Day</option>
                                    <option value="Morning">Morning</option>
                                    <option value="Evening">Evening</option>
                                    <option value="Mini">Mini (for specialists)</option>
                                    <option value="Night">Night</option>
                                </select>
                            </div>

                            <div class="form-group col-md-4">
                               <!--  <label for="selcontact_type">Cadre of Doctors : </label> -->
                                <label for="selcontact_type">Provider type : </label>

                                <select class="form-control" id="selcontact_type">
                                    <option value=""> - Select - </option>
                                    <option value="Medical Officer">Medical Officer</option>
                                    <option value="Senior Medical Officer">Senior Medical Officer</option>
                                    <option value="Specialist">Specialist</option>


                                      <option value="Nurse">Nurse</option>
                                      <option value="Pharmacist">Pharmacist</option>
                                      <option value="Laboratory Scientist">Laboratory Scientist</option>
                                      <option value="Record Officer">Record Officer</option>
                                      <option value="HMO Officer">HMO Officer</option>
                                      <option value="Hospital Manager">Hospital Manager</option>
                                      <option value="Accountants">Accountants</option>





                                </select>
                            </div>


                             <div class="form-group col-md-4">
                                <label for="selSpecialist_type">For Specialist only : </label>
                                <select class="form-control" id="selSpecialist_type">
                                    <option value="None"> - Select - </option>
                            

                                       <!--   <option value="Addiction psychiatrist">Addiction psychiatrist</option>
                                         <option value="Adolescent medicine specialist">Adolescent medicine specialist</option>
                                         <option value="Allergist (immunologist)">Allergist (immunologist)</option>
                                         <option value="Anesthesiologist">Anesthesiologist</option>
                                         <option value="Cardiac electrophysiologist">Cardiac electrophysiologist</option>
                                         <option value="Cardiologist">Cardiologist</option>
                                         <option value="Cardiovascular surgeon">Cardiovascular surgeon</option>
                                         <option value="Colon and rectal surgeon">Colon and rectal surgeon</option>
                                         <option value="Critical care medicine specialist">Critical care medicine specialist</option>
                                         <option value="Gastroenterologist">Gastroenterologist</option>
                                         <option value="Gynecologist">Gynecologist</option>
                                         <option value="Gynecologic oncologist">Gynecologic oncologist</option>
                                         <option value="Hand surgeon">Hand surgeon</option>
                                         <option value="Hematologist">Hematologist</option>
                                         <option value="Hepatologist">Hepatologist</option>
                                         <option value="Hospitalist">Hospitalist</option>
                                         <option value="Medical geneticist">Medical geneticist</option>
                                         <option value="Neonatologist">Neonatologist</option>
                                         <option value="Neurologist">Neurologist</option>
                                         <option value="Orthopedic surgeon">Orthopedic surgeon</option>
                                         <option value="Pediatrician">Pediatrician</option>

                                         <option value="Radiologist">Radiologist</option>
                                         <option value="Psychiatrist">Psychiatrist</option>
                                         <option value="Surgeon">Surgeon</option> -->

                                          <option value="General Practitioner">General Practitioner</option>
                            <option value="General Surgeon">General Surgeon</option>
                            <option value="ENT Surgeon">ENT Surgeon</option>
                            <option value="Plastic Surgeon">Plastic Surgeon</option>
                            <option value="Orthopaedic Surgeon">Orthopaedic Surgeon</option>
                            <option value="Endocrinologist">Endocrinologist</option>
                            <option value="Ophthalmologist">Ophthalmologist</option>
                            <option value="Oncologist">Oncologist</option>
                            <option value="Psychiatrist">Psychiatrist</option>
                            <option value="Urologist">Urologist</option>
                            <option value="Anaesthetist">Anaesthetist</option>
                                     <option value="Obstetrician/Gynaecologist">Obstetrician/Gynaecologist</option>
                                      <option value="Paediatrician">Paediatrician</option>
                                      <option value="Physician">Physician</option>
                                      <option value="Other">Other</option>
                
                                       


                                </select>
                            </div>


                    </div>

                       

                        <div class="form-group">
                            <label for="txtaddress">MDCN Registration Number</label>
                            <input class="form-control input" placeholder="MDCN Registration Number" id="mdcn_no" />
                        </div>

                        <div class="form-group">
                                <label for="year_of_experience">Year(s) of Registration</label>
                                <select class="form-control" id="year_of_experience">
                                    <option value=""> - Select year of experience - </option>

                                    <?php for($k=0; $k< 40; $k++){?>
                                         <option value="<?php echo $k; ?>"><?php echo $k; ?> Year(s)</option>

                                    <?php }?>
                                </select>
                            </div>




                

                <div class="form-group">
                            <label for="file_upload_passport">Upload Passport<small>must be in jpg format, Max. file size: 2 MB.</small></label>
                            <div class="upload">
                                <input type="file" id="file_upload_passport">
                            </div>
                        </div>

                        <div class="form-group">
                            
                        <span style="color:lightseagreen"><i class="glyphicon glyphicon-bell"></i> &nbsp;&nbsp; Please send us your c.v, credentials and other certificates to info@medlinelocum.com if not available upon registration.</span>
                        </div>

                <div class="form-group">
                            <label for="file_upload_cv">Upload C.V and Credentials <small>must be word doc. Max. file size: 8 MB.</small></label>
                            <div class="upload">
                                <input type="file" id="file_upload_cv">
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
                        <button class="btn btn-default btn-green" id="btn_register_doctor">Register</button>

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

                    <!-- div class="job-side-wrap">
                        <h4>Post Your Resume</h4>
                        <p>
                            At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti molestias
                        </p>
                        <p class="centering"><button class="btn btn-default btn-black">UPLOAD YOUR RESUME <i class="icon-upload white"></i></button></p>
                    </div>
 -->
                    <div class="job-side-wrap">
                        <h4>New On Medline Locum</h4>
                        <p>
                          <!-- View most frequently asked questions for new users like yourself. -->
                        </p>
                        <p class="centering"><a class="btn btn-default btn-blue" href="faq-doctor.php">Doctor's Faq</a></p>
                    </div>
                </div>
            </div>
        </div>
<!-- End container -->


    <?php include('partials/any-query.php');?>  
<?php include('partials/footer.php');?>


        </div><!-- end wrapper -->
         <script type="text/javascript" src="js/jq/jquery-min1.9.js"></script>
            <?php include('partials/scripts.php');?>

            <script type="text/javascript" src="js/datepicker/js/bootstrap-datepicker.js"></script>
            <script type="text/javascript" src="doctor-signup.js"></script>

        </body>

        </html>



