<?php
session_start();
error_reporting(E_ALL);
ini_set('display_errors', 'on');



include('../../../Connections/cn.php');
include('../../../functions/utilityFunction.php');
include('../security/security.php');


$doctor_id_encoded = $_GET['doctor_id']; 
$doctor_id = base64_decode($doctor_id_encoded);

$details = getDoctorsDetailsById($cn,$doctor_id);




//var_dump($details['title']);

?>


<!DOCTYPE html>
<html>
    <head>
        
        <!-- Title -->
        <title>..:: Medline | Doctor's Details ::..</title>
        
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
                    <h3>Doctor's Details</h3>
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
                                    <h3 class="panel-title">Profile</h3>
                                </div>
                                <div class="panel-body">

                                       <div class="col-md-8" > 
                                    <p></p>
                                   

                                    <table id="user" class="table table-bordered table-striped" style="clear: both">
                                        <tbody> 

                                            <tr>      
                                                <td>Title</td>
                                                <td><?php echo $details['title']; ?>
                                                <input type="hidden" id="doctor_id" value="<?php echo $details['id']; ?>">
                                                </td>
                                            </tr>  
                                            <tr>   
                                                <td>Surname</td>
                                                <td><?php echo $details['surname']; ?></td>
                                            </tr>  
                                            <tr>      
                                                <td>Other names</td>
                                                <td><?php echo $details['other_name']; ?></td>
                                            </tr>  
                                            <tr>   
                                                <td>Age</td>
                                                <td><?php 

                                                echo $details['date_of_birth']; 


                                              //$year_of_birth = $details['date_of_birth'];
                                        
                                            //$createDate = new DateTime($year_of_birth);

                                            //$strip = $createDate->format('Y-m-d');
                                            

                                            //$now = new DateTime();
                                            //$difference = $now->diff($createDate, true);
                                           
                                            // echo $difference->y;



                                                ?> years old</td>
                                            </tr>    
                                               <tr>   
                                                <td>Gender</td>
                                                <td><?php echo $details['gender']; ?></td>
                                            </tr>  
                                            <tr>      
                                                <td>Address</td>
                                                <td><?php echo $details['address']; ?></td>
                                            </tr>  
                                            <tr>   
                                                <td>Specialization</td>
                                                <td><?php echo $details['field_type']; ?></td>
                                            </tr>    
                                               <tr>   
                                                <td>Nationality</td>
                                                <td><?php echo $details['nationality']; ?></td>
                                            </tr>  
                                            <tr>      
                                                <td>State Of Origin</td>
                                                <td><?php echo $details['state_of_origin']; ?></td>
                                            </tr>  
                                            <tr>   
                                                <td> Phone Number</td>
                                                <td><?php echo $details['phone_number']; ?></td>
                                            </tr>    

                                             <tr>   
                                                <td>MDCN Registration Number</td>
                                                <td><?php echo $details['mdcn_no']; ?></td>
                                            </tr>  


                                               <tr>   
                                                <td>Email </td>
                                                <td><?php echo $details['email']; ?></td>
                                            </tr>  

                                              <tr>   
                                                <td>Marital Status </td>
                                                <td><?php echo $details['marital_status']; ?></td>
                                            </tr>  


                                            <tr>      
                                                <td>State of residence</td>
                                                <td><?php echo $details['state_of_residence']; ?></td>
                                            </tr>  
                                            <tr>   
                                                <td>Years or experience</td>
                                                <td><?php echo $details['years_experience']; ?></td>
                                            </tr>    
                                               <tr>   
                                                <td>Educational qualification</td>
                                                <td><?php echo $details['educational_qualification']; ?></td>
                                            </tr>  
                                            <tr>      
                                                <td>Date Registered</td>
                                                <td><?php echo $details['date_registered']; ?></td>
                                            </tr>  
                                            <tr>   
                                                <td>Paid</td>
                                                <td><?php echo $details['paid']; ?>  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<select id="sel_paid"><option value="" > - Select - </option><option value="Yes">Yes</option><option value="No">No</option></select> <button style="display: inline;" id="btn_paid">Update</button></td>
                                            </tr>    

                                            <tr>   
                                                <td>Credentialed</td>
                                                <td><?php echo $details['approved']; ?> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<select id="sel_credentialed"><option value=""> - Select - </option><option value="Yes">Yes</option><option value="No">No</option></select> <button style="display: inline;" id="btn_credentialed">Update</button></td>
                                            </tr>    
                                            <tr>   
                                                <td>Agreement</td>
                                                <td><?php echo $details['completed']; ?>  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<select id="sel_agreed"><option value=""> - Select - </option><option value="Yes">Yes</option><option value="No">No</option></select> <button style="display: inline;" id="btn_agreed">Update</button></td>
                                            </tr>    
                                            <tr>   
                                                <td></td>
                                                <td></td>
                                            </tr>    

                                        </tbody>
                                    </table>

                                    </div>

                                       <div class="col-md-4" > 
                                         <p></p>
                                    
                                            <table>
                                                <tr><td><img src="../../../personal/doctor/passport/<?php echo $details['passport']; ?>.jpg" /></td></tr>
                                                <tr><td></td></tr>
                                                <tr><td><a style="width:100%; margin-top:20px;" class="btn btn-info btn-large" href="../../../personal/doctor/cv/<?php echo $details['resume']; ?>.docx">Download Resume</a></td></tr>
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
     <script type="text/javascript" src="doctor-details-js.js"></script>

       
    </body>
</html>