<?php
session_start();
error_reporting(E_ALL);
ini_set('display_errors', 'on');

include('../../../Connections/cn.php');
include('../../../functions/utilityFunction.php');
include('../security/security.php');


//$encoded_request_id = trim($_REQUEST['request_id']);
//$decoded_request_id = base64_decode($encoded_request_id);



//if(isset($_REQUEST['request_id']))

//if(isset($_REQUEST['match_type']) && isset($_REQUEST['request_id'])){
if(isset($_REQUEST['match_type']) && isset($_REQUEST['request_id'])){


     $match_type = trim($_REQUEST['match_type']);

    $request_id = trim($_REQUEST['request_id']);



if ($match_type == "auto"){
    //auto matching

    $request_Details = getRequestDetailsById($cn,$request_id);


//var_dump($request_Details);
$patchSQL = "";

$specialization = $request_Details['specialization'];
if($specialization != "Any"){
$patchSQL = $patchSQL . "AND field_type = '".$specialization."' ";
}else{
$patchSQL = $patchSQL . "AND not field_type = '' ";
}


// $gender = $request_Details['gender'];
// if($gender != "Any"){
// $patchSQL = $patchSQL . "AND gender = '".$gender."' ";
// }else{
//     $patchSQL = $patchSQL . "AND not gender = '' ";
// }


$state = $request_Details['state'];
if($state != "Any"){
$patchSQL = $patchSQL . "AND state_of_residence = '".$state."' ";
}else{
$patchSQL = $patchSQL . "AND not state_of_residence = '' ";
}

$rawSQL = "select *,'fresh' as r_type from doctor where approved = 'yes' and paid = 'yes' and completed = 'yes' ".$patchSQL;


//echo  $rawSQL;

$sqlPatcher = $patchSQL;
$sql =  $rawSQL;

$match_type_result = "Automatic Matching Result";
}
elseif ($match_type == "manual") {
    # code...
//}{
//manual matching 


$gumSQL = "";


$manual_specialty = trim($_REQUEST['manual_specialty']);
$manual_state = trim($_REQUEST['manual_state']);
// $marital_status = trim($_REQUEST['marital_status']);
// $manual_gender = trim($_REQUEST['manual_gender']);

// $year_of_experience_min = trim($_REQUEST['year_of_experience_min']);
// $year_of_experience_max = trim($_REQUEST['year_of_experience_max']);

// $age_range_min = trim($_REQUEST['age_range_min']);
// $age_range_max = trim($_REQUEST['age_range_max']);

//var_dump($age_range_min . " --- "  . $age_range_max);


//speciality
if($manual_specialty == "") {
   $gumSQL = $gumSQL . "";
}elseif ($manual_specialty != "" && $manual_specialty != "Any") {
     $gumSQL = $gumSQL . "AND field_type = '".$manual_specialty."' ";
}elseif($manual_specialty == "Any"){
 $gumSQL = $gumSQL . "AND not field_type = '' ";
}



//state
if($manual_state == "") {
   $gumSQL = $gumSQL . "";
}elseif ($manual_state != "" && $manual_state != "Any") {
     $gumSQL = $gumSQL . "AND state_of_residence = '".$manual_state."' ";
}elseif($manual_state == "Any"){
 $gumSQL = $gumSQL . "AND not state_of_residence = '' ";
}


//marital_status
// if($marital_status == "") {
//    $gumSQL = $gumSQL . "";
// }elseif ($marital_status != "" && $marital_status != "Any") {
//      $gumSQL = $gumSQL . "AND marital_status = '".$marital_status."' ";
// }elseif($marital_status == "Any"){
//  $gumSQL = $gumSQL . "AND not marital_status = '' ";
// }



//manual_gender
// if($manual_gender == "") {
//    $gumSQL = $gumSQL . "";
// }elseif ($manual_gender != "" && $manual_gender != "Any") {
//      $gumSQL = $gumSQL . "AND gender = '".$manual_gender."' ";
// }elseif($manual_gender == "Any"){
//  $gumSQL = $gumSQL . "AND not gender = '' ";
// }

//experience
//if($year_of_experience_min != "1" && $year_of_experience_max != "1"){
// if($year_of_experience_max != "1"){
//      $gumSQL = $gumSQL . "AND years_experience between {$year_of_experience_min} and {$year_of_experience_max} ";
// }else{
//       $gumSQL = $gumSQL . "";
// }

//age range
//if($age_range_min != "15" && $age_range_max != "15"){
//if($age_range_max != "15"){
// if($age_range_max != "15"){
//      $gumSQL = $gumSQL . "AND year(CURDATE()) - year(date_of_birth) between {$age_range_min} and {$age_range_max} ";
// }else{
//       $gumSQL = $gumSQL . "";

// }







$rawManualSQL = "select *,'fresh' as r_type from doctor where approved = 'yes' and paid = 'yes' and completed = 'yes' ".$gumSQL;


$sql = $rawManualSQL;
$sqlPatcher = $gumSQL;

$match_type_result = "Manual Matching Result";
//echo $sql;
}


}


