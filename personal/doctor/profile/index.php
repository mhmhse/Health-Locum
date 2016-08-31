<?php
session_start();

//error_reporting(E_ALL);
//ini_set('display_errors', 'on');

include('../../../Connections/cn.php');
include('../security/security.php');
include('../../../functions/utilityFunction.php');


$doctor_login_id = $_SESSION['doctor_login_id'];
$doctor_details = getDoctorsDetailsById($cn,$doctor_login_id);


?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>..:: Medline | Update Profile ::..</title>

    <?php include('../../partials/css.php');?>
 <link rel="stylesheet" href="../../../js/datepicker/css/datepicker.css" />
    
    </head>
    <body>
    	<div id="wrapper"><!-- start main wrapper -->
    	<?php include('../../partials/doctor-header.php');?>


    	<div class="main-page-title"><!-- start main page title -->
			<div class="container">
				<div class="page-title">Update Profile</div>
			</div>
		</div><!-- end main page title -->


        <div id="page-content" class="content-about"><!-- start content -->
           
                

                <div class="container">
               
                <div class="spacer-1">&nbsp;</div>
                    <div class="row clearfix">
                        <div class="col-md-8">
                                <h6>Update your profile</h6>


                    
                            <div class="form-group col-md-12">
                                <label for="txt_hospital_name">Surname</label>
                                <input type="text"  id="txt_surname" placeholder="Surname" value="<?php echo $doctor_details['surname']; ?>"  class="form-control" />
                            </div>

                             <div class="form-group col-md-12">
                                <label for="txt_hospital_name">Other name</label>
                                <input type="text"  id="txt_other_name" placeholder="Other's Name(s)" value="<?php echo $doctor_details['other_name']; ?>"  class="form-control" />
                            </div>


                            <div class="form-group col-md-12">
                                <label for="txt_hospital_address">Address</label>
                                <input type="text" id="txt_doctor_address" value="<?php echo $doctor_details['address']; ?>" placeholder="Address"  class="form-control" />
                            </div>


                            <div class="form-group col-md-12">
                                <label for="txt_mdcn_number">Mdcn Number</label>
                                <input type="text" readonly="readonly" id="txt_mdcn_number" value="<?php echo $doctor_details['mdcn_no']; ?>" placeholder="MDCN number"  class="form-control" />
                            </div>

                            <div class="form-group col-md-12">
                                <label for="txt_doctor_dob">Date of Birth</label>
                                <input type="text" id="txt_doctor_dob" value="<?php echo $doctor_details['date_of_birth']; ?>" placeholder="Date of Birth"  class="form-control" />
                            </div>


                            <div class="form-group col-md-12">
                                <label for="txt_doctor_gender">Gender</label>
                                <input type="text" readonly="readonly" id="txt_doctor_gender" value="<?php echo $doctor_details['gender']; ?>"  class="form-control" />
                            </div>

                            <div class="form-group col-md-12">
                                <label for="txt_hospital_phone">Cadre</label>
                                
                                <select class="form-control" id="doctor_specialization">
                                    <option value="">- Select  Specialization-</option>
                                    <option selected="selected" value="<?php echo $doctor_details['field_type']; ?>"><?php echo $doctor_details['field_type']; ?></option>
                                    <option value="Doctor">Doctor</option>                         
                                </select>
                            </div>


                            <div class="form-group col-md-12">
                                <label for="txt_doctor_nationality">Nationality</label>
                                <input type="text"  readonly="readonly"  id="txt_doctor_nationality" value="<?php echo $doctor_details['nationality']; ?>"  placeholder="Nationality"  class="form-control" />
                            </div>

                            <div class="form-group col-md-12">
                                <label for="txt_state_of_origin">State of Origin</label>
                                <input  readonly="readonly"  type="text" id="txt_state_of_origin" value="<?php echo $doctor_details['state_of_origin']; ?>"  placeholder="Secondary Phone number"  class="form-control" />
                            </div>

                            <div class="form-group col-md-12">
                                <label for="txt_phone">Phone Number</label>
                                <input type="text" id="txt_phone" value="<?php echo $doctor_details['phone_number']; ?>"  placeholder="Secondary Phone number"  class="form-control" />
                            </div>

                            <div class="form-group col-md-12">
                                <label for="txt_email">Email</label>
                                <input readonly="readonly"  type="text" id="txt_email" value="<?php echo $doctor_details['email']; ?>"  placeholder="Secondary Phone number"  class="form-control" />
                            </div>

                            <div class="form-group col-md-12">
                                <label for="sel_marital_status">Marital Status</label>
                                  <select class="form-control" id="sel_marital_status">
                                    <option value="">- Select Marital Status -</option>
                                    <option selected="selected" value="<?php echo $doctor_details['marital_status']; ?>"><?php echo $doctor_details['marital_status']; ?></option>
                                    <option value="Single">Single</option>
                                    <option value="Married">Married</option>
                                 </select>
                            </div>

                            <div class="form-group col-md-12">
                                <label for="sel_state_of_residence">State of Residence</label>
                                <select class="form-control" id="sel_state_of_residence">
                                    <option value="">- Select -</option>
                                    <option selected="selected" value="<?php echo $doctor_details['state_of_residence']; ?>"><?php echo $doctor_details['state_of_residence']; ?></option>
                                    <option value="Lagos">Lagos</option>
                                 </select>

                             </div>

                            <div class="form-group col-md-12">
                                <label for="txt_year_experience">Years of Experience</label>
                                
                                 <select class="form-control" id="sel_year_experience">
                                    <option value="">- Select State -</option>
                                    <option selected="selected" value="<?php echo $doctor_details['years_experience']; ?>"><?php echo $doctor_details['years_experience']; ?> Year(s)</option>
                                    
                                    <?php for($i = 0; $i<60; $i++){
                                        ?>

                                        <option value="<?php echo $i ?>"><?php echo $i ?> Year(s)</option>

                                       <?php } ?>

                                    
                                                            
                                </select>
                            </div>

                            <div class="form-group col-md-12">
                                <label for="sel_educational_qualification">Educational Qualification</label>
                              <!--   <select class="form-control" id="sel_educational_qualification">
                                    <option value="">- Select State -</option>
                                    <option selected="selected" value="<?php echo $doctor_details['educational_qualification']; ?>"><?php echo $doctor_details['educational_qualification']; ?></option>
                                    <option value="BSc">BSc</option>
                                    <option value="MSc">MSc</option>
                                    <option value="PhD">PhD</option>                            
                                </select> -->


                                <select class="form-control" id="sel_educational_qualification">
                                    <option value=""> - Select Cadre - </option>

                                     <option selected="selected" value="<?php echo $doctor_details['educational_qualification']; ?>"><?php echo $doctor_details['educational_qualification']; ?></option>
                                    <option value="MBBS">MBBS</option>
                                    <option value="Fellowship">Fellowship</option>
                                    <option value="Diploma">Diploma</option>

                                </select>


                            </div>
                          


                          <div class="form-group col-md-12">
                                <label for="selSpecialist_type">For Specialist only : </label>
                                <select class="form-control" id="selSpecialist_type">
                                    <option value="None"> - Select - </option>
                            
                                        <option selected="selected" value="<?php echo $doctor_details['specialist_type']; ?>"><?php echo $doctor_details['specialist_type']; ?></option>
                                         <option value="Addiction psychiatrist">Addiction psychiatrist</option>
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
                                         <option value="Surgeon">Surgeon</option>
                                       


                                </select>
                            </div>


                            <div class="form-group col-md-12">
                 
                                <label for="sel_availability_type">Availability </label>
                                <select class="form-control" id="sel_availability_type">
                                    <option value=""> - Select - </option>
                                    <option selected="selected" value="<?php echo $doctor_details['availability_type']; ?>"><?php echo $doctor_details['availability_type']; ?></option>
                                    <option value="All Day">All Day</option>
                                    <option value="Morning">Morning</option>
                                    <option value="Evening">Evening</option>
                                    <option value="Mini">Mini (for specialists)</option>
                                    <option value="Night">Night</option>
                                </select>
                            </div>


                        
                <div class="form-group col-md-12">
                        <button class="btn btn-default btn-green" id="btn_update_hospital_profile">Update Profile</button>

                        <div id="animateDiv"></div>
                </div>



                               
                        </div>

                        <div class="col-md-4">
                        
                            <div class="row">
                                <div class="col-md-12">
                                    <img src="../passport/<?php echo $doctor_details['passport'];?>.jpg" width="250" height="200">
                                </div>
                            </div>

                                <p></p>
                               <div class="row">
                                    <div class="col-md-12">
                                        <input type="file" id="file_upload_logo">  
                                        <button class="btn btn-primary" id="btn_upload_logo">Change passport</button>
                                    </div>

                                           <p></p>
                                            <p></p>
                                            <p></p>

                                    <div class="row">

                                    <div class="col-md-12" style="margin-top:30px;">
                                       <a class="btn btn-success" href="../cv/<?php echo $doctor_details['resume']; ?>.docx">Download Resume</a>
                                        <input type="file" id="file_upload_cv">  
                                        <button class="btn btn-primary" id="btn_upload_resume">Replace resume</button>
                                    </div>

                               </div>






                               </div>
                        
                        </div>


                </div><!-- end container -->

</div><!-- end page content -->

    <?php include('../../partials/footer.php');?>
</div><!-- end wrapper -->
<?php include('../../partials/scripts.php');?>
<script type="text/javascript" src="../../../js/datepicker/js/bootstrap-datepicker.js"></script>
<script type="text/javascript" src="update-profile-js.js"></script>
                </body>
            </html>

