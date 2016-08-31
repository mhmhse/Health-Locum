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
        <title>..:: Medline | View all Hospital ::..</title>
        
        <meta content="width=device-width, initial-scale=1" name="viewport"/>
        <meta charset="UTF-8">
        <meta name="description" content="Admin Dashboard Template" />
        <meta name="keywords" content="admin,dashboard" />
        <meta name="author" content="Steelcoders" />
        
        <!-- Styles -->
             <?php include('../../../admin_partials/css.php'); ?>

        <link rel="stylesheet" href="//cdn.datatables.net/1.10.7/css/jquery.dataTables.min.css" type="text/css">
        <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
          
             

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
                <div class="profile"><img src="../assets/images/avatar1.png" width="52" alt="David Green"/><span>David Green</span></div>
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
                    <h3>Manage Hospitals</h3>
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


                        <div class="col-md-12">
                               

                               <table id="view_admin_hospital" class="table table-hover">

                           
                               <thead>
                                     <tr>
                                    <th>Hospital</th>
                                    <th class=" dt-body-center">Phone</th>
                                    <th>Hefamaa Number</th>
                                    <th>State</th>
                                    <th>Date registered</th>
                                    <th>Paid</th>
                                    <th>Completed</th>
                                    <th></th>
                                </tr>     
                               </thead>    
                                
                                <tfoot>
                                
                                <tr>
                                   <th>Hospital</th>
                                   <th>Phone</th>
                                   <th>Hefamaa Number</th>
                                    <th>State</th>
                                    <th>Date registered</th>
                                    <th>Paid</th>
                                    <th>Completed</th>
                                    <th></th>
                                </tr>
                                </tfoot>


                                <tbody>


                               <?php

                               $sql = "SELECT * FROM hospital order by id desc";
                            $result = mysqli_query($cn,$sql);
                            while($hospital = mysqli_fetch_assoc($result)){


//$response =  getHospitalDetailsById($cn,$hospital['hospital_id']);
//$logo = $response['logo'];

//$hospital_name = $response['hospital_name'];
                                ?>

                                    <tr>
                                        <td  class=" dt-body-left"><?php echo $hospital['hospital_name']; ?></td>
                                        <td class=" dt-body-center"><?php echo $hospital['phone']; ?></td>
                                          <td class=" dt-body-left"><?php echo $hospital['hefamaa']; ?></td>
                                        <td class=" dt-body-left"><?php echo $hospital['state']; ?></td>
                                        <td class=" dt-body-left"><?php echo $hospital['date_registered']; ?></td>
                                        <td class=" dt-body-center"><?php echo $hospital['paid']; ?></td>
                                        <td class=" dt-body-center"><?php echo $hospital['completed']; ?></td>
                                        <td><a href="hospital-details.php?hospital_id=<?php echo base64_encode($hospital['id']); ?>" class="waves-effect waves-button"><span><i class="fa fa-info"></i></span><p></p><span class="arrow"></span></a>

                                        </td>


                                    </tr>

                                     <?php
                            }
                                ?>

                                </tbody>
                           


                               </table>




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

        <script type="text/javascript" src="//cdn.datatables.net/1.10.7/js/jquery.dataTables.min.js"></script>
        <script type="text/javascript" src="index-js.js"></script>

<!-- Form Slider -->
    </body>
</html>