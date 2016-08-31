<?php

/* USER-AGENTS
================================================== */
function check_user_agent ( $type = NULL ) {
        $user_agent = strtolower ( $_SERVER['HTTP_USER_AGENT'] );
        if ( $type == 'bot' ) {
                // matches popular bots
                if ( preg_match ( "/googlebot|adsbot|yahooseeker|yahoobot|msnbot|watchmouse|pingdom\.com|feedfetcher-google/", $user_agent ) ) {
                        return true;
                        // watchmouse|pingdom\.com are "uptime services"
                }
        } else if ( $type == 'browser' ) {
                // matches core browser types
                if ( preg_match ( "/mozilla\/|opera\//", $user_agent ) ) {
                        return true;
                }
        } else if ( $type == 'mobile' ) {
                // matches popular mobile devices that have small screens and/or touch inputs
                // mobile devices have regional trends; some of these will have varying popularity in Europe, Asia, and America
                // detailed demographics are unknown, and South America, the Pacific Islands, and Africa trends might not be represented, here
                if ( preg_match ( "/phone|iphone|itouch|ipod|symbian|android|htc_|htc-|palmos|blackberry|opera mini|iemobile|windows ce|nokia|fennec|hiptop|kindle|mot |mot-|webos\/|samsung|sonyericsson|^sie-|nintendo/", $user_agent ) ) {
                        // these are the most common
                        return true;
                } else if ( preg_match ( "/mobile|pda;|avantgo|eudoraweb|minimo|netfront|brew|teleca|lg;|lge |wap;| wap /", $user_agent ) ) {
                        // these are less common, and might not be worth checking
                        return true;
                }
        }
        return false;
}

?>
			<div class="main-slider"><!-- start main-headline section -->
				<div class="slider-nav">
					<a class="slider-prev"><i class="fa fa-chevron-circle-left"></i></a>
					<a class="slider-next"><i class="fa fa-chevron-circle-right"></i></a>
				</div>
				<div id="home-slider" class="owl-carousel owl-theme">
					<div class="item-slide">
						<img src="images/upload/slide1.jpg" class="img-responsive" alt="dummy-slide" />
					</div>
					<div class="item-slide">
						<img src="images/upload/slide2.jpg" class="img-responsive" alt="dummy-slide" />
					</div>
				</div>
			</div><!-- end main-headline section -->



			<?php
$ismobile = check_user_agent('mobile');
if($ismobile) { ?>

<div class="row">
	<div class="col-md-12">
		<p> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="#recents-job" class="btn btn-default btn-yellow">Find a Job</a>   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;      <a href="login.php" class="btn btn-default btn-primary" >Find a Doctor</a></p>
	
	</div>

</div>

<?php }
?>


		
			<div class="headline container"><!-- start headline section -->
					<div class="row" >
						<div class="col-md-6 align-right">
							<h4>Easiest Way For Doctors to Find a Job</h4>
							
							<!-- <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using</p> -->
							<p><a href="#recents-job" class="btn btn-default btn-yellow">Find a Job</a></p>
						</div>
						<div class="col-md-6 align-left">
							<h4>Hire The Best Doctor For The Job</h4>
							<!-- <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using</p> -->
							<p><a href="login.php" class="btn btn-default btn-light" >Find a Doctor</a></p>
						</div>
						<div class="clearfix"></div>
					</div>
			</div><!-- end headline section -->