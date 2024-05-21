<?php
include_once 'header.php'
 ?>

  <!-- ################################################################################################ -->
  <div class="main">

      <!-- Sign up form -->
      <section class="signup">
          <div class="container">
              <div class="signup-content">
                  <div class="signup-form">
                      <h2 class="form-title">Sign up!</h2>
                      <form action="signin.php" method="POST" class="register-form" >
                          <div class="form-group">
                              <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                              <input style="color: #000000;" id="firstname" type="text" name="firstname" required  placeholder="First Name"/>
                          </div>
                          <div class="form-group">
                              <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                              <input style="color: #000000;" id="lastname"  type="text" name="lastname"   required placeholder="Last Name"/>
                          </div>

                          <div class="form-group">
                              <label for="email"><i class="zmdi zmdi-email"></i></label>
                              <input style="color: #000000;" id="email"  type="email"  required placeholder="Your Email"/>
                          </div>

                          <div class="form-group">
                              <label for="uid"><i class="zmdi zmdi-account"></i></label>
                              <input style="color: #000000;" id="phonenumber"  type="text" name="phonenumber" required  placeholder="Phone Number"/>
                          </div>

                          <div class="form-group">
                              <label for="pass"><i class="zmdi zmdi-lock"></i></label>
                              <input style="color: #000000;"  id="password"  type="password" name="password"  required  placeholder="Password"/>
                          </div>


                          <div class="form-group">
                              <input style="color: #000000;" type="checkbox" name="agreet" id="agreet" class="agree-term" />
                              <label for="agreet" class="label-agree-term"><span><span></span></span>I agree all statements in  <a href="#" class="term-service">Terms of service</a></label>
                          </div>

                          <div class="form-group form-button">
                              <input onclick="myfunction()" style="color: #000000;" type="submit" id="register" name="create" value="Sign Up"/>
                          </div>
                      </form>
                  </div>
                  <div class="signup-image">
                      <figure><img src="images/demo/signup-image.jpg" alt="sing up image"></figure>
                      <a href="login.php" class="signup-image-link">I am already member</a>
                  </div>
              </div>
          </div>

      </section>
      </div>

      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
<script type="text/javascript">
	$(function(){
		$('#register').click(function(e){

			var valid = this.form.checkValidity();

			if(valid){


			var firstname 	= $('#firstname').val();
			var lastname	= $('#lastname').val();
			var email 		= $('#email').val();
			var phonenumber = $('#phonenumber').val();
			var password 	= $('#password').val();


				e.preventDefault();

				$.ajax({
					type: 'POST',
					url: 'process.php',
					data: {firstname: firstname,lastname: lastname,email: email,phonenumber: phonenumber,password: password},
					success: function(data){
					Swal.fire({
								'title': 'Successful',
								'text': data,
								'type': 'success'
								})

					},
					error: function(data){
						Swal.fire({
								'title': 'Errors',
								'text': 'There were errors while saving the data.',
								'type': 'error'
								})
					}
				});


			}else{

			}





		});


	});

</script>



      <!-- JS -->
      <script src="vendor/jquery/jquery.min.js"></script>

  <?php
  include_once 'footer.php'
   ?>
