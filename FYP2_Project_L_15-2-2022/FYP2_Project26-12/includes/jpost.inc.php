<?php
include_once "dbh.inc.php";

if (isset($_POST ["submit"])) {

$email = mysqli_real_escape_string($conn, $_POST['email']);
$jtitle = mysqli_real_escape_string($conn, $_POST['jtitle']);
$location = mysqli_real_escape_string($conn, $_POST['location']);
$jtype = mysqli_real_escape_string($conn, $_POST['jtype']);
$jDescription = mysqli_real_escape_string($conn, $_POST['jDescription']);
$companyname = mysqli_real_escape_string($conn, $_POST['companyname']);
$companydescription = mysqli_real_escape_string($conn, $_POST['companydescription']);
$weblink = mysqli_real_escape_string($conn, $_POST['weblink']);
$state = mysqli_real_escape_string($conn, $_POST['state']);
$zibcode = mysqli_real_escape_string($conn, $_POST['zibcode']);



$sql = "INSERT INTO receiveposts(
  j_email, j_title, j_location, j_type, j_description,
j_companyname, j_companydescription, j_website, j_state, j_zibcode)

VALUES('$email','$jtitle', '$location', '$jtype', '$jDescription', '$companyname',
'$companydescription', '$weblink', '$state', '$zibcode');";

mysqli_query($conn, $sql);
header("Location: ../postajob.php?postjob=success");


require_once 'dbh.inc.php';
require_once 'funct.inc.php';


if (emptyInput($email, $jtitle, $location, $jtype, $jDescription,
$companyname, $companydescription, $weblink, $state, $zibcode) !== false) {
  header("location: ../postajob.php?error=emptyinput");
  exit();
}

if (invalidEmail($email) !== false) {
  header("location: ../postajob.php?error=invalidemail");
  exit();
}


else {
  header("location: ../postajob.php");
  exit();
}

}
