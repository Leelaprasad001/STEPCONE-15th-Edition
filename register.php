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
        // echo "temp value is";

        // var_dump($temp);
        array_push($eventsData, $temp);
    }
}
// echo "hello";
// var_dump(count($eventsData));

?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
  <form class="py-5" action="./includes/userAPI.php" method="POST" enctype="multipart/form-data">
                        <div class="mb-3">
                            <label for="InputEmail1" class="form-label ">Email address</label>
                            <input type="email" class="form-control" id="InputEmail1" aria-describedby="emailHelp" name="email" value="<?php echo $_SESSION['mail']; ?>" disabled required>
                            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                        </div>
                        <select class="custom-select">
  <option selected>Open this select menu</option>
  <?php 
   foreach ($eventsData as $row) {
    // var_dump($row);
    // echo $row['1'];
    echo $row['1'];
    ?>
    <option><?php echo $row[1]; ?></option>";
    <?php
}
  ?>
  <option value="1">One</option>
  <option value="2">Two</option>
  <option value="3">Three</option>
</select>

                        <div class="mb-3">
                            <select class="form-select  mb-3" aria-label=".form-select-lg example" name="type" required>
                                <option selected>Choose Registration Type</option>
                              <?php
                              
                              foreach ($eventsData as $row) {
                                // var_dump($row);
                                // echo $row['1'];
                                echo $row['1'];
                                echo "<p><?php echo $row[1]; ?></p>";
                            }

                              ?>  
                            </select>
                        </div>
                        
                        <?php
                             
                                foreach ($eventsData as $row) {
                                    // var_dump($row);
                                    foreach ($row as $valued) {
                                        // dvar_dump($value);
                                        
                                        // echo '<p>hello</p>';
                                    }
                                }
                                ?>

    </form>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>