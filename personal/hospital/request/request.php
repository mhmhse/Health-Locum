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
    <title>..:: Medline | Submit Request ::..</title>

    <?php include('../../partials/css.php');?>
      <link rel="stylesheet" href="../../../js/datepicker/css/datepicker.css" />

    </head>
    <body>
    	<div id="wrapper"><!-- start main wrapper -->
    	<?php include('../../partials/hospital-header.php');?>


    	<div class="main-page-title"><!-- start main page title -->
			<div class="container">
				<div class="page-title">Submit Request</div>
			</div>
		</div><!-- end main page title -->


        <div id="page-content" class="content-about"><!-- start content -->
           
                

                <div class="container">
               
                <div class="spacer-1">&nbsp;</div>
                    <div class="row clearfix">
                        <div class="col-md-8">
                                <h6>Fill the form below to make a request on our platform </h6>


                      <div class="row">
                            <div class="form-group col-md-6">
                            <label for="txtsurname">Number of Doctor(s) needed</label>
                            <select class="form-control" id="num_of_provider">
                                    <option value=""> - Select number of provider need - </option>

                                    <?php for($k=1; $k< 20; $k++){?>
                                         <option value="<?php echo $k; ?>"><?php echo $k; ?></option>

                                    <?php }?>
                                </select>



                            </div>

                            <div class="form-group col-md-6">
                                <label for="txtotherame">Provider's type </label>
                               
                               <select class="form-control" id="specialization">

                               <option value="" selected="selected"> - Select - </option>
                    
                    <option value="Medical Officer">Medical officer/Registrar</option>
                    <option value="Senior Medical Officer">Senior Medical Officer/ Senior Registrar</option>
                    <option value="Specialist">Specialist/Consultant</option>


                     <option value="Nurse">Nurse</option>
                      <option value="Pharmacist">Pharmacist</option>
                      <option value="Laboratory Scientist">Laboratory Scientist</option>
                      <option value="Record Officer">Record Officer</option>
                      <option value="HMO Officer">HMO Officer</option>
                      <option value="Hospital Manager">Hospital Manager</option>
                      <option value="Accountants">Accountants</option>


            </select>


                            </div>
                    </div>




                      <div class="row">
                            <div class="form-group col-md-6">
                            <label for="state">State</label>
                               <select class="form-control" id="state">
                                <option value="">- Select State -</option>
                            <!--         <option value="Abia">Abia</option>
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
                                <!--     <option value="Nasarawa">Nasarawa</option>
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
                                    <option value="Abuja">Abuja</option>     -->                                
                                </select>
                            </div>

                           
                                  <div class="form-group  col-md-6">
                                <label for="job_type"> If Specialist, Area of Specialisation</label>
                                <select class="form-control" id="job_type">
                                  <option value="">- Select -</option><!-- 
                                    <option value="Short term">Short term (less than 1 month)</option>
                                    <option value="Mid term">Mid term (between 1 to 3 months)</option>
                                    <option value="Long term">Long term (between 3 to 6 months)</option> -->



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
                                      <option value="Other">Other.  Please specify in Additional Information</option>
                
                                 </select>
                    </div>


                    </div>



                           <div class="row">
                            <div class="form-group col-md-6">
                            <label for="shift_type">Shift type</label>
                              <select class="form-control" id="shift_type">
                                <option value="">- Select -</option>

                                <!--     <option value="Mixed shfit">Mixed shift</option>
                                    <option value="day shift">day shift</option>
                                    <option value="night shift">afternoon shift shift</option>
                                    <option value="night shift">night shift</option>
                                      <option value="Weekend">Weekend</option> -->

                                        <option value="Morning">Morning Shift 8am – 4pm</option>
                                <option value="Evening">Evening Shift 4pm – 8pm</option>
                                <option value="Night">Night Shift  8pm – 8am</option>
                                <option value="Mixed">Mixed Shift</option>
                                <option value="Other">Other.  Please specify in Additional Information</option>


                                </select>
                            </div>

                            <div class="form-group col-md-6">

                                <div class="form-group col-md-6">
                                    <label for="date_from">Duration From</label>
                                    <input type="text" value="" placeholder="Duration From" id="duration_from" style="width:100%;">
                                </div>


                           
                                   <div class="form-group col-md-6">
                                   <label for="date_to">Duration To : </label>
                                    <input type="text" value="" id="duration_to" style="width:100%;" placeholder="Duration To">
                                   </div>
                            </div>

                                 


                            
                    </div>

<!-- 
                     <div class="form-group  col-md-12">
                        <label for="years_of_experience_request" class="label clearfix">Years of experience(-/+)</label>
                        <input id="years_of_experience_request" class="value-slider" type="text" name="area" value="1;1" />
                    </div>

                         <p style="height:70px;"></p>

                 <div class="form-group  col-md-12">
                        <label for="experiences" class="label clearfix">Age range(-/+)</label>
                        <input id="age_range_request" class="value-slider" type="text" name="area" value="1;1" />
                    </div>
 -->
                     
                        <div class="form-group">
                             <label class="col-md-12 control-label">Request Type</label>
                             <label class="radio-inline"> <input type="radio" name="request_type" id="request_type_routine" value="Routine" checked> Routine :  More than 1 week </label>
                            <label class="radio-inline"> <input type="radio" name="request_type" id="request_type_urgent" value="Urgent"> Urgent : Less than 7 days</label>
                             <label class="radio-inline"> <input type="radio" name="request_type" id="request_type_emergency" value="Emergency"> Emergency : Less than 48 hours</label>
                        </div>
                    

                     <div class="form-group col-md-12">
                                   
                                <label for="addtional_information"  class="label clearfix">Additional Information</label>
                                <textarea  class="form-control" id="addtional_information" rows="10"></textarea>
                      </div>

                <div class="form-group">
                        <button class="btn btn-default btn-green" id="btn_send_request">Send Request</button>
                        <div id="animateDiv"></div>
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
<script type="text/javascript" src="../../../js/datepicker/js/bootstrap-datepicker.js"></script>
<script type="text/javascript" src="request.js"></script>
                </body>
            </html>

