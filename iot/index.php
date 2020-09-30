<!DOCTYPE html>
<html lang="en">

<head>
  <title>Class Connect LMS </title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.css">
  <link rel="stylesheet" href="css/table.css">
  <link rel="stylesheet" href="css/admin.css">

</head>
<?php
require_once("dbIoT.php");
require_once("select_functions.php");
?>
<nav class="navbar navbar-expand-sm bg-light navbar-light fixed-top">
  <h2>ClassConnect - IoT Portal </h2> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="index.php">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="index.php?login">Login</a>
      </li>
    </ul>
  </div>
</nav>
<div class="container">
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <?php
  if (isset($_POST['led'])) require("led_update.php"); //
  elseif (isset($_POST['ha'])) require("ha_update.php");
  elseif (isset($_POST['wc'])) require("web_clock.php");
  elseif (isset($_POST['st'])) require("scrollText_update.php");
  elseif (isset($_POST['ws'])) require("weather_station.php");
  elseif (isset($_POST['vs'])) require("vehicle_speed.php");
  elseif (isset($_GET['login'])) require("login.php");
  else require("index_body.php");
  ?>
</div>
<p>&nbsp;</p>
  <p>&nbsp;</p>
<div class="footer">
  <p>Designed for www.iot.classconnect.in | Complete Code and Explanation is available on www.vijayonline.in  </p>
</div>

</html>

<!-- Script -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.js"></script>
<script src="js/loginJs.js"></script>
<script src="js/haJs.js"></script>

<script>
  $(document).ready(function() {
    $(document).ajaxStart(function() {
      $("#loading").css("display", "block");
    });
    $(document).ajaxComplete(function() {
      $("#loading").css("display", "none");
    });
  });
</script>