<?php
session_start();
 ?>


<!DOCTYPE html>

<html>
<head>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">


<link href="layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
<link href="layout/styles/postajob.css" rel="stylesheet" type="text/css" media="all">
<link href="layout/styles/contactus.css" rel="stylesheet" type="text/css" media="all">
<link href="layout/styles/sign.css" rel="stylesheet" type="text/css" media="all">
<link href="layout/styles/createCv.css" rel="stylesheet" type="text/css" media="all">


<!-- Font Icon  signin and up-->
<link rel="stylesheet" href="layout/fonts/material-icon/css/material-design-iconic-font.min.css">


<!-- the logo in window-->
<title>JOB MATCH</title>
<link rel="icon" type="image/png" href="images/demo/logo_.jpg">


<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
rel="stylesheet"
integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
crossorigin="anonymous">


<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.4/jspdf.min.js"></script>



</head>
<body id="top">

<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- Top Background Image Wrapper -->
<div class="bgded overlay" style="background-image:url('images/demo/backgrounds/jobjob2.jpg');">
  <!-- ################################################################################################ -->
  <div class="wrapper row1">
    <header id="header" class="hoc clear">
      <!-- ################################################################################################ -->
      <div id="logo" class="fl_left">
        <a href="index.php"><img src="images/demo/logo_fyp.png" alt="" ></a>
      </div>

      <nav id="mainav" class="fl_right">
        <ul class="clear">
          <li class="active"><a href="index.php">Home</a></li>
          <li><a class="" href="postajob.php">Post A Job</a> </li>
          <li><a class="" href="applytojob.php">Apply</a> </li>
          <li><a class="" href="create.php">Create Cv</a> </li>
          <li><a class="" href="contact.php">Contact us</a> </li>

          <?php

          if (isset($_SESSION["u_uid"])) {
            echo "<li><a href ='profile.php'>profile </a></li><br>";
          }

          else {
            echo "<li><a href ='signin.php'>Sign up/Log in</a> </li><br>";

          }
           ?>


        </ul>
      </nav>
      <!-- ################################################################################################ -->
    </header>
  </div>
  <!-- ################################################################################################ -->
