<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Site Map</title>

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
      .sitemap {
        position: relative;
        display: flex;
        flex-flow: row wrap;
        padding: 0;
      }

      .sitemap a {
        position: relative;
        z-index: 1;
        display: inline-flex;
        flex-direction: column;

        padding: 0.5em 1em;
        border: 1px solid #000;
        border-radius: 4px;

        border-bottom-width: 3px;
        background: #f9f9f9;

        font-weight: 500;
        text-decoration: none;
        color: #595959;
      }

      .sitemap a:before {
        margin-bottom: 0.3em;
        /* content: attr(href); */
        font-size: 0.8em;
        color: #aaa;
      }

      .sitemap-main {
        position: relative;
        flex: 1 1 100%;
        order: 3;
        margin-bottom: 1em;
      }

      .sitemap-main a {
        margin-bottom: 0.5em;
        margin-left: 0.2em;
      }

      .sitemap-main ul {
        position: relative;
        padding-left: 2em;
      }

      .sitemap-main > ul {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        align-items: flex-start;
      }

      .sitemap-main > ul > li {
        flex: 1 1 auto;
      }

      .sitemap li {
        margin-right: 1em;
        list-style: none;
      }

      /* Handle grid lines */
      .sitemap-main li:before,
      .sitemap-main li:after {
        display: inline-block;

        width: 1em;
        height: 2em;

        border: 1px solid #000;
        border-right: none;
        border-top: none;

        content: "";
      }

      .sitemap-main li:after {
        position: absolute;
        left: 2em;
        bottom: 0;
        width: 2px;
        height: 100%;
      }

      .sitemap-main ul:before {
        position: absolute;
        left: 0;
        top: -2.75em;

        display: block;
        width: 2px;
        height: 100%;

        background: #fff;
        content: "";
      }

      .sitemap-main > ul:before {
        display: none;
      }

      .sitemap-main li:last-child:after {
        border-color: #fff;
        bottom: 0;
        height: 2.7em;
      }

      /* The home/top level link */
      .sitemap-root {
        margin-bottom: 2em;
      }

      .sitemap-root > a {
        min-width: 8em;
        background: #c3baaa;
        border-color: darken(#000, 10%);
        color: #fff;
      }

      .sitemap-root > a:before {
        color: #f2f2f2;
      }

      .sitemap-root > a:after {
        position: absolute;
        bottom: -2.6em;
        left: calc(2em - 1px);
        display: block;
        width: 2px;
        height: 2em;
        background: #f2f2f2;
        content: "";
      }

      .sitemap-main > ul > li > a {
        background: #f2e8dd;
        border-color: darken(#000, 10%);
      }

      .sitemap-main ul ul ul a {
        background: #fff;
      }

      .sitemap-aux {
        order: 3;
        font-size: 0.9em;
      }

      .sitemap-aux ul {
        display: flex;
        flex-wrap: wrap;
        padding: 0;
      }

      .sitemap-aux li {
        margin: 0 0.5em 0.5em 0;
      }

      .sitemap-aux a {
        background: #faf8d4;
        border-color: darken(#000, 10%);
      }

      @media (min-width: 420px) {
        .sitemap {
          justify-content: space-between;
        }

        .sitemap-aux ul {
          justify-content: flex-end;
        }
      }

      @media (min-width: 600px) {
        .sitemap-aux {
          order: 2;
        }
      }
    </style>
  </head>
  <body>
  <?php
    include './header.php';
    ?>
    <br><br><br><br><br><br>
    
    <div class="container">
    <ul class="sitemap">
        <li class="sitemap-root"><a href="./index.php">Home</a></li>
        <li class="sitemap-main">
          <ul>
            <li>
              <a href="./about.php">About</a>
              <ul>
                <li>
                  <a href="./about.php">About Stepcone</a>
                </li>
                <li>
                  <a href="./about.php">Our Team</a>
                  <ul>
                    <li><a href="./about.php">Faculty convenors</a></li>
                    <li>
                      <a href="./about.php">Student Organizing commitee</a>
                    </li>
                  </ul>
                </li>
              </ul>
            </li>
            <li>
              <a href="./index.php">Events</a>
              <ul>
                <li>
                  <a href="/flagship.php">Flagship Events</a>
                  <ul>
                    <li>
                      <a href="./flagship.php">Technical Paper Presentation</a>
                    </li>
                    <li>
                      <a href="./flagship.php">Project Design Contest</a>
                    </li>
                    <li>
                      <a href="./flagship.php">Industrial Defined Problem</a>
                    </li>
                    <li><a href="./flagship.php">Workshops</a></li>
                    <li><a href="./flagship.php">Drone Voyage</a></li>
                    <li><a href="./flagship.php">Automated Bots</a></li>
                    <li><a href="./flagship.php">Webathon</a></li>
                    <li><a href="./flagship.php">Android Star</a></li>
                    <li><a href="./flagship.php">Contraption</a></li>
                    <li><a href="./flagship.php">Hydraulic Propulsion</a></li>
                    <li><a href="./flagship.php">Go Kart</a></li>
                  </ul>
                </li>
                <li>
                  <a href="./tech.php">Technical Events</a>
                  <ul>
                    <li><a href="./tech.php">Anweshana</a></li>
                    <li><a href="./tech.php">Cadd Crackers</a></li>
                    <li><a href="./tech.php">Code-El</a></li>
                    <li><a href="./tech.php">PairPath</a></li>
                    <li><a href="./tech.php">Aerothon</a></li>
                    <li><a href="./tech.php">Life Cycle Analysis</a></li>
                    <li><a href="./tech.php">Tinker Cad</a></li>
                    <li><a href="./tech.php">Hovercraft Race</a></li>
                    <li><a href="./tech.php">Codigo</a></li>
                    <li><a href="./tech.php">League Of Legends</a></li>
                    <li><a href="./tech.php">Code Mania</a></li>
                    <li><a href="./tech.php">Spawn The Machine</a></li>
                    <li><a href="./tech.php">Mr.&Ms. Techina</a></li>
                    <li><a href="./tech.php">Model UN</a></li>
                    <li><a href="./tech.php">ElectroLight</a></li>
                    <li><a href="./tech.php">Snake-O-Mystery</a></li>
                  </ul>
                </li>
                <li>
                  <a href="./spot.php">Spot Events</a>
                  <ul>
                    <li><a href="./spot.php">Squid Games</a></li>
                    <li><a href="./spot.php">Sarathy</a></li>
                    <li><a href="./spot.php">Fox Hunt</a></li>
                    <li><a href="./spot.php">Code Tunnel</a></li>
                    <li><a href="./spot.php">Chem-O-Rover</a></li>
                  </ul>
                </li>
              </ul>
            </li>
            <li>
              <a href="./Registration.php">Registration</a>
              <ul>
                <li>
                  <a href="./Registration.php">Basic Registration</a>
                </li>
                <li>
                  <a href="./Registration.php">Event Registration</a>
                </li>
                <li>
                  <a href="./Registration.php">How to Register?</a>
                </li>
              </ul>
            </li>
            <li><a href="./accommodation.php">Accomdation</a></li>
            <li><a href="./login.php">LogIn</a></li>
          </ul>
        </li>

        <li class="sitemap-aux">
          <ul>
            <li>
              <a href="./contact.php">Contact</a>
            </li>
            <li>
              <a href="#">Feedback</a>
            </li>
            <li>
              <a href="javascript: document.body.scrollIntoView(false);">Address Info</a>
            </li>
          </ul>
        </li>
      </ul>

    </div>

    <?php
    include './footer.php';
    ?>
    <div id="adderss"></div>
  

<script src="./assets/js/d_insp.js"></script>

</body>
</html>
