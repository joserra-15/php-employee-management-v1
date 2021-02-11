<?php

require("loginManager.php");

if (isset($_POST["email"])) {
  if ($user = validateUser($_POST["email"], $_POST["password"])) {
    saveSessionData($user);
    $url = '../dashboard.php';
    header('Location: ' . $url);
    exit();
  } else {
    header("Refresh: 0; URL=../../index.php?error=Incorrect credentials");
    exit();
  }
} else if (isset($_GET["logout"])) {
  logout(false, '../');
}
