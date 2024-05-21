<!DOCTYPE html>

<html>
<head>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
<link href="layout/styles/postajob.css" rel="stylesheet" type="text/css" media="all">

<link href="https://fonts.googleapis.com/css?family=Poppins:400,600&display=swap" rel="stylesheet">
<link rel='stylesheet' href='https  ://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css'>

<link href="https://fonts.googleapis.com/css?family=Poppins:400,600&display=swap" rel="stylesheet">
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css'>


<title>JOB MATCH</title>
<link rel="icon" type="image/png" href="images/demo/logo_.jpg">


<style>
.logoCom img {
  width: 30%;
  height: auto;
  display: block;
margin-left: auto;
margin-right: auto;
}
</style>





</head>

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
          <li><a class="" href="signin.php">Sign up/Log in</a> </li>

        </ul>
      </nav>
    </header>
  </div>
  </div>
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->

  <div class="container">
    <h2 align="center">GOOGLE, Data Science</h2><br />

    <div class="logoCom">
      <img src="images/app01.png" alt="">
    </div>

    <h3>Job Description</h3>

    <p><br><b>About Google</b> <br><br>
      Google is an internet search engine. It uses a proprietary algorithm that's designed to retrieve and order search results to
       provide the most relevant and dependable sources of data possible. <br>Google's stated mission is to "organize the world's information
       and make it universally accessible and useful." It is the top search engine in the world, a position that has generated
       criticism and concern about the power it has to influence the flow of online information.<br><br>Google is so dominant that the term
       "Google" can also be used as a verb, so that when someone searches for something on Google, they may say they "Googled" it.
       <br><br><b> Data Scientist</b><br>

       Your client’s eyes probably glaze over when you discuss in detail logistic regression, cluster analysis,
      <span id="dots">...</span><span id="more">neural nets and other segmentation models, but they certainly
        appreciate your uncanny ability to utilize those to lower their marketing costs and improve marketing
        effectiveness. Or perhaps they rely on you to provide analytics that stimulate sales, strengthen customer
        loyalty and generate purchases. If you’ve earned a reputation for your analytics expertise, Accenture
         may be the perfect place to take the next step in your career journey..<br><br>
       As a Data Science professional, the individual will help drive sales and solutioning of data science/analytics engagements,
       manage and/or supervise project delivery, mentor teams, build new capabilities, support/contribute to thought leadership and
       building new skills. The candidate should be able to seamlessly work with Client teams in positioning data science/analytical
       capabilities and with help of them drive an deliver data science/analytics engagement.</span></p>
<button onclick="myFunction()" id="myBtn">Read more</button><br>
<div class="center">
<td class="" onclick=""><a href="filesUpload.php">Apply</a></td>

</div>




<script>
function myFunction() {
  var dots = document.getElementById("dots");
  var moreText = document.getElementById("more");
  var btnText = document.getElementById("myBtn");

  if (dots.style.display === "none") {
    dots.style.display = "inline";
    btnText.innerHTML = "Read more";
    moreText.style.display = "none";
  } else {
    dots.style.display = "none";
    btnText.innerHTML = "Read less";
    moreText.style.display = "inline";
  }
}
</script>

  </div>
  <?php
  include_once 'footer.php'
   ?>

</body>
</html>
