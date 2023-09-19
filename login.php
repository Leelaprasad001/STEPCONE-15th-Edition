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
    <!--login-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
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
    <?php
    include './header.php';
    ?>
    <main>
        <section>
            <div class="container mb-100">
                <div class="row" style="position:relative; top:50px;">
                    <div class="col-4 col-lg-4 col-md-4 col-sm-12">

                    </div>
                    <div class="col-4 col-lg-4 col-md-4 col-sm-12">
                        <div class="login-form">
                            <form action="./includes/loginAPI.php" method="post">
                                <div class="avatar"><i class="material-icons">&#xE7FF;</i></div>
                                <h4 class="modal-title">Login to Your Account</h4>
                                <div class="form-group">
                                    <input type="text" name="user" class="form-control" placeholder="Username"
                                        required="required">
                                </div>
                                <div class="form-group">
                                    <input type="password" name="password" class="form-control" placeholder="Password"
                                        required="required">
                                </div>
                                <div class="form-group small clearfix">
                                    <label class="checkbox-inline"><input type="checkbox"> Remember me</label>
                                    <a href="./contact_team.php" class="forgot-link">Forgot Password?</a>
                                </div>
                                <input type="submit" name="Login" class="btn btn-primary btn-block btn-lg"
                                    value="Login">
                            </form>
                            <div class="text-center small">Don't have an account? <a href="./Registration.php">Sign up</a></div>
                        </div>
                    </div>
                    <div class="col-4 col-lg-4 col-md-4 col-sm-12">

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
    $(window).scroll(function() {
        if ($(window).width() > 995) {
            $('.navbar-nav').toggleClass('angle-bg', $(this).scrollTop() > 50);
        }
    })
    </script>


<script src="./assets/js/d_insp.js"></script>

</body>

</html>