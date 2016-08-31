<?php
session_start();
error_reporting(E_ALL);
ini_set('display_errors', 'on');

include('../../../Connections/cn.php');
include('../../../functions/utilityFunction.php');
include('../security/security.php');

?>


<!DOCTYPE html>
<html>
    <head>
        
        <!-- Title -->
        <title>..:: Medline | Post request :;..</title>
        
        <meta content="width=device-width, initial-scale=1" name="viewport"/>
        <meta charset="UTF-8">
        <meta name="description" content="Admin Dashboard Template" />
        <meta name="keywords" content="admin,dashboard" />
        <meta name="author" content="Steelcoders" />
        
        <!-- Styles -->
             <?php include('../../../admin_partials/css.php'); ?>

        <link rel="stylesheet" href="../../../css/jslider.css" type="text/css">
          <link rel="stylesheet" href="../../../js/datepicker/css/datepicker.css" />
           <!--       <link rel="stylesheet" href="../../../css/jslider.round.css" type="text/css">

 -->
             

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
        

        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/chosen/1.4.2/chosen.min.css">
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/chosen/1.4.2/chosen.proto.min.js"></script>
        
    </head>
    <body class="page-header-fixed">
        <div class="menu-wrap">
            <nav class="profile-menu">
                <div class="profile"><img src="../assets/images/avatar1.png" width="52" alt="David Green"/><span>Administrator</span></div>
                <div class="profile-menu-list">
                    <a href="#"><i class="fa fa-star"></i><span>Favorites</span></a>
                    <a href="#"><i class="fa fa-bell"></i><span>Alerts</span></a>
                    <a href="#"><i class="fa fa-envelope"></i><span>Messages</span></a>
                    <a href="#"><i class="fa fa-comment"></i><span>Comments</span></a>
                </div>
            </nav>
            <button class="close-button" id="close-button">Close Menu</button>
        </div>
        <form class="search-form" action="#" method="GET">
            <div class="input-group">
                <input type="text" name="search" class="form-control search-input" placeholder="Search...">
                <span class="input-group-btn">
                    <button class="btn btn-default close-search waves-effect waves-button waves-classic" type="button"><i class="fa fa-times"></i></button>
                </span>
            </div><!-- Input Group -->
        </form><!-- Search Form -->
        <main class="page-content content-wrap">




        <?php include('../../../admin_partials/header.php'); ?>
                <!-- Navbar -->

<!-- start my sidebar -->

        <?php include('../../../admin_partials/sidebar.php'); ?>
