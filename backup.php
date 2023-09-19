<?php
session_start();
$_SESSION['mail'] = '19341A05c9@gmrit.edu.in';
include "./includes/db.php";
// getting all events data
$getEvents = "SELECT * FROM `events`";
$eventsResult = mysqli_query($conn, $getEvents);
// attributes we care- event id, event name, event min, max, event fee
// creating php array.
$eventsCount = mysqli_num_rows($eventsResult);
$events = mysqli_fetch_all($eventsResult);
$eventsData = [];
if ($eventsCount) {
    foreach ($events as $ele) {
        $temp = [$ele[1], $ele[2], $ele[3], $ele[4], $ele[5]];
        array_push($eventsData, $temp);
    }
}
?>
<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Stepcone 2023</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
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
    <script>
    var events_array = <?php echo json_encode($eventsData); ?>;
    </script>
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
        include('./includes/navbar.php');
        ?>
    </header>
    <main>
        <!--? Brand Area Start -->
        <section class="section">
            <div class="title text-center">
                <h2>Event Registration</h2>
            </div>
            <div class="row">
                <div class="col-2"></div>
                <div class="col-8">
                    <form class="py-5" action="./includes/userAPI.php" method="POST" enctype="multipart/form-data"
                        id="fomEvent">
                        <div class="mb-3">
                            <label for="InputEmail1" class="form-label ">Email address</label>
                            <input type="email" class="form-control" id="InputEmail1" aria-describedby="emailHelp"
                                name="email" value="<?php echo $_SESSION['mail']; ?>" disabled required>
                            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                        </div>
                        <div class="mb-3">
                            <select class="form-select  mb-3" aria-label=".form-select-lg example" name="eventId"
                                id="eventSelect" required>
                                <option selected disabled>Choose Registration Type</option>
                                <?php
                                foreach ($eventsData as $row) {
                                    $name = $row[1];
                                    $eventId = $row[0];
                                ?>
                                <option value="<?= $eventId ?>"><?= $name ?></option>
                                <?php
                                }
                                ?>
                            </select>
                        </div>
                        <div class="mb-3">
                            <select class="form-select  mb-3" aria-label=".form-select-lg example" name="type"
                                id="eventParticipants" disabled required>
                                <option selected>Choose option</option>
                            </select>
                        </div>
                        <div class="mb-3" id="dynamicContent">
                        </div>
                        <div class="mb-3">
                            <label for="transID" class="form-label">Trasaction ID</label>
                            <input type="text" class="form-control" id="transID" name="transID" required>
                        </div>
                        <div class="input-group mb-3">
                            <input type="file" class="form-control" id="inputGroupFile02" name="image"
                                accept="image/png, image/gif, image/jpeg" required>
                            <label class="input-group-text" for="inputGroupFile02">Upload Transaction Proof</label>
                        </div>
                        <div class="d-flex justify-content-center py-3" style="width:100%;">
                            <input type="submit" name="submitEvent" class="btn btn-primary mx-auto">
                        </div>
                    </form>
                </div>
                <div class="col-2"></div>
            </div>
        </section>
    </main>
    <!-- Footer -->
    <?php include("./includes/footer.php");
    ?>
    <!-- Scroll Up -->
    <div id="back-top">
        <a title="Go to Top" href="#"> <i class="fas fa-level-up-alt"></i></a>
    </div>
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
    <!-- form handling and custom script -->
    <script>
    let formEvent = document.getElementById('fomEvent');
    console.log(formEvent);
    formEvent.addEventListener("submit", (e) => {
        e.preventDefault();
        let dynamicInput = document.getElementsByClassName("dynamicInput");
        let inputsHidden = document.createElement("input");
        inputsHidden.setAttribute("hidden", "hidden");
        inputsHidden.setAttribute("name", "Dmails")

        let eventnameIn = document.createElement("input");
        eventnameIn.setAttribute("hidden", "hidden");
        eventnameIn.value = eventName;
        eventnameIn.setAttribute("name", "EName")
        let outString = "";
        if (dynamicInput.length > 0) {

            dynamicInput.forEach(element => {
                let tempvalue = element.value;
                outString += tempvalue + "?#";
            });
            inputsHidden.value = outString;
            console.log(inputsHidden);
            formEvent.submit();
        } else {
            inputsHidden.value = "NA";
            formEvent.submit();
        }
        // inputsHidden.value= ""
    })
    let eventSelect = document.getElementById("eventSelect");
    let dynamicContent = document.getElementById("dynamicContent");


    eventSelect.addEventListener("change", () => {
        dynamicContent.innerHTML = "";
        let eventParticipants = document.getElementById('eventParticipants');
        eventParticipants.removeAttribute('disabled');
        console.log(eventSelect.value);
        eventParticipants.innerHTML = "";
        dynamicContent.innerHTML = "";
        for (let i = 0; i < events_array.length; i++) {
            if (eventSelect.value == events_array[i][0]) {
                console.log(events_array[i]);
                let min = events_array[i][2];
                let max = events_array[i][3];
                var eventName = events_array[i][1];
                if (min == max) {
                    let code = `<option value="${max}">${max}</option>`;
                    eventParticipants.innerHTML += code;
                    // for min and max are same.
                    dynamicContent.innerHTML = "";
                    var counters = 1;
                    dynamicContent.innerHTML = "";

                    for (let parti = 0; parti < Number(min) - 1; parti++) {
                        counters++;
                        let tempCode = `<div class="mb-3">
                            <label for="InputEmail1" class="form-label dynamicInput">Email address ${counters}</label>
                            <input type="email" class="form-control" aria-describedby="emailHelp"
                                name="" id="${"dynamic" + parti }"  required>
                        </div>`;
                        console.log(tempCode);
                        dynamicContent.innerHTML += tempCode;
                        console.log(dynamicContent);
                    }
                } else {
                    dynamicContent.innerHTML = "";
                    console.log("in else");
                    for (let i = Number(min); i < Number(max) + 1; i++) {
                        let code = `<option value="${i}">${i}</option>`;
                        eventParticipants.innerHTML += code;
                        genarateDynamic();

                        function genarateDynamic() {
                            dynamicContent.innerHTML = "";

                            let inputs = Number(eventParticipants.value);
                            dynamicContent.innerHTML = "";
                            let counters = 1;
                            for (let parti = 0; parti < inputs - 1; parti++) {
                                counters++;
                                let tempCode = `<div class="mb-3">
                            <label for="InputEmail1" class="form-label ">Email address ${counters}</label>
                            <input type="email" class="form-control dynamicInput" aria-describedby="emailHelp"
                                name="" id="${"dynamic" + parti }" required>
                        </div>`;
                                console.log(tempCode);
                                dynamicContent.innerHTML += tempCode;
                                console.log(dynamicContent);
                            }
                        }
                        eventParticipants.addEventListener('change', genarateDynamic)

                    }
                }
            }
        }
    })
    </script>
</body>

</html>