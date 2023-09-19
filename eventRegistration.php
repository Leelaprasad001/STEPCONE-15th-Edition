<?php
session_start();
if (!isset($_SESSION['mail'])) {
    header("Location: ./login.php");
} else {
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
    <!-- very fragile work consciously -->

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
            include('./header.php');
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
                    <form class="py-5" action="./includes/userEvent.php" method="POST" enctype="multipart/form-data"
                        id="fomEvent">
                        <h3><span class="badge bg-primary my-3">Account Details</span></h3>
                        <p><span class='btn btn-success text-light'>Account Number :
                                <b>183610100011155</b></span><br><br>
                            <span class='btn btn-success text-light'>IFSC Code : <b>UBIN0818364</b></span>
                        </p>
                        <div class="mb-3">
                            <label for="InputEmail1" class="form-label ">Email address</label>
                            <input type="email" class="form-control" id="InputEmail1" aria-describedby="emailHelp"
                                name="email" value="<?php echo $_SESSION['mail']; ?>" readable required>
                            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                        </div>
                        <div class="mb-3">
                            <label for="eventId" class="form-label">Event</label>
                            <select class="form-select  mb-3" aria-label=".form-select-lg example" name="eventId"
                                id="eventSelect" required>
                                <option selected disabled>Choose Event</option>
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
                        <div class="mb-3">
                            <label for="transID" class="form-label">Amount</label>
                            <h3 id="amount"></h3>
                        </div>
                        <div class="mb-3">
                            <label for="transDate" class="form-label">Transaction Date</label>
                            <input type="date" class="form-control" id="transDate" name="transDate" required>
                        </div>
                        <!-- <div class="input-group mb-3">
                                <input type="file" class="form-control" id="inputGroupFile02" name="fileToUpload" accept="image/png, image/gif, image/jpeg" required>
                                <label class="input-group-text" for="inputGroupFile02">Upload Transaction Proof</label>
                                
                            </div> -->
                        <div class="input-group mb-3" id="Dvals">

                        </div>
                        <div class="mb-3">
                            <input type="text" hidden class="form-control" aria-describedby="emailHelp" name="referral"
                                id="refData">
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">How did you know About it?</label>
                            <select class="form-select  mb-3" aria-label=".form-select-lg example" id="refCheck"
                                required>
                                <option selected disabled>Choose option</option>
                                <option value="Social media">Social media</option>
                                <option value="college website">College website</option>
                                <option value="friend">Friend</option>

                            </select>
                        </div>
                        <div class="mb-3" id="thatFrndDetails">

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
    <?php include("./footer.php");
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
    // refcheck can be done as it doesn't relte to event and other js events
    let refCheck = document.getElementById('refCheck');
    let refData = document.getElementById('refData');
    // console.log(refData);
    refCheck.addEventListener('change', () => {
        // on change.
        // console.log('refcheck')
        let thatFrndDetails = document.getElementById('thatFrndDetails');
        let refCode = `<div class="mb-3">
                            <label  class="form-label">Friend's Name</label>
                            <input type="text"class="form-control frnd" aria-describedby="emailHelp"
                                name="" id="frndNames"   required>
                        </div>
                        <div class="mb-3">
                            <label  class="form-label">Friend's Phone number</label>
                            <input type="tel"class="form-control frnd" aria-describedby="emailHelp"
                                name="" id="frndNum"  required>
                        </div>
                        <div class="mb-3">
                            <label  class="form-label ">Friend's Email</label>
                            <input type="email"class="form-control frnd" aria-describedby="emailHelp"
                                name="" id="frndMail"  required>
                                </div>
                                `;
        if (refCheck.value == 'friend') {
            thatFrndDetails.innerHTML = refCode;
            // console.log("refcheck in")
        } else {
            // console.log("refcheck out")

            thatFrndDetails.innerHTML = "";
        }



    })

    let formEvent = document.getElementById('fomEvent');
    // console.log(formEvent);
    var inputsHidden = document.createElement("input");
    inputsHidden.setAttribute("hidden", "hidden");
    inputsHidden.setAttribute("name", "Dmails");
    inputsHidden.setAttribute("type", "text");
    formEvent.addEventListener("submit", (e) => {
        e.preventDefault();
        let dynamicInput = document.getElementsByClassName("dynamicInput");
        inputsHidden = document.createElement("input");
        inputsHidden.setAttribute("hidden", "hidden");
        inputsHidden.setAttribute("name", "Dmails");
        inputsHidden.setAttribute("type", "text");
        let outString = "";
        // console.log(dynamicInput)





        if (dynamicInput.length > 0) {
            for (let it = 0; it < dynamicInput.length; it++) {
                var tempvalue = dynamicInput[it].value + "?#";
                // console.log(dynamicInput[it]);
                outString += tempvalue;
            }
            inputsHidden.value = outString;
            let Dvals = document.getElementById('Dvals');
            Dvals.appendChild(inputsHidden);

            refff()
            formEvent.submit();

        } else {
            let Dvals = document.getElementById('Dvals');
            // console.log(inputsHidden);
            inputsHidden.setAttribute("value", "NA");
            Dvals.appendChild(inputsHidden);
            refff()
            formEvent.submit();
        }

        // added feature

        function refff() {

            // let's check for ref type
            let refCheck = document.getElementById('refCheck').value;
            // console.log(refCheck);
            let refData = document.getElementById('refData');
            // console.log("refdata",refData);
            // let frnd = document.getElementsByClassName('frnd');


            if (refCheck == "friend") {
                let frndName = document.getElementById('frndNames').value;
                let frndNum = document.getElementById('frndNum').value;
                let frndMail = document.getElementById('frndMail').value;
                let frndcont = frndName + "?#" + frndNum + "?#" + frndMail;
                refData.value = frndcont;
            } else {
                // console.log("in else")
                refData.value = refCheck;
            }


        }
    })
    let eventSelect = document.getElementById("eventSelect");
    let dynamicContent = document.getElementById("dynamicContent");
    eventSelect.addEventListener("change", () => {
        // window.onbeforeunload = function(event) {
        //     return confirm("Confirm refresh");
        // };
        dynamicContent.innerHTML = "";
        let eventParticipants = document.getElementById('eventParticipants');
        eventParticipants.removeAttribute('disabled');
        eventParticipants.innerHTML = "";
        dynamicContent.innerHTML = "";
        for (let i = 0; i < events_array.length; i++) {
            if (eventSelect.value == events_array[i][0]) {
                // console.log(events_array[i]);
                let min = events_array[i][2];
                let max = events_array[i][3];
                let amount = document.getElementById('amount');
                amount.innerText = events_array[i][4] + "/-";
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
                            <label for="InputEmail1" class="form-label">E-mail (Team Member ${counters})</label>
                            <input type="email"class="form-control dynamicInput" aria-describedby="emailHelp"
                                name="" id="${"dynamic" + parti }"  required>
                        </div>`;
                        // console.log(tempCode);
                        dynamicContent.innerHTML += tempCode;
                        // console.log(dynamicContent);
                    }
                } else {
                    dynamicContent.innerHTML = "";
                    // console.log("in else");
                    let amount = document.getElementById('amount');
                    amount.innerText = events_array[i][4] + "/-";
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
                            <label for="InputEmail1" class="form-label ">E-mail (Team Member ${counters})</label>
                            <input type="email" class="form-control dynamicInput" aria-describedby="emailHelp"
                                name="" id="${"dynamic" + parti }" required>
                        </div>`;
                                // console.log(tempCode);

                                dynamicContent.innerHTML += tempCode;
                                // console.log(dynamicContent);
                            }
                        }
                        eventParticipants.addEventListener('change', genarateDynamic)
                    }
                }
            }
        }
    })
    let eventParticipants = document.getElementById('eventParticipants');
    </script>
</body>

</html>
<?php
}
?>