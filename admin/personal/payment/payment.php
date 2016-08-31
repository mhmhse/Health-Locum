<?php
session_start();
error_reporting(E_ALL);
ini_set('display_errors', 'on');

include('../../../Connections/cn.php');
include('../../../functions/utilityFunction.php');
include('../security/security.php');



$payment_id = $_GET['payment_id']; 
$payment_id = mysqli_real_escape_string($cn,$payment_id);

//$request_id = base64_decode($request_id_encoded);

//$details = getDoctorsDetailsById($cn,$doctor_id);
$details = getPaymentDetailsById($cn,$payment_id);


//var_dump($details['title']);

?>


<!DOCTYPE html>
<html>
    <head>
        
        <!-- Title -->
        <title>..:: Medline | Request's Details ::..</title>
        
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
                    <h3>Complete Doctor's Payment</h3>
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
                                    <h3 class="panel-title">Payment</h3>
                                </div>
                                <div class="panel-body">

                                       <div class="col-md-8" > 
                                    <p></p>
                                   
                                   <?php

                                   $response =  getHospitalDetailsById($cn,$details['hospital_id']);
                                    $logo = $response['logo'];

                                    $hospital_name = $response['hospital_name'];




                                    $response_doctor =  getDoctorsDetailsById($cn,$details['doctor_id']);
                                    $passport = $response_doctor['passport'];
                                    $doctor_name = $response_doctor['surname'] . " " . $response_doctor['other_name'];


                                    $assignment_details = getAssignmentDetailsById($cn,$details['assignment_id']);

                                   
                                   ?>



                                    <table id="user" class="table table-bordered table-striped" style="clear: both">
                                        <tbody> 

                                            <tr>      
                                                <td>Name of Hospital</td>
                                                <td><?php echo $hospital_name; ?>
                                                <input type="hidden" id="hid_payment_id" value="<?php echo $details['id']; ?>">
                                                </td>
                                            </tr>  
                                            <tr>   
                                                <td>Name of Doctor  </td>
                                                <td><?php echo $doctor_name; ?></td>
                                            </tr>  
                                            <tr>      
                                                <td>Assignment Link</td>
                                                <td><a href="../assignment/view-single-assignment.php?assignment_id=<?php echo $details['assignment_id']; ?>">Assignment Link</a></td>
                                            </tr>  
                                            <tr>   
                                                <td>Amount Paid</td>
                                                <td><?php echo $details['amount_paid_hospital']; ?></td>
                                            </tr>  

                                               <tr>   
                                                <td>Month Paid For</td>
                                                <td><?php echo $details['month_paid_for']; ?></td>
                                            </tr> 

                                            <tr>   
                                                <td>Info. from Hospital</td>
                                                <td><?php echo $details['additional_info_hospital']; ?></td>
                                            </tr>  


                                            <tr>      
                                                <td>Doctors Salary</td>
                                                <td><?php echo $assignment_details['doctors_wages']; ?></td>
                                            </tr>   
                                            <tr>   
                                                <td>Transaction type</td>
                                                <td>
                                                    <select id="payment_type" class="form-control">
                                                    <option value="">- Select payment type -</option>
                                                    <option value="Bank Transfer">Bank Transfer</option>
                                                    <option value="Cheque">Cheque</option>                                                 
                                                </select>
                                                </td>
                                            </tr>    
                                               <tr>   
                                                <td>Additional Information</td>
                                                <td><textarea rows="5" class="form-control" id="additional_information"></textarea></td>
                                            </tr>  
                                           
                                            <tr>      
                                                <td colspan="2"><button class="btn btn-primary btn-large" id="btn_pay_doctor_assignment">Pay Doctor</button></td>
                                            </tr>  
                                            
                                        </tbody>
                                    </table>

                                    </div>

                                       <div class="col-md-4" > 
                                         <p></p>
                                    
                                            <table>
                                                <tr><td><img src="../../../personal/hospital/logo/<?php echo $logo ?>.jpg" /></td></tr>
                                                <tr><td></td></tr>
                                                <!-- <tr><td><a style="width:100%; margin-top:20px; height:40px;" class="btn btn-success btn-large" href="../match/index.php?request_id=<?php echo $details['id'];?>"><i class="fa fa-bell">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</i>Match Request</a></td></tr> -->
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
        <script type="text/javascript" src="payment-js.js"></script>
          
    </body>
</html>