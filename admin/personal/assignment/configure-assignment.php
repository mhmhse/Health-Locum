<?php
session_start();
error_reporting(E_ALL);
ini_set('display_errors', 'on');

include('../../../Connections/cn.php');
include('../../../functions/utilityFunction.php');
include('../security/security.php');

$hospital_id = mysqli_real_escape_string($cn,trim($_REQUEST['hospital_id']));
$doctor_id = mysqli_real_escape_string($cn,trim($_REQUEST['doctor_id']));
$request_id = mysqli_real_escape_string($cn,trim($_REQUEST['request_id']));


if($hospital_id == "" or $doctor_id == "" or $request_id == ""){
    header("location: request-manager.php");
    exit;
}

//var_dump($hospital_id);

?>


<!DOCTYPE html>
<html>
    <head>
        
        <!-- Title -->
        <title>..:: Medline | Configure Assignment ::..</title>
        
        <meta content="width=device-width, initial-scale=1" name="viewport"/>
        <meta charset="UTF-8">
        <meta name="description" content="Admin Dashboard Template" />
        <meta name="keywords" content="admin, Details" />
        <meta name="author" content="Steelcoders" />
        
        <!-- Styles -->
             <?php include('../../../admin_partials/css.php'); ?>


        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

        <link rel="stylesheet" href="../../../js/datepicker/css/datepicker.css" />
       
        
    </head>
    <body class="page-header-fixed">
       
        <div class="menu-wrap">
            <nav class="profile-menu">
                <div class="profile"><img src="assets/images/avatar1.png" width="52" alt="David Green"/><span>David Green</span></div>
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
                    <h3>Configure Assignment</h3>
                    <div class="page-breadcrumb">
                        <ol class="breadcrumb">
                            <li><a href="index.php">Home</a></li>
                           <!--  <li><a href="#">Layouts</a></li> -->
                           <!--  <li class="active">Blank Page</li> -->
                        </ol>
                    </div>
                </div>
                <div id="main-wrapper">
                    <div class="row">

                            <div class="col-md-12" > 
                            
                            <div class="panel panel-success">
                                <div class="panel-heading">
                                    <h3 class="panel-title">Configure</h3>
                                </div>
                                <div class="panel-body">

                                       <div class="col-md-8" > 
                                    <p></p>
                                   
  


  <?php                                 
$hospital_details = getHospitalDetailsById($cn,$hospital_id);


$doctor_details = getDoctorsDetailsById($cn,$doctor_id);
$request_details = getRequestDetailsById($cn,$request_id);

