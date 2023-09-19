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
     Preloader Start -->
     
 <div id="myModal" class="modal fade show" style="padding-right: 17px;  z-index: 12; padding-top:0;" aria-modal="true">
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
    <div class="title text-center">
        <h2>About</h2>
    </div> 
    <!--? About Law Start-->
    <section class="about-low-area section-padding2">
        <div class="fluid-container ml-30 mr-30">
            <div class="row">
                <div class="section-tittle mb-35">
                    <h3  style="color: #1E3C71;">National Level</h3>
                    <h3  style="color: #1E3C71;">Student Technical Paper & Project Contest & Exhibition</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-7 col-md-6 col-sm-6">
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
    <!--? Brand Area Start -->
    <section class="team-area pt-180 pb-100 section-bg" style="background-image: url(./assets/img/gallery/section_bg02.png);">
            <div class="team">
                <h2>Our Team</h2>
            </div> 
        <div class="container">
            <div class="row">
                <div class="team1">
                    <h3>Faculty Convenors</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="single-team mb-30">
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="single-team mb-30">
                        <div class="team-img">
                            <img src="./events/image/TEAM/team1.png" alt="" class="img">
                            <!-- Blog Social -->
                            <ul class="team-social">
                                <li><a href="https://gmrit.irins.org/profile/287463" target="_blank"><i class="fas fa-user"> &nbsp; View Profile</i></a></li>
                            </ul>
                        </div>
                        <div class="team-caption">
                            <h6><a href="#">Dr. V. Prasad </a></h6>
                            <p>Convener <br> Stepcone 2023</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="single-team mb-30">
                        <div class="team-img">
                            <img src="./events/image/TEAM/team2.jpg" alt="" class="img">
                            <!-- Blog Social -->
                            <ul class="team-social">
                                <li><a href="https://gmrit.irins.org/profile/279100" target="_blank"><i class="fas fa-user"> &nbsp; View Profile</i></a></li>
                            </ul>
                        </div>
                        <div class="team-caption">
                            <h6><a href="#">Dr. T. S. Kishore</a></h6>
                            <p>Co - Convener <br> Stepcone 2023</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="single-team mb-30">
                    </div>
                </div>
            </div>  
            <div class="row">
                <div class="team1">
                    <h3>Student Organizing Committee</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-1">
                    <div class="single-team mb-30">
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="single-team mb-30">
                        <div class="team-img">
                            <img src="./events/image/TEAM/vatsav_small.jpg" alt="" class="img">
                            <!-- Blog Social -->
                            <!-- <ul class="team-social">
                                <li><a href="https://gmrit.irins.org/profile/287463" target="_blank"><i class="fas fa-user"> &nbsp; View Profile</i></a></li>
                            </ul> -->
                        </div>
                        <div class="team-caption">
                            <h6><a href="#">Mr. P. Sreevatsav</a></h6>
                            <p>Student Convener </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="single-team mb-30">
                        <div class="team-img">
                            <img src="./events/image/TEAM/shanmukh_small.jpg" alt="" class="img">
                            <!-- Blog Social -->
                            <!-- <ul class="team-social">
                                <li><a href="https://gmrit.irins.org/profile/279100" target="_blank"><i class="fas fa-user"> &nbsp; View Profile</i></a></li>
                            </ul> -->
                        </div>
                        <div class="team-caption">
                            <h6><a href="#"> Mr. K. Shanmukheswara Rao</a></h6>
                            <p>Secretary </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="single-team mb-30">
                        <div class="team-img">
                            <img src="./events/image/TEAM/lipi_small.jpg" alt="" class="img">
                            <!-- Blog Social -->
                            <!-- <ul class="team-social">
                                <li><a href="https://gmrit.irins.org/profile/279100" target="_blank"><i class="fas fa-user"> &nbsp; View Profile</i></a></li>
                            </ul> -->
                        </div>
                        <div class="team-caption">
                            <h6><a href="#"> Ms. S. Swarnalipi </a></h6>
                            <p>Secretary  </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-1">
                    <div class="single-team mb-30">
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="single-team mb-30">
                        <div class="team-img">
                            <img src="./events/image/TEAM/ashish.jpg" alt="" class="img">
                            <!-- Blog Social -->
                            <!-- <ul class="team-social">
                                <li><a href="https://gmrit.irins.org/profile/279100" target="_blank"><i class="fas fa-user"> &nbsp; View Profile</i></a></li>
                            </ul> -->
                        </div>
                        <div class="team-caption">
                            <h6><a href="#"> Mr. P. Sai Ashish</a></h6>
                            <p>Joint Secretary </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="single-team mb-30">
                        <div class="team-img">
                            <img src="./events/image/TEAM/jhansi_small.jpg" alt="" class="img">
                            <!-- Blog Social -->
                            <!-- <ul class="team-social">
                                <li><a href="https://gmrit.irins.org/profile/279100" target="_blank"><i class="fas fa-user"> &nbsp; View Profile</i></a></li>
                            </ul> -->
                        </div>
                        <div class="team-caption">
                            <h6><a href="#"> Ms. B. Jhansi Rani</a></h6>
                            <p>Joint Secretary </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="single-team mb-30">
                        <div class="team-img">
                            <img src="./events/image/TEAM/hemalatha.jpg" alt="" class="img">
                            <!-- Blog Social -->
                            <!-- <ul class="team-social">
                                <li><a href="https://gmrit.irins.org/profile/279100" target="_blank"><i class="fas fa-user"> &nbsp; View Profile</i></a></li>
                            </ul> -->
                        </div>
                        <div class="team-caption">
                            <h6><a href="#">Ms. G. Hema Latha</a></h6>
                            <p> Treasurer  </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-1">
                    <div class="single-team mb-30">
                    </div>
                </div>
            </div>             
            <div class="row">
                <div class="team1">
                    <h3>Our Web Development Team</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3">
                    <div class="single-team mb-30">
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="single-team mb-30">
                        <div class="team-img">
                            <img src="./events/image/TEAM/hari_prasad.jpg" alt="" class="img">
                            <!-- Blog Social -->
                            <!-- <ul class="team-social">
                                <li><a href="https://gmrit.irins.org/profile/287463" target="_blank"><i class="fas fa-user"> &nbsp; View Profile</i></a></li>
                            </ul> -->
                        </div>
                        <div class="team-caption">
                            <h6><a href="#">Mr. B. Hari Prasad</a></h6>
                            <p>IT Support, GMRIT </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="single-team mb-30">
                        <div class="team-img">
                            <img src="./events/image/TEAM/prem.jpeg" alt="" class="img">
                            <!-- Blog Social -->
                            <!-- <ul class="team-social">
                                <li><a href="https://gmrit.irins.org/profile/279100" target="_blank"><i class="fas fa-user"> &nbsp; View Profile</i></a></li>
                            </ul> -->
                        </div>
                        <div class="team-caption">
                            <h6><a href="#">Mr. V. Prem sai</a></h6>
                            <p>Team Lead</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="single-team mb-30">
                    </div>
                </div>
            </div>
            <div class="row">
            <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="single-team mb-30">
                        <div class="team-img">
                            <img src="./events/image/TEAM/leelaprasad.jpg" alt="" class="img">
                            <!-- Blog Social -->
                            <!-- <ul class="team-social">
                                <li><a href="https://gmrit.irins.org/profile/279100" target="_blank"><i class="fas fa-user"> &nbsp; View Profile</i></a></li>
                            </ul> -->
                        </div>
                        <div class="team-caption">
                            <h6><a href="#"> Mr. B. Leela Prasad </a></h6>
                            <p>Frontend Developer</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="single-team mb-30">
                        <div class="team-img">
                            <img src="./events/image/TEAM/sriram.png" alt="" class="img">
                            <!-- Blog Social -->
                            <!-- <ul class="team-social">
                                <li><a href="https://gmrit.irins.org/profile/279100" target="_blank"><i class="fas fa-user"> &nbsp; View Profile</i></a></li>
                            </ul> -->
                        </div>
                        <div class="team-caption">
                            <h6><a href="#"> Mr. G. Nandha Sriram</a></h6>
                            <p>FullStack  Developer </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="single-team mb-30">
                        <div class="team-img">
                            <img src="./events/image/TEAM/narayana.jpeg" alt="" class="img">
                            <!-- Blog Social -->
                            <!-- <ul class="team-social">
                                <li><a href="https://gmrit.irins.org/profile/279100" target="_blank"><i class="fas fa-user"> &nbsp; View Profile</i></a></li>
                            </ul> -->
                        </div>
                        <div class="team-caption">
                            <h6><a href="#"> Mr. G. Narayanarao </a></h6>
                            <p>FullStack Developer </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="single-team mb-30">
                        <div class="team-img">
                            <img src="./events/image/TEAM/chaitu.jpg" alt="" class="img">
                            <!-- Blog Social -->
                            <!-- <ul class="team-social">
                                <li><a href="https://gmrit.irins.org/profile/279100" target="_blank"><i class="fas fa-user"> &nbsp; View Profile</i></a></li>
                            </ul> -->
                        </div>
                        <div class="team-caption">
                            <h6><a href="#">Mr. M. Chaitanaya</a></h6>
                            <p> Frontend Developer </p>
                        </div>
                    </div>
                </div>
                
            </div>   
            <div class="row">
            <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="single-team mb-30">
                        <div class="team-img">
                            <img src="./events/image/TEAM/komali.jpeg" alt="" class="img">
                            <!-- Blog Social -->
                            <!-- <ul class="team-social">
                                <li><a href="https://gmrit.irins.org/profile/279100" target="_blank"><i class="fas fa-user"> &nbsp; View Profile</i></a></li>
                            </ul> -->
                        </div>
                        <div class="team-caption">
                            <h6><a href="#">Ms. L. Komali </a></h6>
                            <p> Frontend Developer </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="single-team mb-30">
                        <div class="team-img">
                            <img src="./events/image/TEAM/vam.jpeg" alt="" class="img">
                            <!-- Blog Social -->
                            <!-- <ul class="team-social">
                                <li><a href="https://gmrit.irins.org/profile/279100" target="_blank"><i class="fas fa-user"> &nbsp; View Profile</i></a></li>
                            </ul> -->
                        </div>
                        <div class="team-caption">
                            <h6><a href="#"> Mr. H. Vamsi</a></h6>
                            <p>Frontend  Developer </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="single-team mb-30">
                        <div class="team-img">
                            <img src="./events/image/TEAM/anitha.jpeg" alt="" class="img">
                            <!-- Blog Social -->
                            <!-- <ul class="team-social">
                                <li><a href="https://gmrit.irins.org/profile/279100" target="_blank"><i class="fas fa-user"> &nbsp; View Profile</i></a></li>
                            </ul> -->
                        </div>
                        <div class="team-caption">
                            <h6><a href="#"> Ms. S. Anitha </a></h6>
                            <p>Backend Developer </p>
                        </div>
                    </div>
                </div>
               
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="single-team mb-30">
                        <div class="team-img">
                            <img src="./events/image/TEAM/kiran.jpeg" alt="" class="img">
                            <!-- Blog Social -->
                            <!-- <ul class="team-social">
                                <li><a href="https://gmrit.irins.org/profile/279100" target="_blank"><i class="fas fa-user"> &nbsp; View Profile</i></a></li>
                            </ul> -->
                        </div>
                        <div class="team-caption">
                            <h6><a href="#">Mr. Ch. Sai Kiran</a></h6>
                            <p> Backend Developer </p>
                        </div>
                    </div>
                </div>

                
               
            </div>                       
        </div>
    </section>
    <!-- Brand Area End -->  
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

    </body>
</html>