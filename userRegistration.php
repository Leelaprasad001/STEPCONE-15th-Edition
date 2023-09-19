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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <style>
    table,
    th,
    td {
        border: 1px solid black;

    }

    table {
        padding: 10px;
    }

    .register-main button {
        color: blue;
        border-radius: 10px;
    }

    .register-main {
        padding: 5px;
    }

    form label {
        font-weight: 400;
        font-size: 20px;
    }
    </style>
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
    <header class="top-navbar">
        <?php
        include('./header.php');
        ?>
    </header>



    <main>
        <!--? Brand Area Start -->
        <section class="section">
            <div class="title text-center">
                <h2>User Registration</h2>
            </div>
            <div class="container">
            <div class="row">
                <div class="col-lg-2 col-md-2 col-sm-12"></div>
                <div class="col-lg-8 col-md-8 col-sm-12">
                    <form class="py-5 needs-validation" action="./includes/userAPI.php" method="POST" enctype="multipart/form-data">
                        <h3><span class="badge bg-primary my-3">Account Details</span></h3>
                        <p><span class='bt btn-success text-light'>Account Number :
                                <b>183610100011155</b></span><br><br>
                            <span class='bt btn-success text-light'>IFSC Code : <b>UBIN0818364</b></span>
                        </p>
                        <div class="mb-3">
                            <label for="name" class="form-label">Your Name</label>
                            <input type="text" class="form-control" id="name" name="name" required>
                        </div>
                        <div class="mb-3">
                            <label for="InputEmail1" class="form-label ">Email address</label>
                            <input type="email" class="form-control" id="InputEmail1" aria-describedby="emailHelp"
                                name="email" required>
                            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                        </div>
                        <div class="mb-3">
                            <label for="Password" class="form-label">Choose Password</label>
                            <input type="password" class="form-control" id="Password" name="password" required>
                        </div>
                        <div class="mb-3">
                            <label for="confirmPassword" class="form-label">Confirm Password</label>
                            <input type="password" class="form-control" id="confirmPassword" name="confirmpassword" required>
                            <span id="ck" style="display: none;">
                                <div class="alert alert-warning d-flex align-items-center enab" role="alert" disabled>
                                    <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Warning:"><use xlink:href="#exclamation-triangle-fill"/></svg>
                                    <div>
                                        Passwords did not match
                                    </div>
                                </div>
                            </span>
                        </div>
                        <div class="mb-3">
                            <label for="mobile" class="form-label">Mobile</label>
                            <input type="text" class="form-control" id="mobile" name="mobile" required>
                        </div>
                        <div class="mb-3">
                            <label for="college" class="form-label">Your College Name</label>
                            <input type="text" class="form-control" id="college" name="college" required>
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Registration Type</label>
                            <select class="form-select  mb-3" aria-label=".form-select-lg example" name="type" required>
                                <option selected>----</option>
                                <option value="Basic">Basic ( Rs. 500 /- )</option>
                                <option value="Premium">Premium ( Rs. 900 /- )</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="transID" class="form-label">Transaction ID</label>
                            <input type="text" class="form-control" id="transID" name="transID" required>
                        </div>
                        <div class="mb-3">
                            <label for="accNumber" class="form-label">Your Account Number</label>
                            <input type="text" class="form-control" id="accNumber" name="accNumber" required>
                        </div>
                        <div class="mb-3">
                            <label for="transDate" class="form-label">Transaction Date</label>
                            <input type="date" class="form-control" id="transDate" name="transDate" required>
                        </div>
                        <div class="mb-3">
                            <label for="bankName" class="form-label">Your Bank Name</label>
                            <input type="text" class="form-control" id="bankName" name="bankName" required>
                        </div>
                        <div class="mb-3">
                            <label for="ifsc" class="form-label">Your Bank IFSC Code</label>
                            <input type="text" class="form-control" id="ifsc" name="ifsc" required>
                        </div>

                        <!-- <div class="input-group mb-3">
                            <input type="file" class="form-control" id="inputGroupFile02" name="image" required>
                            <label class="input-group-text" for="inputGroupFile02">Upload Transaction Proof</label>
                        </div> -->
                        <div class="d-flex justify-content-center py-3" style="width:100%;">
                            <input type="submit" name="submit" id="btt" class="btn btn-primary mx-auto" disabled>
                        </div>
                    </form>
                </div>
                <div class="col-lg-2 col-md-2 col-sm-12"></div>
            </div>

</div>
        </section>
    </main>



    <!-- Footer -->
    <?php
    include'footer.php';
    ?>

    <!-- Scroll Up -->
    <div id="back-top">
        <a title="Go to Top" href="#"> <i class="fas fa-level-up-alt"></i></a>
    </div>

    <!-- Validation JS -->
    <script src="./includes/validation.js"></script>
    <!-- /Validation JS -->
    <!-- JS here -->
    <script src="./assets/js/vendor/modernizr-3.5.0.min.js"></script>
    <!-- Jquery, Popper, Bootstrap -->
    <script src="./assets/js/vendor/jquery-1.12.4.min.js"></script>
    <script src="./assets/js/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
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
    <!-- Nice-select, sticky -->
    <script src="./assets/js/jquery.nice-select.min.js"></script>
    <script src="./assets/js/jquery.sticky.js"></script>

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
    <!-- <script src="./assets/js/main.js"></script> -->

    <!-- ALL JS FILES-->
    <script src="js/jquery-3.2.1.min.js"></script>
    <!-- <script src="js/popper.min.js"></script>
	<script src="js/bootstrap.min.js"></script> -->
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