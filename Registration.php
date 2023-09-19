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
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/owl.carousel.min.css">
	<link rel="stylesheet" href="assets/css/slicknav.css">
    <!-- <link rel="stylesheet" href="assets/css/flaticon.css">
    <link rel="stylesheet" href="assets/css/gijgo.css"> -->
	<link rel="stylesheet" href="assets/css/animate.min.css">
	<!-- <link rel="stylesheet" href="assets/css/magnific-popup.css"> -->
	<link rel="stylesheet" href="assets/css/fontawesome-all.min.css">
	<link rel="stylesheet" href="assets/css/themify-icons.css">
	<link rel="stylesheet" href="assets/css/slick.css">
	<!-- <link rel="stylesheet" href="assets/css/nice-select.css"> -->
	<link rel="stylesheet" href="assets/css/style.css">
    <style>
    table, th, td {
        border: 1px solid black;
        
    }
    table{
        padding: 10px;
    }
    .register-main button{
        color: blue;
        border-radius: 10px;
    }
    .register-main{
        padding: 5px;
    }
    .left-align {
        text-align: left;
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
   <?php
   include './header.php';
   ?>

    <main>
        <!--? Brand Area Start -->
        <section class="section">
           <div class="title text-center">
               <h2>Registrations</h2>
           </div> 
           <div class="container mt-40 regdesc">
                <div class="row justify-content-center">
                    <div class="col-lg-4 col-md-6 mb-20">
                        <a href="./registration.pdf" class="btn">How To Register ?</a>
                    </div>
                    <?php
                    if (!isset($_SESSION['mail'])) {
                      echo '
                      <div class="col-lg-4 col-md-6 mb-20">
                        <a href="./userRegistration.php" class="btn">BASIC REGISTRATION</a>
                      </div>
                      ';
                    }
                    ?>
                    <div class="col-lg-4 col-md-6 mb-20">
                        <a href="./eventRegistration.php" class="btn">EVENT REGISTRATION</a>
                    </div>
                </div>
                <h2 class="mt-50 mb-40">STEPCONE 2023 REGISTRATION FEE DETAILS</h2>
                <div class="row" style="overflow-x: auto;">
                    <table class="col-lg-12 col-sm-6 col-sm-6 mb-40 table table-bordered">
                        <thead>
                            <tr>
                                <th scope="col">S.No</th>
                                <th scope="col">TYPE OF EVENT</th>
                                <th scope="col">NAME OF THE EVENT</th>
                                <th scope="col">OFFERED BY</th>
                                <th scope="col">REGISTRATION FEE</th>
                                <th scope="col">TEAM/INDIVIDUAL</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td rowspan = "2">1</td>
                                <td>BASIC REGISTRATION</td>
                                <td class="left-align">STEPCONE KIT + (LUNCH FOR 2 DAYS)</td>
                                <td>-</td>
                                <td>RS.500</td>
                                <td>INDIVIDUAL</td>
                             </tr>
                             <tr>
                                 <td>PREMIUM REGISTRATION</td>
                                 <td class="left-align">STEPCONE KIT + (BREAKFAST + LUNCH+ DINNER+ ACCOMMODATION FOR 2 DAYS)</td>
                                 <td>-</td>
                                 <td>RS.900</td>
                                 <td> INDIVIDUAL</td>
                             </tr>
                <tr>
                  <td>2</td>
                  <td rowspan="8" style="vertical-align: middle; text-align: center">WORKSHOPS</td>
                  <td class="left-align">AIML IN CIVIL ENGINEERING</td>
                  <td>CIVIL</td>
                  <td>RS.500</td>
                  <td>INDIVIDUAL</td>
                </tr>
                <tr>
                  <td>3</td>
                  <td class="left-align">SAFETY</td>
                  <td>CHEM</td>
                  <td>RS.300</td>
                  <td>INDIVIDUAL</td>
                </tr>
                <tr>
                  <td>4</td>
                  <td class="left-align">FULL STACK DEVELOPMENT USIG MERN</td>
                  <td>CSE</td>
                  <td>RS.400</td>
                  <td>INDIVIDUAL</td>
                </tr>
                <tr>
                  <td>5</td>
                  <td class="left-align">FLUTTER</td>
                  <td>IT</td>
                  <td>RS.600/RS.350</td>
                  <td>TEAM OF 2/INDIVIDUAL</td>
                </tr>
                <tr>
                  <td>6</td>
                  <td class="left-align">ELECTRICAL VEHICLES TECHNOLOGY</td>
                  <td>EEE</td>
                  <td>RS.400</td>
                  <td>INDIVIDUAL</td>
                </tr>
                <tr>
                  <td>7</td>
                  <td class="left-align">HANDS IN EXPERIENCE ON NODE MCU WITH KAPSTON PROJECT</td>
                  <td>ECE</td>
                  <td>RS.500</td>
                  <td>INDIVIDUAL</td>
                </tr>
                <tr>
                  <td>8</td>
                  <td class="left-align">ROBOTICS AND CNC</td>
                  <td>MECH</td>
                  <td>RS.300</td>
                  <td>INDIVIDUAL</td>
                </tr>
                <tr>
                  <td>9</td>
                  <td class="left-align">3D PRINTING</td>
                  <td>MECH</td>
                  <td>RS.300</td>
                  <td>INDIVIDUAL</td>
                </tr>
                <tr>
                  <td>10</td>
                  <td
                    rowspan="10"
                    class="align-center"
                    style="vertical-align: middle; text-align: center">
                    FLAGSHIP
                  </td>
                  <td class="left-align">TECHNICAL PAPER PRESENTATION</td>
                  <td>CENTRAL</td>
                  <td>RS.150</td>
                  <td>INDIVIDUAL</td>
                </tr>
                <tr>
                  <td>11</td>
                  <td class="left-align">PROJECT DESIGN CONTEST</td>
                  <td>CENTRAL</td>
                  <td>RS.1500</td>
                  <td>TEAM SIZE 3</td>
                </tr>
                <tr>
                  <td>12</td>
                  <td class="left-align">INDUSTRIAL DEFINED PROBLEM</td>
                  <td>CENTRAL</td>
                  <td>RS.500</td>
                  <td>INDIVIDUAL</td>
                </tr>
                <tr>
                  <td>13</td>
                  <td class="left-align">HYDRAULIC PROPULSION</td>
                  <td>CIVIL</td>
                  <td>RS.4000</td>
                  <td>TEAM SIZE 3-5</td>
                </tr>
                <tr>
                  <td>14</td>
                  <td class="left-align">DRONE VOYAGE</td>
                  <td>EEE</td>
                  <td>RS.2000</td>
                  <td>TEAM SIZE 3-5</td>
                </tr>
                <tr>
                  <td>15</td>
                  <td class="left-align">GO KART</td>
                  <td>MECH</td>
                  <td>RS.12000</td>
                  <td>TEAM SIZE 12-15</td>
                </tr>
                <tr>
                  <td>16</td>
                  <td class="left-align">ROBO WARS</td>
                  <td>ECE</td>
                  <td>RS.1000</td>
                  <td>TEAM SIZE 1-6</td>
                </tr>
                <tr>
                  <td>17</td>
                  <td class="left-align">WEBATHON</td>
                  <td>CSE</td>
                  <td>RS.1000</td>
                  <td>TEAM SIZE 1-4</td>
                </tr>
                <tr>
                  <td>18</td>
                  <td class="left-align">ANDROID STAR</td>
                  <td>IT</td>
                  <td>RS.600</td>
                  <td>TEAM SIZE 3-4</td>
                </tr>
                <tr>
                  <td>19</td>
                  <td class="left-align">CONTRAPTION</td>
                  <td>CHEM</td>
                  <td>RS.600</td>
                  <td>TEAM SIZE 1-4</td>
                </tr>
                <tr>
                  <td>20</td>
                  <td
                    rowspan="16"
                    style="vertical-align: middle; text-align: center"
                  >
                    DEPT. TECHNICAL EVENT
                  </td>
                  <td class="left-align">ANWESHANA</td>
                  <td>CIVIL</td>
                  <td>RS.500</td>
                  <td>TEAM SIZE 4</td>
                </tr>
                <tr>
                  <td>21</td>
                  <td class="left-align">CADD CRACKERS</td>
                  <td>CIVIL</td>
                  <td>RS.1000</td>
                  <td>TEAM SIZE 2</td>
                </tr>
                <tr>
                  <td>22</td>
                  <td class="left-align">CODE-EL</td>
                  <td>EEE</td>
                  <td>RS.300</td>
                  <td>TEAM SIZE 3</td>
                </tr>
                <tr>
                  <td>23</td>
                  <td class="left-align">PARI PATH</td>
                  <td>EEE</td>
                  <td>RS.300</td>
                  <td>TEAM SIZE 2</td>
                </tr>
                <tr>
                  <td>24</td>
                  <td class="left-align">AEROTHON</td>
                  <td>MECH</td>
                  <td>RS.3500</td>
                  <td>TEAM SIZE 1-5</td>
                </tr>
                <tr>
                  <td>25</td>
                  <td class="left-align">LIFE CYCLE ANALYSIS</td>
                  <td>MECH</td>
                  <td>RS.500</td>
                  <td>TEAM SIZE 1-5</td>
                </tr>
                <tr>
                  <td>26</td>
                  <td class="left-align">TINKER CAD</td>
                  <td>ECE</td>
                  <td>RS.200</td>
                  <td>TEAM SIZE 2-3</td>
                </tr>
                <tr>
                  <td>27</td>
                  <td class="left-align">HOVERCRAFT RACE</td>
                  <td>ECE</td>
                  <td>RS.600</td>
                  <td>TEAM SIZE 3-4</td>
                </tr>
                <tr>
                  <td>28</td>
                  <td class="left-align">CODIGO</td>
                  <td>CSE</td>
                  <td>RS.300</td>
                  <td>TEAM SIZE 1-2</td>
                </tr>
                <tr>
                  <td>29</td>
                  <td class="left-align">LEAGUE OF LEGENDS</td>
                  <td>CSE</td>
                  <td>RS.400</td>
                  <td>TEAM SIZE 4</td>
                </tr>
                <tr>
                  <td>30</td>
                  <td class="left-align">CODE MANIA</td>
                  <td>CSE</td>
                  <td>RS.500</td>
                  <td>TEAM SIZE 3</td>
                </tr>
                <tr>
                  <td>31</td>
                  <td class="left-align">SPAWN THE MACHINE</td>
                  <td>IT</td>
                  <td>RS.400/RS.250</td>
                  <td>TEAM SIZE 2/INDIVIDUAL</td>
                </tr>
                <tr>
                  <td>32</td>
                  <td class="left-align">MR. & MS. TECHNICA</td>
                  <td>IT</td>
                  <td>RS.500</td>
                  <td>INDIVIDUAL</td>
                </tr>
                <tr>
                  <td>33</td>
                  <td class="left-align">MODEL UN</td>
                  <td>CSE/IT</td>
                  <td>RS.1000</td>
                  <td>TEAM SIZE 2-4</td>
                </tr>
                <tr>
                  <td>34</td>
                  <td class="left-align">ELECTRO LIGHT</td>
                  <td>CHEM</td>
                  <td>RS.500</td>
                  <td>TEAM SIZE 2</td>
                </tr>
                <tr>
                  <td>35</td>
                  <td class="left-align">SNAKE -O-MYSTERY</td>
                  <td>CHEM</td>
                  <td>RS.300</td>
                  <td>TEAM SIZE 2</td>
                </tr>
                <tr>
                  <td>36</td>
                  <td
                    rowspan="5"
                    style="vertical-align: middle; text-align: center"
                  >
                    SPOT
                  </td>
                  <td class="left-align">SQUID GAMES</td>
                  <td>CIVIL</td>
                  <td>RS.400</td>
                  <td>TEAM SIZE 4</td>
                </tr>
                <tr>
                  <td>37</td>
                  <td class="left-align">SARATHY</td>
                  <td>EEE</td>
                  <td>RS.200</td>
                  <td>INDIVIDUAL</td>
                </tr>
                <tr>
                  <td>38</td>
                  <td class="left-align">FOX HUNT</td>
                  <td>ECE</td>
                  <td>RS.200</td>
                  <td>TEAM SIZE 3-4</td>
                </tr>
                <tr>
                  <td>39</td>
                  <td class="left-align">CODE TUNNEL</td>
                  <td>IT</td>
                  <td>RS.300</td>
                  <td>TEAM SIZE 2</td>
                </tr>
                <tr>
                  <td>40</td>
                  <td class="left-align">CHEM-O-ROVER</td>
                  <td>CHEM</td>
                  <td>RS.300</td>
                  <td>TEAM SIZE 2</td>
                </tr>
                        </tbody>
                    </table>
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
    

<script src="./assets/js/d_insp.js"></script>

</body>
</html>