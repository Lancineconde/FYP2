<?php

if (isset($_POST["submit"])) {

  $username = $_POST["uid"];
  $pass = $_POST["pass"];


  require_once 'dbh.inc.php';
  require_once 'functsign.inc.php';

  if (emptyInputLogin($username, $pass) !== false) {
    header("location: ../login.php?error=emptyinput");
    exit();
}

loginUser($conn, $username, $pass);
}
else {
  header("location: ../login.php");
  exit();
}