<?php

function emptyInput($email, $jtitle, $location, $jtype, $jDescription, $companyname,
$companydescription, $weblink, $state, $zibcode) {
  $result;
  if (empty($email) || empty($jtitle) || empty($location) || empty($jtype) || empty($jDescription) ||
  empty($companyname) || empty($companydescription) || empty($weblink)  || empty($state) || empty($zibcode) ) {

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
