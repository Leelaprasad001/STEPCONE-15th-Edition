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
<style>
    .response1 {
        max-width: 50vw;
    }
    .response1 h2 {
        font-size: 3vw;
        
    }
    .custom {
        justify-content: space-between!important;
    }
    .custom span {
        margin: 0px!important;
    }
    .custom button {
        width: 10vw;
        padding: 10px;
    }
    .custom button p {
        color: #fff;
        margin: 0px;
    }
    .custom2 {
        width: fit-content;
    }
    .custom3 {
        padding: 0px!important;
    }
    .custom4 {
        display: flex;
        flex-wrap: nowrap;
    }
    @media (max-width: 576px) {
        body {
            overflow-x: hidden;
        }
        
        .response1 {
            max-width: 106vw;
            margin-top: 40vw;
        }
        .response1 h2 {
            font-size: 5vw;
        }
        .custom h3 {
            font-size: 5vw;
        }
        .custom {
            justify-content: center!important;
        }
        .custom span {
            margin-right: 0px!important;
        }
        .custom button {
            width: 30vw;
            padding: 1px;
            margin: 0px;
            position:relative;
            right:-8%!important;
        }
        .custom button p {
            margin: 0px;
            padding-top: 1px;
            padding-bottom: 1px;
            color: #fff;
            font-size: 4vw;
            font-weight: 600;
        }
        .custom4 {
            flex-wrap: wrap;
        }
    }
</style>
</head>
<body>
    <!--  Preloader Start - -->
    <!-- <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="preloader-circle"></div>
                <div class="preloader-img pere-text">
                    <img src="./assets/img/logo.png" alt="">
                </div>
            </div>
        </div>
    </div> -->
 <!-- Preloader Start -->

 <div id="myModal" class="modal fade show" style="padding-right: 17px; display: block; z-index: 12; padding-top:0;" aria-modal="true">
    <div class=" response1 modal-dialog">
        <div class="modal-content" style="width: 90%;">
           <div class="modal-body mb-0 p-0">

              <div class="embed-responsive  z-depth-1-half">
					 <img class="img-fluid z-depth-1" src="./images/stepcone.jpeg">
				
              </div>

            </div>

            <div class="modal-footer justify-content-center custom" style="display:flex; flex-wrap:wrap; justify-content: space-between;">
              <span class="mr-4"><h2><b>STEPCONE 2023</b></h2></span>
              <!-- <a type="button" class="btn-floating btn-sm btn-fb"><i class="fab fa-facebook-f" aria-hidden="true"></i></a>
              
              <a type="button" class="btn-floating btn-sm btn-tw"><i class="fab fa-twitter" aria-hidden="true"></i></a>
             
              <a type="button" class="btn-floating btn-sm btn-gplus"><i class="fab fa-google-plus-g" aria-hidden="true"></i></a>
              
              <a type="button" class="btn-floating btn-sm btn-ins"><i class="fab fa-linkedin-in" aria-hidden="true"></i></a> -->

              <button type="button" onclick="hide('myModal')" class="embed-responsive btn btn-outline-primary btn-rounded btn-md" data-dismiss="modal"><p>Close</p></button>

            </div>
        </div>
    </div>
</div>
<script>
    function hide(obj) {
        el = document.getElementById(obj);
        el.style.display = 'none';
    }
</script>
    <?php
    include './header.php';
    ?>