<!-- end page side bar -->



            </div><!-- Page Sidebar -->
            <div class="page-inner">
                <div class="page-title">
                    <h3>Post request</h3>
                    <div class="page-breadcrumb">
                        <ol class="breadcrumb">
                            <li><a href="index.html">Home</a></li>
                            <li><a href="#">Layouts</a></li>
                            <li class="active">Blank Page</li>
                        </ol>
                    </div>
                </div>
                <div id="main-wrapper">
                    <div class="row">




                <div class="col-md-8">
                                <h6>Fill the form below to make a request on our platform </h6>

                                   

                         <div class="row">
                            <div class="form-group col-md-12">
                            <label for="name_of_hospital">Name of Hospital </label>
                            <select data-placeholder="Select an Hospital..." class="form-control chosen-select-hospital_name" id="name_of_hospital">
                            <option value=""> - Name of Hospital - </option>

                            <?php
                            $sql = "SELECT * FROM hospital";
                            $result = mysqli_query($cn,$sql);
                            while($hospital = mysqli_fetch_assoc($result)){
                                ?>

                                 <option value="<?php echo $hospital['id']; ?>"><?php echo $hospital['hospital_name']; ?></option>

                            <?php
                            }
                            ?>
                                   

                                 

                                </select>

                        </div>
                        </div>


                      <div class="row">
                            <div class="form-group col-md-6">
                            <label for="txtsurname">Number of provider's needed</label>
                            <select class="form-control" id="num_of_provider">
                                    <option value=""> - Select number of provider need - </option>

                                    <?php for($k=1; $k< 20; $k++){?>
                                         <option value="<?php echo $k; ?>"><?php echo $k; ?></option>

                                    <?php }?>
                                </select>



                            </div>

                            <div class="form-group col-md-6">
                                <label for="txtotherame">Type of provider</label>
                               
                               <select class="form-control" id="specialization">
                    <option value=""> - Select - </option>
                  
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
                                    <option value="Kwara">Kwara</option>
                                     -->
                                     <option value="Lagos">Lagos</option>
                                    <!-- <option value="Nasarawa">Nasarawa</option>
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
                                    <option value="Abuja">Abuja</option>                                     -->
                                </select>
                            </div>

                              <div class="form-group  col-md-6">
                                <label for="job_type">If Specialist, Area of Specialisation</label>
                                <select class="form-control" id="job_type">
                                  <option value="">- Select -</option>
                                    <!-- <option value="Short term">Short term (less than 1 month)</option>
                                    <option value="Mid term">Mid term (between 1 to 3 months)</option>
                                    <option value="Long term">Long term (between 3 to 6 months)</option>
                                 </select> -->

                                 
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

                                  <option value="Obstetrician/Gynaecologist">Obstetrician/Gynaecologist</option>
                                  <option value="Paediatrician">Paediatrician</option>
                                  <option value="Physician">Physician</option>
                                  <option value="Other.  Please specify in Additional Information">Other.  Please specify in Additional Information</option>

                                  </select>
                


                                </div>


                    </div>



                           <div class="row">
                            <div class="form-group col-md-6">
                                    
                                    <label for="shift_type">Shift type</label>                   
                                  
                                    <select class="form-control" id="shift_type">
                                        <option value="">- Select -</option>
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

   


               <!--       <div class="form-group  col-md-12">
                        <label for="years_of_experience_request_admin">Years of experience(-/+)</label> </br>
                        <input id="years_of_experience_request_admin" class="value-slider" type="text" name="area" value="1;1" />
                    </div>

                         <p style="height:70px;"></p>

                 <div class="form-group  col-md-12">
                        <label for="experiences">Age range(-/+)</label> </br>
                         <input id="age_range_request_admin" class="value-slider" type="text" name="area" value="1;1" />
                    </div>
 -->
                        <!-- <p style="height:70px;"></p> -->

                        <div class="form-group">
                             <label class="col-md-12 control-label">Request Type</label>
                             <label class="radio-inline"> <input type="radio" name="request_type" id="request_type_routine" value="Routine" checked> Routine :  More than 1 week </label>
                            <label class="radio-inline"> <input type="radio" name="request_type" id="request_type_urgent" value="Urgent"> Urgent : Less than 7 days </label>
                             <label class="radio-inline"> <input type="radio" name="request_type" id="request_type_emergency" value="Emergency"> Emergency : Less than 48 hours</label>
                        </div>
                    

                    
                     <!-- <p style="height:30px;"></p> -->

                     <div class="form-group col-md-12">
                                   
                                <label for="addtional_information">Additional Information</label> </br>
                                <textarea  class="form-control" id="addtional_information" rows="10"></textarea>
                      </div>

                <div class="form-group">
                        <button class="btn btn-default btn-green" id="btn_send_request">Send Request</button>
                </div>














                        </div>



                            <div class="col-md-4">

                             <!-- THis is a custom div to hold additional information -->

                             </div>



                        </div>

                        

                    </div><!-- Row -->
                </div><!-- Main Wrapper -->


            <!-- start my sidebar -->

                    <?php include('../../../admin_partials/footer.php'); ?>
            <!-- end page side bar -->

            </div><!-- Page Inner -->
        </main><!-- Page Content -->
        <nav class="cd-nav-container" id="cd-nav">
            <header>
                <h3>Navigation</h3>
                <a href="#0" class="cd-close-nav">Close</a>
            </header>
            <ul class="cd-nav list-unstyled">
                <li class="cd-selected" data-menu="index">
                    <a href="javsacript:void(0);">
                        <span>
                            <i class="glyphicon glyphicon-home"></i>
                        </span>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li data-menu="profile">
                    <a href="javsacript:void(0);">
                        <span>
                            <i class="glyphicon glyphicon-user"></i>
                        </span>
                        <p>Profile</p>
                    </a>
                </li>
                <li data-menu="inbox">
                    <a href="javsacript:void(0);">
                        <span>
                            <i class="glyphicon glyphicon-envelope"></i>
                        </span>
                        <p>Mailbox</p>
                    </a>
                </li>
                <li data-menu="#">
                    <a href="javsacript:void(0);">
                        <span>
                            <i class="glyphicon glyphicon-tasks"></i>
                        </span>
                        <p>Tasks</p>
                    </a>
                </li>
                <li data-menu="#">
                    <a href="javsacript:void(0);">
                        <span>
                            <i class="glyphicon glyphicon-cog"></i>
                        </span>
                        <p>Settings</p>
                    </a>
                </li>
                <li data-menu="calendar">
                    <a href="javsacript:void(0);">
                        <span>
                            <i class="glyphicon glyphicon-calendar"></i>
                        </span>
                        <p>Calendar</p>
                    </a>
                </li>
            </ul>
        </nav>
        <div class="cd-overlay"></div>
	

        <!-- Javascripts -->

        <?php include('../../../admin_partials/scripts.php'); ?>
             <script type="text/javascript" src="../../../js/draggable-0.1.js"></script>
           <script type="text/javascript" src="../../../js/tmpl.js"></script>

     <script type="text/javascript" src="../../../js/jquery.dependClass-0.1.js"></script>
          <script type="text/javascript" src="../../../js/jquery.slider.js"></script> 
<script type="text/javascript" src="../../../js/datepicker/js/bootstrap-datepicker.js"></script>
        <script type="text/javascript" src="post-request.js"></script>
<!-- Form Slider -->
        
        <script type="text/javascript">
            
            $(".chosen-select-hospital_name").chosen();
        </script>


    </body>
</html>