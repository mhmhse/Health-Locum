<?php
session_start();

//error_reporting(E_ALL);
//ini_set('display_errors', 'on');

include('../../../Connections/cn.php');
include('../security/security.php');
include('../../../functions/utilityFunction.php');

//include('../../functions/utilityFunction.php');
$hospital_id = $_SESSION['hospital_id_login'];
$hospital_details = getHospitalDetailsById($cn,$hospital_id);


?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>..:: Medline | Update Profile ::..</title>

    <?php include('../../partials/css.php');?>

    </head>
    <body>
    	<div id="wrapper"><!-- start main wrapper -->
    	<?php include('../../partials/hospital-header.php');?>


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
                                <label for="txt_hospital_name">Name of Hospital</label>
                                <input type="text"  id="txt_hospital_name" placeholder="Hospital's Name" value="<?php echo $hospital_details['hospital_name']; ?>"  class="form-control" />
                            </div>


                            <div class="form-group col-md-12">
                                <label for="txt_hospital_address">Address</label>
                                <input type="text" id="txt_hospital_address" value="<?php echo $hospital_details['address']; ?>" placeholder="Address"  class="form-control" />
                            </div>


                            <div class="form-group col-md-12">
                                <label for="txt_hefamaa_number">Hefemaa Number</label>
                                <input type="text" readonly="readonly" id="txt_hefamaa_number" value="<?php echo $hospital_details['hefamaa']; ?>" placeholder="Hefamaa number"  class="form-control" />
                            </div>

                            <div class="form-group col-md-12">
                                <label for="txt_hospital_email">Email</label>
                                <input type="text" id="txt_hospital_email" readonly="readonly" value="<?php echo $hospital_details['email']; ?>" placeholder="Email"  class="form-control" />
                            </div>


                            <div class="form-group col-md-12">
                                <label for="txt_hospital_website">Website</label>
                                <input type="text" id="txt_hospital_website" placeholder="Website"  value="<?php echo $hospital_details['website']; ?>"  class="form-control" />
                            </div>

                            <div class="form-group col-md-12">
                                <label for="txt_hospital_phone">Primary Phone number</label>
                                <input type="text" id="txt_hospital_phone" value="<?php echo $hospital_details['phone']; ?>"  placeholder="Primary Phone number"  class="form-control" />
                            </div>


                            <div class="form-group col-md-12">
                                <label for="txt_hospital_phone2">Secondary Phone number</label>
                                <input type="text" id="txt_hospital_phone2" value="<?php echo $hospital_details['phone2']; ?>"  placeholder="Secondary Phone number"  class="form-control" />
                            </div>



                     
                            <div class="form-group col-md-6">
                            <label for="sel_hospital_state">State</label>
                               <select class="form-control" id="sel_hospital_state">
                                <option value="">- Select State -</option>
                                 <option selected="selected" value="<?php echo $hospital_details['state']; ?>"><?php echo $hospital_details['state']; ?></option>
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

                           
                            <div class="form-group col-md-12">
                                <label for="txt_contact_name">Contact name</label>
                                <input type="text" id="txt_contact_name"  value="<?php echo $hospital_details['contact_name']; ?>" placeholder="Contact name"  class="form-control" />
                            </div>

                            <div class="form-group col-md-12">
                                <label for="txt_contact_phone">Contact Phone</label>
                                <input type="text" id="txt_contact_phone"  placeholder="Contact Phone" value="<?php echo $hospital_details['contact_phone']; ?>"  class="form-control" />
                            </div>

                            <div class="form-group col-md-12">
                                <label for="txtsurname">Contact Position</label>
                               
                                <select class="form-control" id="sel_contact_position">
                                    <option value="">- Select -</option>
                                    <option selected="selected" value="<?php echo $hospital_details['contact_position']; ?>"><?php echo $hospital_details['contact_position']; ?></option>
                                    <option value="Medical Director">Medical Director</option>  
                                    <option value="Manager">Manager</option>  
                                    <option value="Matron">Matron</option>  
                                    <option value="Other">Other</option>  
                                </select>

                            </div>


                <div class="form-group col-md-12">
                        <button class="btn btn-default btn-green" id="btn_update_hospital_profile">Update Profile</button>
                        <div id="animateDiv"></div>
                </div>



                               
                        </div>

                        <div class="col-md-4">
                        <h6>Change Hospital Logo</h6>

                            <div class="row">
                                <div class="col-md-12">
                                    <img src="../logo/<?php echo $hospital_details['logo'];?>.jpg" width="250" height="200">
                                </div>
                            </div>

                                <p></p>
                               <div class="row">
                                <div class="col-md-12">
                                  <input type="file" id="file_upload_logo">  
                                  <button class="btn btn-primary" id="btn_upload_logo">upload</button>
                                  </div>
                               </div>
                        
                        </div>


                </div><!-- end container -->

</div><!-- end page content -->

    <?php include('../../partials/footer.php');?>
</div><!-- end wrapper -->
<?php include('../../partials/scripts.php');?>
<script type="text/javascript" src="update-profile-js.js"></script>
                </body>
            </html>

