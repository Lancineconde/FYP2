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



<!--<div class="details2">
  <header class="header">
    <h1 class="header__title">Post A Job ..................</h1>
  </header>
</div>
-->
  <!--PEN CONTENT     -->
  <div class="content">
    <!--content inner-->
    <div class="content__inner">

      <div class="container overflow-hidden">
        <!--multisteps-form-->
        <div class="multisteps-form">
          <!--progress bar-->
          <div class="row">
            <div class="col-12 col-lg-8 ml-auto mr-auto mb-4">
              <div class="multisteps-form__progress">
                <button class="multisteps-form__progress-btn js-active" type="button" title="User Info">Job details</button>
                <button class="multisteps-form__progress-btn" type="button" title="Address">Company details</button>
                <button class="multisteps-form__progress-btn" type="button" title="Comments">Comments</button>
              </div>
            </div>
          </div>
          <!--form panels-->
          <div class="row">
            <div class="col-12 col-lg-8 m-auto">
              <form class="multisteps-form__form" action="includes/jpost.inc.php" method="POST" enctype="multipart/form-data">
                <!--single form panel-->
                <div class="multisteps-form__panel shadow p-4 rounded bg-white js-active" data-animation="scaleIn">
                  <h3 class="multisteps-form__title">Job Details</h3>
                  <div class="multisteps-form__content">

                    <div class="form-row mt-4">
                      <div class="col-12 col-sm-6">
                        <input class="multisteps-form__input form-control" type="text" name="email" placeholder="Email"/>
                      </div>
                      <div class="col-12 col-sm-6 mt-4 mt-sm-0">
                        <input class="multisteps-form__input form-control" type="text" name="jtitle" placeholder="Job title"/>
                      </div>
                    </div>

                    <div class="form-row mt-4">
                      <div class="col-12 col-sm-6">
                        <input class="multisteps-form__input form-control" type="text"  name="location" placeholder="Location"/>
                      </div>
                      <div class="col-6 col-sm-3 mt-4 mt-sm-0">
                        <select  name="jtype" class="multisteps-form__select form-control">
                          <option selected="selected">Job Type</option>
                          <option value="Full time">Full time</option>
                          <option value="Part time">Part time</option>
                        </select>
                      </div>

                    </div>

                      <div class="form-row mt-4">
                        <textarea class="multisteps-form__textarea form-control" name="jDescription" placeholder="Job Description"></textarea>
                      </div>

                    <div class="button-row d-flex mt-4">
                      <button class="btn btn-primary ml-auto js-btn-next" type="button" title="Next">Next</button>
                    </div>
                  </div>
                </div>

                <!--single form panel-->
                <div class="multisteps-form__panel shadow p-4 rounded bg-white" data-animation="scaleIn">
                  <h3 class="multisteps-form__title">Company Details</h3>
                  <div class="multisteps-form__content">
                    <div class="form-row mt-4">
                      <div class="col">
                        <input class="multisteps-form__input form-control" type="text" name="companyname" placeholder="Campany Name"/>
                      </div>
                    </div>


                      <div class="form-row mt-4">
                        <textarea class="multisteps-form__textarea form-control" name="companydescription" placeholder="Company Description (Optional)"></textarea>
                      </div>

                    <div class="form-row mt-4">
                      <div class="col-12 col-sm-6">
                        <input class="multisteps-form__input form-control" type="text" name="weblink" placeholder="Website (Optional)"/>
                      </div>
                      <div class="col-6 col-sm-3 mt-4 mt-sm-0">
                        <select name="state" class="multisteps-form__select form-control">
                          <option selected="selected">State...</option>
                          <option  value="1">...</option>
                          <option  value="2">..</option>
                          <option  value="3">.</option>
                        </select>
                      </div>
                      <div class="col-6 col-sm-3 mt-4 mt-sm-0">
                        <input class="multisteps-form__input form-control" name="zibcode" type="text" placeholder="Zip Code"/>
                      </div>
                    </div>





                    <div class="button-row d-flex mt-4">
                      <button class="btn btn-primary js-btn-prev" type="button" title="Prev">Prev</button>
                      <button class="btn btn-primary ml-auto js-btn-next" type="button" title="Next">Next</button>
                    </div>
                  </div>
                </div>
                <!--single form panel-->
                <!--single form panel-->
                <div class="multisteps-form__panel shadow p-4 rounded bg-white" data-animation="scaleIn">
                  <h3 class="multisteps-form__title">Additional Comments</h3>
                  <div class="multisteps-form__content">
                    <div class="form-row mt-4">
                      <textarea class="multisteps-form__textarea form-control" placeholder="Additional Comments and Requirements"></textarea>
                    </div>


                    <div class="button-row d-flex mt-4">
                      <button class="btn btn-primary js-btn-prev" type="button" title="Prev">Prev</button>
                      <button class="btn btn-success ml-auto" type="submit" name="submit">Send</button>
                    </div>
                  </div>
                </div>
              </form>


            </div>
          </div>

        </div>
      </div>
    </div>
  </div>

<?php
  if (isset($_GET["error"])) {
    if ($_GET["error"] == "emptyinput") {
      echo '<script>alert(" Fill in all fields! ") </script>';

    }

    else if ($_GET["error"] == "invaliduid") {
      echo '<script>alert(" Choose a praper username! ") </script>';

    }

    else if ($_GET["error"] == "invalidemail") {
      echo '<script>alert(" Choose a praper email! ") </script>';

    }

    else if ($_GET["error"] == "passwordsdontmatch") {
      echo '<script>alert(" passwords dose not match...!") </script>';

    }

    else if ($_GET["error"] == "stmtfailed") {
      echo '<script>alert(" Something Went Wrong! ") </script>';

    }


    else if ($_GET["error"] == "usernametaken") {
      echo '<script>alert(" User name Already taken! ") </script>';

    }


      else if ($_GET["error"] == "none") {
        echo '<script>alert(" You have sign up. ") </script>';

      }
  }

   ?>


  <!-- partial -->

  <!-- footer start
   ################################################################################################ -->
   <?php
   include_once 'footer.php'
    ?>



  <script src="layout/scripts/postjava.js"></script>
</body>
</html>
