<?php

function validateUser($email, $password)
{
  $data = json_decode(file_get_contents("../../resources/users.json"), true);
  $userActive = false;

  foreach ($data["users"] as  $value) {
    if ($value["email"] == $email && password_verify($password, $value["password"])) {
      $userActive = $value;
    }
  }
  return $userActive;
}

function saveSessionData($user)
{
  session_start();

  $_SESSION["userId"] = $user["userId"];
  $_SESSION["name"] = $user["name"];
  $_SESSION["password"] = $user["password"];
  $_SESSION["email"] = $user["email"];
  $_SESSION["time"] = time();
  $_SESSION["lifeTime"] = 600;
}


function logout($message, $parentFolder = '')
{
  session_start();
  session_destroy();

  $url = $message ? "?error=$message" : "";

  header("Location: $parentFolder../index.php$url");
  exit();
}
