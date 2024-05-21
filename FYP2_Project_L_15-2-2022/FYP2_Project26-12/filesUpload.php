<!DOCTYPE html>
<html>
<head>
<title>File Upload</title>
<link href="layout/styles/filesUpload.css" rel="stylesheet" type="text/css" media="all">

<style>
.logoCom img {
  width: 60%;
  height: auto;
  display: block;
margin-left: auto;
margin-right: auto;
}
</style>

</head>
<body>



<!--
<form action="includes/files.inc.php" method="post" enctype="multipart/form-data">

  <input type="text" name="name" value="" placeholder="Full Name"><br>
  <input type="email" name="email" value="" placeholder="Email"><br>
  <input type="text" name="phone" value="" placeholder="Phone Number"><br>

<input type="file" name="file" />
<button type="submit" name="upload">upload</button>
</form>
-->

<div class="center">
  <div class="logoCom">
    <a href="index.php"><img src="images/demo/logo_fyp.png" alt=""></a>
  </div>


  <h1>Apply easily with Us!</h1>
  <form action="includes/files.inc.php" method="post" enctype="multipart/form-data">

    <div class="inputbox">
      <input type="text" name="name" value="" placeholder="">
      <span>Full Name</span>
    </div>

    <div class="inputbox">
      <input type="email" name="email" value="" placeholder="">
      <span>Email</span>
    </div>

    <div class="inputbox">
      <input type="text" name="phone" value="" placeholder="">
      <span>Phone Number</span>
    </div>

    <div class="inputbox">
      <input type="file" name="file" >
      <span>Resume</span>
    </div>
    <button type="submit" name="upload">Send</button><br><br>
    <button type="submit" name="upload"><a href="index.php">Back to home page</button></a>


  </form>
</div>



</body>
</html
