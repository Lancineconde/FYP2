<!DOCTYPE html>

<html>
<head>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
<link href="layout/styles/createCv.css" rel="stylesheet" type="text/css" media="all">

<link href="https://fonts.googleapis.com/css?family=Poppins:400,600&display=swap" rel="stylesheet">
<link rel='stylesheet' href='https  ://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css'>

<link href="https://fonts.googleapis.com/css?family=Poppins:400,600&display=swap" rel="stylesheet">
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css'>


<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
rel="stylesheet"
integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
crossorigin="anonymous">


<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.4/jspdf.min.js"></script>


<title>JOB MATCH</title>
<link rel="icon" type="image/png" href="images/demo/logo_.jpg">
</head>
<body>

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


  <body>
    <div  class="container" id="cv-form">
    <h1 class="text-center my-5">Resume Generator</h1>

    <div class="row">
        <div class="col-md-6">
            <!-- !first col -->
            <h3>Personal Information</h3>

            <div class="form-group">
                <label for="">Your Full Name</label>
                <input type="text" id="nameField" class="form-control" placeholder=""/>
            </div>


            <div class="form-group">
                <label for="">Your Contact</label>
                <input type="text" id="contact" class="form-control" placeholder="Your Contact Number"/>
            </div>

            <div class="form-group">
                <label for="">Your Address</label>
                <textarea id="address" class="form-control" placeholder="" rows=""></textarea>
            </div>

            <div class="form-group mt-3">
                <label for="">Select your Profile picture</label>
                <input id="imgField" type="file" class="form-control">


            </div>

            <p class="text-secondary my-3"> Important Links</p>

            <div class="form-group">
                <label for="">Your Email </label>
                <input type="text" id="wbField" class="form-control" placeholder="email"/>
            </div>

            <div class="form-group">
                <label for="">LinkedIn</label>
                <input type="text" id="ldField" class="form-control" placeholder="Your LinkedIn Page"/>
            </div>

        </div>


        <div class="col-md-6">
            <!-- Secound col -->
            <h3>Professinal Information</h3>

            <div class="form-group">
                <label for="">Objective</label>
                <textarea  id="objectiveField"  class="form-control" placeholder="Enter here " rows=""></textarea>
            </div>

            <div class="form-group mt-2" id="we">
                <label for="">Work Experience</label>
                <textarea class="form-control weField" placeholder="Enter here" rows=""></textarea>

                <!-- new textarea -->

             <div class="container text-center mt-2 " id="weAddButton">
                <button onclick="addNewWEField()" class="btn btn-primary btn-sm"> Add </button>
             </div>

            </div>

            <!-- End -->

        <div class="form-group mt-2" id="aq">
            <label for="">Academic Qualification</label>
            <textarea class="form-control aqField" placeholder="Enter here" rows=""></textarea> </textarea>

        <div class="container text-center mt-2" id="aqAddButton">
            <button onclick="addNewAQField()" class="btn btn-primary btn-sm"> Add</button>
        </div>

        </div>
        <!-- End -->


        </div>
    </div>

    <div class="container text-center mt-3">
        <button onclick="generateCV()"  class="btn btn-primary btn-lg"> Generate CV</button>
    </div>
</div>



<!-- cv template -->

<div class="container" id="cv-template">
    <div class="row">
        <div class="col-md-4 text-center py-5 background">
            <!-- First col-->

            <img src="https://campussafetyconference.com/wp-content/uploads/2020/08/iStock-476085198.jpg"
            alt="" class="img-fluid myimg" id="imgT">

            <div class="container">
                <p id="nameT1">Ramzi Maresh Ahmed </p>
                <p id="contactT">+601161661517, +00966501976418</p>
                <p id ="addressT">Malaysia, Kuala Lumpuer - Gombak- 53100</p>

                <hr>

                <p><a id="wbT" href="">http://www.web.com/ramziahmed</a></p>
                <p><a id="ldT" href="">http://www.linkedin.com/ramziahmed</a></p>

            </div>
        </div>

        <div class="col-md-8 py-1" style="font-weight: 600px;">
            <!-- Secound col-->
            <h1 id="nameT2" class="text-center"> Ramzi Maresh Ahmed </h1>

            <div class="card mt-4">
                <div class="card-header background">
                    <h3>Objectives</h3>
                </div>
                <div class="cardbody">
                    <p id="objectiveT">Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                        Amet a fugiat corporis nihil cumque ipsam labore minima rerum,
                        maiores nulla sunt beatae vel suscipit repellat repellendus
                        dolores distinctio nesciunt optio harum quae, odio, saepe quidem est.
                         Necessitatibus et, error alias ad eligendi laborum doloribus,
                         nobis veniam minus temporibus, obcaecati quidem.</p>
                </div>
            </div>


            <!-- Work Exper-->

            <div class="card mt-4">
                <div class="card-header background">
                    <h3>Work Experience</h3>
                </div>
                <div class="cardbody">

                    <ul id="weT">
                        <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa, doloremque?</li>
                        <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa, doloremque?</li>
                        <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa, doloremque?</li>
                        <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa, doloremque?</li>

                    </ul>
                </div>
            </div>

                            <!-- Academic Qualification-->

                            <div class="card mt-4">
                                <div class="card-header background">
                                    <h3>Acadimic Qualification</h3>
                                </div>
                                <div class="cardbody">

                                    <ul id="aqT">
                                        <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa, doloremque?</li>
                                        <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa, doloremque?</li>
                                        <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa, doloremque?</li>
                                        <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa, doloremque?</li>

                                    </ul>
                                </div>
                            </div>

                            <div class="container mt-3 text-center">
                                <button onclick="printCV()" class="btn background">Save/Print</button>
                            </div>

        </div>
    </div>
</div>
</div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
    crossorigin="anonymous"></script>


  <!-- footer start
   ################################################################################################ -->
   <?php
   include_once 'footer.php'
    ?>



  <script src="layout/scripts/createCv.js"></script>
</body>
</html>