?>
                        

                        <form role="form" class="post-job-form">

                            <div class="row">
                                <div class="form-group col-md-12">
                                    <label for="hospital_name">Name of Hospital </label>
                                    <Input type="text" placeholder="Hospital's Name" id="hospital_name" readonly="readonly" value="<?php echo $hospital_details['hospital_name']; ?>" class="form-control input" />
                                    <input type="hidden" id="hid_hospital_id" value="<?php echo  $hospital_details['id'];?>" >
                                   
                                </div>
                            </div>


                            <div class="row">
                                <div class="form-group col-md-12">
                                    <label for="doctor_name">Name of Doctor </label>
                                    <Input type="text" placeholder="Doctors's Name" id="doctor_name" readonly="readonly" class="form-control input"  value="<?php echo $doctor_details['surname'] . " " . $doctor_details['other_name']?>" />
                                    <input type="hidden" id="hid_doctor_id" value="<?php echo  $doctor_details['id'];?>">

                                </div>
                            </div>


                            <div class="row">
                                <div class="form-group col-md-12">
                                    <label for="request_name">Request Date </label>
                                    <Input type="text" placeholder="Date of Request" id="request_name" readonly="readonly" class="form-control input" value="<?php echo $request_details['date_posted']; ?>"/>
                                    <input type="hidden" id="hid_request_id" value="<?php echo  $request_details['id'];?>">
                                </div>
                            </div>


                            <div class="row">
                                <div class="form-group col-md-12">
                                    <label for="assignment_status">Status </label>
                                   <select class="form-control" id="assignment_status">
                                        <option value=""> - Select Status - </option>
                                        <option value="Active">Active</option>
                                         <option value="Pending">Pending</option>
                                </select>
                                </div>
                            </div>


                            <div class="row">
                                <div class="form-group col-md-6">
                                    <label for="innitial_salary">Hospital Payment</label>
                                    <Input type="number" placeholder="Initial Salary" id="innitial_salary" class="form-control input" />
                                </div>

                                <div class="form-group col-md-6">
                                    <label for="name_of_hospital">Doctor's Salary </label>
                                    <Input type="number" placeholder="Doctor Salary" id="doctor_salary" class="form-control input" />
                                </div>


                            </div>


                            

                            <div class="row">
                                <div class="form-group col-md-6">
                                    <label for="date_from">Date from </label>
                                    <Input type="text" placeholder="Duration from" id="date_from" class="form-control input" />
                                </div>

                                <div class="form-group col-md-6">
                                    <label for="date_to">Date To</label>
                                    <Input type="text" placeholder="Date To" id="date_to" class="form-control input" />
                                </div>
                            </div>

                           
                             <div class="row">
                                <div class="form-group col-md-12">
                                    <label for="shift_type">Shift type</label>
                                 <select class="form-control" id="shift_type">
                                <option value="">- Shift type -</option>
                                <option selected="selected" value="<?php echo $request_details['shift_type']; ?>"><?php echo $request_details['shift_type']; ?></option>

                                    <option value="day shift">day shift</option>
                                    <option value="night shift">night shift</option>
                                      <option value="Weekend">Weekend</option>
                                </select>
                                </div>
                            </div>


                            <div class="row">
                                <div class="form-group col-md-12">
                                    <label for="start_date">Date Contract Signed </label>
                                    <Input type="text" placeholder="Start Date" id="start_date" class="form-control input" />
                                </div>
                            </div>

                            <div class="row">
                                <div class="form-group col-md-12">
                                    <label for="payment_mode">Payment Mode</label>
                                    <select class="form-control" id="payment_mode">
                                        <option value=""> - Select Payment Type - </option>
                                        <option value="Daily">Daily</option>
                                          <option value="Weekly">Weekly</option>
                                        <option value="Monthly">Monthly</option>
                                        <option value="Quaterly">Quaterly</option> 
                                        <option value="Yearly">Yearly</option>
                                </select>

                                </div>
                            </div>



                            <div class="row">
                                <div class="form-group col-md-12">
                                    <label for="additional_information">Additional Information</label>
                                  <textarea id="additional_information" class="form-control" rows="5"></textarea>
                                </div>
                            </div>


                            <div class="row">
                                <div class="form-group col-md-12">
                                 <input type="button"  class="btn btn-primary btn-large" value="Configure this Assignment" id="btn_configure_assignment">
                                </div>
                            </div>



                        </form>


                                    </div>

                                       <div class="col-md-4" > 
                                         <p></p>
                                    
                                            <table>
                                                <tr><td><a href="#"><img src="../../../personal/doctor/passport/<?php echo $doctor_details['passport'];?>.jpg" width="200" height="200" /></a></td></tr>

                                                  <tr>
                                                  <td>
                                                      <p style="height:100px;"></p>
                                                  </td>
                                                  </tr>

                                                    <tr><td><a href="#"><img src="../../../personal/hospital/logo/<?php echo $hospital_details['logo'];?>.jpg"  width="200" height="200" /> </a></td></tr>

                                                <tr><td></td></tr>
                                            </table>
                                       </div>


                                </div>
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
         <script type="text/javascript" src="../../../js/datepicker/js/bootstrap-datepicker.js"></script>
         <script type="text/javascript" src="configure-assignment-js.js"></script>


    </body>
</html>