<?php

error_reporting(E_ALL);
ini_set('display_errors', 'on');

//header("Location: dashboard/index.php");
header("Location: request/request.php");
exit;
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>..:: Medline | Hospital Homepage ::..</title>

    <?php include('../partials/css.php');?>

    </head>
    <body>
    	<div id="wrapper"><!-- start main wrapper -->
    	<?php include('../partials/hospital-header.php');?>


    	<div class="main-page-title"><!-- start main page title -->
			<div class="container">
				<div class="page-title">Statistics</div>
			</div>
		</div><!-- end main page title -->


        <div id="page-content" class="content-about"><!-- start content -->
           
                

                <div class="container">
               
                <div class="spacer-1">&nbsp;</div>
                    <div class="row clearfix">
                        <div class="col-md-7 content-about">
                                <h6>Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus. </h6>
                                <p>
                                    Quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat.
                                </p>
                        </div>



                </div><!-- end container -->

</div><!-- end page content -->

    <?php include('../partials/footer.php');?>
</div><!-- end wrapper -->
<?php include('../partials/scripts.php');?>
                </body>
            </html>

