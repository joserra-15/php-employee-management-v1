<?php

require("loginManager.php");

if (isset($_REQUEST["email"])) {
  if ($user = validateUser($_REQUEST["email"], $_REQUEST["password"])) {
    saveSessionData($user);
    $url = '../dashboard.php';
    header('Location: ' . $url);
    exit();
  } else {
    header("Refresh: 0; URL=../../index.php?error=Incorrect credentials");
    exit();
  }
} else if (isset($_REQUEST["logout"])) {
  logout(false, '../');
}