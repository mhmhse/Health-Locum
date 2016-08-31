<?php
session_start();
error_reporting(E_ALL);
ini_set('display_errors', 'on');

include('../../../Connections/cn.php');
include('../../../functions/utilityFunction.php');
include('../security/security.php');


$assignment_id = mysqli_real_escape_string($cn,trim($_REQUEST['assignment_id']));



if($assignment_id == ""){
    header("location: index.php");
    exit;
}


?>
<!DOCTYPE html>
<html>
    <head>
        
        <!-- Title -->
        <title>..:: Medline | View Single Assignment ::..</title>
        
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
                    <h3> View Single Assignment</h3>
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
                                    <h3 class="panel-title">Single Assignment</h3>
                                </div>
                                <div class="panel-body">

                                       <div class="col-md-8" > 
                                    <p></p>
                                   
                                   <?php

                                   $details =  getAssignmentDetailsById($cn,$assignment_id);
                                    //$logo = $response['logo'];

                                   //var_dump($details);

                                   // $hospital_name = $response['hospital_name'];
                                    $hospital_details = getHospitalDetailsById($cn,$details['hospital_id']);
                                    $doctor_details = getDoctorsDetailsById($cn,$details['doctor_id']);

                                   ?>

                        

                                    <table id="user" class="table table-bordered table-striped" style="clear: both">
                                        <tbody> 

                                            <tr>      
                                                <td>Hospital Name</td>
                                                <td><?php echo $hospital_details['hospital_name']; ?>
                                                 <input type="hidden" id="assignment_id" value="<?php echo $assignment_id; ?>">
                                                 </td>
                                            </tr>  
                                            <tr>   
                                                <td>Name of Doctor </td>
                                                <td><?php echo $doctor_details['surname'] ." " .$doctor_details['other_name']; ?></td>
                                               
                                            </tr>  
                                            <tr>      
                                                <td>Request Link</td>
                                                <td><a href="../request/view-single-request.php?request_id=<?php echo base64_encode($details['request_id']); ?>">Link to request</a></td>
                                            </tr>  
                                            <tr>   
                                                <td>Status</td>
                                                <td><strong><?php echo $details['status']; ?></strong>

                                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                <select id="sel_status">
                                                    <option value=""> - Select Status - </option>
                                                    <option value="Active">Active</option>
                                                    <option value="Paused">Paused</option>
                                                    <option value="Cancelled">Cancelled </option>
                                                    <option value="Completed">Completed</option>
                                                    <option value="Completed no payment">Completed no payment</option>
                                                </select>
                                                <button id="btn_update">Update</button>
                                                </td>
                                            </tr>    
                                           
                                            <tr>   
                                                <td>Actual Salary</td>
                                                <td><?php echo $details['pay_from_hospital']; ?></td>
                                            </tr>    
                                               <tr>   
                                                <td>Doctor's Salary</td>
                                                <td><?php echo $details['doctors_wages']; ?> </td>
                                            </tr>  
                                            <tr>      
                                                <td>Duration From</td>
                                                <td><?php echo $details['date_from']; ?> </td>
                                            </tr>  
                                            <tr>   
                                                <td> Duration To</td>
                                                <td><?php echo $details['date_to']; ?></td>
                                            </tr>    

                                             <tr>   
                                                <td>Shift Type</td>
                                                <td><?php echo $details['shift_type']; ?></td>
                                            </tr>  


                                               <tr>   
                                                <td>Start Date </td>
                                                <td><?php echo $details['date_started']; ?></td>
                                            </tr>  
                                            <tr>      
                                                <td>Payment Mode</td>
                                                <td><?php echo $details['payment_mode']; ?></td>
                                            </tr>  
                                            <tr>   
                                                <td>Additional Information</td>
                                                <td><?php echo $details['additional_info']; ?></td>
                                            </tr>    

                                             <tr>   
                                                <td>Date Logged</td>
                                                <td><?php echo $details['date_logged']; ?></td>
                                            </tr>    

                                        </tbody>
                                    </table>





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
         <script type="text/javascript" src="view-single-assignment-js.js"></script>


    </body>
</html>