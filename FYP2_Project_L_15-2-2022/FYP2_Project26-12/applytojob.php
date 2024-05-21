<!DOCTYPE html>

<html>
<head>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">


<link href="layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
<link href="layout/styles/postajob.css" rel="stylesheet" type="text/css" media="all">
<link href="layout/styles/contactus.css" rel="stylesheet" type="text/css" media="all">
<link href="layout/styles/sign.css" rel="stylesheet" type="text/css" media="all">


<!-- Font Icon  signin and up-->
<link rel="stylesheet" href="layout/fonts/material-icon/css/material-design-iconic-font.min.css">


<!-- the logo in window-->
<title>JOB MATCH</title>
<link rel="icon" type="image/png" href="images/demo/logo_.jpg">


<!-- apply pat files-->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Ajax Live Data Search using Multi Select Dropdown in PHP</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" />

<link href="layout/styles/apply css/css/bootstrap-select.min.css" rel="stylesheet" />
<script src="layout/styles/apply css/js/bootstrap-select.min.js"></script>
<!-- end-->

</head>

 <?php
 //index.php

 $connect = new PDO("mysql:host=localhost;dbname=fyp2_project", "root", "");
 $query = "SELECT DISTINCT j_title FROM receiveposts ORDER BY j_id ASC";
 $statement = $connect->prepare($query);
 $statement->execute();
 $result = $statement->fetchAll();
 ?>

 <body>

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
             <li><a class="" href="signin.php">Sign up/Log in</a> </li><br>


           </ul>
         </nav>
         <!-- ################################################################################################ -->
       </header>
     </div></div>
     <!-- ################################################################################################ -->


   <div class="container">
     <br />
     <h2 align="center">Select Dropdown To Find Your Job Faster</h2><br />

     <select name="multi_search_filter" id="multi_search_filter" multiple class="form-control selectpicker">
     <?php
     foreach($result as $row)
     {
       echo '<option value="'.$row["j_title"].'">'.$row["j_title"].'</option>';
     }
     ?>
     </select>
     <input type="hidden" name="hidden_country" id="hidden_country" />
     <div style="clear:both"></div>
     <br />
     <div class="table-responsive">
       <table class="table table-striped table-bordered">
         <thead>
           <tr>
             <th>Job Title</th>
             <th>Job Location</th>
             <th>Postal Code</th>
             <th>Job Type(Full/Part time)</th>
             <th>Company Name</th>
             <th> <button type="button" name="button">Apply</button> </th><br>
           </tr>
         </thead>
         <tbody>
         </tbody>
       </table>
     </div>
     <br />
     <br />
     <br />
   </div>
 </body>
</html>


<script>
$(document).ready(function(){

 load_data();

 function load_data(query='')
 {
   $.ajax({
     url:"fetch.php",
     method:"POST",
     data:{query:query},
     success:function(data)
     {
       $('tbody').html(data);
     }
   })
 }

 $('#multi_search_filter').change(function(){
   $('#hidden_country').val($('#multi_search_filter').val());
   var query = $('#hidden_country').val();
   load_data(query);
 });

});
</script>




<?php
include_once 'footer.php'
 ?>
