<?php

function emptyInputSignup($fname, $lname, $email, $uid, $pass, $re_pass, $agreet) {
  $result;
  if (empty($fname) || empty($lname) || empty($email) || empty($uid) || empty($pass) || empty($re_pass) || empty($agreet)) {
    $result = true;
  }
  else {
    $result = false;
  }
  return $result;
}


function invalidUid($uid) {
  $result;
  if (!preg_match("/^[a-zA-Z0-9]*$/", $uid)) {
    $result = true;
  }
  else {
    $result = false;
  }
  return $result;
}


function invalidEmail($email) {
  $result;
  if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $result = true;
  }

  else {
    $result = false;
  }
  return $result;
}


function pwdMatch($pass, $re_pass) {
  $result;
  if ($pass !== $re_pass) {
    $result = true;
  }
  else {
    $result = false;
  }
  return $result;
}


function uidExists($conn, $uid, $email) {
  $sql = "SELECT * FROM usersign Where u_uid = ? OR u_email = ?;";
  $stmt = mysqli_stmt_init($conn);
  if (!mysqli_stmt_prepare($stmt, $sql)) {
    header("location: ../signin.php?error=stmtfailed");
    exit();
  }


  mysqli_stmt_bind_param($stmt, "ss", $uid, $email);
  mysqli_stmt_execute($stmt);

  $resultData = mysqli_stmt_get_result($stmt);

  if ($row = mysqli_fetch_assoc($resultData)) {
    return $row;
  }

  else {
    $result = false;
    return $result;
  }

  mysqli_stmt_close($stmt);
}


function createUser ($conn, $fname, $lname, $email, $uid, $pass, $agreet) {
  $sql = "INSERT INTO usersign (u_fname, u_lname, u_email, u_uid, u_pass, u_agreet) VALUES (
    ?, ?, ?, ?, ?, ?);";
  $stmt = mysqli_stmt_init($conn);
  if (!mysqli_stmt_prepare($stmt, $sql)) {
    header("location: ../signin.php?error=stmtfailed");
    exit();
  }

  $hashedPwd = password_hash($pass, PASSWORD_DEFAULT);

  mysqli_stmt_bind_param($stmt, "ssssss", $fname, $lname, $email, $uid, $hashedPwd, $agreet);
  mysqli_stmt_execute($stmt);

  mysqli_stmt_close($stmt);
  header("location: ../signin.php?error=none");
  exit();
}


function emptyInputLogin($uid, $pass) {
  $result;
  if (empty($uid) || empty($pass)) {
    $result = true;
  }
  else {
    $result = false;
  }
  return $result;
}

function loginUser($conn, $uid, $pass) {

  $uidExists = uidExists($conn, $uid, $username);

  if ($uidExists === false) {
    header("location: ../login.php?error=wronglogin");
    exit();
  }

  $pwdhashed = $uidExists["u_pass"];
  $checkPwd = password_verify($pass, $pwdhashed);

  if ($checkPwd === false) {
    header("location: ../login.php?error=wronglogin");
    exit();
    }

    else if ($checkPwd === true) {
      session_start();
      $_SESSION["userid"] = $uidExists["u_id"];
      $_SESSION["uid"] = $uidExists["u_uid"];

      header("location: ../index.php");
      exit();
}
}