// elseif (isset($_REQUEST['request_id']) && !isset($_REQUEST['match_type'])) {
//     # code...
//     $rawManualSQL = "select *,'fresh' as r_type from doctor where approved = 'yes' and paid = 'yes' and completed = 'yes' ".$gumSQL;

// $sql = "select *,'fresh' as r_type from doctor where approved = 'yes' and paid = 'yes' and completed = 'yes' ORDER BY RAND()";
// $sqlPatcher = "";
// $match_type_result = "All Matching Result";


// }
else{

//if no request string is sent... use this block
$sql = "select *,'fresh' as r_type from doctor where approved = 'yes' and paid = 'yes' and completed = 'yes' ORDER BY RAND()";
$sqlPatcher = "";
$match_type_result = "Random Matching Result";

}



     
//echo $sql;
?>


<!DOCTYPE html>
<html>
    <head>
        
        <!-- Title -->
        <title>..:: Medline | View match request :;..</title>
        
        <meta content="width=device-width, initial-scale=1" name="viewport"/>
        <meta charset="UTF-8">
        <meta name="description" content="Admin Dashboard Template" />
        <meta name="keywords" content="admin,dashboard" />
        <meta name="author" content="Steelcoders" />
        
        <!-- Styles -->
             <?php include('../../../admin_partials/css.php'); ?>

        <link rel="stylesheet" href="//cdn.datatables.net/1.10.7/css/jquery.dataTables.min.css" type="text/css">
        <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">



    <!-- Form Slider -->
    <link rel="stylesheet" href="../../../css/jslider.css" type="text/css">
    <link rel="stylesheet" href="../../../css/jslider.round.css" type="text/css">
    <!-- Form Slider -->
          
             

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
                    <h3>Match Doctors</h3>
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



                     <?php if(!isset($_REQUEST['request_id'])){?>
                      <div class="row">
                         <table width="95%" align="center">
                             <tr>
                                 <td>
                                  <select class="form-control" id="dual_request_id">
                                   <option value="">- Select Request -</option>
                                
                                    <?php

                                    $request_result = mysqli_query($cn,"SELECT * FROM request where taken = 'No' order by id desc");
                                    while ($requestData = mysqli_fetch_assoc($request_result)) {   
                                        $hospital_data = getHospitalDetailsById($cn,$requestData['hospital_id']);
                                        $hospital_name = $hospital_data['hospital_name'];
                                 ?>
                               <option value="<?php echo $requestData['id']; ?>"><?php echo $hospital_name . "  :  " . $requestData['date_posted']; ?></option>
                                <?php
                                   }
                                   ?>
                                    </select>

                                 </td>
                             </tr>
                            
                         </table>
                     </div>
                    <?php }?>



                     <?php if(isset($_REQUEST['request_id'])){?>
                      <div class="row">
                         <table width="95%" align="center">
                             <tr>
                                 <td>
                                   <input id="dual_request_id" type="hidden" value="<?php echo $_REQUEST['request_id']; ?>">
                                 </td>
                             </tr>
                            
                         </table>
                     </div>
                    <?php }?>



                    <p></p>
                    <p></p>
                    <p></p>

                    <div class="row">
                        <div class="col-md-12"><input style="width:100%;" id="btn_auto_match_doctor" type="button" class="btn btn-info btn-large" value="Auto Match Doctors"></div>
                     </div>

                     <p></p>

                                         


                      <div class="row">
                         <table width="95%" align="center">
                             <tr>
                                 <td>
                                    <select id="manual_specialty" class="form-control">
                                        <option value="">- Select -</option>
                                       
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

                                      
                                        <option value="Any">Any</option>
                                    </select>
                                </td>
                                 <td><select id="manual_state" class="form-control"><option value="">- State -</option><option value="Lagos">Lagos</option><option value="Any">Any</option></select></td>
                                 <!-- <td><select id="manual_marital_status" class="form-control"><option value="">- Marital status -</option><option value="Single">Single</option><option value="Married">Married</option><option value="Any">Any</option></select></td>
                                 <td><select id="manual_gender" class="form-control"><option value="">- Gender -</option><option value="Male">Male</option><option value="Female">Female</option><option value="Any">Any</option></select></td> -->
                             </tr>
                         </table>
                     </div>


                    <!--  <div class="form-group  col-md-12">
                        <label for="years_of_experience_match" style="color:black;" class="label clearfix">Years of experience(-/+)</label>
                        <input id="years_of_experience_match" class="value-slider" type="text" name="area" value="1;1" />
                    </div>

                     
                 <div class="form-group  col-md-12">
                        <label for="age_range_match" style="color:black;" class="label clearfix">Age range(-/+)</label>
                        <input id="age_range_match" class="value-slider" type="text" name="area" value="1;1" />
                    </div> -->

                    <div class="col-md-12" style="margin-top:30px;"><input style="width:100%;" id="manual_auto_match_doctor" type="button" class="btn btn-danger btn-large" value="Manual Match Doctors"></div>








                        <div class="col-md-12">

                <?php


                             //$request_id = trim($_REQUEST['request_id']);
                         if(isset($_REQUEST['request_id'])){
                            $request_id = trim($_REQUEST['request_id']);
                           // echo "request id is set";

                          $extension = " union select *,'old' as r_type from doctor where id IN(Select doctor_id from match_doctor where request_id = '".$request_id."')  {$sqlPatcher} order by r_type desc ";
                            // $extension = "";
                          $realSql = "select *,'fresh' as r_type from doctor where approved = 'yes' and paid = 'yes' and completed = 'yes' and NOT ID in (select doctor_id from match_doctor where request_id = '".$request_id."') ";

                          $fullSqlz = $realSql . $sqlPatcher . $extension ;

                        $sql  = $fullSqlz;

                      // echo $sql;


                             }
      
                 $result = mysqli_query($cn,$sql);
                if (!$result)
                  {
                  echo("Error description: " . mysqli_error($cn));
                  exit;
                  }
                    ?>


                        <div class="panel panel-white">
                                    <div class="panel-heading clearfix">
                                        <!-- <h3 class="panel-title">What do u want to do</h3> -->
                                    </div>
                                    <div class="panel-body">
                                        <div role="tabpanel">
                                            <!-- Nav tabs -->
                                            <ul class="nav nav-tabs nav-justified" role="tablist">
                                                <li role="presentation" class="active"><a href="#tab21" role="tab" data-toggle="tab">Match Doctors</a></li>
                                                <li role="presentation"><a href="#tab22" role="tab" data-toggle="tab">Approve Doctors</a></li>
                                              <!--   <li role="presentation"><a href="#tab23" role="tab" data-toggle="tab">Tab 3</a></li>
                                                <li role="presentation"><a href="#tab24" role="tab" data-toggle="tab">Tab 4</a></li> -->
                                            </ul>
                                            <!-- Tab panes -->
                                            <div class="tab-content">
                                                <div role="tabpanel" class="tab-pane active fade in" id="tab21">
                                                    <!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitat.</p> -->
                                                      <!-- wher do we go from here -->

                                                       <h3><?php echo $match_type_result; ?></h3>




                                                         <?php                          
                if(mysqli_num_rows($result) == 0){
                    echo "Auto Match return zero record";
                }else{

                ?>
                               <table id="view_admin_match_doctor" class="table table-striped table-condensed">
                              
                               <thead>
                                     <tr>
                                    <th></th>
                                   <th></th>
                                   <th>Name</th>
                                    <th>Specialty</th>
                                    <th>Gender</th>
                                    <th>Age</th>
                                    <th>Experience</th>
                                    <th>Qualification</th>
                                    <th>view</th>
                                </tr>     
                               </thead>    
                                
                                <tfoot>
                                
                                <tr>
                                        <th></th>
                                   <th></th>
                                   <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                </tr>
                                </tfoot>


                                <tbody>


                               <?php

                      
                               $sn = 1;
                            while($matchData = mysqli_fetch_assoc($result)){

                                if($matchData['r_type'] == "old"){
                                    echo  "<tr style='background-color: rgb(97, 135, 203);color: white;'>";
                                }else{
                                ?>

                                    <tr>
                                    <?php } ?>
                                          <td class=" dt-body-left"><?php echo $sn++; ?></td>
                                        <td><input class="select_check_box" value="<?php echo $matchData['id']; ?>" type="checkbox"></td>
                                        <td class=" dt-body-left"><?php echo $matchData['surname'] . "  " . $matchData['other_name']; ?></td>
                                        <td class=" dt-body-center"><?php echo $matchData['field_type']; ?></td>
                                        <td class=" dt-body-left"><?php echo $matchData['gender']; ?></td>
                                        <td class=" dt-body-left"><?php
                                          $year_of_birth = $matchData['date_of_birth'];
                                        //echo (int)Date('Y') - $year_of_birth . " years" ;



                                            $createDate = new DateTime($year_of_birth);

                                            $strip = $createDate->format('Y-m-d');
                                            //var_dump($strip); // string(10) "2012-09-09"

                                            $now = new DateTime();
                                            $difference = $now->diff($createDate, true);
                                            //var_dump($difference);
                                            echo $difference->y;



                                         ?> years </td>
                                        <td class=" dt-body-center"><?php echo $matchData['years_experience']; ?> years</td>
                                        <td class=" dt-body-center"><?php echo $matchData['educational_qualification']; ?></td><td>
                                        <a href="../doctors/doctor-details.php?doctor_id=<?php echo base64_encode($matchData['id']); ?>" class="waves-effect waves-button"><span><i class="fa fa-info"></i></span><p></p><span class="arrow"></span></a>

                                        </td>


                                    </tr>

                                     <?php
                            }
                                ?>

                                </tbody>
                                                          </table>

                    <input type="button" class="form-control"  value="Send Match doctor" id="btn_send_match_doctor">
                                                    
                                <?php
                            }
                                ?>




                       

                                                </div>
                                                <div role="tabpanel" class="tab-pane fade" id="tab22">
                                                    <!-- <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p> -->
                                                    <!-- am waiting for the result -->

                                                     <h3><?php echo $match_type_result; ?></h3>

                                                       <?php                          


                          if(isset($_REQUEST['request_id'])){
                            $request_id = trim($_REQUEST['request_id']);

                          $extension = " union select *,'old' as r_type from doctor where id IN(Select doctor_id from match_doctor where request_id = '".$request_id."')  order by r_type desc";

                          $realSql = "select *,'fresh' as r_type from doctor where approved = 'yes' and paid = 'yes' and completed = 'yes' and NOT ID in (select doctor_id from match_doctor where request_id = '".$request_id."') ";

                            //echo $fullSqlz = $realSql . $sqlPatcher . $extension;
                           $fullSql = $realSql . $sqlPatcher . $extension;

                        //$fullSql  = $sql;

                             }else{
                                                    
                                 $fullSql  = $sql;
                                            
                            }



                                           
                                               //  $fullSql  = $sql;

                                          
                                                 // echo " full SQL IS : " . $fullSql;

                 $result2 = mysqli_query($cn,$fullSql);
                if (!$result2)
                  {
                  echo("Error description2 : " . mysqli_error($cn));
                  exit;
                  }

                if(mysqli_num_rows($result2) == 0){
                    echo "Auto Match return zero record";
                }else{

                ?>
                               <table id="view_admin_send_match_doctor" class="table table-striped table-condensed">
                              
                               <thead>
                                     <tr>
                                    <th></th>
                                   <th></th>
                                   <th>Name</th>
                                    <th>Specialty</th>
                                    <th>Gender</th>
                                    <th>Age</th>
                                    <th>Experience</th>
                                    <th>Qualification</th>
                                    <th>view</th>
                                </tr>     
                               </thead>    
                                
                                <tfoot>
                                
                                <tr>
                                        <th></th>
                                   <th></th>
                                   <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                </tr>
                                </tfoot>


                                <tbody>


                               <?php

                      
                               $sn = 1;
                            while($matchData2 = mysqli_fetch_assoc($result2)){



                                    if(isset($_REQUEST['request_id'])){
                                    $request_id = trim($_REQUEST['request_id']);
                                    $client_check_data = getCheckedApproveMatchDoctorById($cn,$request_id,$matchData2['id']);

                                    //var_dump($client_check_data);

                                    if($client_check_data['client_check'] == "yes"){
                                         echo  "<tr style='background-color: rgb(97, 203, 159); color: white;'>";
                                     }elseif($matchData2['r_type'] == "old"){
                                    echo  "<tr style='background-color: rgb(97, 135, 203);color: white;'>";
                                }else{
                                     echo "<tr>";
                                }



                            }
                            //if if request_id is not set
                            else{



                                 if($matchData2['r_type'] == "old"){
                                    echo  "<tr style='background-color: rgb(97, 135, 203);color: white;'>";
                                }else{
                                     echo "<tr>";
                                }
                                }
                                 ?>

                                 
                                          <td class=" dt-body-left"><?php echo $sn++; ?></td>
                                        <td><input class="select_approve_checkbox" value="<?php echo $matchData2['id']; ?>" type="checkbox"></td>
                                        <td class=" dt-body-left"><?php echo $matchData2['surname'] . "  " . $matchData2['other_name']; ?></td>
                                        <td class=" dt-body-center"><?php echo $matchData2['field_type']; ?></td>
                                        <td class=" dt-body-left"><?php echo $matchData2['gender']; ?></td>
                                        <td class=" dt-body-left"><?php
                                          $year_of_birth2 = $matchData2['date_of_birth'];
                                        //echo (int)Date('Y') - $year_of_birth . " years" ;



                                            $createDate2 = new DateTime($year_of_birth2);

                                            $strip2 = $createDate2->format('Y-m-d');
                                            //var_dump($strip); // string(10) "2012-09-09"

                                            $now2 = new DateTime();
                                            $difference2 = $now2->diff($createDate2, true);
                                            //var_dump($difference);
                                            echo $difference2->y;



                                         ?> years </td>
                                        <td class=" dt-body-center"><?php echo $matchData2['years_experience']; ?> years</td>
                                        <td class=" dt-body-center"><?php echo $matchData2['educational_qualification']; ?></td><td>
                                        <a href="../doctors/doctor-details.php?doctor_id=<?php echo base64_encode($matchData2['id']); ?>" class="waves-effect waves-button"><span><i class="fa fa-info"></i></span><p></p><span class="arrow"></span></a>

                                        </td>


                                    </tr>

                                     <?php
                            }
                                ?>

                                </tbody>
                                                          </table>

                   <input type="button" class="form-control"  value="Approved Selected Doctors" id="btn_send_approv_doctor">
                  
                                
                                <?php
                            }
                                ?>







                                                </div>
                                              <!--   <div role="tabpanel" class="tab-pane fade" id="tab23">
                                                    <p>Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo.</p>
                                                </div>
                                                <div role="tabpanel" class="tab-pane fade" id="tab24">
                                                    <p>Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus.</p>
                                                </div> -->
                                            </div>
                                        </div>
                                    </div>
                                </div>


                    
                    <!-- <div class="row" style="margin-top:10px;"> -->

                   

                

                       <!--  </div> -->
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
        <script type="text/javascript" src="../../../js/tmpl.js"></script>
        <script type="text/javascript" src="../../../js/jquery.dependClass-0.1.js"></script>
        <script type="text/javascript" src="../../../js/draggable-0.1.js"></script>
        <script type="text/javascript" src="../../../js/jquery.slider.js"></script>
        <script type="text/javascript" src="send_match-js.js"></script>

<!-- Form Slider -->
    </body>
</html>