<main>
    <!--? slider Area Start-->
    <div class="slider-area">
        <div class="slider-active">
            <!-- Single Slider -->
            <div class="single-slider slider-height d-flex align-items-center">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-8 col-lg-8 col-md-9 col-sm-10">
                            <div class="hero__caption">
                                <h3 data-animation="fadeInLeft" data-delay=".5s">GMR Institute of Technology</h2>
                                <h3 data-animation="fadeInLeft" data-delay=".5s">Proudly Presents</h2>
                                <h1 data-animation="fadeInLeft" data-delay=".5s" style="color: #251B37 !important;">STEPCONE 2023</h1>
                                <span class="edition-15" data-animation="fadeInLeft" data-delay=".5s">- 15<sup>th</sup> Edition</span>
                                <div class="row element">
                                    <div class="col-4 animated zoomIn">
                                        <img src="./assets/img/element.png" alt="" width="70%" height="auto">
                                    </div>
                                    <div class="col-4 animated zoomIn">
                                        <img src="./assets/img/logo.png" alt="" width="80%" height="auto">
                                    </div>
                                </div>
                                
                                    <h4 style="padding:20px 0px;" class="jan mt-10">JAN 24 - 25</h4>
                                    <div class="slider-btns">
                                        <?php
                                        if (!isset($_SESSION['mail'])) {
                                            echo '
                                            <a href="./login.php" class="btn">LOGIN</a>
                                            ';
                                        }
                                        else {
                                            echo '
                                            <a href="./flagship.php" class="btn">EXPLORE</a>
                                            ';
                                        }
                                        ?>
                                    </div>
                                
                                <!-- <div class="element1">
                                    <img src="./assets/img/element1.png" alt=""/>
                                </div> -->
                                <!-- <div class="t1">
                                    <div class="static">
                                     <h1>i</h1>
                                    </div>
                                    <div class="dynamic">
                                     <h6 class="typing"><strong>deate<br>nitiate<br>nnovate<br>nculcate</strong></h6>
                                    </div>
                                 </div> -->
                                <!-- Hero-btn -->
                                <!-- <h4 style="padding:20px 0px;" class="jan">JAN 24 - 25</h4>
                                <div class="slider-btns">
                                    <a href="" class="btn">LOGIN</a>
                                </div>
                                <div class="stepimg">
                                    <img src="./assets/img/logo.png" alt="" style="height:3rem"/>
                                 </div> -->
                            </div>
                        </div>
                        <div  class="col-lg-4 col-md-3 col-sm-2 logo-gmr">
                            <!-- <img src="./assets/img/gmr.png" alt="" width="200px" height="auto" style="margin-left:20px; "> -->
                        </div>

                    </div>
                </div>          
            </div>
        </div>
        <!-- Counter Section Begin -->
        <!-- <div class="counter-section d-none d-sm-block">
            <div class="cd-timer" id="countdown" >
                <div class="cd-item">
                    <span>96</span>
                    <p>Days</p>
                </div>
                <div class="cd-item">
                    <span>15</span>
                    <p>Hrs</p>
                </div>
                <div class="cd-item">
                    <span>07</span>
                    <p>Min</p>
                </div>
                <div class="cd-item">
                    <span>02</span>
                    <p>Sec</p>
                </div>
            </div>
        </div> -->
        <!-- Counter Section End -->
    </div>
    <!-- slider Area End-->
    <!--? About Law Start-->
    <section class="about-low-area section-padding2">
        <div class="fluid-container ml-30 mr-30">
            <div class="row">
                <div class="section-tittle mb-35">
                    <h3 style="color: #1E3C71;">National Level</h3>
                    <h3 style="color: #1E3C71;">Student Technical Paper & Project Contest & Exhibition</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-7 col-md-12 col-sm-12">
                    <div class="about-caption mb-50" >
                        <p align="justify">&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; After being experienced success of being one of the best technical and cultural fests in India. This time GMRIT takes it privilege in announcing the 15th edition of STEPCONE 2023. This Technical fest has always been one of the most awaited platforms for engineering students of all streams. With more scrupulous forethought and invulnerable zeal, here comes the latest version which is going to ignite the young engineering minds to unleash their spirit. We host a discourse on theories, problems and their solutions in current revolution of engineering. This brand event of GMRIT showcases the level of excitement which can be visualised when the theories in books are put into thoughts and are thus helpful to compete with others. <br><br>&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;This grand event enlightens young minds to bring societal impact with highly planned and focused efforts by means of their contributed projects. Bashing all the boundaries we are now set with the themes of the nation; ATMA NIRBHAR BHARAT, MAKE IN INDIA, RE-SKILLLING & UP-SKILLING, INNOVATION & START-UPS, we are going to build a bridge between the youth of the nation with the platform of STEPCONE and highly motivating empowerment talks on the other side and finally withstand the principles of AZADI KA AMRIT MAHOTSAV. Highly advanced technical workshops, high grade competitive technical events, exciting spot events and interestingly challenging flagship events. We are forecasting on implacable spirit in students who come together to test their insatiable minds and push themselves beyond their expectations & stand as an inspiration of becoming a responsible youth of this nation enlightening many other minds and soul.</p>
                    </div>
                    <div class="row">
                        <div class="col-lg-3 col-md-4">
                            <div class="single-caption mb-20">
                                <div class="caption-icon">
                                    <span class="flaticon-communications-1"></span>
                                </div>
                                <div class="caption">
                                    <h5>Where</h5>
                                    <p>GMRIT Rajam, Vizianagaram</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3">
                            <div class="single-caption mb-20">
                                <div class="caption-icon">
                                    <span class="flaticon-education"></span>
                                </div>
                                <div class="caption">
                                    <h5>When</h5>
                                    <p>Jan 24 - 25. 2023</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 col-md-12">
                    <!-- about-img -->
                    <img id="myImg" src="./assets/img/gallery/poster.jpeg" style="width: 100%; height: auto;" alt="Car">

                        <div id="myModal" class="modal">
                        <span class="close">X</span>
                        <img class="modal-content" id="img01">
                        </div>    
                        <center><a href="https://www.youtube.com/watch?v=9lieOxhLa5E" class="btn mt-50" target="_blank">Watch Video</a></center>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About Law End--> 
    

    <!--? Brand Area Start-->
    <section class="work-company section-padding30" style="background: #2e0e8c;">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-4 col-md-8">
                    <!-- Section Tittle -->
                    <div class="section-tittle section-tittle2 mb-50">
                        <h2>Our Top Sponsors.</h2>
                    </div>
                </div>

