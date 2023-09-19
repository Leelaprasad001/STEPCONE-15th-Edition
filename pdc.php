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
    <!-- <link rel="stylesheet" href="./assets/css/flaticon.css">
    <link rel="stylesheet" href="./assets/css/gijgo.css"> -->
	<link rel="stylesheet" href="./assets/css/animate.min.css">
	<!-- <link rel="stylesheet" href="./assets/css/magnific-popup.css"> -->
	<link rel="stylesheet" href="./assets/css/fontawesome-all.min.css">
	<link rel="stylesheet" href="./assets/css/themify-icons.css">
	<link rel="stylesheet" href="./assets/css/slick.css">
	<!-- <link rel="stylesheet" href="./assets/css/nice-select.css"> -->
	<link rel="stylesheet" href="./assets/css/style.css">

    <link rel="stylesheet" href="./events/event.css">
    <link rel="stylesheet" href="./events/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.js"></script>
    <script src="./events/js/bootstrap.min.js"></script>
    <style>
    
        .event-title {
            padding-top: 35vh;
            padding-bottom: 35vh;
            background: url("././events/image/pdc.jpeg") no-repeat;
            opacity: 0.8;
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
            position: relative;
            z-index: 1;
        }
        .event-title .t p
        {
            font-size: 4rem;
            text-align: center;
            padding: 20px;
            text-transform: uppercase;
            font-size: 600;
            color:aliceblue
        }
        @media only screen and (min-width: 360px) and (max-width: 767px) {
        .event-title .t p
        {
            font-size: 2rem;
            line-height:30px;
            text-transform: uppercase;
            font-size: 600;
        }
}
        .event-title:before {
            content: "";
            position: absolute;
            box-sizing: border-box;
            left: 0;
            top: 0;
            right: 0;
            bottom: 0;
            background-color: black;
            opacity: 0.4;
            z-index: -1;
        }
        .person .profile a{
            color:#000;
        }
        .person .profile a:hover{
            color:#fff;
        }
    </style>
    <script>
        $(window).scroll(function () {
            if ($(this).scrollTop() > 400) {
                $('.chevron').fadeOut(200);
            } else {
                $('.chevron').fadeIn(200);
            }
        });
    </script>
</head>
<body>
    
    <?php
    include './header.php';
    ?>

    <div class="row event-title">
        <div class="col-2"></div>
        <div class="col-8 t" data-aos="zoom-out" data-aos-duration="2000">
            <p>Project Design Contest</p>
        </div>
        <div class="col-2"></div>
    </div>
    <div class="container">
        <div class="chevron"></div>
        <div class="chevron"></div>
        <div class="chevron"></div>
    </div>
    <div class="row event" data-aos="fade-right">
        <h2>Project Design Contest</h2>
    </div>
    <div class="row">
        <div class="col-lg-7 col-md-12 col-sm-12 content" data-aos="fade-right" align="justify">
            <p>"Project Design Contest" is a National level platform for one and all to witness one of the most beautiful and ground breaking amalgamation of science and technology. It is a professional discipline dealing with designing, developing and building. Through this event, every engineer gets an opportunity to show case his/her idea and innovation in the form of a working prototype, that is what engineering is all about. This working prototype goes through various aspects like innovation, ideology etc., in the process of assessment. For the ones with the unique analytical skills and the desire towards creating an impact, STEPCONE 2023 is providing a platform through "Project Design Contest" to exhibit their talents in National level.
            </p>
            <div class="buttons" data-aos="fade-up">
                 <a href="./eventRegistration.php?event=332"> <button>register</button></a>
                 <a href="./pdc.pdf" download> <button>download pdf</button></a>
            </div>
        </div>
        <div class="col-lg-5 col-md-12 col-sm-12 tools">
            <div class="box" data-aos="fade-right" data-aos-duration="1000">
                <div class="text">prize money:<br>winner-Rs 40,000/-</div>
            </div>
            <div class="box" data-aos="fade-right" data-aos-duration="1000">
                <div class="text">team size:<br>3-5 members(At Least One Female)</div>
            </div>
            <div class="box" data-aos="fade-right" data-aos-duration="1000">
                <div class="text">registration fee:<br>Rs 1,500/-</div>
            </div>
        </div>
        <div class="row person">
        <div class="co">FACULTY COORDINATORS</div>
            <div class="col-lg-3 col-md-6 col-sm-4 profile" data-aos="zoom-in" style="width:auto">
                <img src="./events/image/men.png" alt="">Dr. A. Siva Sangari <br></a>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-4 profile" data-aos="zoom-in" style="width:auto">
                <img src="./events/image/men.png" alt="">Dr. S. Chiranjeevi Rao <br></a>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-4 profile" data-aos="zoom-in" style="width:auto">
                <img src="./events/image/men.png" alt="">Dr. N S S Rama Krishna <br></a>
            </div>
        </div>
        
        <div class="row person">
        <div class="co mt-50">COORDINATORS</div>
            <div class="col-lg-3 col-md-6 col-sm-4 profile" data-aos="zoom-in" style="width:auto">
                <img src="./events/image/men.png" alt="">M. Vinay Kumar <br><a href="tel:8497908605">8497908605</a>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-4 profile" data-aos="zoom-in"style="width:auto">
                <img src="./events/image/men.png" alt=""> Ch. Bhavya Sai <br> <a href="tel:8309245622">8309245622</a>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-4 profile" data-aos="zoom-in" style="width:auto">
                <img src="./events/image/men.png" alt="">D. Aditya Ratnakar <br> <a href="tel:9704245058">9704245058</a>
            </div>
        </div>
    </div>
    <br><br>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    <script>
        AOS.init();
    </script>
    
    


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
    </body>
</html>