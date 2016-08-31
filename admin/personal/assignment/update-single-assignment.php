<?php

include('../../../Connections/cn.php');

$request_type = $_POST['request_type'];


//update assignment status
if($request_type == "update status"){


$assignment_id = $_POST['assignment_id'];
$sel_status = $_POST['sel_status'];


 $sql = "update assignment set status ='".$sel_status."' where id='".$assignment_id."'";
 $result = mysqli_query($cn,$sql);

  if (!$result)
  {
  echo("Error description: " . mysqli_error($cn));
  exit;
  }
  else{
      echo "Success";
  }



}





?>