<!-- ========================== Prev code for sponsor's block start ==========================-->

                <!-- <div class="col-lg-8">
                    <div class="logo-area">
                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-sm-6">
                                <div class="single-logo mb-30">
                                    <img src="./assets/img/body4.png" alt="">
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-6">
                                <div class="single-logo mb-30">
                                    <img src="./assets/img/cisco_brand2.png" alt="">
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-6">
                                <div class="single-logo mb-30">
                                    <img src="./assets/img/cisco_brand3.png" alt="">
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-6">
                                <div class="single-logo mb-30">
                                    <img src="./assets/img/cisco_brand4.png" alt="">
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-6">
                                <div class="single-logo mb-30">
                                    <img src="./assets/img/cisco_brand5.png" alt="">
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-6">
                                <div class="single-logo mb-30">
                                    <img src="./assets/img/cisco_brand6.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div> -->
<!-- ========================== Prev code for sponsor's block end ==========================-->
                <div class="col-lg-8 custom4">
                <div class="col-lg-4 col-md-4 col-sm-4 custom3">
                        <div class="logo-area">
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <div class="single-logo mb-30">
                                        <img src="./assets/img/body4.png" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="logo-area">
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <div class="section-tittle section-tittle2 mb-20 custom2">
                                        <a href="./Stepcone Sponsership Letter Draft.pdf" target="_blank" class="btn custom"><h3>Want to be a Sponsor?</h3></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row align-items-center mt-20">
                <div class="col-lg-4 col-md-8">
                    <!-- Section Tittle -->
                    <div class="section-tittle section-tittle2 mb-20">
                        <h2>Our Professional Student Bodies.</h2>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="logo-area">
                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-sm-6">
                                <div class="single-logo mb-30">
                                <img src="./assets/img/sae.jpg" alt="">
                                   
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-6">
                                <div class="single-logo mb-30">
                                <img src="./assets/img/body8.png" alt="">
                                   
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-6">
                                <div class="single-logo mb-30">
                                <img src="./assets/img/body1.png" alt="">
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-6">
                                <div class="single-logo mb-30">
                                    <img src="./assets/img/body2.PNG" alt="">
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-6">
                                <div class="single-logo mb-30">
                                    <img src="./assets/img/body5.png" alt="">
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-6">
                                <div class="single-logo mb-30">
                                    <img src="./assets/img/body6.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row align-items-center mt-20">
                <div class="col-lg-4 col-md-8">
                    <!-- Section Tittle -->
                    <div class="section-tittle section-tittle2 mb-20">
                        <h2>Our Community Partner.</h2>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="logo-area">
                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-sm-6">
                                <div class="single-logo mb-30">
                                    <img src="./assets/img/body7.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Brand Area End-->
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
    <script>
        // Get the modal
var modal = document.getElementById('myModal');

// Get the image and insert it inside the modal - use its "alt" text as a caption
var img = document.getElementById('myImg');
var modalImg = document.getElementById("img01");
var captionText = document.getElementById("caption");
img.onclick = function(){
    modal.style.display = "block";
    modalImg.src = this.src;
    modalImg.alt = this.alt;
    captionText.innerHTML = this.alt;
}

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    modal.style.display = "none";
}
</script>
<script>
    $(document).ready(function () { 
        $(document).click(function () {
            $('.navbar-collapse').collapse('hide');
  });
});
</script>

<script src="./assets/js/d_insp.js"></script>

</body>
</html>