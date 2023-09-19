<?php
session_start();
?>
<!doctype html>
<html class="no-js" lang="zxx">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Stepcone 2023</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
   
  <!-- Icon -->
  <link rel="shortcut icon" href="./images/favicon_transp.png" type="image/x-icon">
	<!-- CSS here -->
	<link rel="stylesheet" href="./assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="./assets/css/owl.carousel.min.css">
	<link rel="stylesheet" href="./assets/css/slicknav.css">
    <!-- <link rel="stylesheet" href="assets/css/flaticon.css">
    <link rel="stylesheet" href="assets/css/gijgo.css"> -->
	<link rel="stylesheet" href="./assets/css/animate.min.css">
	<!-- <link rel="stylesheet" href="assets/css/magnific-popup.css"> -->
	<link rel="stylesheet" href="./assets/css/fontawesome-all.min.css">
	<link rel="stylesheet" href="./assets/css/themify-icons.css">
	<link rel="stylesheet" href="./assets/css/slick.css">
	<!-- <link rel="stylesheet" href="assets/css/nice-select.css"> -->
	<link rel="stylesheet" href="./assets/css/style.css">
</head>
<body>
    <!-- ? Preloader Start -
    <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="preloader-circle"></div>
                <div class="preloader-img pere-text">
                    <img src="assets/img/logo/loder.png" alt="">
                </div>
            </div>
        </div>
    </div>
    -- Preloader Start -->
   <!-- Start header -->
   <?php
   include './header.php';
   ?>
    <main>
        <!--? Brand Area Start -->
        <section class="section">
           <div class="title text-center">
               <h2>Spot Events</h2>
           </div> 
           <div class="container mt-50 mb-50">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="grid">
                      <figure class="effect-oscar">
                        <img src="./events/image/squid game.png" alt="img09"/>
                        <figcaption>
                          <h2>SQUID GAMES</h2>
                          <p>TIME: 11:30 AM - 3 PM</p>
                          <p>VENUE: LAB</p>
                          <p><a href="./events/squid game.php">View more</a></p>
                        </figcaption>
                      </figure>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="grid">
                      <figure class="effect-oscar">
                        <img src="./events/image/sarathy.png" alt="img09"/>
                        <figcaption>
                          <h2>SARATHY</h2>
                          <p>TIME: 11 AM - 3PM</p>
                          <p>VENUE: IOT LAB</p>
                          <p><a href="./events/sarathy.php">View more</a></p>
                        </figcaption>
                      </figure>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="grid">
                      <figure class="effect-oscar">
                        <img src="./events/image/foxhunt.png" alt="img09"/>
                        <figcaption>
                          <h2>FOX HUNT</h2>
                          <p>TIME: 9 AM - 11 PM</p>
                          <p>VENUE: ORACLE LAB</p>
                          <p><a href="./events/fox hunt.php">View more</a></p>
                        </figcaption>
                      </figure>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="grid">
                      <figure class="effect-oscar">
                        <img src="./events/image/codetunnel.png" alt="img09"/>
                        <figcaption>
                          <h2>CODETUNNEL</h2>
                          <p>TIME: 11 AM - 1 PM</p>
                          <p>VENUE: SAP LAB</p>
                          <p><a href="./events/code tunnel.php">View more</a></p>
                        </figcaption>
                      </figure>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="grid">
                      <figure class="effect-oscar">
                        <img src="./events/image/chem-o-rover.png" alt="img09"/>
                        <figcaption>
                          <h2>CHEM-O-ROVER</h2>
                          <p>TIME: 11 AM - 1 PM</p>
                          <p>VENUE: SAP LAB</p>
                          <p><a href="./events/chem-o-rover.php">View more</a></p>
                        </figcaption>
                      </figure>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12" style="text-align: center; margin-top:100px;">
                    <div class="grid">
                      <h3>Many More Exciting Events are Coming.....</h3>
                    </div>
                </div>
            </div>
        </section>
    </main>

    

    <?php
    include './footer.php';
    ?>
    <!-- JS here -->

    <script src="../assets/js/vendor/modernizr-3.5.0.min.js"></script>
    <!-- Jquery, Popper, Bootstrap -->
    <script src="../assets/js/vendor/jquery-1.12.4.min.js"></script>
    <script src="../assets/js/popper.min.js"></script>
    <script src="../assets/js/bootstrap.min.js"></script>
    <!-- Jquery Mobile Menu -->
    <script src="../assets/js/jquery.slicknav.min.js"></script>

    <!-- Jquery Slick , Owl-Carousel Plugins -->
    <script src="../assets/js/owl.carousel.min.js"></script>
    <script src="../assets/js/slick.min.js"></script>
    <!-- One Page, Animated-HeadLin -->
    <script src="../assets/js/wow.min.js"></script>
    <script src="../assets/js/animated.headline.js"></script>
    <script src="../assets/js/jquery.magnific-popup.js"></script>

    <!-- Date Picker -->
    <script src="../assets/js/gijgo.min.js"></script>
    <!-- Nice-select, sticky -->
    <script src="../assets/js/jquery.nice-select.min.js"></script>
    <script src="../assets/js/jquery.sticky.js"></script>
    
    <!-- counter , waypoint -->
    <script src="../assets/js/jquery.counterup.min.js"></script>
    <script src="../assets/js/waypoints.min.js"></script>
    <script src="../assets/js/jquery.countdown.min.js"></script>
    <!-- contact js -->
    <script src="../assets/js/contact.js"></script>
    <script src="../assets/js/jquery.form.js"></script>
    <script src="../assets/js/jquery.validate.min.js"></script>
    <script src="../assets/js/mail-script.js"></script>
    <script src="../assets/js/jquery.ajaxchimp.min.js"></script>
    
    <!-- Jquery Plugins, main Jquery -->	
    <script src="../assets/js/plugins.js"></script>
    <script src="../assets/js/main.js"></script>
    <script>
        $(window).scroll(function(){
            if($(window).width() > 995)
            {
                $('.navbar-nav').toggleClass('angle-bg',$(this).scrollTop()>50);
            }
        })
       
    </script>
    </body>
</html>