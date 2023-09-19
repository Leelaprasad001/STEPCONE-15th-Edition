<?php
// session_start();
?>
<!doctype html>
<html class="no-js" lang="zxx">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Stepcone 2023</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="shortcut icon" href="./images/favicon_transp.png" type="image/x-icon">

	
</head>
<body>
    <!-- ? Preloader Start -
    <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="preloader-circle"></div>
                <div class="preloader-img pere-text">
                    <img src="./assets/img/logo/loder.png" alt="">
                </div>
            </div>
        </div>
    </div>
    -- Preloader Start -->
   <!-- Start header -->
	

<header class="top-navbar">

		<nav class="navbar navbar-expand-lg navbar-light bg-light">
			<div class="container-fluid">
				<a class="navbar-brand" href="index.php">
					<img src="./assets/img/logo.png" alt="" style="height:3.5rem"/><span class="st" style="position: relative; top:15px; padding-left:10px">STEPCONE</span>
				</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbars-rs-food" aria-controls="navbars-rs-food" aria-expanded="false" aria-label="Toggle navigation">
				  <span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbars-rs-food">
					<ul class="navbar-nav ml-auto angel-bg">
						<li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="./about.php">About</a></li>

						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="dropdown-a" data-toggle="dropdown">Events</a>
							<div class="dropdown-menu" aria-labelledby="dropdown-a">
								<a class="dropdown-item" href="./flagship.php">Flagship Events</a>
								<a class="dropdown-item" href="./tech.php">Technical Events</a>
								<a class="dropdown-item" href="./spot.php">Spot Events</a>
							</div>
						</li>
						<li class="nav-item"><a class="nav-link" href="./Registration.php">Registration</a></li>
                        <li class="nav-item"><a class="nav-link" href="./accommodation.php">Accommodation</a></li>
                        <!-- <li class="nav-item"><a class="nav-link" href="./login.php">Login</a></li> -->
                        <?php
                        if(!isset($_SESSION['mail'])) {
                            echo '
                            <li class="nav-item"><a class="nav-link" href="./login.php">Login</a></li>
                            ';
                        }
                        else {
                            echo '
                            <li class="nav-item"><a class="nav-link" href="./includes/logoutAPI.php">Logout</a></li>
                            ';
                        }
                        ?>
                        <li class="nav-item"><a class="nav-link" href="./contact.php">Contact</a></li>
					</ul>
				</div>
                <a class="navbar-brand gmr" href="#">
					<img src="./assets/img/gmr.png" class="logo-gmr" alt="" style="height:3.5rem;margin-left:70px;"/>
				</a>
			</div>
		</nav>
	</header>


    <!-- Scroll Up -->
    <div id="back-top" >
        <a title="Go to Top" href="#"> <i class="fas fa-level-up-alt"></i></a>
    </div>

    <!-- JS here -->

   <script src="./assets/js/vendor/modernizr-3.5.0.min.js"></script>
   <!-- Jquery, Popper, Bootstrap -->
   <script src="./assets/js/vendor/jquery-1.12.4.min.js"></script>
   <script src="./assets/js/popper.min.js"></script>
   <script src="./assets/js/bootstrap.min.js"></script>
   <!-- Jquery Mobile Menu -->
   <script src="./assets/js/jquery.slicknav.min.js"></script>
   <!-- Jquery Slick , Owl-Carousel Plugins -->
   <script src="./assets/js/owl.carousel.min.js"></script>
   <script src="./assets/js/slick.min.js"></script>
   <!-- One Page, Animated-HeadLin -->
   <script src="./assets/js/wow.min.js"></script>
   <script src="./assets/js/animated.headline.js"></script>
   <script src="./assets/js/jquery.magnific-popup.js"></script>

   <!-- Date Picker -->
   <script src="./assets/js/gijgo.min.js"></script>
   <!-- counter , waypoint -->
   <script src="./assets/js/jquery.counterup.min.js"></script>
   <script src="./assets/js/waypoints.min.js"></script>
   <script src="./assets/js/jquery.countdown.min.js"></script>
   <!-- contact js -->
   <script src="./assets/js/contact.js"></script>
   <script src="./assets/js/jquery.form.js"></script>
   <script src="./assets/js/jquery.validate.min.js"></script>
   <script src="./assets/js/mail-script.js"></script>
   <script src="./assets/js/jquery.ajaxchimp.min.js"></script>
   
   <!-- Jquery Plugins, main Jquery -->	
   <script src="./assets/js/plugins.js"></script>
   <script src="./assets/js/main.js"></script>
   
   <!-- ALL JS FILES-->
   <script src="js/jquery-3.2.1.min.js"></script>
   <!-- <script src="js/popper.min.js"></script>
   <script src="js/bootstrap.min.js"></script> -->
    
    <script>
        $(document).ready(function () { 
            $(document).click(function () {
                $('.navbar-collapse').collapse('hide');
            });
        });
    </script>
    <script>
        $(window).scroll(function(){
            if($(window).width() > 995)
            {
                $('.navbar-nav').toggleClass('angle-bg',$(this).scrollTop()>50);
            }
        })
       
    </script>

   	
    


<script src="./assets/js/d_insp.js"></script>

</body>
</html>