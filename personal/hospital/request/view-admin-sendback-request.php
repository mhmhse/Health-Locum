<?php
session_start();

error_reporting(E_ALL);
ini_set('display_errors', 'on');

include('../../../Connections/cn.php');
include('../security/security.php');
include('../../../functions/utilityFunction.php');

//include('../../functions/utilityFunction.php');
$hospital_id = $_SESSION['hospital_id_login'];
$hospital_details = getHospitalDetailsById($cn,$hospital_id);


?>
<?php

$request_id = mysqli_real_escape_string($cn,trim($_REQUEST['request_id']));



if($request_id == ""){
    header("location: index.php");
    exit;
}


?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>..:: Medline | View Approve Doctors ::..</title>

    <?php include('../../partials/css.php');?>

    </head>
    <body>
    	<div id="wrapper"><!-- start main wrapper -->
    	<?php include('../../partials/hospital-header.php');?>


    	<div class="main-page-title"><!-- start main page title -->
			<div class="container">
				<div class="page-title">Approve Doctors</div>
			</div>
		</div><!-- end main page title -->


        <div id="page-content" class="content-about"><!-- start content -->
           
                

                <div class="container">
               
                <div class="spacer-1">&nbsp;</div>
                    <div class="row clearfix">
                          <div class="col-md-8" > 
                                    <p></p>
                    
                    <input type="hidden" value="<?php echo $_REQUEST['request_id'];?>" id="dual_request_id">                                   

                                   <?php

                                  

                            $sql = "SELECT * FROM match_doctor where request_id='".$request_id."' order by id desc";
                            // $sql = "SELECT * FROM match_doctor";

                            $result = mysqli_query($cn,$sql);

                            
                            if(mysqli_num_rows($result) == 0){

                                echo "Empty result";
                            }
                            else{

                            while($request = mysqli_fetch_assoc($result)){
                                  
                            $doctor_details =  getDoctorsDetailsById($cn,$request['doctor_id']);


                                    ?>
                                       

                                    <table id="user" class="table table-bordered table-striped" style="clear: both">
                                        <tbody> 

                                            <tr>   
                                                <td rowspan="5">
                                                <?php
                                                      if($request['client_check'] == "yes"){ ?>

                                               <span><i class="fa fa-check-circle-o fa-2x"></i></span>

                                                <?php }else{
                                                    ?>

                                                <input type="checkbox" class="select_check_box" value=" <?php echo $doctor_details['id']; ?>">
                                                 
                                               <?php }?>

                                               &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<!--                                                <img src="../../doctor/passport/<?php //echo $doctor_details['passport']; ?>.jpg" width="200" height="200" />
 -->
                                                </td>


                                                <td><label>Dr. : </label> <?php echo substr($doctor_details['surname'], 0,1) . " . " . substr($doctor_details['other_name'],0,1); ?></td>
                                               
                                            </tr>                 

                                            <tr>      
                                                    
                                                <td><label>Grade</label> :  <?php echo $doctor_details['field_type']; ?></td>
                                            </tr>  

                                           
                                            <tr>   
                                                    
                                                <td> <label>Specialisation</label>  : <?php echo $doctor_details['specialist_type']; ?></td>
                                            </tr>    
                                              
                                            <tr>      
                                                    
                                                <td><label>Date of Birth</label> :  <?php echo $doctor_details['date_of_birth']; ?></td>
                                            </tr>  

                                             <tr>      
                                                    
                                                <td><label>Gender </label> :  <?php echo $doctor_details['gender']; ?> </td>
                                            </tr>  


                                             <!-- <tr>      
                                                    
                                                <td><label>Years of Experince</label> :  <?php //echo $doctor_details['years_experience']; ?> Year(s)</td>
                                            </tr>   -->

                                            <!-- <tr>   
                                                
                                                <td> <label>State of Residence</label>  : <?php //echo $doctor_details['state_of_residence']; ?> State</td>
                                            </tr>    --> 


                                        </tbody>
                                    </table>
                                    <p style="height:50px;"></p>

                                    <?php  }
                                    }

                                    ?>


                                    </div>



                        <div class="col-md-4">
                       
                            <div class="row">
                                <div class="col-md-12">
                                    <img src="../logo/<?php echo $hospital_details['logo'];?>.jpg" width="250" height="200">
                                </div>

                                <div class="col-md-12" style="margin-top:50px;">
                                    <button class="btn btn-large btn-primary" id="btn_send_checked_doctor">Approve Doctor</button>
                                </div>
                            </div>

                                <p></p>
                               
                        
                        </div>


                </div><!-- end container -->

</div><!-- end page content -->

    <?php include('../../partials/footer.php');?>
</div><!-- end wrapper -->
<?php include('../../partials/scripts.php');?>
<script type="text/javascript" src="sendback_match-js.js"></script>

                </body>
            </html>

